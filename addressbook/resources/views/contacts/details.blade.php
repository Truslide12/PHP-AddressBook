@extends('layouts.master')
@section('content')
<div class="row" style="margin-top:20px">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Show Contact</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('contacts.index') }}">Contacts</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>First Name : </strong>
            {{ $contact->firstName}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Last Name : </strong>
            {{ $contact->lastName}}
        </div>
    <div class="form-group">
            <strong>Email : </strong>
            {{ $contact->email}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Phone : </strong>
            {{ $contact->phone}}
        </div>
    <div class="form-group">
            <strong>Birthday : </strong>
            {{ $contact->birthday}}
        </div>
    </div>
    </div>
    <table class="table table-hover">
        <tr>
            <th>Type</th>
            <th>Number</th>
            <th>Street</th>
            <th>City</th>
            <th>State</th>
            <th>Zip</th>
        </tr>
        @foreach($contact->addresses as $row)
        <tr>
            <td>{{ $row->type}}</td>
            <td>{{ $row->number}}</td>
            <td>{{ $row->street}}</td>
            <td>{{ $row->city}}</td>
            <td>{{ $row->state}}</td>
            <td>{{ $row->zip}}</td>
            <td><a class="btn btn-sm btn-warning" href="{{ route('addresses.edit', $row->id)}}">Edit</a></td>
            <td>
                <form action="{{ route('addresses.destroy', $row->id) }}" method="post">
                    @csrf
                @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
    @endsection