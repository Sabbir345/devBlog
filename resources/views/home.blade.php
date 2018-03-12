@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="jumbotron">
            <h1>RootSoft Developer Blog</h1>
            <p>RootSoft is the most popular Software Firm In Sylhet. </p>
        </div>
    </div>

    <div class="container" >

        <div class="col-md-12">

          <div class="pull-right">
              <a href="{{ route('create') }}" class="btn btn-primary ">Create New Post</a>
          </div>
          
        </div>

        <table class="table table-striped table-hover ">
          {{-- <thead>
          <tr>
            <th>#</th>
            <th>Post Title</th>
            <th>Post Description</th>
            <th>Action</th>
          </tr>
          </thead> --}}
          <br>
          <br>

          @foreach ($posts as $post)

            
              <div class="col-md-12">
                <h2>{{ $post->title }}</h2>
                <h5> 

                  Published: {{ date('M j, Y', strtotime($post->created_at)) }}

                </h5>

                <p>
                    {{ substr(strip_tags($post->body), 0, 250) }}{{ strlen(strip_tags($post->body)) > 250 ? '...' : "" }}
                </p>

                <a href="{{ route('singleshow', $post->id) }}" class="btn btn-primary">Read More</a>
                
                
                <hr>
              </div>
           

          @endforeach




       
          {{-- @foreach($posts as $post)
              <tbody>
              <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->body}}</td>
                <td>
                    <a href="{{route('edit',$post->id)}}"  class="btn btn-primary">Edit</a>

                    <form action="{{route('delete', $post->id)}}" method="POST" class="inline-it">
                        {{ csrf_field() }}

                        {{ method_field('delete') }}

                        <input class="btn btn-danger" type="submit" value="Delete">
                        
                      </form>
                </td>
              </tr> 
             
              </tbody>
            @endforeach --}}
        </table>
        
    </div>

@endsection
