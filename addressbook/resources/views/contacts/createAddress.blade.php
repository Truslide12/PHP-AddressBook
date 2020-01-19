@extends('layouts.master')
@section('content')
<div style="margin-top:20px;"></div>
</div>
  <table>
  <tr class="row">
    <td class="col-md-6">
        {{ Form::model($contact_id, ['route'=>['addresses.store', $contact_id], 'method'=>'POST']) }}
        {{ Form::hidden('contact_id',   request()->contact_id ) }}
        @csrf
        @include('contacts.form_address')
      {{ form::close() }}
    </td>
  </tr>
  </table>
@endsection 