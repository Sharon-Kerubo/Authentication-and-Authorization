<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Role;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
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
     * Show the application registration form.
     *
     * @return \Illuminate\View\View
     */
    public function showRegistrationForm()
    {
        $roles = Role::all();
        return view('auth.register',['roles'=>$roles]);
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
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'phone_number' => ['required', 'integer','unique:users'],
            'email' => ['required', 'string', 'max:255','unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'next_of_kin_first_name' => ['required', 'string'],
            'next_of_kin_last_name' => ['required', 'string'],
            'next_of_kin_email' => ['required', 'string'],
            'next_of_kin_phone' => ['required', 'integer'],
            'role_id' => ['required'],
        ]);
        // 'id_number' => ['required', 'integer', 'max:255'],
        // 'license_document' => ['required', 'integer', 'max:255'],
        // 'license_no' => ['required', 'string', 'max:255'],
        // 'is_verified'=> ['required', 'boolean'],
        // 'is_suspended'=> ['required', 'boolean'],
        // 'hospital_id' => ['required', 'integer', 'max:255'],
        // 'specialization' => ['required', 'string', 'max:255'],
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'phone_number' => $data['phone_number'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'next_of_kin_first_name' => $data['next_of_kin_first_name'],
            'next_of_kin_last_name' => $data['next_of_kin_last_name'],
            'next_of_kin_email' => $data['next_of_kin_email'],
            'next_of_kin_phone' => $data['next_of_kin_phone'],
            'role_id' => $data['role_id']


        ]);
        // 'id_number' => $data['id_number'],
        // 'license_document' => $data['license_document'],
        // 'license_no' => $data['license_no'],
        // 'is_verified' => $data['is_verified'],
        // 'is_suspended' => $data['is_suspended'],
        // 'hospital_id' => $data['hospital_id'],
        // 'specialization' => $data['specialization'],
    }
    public function store() {
        error_log(request('first_name'));
        return view('home');
     }

}
