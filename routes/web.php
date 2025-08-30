--- a/routes/web.php
+++ b/routes/web.php
@@
 use App\Http\Controllers\AulaController;
 use App\Http\Controllers\DocenteController;
+use App\Http\Controllers\ElementoController;
 
 Route::get('/', function () {
     return view('welcome');
 });
 
 Route::resource('aulas', AulaController::class);
 Route::resource('docentes', DocenteController::class);
+Route::resource('elementos', ElementoController::class);
 
 Route::get('/inicio', function () {
     return view('home');
 });
