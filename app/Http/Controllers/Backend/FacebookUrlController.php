<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use TIMESTAMP;
use DB;
use Session;
use Redirect;

class FacebookUrlController extends Controller {
    
    public function index() {
         $social = DB::table('config')->get();
        return view('backend/facebook_url/update')->with('social',$social);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request) {
        $data = array();
        $data['facebook_url'] = $request->facebook_url;
        $data['banner_left'] = $request->banner_left;
        $data['banner_right'] = $request->banner_right;
       $input = DB::table('config')->update($data);
             return Redirect()->back()->with('success','Cập nhật thành công');
        
    }

}
