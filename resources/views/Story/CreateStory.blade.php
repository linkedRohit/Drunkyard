@extends('layout')

@section('css')
	<link href="{{ asset('/css/editor.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
	<div id="toolbar" style="margin-top:200px; background-color: #FF0000">
	  <button class="ql-bold">Bold</button>
	  <button class="ql-italic">Italic</button>
	</div>

	<!-- Create the editor container -->
	<div id="editor" style="height:200px; width:300px; background-color: #FF0000"> 
	  <div>Hello World!</div>
	  <div>Some initial <b>bold</b> text</div>
	  <div><br></div>
	</div>
@endsection


@section('script')
    <script src="{{ asset('/js/editor.min.js') }}"></script>
	<script>
	  var quill = new Quill('#editor');
	  quill.addModule('toolbar', { container: '#toolbar' });
	</script>
@endsection