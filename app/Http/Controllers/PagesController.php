<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public  function View_task()
    {
        return view('/add_task');
    }

    public  function Make_task(Request $request)
    {
     if($request ->isMethod('post'))
     {
         $new_task=new Task();
         $new_task->content=$request->input('content');
         $new_task->save();

     }
        return redirect('/add');
    }
    public  function get_task()
    {
     $tasks=Task::all();
     $arr=array('tasks'=>$tasks);
        return view('/make_task',$arr);
    }
    public  function Edit_task(Request $request,$id)
    {
        if($request->isMethod('post'))
        {
            $new_task=Task::find($id);
            $new_task->content=$request->input('content');
            $new_task->save();
            return redirect('/add');
        }
        else
        {
            $task=Task::find($id);
            $arr=array('task'=>$task);
            return view('edit',$arr);
        }

    }

}
