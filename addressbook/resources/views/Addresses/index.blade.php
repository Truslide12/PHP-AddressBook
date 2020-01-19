@extends('layouts.master')

@section('content')
<div style="margin-top:20px;"></div>
<table class="table table-hover table-sm">
    <tr>
        <th width = "100px">Type <i class="fa fa-sort"></i></th>
        <th width = "100px">Number <i class="fa fa-sort"></i></th>
        <th width = "100px">Street <i class="fa fa-sort"></i></th>
        <th width = "100px">City <i class="fa fa-sort"></i></th>
        <th width = "100px">Zip <i class="fa fa-sort"></i></th>
    </tr>

    @foreach ($addresses as $key => $value2)
    <tr>
        <td>{{$value2->type}}</td>
        <td>{{$value2->number}}</td>
        <td>{{$value2->street}}</td>
        <td>{{$value2->city}}</td>
        <td>{{$value2->state}}</td>
        <td>{{$value2->zip}}</td>
        <td>{{$value2->contact_id}}</td>
        <td>
            <form action="{{ route('addresses.destroy', $value2->id) }}" method="post">
            <a class="btn btn-sm btn-warning" href="{{ route('addresses.edit', $value2->id)}}">Edit</a>
            @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection 