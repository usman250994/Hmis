@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>
				<div class="panel-body">
				<div align="center">
					Hello Mr.  {{ Auth::user()->name }}  You are logged in! <br><br><br><br><br><br>
				</div>
<div align="center">
	<button type="button" class="btn btn-primary" name="Create" onclick="window.location='{{ url("patients/add") }}'">Create Profile</button>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<button type="button" class="btn btn-primary" name="Search" onclick="window.location='{{ url("patients/search") }}'">Search Profile</button>
</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
