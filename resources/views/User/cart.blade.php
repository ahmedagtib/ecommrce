@extends('layouts.master')

@section('content')
<div class="row">
         <div class="col-md-12">
             <div class="card  mt-4 mx">
               <div class="card-body">
                <h3 class="card-title text-center">
                  wlecome to your basckt
                </h3>
                <table class="table bg-dark text-light mx">
                  <thead class="thead-default">
                    <tr>
                      <th></th>
                      <th>title</th>
                      <th>prix</th>
                      <th>qté</th>
                      <th></th>
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
                     <td>
                      <a href="{{route('cart.dec',['id'=>$product->rowId,'qte'=>$product->qty])}}" class="btn btn-light btn-sm" id="moins"><i class="fas fa-minus"></i></a>
                      <input type="text" name="qte" id="qte" width="10px" value="{{$product->qty}}">
                      <a href="{{route('cart.inc',['id'=>$product->rowId,'qte'=>$product->qty])}}" class="btn btn-light btn-sm" id="plus"><i class="fas fa-plus"></i></a>
                     </td>
                     <td class="bg-light text-dark">{{$product->total()}} dh</td>
                     
                     <td>
                       <a href="{{route('cart.delete',['id'=>$product->rowId])}}" class="btn btn-danger">delete</a>
                     </td>
                   </tr>
                   @endforeach
                 </tbody>
                </table>
                <p class="lead">
                  total TTC:
                  <span class="badge bg-success text-white">{{Cart::total()}} DH</span></p>
                  <a href="{{route('cart.checkout')}}" class="btn btn-success">Pay Now</a>
                
               </div>
             </div>
         </div>
   
        <div class="col-md-4 mt-4">
  
       </div>

</div>
@endsection