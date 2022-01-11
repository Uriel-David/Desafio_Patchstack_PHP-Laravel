<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vulnerabilities;
use App\Http\Requests\VulnerabilitiesRequest;

class ApiVulnerabilitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vulnerabilities = Vulnerabilities::all();
        return $vulnerabilities;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage. insertData
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VulnerabilitiesRequest $request)
    {
        $vulnerability = $request->all();
        return Vulnerabilities::create($vulnerability);
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
        return $vulnerability;
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
    public function update(VulnerabilitiesRequest $request, $id)
    {
        $vulnerability = Vulnerabilities::find($id);
        $vulnerability->update($request->all());
        return $vulnerability;
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
        return $vulnerability;
    }
}
