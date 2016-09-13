<?php
	$vagas = $app['controllers_factory'];

	$vagas->get('/', function() {
		return 'Vagas home page';
	});

	return $vagas;
?>