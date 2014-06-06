<?php
Route::get('/', function()
{
    return View::make('pages/acceuil/acceuil'); 
});
Route::get('/aefat', function()
{
    return View::make('pages/aefat/a-propos'); 
});
Route::get('/actualite', function()
{
    return View::make('pages/actualite/actu-bf'); 
});
Route::get('/etudes', function()
{
    return View::make('pages/actualite/formation'); 
});
Route::get('/forum', function()
{
    return View::make('pages/forum/forum'); 
});

Route::get('/{menu}/{page}', function($menu, $page)
{
    return View::make('pages/'.$menu.'/'.$page); 
});