@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
            <h2>Search Results</h2>
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
        </tr>
        @endforeach
    </table>
</div>
    @endsection