<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
class UserController extends Controller
{
    public function index(): View
    {
        return view('users', [
            'user' => User::all()
        ]);
    }
    public function CreateUser (Request $request) 
    {
    $user = new user;
    $user->name = $request->Username;
    $user->email = $request->Email;
    $user->password = $request->Password;
    $user->save();
    return redirect("/");
    }
    public function UserTasks (string $id):View
    {
        $user =User::findOrFail($id);
        
        return view('UserTasks', [
            'user'=>$user ,
            'UserTasks' => $user->tasks
        ]);
    }
}
