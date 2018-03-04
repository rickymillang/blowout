<?php

namespace App\Http\Controllers;

use App\Question;
use App\QuestionItem;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
    	$questions = Question::where('establishment_id', auth()->user()->establishment->id)->get();

    	return view('questions.index', compact('questions'));
    }

    public function create()
    {
    	return view('questions.create');
    }

    public function store(Request $request)
    {
    	$request->validate([
    		'question' => 'required|string'
    	]);

    	$question = Question::create([
    		'question' => $request->question,
    		'establishment_id' => auth()->user()->establishment->id
    	]);

    	session()->flash('message', 'Question has been successfully created');

    	return redirect()->back();
    }

    public function edit($id)
    {
    	$question = Question::find($id);

    	if (!$question) {
    		session()->flash('error', 'Question could not be found');

    		return redirect()->back();
    	}

    	return view('questions.edit', compact('question'));
    }

    public function update(Request $request, $id)
    {
    	$request->validate([
    		'item' => 'required|string'
    	]);

    	$question_item = QuestionItem::create([
    		'item' => $request->item,
    		'question_id' => $id,
    		'price' => $request->price
    	]);

    	session()->flash('message', 'Question item successfully added');

    	return redirect()->back();
    }
}
