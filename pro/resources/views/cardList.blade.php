@extends('master')

@section('content')
    
<div class="container mt-3 custom-cartlist">
    <h1>your product</h1>

    <a href="/ordernow" class="btn btn-success">order now</a>
    <div class="container mt-5">
        @foreach ($products as $item)
        <div class="row">
            <div class="col-sm-4">
                <img  style="width: 200px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTK3qii7TblspIFfvbveoAsZfwTHX57BOyEh-9gilgT_SeyahRUHu5ingvA9MbP3a4vE7I&usqp=CAU" alt="">
            </div>
            <div class="col-sm-4 mt-3  ">
                <h4>{{$item->name}}</h4>
                <h6> {{$item->price}}</h6>
                
            </div>
            <div class="col-sm-4">
                
                    <a class="btn btn-danger" href="/removeitem/{{$item->cart_id}}"> Remove from cart</a> 
            </div>
        </div>
        <br><hr> 
        @endforeach
        <a href="/ordernow" class="btn btn-success">order now</a>
    </div>
</div>

@endsection