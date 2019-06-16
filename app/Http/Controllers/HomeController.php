<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function home(){
    	/* $value = "hello";
    	return view("home.home")->with("key",$value); */
        
        return view("home.home");
    }

    function store(){
        $profile = new Profile();
        $profile->firstname = $_POST['firstname'];
        $profile->lastname = $_POST['lastname'];
        $profile->gender   = $_POST['gender'];
        $profile->zipcode  = $_POST['zipcode'];
        //$profile->save();
        //$result = $profile->save();
        //die('Hi!');
        //var_dump($result);
        //dd($result);
         $this->validate($request, [
          'select_file'  => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'

         ]);

         $image = $request->file('select_file');
         //$imgName = $image->getClientOriginalName();

         $new_name = rand() . '.' . $image->getClientOriginalExtension();
         //dd($new_name);
         $image->move(public_path('images'), $new_name);
          //die();
         //return back();
        //$about->upload = $new_name;
         $profile->upload = $new_name;
         $profile->save();


        return view("home.create");
        //return redirect("profile");
        
    }

    function index(){
        $profiles =   Profile::all();
        $profiles =   Profile::paginate(8);
    	return view("home.profile")->with("profiles", $profiles);
        //return view('home.profile', ['profiles' => $profiles]);
        //return view('customers.index',    ['customers' => $customers]);
    }

    /*public function showAllCustomers()
    {
        // $customers = Customer::where('age','>=',34)
        //                         ->where('type',"=",1)
        //                         ->orderBy('age')
        //                         ->take(1)
        //                         ->get();
        $profile = Profile::paginate(8);
        return view('home.profile',
                    ['profile' => $profile]);
    }*/


   

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


    function destroy($id){
        $profile = Profile::find($id);
        $profile = Profile::destroy($id);

        return redirect("profile");
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


    function edit($id){

            $profile = Profile::find($id);
            //dd($id);

            // Check for correct user
            return view('home.edit')->with('profile', $profile);
            //dd($id);
            //return view("home.edit");
        }


    public function update($id)
        {

            // Create Post
            $profile = Profile::find($id);
            $profile->firstname = input('firstname');
            $profile->save();

            return redirect('profile');
        }

}
