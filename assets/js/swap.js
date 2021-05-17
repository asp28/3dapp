var counter = 0;
$(document).ready(function() {
	
	selectPage();
	
});

function selectPage() {

	$('#home').show();
	$('#about').hide();
	$('#models').hide();
	$('#interaction').hide();
	$('#cokeDescription').hide();
	$('#fantaDescription').hide(); 
	$('#costaDescription').hide(); 


	$('#navHome').click(function(){
		$('#home').show();
		$('#about').hide();
		$('#models').hide();
		$('#interaction').hide();
		$('#cokeDescription').hide();
		$('#fantaDescription').hide(); 
		$('#costaDescription').hide(); 	  
	});

    $('#logo').click(function(){
		$('#home').show();
		$('#about').hide();
		$('#models').hide();
		$('#interaction').hide();
		$('#cokeDescription').hide();
		$('#fantaDescription').hide(); 
		$('#costaDescription').hide(); 	  
	});

	$('#navAbout').click(function(){
		$('#home').hide();
		$('#about').show();
		$('#models').hide();
		$('#interaction').hide();
		$('#cokeDescription').hide();
		$('#fantaDescription').hide(); 
		$('#costaDescription').hide(); 	  
	});

	$('#navModels').click(function(){
		$('#home').hide();
		$('#about').hide();
		$('#models').show();
		$('#interaction').show(); 
		$('#cokeDescription').show();
		$('#fantaDescription').hide(); 
		$('#costaDescription').hide();

        $("#cokeTitleDesc").show();
        $("#fantaTitleDesc").hide();
        $("#costaTitleDesc").hide();
	});
}


function cokeDescription() {
	$("button").click(function(){
		
		$("#cokeDescription").show();
        $("#costaDescription").hide();
		$("#fantaDescription").hide();

        $("#cokeTitleDesc").show();
        $("#fantaTitleDesc").hide();
        $("#costaTitleDesc").hide();
		
    }); 
}

function fantaDescription() {
    $("button").click(function(){

        $("#cokeDescription").hide();
        $("#fantaDescription").show();
		$("#costaDescription").hide();

        $("#cokeTitleDesc").hide();
        $("#fantaTitleDesc").show();
        $("#costaTitleDesc").hide();
		
    }); 
}

function costaDescription() {
    $("button").click(function(){

        $("#cokeDescription").hide();
        $("#fantaDescription").hide();
		$("#costaDescription").show();

        $("#cokeTitleDesc").hide();
        $("#fantaTitleDesc").hide();
        $("#costaTitleDesc").show();
	
    }); 
}
