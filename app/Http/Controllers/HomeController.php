<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function home(){
    	/* $value = "lol";
    	return view("home.home")->with("key",$value); */
        
        return view("home.home");
    }

    function profile(){
        $profiles =   Profile::all();
    	return view("home.profile")->with("profiles", $profiles);
    }

    function about(){
    	return view("home.about");
    }

    function contact(){
    	return view("home.contact");
    }

    function details($id){
        $profile  =  Profile::find($id);
        //$objProfile  = (object) $profile;
        //dd($profile);
        //var_dump($profile->firstname);
        return view("home.details")->with('profiles', $profile);
    }

    function lol(){
        return view("home.lol");
    }

   /* function details(Profile $profile) {
        $dd($profile);
        return view('profiles.details')->with('profile',$profile);
    } */

    /*
    function show($id) {
        $profile = Profile::find($id);
//      $objProfile  = (object) $profile;
//      var_dump($objProfile->firstname);die();
        return view('profiles.show')->with('profile',$profile);
    }
    */

}
