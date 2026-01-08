<h1>Flights Listsss</h1>
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
        <td class="pe-2">{{ $item->price }}</td>
        <td>
            <div class="d-flex gap-2">
                <a class="btn btn-warning" href="{{ url('/flights/' . $item->id) . '/edit' }}">แก้ไข
                </a>

                <form style="display: inline-bloock" action="{{ url('/flights/' . $item->id) }}" method="post">
                    @csrf
                    <button class="btn btn-danger">ลบ</button>

                </form>
            </div>
        </td>
    </tr>
    <?php } ?>

</table>
