<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            return view('task.contact');
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
        // validations
         $validated = $request->validate([
              
          'name' => 'required|max:255',
          'email' => 'required|email|max:255',
          'phone' => 'required|min:10|max:10',
          'subject' => 'required|max:255',
          'message' => 'required',
         ]);   

        //  create a ORM Elequent query builder for insert data
            
        $data=array(
            "name"=>$request->name,
            "email"=>$request->email,
            "phone"=>$request->phone,
            "subject"=>$request->subject,
            "message"=>$request->message
        );
        // insert elequent ORM model
        Contact::create($data);
        return redirect('/contact-us')->with('success','Thanks for contact with us');


    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        // create a elequent ORM query builder for show all data
        $data=Contact::all();
        return view('task.admin.managecontact',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         // create elequent query builder for delete data 
        Contact::where('id',$id)->delete();
        return redirect('/admin-login/manage-contact/')->with('del','contact successfully deleted');
    }
}
