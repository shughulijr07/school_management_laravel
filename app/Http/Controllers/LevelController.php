<?php

namespace App\Http\Controllers;

use App\Models\ClassType;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function store(Request $request){
         $validateData = $request->validate([
            'name' => ['required', 'unique:class_types,name'],
            'code' => ['required', 'unique:class_types,code']
         ]);

         $data = $request->all();

         if ($validateData) {
            $add_level = ClassType::create($data);
         }

         if($add_level){
            return back()->with('flash_success', __('msg.store_ok'));
         }
    }

    public function destroy(ClassType $level){
         
         $delete = ClassType::destroy($level->id);

         if ($delete) {
            return back()->with('flash_success', __('msg.del_ok'));
         }
    }
}
