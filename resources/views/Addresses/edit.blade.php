@extends('layouts.master')
@section('content')
<div style="margin-top:20px;"></div>
  <div class="container">
    <div class="col-md-10">
      {{ Form::model($address,['route'=>['addresses.update',$address->id],'method'=>'PATCH']) }}
      @include('addresses.form_master')
      {{ Form::close() }}
    </div>
  </div>
@endsection