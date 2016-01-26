@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Symptoms</div>
				<div class="panel-body">

<div align="center">

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <button type="button" class="btn btn-primary" name="#" style="height:120px;width:120px" onclick="window.location='{{ url("symptoms/genit") }}'">Genitourinary</button>

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <button type="button" class="btn btn-primary" name="#" style="height:120px;width:120px" onclick="window.location='{{ url("symptoms/git") }}'">G.I.T</button>
<br><br><br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <button type="button" class="btn btn-primary" name="#"style="height:120px;width:120px" onclick="window.location='{{ url("symptoms/respire") }}'">Respiratory</button>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <button type="button" class="btn btn-primary" name="#" style="height:120px;width:120px" onclick="window.location='{{ url("symptoms/cvs") }}'">C.V.S</button>


    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button" class="btn btn-primary" name="#" style="height:120px;width:120px" onclick="window.location='{{ url("symptoms/nervous") }}'">Nervous</button>

</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
