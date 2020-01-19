@extends('layouts.master')
@section('content')
<div style="margin-top:20px;"></div>
<table>
    <tr class="row">
      <td class="col-md-3">
              <div class="form-group">
                  <strong>First Name : </strong>
                  {{ $contact->firstName}}
              </div>
      </td>
      <td class="col-md-3">
        <div class="form-group">
            <strong>Last Name : </strong>
            {{ $contact->lastName}}
        </div>
      </td>
    </tr>
    <tr class="row">
      <td class="col-md-6">
          <div class="form-group">
                  <strong>Email : </strong>
                  {{ $contact->email}}
          </div>
        </td>
    </tr>
    <tr class="row">
      <td class="col-md-6">
        <div class="form-group">
            <strong>Phone : </strong>
            {{ $contact->phone}}
        </div>
      </td>
    </tr>
    <tr class="row">
        <td class="col-md-6">
          <div class="form-group">
                  <strong>Birthday : </strong>
                  {{ $contact->birthday}}
          </div>
        </td>
    </tr>
    <tr class="row">
      <td class="col-md-6">
          {{ Form::open(['route'=>'addresses.store', 'method'=>'POST']) }}
          @include('addresses.form_master')
        {{ form::close() }}
      </td>
    </tr>
    </table>
@endsection