<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\User;
class SearchController extends Controller
{
    public function index(Request $request)
    {
       //$q = Input::get ( 'q' );
       //$user = User::Search($q)->get();
      
      $q = $request-> q;
      //$q = $request-> email;   
      $user = User::Where ( 'name', 'LIKE', '%' . $q . '%' )
                    ->orWhere ( 'email', 'LIKE', '%' . $q . '%' )
                    ->get ();
    if (count ( $user ) > 0)
       	return view ( 'welcome' )->withDetails ( $user )->withQuery ( $q );
       
    else
        return view ( 'welcome' )->withMessage ( 'No Details found. Try to search again !' );
        
    }
}
