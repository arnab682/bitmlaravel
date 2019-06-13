<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;

class FormController extends Controller
{
    //

    public function index(Request $request)
	   {
			//dd($request->all());
	       return view('forms.index', compact('forms'));
	   }

    public function create()
		{
		   return view('forms.create');
		}


	public function show(Form $form)//route model binding
	   {
	//        $user = Profile::findOrFail($id);
	//        dd($profile);
	       return view('forms.show', compact('form'));
	   }

	public function edit(Profile $form)
	   {
	       return view('forms.edit', compact('form'));
	   }


	public function store(FormRequest $request)
		{
		   try{
		       $data = $request->except('picture', 'skills', 'hobby');
		       if($request->hasFile('picture')){
		           $data['picture'] = $this->uploadImage($request->picture, $request->name);
		       }
		       $data['skills'] = serialize($request->skills);
		       $data['hobby'] = serialize($request->hobby);
		       Profile::create($data);
		       return redirect()->route('forms.index')->withStatus('Created Successfully!');
		   }catch (QueryException $exception){
		       return redirect()->back()->withInput()->withErrors($exception->getMessage());
		   }

		}

		private function uploadImage($file, $title)
		   {
		       $extension = $file->getClientOriginalExtension();
		       $fileName = date('y-m-d') . '_' . time() . '_' . $title . '.' . $extension;
		//        $file->move(storage_path('app/public/products/'), $fileName);
		       Image::make($file)->resize(300, 300)->save(storage_path('app/public/users/') . $fileName);
		       return $fileName;
		   }



	public function update(Request $request, Form $form)
	   {
	       try{
	           $data = $request->except('picture', 'skills', 'hobby');
	           if($request->hasFile('picture')){
	               $data['picture'] = $this->uploadImage($request->picture, $request->name);
	           }else{
	               $data['picture'] = $form>picture;
	           }
	           $data['skills'] = serialize($request->skills);
	           $data['hobby'] = serialize($request->hobby);
	           $form>update($data);
	           return redirect()->route('forms.index')->withStatus('Updated Successfully !');
	       }catch (QueryException $exception){
	           return redirect()->back()->withInput()->withErrors($exception->getMessage());
	       }
	   }


	public function destroy(Form $form)
	   {
	       try{
	           $form->delete();
	           return redirect()->route('forms.index')->withStatus('Deleted Successfully !');
	       }catch (QueryException $exception){
	           return redirect()->back()->withInput()->withErrors($exception->getMessage());
	       }
	   }



}
