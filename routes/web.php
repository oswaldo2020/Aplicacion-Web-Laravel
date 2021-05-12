<?php
DB::listen(function($query){
    // echo "<pre>{$query->sql}</pre>";
});
// Route::get('test', function(){
// $user = new app\Models\User;
// $user->name('Oswaldo');
// $user->email('oswi@gmail');
// $user->pasword('123123');
// $user->save();
// return $user;

// App\Models\User::create([

//     'name' => 'New Administrador',
//     'email' => 'adm@email',
//     'password' => '123123'
// ]);
// bcrypt ('123123')
Route::get('roles', function (){

    return App\Models\Role::with('user')->get();
});

Route::get('/','PagesController@home')->name('home');

Route::get('saludo/{nombre?}','PagesController@saludo')->name('saludos')
->where('nombre', "[A-Za-z]+");

Route::resource('mensajes','MessagesController');
Route::resource('usuarios','UsersController');
Route::post('usuarios.guardar','UsersController@storeajax');
Route::resource('abonos','AbonosController');
Route::resource('clientes','ClientesController');
Route::get('search/clientes', 'SearchController@clientes')->name('search.clientes');


Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');


Auth::routes();


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
