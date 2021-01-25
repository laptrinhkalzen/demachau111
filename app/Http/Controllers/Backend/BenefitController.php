<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use TIMESTAMP;
use DB;


class BenefitController extends Controller {
    

    public function index() {
        $benefit = DB::table('benefit')->get();
        return view('backend/benefit/index', compact('benefit'));
    }

   
    public function create() {
        // $members=DB::table('member')->orderBy('created_at', 'desc')->get();
        return view('backend/benefit/create');
    }

   
    public function store(Request $request) {
        $data = array();
        $data['name'] = $request->name;
        $data['content'] = $request->content;
        $data['description'] = $request->description;
        $data['order'] = $request->order;
        $data['created_at'] = Carbon::now('Asia/Ho_Chi_Minh');
        $image = $request->file('image');
           if($image){
            $get_name_image = $image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$image->getClientOriginalExtension();
            $image->move('upload/config', $new_image);
            $data['image']=$new_image;
        }
       $input = DB::table('benefit')->insert($data);
             if ($input) {
            return redirect()->route('admin.benefit.index')->with('success', 'Cập nhật thành công');
        } else {
            return redirect()->route('admin.benefit.index')->with('error', 'Cập nhật thất bại');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
         $benefit = DB::table('benefit')->where('id',$id)->first();
        return view('backend/benefit/update')->with('benefit',$benefit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        // $input = $request->all();
        $data = array();
        $data['name'] = $request->name;
        $data['content'] = $request->content;
        $data['description'] = $request->description;
        $data['order'] = $request->order;
        $data['updated_at'] = Carbon::now('Asia/Ho_Chi_Minh');
        $image = $request->file('image');
           if($image){
            $get_name_image = $image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$image->getClientOriginalExtension();
            $image->move('upload/config', $new_image);
            $data['image']=$new_image;
        }
       $input = DB::table('benefit')->where('id',$id)->update($data);
             if ($input) {
            return redirect()->route('admin.benefit.index')->with('success', 'Cập nhật thành công');
        } else {
            return redirect()->route('admin.benefit.index')->with('error', 'Cập nhật thất bại');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $benefit = DB::table('benefit')->where('id',$id);
        $benefit->delete($id);
        return redirect()->back()->with('success', 'Xóa thành công');
    }



}
