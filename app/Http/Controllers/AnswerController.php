<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnswerController extends Controller
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $request->dd();
        $request->validate([
            'body' => 'required|min:3|max:65535',
            'question_id' => 'required|exists:questions,id',
            'user_id' => 'required|exists:users,id'
        ]);
        $answer = Answer::create($request->all());

        return redirect()->route('qusetions.show', $answer->question->slug)->with([
            'success' => 'Answer Addedd Successfully'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function accepted(Request $request)
    {
        if ($request->user_id == Auth::id()) {

            $answer = Answer::findOrFail($request->answer_id);
            $accepted = $answer->accepted;

            if (is_null($accepted)) {
                $answer->accepted = 1;
                $answer->save();
                   return redirect()->back();
            }
            else {
                $answer->accepted = null;
                $answer->save();
                return redirect()->back();
            }

        } else abort(403);
    }
}
