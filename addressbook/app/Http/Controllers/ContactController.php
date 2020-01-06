<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();//->paginate(5);
        // $addresses = Address::all();
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
        $this->validate($request,[
            'firstName'=>'required|string|max:255',
            'laststName'=>'required|string|max:255',
            'email'=>'required|string|max:255',
            'phone'=>'string|max:255',
            'birthday'=>'string|max:255',
          ]);
          Contacts::create($request->all());
          return redirect()->route('contacts.index')->with('success','Contact created success');
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
            // return $this->hasMany('App\Address' , $id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Contacts::find($id);
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
    {
        $this->validate($request,[
            'firstName'=>'required|string|max:255',
            'laststName'=>'required|string|max:255',
            'email'=>'required|string|max:255',
            'phone'=>'string|max:255',
            'birthday'=>'string|max:255',
          ]);
          Contacts::find($id)->update($request->all());
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
        Contacts::find($id)->delete();
        return redirect()->route('contacts.index')->with('success','Contact deleted success');   
    }

    public function getSearch(Request $request) 
    {
        return view('search.index');   
    }

    public function postSearch(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'query' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('post/create')
                        ->withErrors($validator)
                        ->withInput();
        }
        else
        {
            $query = $request->input('query');
        }

        $results = Contact::table('contacts')
            ->where('firstName', $query)
            ->orWhere('lastName', $query)
            ->orWhere('phone', $query)
            ->orWhere('email', $query)
            ->get();
        // SELECT * FROM ', contacts'. WHERE ', firstName,' LIKE\$query';'
        // , fucntionfirstName || lastName || phone || email 
    }
    // public function sort($value)
    // {
    //     $contacts = Contact::all();
    //     $sorted = $contacts->sortBy($value);
    //     return view('contacts.index', ['contacts' => $sorted]);
    // }
}
