<?php

namespace App\Http\Controllers;

use App\Establishment;
use App\Package;
use App\Service;
use Illuminate\Http\Request;
use App\Cart;
use App\Product;
use App\User;
use App\ProductOrder;
use App\Order;
use App\PaymentMethod;
use Carbon\Carbon;
use Semaphore;
use Illuminate\Support\Facades\DB;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * add item to cart template
     */
    public function store(Request $request)
    {
        if($request->item_type == 1) {
            $quantity = $request->quantity;
        }else{
            $quantity = 1;
        }

        $establishment = Establishment::find($request->establishment_id);

        $cart = Cart::where('item_id',$request->id)->where('organize_from')->first();

        if(count($cart) > 0){
            $cart->update([
                'quantity' => $cart->quantity + $quantity
            ]);

            $cart->save();

            $exist = 1;
        }else {

            $cart = Cart::create([
                'item_id' => $request->id,
                'item_type' => $request->item_type,
                'quantity' => $quantity,
                'user' => auth()->user()->id,
                'organize_from' => 1
            ]);

            $exist = 0;
        }

        return json_encode([
                            'cart' => $cart,
                            'image' => $request->item_type == 1?$cart->getItem->image : $establishment->image,
                            'name' => $cart->getItem->name,
                            'price' => $cart->getItem->price,
                            'exist' => $exist,
                            'add_amount' => number_format(($cart->getItem->price * $quantity),2)
                        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cart = Cart::find($id);

        $quantity = $cart->quantity;
        $cart_amount = $cart->getItem->price * $cart->quantity;

        $cart->delete();
        return json_encode([
            'cart' => $cart,
            'amount' => $cart_amount,
            'quantity' => $quantity
        ]);
    }

    public function delete_all(Request $request){

        $cart = Cart::where('user',$request->user_id)->delete();

        return redirect()->back();
    }


    /**
     * add item to cart scratch
     */


    public function getProductDetails(Request $request,$id){

        $item_type = 1;

        if($item_type == 1) {
            $quantity = $request->quantity;
        }else{
            $quantity = 1;
        }

        $product = Product::find($id);

        $cart = Cart::where('item_id',$request->id)->where('organize_from',2)->first();

        if(count($cart) > 0){
            $cart->update([
                'quantity' => $cart->quantity + $quantity
            ]);

            $cart->save();

            $exist = 1;
        }else {

            $cart = Cart::create([
                'item_id' => $request->id,
                'item_type' => $item_type,
                'quantity' => $request->quantity,
                'user' => auth()->user()->id,
                'organize_from' => 2
            ]);

            $exist = 0;
        }

        return json_encode(['product'=>$product,
                            'cart'=> $cart,
                            'exist' => $exist
                    ]);
    }

    public function getProductList(Request $request,$id){

        $cart = Cart::where('user',$id)->get();

        $cart_list = [];

        /*foreach($cart as $c){
            $cart['id'] = $cart->id;
            $cart
        }*/

        return json_encode(['cart'=>$cart]);
    }

    public function getCartScratchSummary(Request $request,$id){

        $cart = DB::table('cart as c')
                    ->select('c.item_id',
                             'c.item_type',
                             'c.quantity',
                             'c.user',
                             'c.organize_from',
                             'p.name',
                             'p.price',
                             'p.image'
                            )
                    ->join('products as p','p.id','=','c.item_id')
                    ->where('c.user',$id)
                     ->where('c.organize_from',2)
                    ->get();



        return json_encode(['cart' => $cart]);
    }

    public function getSetUpProductList(Request $request,$id){
        $result = '';

        $establishment = Establishment::find($id);

        if($request->setup == 2) {

            foreach ($establishment->product_types as $pt) {

                $result .= '<button id="pt' . $pt->id . '" onclick="show_product_list(' . $pt->id . ');" class="btn btn-info btn-block">' . $pt->name . '</button>
                            <input type="hidden" value="'.$id.'" id="establishment_id">
                            <div class="table product_type_list' . $pt->id . '" id="plist" style="display:none">
                              <button class="btn btn-success btn-block">' . $pt->name . 'Selection</button>

                               <table class="table table-collapsed" id="table_scratch">
                                    <thead>
                                        <tr>
                                            <th ></th>
                                            <th >Item Name</th>
                                            <th >Price</th>
                                            <th >Quantity</th>
                                            <th ></th>
                                        </tr>
                                    </thead>
                                    <tbody>';

                foreach ($establishment->products->where('product_type_id', $pt->id) as $product) {

                    $result .= '<tr>
                 <td><img src="' . asset("storage/" . $product->image) . '" style="max-width:100px;" height="30px" width="30px"></td>
                 <td>' . $product->name . '</td>
                 <td>' . $product->price . '</td>
                 <td><input type="number" id="s_productQuantity' . $product->id . '" placeholder="0" style="width:60px;"/></td>
                 <td><button class="btn btn-success" style="font-size:10px;padding:5px 10px;" onclick="add_to_cart(' . $product->id . ')"><span class="fa fa-cart-plus"></span></button></td>
             </tr>';

                }

                $result .= '</tbody>
           </table>
       </div>';
            }

            $result .= '<script>

                    function show_product_list(id){
                            $("#scratch_back").show();
                            $(".product_type_list"+id).css("display","block");
                            $(".section_product>button").hide();
                        }
                </script>';

            return $result;
        }else if($request->setup == 3){

                $result .= '<button id="pt1" onclick="show_product_list(1);" class="btn btn-info btn-block">Packages</button>';

                $result .= '<div class="table product_type_list1" id="plist" style="display:none">
                              <button class="btn btn-success btn-block">Packages Selection</button>

                               <table class="table table-collapsed" id="table_scratch">
                                    <thead>
                                        <tr>
                                            <th ></th>
                                            <th >Item Name</th>
                                            <th >Price</th>
                                            <th >Quantity</th>
                                            <th ></th>
                                        </tr>
                                    </thead>
                                    <tbody>';


            foreach ($establishment->packages as $package) {

                $result .= '<tr>
                 <td><img src="' . asset("storage/" . $package->image) . '" style="max-width:100px;" height="30px" width="30px"></td>
                 <td>' . $package->name . '</td>
                 <td>' . $package->price . '</td>
                 <td><input type="number" id="s_productQuantity' . $package->id . '" placeholder="0" style="width:60px;"/></td>
                 <td><button class="btn btn-success" style="font-size:10px;padding:5px 10px;" onclick="add_to_cart(' . $package->id . ')"><span class="fa fa-cart-plus"></span></button></td>
             </tr>';

            }



            $result .= '</tbody>
                       </table>
                   </div>';


            $result .= '<button id="pt2" onclick="show_product_list(2);" class="btn btn-info btn-block">Services</button>';

            $result .= '<div class="table product_type_list2" id="plist" style="display:none">
                              <button class="btn btn-success btn-block">Services Selection</button>

                               <table class="table table-collapsed" id="table_scratch">
                                    <thead>
                                        <tr>
                                            <th ></th>
                                            <th >Item Name</th>
                                            <th >Price</th>
                                            <th >Quantity</th>
                                            <th ></th>
                                        </tr>
                                    </thead>
                                    <tbody>';

            foreach ($establishment->services as $services) {

                $result .= '<tr>
                 <td><img src="' . asset("storage/" . $services->image) . '" style="max-width:100px;" height="30px" width="30px"></td>
                 <td>' . $services->name . '</td>
                 <td>' . $services->price . '</td>
                 <td><input type="number" id="s_productQuantity' . $services->id . '" placeholder="0" style="width:60px;"/></td>
                 <td><button class="btn btn-success" style="font-size:10px;padding:5px 10px;" onclick="add_to_cart(' . $services->id . ')"><span class="fa fa-cart-plus"></span></button></td>
             </tr>';

            }

            $result .= '</tbody>
                       </table>
                   </div>';


            return $result;
        }
    }

    public function getUserInformation(Request $request,$id)
    {
        $total_quantity = 0;
        $total_amount = [];


        $user = User::find($id);

        $cart = Cart::where('user',$id)->where('organize_from',$request->organize_from)->get();

        if($cart != null){

            foreach ($cart as $c) {
                $total_amount[] = $c->getItem->price * $c->quantity;
                $total_quantity += $c->quantity;
            }
        }

        $payment = PaymentMethod::find($request->payment_type);

        $delivery_date = Carbon::parse($request->delivery_date)->format('M d, Y h:m A' );

        return json_encode(['user'=>$user,
                            'cart'=>$cart,
                            'request' => $request->all(),
                            'payment_type' => $payment->name,
                            'delivery_date' => $delivery_date,
                            'total_amount' => number_format(array_sum($total_amount),2),
                            'total_quantity' => $total_quantity
                        ]);
    }

    public function CheckoutFromScratch(Request $request,$id){

        $result = false;

        $order = Order::create([
                'user'=> $id,
                'establishment_id' => $request->establishment,
                'payment_type' => $request->payment_type,
                'delivery_date' => Carbon::parse($request->delivery_date)->format('Y-m-d H:m:i'),
                'confirmation_number' => $request->confirmation_number,
                'delivery_address' => $request->delivery_address,
                'status' => 7
                ]);

        $item = $cart = Cart::where('user',$id)->where('organize_from',$request->organize_from)->get();

        $user = User::find($id);

        $establishment = Establishment::find($request->establishment);

        if($order){
            foreach($item as $i) {
                $product_order = ProductOrder::create([
                    'order_id' => $order->id,
                    'item_id' => $i->item_id,
                    'item_type' => $i->item_type,
                    'quantity' => $i->quantity
                ]);
            }

            $delete_item = Cart::where('user',$id)->where('organize_from',$request->organize_from)->delete();
            $result = true;

           /* Semaphore::send($establishment->phone, 'You have new order from, ' . ucfirst($user->name) . ' check your profile now!');*/

            return json_encode($result);
        }else{


            return json_encode($result);
        }


    }



    /**
     * Template functions
     *
     *
     * */

    public function getCartTemplateSummary(Request $request,$id){
        $cart = DB::table('cart as c')
            ->select('c.item_id',
                'c.item_type',
                'c.quantity',
                'c.user',
                'c.organize_from',
                'p.name',
                'p.price',
                'p.image'
            )
            ->join('products as p','p.id','=','c.item_id')
            ->where('c.user',$id)
            ->where('c.organize_from',1)
            ->get();



        return json_encode(['cart' => $cart]);
    }

    public function getTemplateUserInformation(Request $request,$id){
        $total_quantity = 0;
        $total_amount = [];


        $user = User::find($id);

        $cart = Cart::where('user',$id)->where('organize_from',$request->organize_from)->get();

        if($cart != null){

            foreach ($cart as $c) {
                $total_amount[] = $c->getItem->price * $c->quantity;
                $total_quantity += $c->quantity;
            }
        }

        $payment = PaymentMethod::find($request->template_payment_type);

        $delivery_date = Carbon::parse($request->template_delivery_date)->format('M d, Y h:m A' );

        return json_encode(['user'=>$user,
            'cart'=>$cart,
            'request' => $request->all(),
            'payment_type' => $payment->name,
            'delivery_date' => $delivery_date,
            'total_amount' => number_format(array_sum($total_amount),2),
            'total_quantity' => $total_quantity
        ]);
    }

    public function getCheckoutFromTemplate(Request $request,$id){
        $result = false;

        $order = Order::create([
            'user'=> $id,
            'payment_type' => $request->template_payment_type,
            'confirmation_number' => $request->template_confirmation_number,
            'delivery_date' => Carbon::parse($request->template_delivery_date)->format('Y-m-d H:m:i'),
            'delivery_address' => $request->template_payment_type,
            'establishment_id' => $request->establishment,
            'status' => 7
        ]);

        $item = $cart = Cart::where('user',$id)->where('organize_from',$request->organize_from)->get();


        $user = User::find($id);

        $establishment = Establishment::find($request->establishment);


        if($order){
            foreach($item as $i) {
                $product_order = ProductOrder::create([
                    'order_id' => $order->id,
                    'item_id' => $i->item_id,
                    'item_type' => $i->item_type,
                    'quantity' => $i->quantity
                ]);
            }

            $delete_item = Cart::where('user',$id)->where('organize_from',$request->organize_from)->delete();
            $result = true;

            /* Semaphore::send($establishment->phone, 'You have new order from, ' . ucfirst($user->name) . ' check your profile now!');*/


            return json_encode($result);
        }else{
            return json_encode($result);
        }
    }

    /**
     * Wizard functions
     * * */

    public function getWizardSetupProductList(Request $request,$id)
    {
        $result = '';

        $establishment = Establishment::find($id);
        $services_item_type = 2; //for item type
        $package_item_type = 3;

        $result .= '<button id="pt1" onclick="wizard_show_product_list(1);" class="btn btn-info btn-block">Packages</button>';

        $result .= '<div class="table wizard_product_type_list1" id="plist" style="display:none">
                              <button class="btn btn-success btn-block">Packages Selection</button>

                               <table class="table table-collapsed" id="table_wizard">
                                    <thead>
                                        <tr>
                                            <th ></th>
                                            <th >Item Name</th>
                                            <th >Price</th>
                                            <th >Quantity</th>
                                            <th ></th>
                                        </tr>
                                    </thead>
                                    <tbody>';


        foreach ($establishment->packages as $package) {

            $result .= '<tr>
                 <td><img src="' . asset("storage/" . $establishment->image) . '" style="max-width:100px;" height="30px" width="30px"></td>
                 <td>' . $package->name . '</td>
                 <td>' . $package->price . '</td>
                 <td><input type="number" id="w_packageQuantity' . $package->id . '" placeholder="0" style="width:60px;"/></td>
                 <td><button class="btn btn-success" style="font-size:10px;padding:5px 10px;" onclick="add_to_wizard_cart(' . $package->id . ','.$package_item_type.')"><span class="fa fa-cart-plus"></span></button></td>
             </tr>';

        }


        $result .= '</tbody>
                       </table>
                   </div>';


        $result .= '<button id="pt2" onclick="wizard_show_product_list(2);" class="btn btn-info btn-block">Services</button>
                    <input type="hidden" value="'.$id.'" id="w_establishment_id">
                    ';

        $result .= '<div class="table wizard_product_type_list2" id="plist" style="display:none">
                              <button class="btn btn-success btn-block">Services Selection</button>

                               <table class="table table-collapsed" id="table_wizard">
                                    <thead>
                                        <tr>
                                            <th ></th>
                                            <th >Item Name</th>
                                            <th >Price</th>
                                            <th >Quantity</th>
                                            <th ></th>
                                        </tr>
                                    </thead>
                                    <tbody>';

        foreach ($establishment->services as $services) {

            $result .= '<tr>
                 <td><img src="' . asset("storage/" . $establishment->image) . '" style="max-width:100px;" height="30px" width="30px"></td>
                 <td>' . $services->name . '</td>
                 <td>' . $services->price . '</td>
                 <td><input type="number" id="w_serviceQuantity' . $services->id . '" placeholder="0" style="width:60px;"/></td>
                 <td><button class="btn btn-success" style="font-size:10px;padding:5px 10px;" onclick="add_to_wizard_cart(' . $services->id . ','.$services_item_type.')"><span class="fa fa-cart-plus"></span></button></td>
             </tr>';

        }

        $result .= '</tbody>
                       </table>
                   </div>';

        $result .= '<script>

                    function wizard_show_product_list(id){
                            $("#wizard_back").show();
                            $(".wizard_product_type_list"+id).css("display","block");
                            $(".w_section_product>button").hide();
                        }
                </script>';


        return $result;
    }

    public function getWizardProductDetails(Request $request,$id){

        if($request->item_type == 2) {
            $product = Service::find($id);

            $image = $product->getEstablishment->image;
        }else{
            $product = Package::find($id);
            $image = $product->establishment->image;
        }

        $cart = Cart::where('item_id',$request->id)->where('item_type',$request->item_type)->first();

        if(count($cart) > 0){
            $cart->update([
                'quantity' => $cart->quantity + $request->quantity
            ]);

            $cart->save();

            $exist = 1;
        }else {

            $cart = Cart::create([
                'item_id' => $request->id,
                'item_type' => $request->item_type,
                'quantity' => $request->quantity,
                'user' => auth()->user()->id,
                'organize_from' => 3
            ]);

            $exist = 0;
        }

        return json_encode(['product'=>$product,
            'image'=>$image,
            'cart'=> $cart,
            'exist' => $exist
        ]);
    }

    public function getDeleteWizardCartItem(Request $request,$id){
        $cart = Cart::find($id);

        $quantity = $cart->quantity;
        $cart_amount = $cart->getItem->price * $cart->quantity;

        $cart->delete();
        return json_encode([
            'cart' => $cart,
            'amount' => $cart_amount,
            'quantity' => $quantity
        ]);
    }

    public function getCartWizardSummary(Request $request,$id){

        $cart = DB::table('cart as c')
            ->select('c.item_id',
                'c.item_type',
                'c.quantity',
                'c.user',
                'c.organize_from'/*,
                's.name as s_name',
                's.price as s_price',
                'pac.name as p_name',
                'pac.price as p_price'*/
            )
          /*  ->join('services as s', 's.id', '=', 'c.item_id')
            ->join('packages as pac', 'pac.id', '=', 'c.item_id')
            ->where()*/
            ->where('c.user',$id)
            ->where('c.organize_from',3)
            ->get();



        return json_encode(['cart' => $cart]);

    }

    public function getWizardUserInformation(Request $request,$id){
        $total_quantity = 0;
        $total_amount = [];


        $user = User::find($id);

        $cart = Cart::where('user',$id)->where('organize_from',$request->organize_from)->get();

        if($cart != null){

            foreach ($cart as $c) {
                $total_amount[] = $c->getItem->price * $c->quantity;
                $total_quantity += $c->quantity;
            }
        }

        $payment = PaymentMethod::find($request->payment_type);

        $delivery_date = Carbon::parse($request->delivery_date)->format('M d, Y h:m A' );

        return json_encode(['user'=>$user,
            'cart'=>$cart,
            'request' => $request->all(),
            'payment_type' => $payment->name,
            'delivery_date' => $delivery_date,
            'total_amount' => number_format(array_sum($total_amount),2),
            'total_quantity' => $total_quantity
        ]);
    }

    public function CheckoutFromWizard(Request $request,$id){
        $result = false;

        $order = Order::create([
            'user'=> $id,
            'establishment_id' => $request->establishment,
            'payment_type' => $request->payment_type,
            'delivery_date' => Carbon::parse($request->delivery_date)->format('Y-m-d H:m:i'),
            'delivery_address' => $request->delivery_address,
            'confirmation_number' => $request->confirmation_number,
            'status' => 7
        ]);

        $item = $cart = Cart::where('user',$id)->where('organize_from',$request->organize_from)->get();

        $user = User::find($id);

        $establishment = Establishment::find($request->establishment);

        if($order){
            foreach($item as $i) {
                $product_order = ProductOrder::create([
                    'order_id' => $order->id,
                    'item_id' => $i->item_id,
                    'item_type' => $i->item_type,
                    'quantity' => $i->quantity
                ]);
            }

            $delete_item = Cart::where('user',$id)->where('organize_from',$request->organize_from)->delete();
            $result = true;

            /* Semaphore::send($establishment->phone, 'You have new order from, ' . ucfirst($user->name) . ' check your profile now!');*/

            return json_encode($result);
        }else{


            return json_encode($result);
        }
    }

}
