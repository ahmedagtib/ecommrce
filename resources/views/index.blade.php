@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="row">
          @foreach($pro as $pro)
            <div class="col-md-4 mt-4 mb-2">
              
               <div class="card">
                   <div class="card-body text-center">
                       <h3 class="card-title">{{$pro->title}}</h3>
                       <hr>
                       <div class="card-img">
                           <img src="{{asset('images/'.$pro->img)}}" style="height: 140px" class="img-fluid rounded w-70">
                       </div>
                       <div class="card-text">
                           {{str_limit($pro->description,50)}}
                       </div>
                         <div class=" badge badge-info p-2">
                              {{$pro->price}}
                        </div>
                       <h6 class="text-center text-danger">{{$pro->categroy['name']}}</h6>

                   </div>
                   <a href="{{route('route.showslug',$pro->slug)}}" class="btn btn-primary">show</a>
               </div>
            </div>
             @endforeach
        </div>
        
    </div>
   <div class="col-md-4 mt-4">
       @include('include.sidebar')
   </div>
</div>
@endsection