<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThroughtController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return \App\Throught::where('user_id', auth()->id())->orderByDesc('id')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $throught = new \App\Throught();
        $throught->user_id = auth()->id();
        $throught->description = $request->description;
        $throught->save();

        return $throught;
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $throught = \App\Throught::find($id);
        $throught->description = $request->description;
        $throught->save();

        return $throught;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $throught = \App\Throught::find($id);
        $throught->delete();

        return $throught;
    }
}
