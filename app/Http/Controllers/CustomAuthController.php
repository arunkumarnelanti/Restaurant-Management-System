<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\manager;
use App\Models\restaurent;
use App\Models\notification;
use App\Models\foodtable;
use App\Models\makefoodad;

use Hash;
use Session;

class CustomAuthController extends Controller
{
    public function login(){
        return view('Header').view('index');
    }
    public function registration(){
        return view('Header').view('Register');
    }
    public function Addrestaurent(){
        return view('Header').view('Addrestaurent');
    }
    public function Addfood(){
        return view('Header').view('Addfood');
    }
    public function Notifications(){
        return view('Header').view('Notifications');
    }
    public function Ads(){
        return view('Header').view('Ads');
    }
    public function profile(){
        if(Session::has('loginId')){
            $data=manager::where('id','=',Session::get('loginId'))->first();
        }
        return view('Header').view('profile',compact('data'));
    }

    #validations for login form starts here
    public function loginUser(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12'
        ],
    [
        'email.required'=>'Email is Required',
        'password.required'=>'Password is Required'
    ]);
        $user=manager::where('email','=',$request->email)->first();
        if($user){
            if(Hash::check($request->password,$user->password)){
                $request->session()->put('loginId',$user->id);
                return redirect('Home');
            }
            else{
                echo "<p style='padding:50px; border-radius:10px; color: white; text-align:center; background-color: #FFB6C1; font-size:50px;'>
                Incorrect Password
                <br><br>
                <a href='index' style='font-size:20px; text-decoration: none; color: blue;'>Try Again</a>
            </p>";
            }
        }
        else{
            echo "<p style='padding:50px; border-radius:10px; color: white; text-align:center; background-color: #FFB6C1; font-size:50px;'>
                Email not Registered
                <br><br>
                <a href='Register' style='font-size:20px; text-decoration: none; color: blue;'>Register Here</a>
            </p>";
        }
    }
     #validations for login form ends here

    #validations for Registration form starts here 
    public function registerUser(Request $request){
        $request->validate([
            'fullname'=>'required|max:20',
            'username'=>'required|max:20',
            'email'=>'required|email|unique:managers',
            'mobile'=>'required|size:10',
            'password'=>'required|min:5|max:12'
        ],
    [
        'fullname.required'=>'Full Name is Required',
        'username.required'=>'Username is Required',
        'email.required'=>'Email is Required',
        'mobile.required'=>'Mobile Number is Required',
        'password.required'=>'Password is Required'
    ]);
        $user =new manager();
        $user->fullname=$request->fullname;
        $user->username=$request->username;
        $user->email=$request->email;
        $user->mobile=$request->mobile;
        $user->password=Hash::make($request->password);
        $res=$user->save();
        if($res){
            echo "<p style='padding:50px; border-radius:10px; color: white; text-align:center; background-color: lightgreen; font-size:50px;'>
                    Account Created Successfully
                    <br><br>
                    <a href='index' style='font-size:20px; text-decoration: none; color: blue;'>Login</a>
                </p>";
            }
            else{
            echo "<p style='padding:50px; border-radius:10px; color: white; text-align:center; background-color: #FFB6C1; font-size:50px;'>
                Failed to Register
                <br><br>
                <a href='Register' style='font-size:20px; text-decoration: none; color: blue;'>Register Again</a>
            </p>";
        }
    }
     #validations for Registration form ends here

     public function Home(){
        $data=array();
        if(Session::has('loginId')){
            $data=manager::where('id','=',Session::get('loginId'))->first();
        }
        return view('Header').view('Home',compact('data'));
     }


    public function addRestaurant(Request $request){
        $request->validate([
            'restaurent'=>'required|max:20',
            'location'=>'required|max:40',
            'owner'=>'required|max:20',
            'mobile'=>'required|size:10'
        ],
    [
        'restaurent.required'=>'Restaurant Name is Required',
        'location.required'=>'Location is Required',
        'owner.required'=>'Owner Name is Required',
        'mobile.required'=>'Mobile Number is Required'
    ]);
    $user =new restaurent();
    $user->restaurent=$request->restaurent;
    $user->location=$request->location;
    $user->owner=$request->owner;
    $user->mobile=$request->mobile;
    $res=$user->save();
    if($res){
        echo "<p style='padding:50px; border-radius:10px; color: white; text-align:center; background-color: lightgreen; font-size:50px;'>
                Restaurant Added Successfully
                <br><br>
                <a href='Home' style='font-size:20px; text-decoration: none; color: blue;'>Home</a>
            </p>";
        }
        else{
        echo "<p style='padding:50px; border-radius:10px; color: white; text-align:center; background-color: #FFB6C1; font-size:50px;'>
            Failed to Add Restaurant
            <br><br>
            <a href='Addrestaurent' style='font-size:20px; text-decoration: none; color: blue;'>Add Again</a>
        </p>";
    }
    }

    public function notification(Request $request){
        $request->validate([
            'subject'=>'required|max:20',
            'description'=>'required|max:200',
            'date'=>'required'
        ],
    [
        'subject.required'=>'Notification Subject is Required',
        'description.required'=>'Description is Required',
        'date.required'=>'Date is Required',
    ]);
    $user =new notification();
    $user->subject=$request->subject;
    $user->description=$request->description;
    $user->date=$request->date;
    $res=$user->save();
    if($res){
        echo "<p style='padding:50px; border-radius:10px; color: white; text-align:center; background-color: lightgreen; font-size:50px;'>
                Notification Sent Successfully
                <br><br>
                <a href='Home' style='font-size:20px; text-decoration: none; color: blue;'>Home</a>
            </p>";
        }
        else{
        echo "<p style='padding:50px; border-radius:10px; color: white; text-align:center; background-color: #FFB6C1; font-size:50px;'>
            Failed to Send Notification
            <br><br>
            <a href='Addrestaurent' style='font-size:20px; text-decoration: none; color: blue;'>Add Again</a>
        </p>";
    }
    }

    public function addFoodItem(Request $request){
        $request->validate([
            'item'=>'required|max:20',
            'price'=>'required|numeric',
            'restaurent'=>'required',
            'location'=>'required'
        ],
    [
        'item.required'=>'Item name is Required',
        'price.required'=>'price is Required',
        'restaurent.required'=>'Restaurent name is Required',
        'location.required'=>'Location is Required',
    ]);
    $user =new foodtable();
    $user->item=$request->item;
    $user->price=$request->price;
    $user->restaurent=$request->restaurent;
    $user->location=$request->location;
    $res=$user->save();
    if($res){
        echo "<p style='padding:50px; border-radius:10px; color: white; text-align:center; background-color: lightgreen; font-size:50px;'>
                Item Added Successfully
                <br><br>
                <a href='Home' style='font-size:20px; text-decoration: none; color: blue;'>Home</a>
            </p>";
        }
        else{
        echo "<p style='padding:50px; border-radius:10px; color: white; text-align:center; background-color: #FFB6C1; font-size:50px;'>
            Failed to Add Item
            <br><br>
            <a href='Addrestaurent' style='font-size:20px; text-decoration: none; color: blue;'>Add Again</a>
        </p>";
    }
    }

    public function advertice(Request $request){
        $request->validate([
            'subject'=>'required|max:20',
            'description'=>'required'
        ],
    [
        'subject.required'=>'Subject is Required',
        'description.required'=>'Description is Required'
    ]);
    $user =new makefoodad();
    $user->subject=$request->subject;
    $user->description=$request->description;
    $res=$user->save();
    if($res){
        echo "<p style='padding:50px; border-radius:10px; color: white; text-align:center; background-color: lightgreen; font-size:50px;'>
                Ad Posted Successfully
                <br><br>
                <a href='Home' style='font-size:20px; text-decoration: none; color: blue;'>Home</a>
            </p>";
        }
        else{
        echo "<p style='padding:50px; border-radius:10px; color: white; text-align:center; background-color: #FFB6C1; font-size:50px;'>
            Failed to Post Ad
            <br><br>
            <a href='Addrestaurent' style='font-size:20px; text-decoration: none; color: blue;'>Add Again</a>
        </p>";
    }
    }
   
    

     #for Logout
     public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('index');
        }
    }
}
