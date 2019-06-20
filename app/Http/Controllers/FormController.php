<?php

namespace App\Http\Controllers;

use App\Model\Form;
use App\Http\Requests\FormRequest;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        //$form = new Form();
        //$forms = $form->all();
        $forms = Form::all();
        return view('form.index', compact('forms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{

            $this->validate($request, [        
                'name'=>'required|string',
                'password' => ['required', 
                   'min:6', 
                   'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X])(?=.*[!$#%]).*$/', 
                   'confirmed'],
                'dob'=>'required|string',
                'description'=>'required|string',
             ]);
            $form = new Form();

            /*$form->name = $_POST['name'];
            $form->password = $_POST['password'];
            $form->date_of_birth = $_POST['dob'];
            $form->description = $_POST['description'];
            //$form->skill = $_POST['dropdown'];
            //$form->gender = $_POST['gender'];
            //$form->skill = $request->dropdown;
            $form->save();*/

            $form->name = $request->name;
            $form->password = $request->password;
            $form->date_of_birth = $request->dob;
            $form->description = $request->description;
            
            $form->save();


            //$data = $request->all();
            //dd($data);
            //Form::create($data);

            

             //return redirect()->route('labs.index')->withMessage('Lab is Inserted Successfully.');
            return redirect()->route('form.index')->with('message','Submit is Inserted Successfully.');

        }catch(QueryException $e){

             return redirect()
                ->route('form.create')
                ->withInput()
                ->withErrors($e->getMessage());
        }

        
    }

    /**

        $this->validate($request, [
          

         ]);


     * Display the specified resource.
     *
     * @param  \App\Model\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function show(Form $form)
    {
        //dd($form);

        return view('form.show', compact('form'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function edit(Form $form)
    {
        return view('form.edit', compact('form'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Form $form)
    {
        $data = $request->all();
        $form->update($data);

        return redirect()->route('form.index')->with('message','Submit is Inserted Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form $form)
    {
        //dd($form);        
        $form->delete();
        return redirect()->route('form.index')->with('message','Submit is Inserted Successfully.');
        //return back();
    }
}
