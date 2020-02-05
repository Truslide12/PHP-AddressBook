{{-- This will show the address in google maps --}}
@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Show All Addresses</h2>
        </div>
        <div class="pull-right">
            <br/>
            <a class="btn btn-primary" href="{{ route('addresses.index') }}"> <i class="glyphicon glyphicon-arrow-left"></i></a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-2">
        <div class="form-group">
            <strong>Type : </strong>
            {{ $address->type}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
    <div class="form-group">
            <strong>Street : </strong>
            {{ $address->street}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
        <div class="form-group">
            <strong>City : </strong>
            {{ $address->city}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-2">
        <div class="form-group">
            <strong>State : </strong>
            {{ $address->state}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-2">
        <div class="form-group">
            <strong>Zip Code : </strong>
            {{ $address->zip}}
        </div>
    </div>
    <div>
        <form action="{{ route('addresses.destroy', $value2->id) }}" method="post">
        <a class="btn btn-sm btn-warning" href="{{ route('addresses.edit', $value2->id)}}">Edit</a>
        @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
        </form>
    </div>
</div>
@endsection