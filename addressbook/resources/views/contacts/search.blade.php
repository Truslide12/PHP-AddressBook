@extends('layouts.master')

@section('content')
<div class="container">
        <div>
                {{ Form::open(['route'=>'contacts.postSearch', 'method'=>'GET']) }}
                @include('contacts.form_search')
                {{ form::close() }}
        </div>
</div>
@endsection
