<table class="table table-bordered table-striped table-condensed">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Phone</td>
            <td>Comment</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($contacts as $contact)
        <tr>
            <td>{{$contact->id }}</td>
            <td>{{$contact->name }}</td>
            <td>{{$contact->phone }}</td>
            <td>{{$contact->comment }}</td>
            <td>
                <button class="btn btn-primary btnEdit" data-id='{{$contact->id }}' data-toggle="modal" data-target="#modalEditContact">Edit</button>
                <button class="btn btn-danger btnDelete" data-id='{{$contact->id }}' data-toggle="modal" data-target="#modalDeleteContact">Delete</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="pageList" id="pageList">
    @if (method_exists($contacts, "links"))
        {{$contacts->links()}}
    @endif
</div>

<meta id="page_id" value="1">

