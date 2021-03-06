<?php
namespace App\Http\Controllers;



use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function postSignUp(Request $request){
        $this->validate($request,[
            'email'=>'required|email|unique:users',
            'first_name'=>'required|max:120',
            'password'=>'required|min:4'
        ]);

        $email=$request['email'];
        $first_name=$request['first_name'];
        $password=bcrypt($request['password']);

        $user=new User();
        $user->email=$email;
        $user->first_name=$first_name;
        $user->password=$password;
        $user->save();

        Auth::login($user);
        return redirect()->route('dashboard');
    }

    public function postSignIn(Request $request){
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required'
        ]);
        $userdata = array(
            'password'  => Input::get('password'),
            'email'     => Input::get('email')
        );

        if(Auth::attempt($userdata,true)){
            return redirect()->route('dashboard');
        }

       // return redirect()->back();
        return 'dasda;lxz';
    }
    public function getLogout(){
        Auth::logout();
        return redirect()->route('home');
    }
    public function getAccount(){
        return view('account',['user'=>Auth::user()]);
    }

    public function postSaveAccount(Request $request){
        $this->validate($request,[
            'first_name'=>'required|max:120'
        ]);
        $user=Auth::user();
        $user->first_name=$request->first_name;
        $user->update();
        $file=$request->file('image');
        $file_name=$request['first_name']. '-' . $user->id . '.jpg';
        if($file){
            Storage::disk('local')->put($file_name,File::get($file));
        }
        return redirect()->route('account');
    }
    public function getUserImage($file_name){
        $file=Storage::disk('local')->get($file_name);
        return new Response($file,200);
    }
}
