<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Province;
use App\City;

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
    protected $redirectTo = '/welcome';

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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'string|min:8',
        ],[   
            'email.required'    => 'Էլ-փոստի հասցեն չի կարող լինել դատարկ',
            'email.unique'      => $data['email'] . ' էլ հասցեն արդեն օգտագործվում է։ Խնդրում ենք մուտք գործել համակարգ կամ փորձել այլ հասցե։',      
        ]
    
    );
    }

    public function showRegistrationForm() {

        $city = City::all();
        $province = Province::all();

        return view ('auth.register')
            ->with('cities',$city)
            ->with('provinces',$province);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
       return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'surname' => $data['surname'],
            'city_id' => $data['city_id'],
            'province_id' =>$data['province_id'],
            'address' => $data['address'],
            'telephone' => $data['tel'], 
            'accgroup' => $data['accgroup'],
            'acctype' => $data['acctype'],
        ]);
        

       

        

        
    }
}
