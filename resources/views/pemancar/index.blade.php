@extends('layouts.app')
  
@section('title', 'Pemancar')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Pemancar</h1>
        <a href="{{ route('pemancar.create') }}" class="btn btn-primary">Add Parameter</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Address</th>
                <th>Longitude</th>
                <th>Latitute</th>
                <th>Service</th>
                <th>Height</th>
                <th>Modullation</th>
                <th>Gain</th>
                <th>Frequency</th>
                <th>Transmit Power</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($pemancar->count() > 0)
                @foreach($pemancar as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->address }}</td>
                        <td class="align-middle">{{ $rs->longitude }}</td>
                        <td class="align-middle">{{ $rs->latitute }}</td>
                        <td class="align-middle">{{ $rs->service }}</td>
                        <td class="align-middle">{{ $rs->height }}</td>
                        <td class="align-middle">{{ $rs->modullation}}</td>
                        <td class="align-middle">{{ $rs->gain }}</td>
                        <td class="align-middle">{{ $rs->frequency }}</td>
                        <td class="align-middle">{{ $rs->transmit_power }}</td>    
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('pemancar.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('pemancar.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('pemancar.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="11">Parameter not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection