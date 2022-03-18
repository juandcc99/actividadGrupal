<?php


$controllers=array(
	'alumno'=>['index','register','show','save','update','delete','error','contacto'],
	'profesor'=>['index','register','show','save','update','delete','error','contacto'],
	'curso'=>['index','register','show','save','update','delete','error','contacto']
);

if (array_key_exists($controller, $controllers)) {
	if (in_array($action, $controllers[$controller])) {
		call($controller, $action);
	}
	else{
		call($controller,'error');
	}		
}else{
	call($controller,'error');
}

function call($controller, $action){
	require_once('Controllers/'.$controller.'Controller.php');

	switch ($controller) {
		case 'alumno':
			require_once('Model/Alumno.php');
			$controller = new AlumnoController();
			break;
		case 'profesor':
			require_once('Model/Profesor.php');
			$controller = new ProfesorController();
			break;
		case 'curso':
			require_once('Model/Curso.php');
			$controller = new CursoController();
			break;
		default:
			# code...
			break;
	}
	$controller->{$action}();
}


?>