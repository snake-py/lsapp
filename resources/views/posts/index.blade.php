@extends('layouts.app')

@section('content')
<h1>Posts</h1>
@if(isset($posts))
@foreach($posts as $post)
<div class="card card-body bg-ligh">
    <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
    <small>Written on {{$post->created_at}}</small>
</div>
<br>
@endforeach
<br>
{{$posts->links()}}

@else
<p>No Posts Avalible</p>
@endif
@endsection