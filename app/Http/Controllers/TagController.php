<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class TagController extends Controller
{
    public function index(Request $request)
    {
        return view('website.tags-list')->with([
            'tags' => Tag::when($request->name,function ($q) use($request){
                $q->where('name','like', '%' .$request->name.'%');
            })->latest()->paginate(12),
        ]);
    }


    public function create()
    {
        return view('dashboard.tags.create')->with([
            'tag' => new Tag(),
        ]);
    }


    public function store(Request $request)
    {
        $request->validate(['name' => 'required|unique:tags']);
        Tag::create($request->all());

        return redirect()->route('tags.index')->with([
            'success' => "($request->name) Tag Created Successfully"
        ]);
    }


    public function show(Tag $tag)
    {
        //
    }

    public function edit(Tag $tag)
    {
        return view('dashboard.tags.edit')->with([
            'tag' => $tag
        ]);
    }

    public function update(Request $request, Tag $tag)
    {
        $request->validate(['name' => 'required',Rule::unique('tags','name')->ignore($tag->id)]);
        $tag->update($request->all());

        return redirect()->route('tags.index')->with([
            'success' => "($request->name) Tag Updated Successfully"
        ]);
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();

        return redirect()->route('tags.index')->with([
            'success' => "($tag->name) Tag Deleted Sucessfully"
        ]);
    }
}
