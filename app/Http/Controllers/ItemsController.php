<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemsController extends Controller
{
    public function all(){
      $items = Item::all();
      echo json_encode($items);
    }

    public function new(Request $request){
      $data = $request->input();
      $item = new Item();
      $item->title = $data['title'];
      $item->save();
      echo json_encode($item);
    }

    public function update(Request $request){
      $data = $request->input();
      $item = Item::find($data['id']);
      $item->title = $data['title'];
      $item->save();
      echo json_encode(true);
    }

    public function find(Request $request){
      $id = $request->id;
      $item = Item::find($id);
      echo json_encode($item);
    }

    public function delete($id){
      $item = Item::find($id);
      $item->delete();
      echo json_encode($item);
    }
}
