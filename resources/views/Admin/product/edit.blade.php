@extends('layouts.master')
@section('content')
<div class="row mt-4 mb-4">
	<div class="col-md-12">
		<h3 class="text-center">update product</h3>
    <form class="form" method="post" action="{{route('product.update',$pro->id)}}" enctype="multipart/form-data">
        	<input type="hidden" name="_token" value="{{Session::token()}}">
        	<input type="hidden"  name="_method" value="PUT">
		<div class="form-group">
			<label class="label-control">title:</label>
			<input type="text" name="title"  class="form-control" value="{{$pro->title}}">
		</div>
		<div class="form-group">
			<label class="label-control">Category:</label>
			<select name="cat" class="form-control">
				@foreach($cat as $cat)
			<option  {{($pro->Category_id == $cat->id) ? 'selected':''}} value="{{$cat->id}}" >{{$cat->name}}</option>
				@endforeach
			</select>
		</div>
		<div class="form-group">
			<label class="label-control">prix:</label>
			<input type="text" name="prix"  class="form-control" value="{{$pro->price}}">
		</div>
		<div class="form-group">
		    <img src="{{asset('/images/'.$pro->img)}}"  style="width: 50px">
		</div>
		 <div class="custom-file form-group">
		 	
             <input type="file" class="custom-file-input" name="img" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
             <label class="custom-file-label"  for="inputGroupFile01">photo</label>
         </div>
		<div class="form-group">
			<label class="label-control">description:</label>
			<textarea name="description" class="form-control" >
				{{$pro->description}}
				
			</textarea>
		</div>
         
		<input type="submit" class="btn btn-primary btn-block" value="save">
	    </form>
	</div>
</div>
@endsection