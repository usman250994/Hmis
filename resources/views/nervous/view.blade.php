@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Nervous System</div>
				<div class="panel-body">

<div align="center">

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <button type="button" class="btn btn-primary" name="#" style="height:120px;width:120px" onclick="window.location='{{ url("nervous/motor") }}'">Motor System</button>

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <button type="button" class="btn btn-primary" name="#" style="height:120px;width:120px" onclick="window.location='{{ url("nervous/sense") }}'">Sensation</button>
<br><br><br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <button type="button" class="btn btn-primary" name="#"style="height:120px;width:120px" onclick="window.location='{{ url("nervous/cranial") }}'">Cranial Nerves</button>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <button type="button" class="btn btn-primary" name="#" style="height:120px;width:120px" onclick="window.location='{{ url("nervous/reflexes") }}'">Reflexes</button>

</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
