@extends('layouts.master')

@section('content')
<div class="row">
        <div class="col-md-12">
                {{ Form::open(['route'=>'contacts.postSearch', 'method'=>'GET']) }}
                @include('contacts.form_search')
                {{ form::close() }}
        </div>
</div>
@endsection
