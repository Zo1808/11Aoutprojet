<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/homeLogin', function () {
    return view('auth.login');
});
###
Route::resource('filiere','filiereController')->middleware('auth');
Route::resource('typeExam','TypeExamenController')->middleware('auth');

//Route::get('card','etudiantController@card')->middleware('auth');
Route::get('genereCarte/{id}','etudiantController@card')->middleware('auth');
Route::resource('departement','departementController')->middleware('auth');
Route::resource('etudiant','etudiantController')->middleware('auth');
Route::resource('classe','classesController')->middleware('auth');
Route::resource('matiere','matiereController')->middleware('auth');
Route::resource('unite','UniteEnseignementController')->middleware('auth');
Route::get('saisir/note','noteController@saisir')->middleware('auth');
Route::resource('notes','noteController')->middleware('auth');
Route::post('sauver','noteController@store')->middleware('auth');
Route::get('results','noteController@resultatEtudiant')->middleware('auth');
Route::get('detailsNoteR','noteController@traitementNote')->middleware('auth');
Route::post('releveNote','noteController@releveNotes')->middleware('auth');
Route::post('ExportPDF','noteController@ExportPDF')->name('ExportPDFReleve')->middleware('auth');
Route::get('ListeResultats','noteController@ViewSearch')->middleware('auth');
Route::post('generateFichePresencePdf','etudiantController@fpPdf')->name('extract.generateFichePresencePdf');
Route::get('zffi','etudiantController@viexExtractFiche');
Route::get('ListeNoteSaisi','noteController@ListeDesNotes')->middleware('auth');

Route::post('ExportPDFResultat','noteController@Res')->name('ExportPDFResultat')->middleware('auth');;
Route::post('ExportPDFResultatGlobal','noteController@ExportPDFResultat')->name('ExportPDFResultatGlobal')->middleware('auth');
///Route::get('testQr','noteController@qrCode');
Route::resource('comment','CommentaireController')->middleware('auth');
Route::resource('responsable','ResponsableParcourController')->middleware('auth');
Route::get('listeNV','noteController@ListeNV')->middleware('auth');
Route::post('VoirResNV','noteController@VoirListNV')->name('VoirResNV')->middleware('auth');
Route::post('noteRattraper','noteController@noteRattraper')->name('noteRattraper')->middleware('auth');

Route::post('insererNoteRattr','noteController@insererNoteRattr')->name('insererNoteRattr')->middleware('auth');