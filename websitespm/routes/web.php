	<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();


Route::group(['middleware' => ['web','auth']], function(){


	Route::get('/', function(){
		if(Auth::user()->role == 0){
			return view('home');
		} else if(Auth::user()->role == 1){
			
			return view('admin', $users);
		} elseif(Auth::user()->role == 2){
			
			return view('spi', $users);
		}
	});

});




 // Route::get('/', function () {
 //     return view('welcome');
 // });


 Route::get('/spmi_laporan_unit','SpmiLaporanUnitController@dokumen');
 Route::get('/spmi_laporan_unit/view','SpmiLaporanUnitController@view');

// Route::get('/dokumen','DokumenController@dokumen');
 Route::get('/form','FormController@view');
  Route::get('/spmi_laporan_unit/spmi_laporan_unit_create','SpmiLaporanUnitController@vieww');
// Auth::routes();



 Route::get('/audit','AuditController@add');

 Route::get('/hasilaudit','AuditController@hasil');
 Route::get('/daftarunit','UnitController@daftar');

Route::get('spmi_daftar_tilik/spmi_daftar_tilik','SpmidaftartilikController@hasiladmin');
// Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/admin', 'AdminController@index')->name('admin');

Route::post('/spmi_laporan_unit/spmi_laporan_unit_create','SpmiLaporanUnitController@create');
Route::get('/spmi_laporan_unit/spmi_laporan_unit','SpmiLaporanUnitController@laporan');
Route::get('/spmi_laporan_unit/spmi_laporan_unitpdf','SpmiLaporanUnitController@pdf');
 Route::get('/spmi_laporan_unit/spmi_laporan_units','SpmiLaporanUnitController@laporans');
 Route::get('/spmi_laporan_unit/spmi_laporan_units/admin','SpmiLaporanUnitController@indexadmin');

 Route::post('/audit/create','SpmidaftartilikController@create');

Route::get('/listAllLaporan/{data}/detail','SpmiLaporanUnitController@detail');
Route::get('/listAllLaporan/{data}/edit','SpmiLaporanUnitController@edit');
Route::post('/listAllLaporan/{data}/edit','SpmiLaporanUnitController@updatee');
Route::get('/listAllLaporan/{data}/destroy','SpmiLaporanUnitController@destroy');
Route::get('/listAllAudit/{data}/detail','SpmidaftartilikController@detail');
Route::get('/listAllAudit/{data}/edit','SpmidaftartilikController@edit');
Route::post('/listAllAudit/{data}/edit','SpmidaftartilikController@updatee');
Route::get('/listAllAudit/{data}/destroy','SpmidaftartilikController@destroy');

Route::get('/listAllLaporan/{data}/status','SpmiLaporanUnitController@status');
Route::post('/listAllLaporan/{data}/status','SpmiLaporanUnitController@updatestatus');

Route::get('/listAllLaporan/{data}/opsi','SpmiLaporanUnitController@opsi');
Route::post('/listAllLaporan/{data}/opsi','SpmiLaporanUnitController@updateopsi');


Route::post('/listAllLaporan/{data}/audit','SpmidaftartilikController@create');
Route::get('/listAllLaporan/{data}/audit','SpmidaftartilikController@add');
Route::get('/laporan/cetak_pdf','SpmiLaporanUnitController@cetak_pdf');

Route::get('/spmi_revisi_laporan_unit/spmi_revisi_laporan_units','SpmirevisilaporanunitController@index');
Route::get('/listAllLaporan/{data}/revisi','SpmirevisilaporanunitController@add');
Route::post('/listAllLaporan/{data}/revisi','SpmirevisilaporanunitController@create');
Route::get('/listAllLaporan/{data}/detailrev','SpmirevisilaporanunitController@detail');
Route::get('/listAllLaporan/{data}/editrev','SpmirevisilaporanunitController@edit');
Route::post('/listAllLaporan/{data}/editrev','SpmirevisilaporanunitController@updatee');
Route::get('/listAllLaporan/{data}/destroyrev','SpmirevisilaporanunitController@destroy');

Route::get('/test','SpmidaftartilikController@test');
Route::get('/test2','SpmidaftartilikController@test2');




