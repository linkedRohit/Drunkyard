@extends('layout')
@section('css')
	<link href="{{ asset('/css/dropzone.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
	<div class="container mt100 pd50lr">
		<input type="text" class="txtBoxStyle typing" placeholder="Title of the story" value="{{ $title }}"/> <br/><br/>
		<h class="heading">Story Overview  </h><a class="fa fa-info-circle greyText" title="1. Use hashtags to make your story stand out 2. Easy drag and drop images to the description."></a>
		<textarea placeholder="We are excited to know your story, so as the people out there"></textarea><br/><br/>
		<h class="heading">Upload your images</h>
		<form action="/dyUploader" method="post" enctype="multipart/form-data"
	        class="dropzone dyBackGround"
	        id="dropzonePlaceId">
	        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
	        <div class="fallback">
			    <input name="file" type="file" multiple />
			</div>
	    </form>
	    <input type="text" class="txtBoxStyle typing mt50" placeholder="Tag friends, places, events" /> <br/><br/>
	    <input type="button" id="prevStory" value="Preview story" class="previewButton">
	    <input type="button" id="createStory" value="Create story" class="storyButton">
	</div>
@endsection


@section('headScript')
    <script src="{{ asset('/js/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('/js/dropzone.js') }}"></script>
    <script>
    tinymce.init({
	  selector: 'textarea',
	  height: 300,
	  plugins: [
	    'advlist autolink link image charmap preview anchor',
	    'searchreplace visualblocks fullscreen',
	    'insertdatetime media table contextmenu paste'
	  ],
	  toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | fullscreen',
	  content_css: [
	    '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
	    '//www.tinymce.com/css/codepen.min.css'
	  ],
	  menubar:false,
	  statusbar: false,
	  browser_spellcheck: true,
	  fullscreen_settings : {
        width : "640",
        height : "480"
	  },
	});
    //tinymce.init({ selector:'textarea' });
    </script>
    <script>


	Dropzone.options.myAwesomeDropzone = {
	  headers: image-dy,
	  uploadMultiple: true,
	  maxFilesize: 3, // MB
	  accept: function(file, done) {
	    if (file.name == "justinbieber.jpg") {
	      done("Naha, you don't.");
	    }
	    else { done(); }
	  },
	  addRemoveLinks: "dictRemoveFile, dictCancelUpload",
	  acceptedFiles: "image/*",
	  dictDefaultMessage: "Upload your memories"
	};
	</script>
@endsection
