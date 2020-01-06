@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      {{ Form::model($address,['route'=>['addresses.update',$address->id],'method'=>'PATCH']) }}
      @include('addresses.form_master')
      {{ Form::close() }}
    </div>
  </div>
@endsection