@extends('layouts.master')

@section('content')

<div class="container">
    <div>
        <div style="margin-top:10px;">
            <h3>Contacts</h3>
        </div>
        <div style="margin-top:10px; margin-bottom:10px;">
            <a class="btn btn-sm btn-success" href="{{ route('contacts.create') }}">Create New Contact</a>
        </div>
    </div>

    <div class="table-responsive">
    <table class="table table-hover col-sm-12">
        <thead>
        <tr class="row" style="text-align:center">
            <th class="col-sm-1"><a type="submit" class="btn" href="{{ route('contacts.sort', ['column' => 'firstName', 'currentCol' => $currentCol , 'sort_order' => $sort_order] )}}">First Name</a></th>
            <th class="col-sm-1"><a type="submit" class="btn" href="{{ route('contacts.sort', ['column' => 'lastName', 'currentCol' => $currentCol, 'sort_order' => $sort_order] )}}">Last Name</a></th>
            <th class="col-sm-2"><a type="submit" class="btn" href="{{ route('contacts.sort', ['column' => 'email', 'currentCol' => $currentCol, 'sort_order' => $sort_order] )}}">Email</a></th>
            <th class="col-sm-1"><a type="submit" class="btn" href="{{ route('contacts.sort', ['column' => 'phone', 'currentCol' => $currentCol, 'sort_order' => $sort_order] )}}">Phone</a></th>
            <th class="col-sm-2"><a type="submit" class="btn" href="{{ route('contacts.sort', ['column' => 'birthday', 'currentCol' => $currentCol, 'sort_order' => $sort_order] )}}">Birthday</a></th>
            <th class="col-sm-3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($contacts as $key => $value)
            <tr class="row" style="text-align:center; margin-top:5px;">
                {{--  Need to add in sort functions for each catagory --}}
                <td class="col-sm-1">{{$value->firstName}}</td>
                <td class="col-sm-1">{{$value->lastName}}</td>
                <td class="col-sm-2">{{$value->email}}</td>
                <td class="col-sm-1">{{$value->phone}}</td>
                <td class="col-sm-2">{{$value->birthday}}</td>
                <td class="col-sm-3">
                    <form action="{{ route('contacts.destroy', $value->id) }}" method="post">
                        <a class="btn btn-sm btn-success" href="{{ route('contacts.show', $value->id)}}">Show</a>
                        <a class="btn btn-sm btn-warning" href="{{ route('contacts.edit', $value->id)}}">Edit</a>
                        <a class="btn btn-sm btn-second" href="{{ route('contacts.createAddress', ['contact_id' => $value->id])}}">Add Address</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach 
        </tbody>
    </table>
    </div>
    {{ $contacts->links() }}
</div>
@endsection 
