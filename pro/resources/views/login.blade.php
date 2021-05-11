@extends('master')

@section('content')
    
<div class="container p-5 ml-5">
  
    {{-- <div class="row">
        <div class="col-sm-4  col-sm-offset-4">
            <form action="login" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" name="email">
                  
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                </div>
               
                <button type="submit" class="btn btn-primary">Login</button>
              </form>
        </div>
    </div> --}}



<div class="card center w-75" >

  {{-- <a href="/de">dele</a>
    <p>{{$id}}</p> --}}
    <div class="card-header ">
      Login
    </div>
    <div class="card-body">

      
        

      <form action="login" method="POST">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" name="email">
          
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>
       
        <button type="submit" class="btn btn-primary">Login</button>
      </form>
    </form>

  </div>
  </div>
</div>

@endsection