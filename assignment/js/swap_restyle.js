// JavaScript Document
var counter = 0;
$(document).ready(function() {
	selectPage();
});

function selectPage() {
	$('#home').show();
	$('#about').hide();
	$('#contact').hide();
	$('#contact').hide();
	$('#models').hide();
	$('#interaction').hide();
	$('#cokeDescription').hide();
	$('#oasisDescription').hide(); 
	$('#fantaDescription').hide(); 


	$('#navHome').click(function(){
		$('#home').show();
		$('#about').hide();
		$('#contact').hide();
		$('#models').hide();
		$('#interaction').hide();
		$('#cokeDescription').hide();
		$('#oasisDescription').hide(); 
		$('#fantaDescription').hide(); 	  
	});

	$('#navModels').click(function(){
		$('#home').hide();
		$('#about').hide();
		$('#contact').hide();
		$('#models').show();
		$('#interaction').show(); 
		$('#coke').show();
		$('#oasis').hide();
		$('#fanta').hide();
		$('#cokeDescription').show();
		$('#oasisDescription').hide(); 
		$('#fantaDescription').hide(); 
		$('#x3dModelTitle_coke').show(); 
		$('#x3dModelTitle_oasis').hide(); 
		$('#x3dModelTitle_fanta').hide(); 
		$('#x3dCreationMethod_coke').show(); 
		$('#x3dCreationMethod_oasis').hide(); 
		$('#x3dCreationMethod_fanta').hide(); 
	});

	$('#navAbout').click(function(){
		$('#home').hide();
		$('#about').show();
		$('#contact').hide();
		$('#models').hide();
		$('#interaction').hide();
		$('#cokeDescription').hide();
		$('#oasisDescription').hide(); 
		$('#fantaDescription').hide(); 	  
	});

	$('#navContact').click(function(){
		$('#home').hide();
		$('#about').hide();
		$('#contact').show();
		$('#models').hide();
		$('#interaction').hide();
		$('#cokeDescription').hide();
		$('#oasisDescription').hide(); 
		$('#fantaDescription').hide(); 	  
	});
}
function cokeDescription() {
	$("button").click(function(){
		
		$("#cokeDescription").show();
		$("#oasisDescription").hide();
		$("#fantaDescription").hide();
		
		$("#x3dModelTitle_coke").show();
		$("#x3dModelTitle_oasis").hide();
		$("#x3dModelTitle_fanta").hide();

		$("#x3dCreationMethod_coke").show();
		$("#x3dCreationMethod_oasis").hide();
		$("#x3dCreationMethod_fanta").hide();

	}); 
}

function oasisDescription() {
	$("button").click(function(){

		$("#cokeDescription").hide();
		$("#oasisDescription").show();
		$("#fantaDescription").hide();
		
		$("#x3dModelTitle_coke").hide();
		$("#x3dModelTitle_oasis").show();
		$("#x3dModelTitle_fanta").hide();

		$("#x3dCreationMethod_coke").hide();
		$("#x3dCreationMethod_oasis").show();
		$("#x3dCreationMethod_fanta").hide();
	}); 
}

function fantaDescription() {
	$("button").click(function(){

		$("#cokeDescription").hide();
		$("#oasisDescription").hide();
		$("#fantaDescription").show();
		
		$("#x3dModelTitle_coke").hide();
		$("#x3dModelTitle_oasis").hide();
		$("#x3dModelTitle_fanta").show();

		$("#x3dCreationMethod_coke").hide();
		$("#x3dCreationMethod_oasis").hide();
		$("#x3dCreationMethod_fanta").show();
	}); 
}


function changeLook() {
	counter += 1;
	switch (counter) {
		case 1:
			document.getElementById('bodyColor').style.backgroundColor = 'rgba(179, 179, 79, 1)';
			document.getElementById('headerColor').style.backgroundColor = 'gray';
			document.getElementById('footerColor').style.backgroundColor = 'gray';
			break;
		case 2:
			document.getElementById('bodyColor').style.backgroundColor = 'rgba(255, 122, 0, 1)';
			document.getElementById('headerClor').style.backgroundColor = '2a80ff';
			document.getElementById('footerColor').style.backgroundColor = '#2a80ff';
			break;
		case 3:
			document.getElementById('bodyColor').style.backgroundColor = 'black';
			document.getElementById('headerColor').style.backgroundColor = 'rgba(184, 0, 255, 1)';
			document.getElementById('footerColor').style.backgroundColor = 'rgba(184, 0, 255, 1)';
			break;
		case 4:
			counter = 0;
			document.getElementById('bodyColor').style.backgroundColor = 'red';
			document.getElementById('headerColor').style.backgroundColor = 'gray';
			document.getElementById('footerColor').style.backgroundColor = 'red';
			break;
	}
}

function changeBack() {
	document.getElementById('bodyColor').style.backgroundColor = 'rgba(248, 248, 248, 1)';
	document.getElementById('headerColor').style.backgroundColor = 'black';
	document.getElementById('footerColor').style.backgroundColor = 'black';
}
