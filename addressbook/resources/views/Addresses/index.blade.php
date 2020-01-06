@extends('layouts.app')
@extends('contacts')

@section('content')

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
                    <td>
                            <tr>{{$value2->type}}</tr>
                            <tr>{{$value2->number}}</tr>
                            <tr>{{$value2->street}}</tr>
                            <tr>{{$value2->city}}</tr>
                            <tr>{{$value2->state}}</tr>
                            <tr>{{$value2->zip}}</tr>
                            <tr>{{$value2->contact_id}}</tr>
                    <td>
                        <form action="{{ route('addresses.destroy', $value->id) }}" method="post">
                            <a class="btn btn-sm btn-warning" href="{{ route('addresses.edit', $value->id)}}">Edit</a>
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection 