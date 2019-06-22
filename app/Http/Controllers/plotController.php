<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Plot;

class plotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('plot.plot');
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
    public function store(Request $request)
    {
        // echo "testing";exit;
        var_dump($request);exit;
        $request->validate([
            'numbar'=>'required',
            'status'=>'required',
            'street'=>'required',
            'block'=>'required'
        ]);
        echo "testing";exit;
        $plot = new Plot([
            'number' => $request->get('number'),
            'status' => $request->get('status'),
            'street' => $request->get('street'),
            'block' => $request->get('block'),
        ]);
        $plot->save();
        echo "testing";exit;
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
