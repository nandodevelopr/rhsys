<?php

$candidatos = $app['controllers_factory'];

$candidatos->get('/', function () {
    return 'Candidatos home page';
});

return $candidatos;

?>