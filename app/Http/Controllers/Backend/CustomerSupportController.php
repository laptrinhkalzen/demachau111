<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Repositories\CustomerSupportRepository;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use TIMESTAMP;
use DB;


class CustomerSupportController extends Controller {
    public function __construct(CustomerSupportRepository $customerSupportRepo) {
        $this->customerSupportRepo = $customerSupportRepo;
      
    }

    public function index() {
        $customer_support = $this->customerSupportRepo->all();
        return view('backend/customer_support/index', compact('customer_support'));
    }

   
    public function create() {
        // $members=DB::table('member')->orderBy('created_at', 'desc')->get();
        return view('backend/customer_support/create');
    }

   
    public function store(Request $request) {
        $input =request()->except(['_token']);
        $validator = \Validator::make($input, $this->customerSupportRepo->validateCreate());
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
        $customer_support=DB::table('customer_support')->insert($input);
        if ($customer_support) {
            return redirect()->route('admin.customer_support.index')->with('success', 'Tạo mới thành công');
        } else {
            return redirect()->route('admin.customer_support.index')->with('error', 'Tạo mới thất bại');
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
         $customer_support = $this->customerSupportRepo->find($id);
        return view('backend/customer_support/update')->with('customer_support',$customer_support);
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
        $validator = \Validator::make($input, $this->customerSupportRepo->validateUpdate($id));
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
        $res=DB::table('customer_support')->where('id',$id)->update($input);
        if ($res) {
            return redirect()->route('admin.customer_support.index')->with('success', 'Cập nhật thành công');
        } else {
            return redirect()->route('admin.customer_support.index')->with('error', 'Cập nhật thất bại');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $customer_support = $this->customerSupportRepo->find($id);
        $this->customerSupportRepo->delete($id);
        return redirect()->back()->with('success', 'Xóa thành công');
    }



}
