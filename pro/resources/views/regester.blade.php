@extends('master')

@section('content')
    
<div class="container custom-login">

  <div class="card">
    <div class="card-header">
      <h2>Regester</h2>
    </div>
    <div class="card-body">

      
        <div class="">
            <form action="regester" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" name="email">
                  
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">User Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name">
                    
                  </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                </div>
               
                <button type="submit" class="btn btn-primary">Regester</button>
              </form>
        
    </div>

    </div>
  </div>


 
</div>

@endsection