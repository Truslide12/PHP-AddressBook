@extends('layouts.app')
@extends('contacts')

@section('content')

        <table class="table table-hover table-sm">
            <tr>
                <th width = "100px">Type</th>
                <th width = "100px">Number</th>
                <th width = "100px">Street</th>
                <th width = "100px">City</th>
                <th width = "100px">Zip</th>
            </tr>

            @foreach (Address::where('contact_id', '>', $contacts->id))
                <tr>
                    <td>
                            <tr>{{$value->type}}</tr>
                            <tr>{{$value->number}}</tr>
                            <tr>{{$value->street}}</tr>
                            <tr>{{$value->city}}</tr>
                            <tr>{{$value->state}}</tr>
                            <tr>{{$value->zip}}</tr>
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