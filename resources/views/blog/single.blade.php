@extends('layouts.app')

@section('content')

	<div class="container">

		<div class="row">
			<div class="col-md-12">
				
				<h1> {{ $post->title }} </h1>

				<p> {{ $post->body }} </p>

				<h5> 
	                 Published: {{ date('M j, Y', strtotime($post->created_at)) }}
	            </h5>

	            <a href="{{route('edit',$post->id)}}"  class="btn btn-primary">Edit</a>

	            <form action="{{route('delete', $post->id)}}" method="POST" class="inline-it">
                        {{ csrf_field() }}

                        {{ method_field('delete') }}

                        <input class="btn btn-danger" type="submit" value="Delete">
                        
                 </form>

				<hr>
				
			</div>
		</div>
		
	</div>
	

	 <div class="container">
	 	
	 	<div class="row">
			<div class="col-md-12">
				<h3 class="comments-title"><span class="glyphicon glyphicon-comment"></span>  {{ $post->comments()->count() }} Comments</h3>
				@foreach($post->comments as $comment)
					<div class="comment">

						 <div class="comment-content">
							{{ $comment->comment }}
							<p class="author-time">{{ date('F dS, Y - g:iA' ,strtotime($comment->created_at)) }}</p>
						</div> 

					</div>
				@endforeach
			</div>
		</div> 

	 </div>

	<div class="row">
		<div id="comment-form" class="col-md-8 col-md-offset-2" style="margin-top: 50px;">

			<form class="form-horizontal" method="post" action="
			{{ route('comment.save',$post->id)}}">


					{{csrf_field()}}

				<fieldset>
					
					<div class="form-group">
				      <label for="comment" class="col-md-2 control-label">Please Share Your Opinion</label>

				      <div class="col-md-10">
				        <input class="form-control" name="comment" placeholder="Type Here" type="text">
				      </div>
				    </div>

				</fieldset>

			</form>
		</div>
	</div>

	 

@endsection 
