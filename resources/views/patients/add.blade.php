@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>
				<div class="panel-body">
				<div align="center">

          <form method="post"  action="{{action('DemoController@save')}}">
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
	<p>
  <label>Name
  <input type="text" name="name"  required>
  </label>
  </p>

  <p>
  <label>Phone
  <input type="tel" name="phone_number" >
  </label>
  </p>

  <p>
  <label>Email
  <input type="email" name="message" >
  </label>
  </p>

  <fieldset>
  <legend>Which taxi do you require?</legend>
  <p><label> <input type="radio" name="taxi" required value="car"> Car </label></p>
  <p><label> <input type="radio" name="taxi" required value="van"> Van </label></p>
  <p><label> <input type="radio" name="taxi" required value="tuktuk"> Tuk Tuk </label></p>
  </fieldset>

  <fieldset>
  <legend>Extras</legend>
  <p><label> <input type="checkbox" name="extras" value="baby"> Baby Seat </label></p>
  <p><label> <input type="checkbox" name="extras" value="wheelchair"> Wheelchair Access </label></p>
  <p><label> <input type="checkbox" name="extras" value="tip"> Stock Tip </label></p>
  </fieldset>

  <p>
  <label>Special Instructions
  <textarea name="comments" maxlength="500"></textarea>
  </label>
  </p>

  <p>	<input type="submit" class="btn btn-primary" value="save Record">Enter</button></p>

  </form>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
