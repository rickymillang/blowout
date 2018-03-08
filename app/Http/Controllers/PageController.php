<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Establishment;
use App\Rating;
use App\EstablishmentType;

class PageController extends Controller
{
    public function __construct(){
        /*$this->establishments = Establishment::where('status',1)->get();*/

    }

        public function lists($id){

            $establishments = Establishment::where('establishment_type_id',$id)->where('status',1)->get();
            return view('pages.establishment')
                        ->with('establishments',$establishments)
                        ->with('establishment_type_id',$id);
        }

        public function about_us()
        {
            return view('pages.about-us');
        }

        public function meet_the_team(){
           return view('pages.meet-the-team');
        }


     public function contact_us(){
        return view('pages.contact-us');
     }

     public function establishmentType(){
         return view('pages.establishment-type');
     }
}
