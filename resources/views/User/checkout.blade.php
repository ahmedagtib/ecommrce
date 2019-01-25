@extends('layouts.master')

@section('content')
<div class="row">
         <div class="col-md-12">
             <div class="card  mt-4 mx">
               <div class="card-body">
                <h3 class="card-title text-center">
                 that s all commend
                </h3>
                <table class="table bg-dark text-light mx">
                  <thead class="thead-default">
                    <tr>
                      <th></th>
                      <th>title</th>
                      <th>prix</th>
                      <th>qté</th>
                      <th>total</th>
                      
                    </tr>
                 </thead>
                 <tbody>
                   @foreach(Cart::content() as $product)
                   <tr>
                     <td><img src="{{URL::to('/images/'.$product->model->img)}}" class="img-fluid rounded" height="50" width="50"></td>
                     <td>{{$product->name}}</td>
                     <td>{{$product->price}}</td>
                     <td>{{$product->qty}}</td>
                     
                     <td class="bg-light text-dark">{{$product->total}} dh</td>
                     
                     <td></td>
                   </tr>
                   @endforeach
                 </tbody>
                </table>
                <p class="lead">
                  total TTC:
                  <span class="badge bg-success text-white">{{Cart::total()}} DH</span></p>

                  <form action="{{route('cart.pay')}}" method="POST">
                    <input type="hidden" name="_token" value="{{Session::token()}}">
                  <script
                       src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                       data-key=""
                       data-amount={{Cart::total()}}
                       data-name="Demo Site"
                       data-description="ecosafi"
                       data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                       data-locale="auto">
                     </script>
                   </form>
                
               </div>
             </div>
         </div>
   
        <div class="col-md-4 mt-4">
  
       </div>

</div>
@endsection