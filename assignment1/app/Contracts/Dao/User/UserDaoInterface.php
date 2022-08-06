<?php

namespace App\Contracts\Dao\User;

use Illuminate\Http\Request;


interface UserDaoInterface
{
  
  public function getUserList();

  public function saveUser(Request $request);

 public function getUserById($id);

 public function updateUserById(Request $request , $id);

 public function deleteUserById($id);
}