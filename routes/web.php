<?php
// DB::listen(function($query){
//     echo "<pre>{$query->sql}</pre>";
// });
// Route::get('test', function(){
// $user = new app\Models\User;
// $user->name('Oswaldo');
// $user->email('oswi@gmail');
// $user->pasword('123123');
// $user->save();
// return $user;

// App\Models\User::create([

//     'name' => 'Administrador',
//     'email' => 'admin@email',
//     'password' => bcrypt ('123123'),

// ]);
Route::get('roles', function (){

    return App\Models\Role::with('user')->get();
});

Route::get('/', ['as' => 'home', 'uses'=> 'App\Http\Controllers\PagesController@home']);

Route::get('saludo/{nombre?}', ['as' => 'saludos', 'uses'=> 'App\Http\Controllers\PagesController@saludo'])
->where('nombre', "[A-Za-z]+");

Route::resource('mensajes','App\Http\Controllers\MessagesController');
Route::resource('usuarios','App\Http\Controllers\UsersController');

Route::get('login', 'App\Http\Controllers\Auth\LoginController@showLoginForm');
Route::post('login', 'App\Http\Controllers\Auth\LoginController@login');
Route::get('logout', 'App\Http\Controllers\Auth\LoginController@logout');


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
