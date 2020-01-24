@extends('layouts.master')
@section('content')
<div style="margin-top:20px;"></div>
</div>
<div class="container">
    <div class="col-md-10">
        {{ Form::model($contact_id, ['route'=>['addresses.store', $contact_id], 'method'=>'POST']) }}
        {{ Form::hidden('contact_id',   request()->contact_id ) }}
        @csrf
        @include('contacts.form_address')
      {{ form::close() }}
    </div>
</div>
@endsection 