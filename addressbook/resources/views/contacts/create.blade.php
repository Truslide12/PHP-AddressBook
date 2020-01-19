@extends('layouts.master')
@section('content')
<div style="margin-top:20px;"></div>
  <div class="row">
    <div class="col-md-6">
      {{ Form::open(['route'=>'contacts.store', 'method'=>'POST']) }}
        @include('contacts.form_master')
      {{ form::close() }}
    </div>
  </div>
@endsection