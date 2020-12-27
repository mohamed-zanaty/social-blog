<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class SettingController extends Controller
{
    public function show(){

        $like = Setting::where('name', 'like')->value('value');


        $create = Setting::where('name', 'create')->value('value');

        return view('main.setting', compact('like', 'create'));
    }

    public function like(Request $request){




        if ($request->like == 'on'){

         Setting::where('name', 'like')->update(['value' => 0]);
        }
        else{
            Setting::where('name', 'like')->update(['value' => 1]);
        }

        return redirect()->back();
    }

    public function create(Request $request){



        if ($request->create == 'on'){
         Setting::where('name', 'create')->update(['value' => 0]);
        }else {
            Setting::where('name', 'create')->update(['value' => 1]);
        }
        return redirect()->back();
    }


    public function title(Request $request){


        Setting::where('name', 'title')->update(['description' => $request->title,]);


        return redirect()->back();
    }



}
