<?php


 
Route::get ( '/', function () {
    return view ( 'welcome' );
} );
/*Route::any ( '/search', function () {
    $q = Input::get ( 'q' );
    $user = User::Where ( 'name', 'LIKE', '%' . $q . '%' )
                    ->orWhere ( 'email', 'LIKE', '%' . $q . '%' )
                    ->get ();
    if (count ( $user ) > 0)
        return view ( 'welcome' )->withDetails ( $user )->withQuery ( $q );
    else
        return view ( 'welcome' )->withMessage ( 'No Details found. Try to search again !' );
} );*/

Route::post('/search','SearchController@index');