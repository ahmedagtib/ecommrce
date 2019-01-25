@extends('layouts.master')
@section('content')
<div class="row mt-4">
	
	<form method="post" action="{{route('route.add')}}" class="mb-6">
		@csrf
			<div class="form-inline">
				<label class="label-control">Add new Category:</label>&nbsp;
				<input type="text" name="name" class="form-control">&nbsp;
				<input type="submit" class="btn btn-primary" value="save">
			</div>

	</form>


	  <div class="col-md-12 mt-4 mb-6">
	  <table class="table">
          <thead class="thead-light">
         <tr>
              
               <th scope="col">id</th>
               <th scope="col">name</th>
               <th scope="col">date create</th>
               <th>action </th>
         </tr>
         </thead>
         
         <tbody>
         	 @foreach($cat as $cat)
             <tr>
           
               <td>{{$cat->id}}</td>
               <td>{{$cat->name}}</td>
               <td>{{$cat->created_at}}</td>
               <td>
                 <a href="{{route('route.edit',$cat->id)}}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                   <a href="{{route('route.delete',$cat->id)}}" class="btn btn-danger"><i class="fas fa-edit"></i></a>
               </td>
                
                
                
                
         
             </tr>
            @endforeach  
        </tbody>
    
    </table>
  
	</div>
</div>


@endsection