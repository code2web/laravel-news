<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;


class TagController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tags = Tag::latest()->paginate(3);
        return view('admin.tag.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('admin.tag.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name'=>'required|unique:tags'
            ],
            [
                'name.required'=> 'name is requierd',
                'name.unique'=> 'name Already Exists'
            ]
        );

        $tag = Tag::create([
            'name' => $request->name
        ]);
        $tag->save();

        return response()->json([
            'status' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tag $tag)
    {
        $request->validate(
            [
                'up_name'=>'required|unique:tags,name,'.$request->up_id
                // 'up_name'=>"required|unique:tags,name,$tag->name"
            ],
            [
                'up_name.required'=> 'name is requierd',
                'up_name.unique'=> 'name Already Exists'
            ]
        );

        // $tag->name = $request->up_name;
        // $tag->save();

        Tag::where('id',$request->up_id)->update([
            'name' => $request->up_name
        ]);

        return response()->json([
            'status' => 'success'
        ]);    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Tag $tag)
    {
        // Tag::find($tag->id)->delete();

        Tag::find($request->tag_id)->delete();        

        return response()->json([
            'status' => 'success'
        ]);
    }

    // pagination
    public function pagination()
    {
        $tags = Tag::latest()->paginate(3);
        return view('admin.tag.pagination', compact('tags'))->render();
    }

    // search
    public function search(Request $request,)
    {
        $tags = Tag::where('name', 'like', '%'.$request->search_string.'%')
        ->orWhere('id', 'like', '%'.$request->search_string.'%')
        ->orderBy('id', 'desc')->paginate(3);

        if ($tags->count() >= 1) {
            return view('admin.tag.pagination', compact('tags'))->render();
        } else {
            return response()->json([
            'status' => 'nothing_found'
            ]);
        }                
    }
}
