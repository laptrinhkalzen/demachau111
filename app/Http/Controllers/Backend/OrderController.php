<?php

namespace App\Http\Controllers\Backend;

use App\Repositories\OrderRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class OrderController extends Controller
{
    public function __construct(OrderRepository $orderRepo) {
        $this->orderRepo = $orderRepo;
    }
    public function index()
    {
        $records = $this->orderRepo->all();
        return view('backend/order/index', compact('records'));
    }
    public function show($id)
    {
        $record = $this->orderRepo->find($id);
        $order_detail=DB::table('order_detail')->where('id',$id)->get();
        return view('backend/order/detail', compact('record','order_detail'));
    }

    public function destroy($id)
    {
        $this->orderRepo->delete($id);
        return redirect()->back()->with('success','Xóa thành công');
    }
}
