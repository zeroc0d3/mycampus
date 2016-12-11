<?php
$api = app('Dingo\Api\Routing\Router');

// Version 1 of our API
$api->version('v1', function ($api) {

	// Set our namespace for the underlying routes
	$api->group(['namespace' => 'Api\Controllers', 'middleware' => '\Barryvdh\Cors\HandleCors::class'], function ($api) {

		// Login route
		$api->post('login', 'AuthController@authenticate');
		$api->post('register', 'AuthController@register');

		/*** PUBLIC API (no need JWT) ***/
		// Campus
		$api->get('campus', 'CampusController@index');
		$api->get('campus/{id}', 'CampusController@show');
		// Fakultas
		$api->get('fakultas', 'FakultasController@index');
		$api->get('fakultas/{id}', 'FakultasController@show');
		// Jurusan
		$api->get('jurusan', 'JurusanController@index');
		$api->get('jurusan/{id}', 'JurusanController@show');
		// Semester
		$api->get('semester', 'SemesterController@index');
		$api->get('semester/{id}', 'SemesterController@show');
		// Matakuliah
		$api->get('matakuliah', 'MatakuliahController@index');
		$api->get('matakuliah/{id}', 'MatakuliahController@show');
				
		// All routes in here are protected and thus need a valid token
		// $api->group( [ 'protected' => true, 'middleware' => 'jwt.refresh', 'except' => ['index', 'show']], function ($api) {
		$api->group( [ 'middleware' => 'jwt.auth', 'except' => ['index', 'show']], function ($api) {
			$api->get('users/me', 'AuthController@me');
			$api->get('users', 'AuthController@index');
			$api->get('validate_token', 'AuthController@validateToken');
			
			// Campus
			//$api->get('campus', 'CampusController@index');
			$api->post('campus', 'CampusController@store');
			//$api->get('campus/{id}', 'CampusController@show');
			$api->delete('campus/{id}', 'CampusController@destroy');
			$api->put('campus/{id}', 'CampusController@update');
			
			// Fakultas
			//$api->get('fakultas', 'FakultasController@index');
			$api->post('fakultas', 'FakultasController@store');
			//$api->get('fakultas/{id}', 'FakultasController@show');
			$api->delete('fakultas/{id}', 'FakultasController@destroy');
			$api->put('fakultas/{id}', 'FakultasController@update');
			
			// Jurusan
			//$api->get('jurusan', 'JurusanController@index');
			$api->post('jurusan', 'JurusanController@store');
			//$api->get('jurusan/{id}', 'JurusanController@show');
			$api->delete('jurusan/{id}', 'JurusanController@destroy');
			$api->put('jurusan/{id}', 'JurusanController@update');
			
			// Semester
			//$api->get('semester', 'SemesterController@index');
			$api->post('semester', 'SemesterController@store');
			//$api->get('semester/{id}', 'SemesterController@show');
			$api->delete('semester/{id}', 'SemesterController@destroy');
			$api->put('semester/{id}', 'SemesterController@update');
			
			// Matakuliah
			//$api->get('matakuliah', 'MatakuliahController@index');
			$api->post('matakuliah', 'MatakuliahController@store');
			//$api->get('matakuliah/{id}', 'MatakuliahController@show');
			$api->delete('matakuliah/{id}', 'MatakuliahController@destroy');
			$api->put('matakuliah/{id}', 'MatakuliahController@update');
			
			// Dosen
			$api->get('dosen', 'DosenController@index');
			$api->post('dosen', 'DosenController@store');
			$api->get('dosen/{id}', 'DosenController@show');
			$api->delete('dosen/{id}', 'DosenController@destroy');
			$api->put('dosen/{id}', 'DosenController@update');
			
			// Mahasiswa
			$api->get('mahasiswa', 'MahasiswaController@index');
			$api->post('mahasiswa', 'MahasiswaController@store');
			$api->get('mahasiswa/{id}', 'MahasiswaController@show');
			$api->delete('mahasiswa/{id}', 'MahasiswaController@destroy');
			$api->put('mahasiswa/{id}', 'MahasiswaController@update');
			
			// Kartu Rencana Studi
			$api->get('karturencanastudi', 'KarturencanastudiController@index');
			$api->post('karturencanastudi', 'KarturencanastudiController@store');
			$api->get('karturencanastudi/{id}', 'KarturencanastudiController@show');
			$api->delete('karturencanastudi/{id}', 'KarturencanastudiController@destroy');
			$api->put('karturencanastudi/{id}', 'KarturencanastudiController@update');
			
			// Kartu Hasil Studi
			$api->get('kartuhasilstudi', 'KartuhasilstudiController@index');
			$api->post('kartuhasilstudi', 'KartuhasilstudiController@store');
			$api->get('kartuhasilstudi/{id}', 'KartuhasilstudiController@show');
			$api->delete('kartuhasilstudi/{id}', 'KartuhasilstudiController@destroy');
			$api->put('kartuhasilstudi/{id}', 'KartuhasilstudiController@update');

		});
	});
});


Route::get('/', function () {
    return view('welcome');
});
