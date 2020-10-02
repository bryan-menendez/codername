@extends('internals/layout')
@section('title', 'kontakt')

@section('content')

<div class="container">
    <div class="col-md-12">
        <div class="clearfix">
            <span>LARAVEL DEL MAL CON JUANITO EL DE LAS CUERIS</span><br>
            <button class="btn btn-success btn-sm pull-right btnAdd" data-toggle="modal" data-target="#modalAddContact">Crear nuevo contacto</button><br>
        </div>

        <div id="contactTable">
            
        </div>
    </div>
</div>

@include('contacts/partials/modalAddContact')
@include('contacts/partials/modalEditContact')
@include('contacts/partials/modalDeleteContact')

@endsection

@section('scripts')
<script type="text/javascript">
    console.log("defining routes...");
    var contactListUrl = '{{route('contactGetList')}}';
    var contactDetailsUrl = '{{route('contactGetDetails')}}';
</script>

<script type="text/javascript" src="{{ URL::asset('/js/contact.js') }}"></script>
@endsection
