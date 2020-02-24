<?php

namespace App\Http\Controllers;

use App\Position;
use Illuminate\Http\Request;
use App\Http\Requests\ModifyPositionRequest;
class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $position =  Position::latest()->paginate(10);
        return view('positions.index',compact('position'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Position $position)
    {

        return view('positions.create',compact('position'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ModifyPositionRequest $request)
    {

        $reqData = $request->all();
        Position::create($reqData);
        return redirect()->route('positions.index')->with('success',"Position is already added");

        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function show(Position $position)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function edit(Position $position)
    {
        //

      return  view('positions.edit',compact ('position'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function update(ModifyPositionRequest $request, Position $position)
    {
        //
          $reqData = $request->all();
          $position->update($reqData);
          return redirect()->route('positions.index')->with('success',"Position is already edited");



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function destroy(Position $position)
    {
        //
    }
}
