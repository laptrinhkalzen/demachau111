<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use TIMESTAMP;
use DB;


class BankController extends Controller {
    

    public function index() {
        $bank = DB::table('bank')->get();
        return view('backend/bank/index', compact('bank'));
    }

   
    public function create() {
        // $members=DB::table('member')->orderBy('created_at', 'desc')->get();
        return view('backend/bank/create');
    }

   
    public function store(Request $request) {
        $data = array();
        $data['title'] = $request->title;
        $data['images'] = $request->images;
        $data['content'] = $request->content;
        $data['number'] = $request->number;
        $data['host_name'] = $request->host_name;
        $data['branch'] = $request->branch;
        $data['order'] = $request->order;
        $data['created_at'] = Carbon::now('Asia/Ho_Chi_Minh');
        $image = $request->file('images');
           if($image){
            $get_name_image = $image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$image->getClientOriginalExtension();
            $image->move('upload/config', $new_image);
            $data['images']=$new_image;
        }
       $input = DB::table('bank')->insert($data);
             if ($input) {
            return redirect()->route('admin.bank.index')->with('success', 'Cập nhật thành công');
        } else {
            return redirect()->route('admin.bank.index')->with('error', 'Cập nhật thất bại');
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
         $bank = DB::table('bank')->where('id',$id)->first();
        return view('backend/bank/update')->with('bank',$bank);
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
        $data['title'] = $request->title;
        $data['images'] = $request->images;
        $data['content'] = $request->content;
        $data['number'] = $request->number;
        $data['host_name'] = $request->host_name;
        $data['branch'] = $request->branch;
        $data['order'] = $request->order;
        $data['created_at'] = Carbon::now('Asia/Ho_Chi_Minh');
        $image = $request->file('images');
           if($image){
            $get_name_image = $image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$image->getClientOriginalExtension();
            $image->move('upload/config', $new_image);
            $data['images']=$new_image;
        }
       $input = DB::table('bank')->where('id',$id)->update($data);
             if ($input) {
            return redirect()->route('admin.bank.index')->with('success', 'Cập nhật thành công');
        } else {
            return redirect()->route('admin.bank.index')->with('error', 'Cập nhật thất bại');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $bank = DB::table('bank')->where('id',$id);
        $bank->delete($id);
        return redirect()->back()->with('success', 'Xóa thành công');
    }



}
