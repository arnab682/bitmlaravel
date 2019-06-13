<?php

namespace App\Http\Controllers;

use App\About;
use App\Http\Requests\ProfileRequest;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //

     function about(){
    	return view("home.about");
    }

   /*  function index()
    {
     return view('upload');
    } */

    public function upload(Request $request)
    { //dd($request); die();
    	$about = new About();
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
	     $about->upload = $new_name;
	     $about->save();

	     return back()->with('success', 'Image Uploaded Successfully')->with('path', $new_name);
    }

    /* function store(){
     	//dd()
        $about = new About();
        $about->picture = $_POST['picture'];
        //dd($about->picture);
        $about->save();
        return view("home.about");
    }

    public function uploadGalery(Request $request){
      $this->validate($request, [
        'file' => 'required|image|mimes:jpeg,png,jpg,bmp,gif,svg|max:2048',
      ]);
      if ($request->hasFile('file')) {
        $image = $request->file('file');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/storage/galeryImages/');
        $image->move($destinationPath, $name);
        $this->save();
        return back()->with('success','Image Upload successfully');
      }

    }*/
}
