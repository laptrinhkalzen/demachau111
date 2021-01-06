<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Repositories\CompanyInforRepository;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use TIMESTAMP;
use DB;


class CompanyInforController extends Controller {
    public function __construct(CompanyInforRepository $companyInforRepo) {
        $this->companyInforRepo = $companyInforRepo;
      
    }

    public function index() {
        $company_infor = $this->companyInforRepo->all();
        return view('backend/company_infor/index', compact('company_infor'));
    }

   
    public function create() {
        // $members=DB::table('member')->orderBy('created_at', 'desc')->get();
        return view('backend/company_infor/create');
    }

   
    public function store(Request $request) {
        $input =request()->except(['_token']);
        $validator = \Validator::make($input, $this->companyInforRepo->validateCreate());
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
        $company_infor=DB::table('company_infor')->insert($input);
        if ($company_infor) {
            return redirect()->route('admin.company_infor.index')->with('success', 'Tạo mới thành công');
        } else {
            return redirect()->route('admin.company_infor.index')->with('error', 'Tạo mới thất bại');
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
         $company_infor = $this->companyInforRepo->find($id);
        return view('backend/company_infor/update')->with('company_infor',$company_infor);
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
        $validator = \Validator::make($input, $this->companyInforRepo->validateUpdate($id));
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
        $res=DB::table('company_infor')->where('id',$id)->update($input);
        if ($res) {
            return redirect()->route('admin.company_infor.index')->with('success', 'Cập nhật thành công');
        } else {
            return redirect()->route('admin.company_infor.index')->with('error', 'Cập nhật thất bại');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $company_infor = $this->companyInforRepo->find($id);
        $this->companyInforRepo->delete($id);
        return redirect()->back()->with('success', 'Xóa thành công');
    }



}
