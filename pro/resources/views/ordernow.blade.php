@extends('master')

@section('content')
    
<div class="container mt-5 custom-product">
    <div class="text-primary">
      <h3>Payment Details</h3>
        <table class="table table-bordered ">
            
            <tbody>
              <tr>
               
                <td class="text-primary">Total</td>
                <td>{{$total}}</td>
              </tr>
              <tr>
               
                <td class="text-primary">Discount</td>
                <td>10</td>
              </tr>

              <tr>
               
                <td class="text-primary">final Amount</td>
                <td>{{$total}}</td>
              </tr>
            </tbody>
          </table>
    </div>   

    <div class="mt-4 text-primary">
        <form action="/orderplace" method="POST">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Address</label>
              <input type="text" name="address" class="form-control" id="exampleInputEmail1" >
              
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Payment Type</label><br>
              <input type="radio" name="payment" ><span>online</span><br>
              <input type="radio" name="payment" ><span>EMI</span><br>
              <input type="radio" name="payment" ><span>Delivey on payment</span><br>
            </div>
            
            <button type="submit" class="btn btn-primary">Order Now</button>
          </form>
    </div>
</div>

@endsection