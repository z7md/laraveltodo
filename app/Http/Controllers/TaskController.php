<?php

namespace App\Http\Controllers;
use App\Models\Task;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Nette\Utils\DateTime;


class TaskController extends Controller
{
    public function due(): View
    {
        // $tasks =DB::table("tasks")
        // ->where("status", "=" , "done")
        // ->get();

        return view('due');
    }
    public function find(string $id): View
    {
         return view('welcome', [
             'task' => Task::findOrFail($id),
         ]);
    }
    public function show(string $status): View
    {
        $tasks =DB::table("tasks")
        ->where("status", "=" , $status)
        ->get();

        return view('profile', [
            'tasks' => $tasks
        ]);
    }
    public function index(): View
    {
        $task = DB::table("tasks")
        ->orderBy("due_date")
        ->get();
         return view('welcome', [
             'task' => $task,
             'users' => User::all()
         ]);
    }
    public function delete(string $id) 
    {
        Task::destroy($id);
        return redirect('/');
    }
    public function CreateTask (Request $request) 
    {
    $task = new Task;
    $task->user_id = $request->id;
    $task->title = $request->TaskName;
    $task->status = $request->Status;
    $task->due_date = $request->DueDate;
    $task->save();
    return redirect("/");
    }
   public function onProgress(string $id){
    $a = Task::find($id);
    $task = new Task;
    $task->user_id = $a->user_id;
    $task->title = $a->title;
    $task->status = "onprogress";
    $task->due_date = $a->due_date;
    Task::destroy($id);
    $task->save();
    return redirect("/");
    }
    public function done(string $id){
        $a = Task::find($id);
        $task = new Task;
        $task->user_id = $a->user_id;
        $task->title = $a->title;
        $task->status = "done";
        $task->due_date = $a->due_date;
        Task::destroy($id);
        $task->save();
        return redirect("/");
        }
       
}

