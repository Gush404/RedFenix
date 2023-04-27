<?php

namespace App\Http\Controllers;

use App\Models\item;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class TodolistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return item::orderBy('created_at', 'DESC')->get();
    }

    public function save(Request $request)
    {
        $newItem = new Item;
        $newItem->name = $request->item["name"];
        $newItem->save();

        return $newItem;
    }

    public function update(Request $request, $id)
    {
        $existingItem = Item::find( $id );
        //if($existingItem) é true logo on true faz {}
        if($existingItem){
            $existingItem->completed = $request->item['completed'] ? true : false;
            $existingItem->completed_at = $request->item['completed'] ? Carbon::now() : null;
            $existingItem->Save();
            return $existingItem;
        }

        return "Item not found.";
    }

    public function destroy($id)
    {
        $existingItem = Item::find ( $id );

        if( $existingItem ){
            $existingItem->delete();
            return "Item successfully deleted.";
        }
        
        return "Item not found.";
    }

}