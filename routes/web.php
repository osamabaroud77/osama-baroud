<?php

use App\Http\Controllers\Taskcontroller;
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


 Route::get('/welcom', function(){
     return view('welcome');
 });
 Route::get('/about', function(){
     $name=request('name');
     return view('about' , compact('name')) ;
 });
 Route::post('/store', function(){
     $name=request('name');
     return view('about' , compact('name')) ;
 });
 Route::get('tasks', function(){
     $tasks=[
         'first-tasks' => 'tasks1',
         'second-tasks'=>'tasks2',
         'third-tasks'=>'tasks3'
    ];
     return view('tasks' , compact('tasks')) ;
 });
 Route::get('show/{id}', function($id){
    $tasks=[
        'first-tasks' => 'tasks1',
       'second-tasks'=>'tasks2',
        'third-tasks'=>'tasks3'
    ];
   $task=$tasks[$id];
    return view('show' , compact('task')) ;
 });
 Route::get('/', function(){
   return view('add.index');
 });
Route::get('/', function(){
    return view('add.about');
});

/*Route::get('/',function(){
return view('child.home');
});
Route::get('/about',function(){
return view('child.about');
});
Route::get('/Service',function(){
    return view('child.Service');
    });
    Route::get('/Project',function(){
        return view('child.Project');
        });
*/
        //osama






        Route::get('/', [Taskcontroller::class, 'index'])->name('tasks');
        Route::post('insert', [Taskcontroller::class, 'insert'])->name('task.insert');;
        Route::delete('delete/{id}', [Taskcontroller::class, 'delete'])->name('task.delete');;
       Route::put('edit/{id}', [Taskcontroller::class, 'showData'])->name('task.edit');
       Route::put('edit', [Taskcontroller::class, 'update']);
       Route::patch('update/{id}', [Taskcontroller::class, 'showData2'])->name('task.edit');
       Route::patch('update', [Taskcontroller::class, 'update2']);


