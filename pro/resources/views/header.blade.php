<?php
use App\Http\Controllers\MyproductController;
 // $total=0
 $total = 0;  
if(Session::has('user')){
    $total=MyproductController::addcart();
}
  ?>



{{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/ ">ECoM</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/myorder">Orders</a>
          </li>
         
          
        </ul>
        {{-- <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> --}}

  {{--     <ul class="nav navbar-nav ">
          <li class="diable"><a>wda</a></li>
            <li><a href="/cartlist">card({{$total}})</a></li>
            @if (Session::has('user'))
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{Session()->get('user')['name']}}
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/logout">Logout</a></li>
               
                
              </ul>
            </li>
            @else
            <li><a class="dropdown-item" href="/login">login</a></li>
            <li><a class="dropdown-item" href="/regester">regester</a></li>
            @endif
            
            
        </ul>
      </div>
    </div>
  </nav> --}}



  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand text-primary" href="/ ">ECOM</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
          </li>
          @if (Session::has('user'))
          <li class="nav-item">
            <a class="nav-link" href="/myorder">Orders</a>
          </li>
          @endif
         
        </ul>
        <span class="navbar-text">
          <ul class="nav navbar-nav ">
            
              <li><a class="dropdown-item" href="/cartlist">card({{$total}})</a></li>
              @if (Session::has('user'))
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  {{Session()->get('user')['name']}}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/logout">Logout</a></li>
                 
                  
                </ul>
              </li>
              @else
              <li class="nav-item"><a class="dropdown-item nav-link" href="/login">login</a></li>
              <li class="nav-item"><a class="dropdown-item nav-link" href="/regester">regester</a></li>
              @endif
              
              
          </ul>
        </span>
      </div>
    </div>
  </nav>