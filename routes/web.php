<?php

use App\Room;


Route::get('/', function () {
    return view('welcome')->withRooms(Room::all());
});


/**
 * Cara pertama
 */
Route::delete('/rooms/cara1', function () {

    $keys = explode(',', request('keys'));

    $room = DB::table('rooms')
        ->where('kode_a', $keys[0])
        ->where('kode_b', $keys[1])
        ->where('kode_c', $keys[2])
        ->where('kode_d', $keys[3])
        ->where('kode_e', $keys[4])
        ->delete();

    return back();

});


/**
 * Cara kedua
 */
Route::delete('/rooms/cara2', function () {

    $data = DB::table('rooms')
        ->where(request('keys'))
        ->delete();

    return back();

});


/**
 * Cara ketiga
 */
Route::delete('/rooms/cara3', function () {

    $query = request()->query();

    $data = DB::table('rooms')
        ->where($query)
        ->delete();

    return back();

});
