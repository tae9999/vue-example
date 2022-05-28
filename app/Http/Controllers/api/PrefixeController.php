<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Prefix;
use Illuminate\Http\Request;

class PrefixeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $prefixes = Prefix::select(['id','prefixe_name','status','created_by','created_at'])
                            ->get();
        return response()->json($prefixes);
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
        $prefixe = new Prefix();
        $prefixe->prefixe_name=$request->get('prefixe_name');
        $prefixe->status=$request->get('status');
        $prefixe->created_by='99999';
        $prefixe->updated_by='';
        $prefixe->save();
        return response()->json($prefixe);
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
        $prefixe=Prefix::find($id);
        return response()->json($prefixe);

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
        $prefixe = Prefix::find($id);
        $prefixe->prefixe_name=$request->get('prefixe_name');
        $prefixe->status=$request->get('status');
        $prefixe->created_by = $prefixe->created_by;
        $prefixe->updated_by = '99999';
        $prefixe->update();
        return response()->json($prefixe);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prefixe = Prefix::find($id);
        $prefixe->prefixe_name=$prefixe->prefixe_name;
        $prefixe->status='D';
        $prefixe->created_by = $prefixe->created_by;
        $prefixe->updated_by = '99999';
        $prefixe->update();
        return response()->json($prefixe);
    }
}
