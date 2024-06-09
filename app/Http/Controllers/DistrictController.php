<?php

namespace App\Http\Controllers;

use App\Models\District;
use Illuminate\Http\Request;


class DistrictController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $districts = District::latest()->paginate(3);
        return view('admin.district.index', compact('districts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('admin.district.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name'=>'required|unique:districts'
            ],
            [
                'name.required'=> 'name is requierd',
                'name.unique'=> 'name Already Exists'
            ]
        );

        $district = District::create([
            'name' => $request->name
        ]);
        $district->save();

        return response()->json([
            'status' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(district $district)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(district $district)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, district $district)
    {
        $request->validate(
            [
                'up_name'=>'required|unique:districts,name,'.$request->up_id
                // 'up_name'=>"required|unique:districts,name,$district->name"
            ],
            [
                'up_name.required'=> 'name is requierd',
                'up_name.unique'=> 'name Already Exists'
            ]
        );

        // $district->name = $request->up_name;
        // $district->save();

        District::where('id',$request->up_id)->update([
            'name' => $request->up_name
        ]);

        return response()->json([
            'status' => 'success'
        ]);    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, district $district)
    {
        // District::find($district->id)->delete();

        District::find($request->district_id)->delete();        

        return response()->json([
            'status' => 'success'
        ]);
    }

    // pagination
    public function pagination()
    {
        $districts = District::latest()->paginate(3);
        return view('admin.district.pagination', compact('districts'))->render();
    }

    // search
    public function search(Request $request,)
    {
        $districts = District::where('name', 'like', '%'.$request->search_string.'%')
        ->orWhere('id', 'like', '%'.$request->search_string.'%')
        ->orderBy('id', 'desc')->paginate(3);

        if ($districts->count() >= 1) {
            return view('admin.district.pagination', compact('districts'))->render();
        } else {
            return response()->json([
            'status' => 'nothing_found'
            ]);
        }                
    }
}
