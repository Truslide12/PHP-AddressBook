@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      {{ Form::open(['route'=>'contacts.store', 'method'=>'POST']) }}
        @include('contacts.form_master')
      {{ form::close() }}
    </div>
  </div>
@endsection