<?php

namespace App\Dao\User;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Contracts\Dao\User\UserDaoInterface;




class UserDao implements UserDaoInterface
{
  public function getUserList()
  {
    $users = User::orderBy('created_at', 'asc')->get();
    return $users; 



   
  }
  public function searchUsers(Request $request)
  {
    // $users = User::table('users');
    // if( $users->name){
    //     $users= $users->where('usersname', 'LIKE', "%" . $users->name . "%");
    // }
    // if($users->address){
    //     $users= $users->where('users.address', 'LIKE', "%" .$users->address . "%");
    // }
    // if($users->startdate){
    //     $users= $users->whereDate('users.created_at', 'LIKE', "%" .$users->startdate . "%");
    // }
    // if($users->enddate){
    //     $users= $users->whereDate('users.created_at', 'LIKE', "%" .$users->enddate . "%");
    // }

    // if( $users->startdate  && $users->enddate  ){
    //   $users = $users->whereBetween('users.created_at', [$users['start_date'], $users['end_date']])
    // ;
    // }
    // return $users;
    if($request->name ){
      $users = User::where('name', 'LIKE', "%" . $request->name . "%")->get();
  }
    if($request->address ){
      $users = User::where('address', 'LIKE', "%" . $request->address . "%")->get();
  }
    if($request->start_date ){
      $users = User::whereDate('created_at', 'LIKE', "%" . $request->start_date . "%")->get();
  }
    if($request->end_date ){
      $users = User::whereDate('updated_at', 'LIKE', "%" . $request->end_date . "%")->get();
  }
  if( $request->start_date  && $request->end_date  ){
      $request = User::whereBetween('user.created_at',[$request['start_date'], $request['end_date']])
    ;
    }
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
    
  } 
   


  public function getUserById($id)
  {
    $user = User::find($id);
    return $user;
  }

  public function updateUserById(Request $request, $id)
  {
    $user =  User::find($id);
    $user->name = $request['name'];
    $user->email = $request['email'];
    $user->phone = $request['phone'];
    $user->address = $request['address'];
    $user->language_id = $request['language_id'];
    $user->save();
    return $user;
  }

  public function deleteUserById($id)
  {
    $user = User::find($id);
    $user->delete();
  }

  
}
