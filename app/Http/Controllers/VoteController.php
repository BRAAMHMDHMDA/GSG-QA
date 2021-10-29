<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use App\Models\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VoteController extends Controller
{

//    public function store(Request $request, $type)
//    {
//        $request->validate([
//           'score' => 'required|in:-1,0,1'
//        ]);
//        if ($type == 'question') {
//            $model = Question::find($request->id);
//        } else if ($type == 'answer') {
//            $model = Answer::find($request->id);
//        }
//         $vote = $model->votes()->create([
//            'user_id' => Auth::id(),
//            'score' => $request->score,
//        ]);
//        return response()->json([
//            $vote
//        ]);
//    }
    public function store(Request $request, $type)
    {
        Vote::updateOrCreate(
            [
                'user_id' => Auth::id(),
                'voteable_type'=>$type,
                'voteable_id'=>$request->id
            ],
            [
                'score' => $request->score
            ]
        );

        return response()->json(['successs' => 'success']);
    }

}
