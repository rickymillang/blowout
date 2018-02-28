<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Establishment;
use App\Rating;
use App\EstablishmentType;

class PageController extends Controller
{
    public function __construct(){
        $this->establishments = Establishment::where('status',1)->get();

    }

        public function lists(){

            return view('pages.establishment')
                        ->with('establishments',$this->establishments);
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
}
