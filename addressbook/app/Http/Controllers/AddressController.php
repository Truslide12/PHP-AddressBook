<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $addresses = Address::all();//->paginate(5);
        return view('addresses.index', ['addresses' => $addresses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addresses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'firstName'=>'required|string|max:255',
            'laststName'=>'required|string|max:255',
            'email'=>'required|string|max:255',
            'phone'=>'string|max:255',
            'birthday'=>'string|max:255',
          ]);
          Addresses::create($request->all());
          return redirect()->route('addresses.index')->with('success','Address created success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Addresses::find($id);
        return view('addresses.edit',compact('address'));
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
        $this->validate($request,[
            'firstName'=>'required|string|max:255',
            'laststName'=>'required|string|max:255',
            'email'=>'required|string|max:255',
            'phone'=>'string|max:255',
            'birthday'=>'string|max:255',
          ]);
          Addresses::find($id)->update($request->all());
          return redirect()->route('addresses.index')->with('success','Address update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Addresses::find($id)->delete();
        return redirect()->route('addresses.index')->with('success','Address deleted success'); 
    }
}
