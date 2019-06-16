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


    public function uploadGalery(Request $request){

    	$about = new About();
      $this->validate($request, [
        'select_file' => 'required|image|mimes:jpeg,png,jpg,bmp,gif,svg|max:2048',
      ]);
      if ($request->hasFile('select_file')) {
        $image = $request->file('select_file');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('\storage\images');
        //dd($destinationPath);
        $image->move($destinationPath, $name);

        $about->upload = $name;

        $about->save();
        return back()->with('success','Image Upload successfully');
      }

    }
}
