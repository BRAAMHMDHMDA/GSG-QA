<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\QuestionTag;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class QusetionController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'])->except('index');
    }


    public function index()
    {
        return view('website.home')->with([
           'qusetions' => Question::with('tags')->latest()->paginate(),
        ]);
    }


    public function create()
    {
        return view('website.ask-question');
    }


    public function store(Request $request)
    {
        $user_id = Auth::id();
        $request->merge([
            'user_id' => $user_id
        ]);
        $question = Question::create($request->all());
        $tags = explode(',', $request->tags);
        foreach ($tags as $tag){
            $returnTag = Tag::firstOrCreate(
                ['name' => $tag],
                ['slug' => Str::slug($tag)]
            );
            QuestionTag::create([
                'tag_id' => $returnTag->id,
                'question_id' => $question->id ,
            ]);
        }

        return redirect()->route('qusetions.index')->with([
            'success' => 'Question Posted Successfully'
        ]);

    }


    public function show($id)
    {
        return view('website.question-details')->with([
            'question' =>   Question::findOrFail($id)->load('tags'),
        ]);
    }


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
        //
    }
}
