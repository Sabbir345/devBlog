<div class="row">
		<div id="comment-form" class="col-md-8 col-md-offset-2" style="margin-top: 50px;">

			<form class="form-horizontal" method="post" action="{{route('comment.save')}}">
				
					{{csrf_field()}}

				<fieldset>
					
					<div class="form-group">
				      <label for="comment" class="col-md-2 control-label">Please Share Your Opinion</label>

				      <div class="col-md-10">
				        <input class="form-control" name="title" placeholder="Type Here" type="text">
				      </div>
				    </div>

				</fieldset>

			{{ Form::close() }}
		</div>
	</div>