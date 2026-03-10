<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdminAddEmployee;

class AddEmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function index()
    {
        return view('task.admin.addemployee');
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
              
          'name' => 'required|max:255',
          'age' => 'required|max:255',
          'phone' => 'required|min:10|max:10',
           'address' => 'required',
         ]);   

        //  create a ORM Elequent query builder for insert data in employee
        $data=array(
            "name"=>$request->name,
            "age"=>$request->age,
            "phone"=>$request->phone,
            "address"=>$request->address
        );
        // insert elequent ORM model
        AdminAddEmployee::create($data);
        //dd($data);
        return redirect('/admin-login/add-employee')->with('success','Thanks for contact with us');



    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
         $data=AdminAddEmployee::all();
        return view('task.admin.manageemployee',["data"=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
          //edit employee data 
        $data=AdminAddEmployee::where('id',$id)->first();
        return view('task.admin.editemployee',["data"=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
          $data=array(
            "name"=>$request->name,
            "age"=>$request->age,
            "phone"=>$request->phone,
            "address"=>$request->address
        );

        // create elequent query builder for update data
        AdminAddEmployee::where('id',$id)->update($data);
       
        return redirect('/admin-login/manage-employee')->with('success','Employee data successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
          // create elequent query builder for delete data 
        AdminAddEmployee::where('id',$id)->delete();
        return redirect('/admin-login/manage-employee/')->with('del','Employee successfully deleted');
    }
}
