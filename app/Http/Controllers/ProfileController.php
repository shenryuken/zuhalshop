<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Profile;

use Auth;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
    	return view('profiles.create');
    }

    public function show($id)
    {
    	$data = Profile::find($id);
        $tab  = '#profile-about';
    	return view('profiles.show', compact('data','tab'));
        //return redirect('profiles/'.$data->id.'#profile-about');
        // return redirect()->to('profiles/'.$data->id.'#profile-about');
    }

    public function store(Request $request)
    {
    	$request->validate([
    		'first_name' 	=> 'required',
    		'last_name' 	=> 'required',
    		'dob' 			=> 'required',
    		'nric' 			=> 'required',
    		'gender'		=> 'required',
    		'mobile_no'		=> 'required',
    		'contact_no_home' 	=> '',
    		'contact_no_office' => 'required',
    	]);

    	$profile = new Profile;
        $profile->user_id    = Auth::id();
    	$profile->first_name = $request->first_name;
    	$profile->last_name  = $request->last_name;
    	$profile->dob 		 = $request->dob;
    	$profile->nric 		 = $request->nric;
    	$profile->gender 	 = $request->gender;
    	$profile->mobile_no  = $request->mobile_no;
    	$profile->contact_no_home   = $request->contact_no_home;
    	$profile->contact_no_office = $request->contact_no_office;
    	$profile->save();

        return redirect()->to('profiles/'.$profile->id.'#profile-about');
    }
        
    public function edit($id)
    {
    	$profile = Profile::find($id);
    	return view('profiles.edit', compact('profile'));
    }

    public function update(Request $request, $id)
    {
    	$request->validate([
    		'first_name' 	=> 'required',
    		'last_name' 	=> 'required',
    		'dob' 			=> 'required',
    		'nric' 			=> 'required',
    		'gender'		=> 'required',
    		'mobile_no'		=> 'required',
    		'contact_no_home' 	=> 'required',
    		'contact_no_office' => 'required',
    	]);

    	$profile = Profile::find($id);
    	$profile->first_name = $request->first_name;
    	$profile->last_name  = $request->last_name;
    	$profile->dob 		 = $request->dob;
    	$profile->nric 		 = $request->nric;
    	$profile->gender 	 = $request->gender;
    	$profile->mobile_no  = $request->mobile_no;
    	$profile->contact_no_home   = $request->contact_no_home;
    	$profile->contact_no_office = $request->contact_no_office;
    	$profile->save();

    	return redirect()->to('profiles/'.$profile->id);
    }

    public function inlineUpdate(Request $request)
    {
        if($request->ajax()){
            Profile::find($request->input('pk'))->update([$request->input('name') => $request->input('value')]);
            return response()->json(['success' => true]);
        }
    }

    public function aboutMe(Request $request)
    {
        $request->validate([
            'about_me' => 'required|max:255',
        ]);

        $profile = Profile::find(Auth::user()->id);
        $profile->about_me = $request->about_me;
        $profile->save();

        return redirect()->back();
    }
}

  