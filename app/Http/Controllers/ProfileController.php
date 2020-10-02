<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
          public function __construct()
    {
        $this->middleware('auth');
        
     
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
           if (Auth::user()->type != "superadmin") {
               return redirect()->route('home');
            }

        $profiles = Profile::latest()->paginate(10);
        return view('profile.index', compact('profiles'));
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
        return view('profile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'profile_name' => ['required'],
            'profile_status' => ['required'],
            'profile_type' => ['required']
        ]);

          $profile =    Profile::create([
           
            'profile_name' => $request->profile_name,
            'profile_status' => $request->profile_status,
            'profile_type' => $request->profile_type
           
        ]);
            
        if($profile){
              
        return redirect()->route('profile.index')->with('success_message', 'New profile has been successfully created!');
        
        }else{
        return redirect()->route('profile.index')->withErrors('Error! ' . $e->getMessage());
        
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
        $profile = Profile::where('id', $id)->firstOrFail();
       
          return view('profile.edit')->with([
            'profile' => $profile,
            
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
          $this->validate($request,[
            'profile_name' => ['required'],
            'profile_status' => ['required'],
            'profile_type' => ['required']
        ]);
        
        $profile = Profile::find($id);
        $profile->profile_name =  $request->profile_name;
        $profile->profile_type =  $request->profile_type;
        $profile->profile_status =  $request->profile_status;
        $profile->save();
            
        if($profile){
            return redirect()->route('profile.index')->with('success_message', 'Profile has been updated successfully!');
        }else{
            return redirect()->route('profile.index')->withErrors('Error! ' . $e->getMessage());
        
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
        $profile = Profile::find($id);
        $profile->delete();
        return back()->with('success_message', 'Profile deleted!');
    }
}
