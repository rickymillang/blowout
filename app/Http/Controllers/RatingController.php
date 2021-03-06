<?php

namespace App\Http\Controllers;

use App\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function index()
    {
    	$ratings = Rating::where('establishment_id', auth()->user()->establishment->id)->orderBy('updated_at', 'DESC')->get();
    	$total_ratings_count = Rating::where('establishment_id', auth()->user()->establishment->id)->count();
    	$sum_ratings = Rating::where('establishment_id', auth()->user()->establishment->id)->sum('rating');
    	$one_star_ratings = Rating::where('rating', 1)->where('establishment_id', auth()->user()->establishment->id)->count();
    	$two_star_ratings = Rating::where('rating', 2)->where('establishment_id', auth()->user()->establishment->id)->count();
    	$three_star_ratings = Rating::where('rating', 3)->where('establishment_id', auth()->user()->establishment->id)->count();
    	$four_star_ratings = Rating::where('rating', 4)->where('establishment_id', auth()->user()->establishment->id)->count();
    	$five_star_ratings = Rating::where('rating', 5)->where('establishment_id', auth()->user()->establishment->id)->count();

    	if ($total_ratings_count) {
    		$average_rating = $sum_ratings / $total_ratings_count;
    	} else {
    		$average_rating = 0;
    	}


    	return view('ratings.index', compact('ratings', 'sum_ratings', 'average_rating', 'total_ratings_count', 'one_star_ratings', 'two_star_ratings', 'three_star_ratings', 'four_star_ratings', 'five_star_ratings'));
    }

    public function store(Request $request,$id){

        $result = false;

        $rating = Rating::create([
                    'user_id' => (int) $request->user_id,
                    'establishment_id' => $id,
                    'rating' => (double) $request->rate
                ]);

        if($rating){
            $result = true;
        }

        return json_encode($request->all());

    }
}
