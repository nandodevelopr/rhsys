<?php

	use Silex\Application;

	require 'vendor/autoload.php';

	$app = new Application();

	$app->mount('candidatos/', include 'src/CandidatosController.php');

	$app->mount('vagas/', include 'src/VagasController.php');

	$app->mount('colaboradores', include 'src/ColaboradoresController.php');

	$app->run();