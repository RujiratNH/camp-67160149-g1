@extends('template.default')

@section('content')
    <h1>Flights Create</h1>
    <form action="{{ url('flights') }}" method="post">
        @csrf
        <label for="name">Name</label>
        <input class="form-control" type="text" name="name" id="name">
        <label for="airline">Airline</label>
        <input class="form-control" type="text" name="airline" id="airline">
        <label for="number_of_seat">Number of Seat</label>
        <input class="form-control" type="number" name="number_of_seat">
        <label for="price">Price</label>
        <input class="form-control" type="number" name="price" id="price">
        <button class="btn btn-primary mt-3" type="submit">Submit</button>
    </form>
    @include('flights.table')
@endsection
