<?php

use Illuminate\Support\Facades\Route;
use Revolution\Google\Sheets\Facades\Sheets;
use Spatie\SlackAlerts\Facades\SlackAlert;
use Spatie\Browsershot\Browsershot;

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


Route::get('/f3', function () {
    Browsershot::url('https://example.com')->save(storage_path('image.png'));
    //Browsershot::html('<h1>Hello world!!</h1>')->save(storage_path('image.png'));
    /*
    $data = Sheets::spreadsheet('13mpI73looBt3NoCycRoABRryzX4805v3NhtlAxM1aMo')
              ->sheet('QSchedule')->all();
    $row = 0;
    $current_time = $start_time = strtotime('next monday');
    while($current_time < strtotime('+1 days', $start_time) && isset($data[$row])) {
        if(strtotime($data[$row][1]) == $current_time) {
            SlackAlert::message($data[$row][1] . ' ' . $data[$row][4] . ' is Qing at ' . $data[$row][2] . " - " . $data[$row][3] . ($data[$row][5] ? (' ('.$data[$row][5].')') : ''));
        } elseif(strtotime($data[$row][1]) > $current_time) {
            $current_time = strtotime('+1 day', $current_time);
            continue;
        }
        $row++;
    }
    */
});

