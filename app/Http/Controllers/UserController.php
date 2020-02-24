<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Position;
use App\Http\Requests\ModifyUserRequest;

class UserController extends Controller
{




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  //$connections = Connections::with('hosts')->get();
        //
      $user =  User::with('positions')->latest()->paginate(10);;
  //    print_r($user);
      return view('users.index',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $userData = Position::all();
          $user = new User();
          $user['firstname'] = $user['lastname'] = $user['email'] =  $user['contact'] = $user['position_id'] = '' ;
          return view('users.create',compact ('user','userData'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Position $pos,ModifyUserRequest $request)
    {

        $reqData = $request->all();
        $reqData['position_id'] = (int) $request->position_id;
        //dd($reqData);
        User::create($reqData);



        return redirect()->route('users.index')->with('success',"User is already added");
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
    public function edit(User $user)
    {
        $userData = Position::all();
        return  view('users.edit',compact ('user','userData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ModifyUserRequest $request, User $user)
    {
        //
        $reqData = $request->all();
        $reqData['position_id'] = (int) $request->position_id;
        $user->update($reqData);
        return redirect()->route('users.index')->with('success',"User is already edited");



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success',"User is already delete");

    }
}
