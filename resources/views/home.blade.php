@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">��ѯ</div>
				<form action ="{{ action('FaqController@index') }}" method="GET">
				<input type = "hidden" name="_token" value="{{ csrf_token() }}" required ="required">
				<input type ="text"  name="kword" class="form-control" >
				<button class="btn btn-success" >��ѯ</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
