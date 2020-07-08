<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notifyme;

class NotifymeController extends Controller
{
    public function notifyme(Request $request)
    {
    	$notify = new Notifyme;
    	$notify->email = $request->email;
    	$notify->save();

    	//return view('welcome', compact('notify'))->with('success', 'Your email successfully submited');
    	return redirect()->back()->with('success', 'Your email successfully submited');
    }
}
