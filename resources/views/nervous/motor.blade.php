@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Patients</div>
				<div class="panel-body">
				<div align="center">
					Hello Mr.  {{ Auth::user()->name }}  You can Search Records Here! <br><br><br>Motor System<br><br><br>

				</div>
				</div>
		<table class="table table-striped">
			   <thead>
			     <tr>
			       <th>ID</th>
			       <th>RT.ARM</th>
			       <th>LT.ARM</th>
             <th>RT.LEG</th>
             <th>LT.LEG</th>
			      	     </tr>
			   </thead>
			   <tbody>
					 <?php
					 $count=1;
foreach($data as $row){
if($count==2){
?>
<form method="post"  action="{{action('NervousController@edit')}}">
<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
	<tr>
		<th scope="row">Muscle Power</th>
		<input type="hidden" name="type" value="muscle">
		<td><input type="number" name="rarm" value="<?php  echo $row->rarm ?>" style="width: 80px;"> </td>
		<td><input type="number" name="larm" value="<?php  echo $row->larm ?>" style="width: 80px;"> </td>
    <td><input type="number" name="rleg" value="<?php  echo $row->rleg ?>" style="width: 80px;"> </td>
		<td><input type="number" name="lleg" value="<?php  echo $row->lleg ?>" style="width: 80px;"> </td>
		<td><input type="submit" class="btn btn-danger btn-xs" value="Edit Record"></button> </td>
	</tr>
</form>
	<?php } if($count==1){
 ?>
 <form method="post"  action="{{action('NervousController@edit')}}">
 <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
 <tr>
	 <th scope="row">Tone</th>
	 		<input type="hidden" name="type" value="tone">
	 <td><input type="number" name="rarm" value="<?php  echo $row->rarm ?>" style="width: 80px;"> </td>
	 <td><input type="number" name="larm" value="<?php  echo $row->larm ?>" style="width: 80px;"> </td>
		<td><input type="number" name="rleg" value="<?php  echo $row->rleg ?>" style="width: 80px;"> </td>
	 <td><input type="number" name="lleg" value="<?php  echo $row->lleg ?>" style="width: 80px;"> </td>
	 <td><input type="submit" class="btn btn-danger btn-xs" value="Edit Record"></button> </td> 	</tr>
</form>
<?php }
		if($count==3){?>
			<form method="post"  action="{{action('NervousController@edit')}}">
		  <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
		  <tr>
		 	 <th scope="row">coordination</th>
			 		<input type="hidden" name="type" value="coordination">
		 	 <td><input type="number" name="rarm" value="<?php  echo $row->rarm ?>" style="width: 80px;"> </td>
		 	 <td><input type="number" name="larm" value="<?php  echo $row->larm ?>" style="width: 80px;"> </td>
		 		<td><input type="number" name="rleg" value="<?php  echo $row->rleg ?>" style="width: 80px;"> </td>
		 	 <td><input type="number" name="lleg" value="<?php  echo $row->lleg ?>" style="width: 80px;"> </td>
		 	 <td><input type="submit" class="btn btn-danger btn-xs" value="Edit Record"></button> </td> 	</tr>
		 </form>
<?php }
$count++;
}?>

			   </tbody>
			 </table>

			</div>
		</div>
	</div>
</div>

@endsection
