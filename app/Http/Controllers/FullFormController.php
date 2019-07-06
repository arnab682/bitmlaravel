<?php

namespace App\Http\Controllers;

use App\Model\FullForm;
use Illuminate\Http\Request;
use App\Http\Requests\FullFormRequest;

class FullFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
        {
            //dd($request->all());
           //return view('forms.index', compact('forms'));
          $fullForms = FullForm::all();
          return view('fullForm.index', compact('fullForms'));
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('FullForm.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /*public function store(Request $request)
    {
        //
    }*/

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(fullForm $fullForm)//route model binding
       {
           //$user = Profile::findOrFail($id);
           //dd($profile);
          //dd($form);
          return view('fullForm.show', compact('fullForm'));
       }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(fullForm $fullForm)
       {
          //dd($fullForm);
          return view('fullForm.edit', compact('fullForm'));
       }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
        {
            //
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
        {
            //
        }




    public function store(FullFormRequest $request)
        {
           try{
               $data = $request->except('picture', 'gender', 'skills', 'hobby');
               if($request->hasFile('picture')){
                   $data['picture'] = $this->uploadImage($request->picture, $request->name);
               }
               $data['date_of_birth'] = $request->dob;
               $data['name']   = $request->name;
               $data['gender'] = $request->gender;
               $data['skills'] = $request->skills;
               $data['hobby']  = $request->hobby;
               $data['bio']    = $request->bio;
               $data['is_active'] = $request->is_active;
               //dd($data);
               FullForm::create($data);
               return redirect()->route('fullForm.index')->withStatus('Created Successfully!');
           }catch (QueryException $exception){
               return redirect()->back()->withInput()->withErrors($exception->getMessage());
           }

        }

    private function uploadImage($file, $title)
       {
           $extension = $file->getClientOriginalExtension();
           $fileName = date('y-m-d') . '_' . time() . '_' . $title . '.' . $extension;
    //        $file->move(storage_path('app/public/products/'), $fileName);
           Image::make($file)->resize(300, 300)->save(storage_path('app/public/form/') . $fileName);
           return $fileName;
       }




}
