@extends('layouts.master')

@section('content')
<div class="row">
        <div class="col-md-12">
                {{ Form::open(['route'=>'contacts.search', 'method'=>'GET']) }}
                @include('search.form_master')
                {{ form::close() }}
        </div>
</div>
@endsection
