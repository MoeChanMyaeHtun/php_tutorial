<?php

namespace App\Dao\User;
use App\Models\User;
use Illuminate\Http\Request;
use App\Contracts\Dao\User\UserDaoInterface;




class UserDao implements UserDaoInterface
{
  public function getUserList()
  {
    $users = User::orderBy('created_at', 'asc')->get();
    return $users;
  }

  public function saveUser(Request $request)
  {
    $user= new User();
    $user->name = $request['name'];
    $user->email = $request['email'];
    $user->phone = $request['phone'];
    $user->address = $request['address'];
    $user->language_id = $request['language_id'];
    $user->save() ;
    return $user;
  }

 public function getUserById($id)
 {
    $user = User::find($id);
    return $user;
 }

 public function updateUserById(Request $request ,$id)
 {
  $user=  User::find($id);
  $user->name = $request['name'];
  $user->email = $request['email'];
  $user->phone = $request['phone'];
  $user->address = $request['address'];
  $user->language_id = $request['language_id'];
  $user->save() ;
  return $user;
 }

 public function deleteUserById($id)
 {
    $user = User::find($id);
    $user->delete();
 }

  

}