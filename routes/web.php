<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

 R o u t e : : g e t ( ' / p r o d u c t o s ' ,   [ P r o d u c t o C o n t r o l l e r : : c l a s s ,   ' i n d e x ' ] ) ;  
 R o u t e : : g e t ( ' / p r o d u c t o s / c r e a t e ' ,   [ P r o d u c t o C o n t r o l l e r : : c l a s s ,   ' c r e a t e ' ] ) ;  
 R o u t e : : p o s t ( ' / p r o d u c t o s ' ,   [ P r o d u c t o C o n t r o l l e r : : c l a s s ,   ' s t o r e ' ] ) ;  
 R o u t e : : g e t ( ' / p r o d u c t o s / { i d } / e d i t ' ,   [ P r o d u c t o C o n t r o l l e r : : c l a s s ,   ' e d i t ' ] ) ;  
 R o u t e : : p u t ( ' / p r o d u c t o s / { i d } ' ,   [ P r o d u c t o C o n t r o l l e r : : c l a s s ,   ' u p d a t e ' ] ) ;  
 