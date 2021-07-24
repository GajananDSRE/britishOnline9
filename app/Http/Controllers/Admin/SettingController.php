<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SiteSetting;
use Illuminate\Support\Facades\Validator;
use DB,Exception,Cache,Redirect;

class SettingController extends Controller
{
    public function logo_setting()
    {
        $sites_settings = DB::table('site_setting')->get();
        return view('admin.site_setting', compact('sites_settings'));
    }

    public function logo_update(Request $request)
    { 
        try{
        if(!$request->isMethod('post') || !$request->ajax()){
            throw new Exception("Http Request not allowed.", 1); 
        }
        $input = $request->all();
        $validator = Validator::make($input,[
            "logo_file" => "nullable|mimes:jpeg,jpg,png",
            "user_id" => 	'required',
        ],
        [
            'logo_file.mimes' => 'The image must be a file of type: jpeg, jpg, png.',
        ]);
        if ($validator->fails()) {
            throw new Exception(implode('<br> ', $validator->errors()->all()), 1);
        }        
        $logo_folder = 'SiteLogo';
        $data                   =   array();
        $sitesetting   =   SiteSetting::find($input['user_id']);dd($sitesetting);
        if ($sitesetting) {
            if(!empty($input['logo_file'])){
                $image = $input['logo_file'];
                $logo_name = uniqid() . '.' . $image->getClientOriginalExtension();
                $logo_path = 'admin/vendors/images/'. $logo_folder;
                $logo_title = 'Site-Logo-' .$input['user_id'];
                $image->move(public_path().'/admin/vendors/images/'.$logo_folder.'/', $logo_name);
                $data['user_id'] = $input['user_id'];
                $data['slug'] = $logo_path;
                $data['title'] = $logo_title;
                $data['logo'] = $logo_name;
            }
            $sitesetting->fill($data)->save();
        }
        return response()->json(['errorStatus' => false, 'data' => $sitesetting, 'message' => 'Logo Updated Successfully']);
        } catch(Exception $e){
            return response()->json(['errorStatus' => true, 'message' => $e->getMessage()]);
        }

    }
}
