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

     Route::get('breakfast-in-a-mug', function () {
        return view('recipes.breakfast-in-a-mug');
    });
     Route::get('spicy-avocado-eggs-on-toast', function () {
        return view('recipes.spicy-avocado-eggs-on-toast');
    });
     Route::get('ham-and-cheese-omelette-roll-ups', function () {
        return view('recipes.ham-and-cheese-omelette-roll-ups');
    });
     Route::get('banana-oat-pancakes', function () {
        return view('recipes.banana-oat-pancakes');
    });
      Route::get('Make-ahead breakfast bowls', function () {
        return view('recipes.Make-ahead breakfast bowls');
    });
  Route::get('egg-and-veggie-salad-rolls-with-sweet-heat-dipping-sauce', function () {
        return view('recipes.egg-and-veggie-salad-rolls-with-sweet-heat-dipping-sauce');
    });
   Route::get('curried-egg-and-potato-salad', function () {
        return view('recipes.curried-egg-and-potato-salad');
    });
   Route::get('scallion-and-corn-pancake', function () {
        return view('recipes.scallion-and-corn-pancake');
    });
    Route::get('smoked-salmon-fritters-with-dill-cream-cheese', function () {
        return view('recipes.smoked-salmon-fritters-with-dill-cream-cheese');
    });
    Route::get('lobster-devilled-eggs', function () {
        return view('recipes.lobster-devilled-eggs');
    });
    Route::get('maple-walnut-tarts', function () {
        return view('recipes.maple-walnut-tarts');
    });
    Route::get('creme-caramel', function () {
        return view('recipes.creme-caramel');
    });
    Route::get('blueberry-cake', function () {
        return view('recipes.blueberry-cake');
    });
    Route::get('tiramisu-crepe-cake', function () {
        return view('recipes.tiramisu-crepe-cake');
    });
    Route::get('chinese-crepes', function () {
        return view('recipes.chinese-crepes');
    });
     Route::get('shrimp-and-egg-fried-rice', function () {
        return view('recipes.shrimp-and-egg-fried-rice');
    });
     Route::get('classic-pad-thai', function () {
        return view('recipes.classic-pad-thai');
    });
      Route::get('spinach-and-mushroom-soba-noodle-soup', function () {
        return view('recipes.spinach-and-mushroom-soba-noodle-soup');
    });
    Route::get('okonomiyaki', function () {
        return view('recipes.okonomiyaki');
    });
    Route::get('mushroom-fried-rice-with-crispy-egg', function () {
        return view('recipes.mushroom-fried-rice-with-crispy-egg');
    });
    Route::get('spaghetti-carbonara', function () {
        return view('recipes.spaghetti-carbonara');
    });
    Route::get('cedar-plank-salmon-with-nicoise-relish', function () {
        return view('recipes.cedar-plank-salmon-with-nicoise-relish');
    });
    Route::get('poached-egg-over-roasted-asparagus', function () {
        return view('recipes.poached-egg-over-roasted-asparagus');
    });
    Route::get('grilled-eggs-in-portobello-mushrooms', function () {
        return view('recipes.grilled-eggs-in-portobello-mushrooms');
    });
    Route::get('baked-eggs-extraordinaire', function () {
        return view('recipes.baked-eggs-extraordinaire');
    });
    Route::get('breakfast', function () {
        return view('recipes.breakfast');
    });
    Route::get('soup', function () {
        return view('recipes.soup');
    });
    Route::get('appetizers', function () {
        return view('recipes.appetizers');
    });
    Route::get('main', function () {
        return view('recipes.main');
    });
     Route::get('dessert', function () {
        return view('recipes.dessert');
    });
   Route::get('newest', function () {
        return view('recipes.newest');
    });
   
    

    // campaign admin panel
    Route::get('/login','CampaignController@admin');

    Route::get('allCandidates','CampaignController@allCandidates');

    // campaign stage 1
    Route::get('/campaign','CampaignController@index');

    Route::post('/newCandidate','CampaignController@newCandidate');

    





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
