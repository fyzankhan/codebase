<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class UsersController extends Controller
{
        public function __construct()
    {
        $this->middleware('auth');
        // if (Auth::user()->type != "superadmin") {
        //         redirect()->route('home');
        //     }

    }

       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
         // echo Auth::user()->type;
         // die();
        if (Auth::user()->type != "superadmin") {
               return redirect()->route('home');
            }
    	$users = User::latest()->paginate(10);
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    

         if (Auth::user()->type != "superadmin") {
               return redirect()->route('home');
            }
       $profiles = Profile::all();
                return view('users.create' , compact('profiles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          

            $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'fname' => ['required'],
            'lname' => ['required'],
            'expiration' => ['required'],
            'profile_id' => ['required'],
            'status' => ['required'],
            'type' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);


        $user = User::create([
            'name' => $request->name,
            'fname' => $request->fname,
            'lname' => $request->lname,
            'expiration' => $request->expiration,
            'profile_id' => $request->profile_id,
            'status' => $request->status,
            'type' => $request->type,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        if($user){
         return redirect()->route('users.index')->with('success_message', 'New User has been successfully created!');
        }else{
        return redirect()->route('users.index')->withErrors('Error! ' . $e->getMessage());
      }
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
         if (Auth::user()->type != "superadmin") {
               return redirect()->route('home');
            }
        $user = User::where('id', $id)->firstOrFail();
        $profiles = Profile::all();
          return view('users.edit')->with([
            'user' => $user,
            'profiles' => $profiles
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    	if($request->email){
    	$this->validate($request,[
            'email' => ['required', 'string', 'email', 'max:255'],
        ]);
    	}

    	if($request->password){
    	$this->validate($request,[
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    	}

        $user = User::find($id);
        $user->name =  $request->name;
        $user->fname =  $request->fname;
        $user->lname =  $request->lname;
        $user->expiration =  $request->expiration;
        $user->profile_id =  $request->profile_id;
        $user->status =  $request->status;
        
        if($request->email){
        $user->email =  $request->email;
    	}
        if($request->password){
        	$user->password = Hash::make($request->password);
        }

        $user->save();
            
        if($user){
            return redirect()->route('users.index')->with('success_message', 'User has been updated successfully!');
        
        }else{
            return redirect()->route('users.index')->withErrors('Error! ' . $e->getMessage());
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $user = User::find($id);
        $user->delete();
        return back()->with('success_message', 'Profile deleted!');
    }
}
