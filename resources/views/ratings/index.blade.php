@extends('layouts.app')

@section('heading', 'View Ratings')

@section('content')
    <h3>
        Ratings count: {{ $total_ratings_count }}
    </h3>
    <h3>
        Average rating: {{ round($average_rating, 2) }} <span class="fa fa-star"></span>
    </h3>

    1 <span class="fa fa-star"></span>
    <div class="progress" style="margin-bottom:0;">
      <div class="progress-bar" role="progressbar" aria-valuenow="{{ round(($one_star_ratings / $total_ratings_count) * 100, 2) }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ round(($one_star_ratings / $total_ratings_count) * 100, 2) }}%;">
        {{ $one_star_ratings }}
      </div>
    </div>
    2 <span class="fa fa-star"></span>
    <div class="progress">
      <div class="progress-bar" role="progressbar" aria-valuenow="{{ round(($two_star_ratings / $total_ratings_count) * 100, 2) }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ round(($two_star_ratings / $total_ratings_count) * 100, 2) }}%;">
        {{ round(($two_star_ratings / $total_ratings_count) * 100, 2) }}
      </div>
    </div>
    3 <span class="fa fa-star"></span>
    <div class="progress">
      <div class="progress-bar" role="progressbar" aria-valuenow="{{ round(($three_star_ratings / $total_ratings_count) * 100, 2) }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ round(($three_star_ratings / $total_ratings_count) * 100, 2) }}%;">
        {{ round(($three_star_ratings / $total_ratings_count) * 100, 2) }}
      </div>
    </div>
    4 <span class="fa fa-star"></span>
    <div class="progress">
      <div class="progress-bar" role="progressbar" aria-valuenow="{{ round(($four_star_ratings / $total_ratings_count) * 100, 2) }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ round(($four_star_ratings / $total_ratings_count) * 100, 2) }}%;">
        {{ round(($four_star_ratings / $total_ratings_count) * 100, 2) }}
      </div>
    </div>
    5 <span class="fa fa-star"></span>
    <div class="progress">
      <div class="progress-bar" role="progressbar" aria-valuenow="{{ round(($five_star_ratings / $total_ratings_count) * 100, 2) }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ round(($five_star_ratings / $total_ratings_count) * 100, 2) }}%;">
        {{ round(($five_star_ratings / $total_ratings_count) * 100, 2) }}
      </div>
    </div>
    <hr />
    @foreach($ratings as $rating)
        <h4>
            {{ $rating->user->name }} rated {{ $rating->rating }} <span class="fa fa-star"></span> on {{ $rating->updated_at->toFormattedDateString() }}
        </h4>
    @endforeach
@endsection

@section('custom_css')
    <style>
        .progress {
            margin-bottom: 5px;
        }
    </style>
@endsection