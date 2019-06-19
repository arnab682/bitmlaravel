<?php

namespace App\Http\Controllers;

use App\Model\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $sliders = Slider::all()->sortByDesc('id');;
        //dd($slides);
        return view('slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('slider.create');
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
                'title'=>'required|string',

             ]);
            $slider = new Slider();
            $slider->title = $_POST['title'];
            $slider->description = $_POST['description'];
            $slider->save();

             //return redirect()->route('labs.index')->withMessage('Lab is Inserted Successfully.');
            return redirect()->route('slider.index')->with('message','Submit is Inserted Successfully.');

        }catch(QueryException $e){

             return redirect()
                ->route('slider.create')
                ->withInput()
                ->withErrors($e->getMessage());
        }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        return view('slider.show', compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view('slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        $data = $request->all();

        $slider->update($data);
        return redirect()->route('slider.index')->with('message','Submit is Inserted Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();
        return redirect()->route('slider.index')->with('message','Submit is Inserted Successfully.');
    }
}
