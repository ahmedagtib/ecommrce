@extends('layouts.master')
@section('content')
<div class="row">
	<div class="col-md-12">
		<form method="POST" action="{{route('route.update',$cat->id)}}">
			<input type="hidden" name="_token" value="{{Session::token()}}">
			

			<div class="form-group">
			<label class="label-control"></label>
			<input type="text" name="name" class="form-control" value="{{$cat->name}}">
			</div>
			<input type="submit" value="save" class="btn btn-primary">
		</form>
	</div>

</div>

@endsection