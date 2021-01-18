<?php

namespace App\Http\Controllers;


use App\SiteSetting;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;



class SiteSettingController extends Controller
{
    public function index(SiteSetting $siteSetting)
    {
        $siteSetting = $siteSetting::all();
        return view('admin.sitesetting.index', compact('siteSetting'));
    }



    public function store(Request $request   , SiteSetting $siteSetting){
        foreach(array_except($request->toArray()  , ['_token' , 'submit']) as $key => $req){
            $siteSettingUpdate = $siteSetting->where('namesetting',$key)->first();
            if($siteSettingUpdate->type != 3)
            $siteSettingUpdate->fill(['value' => $req ])->save();
            else{
                 $fileName = uploadImage($req , '/public/website/slider/' , '1600' , '500' , $siteSettingUpdate->value);
                 if($fileName){
                     $siteSettingUpdate->fill(['value' => $fileName ])->save();
                 }
             }
        }
        return  redirect('/adminpanel/sitesetting')->with('message', "Settings updated with success !");
    }


  
}
