@extends('layouts.master')
@section('content')

<div class="row">
	<div class="col-md-12">
		<table class="table table-bordered mt-4">
			<thead class="thead-light">
				<tr class="text-center">
					<th>#id</th>
					<th>file</th>
					<th>title</th>
					<th>prix</th>
					<th>description</th>
					<th>action
                     <a href="{{route('product.create')}}" class="btn btn-success"><i class="fas fa-plus"></i></a>
					</th>
				</tr>
			</thead>
			@foreach($product as $product)
			<tbody>
				
				<tr>
					<td>{{ $product->id }}</td>
					<td>
						<img src="{{asset('/images/'.$product->img)}}" style="width: 40px" class="img-fluid rounded">
					</td>
					<td>{{ $product->title }}</td>
					<td>{{ $product->price }}</td>
					<td>{{str_limit($product->description,50)}}</td>
					<td class="text-center">
					<form method="POST" action="{{route('product.destroy',$product->id)}}">
						<input type="hidden" name="_token" value="{{Session::token()}}">
						<input type="hidden" name="_method" value="DElETE">

                    <a href="{{route('product.edit',$product->id)}}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                    <a href="{{route('product.show',$product->id)}}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                   <button type="submit" class="btn btn-danger" ><i class="fas fa-trash"></i></button>
					</td>	
				</form>
				</tr>
				
			</tbody>
			@endforeach
		</table>
	</div>
	
</div>



@endsection