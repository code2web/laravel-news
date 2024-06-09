<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function dashboard()
    {
        // return view('admin.dashboard.index');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::latest()->paginate(3);
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name'=>'required|unique:categories'
            ],
            [
                'name.required'=> 'name is requierd',
                'name.unique'=> 'name Already Exists'
            ]
        );

        $category = Category::create([
            'name' => $request->name
        ]);
        $category->save();

        return response()->json([
            'status' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate(
            [
                'up_name'=>'required|unique:categories,name,'.$request->up_id
                // 'up_name'=>"required|unique:categories,name,$category->name"
            ],
            [
                'up_name.required'=> 'name is requierd',
                'up_name.unique'=> 'name Already Exists'
            ]
        );

        // $category->name = $request->up_name;
        // $category->save();

        Category::where('id',$request->up_id)->update([
            'name' => $request->up_name
        ]);

        return response()->json([
            'status' => 'success'
        ]);    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Category $category)
    {
        // Category::find($category->id)->delete();

        Category::find($request->category_id)->delete();        

        return response()->json([
            'status' => 'success'
        ]);
    }

    // pagination
    public function pagination()
    {
        $categories = Category::latest()->paginate(3);
        return view('admin.category.pagination', compact('categories'))->render();
    }

    // search
    public function search(Request $request,)
    {
        $categories = Category::where('name', 'like', '%'.$request->search_string.'%')
        ->orWhere('id', 'like', '%'.$request->search_string.'%')
        ->orderBy('id', 'desc')->paginate(3);

        if ($categories->count() >= 1) {
            return view('admin.category.pagination', compact('categories'))->render();
        } else {
            return response()->json([
            'status' => 'nothing_found'
            ]);
        }                
    }
}
