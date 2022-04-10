<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include("admin.admincss")

  </head>
  <body>
  		<div class="container-scroller">
  		@include("admin.navbar")
  		<form action="{{url('/uploadchef')}}" method="Post" enctype="multipart/form-data">
  			@csrf
  			<div>
  					<label>Name</label>
  					<input style="color:blue;" type="text" name="name" required="" placeholder="Enter Name">

  			</div>

  			<div>
  					<label>Speciality</label>
  					<input style="color:blue;" type="text" name="speciality" required="" placeholder="Enter Speciality">

  			</div>

  			<div>
  					<input  type="file" name="image" required="">

  			</div>

  			<div>
  				
  				<input style="color:blue;" type="submit" value="Save">
  			</div>







  		</form>

  	</div>
    
  		@include("admin.adminscript")
  </body>
</html>