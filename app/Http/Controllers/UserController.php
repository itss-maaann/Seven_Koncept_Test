<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function signUp(Request $req)
    {
        $req->validate([
            'name'=>'required | max:15',
            'email'=>'required',
            'password'=>'required | min:5',
            'confirm_password'=>'required_with:password|same:password|min:'
        ]);  
        //dd($req);
         $signup = new User;
 
         $signup->name = $req->name;
         $signup->email = $req->email;
         $signup->password = Hash::make($req->password);
         $signup->save();
         if(session()->has('user')){
             return redirect('users');
         }
         else
         return view('login');
    }

    function login(Request $req){
        //dd($req);
        $req->validate([
            'email'=>'required',
            'password'=>'required',
        ]); 
        $user= User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password, $user->password))
        {
            $req->session()->flash('message', 'Username or Password does not match..!');
            return redirect('login');
        }
        else
        $req->session()->put('user', $user);
        //dd($req);
        return redirect('profile');
    }

    function DisplayUsers(){
        $Users=User::all();
        return view('displayusers',['Users'=>$Users]);
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = User::find($id);
        //dd($edit);
        return view('edit', ['edit'=>$edit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        //dd($req);
        $update = User::find($req->id);
        $update->name = $req->name;
        $update->email = $req->email;
        $update->password = $req->password;
        $update->save();
        return redirect('users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $del = User::find($id);
        $del->delete();
        return redirect('users');
    }
}
