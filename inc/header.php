<!-- Meta -->
<meta charset="utf-8">
<meta name="robots" content="noindex"/>
<link rel="icon" type="image/ico" href="favicon.ico" />

<!-- CSS -->
<link rel="stylesheet" href="ressources/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" href="ressources/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="ressources/reset.css" type="text/css" media="screen">
<link href='http://fonts.googleapis.com/css?family=Changa+One|Droid+Sans:400,700' rel='stylesheet' type='text/css'>

<!-- JS -->
<script type="text/javascript" src="ressources/jquery.min.js"></script>
<script type="text/javascript" src="ressources/jquery.leanModal.js"></script>
<script src="ressources/bootstrap/js/bootstrap.min.js"></script>


<script>
$(document).ready( function(){ 
	// Chargement du background configuré
	$('body').css('background-image', 'url(ressources/backgrounds/<?php echo $config->get('background'); ?>)');

	// Fenêtres modales
	$("#link_config_panel").leanModal({closeButton: ".modal_close"});
	$("#link_howto_update").leanModal({closeButton: ".modal_close"});
	$("#link_about_us").leanModal({closeButton: ".modal_close"});

	// Panel de configuration
	$('#myTab a[href="#multimedia"]').tab('show');
});

// Documentation : http://twitter.github.com/bootstrap/javascript.html#tabs
$('#myTab a').click(function (e) {
  e.preventDefault();
  $(this).tab('show');
})

</script>