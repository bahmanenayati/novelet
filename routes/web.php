<?php

use Illuminate\Support\Facades\Auth;
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
    event(new \App\Events\Test('hello world'));
    return view('index');
});

Auth::routes();

Route::resource('/story', 'StoryController');
Route::resource('/story/mark', 'StoryMarkController');
Route::get('/profile', 'ProfileController@index')->name('profile');

Route::get('sitemap', function () {

    // create new sitemap object
    $sitemap = \Illuminate\Support\Facades\App::make('sitemap');

    // set cache key (string), duration in minutes (Carbon|Datetime|int), turn on/off (boolean)
    // by default cache is disabled
    $sitemap->setCache('laravel.sitemap', 60);

    // check if there is cached sitemap and build new only if is not
    if (!$sitemap->isCached()) {
        // add item to the sitemap (url, date, priority, freq)
        $sitemap->add(\Illuminate\Support\Facades\URL::to('/'), \Carbon\Carbon::now(), '1.0', 'monthly');

        // get all posts from db
        $posts = \App\Models\Story::query()->get();

        // add every post to the sitemap
        foreach ($posts as $post) {
            $sitemap->add(env('APP_URL') . '/story/' . $post->id, $post->updated_at, 1, 'monthly');
        }
    }

    // show your sitemap (options: 'xml' (default), 'html', 'txt', 'ror-rss', 'ror-rdf')
    return $sitemap->render('xml');
});
