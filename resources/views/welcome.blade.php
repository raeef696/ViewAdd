@extends('layout')


@section('contenar')
<table class="table">
    <thead>

    <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Email</th>
    </tr>
    </thead>
    @foreach ($viwe_add as $data)
    <tbody>

    <tr>
        <th scope="row">{{$data->id}}</th>
        <td>{{$data->Firstname}}</td>
        <td>{{$data->faristname}}</td>
        <td>{{$data->email}}</td>
    </tr>

    </tbody>
    @endforeach
    </table>
@endsection
