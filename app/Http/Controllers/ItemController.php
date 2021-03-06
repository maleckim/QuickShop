<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Item;


class ItemController extends Controller
{
    public function index()
    {
        $data = request();
        $names = Item::where('name','=', $data->search)->get();

        if(count($names) == 0){
            $names = Item::where('category', 'like', '%'.$data->search.'%')->get();
            return view('items.index', compact('names'));
        }else{
            return view('items.index', compact('names'));
        };   
    }

    public function show()
    {
        $data = request();
        $item = Item::where('name','=', $data->item)->first();
        Cache::put('recent', $data->item, now()->addMinutes(10));
        
        return view('items.show', compact('item'));
    }

    
}
