@extends('master')

@section('content')
    
<div class="container custom-cartlist">
    <h1>my all product</h1>

   
    <div class="container">
        @foreach ($orders as $item)
        <div class="row">
            <div class="col-sm-4">
                <img style="width: 150PX" class="mt-4" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTK3qii7TblspIFfvbveoAsZfwTHX57BOyEh-9gilgT_SeyahRUHu5ingvA9MbP3a4vE7I&usqp=CAU" alt="">
            </div>
            <div class="col-sm-4 mt-4">
                {{$item->price}}<br>
                {{$item->name}}
                
            </div>
            <div class="col-sm-4 mt-4">
                <h4>Address -{{$item->address}}</h4>  
                {{-- {{$item->product_id}} --}}
            </div>
        </div>
        <br><hr> 
        @endforeach
       
    </div>
</div>

@endsection