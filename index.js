$(document).ready(function() {
	console.log("wpisz nazwa Pierdolec, msg pole albo ściernisko :D");
	id();
	start();
	setInterval(id,2000)
	setInterval(odswiez, 1500);

	$('[id="wyslij"]').bind({ //po kliknięciu
		'click':function(){
		wiadomosc();
		}
	});

	$( "#wiadomosc" ).on( "keydown", function(event) {
      if(event.which == 13) 
         wiadomosc();
    });

});
//-------------------------------
// do wysyłania
function wiadomosc(){

	$.ajax({
		url: 'dodaj.php',
		type: 'post',
		data: {wiadomosc: $('[id="wiadomosc"]').val(),
		nazwa: $('[id="nazwa"]').val(),
		zdjecie: $('[id="zdjecie"]').val()
			},
			success: function(msg){
			$('[id="czat"]').html(msg);
			
		}
	})
	.done(function() {
		//console.log("wysłane");
	})
	.fail(function() {
		console.log("nie wysłano");
	});
	$("#wiadomosc").val("");
    $("#wiadomosc").focus();
}
// ----------------------------------
//przy starcie
function start(){
	$.ajax({
		url: 'start.php',
		type: 'post',
		data: {},
		success: function(msg){
			$('[id="czat"]').html(msg);
			
		}
	})
	.done(function() {
		//console.log("start");
	})
	.fail(function() {
		console.log("brak startu");
	});
	
}
//----------------------------------
//odświeżanie id
function id(){
	$.ajax({
		url: 'id.php',
		type: 'post',
		data: {},
		success: function(msg){
			$('[id="idn"]').html(msg);
		}
	})
	.done(function() {
		//console.log("odświeżenie id");
	})
	.fail(function() {
		console.log("nie odświeżono id");
	});

}



//---------------------------------
//odświeżanie
function odswiez(){
	$.ajax({
		url: 'odswiez.php',
		type: 'post',
		data: {
			id: $('[id="id"]').val()
		 },
		success: function(msg){
			$('[id="czat"]').html(msg);
		}
	})
	.done(function() {
		//console.log("odświeżenie");
	})
	.fail(function() {
		console.log("nie odświeżono");
	});
}
