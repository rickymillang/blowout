<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
        public function lists(){
            return view('pages.establishment');
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
