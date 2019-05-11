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

    function store(){
        $profile = new Profile();
        $profile->firstname = $_GET['firstname'];
        $profile->lastname = $_GET['lastname'];
        $profile->gender   = $_GET['gender'];
        $profile->zipcode  = $_GET['zipcode'];
        $result = $profile->save();
        //die('lol');
        //var_dump($result);
        //dd($result);
        return redirect("profile");
        
    }

    function index(){
        $profiles =   Profile::all();
    	return view("home.profile")->with("profiles", $profiles);
    }

    function about(){
    	return view("home.about");
    }

    function contact(){
    	return view("home.contact");
    }

    function show($id){
        $profile  =  Profile::find($id);
        //$objProfile  = (object) $profile;
        //dd($profile);
        //var_dump($profile->firstname);
        return view("home.details")->with('profile', $profile);
    }

    function create(){
        return view("home.create");
    }

    function edit(){
        return view("home.edit");
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
