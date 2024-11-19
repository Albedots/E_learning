<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventController;
use App\Http\Controllers\CourseController;

//events
Route::get("/", [EventController::class, "index"]);

Route::get("/events/create", [EventController::class, "create"])->middleware("auth"); 

Route::post("/events", [EventController::class, "store"]);

Route::get("/events/{id}", [EventController::class, "show"]);

Route::get("/dashboard", [EventController::class, "dashboard"])->middleware("auth");

Route::delete("/events/{id}", [EventController::class, "destroy"])->middleware("auth");

Route::get("/events/edit/{id}", [EventController::class, "edit"])->middleware("auth");

Route::put("/events/update/{id}", [EventController::class, "update"])->middleware("auth");

Route::post("/events/join/{id}", [EventController::class, "joinEvent"])->middleware("auth");


//modules
Route::get('/modules/create/{eventId}', [CourseController::class, 'modules'])->name('modules.create');

Route::post("/modules", [CourseController::class, "modules_store"])->middleware("auth");

Route::get("/module/lesson/{id}", [CourseController::class, "lessonList"])->middleware("auth");

Route::get("/module/edit/{id}", [CourseController::class, "moduleEdit"])->middleware("auth");

Route::put("/module/update/{id}", [CourseController::class, "moduleUpdate"])->middleware("auth");

//lessons
Route::get('/lessons/create/{moduleId}', [CourseController::class, 'lessons'])->name('lessons.create');

Route::post("/lessons", [CourseController::class, "lessonStore"])->middleware("auth");

Route::get("/lesson/{id}", [CourseController::class, "lessonContent"])->middleware("auth");

Route::get("/lesson/edit/{id}", [CourseController::class, "lessonEdit"])->middleware("auth");

Route::put("/lesson/update/{id}", [CourseController::class, "lessonUpdate"])->middleware("auth");