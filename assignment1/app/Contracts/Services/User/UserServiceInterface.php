<?php

namespace App\Contracts\Services\User;

use Illuminate\Http\Request;


interface UserServiceInterface
{

  public function getUserList();

  public function saveUser(Request $request);

  public function getUserById($id);
 
  public function updateUserById(Request $request , $id);
 
  public function deleteUserById($id);
  
}