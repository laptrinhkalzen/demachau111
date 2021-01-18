<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Repositories\ProductRepository;
use Repositories\AttributeRepository;

class ProductController extends Controller {

    public function __construct(ProductRepository $productRepo, AttributeRepository $attributeRepo) {
        $this->productRepo = $productRepo;
        $this->attributeRepo = $attributeRepo;
    }

    public function addToCart(Request $request) {
        $id = $request->get('product_id');
        $quantity = $request->get('quantity');
        $option_number=$request->get('option_number');

        $product = $this->productRepo->find($id);
        if (!$product) {
            abort(404);
        }
        $count = 0;
        $total = 0;
        $cart = session()->get('cart');
        if (is_null($cart)) {
            $cart = [
                $id.'_'.$option_number => [
                    "product_id"=>$id,
                    "alias" =>$product->alias,
                    "title" => $product->title,
                    "quantity" => $quantity,
                    "price" => $product->sale_price == 0 ? $product->price : $product->sale_price,
                    "image" => $product->getImage(),
                    "url" => $product->alias,
                    "option_number"=>$option_number
                ]
            ];
            session()->put('cart', $cart);
             
            foreach (session('cart') as $val) {
                $count += $val['quantity'];
                $total += ($val['price'] * $val['quantity']);
            }
            return response()->json([
                       'success' => true, 'count' => $count, 'total' => number_format($total),'cart'=>$cart
            ]);
        }
        if (isset($cart[$id.'_'.$option_number]) &&  $cart[$id.'_'.$option_number]['option_number']==$option_number) {
            $cart[$id.'_'.$option_number]['quantity'] += $quantity;

            session()->put('cart', $cart);
            foreach (session('cart') as $val) {
                $count += $val['quantity'];
                $total += ($val['price'] * $val['quantity']);
            }
            return response()->json([
                       'success' => true, 'count' => $count, 'total' => number_format($total),'cart'=>$cart
            ]);
        } else {
            $cart[$id.'_'.$option_number] = [
                "product_id"=>$id,
                "alias" =>$product->alias,
                "title" => $product->title,
                "quantity" => $quantity,
                "price" => $product->sale_price == 0 ? $product->price : $product->sale_price,
                "image" => $product->getImage(),
                "url" => $product->alias,
                "option_number"=>$option_number
            ];
            session()->put('cart', $cart);
        }
        foreach (session('cart') as $val) {
            $count += $val['quantity'];
            $total += ($val['price'] * $val['quantity']);
        }
        return response()->json([
                    'success' => true, 'count' => $count, 'total' => number_format($total),'cart'=>$cart
        ]);
    }

    public function updateCart(Request $request) {
        $total = 0;
        $count = 0;
        if ($request->product_id && $request->quantity) {
            $cart = session()->get('cart');

            $cart[$request->product_id]["quantity"] = $request->quantity;

            session()->put('cart', $cart);

            foreach (session('cart') as $val) {
                $count += $val['quantity'];
                $total += ($val['price'] * $val['quantity']);
            }
            return response()->json([
                        'success' => true, 'count' => $count, 'total' => number_format($total)
            ]);
        }
    }

    public function deleteCart(Request $request) {
        $total = 0;
        $count = 0;
        $id_option=$request->id_option;
        if ($id_option) {
            $cart = session()->get('cart');
            if (isset($cart[$id_option])) {
                unset($cart[$id_option]);
                session()->put('cart', $cart);
            }
            foreach (session('cart') as $val) {
                $count += $val['quantity'];
                $total += ($val['price'] * $val['quantity']);
            }
            return response()->json([
                        'success' => true, 'count' => $count, 'total' => $total
            ]);
        }
    }

    public function getProductAttribute(Request $request) {
        session_start();
        ini_set('memory_limit', '2048M');
        $search = explode(',', $request->get('ids'));
        $product_ids = \DB::table('product_category')->where('category_id', $request->get('category_id')?:\App\Category::PRODUCT_SHOP_ID)->pluck('product_id');
        $attribute_arr = $this->attributeRepo->readAttributeByParent($module = 'product', $parent = 0, $type = 'select', $product_ids);
        $html = '';
        foreach ($attribute_arr as $attribute) {
            $html .= '
                <div class="filter_type">
                    <h6><b>' . $attribute->title . '</b></h6>
                    <ul class="list-attribute">';
            foreach ($attribute->children as $children) {
                if ($children->products->count() > 0) {
                    $html .= '
                        <li>
                            <label class="container_check">' . $children->title . '<small>' . $children->products()->whereIn('id', $product_ids)->count() . '</small>
                                <input type="checkbox" class="attribute_select" value="' . $children->id . '" ' . ((isset($search) && in_array($children->id, $search)) ? 'checked' : '') . '>
                                       <span class="checkmark"></span>
                            </label>
                        </li>';
                }
            }
            $html .= '</ul>
            </div>';
        }
       return response()->json(array('html' => $html));
    }
    public function getSaleProductAttribute(Request $request) {
        session_start();
        ini_set('memory_limit', '2048M');
        $search = explode(',', $request->get('ids'));
        $product_ids = \DB::table('product_category')->where('category_id', $request->get('category_id')?:\App\Category::PRODUCT_SHOP_ID)->pluck('product_id');
        $attribute_arr = $this->attributeRepo->readAttributeByParent($module = 'product', $parent = 0, $type = 'select', $product_ids);
        $html = '';
        foreach ($attribute_arr as $attribute) {
            $html .= '
                <div class="filter_type">
                    <h6><b>' . $attribute->title . '</b></h6>
                    <ul class="list-attribute">';
            foreach ($attribute->children as $children) {
                if ($children->products->count() > 0) {
                    $html .= '
                        <li>
                            <label class="container_check">' . $children->title . '<small>' . $children->products()->whereIn('id', $product_ids)->where('sale_price','>',0)->count() . '</small>
                                <input type="checkbox" class="attribute_select" value="' . $children->id . '" ' . ((isset($search) && in_array($children->id, $search)) ? 'checked' : '') . '>
                                       <span class="checkmark"></span>
                            </label>
                        </li>';
                }
            }
            $html .= '</ul>
            </div>';
        }
       return response()->json(array('html' => $html));
    }

}
