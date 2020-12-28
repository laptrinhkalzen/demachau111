<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Repositories\SocialRepository;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use TIMESTAMP;
use DB;


class SocialController extends Controller {
    public function __construct(SocialRepository $socialRepo) {
        $this->socialRepo = $socialRepo;
      
    }

    public function index() {
        $socials = $this->socialRepo->all();
        return view('backend/social/index', compact('socials'));
    }

   
    public function create() {
        // $members=DB::table('member')->orderBy('created_at', 'desc')->get();
        return view('backend/social/create');
    }

   
    public function store(Request $request) {
        $input =request()->except(['_token']);
        $validator = \Validator::make($input, $this->socialRepo->validateCreate());
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
        $social=DB::table('social')->insert($input);
        if ($social) {
            return redirect()->route('admin.social.index')->with('success', 'Tạo mới thành công');
        } else {
            return redirect()->route('admin.social.index')->with('error', 'Tạo mới thất bại');
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
         $social = $this->socialRepo->find($id);
        return view('backend/social/update')->with('social',$social);
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
        $validator = \Validator::make($input, $this->socialRepo->validateUpdate($id));
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
        $res=DB::table('social')->where('id',$id)->update($input);
        if ($res) {
            return redirect()->route('admin.social.index')->with('success', 'Cập nhật thành công');
        } else {
            return redirect()->route('admin.social.index')->with('error', 'Cập nhật thất bại');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $social = $this->socialRepo->find($id);
        $this->socialRepo->delete($id);
        return redirect()->back()->with('success', 'Xóa thành công');
    }



}
