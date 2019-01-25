@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-12">
       <div class="card mt-4 mb-5">
                   <div class="card-body text-center">
                       <h3 class="card-title">{{$pro->title}}</h3>
                       <hr>
                       <div class="card-img mb-2">
                           <img src="{{asset('images/'.$pro->img)}}" class="img-fluid rounded w-80">
                       </div>
                       <div class="card-text">
                           {{$pro->description}}
                       </div>
                         <div class=" badge badge-info p-2">
                              {{$pro->price}}
                         </div>
                       <h6 class="text-center text-danger">cell phone</h6>
                    </div>  
        </div>
        
    </div>
</div>
@endsection