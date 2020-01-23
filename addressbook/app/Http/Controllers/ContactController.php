<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Contact;
use App\Address;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = DB::table('contacts')->orderBy('firstName')->simplePaginate(10);
        return view('contacts.index', ['contacts' => $contacts]);
              // ->with("i", (request()->input('page',1) -1) *5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dump(create($request->toArray()));
        
        $request->validate
        ([
            'firstName'=>'required|string|max:255',
            'lastName'=>'required|string|max:255',
            'email'=>'required|unique:contacts|string|max:255',
            'phone'=>'nullable|string|max:255',
            'birthday'=>'nullable|string|max:255',
          ]);
        //   dump($request->toArray());
        $data = Contact::create($request->all());
        //   dump($data->toArray());
        $contact_id = $data->id;
       
        dump($data->id);
        dump($contact_id);
          return view('contacts.createAddress')->with('contact_id', $contact_id);
          //response()->json(array('success' => true, 'last_insert_id' => $data->id), 200);
      }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        // dump($contact->toArray());
        // dump($contact->addresses()->count());
            return view('contacts.details')
                    ->with('contact', $contact);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('contacts.edit',compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   // validation failing need to come back to fix this
        $request->validate([
            'firstName'=>'required|string|max:255',
            'lastName'=>'required|string|max:255',
            'email'=>'required|string|max:255',
            'phone'=>'nullable|string|max:255',
            'birthday'=>'nullable|string|max:255',
          ]);
        Contact::find($id)->update($request->all());
        return redirect()->route('contacts.index')->with('success','Contact update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Contact::find($id)->delete();
        return redirect()->route('contacts.index')->with('success','Contact deleted success');   
    }

    public function search() 
    {
        return view('contacts.search');   
    }

    public function postSearch(Request $request)
    {
        // dump($request->toArray());
        $query = $request->get('search');
        // dump($query);
        $contacts = DB::table('contacts')
            ->where('firstName', 'like', '%' . $query . '%')
            ->orWhere('lastName', 'like', '%' . $query . '%')
            ->orWhere('phone', 'like', '%' . $query . '%')
            ->orWhere('email', 'like', '%' . $query . '%')
            ->get();
        // dump($contacts);
        return view('contacts.postSearch', ['contacts' => $contacts]);
    }

    public function createAddress (Request $request)
    {
        // dump($request->toArray());
        // dump($request->contact_id);
        $contact_id = $request->contact_id;
        return view('contacts.createAddress')->with('contact_id', $contact_id);
    }

    public function sort($column)
    {
        // dump($column);
        $contacts = DB::table('contacts')->orderBy($column)->simplePaginate(10);
        return view('contacts.sort', ['contacts' => $contacts]);
    }

    public function sortDesc($column)
    {
        // dump($column);
        $contacts = DB::table('contacts')->sortDesc($column)->simplePaginate(10);
        return view('contacts.sort', ['contacts' => $contacts]);
    }
}
