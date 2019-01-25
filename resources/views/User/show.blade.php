@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-8">
         <div class="card mt-4 mb-4">
                   <div class="card-body text-center">
                       <h3 class="card-title">{{$prod->title}}</h3>
                       <hr>
                       <div class="card-img">
                           <img src="{{asset('images/'.$prod->img)}}"  class="img-fluid rounded w-70">
                       </div>
                       <div class="card-text">
                           {{$prod->description}}
                       </div>
                         <div class=" badge badge-info p-2">
                              {{$prod->price}}
                        </div>
                       <h6 class="text-center text-danger">cell phone</h6>
                   </div>
                   <div class="card-footer text-center">
                    <form method="Post" action="{{route('cart.add')}}">
                       <div class="form-group">
                       <input type="hidden" name="id" value="{{$prod->id}}">
                       <input type="hidden" name="_token" value="{{Session::token()}}">
                       <input type="number" min="0" name="qte" placeholder="qte" class="w-50 offset-3 form-control">
                    </div>
                  <button type="submit" class="btn btn-primary">add to basckt</button>
                 </form>
                      
                  </div>

               </div>
         </div>
   
   <div class="col-md-4 mt-4">
       @include('include.sidebar')
   </div>
</div>
@endsection