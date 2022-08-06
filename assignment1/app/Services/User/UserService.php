<?php

namespace App\Services\User;

use Illuminate\Http\Request;
use App\Contracts\Dao\User\UserDaoInterface;
use App\Contracts\Services\User\UserServiceInterface;




class UserService implements UserServiceInterface
{
 
  private $userDao;
  /**
   * Class Constructor
   * @param UserDaoInterface
   * @return
   */
  public function __construct(UserDaoInterface $userDao)
  {
    $this->userDao = $userDao;
  }
 
  public function getuserList()
  {
    return $this->userDao->getuserList();
  }

 
  public function saveUser(Request $request)
  {
   return $this->userDao->saveUser($request);
  }

 public function getUserById($id)
 {
  return $this->userDao->getUserById($id);
 }

 public function updateUserById(Request $request , $id)
 {
  return $this->userDao->updateUserById($request , $id);
 }

 public function deleteUserById($id)
 {
  return $this->userDao->deleteUserById($id);
 }


}