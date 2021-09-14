<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Module_tag;

class ModuletagController extends Controller
{
    //Hien thi trang module tags 
    public function index()
    {
        $module_datas = DB::table('module_tags')
        ->join('tags', 'module_tags.module_id', '=','tags.id')
        ->select('module_tags.id', 'tags.name')
        ->get();
        // dd($module_data);
    
        return view('moduletag',compact('module_datas'));
    }

    //Hien thi trang edit
    public function EditModuleTagPage($id)
    {
        $module_id = DB::table('module_tags')
            ->join('tags', 'module_tags.module_id', '=','tags.id')
            ->where('module_tags.id',$id)
            ->select('module_tags.id', 'tags.name')
            ->first();
        // dd($module_id);
        return view('edit-moduletag',compact('module_id'));
    }
}
