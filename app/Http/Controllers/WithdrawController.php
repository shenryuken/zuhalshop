<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Withdrawal;

use Auth;
use Storage;
use Exception;

class WithdrawController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    
    public function index()
    {
    	if(Auth::user()->isAdmin())
    	{
    		$data = Withdrawal::all();
    	}
    	else
    	{
    		$data = Withdrawal::where('user_id', Auth::id())->get();
    	}

    	return view('withdraws.index', compact('data'));
    }

    public function edit($id)
    {
    	$data = Withdrawal::find($id);
    	return view('withdraws.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
    	$request->validate([
            'amount'        => 'required',
            'to_account'    => 'required',
            'action'        => 'required',
            'receipt'       => 'required_if:action,==,3'
        ]);

        $path = null;

        if ($request->file('receipt')) {
            $path = $request->file('receipt')->store('receipts', 'public');
        }

        try 
        {
            $withdrawal = Withdrawal::find($id);
            
            if($withdrawal->status === 3 )
            {
                $msg = "Already Paid!No more action needed.";
                if($path)
                {
                    Storage::disk('public')->delete($path);
                }
            }
            else
            {
                $withdrawal->status     = $request->action;
                $withdrawal->receipt    = $request->file('receipt') ? $path:'';
                $withdrawal->save(); 

                $msg = "Successfully updated!";
            }

            return redirect()->back()->with('msg', $msg);
        } 
        catch (Exception $e) 
        {
            if(isset($path))
            {
                Storage::disk('public')->delete($path);
            }
            echo $e->getMessage();
            //return redirect()->back()->with('fail','Failed to update withdrawal.');
        }
    }

    public function show($id)
    {
        $data = Withdrawal::find($id);

        return view('withdraws.show', compact('data'));
    }
}
