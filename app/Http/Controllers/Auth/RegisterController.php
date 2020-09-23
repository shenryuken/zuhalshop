<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use DB;
use Auth;
use App\Models\Wallet;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
       return Validator::make($data, [
            'name'          => ['required', 'string', 'max:255'],
            'email'         => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'      => ['required', 'string', 'min:8', 'confirmed'],
            'country_id'    => ['required'],
            'referred_by'   => [''],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $introducer = User::where('name', $data['referred_by'])->first();

        DB::beginTransaction();

        $user = new User;
        $user->name         = $data['name'];
        $user->email        = $data['email'];
        $user->password     = Hash::make($data['password']);
        $user->country_id   = $data['country_id'];
        $user->referred_by  =  $introducer ? $introducer->id:0;
        $user->save();

        $wallet = new Wallet;
        $wallet->user_id = $user->id;
        $user->wallet()->save($wallet);

        if(!$user || !$wallet)
        {
            DB::rollback();
        }
        else
        {
            // Else commit the queries
            DB::commit();
        }

        return $user;
        //return redirect()->back()->with('error', 'Something wrong! Please check your input.');
    }
}
