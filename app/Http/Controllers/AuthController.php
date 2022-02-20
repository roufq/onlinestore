<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;
use Session;
use App\User;
use App\Product;
use App\Kategori;
use Sentinel;
use Reminder;
use Mail;
 
 
class AuthController extends Controller
{
    public function showFormLogin()
    {
        if (Auth::check()) { // true sekalian session field di users nanti bisa dipanggil via Auth
            //Login Success
            return redirect()->route('home');
        }
        return view('login');
    }
 
    public function login(Request $request)
    {
        $rules = [
            'email'                 => 'required|email',
            'password'              => 'required|string'
        ];
 
        $messages = [
            'email.required'        => 'Email is required',
            'email.email'           => 'Invalid email',
            'password.required'     => 'Password is required',
            'password.string'       => 'Password must be a string'
        ];
 
        $validator = Validator::make($request->all(), $rules, $messages);
 
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
 
        $data = [
            'email'     => $request->input('email'),
            'password'  => $request->input('password'),
        ];
 
        Auth::attempt($data);
 
        if (Auth::check()) { // true sekalian session field di users nanti bisa dipanggil via Auth
            //Login Success
            return redirect()->route('home');
 
        } else { // false
 
            //Login Fail
            Session::flash('error', 'Wrong email or password');
            return redirect()->route('login');
        }
 
    }
 
    public function showFormRegister()
    {
        return view('register');
    }
 
    public function register(Request $request)
    {
        $rules = [
            'name'                  => 'required|min:3|max:35',
            'email'                 => 'required|email|unique:users,email',
            'password'              => 'required|confirmed',
            'no_hp'                 => 'required',
            'alamat'                => 'required'
        ];
 
        $messages = [
            'name.required'         => 'Username is required',
            'name.min'              => 'Username minimum 3 character',
            'name.max'              => 'Username maximum 35 character',
            'email.required'        => 'Email is required',
            'email.email'           => 'Invalid email',
            'email.unique'          => 'Email already registered',
            'password.required'     => 'Password is required',
            'password.confirmed'    => 'Password is not the same as confirmation password'
        ];
 
        $validator = Validator::make($request->all(), $rules, $messages);
 
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
 
        $user = new User;
        $user->name = ucwords(strtolower($request->name));
        $user->email = strtolower($request->email);
        $user->password = Hash::make($request->password);
        $user->email_verified_at = \Carbon\Carbon::now();
        $user->no_hp = ucwords(strtolower($request->no_hp));
        $user->alamat = ucwords(strtolower($request->alamat));
        $simpan = $user->save();
 
        if($simpan){
            Session::flash('success', 'Register successful! Please login to access data');
            return redirect()->route('login');
        } else {
            Session::flash('errors', ['' => 'Registration failed! Please repeat in a moment']);
            return redirect()->route('register');
        }
    }
 
    public function logout()
    {
        Auth::logout(); // menghapus session yang aktif
        return redirect()->route('login');
    }
 
    public function forgot()
    {
        return view('forgot_password');
    }

    public function password(Request $request)
    {
        $user = User::whereEmail($request->email)->first();

        if($user == null){
            return redirect()->back()->with(['error' => 'Email not exists']);
        }

        $user = Sentinel::findById($user->id);
        $reminder = Reminder::exists($user) ? : Reminder::create($user);
        $this->sendEmail($user, $reminder->code);

        return redirect()->back()->with(['success' => 'Reset code sent to your email.']);
    }

    public function sendEmail($user, $code){
        Mail::send(
            'email_forgot',
            ['user' => $user, 'code' => $code],
            function($message) use ($user){
                $message->to($user->email);
                $message->subject("$user->name, reset your password.");
            }
        );
    }
 
}