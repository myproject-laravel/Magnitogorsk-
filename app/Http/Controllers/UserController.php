<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdate;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
 {
  $users = User::get();
  dd();
   return view ('users.index', compact('users'));
 }
 public function show($id)
 {
  //$users = User::where('id', $id)->first();
   if (!$user = User::find($id))
   return redirect()->route('user.idex');
   return view('Users.show', compact('user'));
 }
 public function create()
 {
  return View('users.create');
 }
 public function store(StoreUpdate $request)
 {
  $data = $request->all();
  $data['password'] = bcrypt($request->password);

   User::create($data);

   return redirect()->route('user.index');

 //$user = new User;
 //$user->name = $request->name;
//$user->email = $request->email;
 //$user->password = $request->password;
 //$user->save();
  }
  public function edit($id)
  {
  if (!$user = User::find($id))
     return redirect()->route('user.idex');

   return view('users.edit', compact('user'));
  }

}