<div class="card">
	<div class="card-body">
		<h3 class="card-title">Catégory</h3>
		<hr class="w-25 float-left">
		<div class="clearfix"></div>
		<ul class="list-group">
			@foreach($cat as $cat)
			<li class="list-group-item">
				<a href="#">{{$cat->name}}
				<span class="badge badge-primary  float-right">
					{{count($cat->products)}}
				</span>
			</a>
			</li>
			@endforeach
		</ul>
		
	</div>




</div>