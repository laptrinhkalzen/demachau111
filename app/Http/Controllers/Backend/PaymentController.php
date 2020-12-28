<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Repositories\PaymentMethodRepository;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use TIMESTAMP;
use DB;


class PaymentMethodController extends Controller {
    public function __construct(PaymentMethodRepository $paymentMethodRepo) {
        $this->paymentMethodRepo = $paymentMethodRepo;
      
    }

    public function index() {
        $payment_methods = $this->paymentMethodRepo->all();
        return view('backend/payment_method/index', compact('payment_methods'));
    }

   
    public function create() {
        // $members=DB::table('member')->orderBy('created_at', 'desc')->get();
        return view('backend/payment_method/create');
    }

   
    public function store(Request $request) {
        $input =request()->except(['_token']);
        $validator = \Validator::make($input, $this->paymentMethodRepo->validateCreate());
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
        $payment_method=DB::table('payment')->insert($input);
        if ($payment_method) {
            return redirect()->route('admin.payment_method.index')->with('success', 'Tạo mới thành công');
        } else {
            return redirect()->route('admin.payment_method.index')->with('error', 'Tạo mới thất bại');
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
         $payment_method = $this->paymentMethodRepo->find($id);
        return view('backend/payment_method/update')->with('payment_method',$payment_method);
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
        $validator = \Validator::make($input, $this->paymentMethodRepo->validateCreate());
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
        $res=DB::table('payment')->where('id',$id)->update($input);
        if ($res) {
            return redirect()->route('admin.payment_method.index')->with('success', 'Cập nhật thành công');
        } else {
            return redirect()->route('admin.payment_method.index')->with('error', 'Cập nhật thất bại');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $payment_method = $this->paymentMethodRepo->find($id);
        $this->paymentMethodRepo->delete($id);
        return redirect()->back()->with('success', 'Xóa thành công');
    }



}
