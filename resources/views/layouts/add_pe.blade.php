@extends('layout')

@section('contenar')
<style>
    .contenar{
        margin: 50px auto;
        width: 50%;
        text-align: center;
    }
    .contenar input{
        text-align: center
    }
</style>
<div class="contenar">
    <form action="{{url('stor')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">First Name:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="first name" name="first">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Last Name:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="last name" name="last">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email:</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
        </div>
        <button type="submit" class="btn btn-warning">Send</button>
    </form>

</div>
@endsection
