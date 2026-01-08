@extends('template.default')
@section('content')
<h1>Flights Create</h1>
<form action="{{ url('/flights/' . $flight->id) }}" method="post">
    @csrf
    <label for="name">Name</label>
    <input class="form-control" type="text" name="name" id="name" value="{{ $flight->name }}">
    <label for="airline">Airline</label>
    <input class="form-control" type="text" name="airline" id="airline" value="{{ $flight->airline }}">
    <label for="number_of_seat">Number of Seat</label>
    <input class="form-control" type="number" name="number_of_seat" value="{{ $flight->number_of_seat }} ">
    <label for="price">Price</label>
    <input class="form-control" type="number" name="price" id="price" value="{{ $flight->price }}">
    <button class="btn btn-primary mt-3" type="submit">Submit</button>
</form>
<h1>Flights Lists</h1>
<table>
    <thead>
        <tr>
            <td>id</td>
            <td>name</td>
            <td>airline</td>
            <td>number of seats</td>
            <td>price</td>
            <td></td>
        </tr>
    </thead>
    <?php foreach ($flights as $item) { ?>
    <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->airline }}</td>
        <td>{{ $item->number_of_seat }}</td>
        <td>{{ $item->price }}</td>
        <td>แก้ไข / ลบ</td>
    </tr>
    <?php } ?>

</table>
@endsection
