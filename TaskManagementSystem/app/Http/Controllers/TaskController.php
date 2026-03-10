<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Addtask;
use DB;


class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
    {
        return view('task.index');
    }
    public function shwall()
    {
        $assignto=DB::table('admin_add_employees')->get();
        $counttask=DB::table('addtasks')->count();
        $data=DB::table('addtasks')->get();
        return view('task.content',["assignto"=>$assignto,"counttask"=>$counttask,"data"=>$data]);
    }


    // manage all task in admin blade
    public function shwtask()
    {
        $assignto=DB::table('admin_add_employees')->get();
        $counttask=DB::table('addtasks')->count();
        $data=DB::table('addtasks')->get();
        return view('task.admin.managetask',["assignto"=>$assignto,"counttask"=>$counttask,"data"=>$data]);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         //create a validations
         $validated = $request->validate([
              
          'title' => 'required|max:255',
          'tasktype' => 'required|max:255',
          'assignto' => 'required',
          'date' => 'required|max:255',
          'start_time' => 'required|max:255',
          'end_time' => 'required|max:255',
          'descriptions' => 'required|max:255',
          
         ]);   

        //  create a ORM Elequent query builder for insert data
            
        $data=array(
            "title"=>$request->title,
            "tasktype"=>$request->tasktype,
            "assignto"=>$request->assignto,
            "date"=>$request->date,
            "start_time"=>$request->start_time,
            "end_time"=>$request->end_time,
            "descriptions"=>$request->descriptions,
        );
        // insert elequent ORM model
        AddTask::create($data);
        return redirect('/dashboard')->with('success','Task successfully added');

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //manage all task in user panel
        // $data=AddTask::all();
        // return view('task.content',["data"=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $editdata=AddTask::where("id",$id)->first();
        $assignto=DB::table('admin_add_employees')->get();
        $counttask=DB::table('addtasks')->count();
        //dd($data);
        return view('task.edittask',["editdata"=>$editdata,"assignto"=>$assignto]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $data=array(
            "title"=>$request->title,
            "tasktype"=>$request->tasktype,
            "assignto"=>$request->assignto,
            "date"=>$request->date,
            "start_time"=>$request->start_time,
            "end_time"=>$request->end_time,
            "descriptions"=>$request->descriptions,
        );

        // applied update data of task manager app 
         AddTask::where('id',$id)->update($data);
         return redirect('/dashboard')->with('success','Task updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         AddTask::where("id",$id)->delete();
          return redirect('/dashboard')->with('success','Task successfully deleted');
    
    }


     // delete data in admin
      public function destroy_data($id)
    {
          AddTask::where("id",$id)->delete();
          return redirect('/admin-login/manage-task')->with('success','Task successfully deleted');
    }
    
}
