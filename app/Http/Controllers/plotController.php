<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Plot;

class PlotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plots = Plot::all();
        return view('plot.plot',['plots'=>$plots]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('plot.addplot');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addplot(Request $request)
    {
        // dd($request->all());exit;

        $plots = new Plot;
        $plots->numbar = $request->get('number');
        $plots->status = $request->get('status');
        $plots->street = $request->get('street');
        $plots->block = $request->get('block');
        $plots->save();
        \dd($plots);exit;
        // echo "testing";exit;
        // return redirect('/addPlot')->with('success', 'Plot added succefully!');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //

        return view('plot.plottransfer');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    public function showPlots()
    {
        $data= Plot::find(2);
        echo "<pre>";
        print_r($data->street);
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
        return view('plot.plottransfer');
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
    public function allfiles()
    {
        //
        echo "abcdefg";
        return view('file.files');
    }
}
