<?php

namespace App\Http\Controllers;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

use App\Http\Requests\SliderRequest;
use App\Model\Slider;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

//        $sliders = Slider::latest()->get();
        $sliders=Slider::all();
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
    public function store(SliderRequest $request)
    {

        try{
            //dd($request->input());
            if($request->hasFile('image')) {
                $data = $request->all();
                $fileName = $request->title.'-'.$request->image->getClientOriginalName();
                $request->image->move(public_path('/images/'), $fileName);
                $data['image']=$fileName;
            }
            else{
                $data['image'] = null;
            }
            //dd($data);
            Slider::create($data);

            //return redirect()->route('labs.index')->withMessage('Lab is Inserted Successfully.');
            return redirect()->route('slider.index')->with('message','Slider is Inserted Successfully.');

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
//        $slider=Slider::findOrfail($id);
        return view('slider.show',compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
//        $slider=Slider::findOrfail($id);
        return view('slider.edit',compact('slider'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SliderRequest $request, Slider $slider)
    {
        try {

//            $slider = Slider::findOrFail($id);
            $data = $request->all();
            $oldpath=public_path('picture/' . $slider->image);

            if($request->hasFile('image')){
                $image=$request->file('image');
                $filename=time(). '.' .$image->getClientOriginalExtension();
                $location=public_path('/picture/');
                $image->move($location, $filename);
                $data['image']=$filename;

            }
            else if($oldpath)
            {
                $data['image']=$slider->image;
            }

            $slider->update($data);
            return redirect('slider')->with('message','Slider Updated !');
        }
        catch(QueryException $e){

            return redirect()
                ->route('slider.create')
                ->withInput()
                ->withErrors($e->getMessage());
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        try{
//            $slider=Slider::findOrFail($id);

            $slider->delete();
            return redirect()->route('slider.index')->with('message','Slider is Deleted Successfully.');
        }catch(QueryException $e){
            return redirect()
                ->route('slider.index')
                ->withErrors($e->getMessage());
        }
    }





    public function display(){

        //return 'lol';
        $sliders = Slider::all();
        //dd($data);
        return view('slider.home', compact('sliders'));
    }

    public function pdf(){
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML('<h1>Hello world!</h1>');
        $mpdf->Output();
    }

    public function xl(){
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'Hello World 1!');
        $sheet->setCellValue('A2', 'Hello World 2!');
        $sheet->setCellValue('A3', 'Hello World 3!');
        $sheet->setCellValue('A4', 'Hello World 4!');

        $writer = new Xlsx($spreadsheet);
        $writer->save('hello world.xlsx');
    }




    public function activate(SliderRequest $request){

        $slider = Slider::find($request->get('id'));
        $data = ['is_active'=>1];
        $slider->update($data);
        return redirect()->route('slider.index')->with('message','Slider is activated Successfully.');
    }

    public function deactivate(SliderRequest $request){
        $slider = Slider::find($request->get('id'));
        $slider->update(['is_active'=>0]);
        return redirect()->route('slider.index')->with('message','Slider is deactivated Successfully.');
    }

    public function downloadxl(){


        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'Hello World !');
        $sheet->setCellValue('A2', 'Hello World !');

        $writer = new Xlsx($spreadsheet);
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="'.'helloworld'.'.xls"'); /*-- $filename is  xsl filename ---*/
        header('Cache-Control: max-age=0');

        //$Excel_writer->save('php://output');
        $writer->save('php://output');
    }

    public function downloadpdf(){


        try {
            error_reporting(0);
            app('debugbar')->disable();
            $sliders=Slider::all();
            //dd($sliders);
            $html =  view('slider.downloadpdf', compact('sliders'))->render();
            $mpdf = new \Mpdf\Mpdf();
            $mpdf->debug = true;
            $mpdf->WriteHTML($html);
            $mpdf->Output();
           // $mpdf->Output(public_path().'/asdfsdf1.pdf','F');
        } catch (\Mpdf\MpdfException $e) { // Note: safer fully qualified exception
            //       name used for catch
            // Process the exception, log, print etc.
            echo $e->getMessage();
        }

    }


}
