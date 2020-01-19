@extends('layouts.master')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10" style="margin-top:10px;">
                <h3>Contacts</h3>
            </div>
            <div class="col-sm-12" style="margin-top:10px;">
                <a class="btn btn-sm btn-success" href="{{ route('contacts.create') }}">Create New Contact</a>
            </div>
        </div>

        <div class="table-responsive">
        <table class="table table-hover table-sm" style="margin-top:10px;">
            <tr>
                {{-- <th width = "50px"><b>No.</b></th> --}}
                <th width = "100px">First Name</a></th>
                <th width = "100px">Last Name <i class="fa fa-sort"></i></th>
                <th width = "100px">Email <i class="fa fa-sort"></i></th>
                <th width = "100px">Phone <i class="fa fa-sort"></i></th>
                <th width = "100px">Birthday <i class="fa fa-sort"></i></th>
                <th width = "180px">Action <i class="fa fa-sort"></i></th>
            </tr>

            @foreach ($contacts as $key => $value)
                <tr>
                    {{--  Need to add in sort functions for each catagory --}}
                    <td>{{$value->firstName}}</td>
                    <td>{{$value->lastName}}</td>
                    <td>{{$value->email}}</td>
                    <td>{{$value->phone}}</td>
                    <td>{{$value->birthday}}</td>
                    <td>
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
        </table>
        </div>
    </div>

@endsection 