@extends('layout')
@section('css')
	<link href="{{ asset('/css/dropzone.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/summernote.css') }}" rel="stylesheet">
	<script src="{{ asset('/js/summernote.js') }}"></script>
@endsection

@section('content')
    <div ng-app="storyApp" ng-controller="storyCtrl">
		<div class="container mt100 pd50lr">
			<input type="hidden" name="id" id="id" value="" />
			<input type="text" class="txtBoxStyle typing" id="title" placeholder="Title of the story" value="{{ $title }}"/> <br/><br/>
			<h class="heading">Story Overview  </h><a class="fa fa-info-circle greyText" title="1. Use hashtags to make your story stand out 2. Easy drag and drop images to the description."></a>
			<!--<textarea id="description" placeholder="We are excited to know your story, so as the people out there"></textarea><br/><br/>-->
			<div class="editorStyle" contentEditable=true>
				<summernote airmode class="borderTA" placeholder="Tell your crazy story to the people out there."></summernote>
			</div>
			<!--<h class="heading">Upload your images</h>
			<form action="/dyUploader" method="post" enctype="multipart/form-data"
		        class="dropzone dyBackGround"
		        id="dropzonePlaceId">
		        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
		        <div class="fallback">
				    <input name="file" type="file" multiple />
				</div>
		    </form>-->
		    <div class="row">
			    <input type="text" id="tags" class="txtBoxStyle typing mt50" placeholder="Tag friends, places, events" /> <br/><br/>
			</div>
			<div class="row pt50">
				<div class="col-md-4">
				    <input type="button" id="prevStory" value="Preview story" class="previewButton fl">
				</div>
				<div class="col-md-4 hidden-xs">
				</div>
				<div class="col-md-4">
				    <input type="button" id="createStory" value="Create story" class="storyButton">
				</div>
			</div>
		</div>
	</div>
@endsection


@section('headScript')
    <!--<script src="{{ asset('/js/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('/js/dropzone.js') }}"></script>-->
    <script src="{{ asset('/js/story.js') }}"></script>
    <!--<script>

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
		  //headers: image-dy,
		  uploadMultiple: true,
		  maxFilesize: 3, // MB
		  accept: function(file, done) {
		    if (file.name == "justinbieber.jpg") {
		      done("Naha, you don't.");
		    }
		    else { done(); }
		  },
		  addRemoveLinks: true,
		  removedfile: function(file) {
		    var name = file.name;        
		    $.ajax({
		        type: 'POST',
		        url: '/deleteImage',
		        data: "id="+name,
		        dataType: 'html'
		    });
			var _ref;
			return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;        
		  },
		  acceptedFiles: "image/*",
		  dictDefaultMessage: "Upload your memories"
		};
	</script>-->
@endsection
