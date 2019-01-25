@extends('layouts.master')
@section('content')
<div class="row">
	<div class="col-md-8 offset-md-2 mb-4">
		<div class="card mt-4">
			<div class="card-header">
				<h3 class="text-center">sgin up</h3>
			</div>
			<div class="card-body">
				<form method="Post" action="{{route('user.store')}}">
					<input type="hidden" name="_token" value="{{Session::token()}}">
					<div class="form-group">
						<label class="label-control">name</label>
						<input type="text" class="form-control" name="name">
					</div>
					<div class="form-group">
						<label class="label-control">Email</label>
						<input type="text" class="form-control" name="email">
					</div>
					<div class="form-group">
						<label class="label-control">password</label>
						<input type="password" class="form-control" name="password">
					</div>
					<input type="submit" class="btn btn-primary" value="save" name="">
				</form>
			</div>
		</div>
		
	</div>
	
</div>

@endsection