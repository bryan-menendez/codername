@extends('internals/layout')
@section('title', 'kontakt')

@section('content')

<div class="container">
    <div class="col-md-12">
        <div class="clearfix">
            <span>LARAVEL DEL MAL CON JUANITO EL DE LAS CUERIS</span><br>
            <a class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#modalAddContact">Crear nuevo contacto</a><br>
        </div>

        <table class="table table-bordered table-striped table-condensed">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
</div>

@include('contacts/partials/modalAddContact')
@include('contacts/partials/modalEditContact')

@endsection

@section('scripts')
<script type="text/javascript">
    console.log("defining routes...");
    var contactListUrl = '{{route('contactGetList')}}';
</script>

<script type="text/javascript" src="{{ URL::asset('/js/contact.js') }}"></script>
@endsection
