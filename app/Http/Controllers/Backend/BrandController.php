<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Repositories\BrandRepository;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use TIMESTAMP;
use DB;


class BrandController extends Controller {
    public function __construct(BrandRepository $brandRepo) {
        $this->brandRepo = $brandRepo;
      
    }

    public function index() {
        $brands = $this->brandRepo->all();
        return view('backend/brand/index', compact('brands'));
    }

   
    public function create() {
        // $members=DB::table('member')->orderBy('created_at', 'desc')->get();
        return view('backend/brand/create');
    }

   
    public function store(Request $request) {
        $input =request()->except(['_token']);
        $validator = \Validator::make($input, $this->brandRepo->validateCreate());
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $image = $request->file('image');
           if($image){
            $get_name_image = $image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$image->getClientOriginalExtension();
            $image->move('upload/config', $new_image);
            $input['image']=$new_image;
        }
        $brand=DB::table('brand')->insert($input);
        if ($brand) {
            return redirect()->route('admin.brand.index')->with('success', 'Tạo mới thành công');
        } else {
            return redirect()->route('admin.brand.index')->with('error', 'Tạo mới thất bại');
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
         $brand = $this->brandRepo->find($id);
        return view('backend/brand/update')->with('brand',$brand);
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
        $input = request()->except(['_token']);
        $validator = \Validator::make($input, $this->brandRepo->validateUpdate($id));
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
       
         $image = $request->file('image');
           if($image){
            $get_name_image = $image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$image->getClientOriginalExtension();
            $image->move('upload/config', $new_image);
            $input['image']=$new_image;
        }
        dd($image);
        $res=DB::table('brand')->where('id',$id)->update($input);

        if ($res) {
            return redirect()->route('admin.brand.index')->with('success', 'Cập nhật thành công');
        } else {
            return redirect()->route('admin.brand.index')->with('error', 'Cập nhật thất bại');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $brand = $this->brandRepo->find($id);
        $this->brandRepo->delete($id);
        return redirect()->back()->with('success', 'Xóa thành công');
    }



}
