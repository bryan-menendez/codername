@extends('internals/layout')
@section('title', 'customerz')

@section('content')
    
<h1>CUSTOMERS</h1>

<div class="row">
    <div class="col-12">
        <h3>add customer</h3>

        <form action="/customers" method="post">
            <div class="form-group">
                <label for="name">name:</label>
                <input type="text" name="name" id="name" value="{{old('name')}}" class="form-control"><br>
            </div>
            <div class="form-group">
                <label for="email">email:</label> 
                <input type="email" name="email" id="email" value="{{old('email')}}" class="form-control"><br>    
            </div>
            <div class="form-group">
                <select name="active" id="active">
                    <option value="" disabled>Select status</option>
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>

            <input type="submit" value="ENBIAR" class="btn btn-primary">
            @csrf
        </form>
        
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach        
    </div>
</div>

<div class="row">
    <div class="col-6">   
        <h3>Active customers</h3>     
        <ul>
            @foreach ($activeCustomers as $customer)
                <li>{{$customer->name}}, email: {{$customer->email}} </li>        
            @endforeach
        </ul>
    </div>
    <div class="col-6">     
        <h3>Inactive Customers</h3>   
        <ul>
            @foreach ($inactiveCustomers as $customer)
                <li>{{$customer->name}}, email: {{$customer->email}} </li>        
            @endforeach
        </ul>
    </div>
</div>

@endsection