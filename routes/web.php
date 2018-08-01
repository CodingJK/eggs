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

Route::get('/','EggsController@homepage');

Route::get('/Recipes','EggsController@recipes');

Route::get('/Apps','EggsController@apps');

Route::get('/Eggs101','EggsController@eggs101');

Route::get('/Nutrition','EggsController@nutrition');

Route::get('/Eggforbabies','EggsController@eggforbabies');


Route::get('English-Muffin-Bacon-Tomato-Fried-Egg', function () {
        return view('recipes.English-Muffin-Bacon-Tomato-Fried-Egg');
    });

Route::get('grandmaIndian', function () {
        return view('recipes.grandmaIndian');
    });

Route::get('indianStyleSkillEggsWithMushrooms', function () {
        return view('recipes.indianStyleSkillEggsWithMushrooms');
    });

Route::get('Scrambled-Eggs', function () {
        return view('recipes.Scrambled-Eggs');
    });

Route::get('bittaraAppa', function () {
        return view('recipes.bittaraAppa');
    });
Route::get('fish-bisque-egg-white', function () {
        return view('recipes.fish-bisque-egg-white');
    });

Route::get('mushroom-truffle-and-egg', function () {
        return view('recipes.mushroom-truffle-and-egg');
    });

Route::get('Birds-Nest-Egg-Peral', function () {
        return view('recipes.Birds-Nest-Egg-Peral');
    });

Route::get('devilledEggs', function () {
        return view('recipes.devilledEggs');
    });
Route::get('masalaEggKachumber', function () {
        return view('recipes.masalaEggKachumber');
    });


Route::get('eggSamosa', function () {
        return view('recipes.eggSamosa');
    });

Route::get('shreddedEgg', function () {
        return view('recipes.shreddedEgg');
    });   


Route::get('Funny-Egg-Fish', function () {
        return view('recipes.Funny-Egg-Fish');
    }); 
Route::get('Boiled-Egg-Oolong-Tea', function () {
        return view('recipes.Boiled-Egg-Oolong-Tea');
    });

Route::get('Moo-Shu-pork-wok-fried', function () {
        return view('recipes.Moo-Shu-pork-wok-fried');
    });
Route::get('Foie-gras-roulade-with-egg-sheet-and-nori', function () {
        return view('recipes.Foie-gras-roulade-with-egg-sheet-and-nori');
    });

Route::get('TikkaMasala', function () {
        return view('recipes.TikkaMasala');
    });

Route::get('EggsMakhani', function () {
        return view('recipes.EggsMakhani');
    });

Route::get('Steamed-crab-claw-with-egg-whites', function () {
        return view('recipes.Steamed-crab-claw-with-egg-whites');
    });
Route::get('St-Egg-Wht-Sea-Treasure', function () {
        return view('recipes.St-Egg-Wht-Sea-Treasure');
    });
Route::get('St-Egg-Mncd-Pork', function () {
        return view('recipes.St-Egg-Mncd-Pork');
    });
Route::get('Scrmbld-Egg-Fish-Maw', function () {
        return view('recipes.Scrmbld-Egg-Fish-Maw');
    });
Route::get('Bld-Swtnd-Milk', function () {
        return view('recipes.Bld-Swtnd-Milk');
    });
Route::get('Syrup-Lts-Seed', function () {
        return view('recipes.Syrup-Lts-Seed');
    });

Route::get('Egg-Tart', function () {
        return view('recipes.Egg-Tart');
    });

Route::get('Wk-Frd-Lbstr-Egg-Rainbow', function () {
        return view('recipes.Wk-Frd-Lbstr-Egg-Rainbow');
    });

Route::get('Chiu-Chow-Omeletd', function () {
        return view('recipes.Chiu-Chow-Omeletd');
    });

Route::get('Blck-Bn-Shrmp-Egg-White', function () {
        return view('recipes.Blck-Bn-Shrmp-Egg-White');
    });

Route::get('Duo-Egg-Pearl', function () {
        return view('recipes.Duo-Egg-Pearl');
    });

    Route::get('Billnr-Frd-Rice', function () {
        return view('recipes.Billnr-Frd-Rice');
    });

    Route::get('Gldn-Omlet', function () {
        return view('recipes.Gldn-Omlet');
    });

    Route::get('Sclp-Egg-Wht-Frd-Rice', function () {
        return view('recipes.Sclp-Egg-Wht-Frd-Rice');
    });

    Route::get('Basic-Souffle', function () {
        return view('recipes.Basic-Souffle');
    });





