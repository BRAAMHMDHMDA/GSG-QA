<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'])->only(['edit', 'update']);
    }
    public function index()
    {
        return view('website.users.users_list')->with([
           'users' => User::latest()->paginate(20),
        ]);
    }

    public function show(User $user)
    {
        return view('website.users.profile')->with([
            'user' => $user,
        ]);
    }

    public function edit($id)
    {
        if (Auth::id()==$id){
            return view('website.users.edit-profile')->with([
                'user' => User::findOrFail($id),
            ]);
        }else{
            abort(401);
        }
    }

    public function update(Request $request,$id)
    {
        $user = Auth::user();
        if ($user->id==$id){
            $request->validate(User::ValidateRules());
            $image = $user->image_path;
            if ($image!=null && $request->has('image') && $image!='users/default.png')
            {
                Storage::disk('media')->delete($image);
            }
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $image_path = $file->store('/users','media');
                $request->merge(['image_path' => $image_path]);
            }
              $user->update($request->all());
            return redirect()->route('user.show',$id)->with([
                'success' => 'Edit Profile Successfully'
            ]);
        }else{
            abort(401);
        }
    }
}
