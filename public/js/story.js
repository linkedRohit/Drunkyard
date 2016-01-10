$(document).ready(function(){

	var flash = $("#errorBox");
	//Saves the story every 1 minute, if changed
	var oldObject = {};
	setInterval(
		function()
		{ 
			var newObject = {};
			var title=$('#title').val();
			var description=$('#description_ifr').contents().find('body').html()
			var tags=$('#tags').val();
			var id = $('#id').val();
			newObject.title=title;
			newObject.description=description;
			newObject.tags=tags;
			newObject.id= id;
			if(JSON.stringify(newObject) !== JSON.stringify(oldObject)) {
				oldObject.title=title;
				oldObject.description=description;
				oldObject.tags=tags;
				oldObject.id=id;
				if(title)
					saveDraft(newObject);
			}
		}, 10000
	);

	function saveDraft(object) {
		var objJson = JSON.stringify(object);
		$.ajax({
		   method: "POST",
		   url: "/save",
		   data: { draft: objJson }
		})
	    .done(function( msg ) {

	    	if(msg) {
	    		if(parseInt(msg)) {
	    			$('#id').val(msg);
	    			flash.text("The story is saved till here.").fadeIn(400).delay(3000).fadeOut(400);
	    		} else {
	    			flash.text(msg).fadeIn(400).delay(3000).fadeOut(400);
	    		}
	    	}
	       		
	    });
	}
})