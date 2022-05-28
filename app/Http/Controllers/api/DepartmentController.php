<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;
class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dep = Department::all();
        return response()->json($dep);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dep= new Department();
        $dep->dep_name = $request->get('dep_name');
        $dep->status = $request->get('status');
        $dep->created_by = '99999';
        $dep->updated_by = '';
        $dep->save();
        return response()->json($dep);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dep = Department::find($id);
        return response()->json($dep);
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
        $dep = Department::find($id);
        $dep->dep_name = $request->get('dep_name');
        $dep->status = $request->get('status');
        $dep->created_by = $dep->created_by;
        $dep->updated_by = '99999';
        $dep->update();
        return response()->json($dep);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dep = Department::find($id);
        $dep->dep_name = $dep->dep_name;
        $dep->status = 'D';
        $dep->created_by = $dep->created_by;
        $dep->updated_by = '99999';
        $dep->update();
        return response()->json($dep);
    }
}
