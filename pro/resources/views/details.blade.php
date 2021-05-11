@extends('master')

@section('content')
    
<div class="container custom-product">




   <div class="">
       <div class="mt-4">
        <a href="/" class="btn btn-success mb-4">go to back</a>

        <div class="container p-4 bg-secondary" >
            <div class="row" style="  background-size: 300px 100px">
              <div class="col">
                <img  class="mt-4" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTK3qii7TblspIFfvbveoAsZfwTHX57BOyEh-9gilgT_SeyahRUHu5ingvA9MbP3a4vE7I&usqp=CAU" alt="">
              </div>
              <div class="col pt-3">
                <h3>{{$product['name']}}</h3>
                <h4>{{$product['price']}}</h4>
                <h6>{{$product['describtion']}}</h6>
                <h6>{{$product['category']}}</h6> 
                
                <form action="/addtocart" method="GET">
                    @csrf
                    <input type="hidden" name="product_id" value="{{$product['id']}}">
                    <button class="btn btn-primary">ADD TO CART</button>
                    <button class="btn btn-warning " >BUY NOW</button>
                </form>
              </div>
            </div>
        </div>


       </div>
        
    
    
    
    
    
    
    {{-- <div class="row">
           <div class="col-sm-6">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTK3qii7TblspIFfvbveoAsZfwTHX57BOyEh-9gilgT_SeyahRUHu5ingvA9MbP3a4vE7I&usqp=CAU" alt="">
                
           </div>
           <div class="col-sm-6">
                <a href="/">go to back</a>
                <h5>{{$product['name']}}</h5>
                <h5>{{$product['price']}}</h5>
                <h5>{{$product['describtion']}}</h5>
                <h5>{{$product['category']}}</h5>
                    <br><br>
                    <form action="/addtocart" method="GET">
                        @csrf
                        <input type="text" name="product_id" value="{{$product['id']}}">
                        <button class="btn btn-primary">ADD TO CART</button>
                    </form>
                
                <br><br>
                <button class="btn btn-secondary    ">BUY NOW</button>
           </div>
       </div>
   </div> --}}
</div>

@endsection