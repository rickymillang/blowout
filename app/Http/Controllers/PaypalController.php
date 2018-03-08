<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payee;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;
use URL;
use Session;
use Redirect;
class PaypalController extends Controller
{
    private $_api_context;
    public function __construct(){
        $paypal_conf = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_conf['client_id'], $paypal_conf['secret']));
        $this->_api_context->setConfig($paypal_conf['settings']);
    }

    public function payProject($pay_amount,$token){
      	$data_token = $token;
        $toPay =$pay_amount;
        Session::put('pay_amount', $toPay);
        Session::put('data_token', $data_token);
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');
        
        $item_1 = new Item();
        $item_1->setName('Test')
            ->setCurrency('PHP')
            ->setQuantity(1)
            ->setPrice($toPay);
        
        $item_list = new ItemList();
        $item_list->setItems(array($item_1));
        /* $details = new Details();
        $details->setShipping($tax)
            ->setTax($tax)
            ->setSubtotal($amount); */
        
        $amount = new Amount();
        $amount->setCurrency('PHP')
            ->setTotal($toPay);
            // ->setDetails($details);
        /* $payee = new Payee();
        $payee->setEmail($user_paypal); */
        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            // ->setPayee($payee)
            ->setDescription('setDescription')
            ->setInvoiceNumber(uniqid());
        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(URL::to('establishment/list'))
            ->setCancelUrl(URL::to('establishment/list'));
           
        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));
        try{
            $payment->create($this->_api_context);
            
        }catch(\Paypal\Exception\PPConnectionException $e){
            if(\Config::get('app.debug')){
                \Session::put('error', 'Connection Timeout');
                // return Redirect::route('projects');
                return back();
            }else{
                \Session::put('error', 'An error occured');
                // return Redirect::route('projects');
                return back();
            }
        }
        foreach($payment->getLinks() as $link){
            if($link->getRel() == 'approval_url'){
                $redirect_url = $link->getHref();
                break;
            }
        }
        Session::put('paypal_payment_id', $payment->getId());
        if(isset($redirect_url)){
            return Redirect::away($redirect_url);
        }
        \Session::put('error',' Unknown error occured');
        // return Redirect::route('projects');
        return back();
    }

    public function paymentStatus(){
        $paypal_payment_id = Session::get('paypal_payment_id');
        $total = Session::get('pay_amount');
        $my_token = Session::get('data_token');
        Session::forget('paypal_payment_id');
        if(empty(Input::get('PayerID')) || empty(Input::get('token'))){
            \Session::put('error', 'Payment failed');
            // return Redirect::route('projects');
            return back();
        }
        $payment = Payment::get($paypal_payment_id, $this->_api_context);
        $execution = new PaymentExecution();
        $execution->setPayerId(Input::get('PayerID'));
        $result = $payment->execute($execution, $this->_api_context);
        if($result->getState() == 'approved'){
            \Session::put('success', 'Payment Success');
                return back();
         
        }
        \Session::put('error','Payment failed');
        // return Redirect::route('projects');
        return back();
    }

}
