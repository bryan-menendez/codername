@foreach ($contacts as $contact)

<tr>
    <td>{{$contact->id }}</td>
    <td>{{$contact->name }}</td>
    <td>
        <button class="btn btn-primary btnEdit">Edit</button>
        <button class="btn btn-danger btnDelete" data-id='{{$contact->id }}'>Delete</button>
    </td>
</tr>

@endforeach