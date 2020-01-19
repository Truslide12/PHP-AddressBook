@extends('layouts.app')
@section('content')
<div style="margin-top:20px;"></div>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Show Contact</h2>
        </div>
        <div class="pull-right">
            <br/>
            <a class="btn btn-primary" href="{{ route('contacts.index') }}"> <i class="glyphicon glyphicon-arrow-left"></i></a>
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
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
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
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                <strong>Birthday : </strong>
                {{ $contact->birthday}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <a class="btn btn-sm btn-warning" href="{{ route('addresses.edit', $id)}}">Edit</a>
        <form action="{{ route('addresses.destroy', $id) }}" method="post">
        @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
        </form>
    </div>
</div>
@endsection