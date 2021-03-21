<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    //
    public function index(){
        return view('index');
    }

    public function about(){
        return 'the about page';
        // return view('about');
    }

    public function contact(){
        return "the contact page";
        // return view('contact');
    }

    public function profile($id){
        $user=User::with(['questions','answers'])->find($id);

        return view('profile')->with('user',$user);
    }

    public function deleteProfile($id){
        $user=User::find($id);

        if(Auth::id()==$id){
            if($user->delete()){
                return redirect(route('index'))->with('success','User was deleted successfully');
            }else{
                return redirect(route('index'))->with('fail','An error occurred while trying to delete');
            }
        }


    }
}
