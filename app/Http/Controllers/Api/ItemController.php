<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Http\Controllers\Controller;

class ItemController extends Controller
{

public function create(){
    $item = Item::create([
        'name' => "apple",
        'price'=>200,
    ]);
return response()->json($item);
}




}
