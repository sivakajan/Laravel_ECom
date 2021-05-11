@extends('master')

@section('content')
    
<div class="container custom-product mt-3">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
         @foreach ($products as $item)
         <div class="carousel-item {{$item['id']==1? 'active':''}}">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTK3qii7TblspIFfvbveoAsZfwTHX57BOyEh-9gilgT_SeyahRUHu5ingvA9MbP3a4vE7I&usqp=CAU" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>{{$item['price']}}</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
         @endforeach
         
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>


      <div class="row traPro">
          <h1 class="pro_name">tranding product</h1>
            @foreach ($products as $item)


            <div class="col card m-2" style="width: 18rem;">
              <img class="card-img-top mt-2" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTK3qii7TblspIFfvbveoAsZfwTHX57BOyEh-9gilgT_SeyahRUHu5ingvA9MbP3a4vE7I&usqp=CAU" class="d-block w-100" alt="...">
             
              <div class="card-body">
                <h5 class="card-title">{{$item['category']}}</h5>
                <p class="card-text">{{$item['describtion']}}</p>
                <a href="/my/{{$item['id']}}" class="btn btn-primary">Add Cart</a>
              </div>
            </div>




            {{-- <div class="col pro">
                <a href="/my/{{$item['id']}}">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTK3qii7TblspIFfvbveoAsZfwTHX57BOyEh-9gilgT_SeyahRUHu5ingvA9MbP3a4vE7I&usqp=CAU" class="d-block w-100" alt="...">
                    <div class="">
                       
                        <p>{{$item['category']}}</p>
                    </div>
                </a>
            </div> --}}
            @endforeach
      </div>   
</div>

@endsection