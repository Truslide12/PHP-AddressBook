@extends('layouts.master')
@section('content')
<div style="margin-top:20px;"></div>
  <div class="container">
    <div class="col-md-6 col-md-offset-3">
      {{ Form::model($contact,['route'=>['contacts.update',$contact->id],'method'=>'PATCH']) }}
      @include('contacts.form_master')
      {{ Form::close() }}
    </div>
  </div>
@endsection