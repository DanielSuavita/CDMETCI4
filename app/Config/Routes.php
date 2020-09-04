<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Routes');
$routes->setDefaultController('HomeRoutes');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->group('',function($routes){
	$routes->get('Home',			'HomeRoutes::index');
	$routes->get('SignUp', 			'HomeRoutes::SignUp');
	$routes->get('ProductiveStage', 'HomeRoutes::ProductiveStage');
	$routes->get('CenterPrograms', 	'HomeRoutes::CenterPrograms');
	$routes->get('QA', 				'HomeRoutes::QA');
});

/**
 * Session Routes
 */

$DashboardArgs = [
	'filter'	=> 'SessionFilter'
];
$routes->group('Dashboard', 	$DashboardArgs,function($routes){
	$routes->get('', 				'DashboardRoutes::index');
});

$routes->group('Aprendiz', 		$DashboardArgs,function($routes){
	$routes->get('', 				'AprendizRoutes::ActivationToken');
	$routes->get('ActivationToken', 'AprendizRoutes::ActivationToken');
	$routes->get('VerifyToken', 	'UsersController::VerifyToken');
	$routes->get('ProductiveStage', 'HomeRoutes::ProductiveStage');
	$routes->get('QA', 				'HomeRoutes::QA');

});

$routes->group('Directive', 	$DashboardArgs,function($routes){
	$routes->get('', 				'DirectiveRoutes::index');
});

$routes->group('Coordinator', 	$DashboardArgs,function($routes){
	$routes->get('', 				'CoordinatorRoutes::index');
});

$routes->group('Leader', 		$DashboardArgs,function($routes){
	$routes->get('', 				'LeaderRoutes::index');
});

$routes->group('Subdirector', 	$DashboardArgs,function($routes){
	$routes->get('', 				'SubdirectorRoutes::index');
});

$AdminArgs = [
	'filter'	=> 'AdminFilter'
];
$routes->group('Admin', 		$AdminArgs,function($routes){
	$routes->get('', 				'Routes::index');
	$routes->get('ActivationToken', 'Routes::ActivationToken');
	$routes->get('ProductiveStage', 'HomeRoutes::ProductiveStage');
	$routes->get('QA', 				'HomeRoutes::QA');
});

/**
 * Controllers
 */

$ControllerArgs = [
	'namespace'	=> 'App\Controllers'
];
$routes->group('Auth', 		$ControllerArgs, function($routes){
	$routes->post('login', 	'AuthController::login');
	$routes->get('logout', 	'AuthController::logout');
});

$routes->group('User', 		$ControllerArgs, function($routes){
	$routes->post('create', 	'UsersController::create');
	$routes->get('VerifyToken', 'UsersController::VerifyToken');
});



/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
