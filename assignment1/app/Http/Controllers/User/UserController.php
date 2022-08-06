<?php

namespace App\Http\Controllers\User;
use App\Models\Language;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Contracts\Services\User\UserServiceInterface;

class UserController extends Controller
{
    private $userInterface;

    public function __construct(UserServiceInterface $userInterface)
    {
        $this->userInterface = $userInterface;
    }
    public function showUserList()
    {
        $users=  $this->userInterface->getUserList();
        return view('user.index', compact('users'));
    }
     
    public function showCreateUserView()
    {
        $langs = Language::all();
        return view('user.create', compact('langs'));
    }
   
    public function submitCreateUserView(Request $request)
    {
        $user = $this->userInterface->saveUser($request);
        return redirect()->route('user.index');
    }

    public function showEditUserView($id)
    {
        $user=$this->userInterface->getUserById($id);
        $langs = Language::all();
        return view('user.edit' , compact('user' , 'langs'));
    }

    public function submitEditUserView(Request $request , $id){
        $user = $this->userInterface->updateUserById($request,$id);
        return redirect()->route('user.index');
    }

    public function deleteUser($id)
    {
        $user = $this->userInterface->deleteUserById($id);
        return back();
    }

    public function exportUsers()
    {
    return Excel::download(new UsersExport, 'users.xlsx');
    }

    public function importUsers(Request $request)
    {
         Excel::import(new UsersImport, $request->file);
         return redirect()->route('user.index');
    }
}
