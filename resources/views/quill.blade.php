@extends('layouts.app')



@section('styles')
<!-- <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet"> -->
<link href="{{asset('css/app.css')}}" rel="stylesheet">

@endsection

@section('content')

<!-- Create the editor container -->
<div style="margin-top:100px;">
    <div id="editor">

    </div>
</div>
@endsection


@section('scripts')
<script src="{{asset('js/quillEditor.js')}}"></script>
@endsection