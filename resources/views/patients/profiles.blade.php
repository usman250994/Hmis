@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Patients</div>
				<div class="panel-body">
				<div align="center">
					Hello Mr.  {{ Auth::user()->name }}  You can Search Records Here! <br><br><br><br><br><br>
				</div>
<div align="center">
	<form method="post"  action="{{action('DemoController@searchById')}}">
<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
 Enter ID:
 <input type="number" name="id" value=""> 	<input type="submit" class="btn btn-primary" value="search Record"></button>
  <button type="button" class="btn btn-primary" name="Search" onclick="window.location='{{ url("search") }}'">View All</button>

</div>

</form>
				</div>

				<table class="table table-striped">
			   <thead>
			     <tr>
			       <th>ID</th>
			       <th>First Name</th>
			       <th>Email</th>
			       <!-- <th>Number</th> -->
			     </tr>
			   </thead>
			   <tbody>
					 <?php
 if (Session::has('check'))
{
	 Session::forget('check');
foreach($data as $row) {?>

	<tr>
		<th scope="row"><?php  echo $row->id  ?></th>
		<td><?php  echo $row->name  ?></td>
		<td><?php  echo $row->message  ?></td>
		<td><a href="view">View</a> </td>

	</tr>
	<?php }

} ?>


			   </tbody>
			 </table>

			</div>
		</div>
	</div>
</div>

@endsection
