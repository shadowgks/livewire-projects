<?php

use App\Http\Livewire\Calculator;
use App\Http\Livewire\CascadingDropdown;
use App\Http\Livewire\Counter;
use App\Http\Livewire\TodoList;
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

Route::get('counter', Counter::class);
Route::get('calculator', Calculator::class);
Route::get('todo-list', TodoList::class);
Route::get('cascading-dropdown', CascadingDropdown::class);
