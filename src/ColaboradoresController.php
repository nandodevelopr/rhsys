<?php

	$colaboradores = $app['controllers_factory'];

	$colaboradores->get('/', function(){
		return 'home page colaboradores';
	});

	return $colaboradores;