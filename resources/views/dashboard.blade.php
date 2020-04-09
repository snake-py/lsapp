@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body"> 
                    <h3>Your Blog Post</h3>
                    @if(count($posts) > 0)
                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th>Date</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{$post->title}}</td>
                                <td>{{$post->created_at}}</td>
                                <td><a href="/posts/{{$post->id}}/edit">Edit</a></td>
                                <td>
                                {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'methode' => 'POST'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-sm btn-danger'])}}
                                {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach

                    </table>
                    @else
                    <p>You have no posts!</p>

                    @endif

                    <br>
                    <a class="btn btn-primary" href="/posts/create">Create Post</a>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
