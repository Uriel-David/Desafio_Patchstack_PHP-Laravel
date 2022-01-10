<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vulnerabilities;
use App\Http\Requests\VulnerabilitiesRequest;

class VulnerabilitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vulnerabilities = Vulnerabilities::orderBy('ranking', 'asc')->get();
        return view('pages.show')->with('vulnerabilities', $vulnerabilities);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage. insertData
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VulnerabilitiesRequest $request)
    {
        $vulnerability = new Vulnerabilities;
        $vulnerability->title = $request->input('title');
        $vulnerability->description = $request->input('description');
        $vulnerability->ranking = $request->input('ranking');
        $vulnerability->year = $request->input('year');
        $vulnerability->save();

        return redirect('/show');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vulnerability = Vulnerabilities::find($id);
        return view('pages.showOne')->with('vulnerability', $vulnerability);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vulnerability = Vulnerabilities::find($id);
        return view('pages.edit')->with('vulnerability', $vulnerability);
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
        $vulnerability = Vulnerabilities::find($id);
        $vulnerability->title = $request->input('title');
        $vulnerability->description = $request->input('description');
        $vulnerability->ranking = $request->input('ranking');
        $vulnerability->year = $request->input('year');
        $vulnerability->save();

        /* $vulnerability->update($request->all()); */
        return redirect('/show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vulnerability = Vulnerabilities::find($id);
        $vulnerability->delete();

        return redirect('/show');
    }
}
