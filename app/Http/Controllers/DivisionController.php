<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Http\Request;


class DivisionController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $divisions = Division::latest()->paginate(3);
        return view('admin.division.index', compact('divisions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('admin.division.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name'=>'required|unique:divisions'
            ],
            [
                'name.required'=> 'name is requierd',
                'name.unique'=> 'name Already Exists'
            ]
        );

        $division = Division::create([
            'name' => $request->name
        ]);
        $division->save();

        return response()->json([
            'status' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Division $division)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Division $division)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Division $division)
    {
        $request->validate(
            [
                'up_name'=>'required|unique:divisions,name,'.$request->up_id
                // 'up_name'=>"required|unique:divisions,name,$division->name"
            ],
            [
                'up_name.required'=> 'name is requierd',
                'up_name.unique'=> 'name Already Exists'
            ]
        );

        // $division->name = $request->up_name;
        // $division->save();

        Division::where('id',$request->up_id)->update([
            'name' => $request->up_name
        ]);

        return response()->json([
            'status' => 'success'
        ]);    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Division $division)
    {
        // Division::find($division->id)->delete();

        Division::find($request->division_id)->delete();        

        return response()->json([
            'status' => 'success'
        ]);
    }

    // pagination
    public function pagination()
    {
        $divisions = Division::latest()->paginate(3);
        return view('admin.division.pagination', compact('divisions'))->render();
    }

    // search
    public function search(Request $request,)
    {
        $divisions = Division::where('name', 'like', '%'.$request->search_string.'%')
        ->orWhere('id', 'like', '%'.$request->search_string.'%')
        ->orderBy('id', 'desc')->paginate(3);

        if ($divisions->count() >= 1) {
            return view('admin.division.pagination', compact('divisions'))->render();
        } else {
            return response()->json([
            'status' => 'nothing_found'
            ]);
        }                
    }
}
