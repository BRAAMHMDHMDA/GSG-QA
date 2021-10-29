<?php

namespace App\Http\Controllers;

use App\Models\CounterViews;
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


    public function index(Request $request)
    {
        return view('website.questions.home')->with([
            'qusetions' => Question::when($request->search, function ($q) use($request){
                return $q->where('title' , 'like' ,'%'. $request->search.'%');
            })->with('tags')->withCount('answers')->withCount('views')->latest()->paginate(),
        ]);
    }


    public function create()
    {
        return view('website.questions.create')->with([
            'tags' => Tag::latest('id', 'name')->get(),
        ]);
    }


    public function store(Request $request)
    {
        $user_id = Auth::id();
        $request->merge([
            'user_id' => $user_id,
            'slug' => Str::slug($request->title),
        ]);
        $question = Question::create($request->all());
        $question->tags()->attach($request->tags);
//        $tags = explode(',', $request->tags);
//
//        foreach ($tags as $tag){
//            $returnTag = Tag::firstOrCreate(
//                ['name' => $tag],
//                ['slug' => Str::slug($tag)]
//            );
//            QuestionTag::create([
//                'tag_id' => $returnTag->id,
//                'question_id' => $question->id ,
//            ]);
//        }

        return redirect()->route('qusetions.index')->with([
            'success' => 'Question Posted Successfully'
        ]);

    }


    public function show($slug)
    {
        $question = Question::where('slug' ,$slug)->first();
        $views = $question->views()->count();
        $vote_count = $question->votes()->sum('score');
        $vote = $question->votes()->where('user_id', \Auth::id())->first('score');
        $visitor_ip = \Request::ip();
//        $mac = exec('getmac');
//        dd($visitor_ip,$visitor_ip1,$mac);
        $check = $question->views()->where('ip_address', $visitor_ip)->count();
        if ($check == 0)
        {
            $question->views()->create(['ip_address' => $visitor_ip]);
            $views = $views + 1;
        }
        return view('website.questions.show')->with([
            'question' => $question->load('tags', 'comments'),
            'views' =>$views,
            'vote_count' => $vote_count,
            'score' => $vote->score ?? 0,
        ]);
    }


    public function edit($id)
    {
        $question = Question::findOrFail($id);
        foreach ($question->tags as $i => $tag) {
            $tagsID[$i] = $tag->id;
        }
        if (Auth::id() == $question->user->id) {
            return view('website.questions.edit')->with([
                'question' => $question,
                'tags' => Tag::latest('id', 'name')->get(),
                'tagsID' => $tagsID
            ]);
        } else {
            abort(401);
        }
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
        $question = Question::findOrFail($id);
        $question->update($request->all());
        $question->tags()->sync($request->tags);


        return redirect()->route('qusetions.show',$question->slug);
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
}
