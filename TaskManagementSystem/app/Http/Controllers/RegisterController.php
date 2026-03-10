<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Hash;
class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
       public function index()
    {
        return view('task.register');
    }

    // create function to load login
    public function login()
    {
        return view('task.login');
    }

    //login login normal
  public function logincheck(Request $request)
{
    $data = User::where('email',$request->email)->first();

    if($data && Hash::check($request->password,$data->password))
    {
        Session::put('userid',$data->id);
        Session::put('username',$data->fullname);

        return redirect('/dashboard');
    }
    else
    {
        return redirect('/login')->with('error','Invalid Email or Password');
    }
}

    // create a function to load dashboard
    public function dashboard()
    {
        return view('task.content');
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
              
          'file' => 'required|max:255',
          'fullname' => 'required|max:255',
          'email' => 'required|email|max:255',
          'phone' => 'required|min:10|max:10',
          'password' => 'required|max:255',
          'confirmpassword' => 'required|max:255',
        
          
         ]);   

        //  upload image
        $filename=rand().'.'.$request->file->extension();
        $request->file->move(public_path('uploads/customers'),$filename);
        //  create a ORM Elequent query builder for insert data
        $data=array(
            "photo"=>$filename,
            "fullname"=>$request->fullname,
            "email"=>$request->email,
            "phone"=>$request->phone,
            "password"=>$request->password
           
        );
        // insert elequent ORM model
        User::create($data);
        return redirect('/login')->with('success','You are  successfully created your account');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         return view('task.managetask');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
                $data=User::all();
        return view('task.admin.manageusers',["data"=>$data]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
             User::where("id",$id)->delete();
          return redirect('/admin-login/manage-users')->with('success','Users Data  successfully deleted');
    }
}
