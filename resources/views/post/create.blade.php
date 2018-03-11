@extends('layouts.app')

@section('title', '| Create New Post')

@section('stylesheets')

	{!! Html::style('css/bootstrap.min.css') !!}
	{!! Html::style('css/style.css') !!}

@endsection

@section('content')

	<div class="container">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">
					Create New Post
				</h3>
			</div>
			<div class="panel-body">
				<form class="form-horizontal" method="post" action="{{route('store')}}">
					{{csrf_field()}}
				  <fieldset>
				    
				    <div class="form-group">
				      <label for="title" class="col-md-2 control-label">Title</label>

				      <div class="col-md-10">
				        <input class="form-control" name="title" placeholder="Post Title" type="text">
				      </div>
				    </div>
				    <div class="form-group">
				      <label for="description" class="col-md-2 control-label">Post Description</label>

				      <div class="col-md-10">
				        <input class="form-control" name="description" placeholder="Post Description" type="text">
				      </div>
				      
				    </div>
				    <div class="form-group">
				      <div class="col-md-10 col-md-offset-2">
				        <button type="button" class="btn btn-default">Cancel</button>
				        <button type="submit" class="btn btn-primary">Submit</button>
				      </div>
				    </div>
				  </fieldset>
				</form>
			</div>
		</div>
	</div>


@endsection


@section('scripts')

	{!! Html::script('js/script.min.js') !!}
	{!! Html::script('js/script.js') !!}
@endsection
