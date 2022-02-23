<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorequestionsRequest;
use App\Http\Requests\UpdatequestionsRequest;
use App\Models\questions;
use App\Models\answers;
use Illuminate\Http\Request;

class QuestionsController extends Controller
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
     * @param  \App\Http\Requests\StorequestionsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorequestionsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function show(questions $questions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function edit(questions $questions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatequestionsRequest  $request
     * @param  \App\Models\questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatequestionsRequest $request, questions $questions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function destroy(questions $questions)
    {
        //
    }

    public function getQuestions(Request $request)
    {
        $count = $request->count ?? 10;
        $questions = Questions::inRandomOrder()->limit($count)->orderBy('id', 'asc')->get();
        return response()->json([
            'success' => true,
            'questions' => $questions,
        ]);
    }

    public function submitQuestions(Request $request)
    {
        $ids = $request->answerResults->pluck('id');
        $answers = Answers::whereIn('id', $ids)->get();;
        return response()->json([
            'success' => true,
            'answers' => $answers,
        ]);
    }
}
