<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\SubscriberRepository;
use Repositories\PostHistoryRepository;
use App\Repositories\ProductRepository;
use Repositories\NewsRepository;
use Repositories\GalleryRepository;
use Repositories\MarketingRepository;
use Repositories\ConstructionRepository;
use Repositories\TagRepository;
use App\Repositories\ContactRepository;
use App\Helpers\StringHelper;
use Illuminate\Support\Facades\Auth;
use Repositories\ReviewPersonRepository;
use App\Repositories\MemberRepository;
use Mail;
use Illuminate\Support\Facades\File; 
use DB;
use Carbon\Carbon;

class FrontendController extends Controller {

    //
    public function __construct(MemberRepository $memberRepo,ConstructionRepository $constructionRepo, MarketingRepository $marketingRepo, SubscriberRepository $subscriberRepo, PostHistoryRepository $postHistoryRepo, ProductRepository $productRepo, NewsRepository $newsRepo, GalleryRepository $galleryRepo, TagRepository $tagRepo, ContactRepository $contactRepo, ReviewPersonRepository $reviewPersonRepo) {
        $this->subscriberRepo = $subscriberRepo;
        $this->postHistoryRepo = $postHistoryRepo;
        $this->productRepo = $productRepo;
        $this->newsRepo = $newsRepo;
        $this->galleryRepo = $galleryRepo;
        $this->marketingRepo = $marketingRepo;
        $this->constructionRepo = $constructionRepo;
        $this->contactRepo = $contactRepo;
        $this->tagRepo = $tagRepo;
        $this->reviewPersonRepo = $reviewPersonRepo;
        $this->memberRepo = $memberRepo;
    }

      public function auto_complete(Request $request) {
        $data=$request->all();
        if($data['query']){
            $product=DB::table('product')->where('status',1)->where('alias','LIKE','%'.$data['query'].'%')->orWhere('meta_keywords','LIKE','%'.$data['query'].'%')->get();
             $output = '';
            foreach($product as $val){
                $output .= '<li style="color:black; "  class="list-group-item" id="li_1"><a href="#" style="color:black;" value="{{$val->title}}">'.$val->title.'</a></li>';
            }
            $output .= '';
            return $output;
        }
      
    }

     public function ipn_url(Request $request) {
            $vnp_HashSecret = "EBAHADUGCOEWYXCMYZRMTMLSHGKNRPBN";
            $inputData = array();
            $returnData = array();
            $data = $request->query();
         
        
            foreach ($data as $key => $value) {
                if (substr($key, 0, 4) == "vnp_") {
                    $inputData[$key] = $value;
                }
            }      
            //dd($inputData);  

            $vnp_SecureHash = $inputData['vnp_SecureHash'];
            unset($inputData['vnp_SecureHashType']);
            unset($inputData['vnp_SecureHash']);
           // ksort($inputData);
            $i = 0;
            $hashData = "";
            foreach ($inputData as $key => $value) {
                if ($i == 1) {
                    $hashData = $hashData . '&' . $key . "=" . $value;
                } else {
                    $hashData = $hashData . $key . "=" . $value;
                    $i = 1;
                }
            }
            //dd($hashData);
            $vnpTranId = $inputData['vnp_TransactionNo']; //Mã giao dịch tại VNPAY
            $vnp_BankCode = $inputData['vnp_BankCode']; //Ngân hàng thanh toán
            $secureHash = hash('sha256', $vnp_HashSecret . $hashData);
            $Status = 0;
            $status = 200;
            $orderId = $inputData['vnp_TxnRef'];
            try {
            //Check Orderid    
            //Kiểm tra checksum của dữ liệu
 
                //Lấy thông tin đơn hàng lưu trong Database và kiểm tra trạng thái của đơn hàng, mã đơn hàng là: $orderId            
                //Việc kiểm tra trạng thái của đơn hàng giúp hệ thống không xử lý trùng lặp, xử lý nhiều lần một giao dịch
                //Giả sử: $order = mysqli_fetch_assoc($result);   
                $order = DB::table('order')->where('id',$orderId)->first();
                if ($order != NULL) {
                    if ($order->status == 0) {
                        if ($inputData['vnp_ResponseCode'] == '00') {
                            $Status = 1;
                        } else {
                            $Status = 2;
                        }
                        //Cài đặt Code cập nhật kết quả thanh toán, tình trạng đơn hàng vào DB
                        //
                        //
                        //
                        //Trả kết quả về cho VNPAY: Website TMĐT ghi nhận yêu cầu thành công                
                        $returnData['RspCode'] = '00';
                        $returnData['Message'] = 'Confirm Success';
                        DB::table('order')->where('id',$orderId)->update(['status'=>2]);
                    } else {
                        $returnData['RspCode'] = '02';
                        $returnData['Message'] = 'Order already confirmed';
                    }
                } else {
                    $returnData['RspCode'] = '01';
                    $returnData['Message'] = 'Order not found';
                }
            
        } catch (Exception $e) {
            $returnData['RspCode'] = '99';
            $returnData['Message'] = 'Unknow error';
        }
        //Trả lại VNPAY theo định dạng JSON
        return response()->json($returnData, $status, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'], JSON_UNESCAPED_UNICODE);
      }

      public function tra_gop(Request $request) {
          $month=$request->month;
          $bank_name=$request->bank_name;
          $result= DB::table('phi_tra_gop')->where('bank_name',$bank_name)->where('month',$month)->first();
          //dd($result);
           return response()->json(['result' => $result]);
      }
     public function apply_coupon(Request $request) {
       $coupon_code=$request->coupon_code;
            $query=DB::table('coupon')->where('coupon_code',$coupon_code)->first();

            
            if ($query){
                if($query->coupon_number>0 && $query->coupon_end>Carbon::now('Asia/Ho_Chi_Minh')){
          
                return response()->json(array('statusCode' => 200,"statusCode"=>200,"value"=>$query->coupon_value,'condition'=>$query->coupon_condition,'type_coupon'=>$query->coupon_type));
                }
                else{
                    return response()->json(array("statusCode"=>201));
                }
            }
            else{
                  return response()->json(array("statusCode"=>201));
               
            }
    }

    public function select_address(Request $request){
        $data = $request->all();
        if($data['action']){
            $output = '';
            if($data['action']=="city"){
                $select_province = DB::table('district')->where('city_id',$data['ma_id'])->orderby('id_qh','ASC')->get();
                    $output.='<option>Chọn quận huyện</option>';
                foreach($select_province as $key => $province){
                    $output.='<option value="'.$province->id_qh.'">'.$province->name_qh.'</option>';
                }

            }
            echo $output;
        }
        
    }
    public function check_option(Request $request){
        $test=[];
        $id=DB::table('product')->where('alias',$request->alias)->first();
        $result=DB::table('product_option')->where('product_id',$id->id)->get();
        
        if (count($result)>0) {
        $search = $request->search;
        foreach($search as $search1){
            $option_number=$result->where('value',$search1)->pluck('option_number');
            foreach ($option_number as  $value) {
                $test[]+= $value;
            }
        }
        $max=1;
        $count=1;
        $number=$test[0];
        foreach ($test as $key => $value) {
            foreach ($test as $key1 => $value1) {
               if($key1>$key){
                  if($value==$value1){
                     
                     $count++;
                     
                  }
            }
        } 
               if($count>$max){
                    $max=$count;
                    $number=$value;
                }
                $count=1;
        }
       
        $result_final=DB::table('option_detail')->where('product_id',$id->id)->where('option_id',$number)->first();
        $product=DB::table('flashsale')->join('flash_sale_product','flash_sale_product.flash_sale_id','=','flashsale.id')->where('flash_sale_product.product_id',$result_final->product_id)->where('status',1)->where('flashsale.start','<', Carbon::now('Asia/Ho_Chi_Minh'))->where('flashsale.end','>',Carbon::now('Asia/Ho_Chi_Minh'))->first();
        if($product){
            if($product->discount_type==0){
                $result_price=$result_final->option_price-($result_final->option_price/100*$product->discount_value);
            }
            else if ($product->discount_type==1) {
                $result_price=$result_final->option_price-$product->discount_value;
            }
            else if ($product->discount_type==2) {
                $result_price=$product->discount_value;
            }

            else{
                $result_price=0;
            }
        }
        else{
            $result_price=0;
        }
        return response()->json(['result' => $result_final,'option_number'=>$number,'result_price'=>$result_price]);
        }
        else{
        $result_final=DB::table('product')->where('id',$id->id)->first();
        $result_final->option_price=$result_final->price;
        $product=DB::table('flashsale')->join('flash_sale_product','flash_sale_product.flash_sale_id','=','flashsale.id')->where('flash_sale_product.product_id',$result_final->id)->where('status',1)->where('flashsale.start','<', Carbon::now('Asia/Ho_Chi_Minh'))->where('flashsale.end','>',Carbon::now('Asia/Ho_Chi_Minh'))->first();
        if($product){
                if($product->discount_type==0){
                    $result_price=$result_final->price-($result_final->price/100*$product->discount_value);
                }
                else if ($product->discount_type==1) {
                    $result_price=$result_final->price-$product->discount_value;
                }
                else if ($product->discount_type==2) {
                    $result_price=$product->discount_value;
                }

                else{
                    $result_price=0;
                }
            }
        else{
                $result_price=0;
            }

            return response()->json(['result' => $result_final,'option_number'=>"",'result_price'=>$result_price]);
                }
    }

    public function registerMarketing(Request $request) {
        $input = $request->all();
        $validator = \Validator::make($input, $this->marketingRepo->validateCreate());
        if ($validator->fails()) {
            return response()->json(['success' => false]);
        }
        $count = $this->marketingRepo->countUser();
        $input['ref'] = str_random(8) . "" . $count;
        $password = $request->get('password');
        $input['password'] = bcrypt($password);
        $input['activation'] = str_random(15);
        $input['alias'] = StringHelper::getAlias($input['username']);
        $this->marketingRepo->create($input);
        $email = $input['email'];
        $name = $input['full_name'];
        Mail::send('mail.index', array('link' => $request->root() . '/marketing/activation/' . $input['activation']), function($message) use ($email, $name) {
            $message->to($email, $name)->subject('Xác thực tài khoản tiếp thị liên kết Alagreen');
        });
        return response()->json(['success' => true]);
    }

    public function registerConstruction(Request $request) {
        $input = $request->all();
        $validator = \Validator::make($input, $this->constructionRepo->validateCreate());
        if ($validator->fails()) {
            return response()->json(['success' => false]);
        }
        $password = $request->get('password');
        $input['password'] = bcrypt($password);
        $input['alias'] = StringHelper::getAlias($input['username']);
        $input['activation'] = str_random(15);
        $this->constructionRepo->create($input);
        $email = $input['email'];
        $name = $input['full_name'];
        Mail::send('mail.index', array('link' => $request->root() . '/construction/activation/' . $input['activation']), function($message) use ($email, $name) {
            $message->to($email, $name)->subject('Xác thực tài khoản thi công Alagreen');
            $message->from('alagreen123@gmail.com','Alagreen');
        });
        return response()->json(['success' => true]);
    }
    public function registerMember(Request $request) {
        $input = $request->all();
        $validator = \Validator::make($input, $this->memberRepo->validateCreate());
        if ($validator->fails()) {
            return response()->json(['success' => false]);
        }
        $password = $request->get('password');
        $input['password'] = bcrypt($password);
        $input['activation'] = str_random(15);
        $this->memberRepo->create($input);
        $email = $input['email'];
        $name = $input['full_name'];
        Mail::send('mail.index', array('link' => $request->root() . '/member/activation/' . $input['activation']), function($message) use ($email, $name) {
            $message->to($email, $name)->subject('Xác thực tài khoản khách hàng Alagreen');
        });
        return response()->json(['success' => true]);
    }

    public function addSubscriber(Request $request) {
        $input = $request->all();
        $this->subscriberRepo->create($input);
        return response()->json(['success' => true]);
    }

    public function checkUserMarketing(Request $request) {
        $check = $this->marketingRepo->checkUser($request->get('username'));
        if ($check) {
            return response()->json(['success' => false]);
        } else {
            return response()->json(['success' => true]);
        }
    }

    public function getProducts(Request $request) {
        $data = $this->productRepo->getProductByKeyword($request->get('keyword'));
        return response()->json($data);
    }

    public function checkUserConstruction(Request $request) {
        $check = $this->constructionRepo->checkUser($request->get('username'));
        if ($check) {
            return response()->json(['success' => false]);
        } else {
            return response()->json(['success' => true]);
        }
    }

    public function getRecentPost(Request $request) {
       // $data = $this->postHistoryRepo->readRecentPost($request->get('page'));
        $html = '';

       // foreach ($data as $key => $val) {
//            switch ($val['module']) {
//                case 'product':
//                    $record = $this->productRepo->find($val['item_id']);
//                    $data[$key]['html'] = '
//                        <div class="strip grid">
//                            <figure>
//                                <a href="' . $record->url() . '"><img src="' . $record->getImage() . '" class="img-fluid" alt="' . $record->title . '">
//                                    <div class="read_more"><span>Xem thêm</span></div>
//                                </a>' . ($val->sale_price > 0 ? '<small>SALE</small>' : '') . '
//                            </figure>
//                            <div class="wrapper">
//                                <h3 class="product-title"><a href="' . $record->url() . '">' . $record->title . '</a></h3>
//                                ' . ($record->sale_price ?
//                            '<p>Giá: <span class="price">' . $record->getSalePrice() . '</span> <span class="original-price">' . $record->getPrice() . '</span></p>' :
//                            '<p>Giá: <span class="price">' . $record->getPrice() . '</span> </p>') . '
//                            </div>
//                        </div>';
//                    break;
//                case 'gallery':
                    $gallerys = $this->galleryRepo->readRecentGalery($request->get('page'));
                    if($gallerys[0]->project_id > 0){
                        if($gallerys[0]->construction){
                            $avatar = $gallerys[0]->construction->avatar;
                            $full_name = $gallerys[0]->construction->full_name;
                        }else{
                            $avatar='';
                            $full_name='';
                        }
                    }else{
                        if($gallerys[0]->user){
                            $avatar = $gallerys[0]->user->avatar;
                            $full_name = $gallerys[0]->user->full_name;
                        }else{
                            $avatar='';
                            $full_name='';
                        }
                    }
                    $html .= '
                        <div class="col-md-12 full-image">
                            <article class="blog">
                                <figure>
                                    <a href="' . $gallerys[0]->url() . '"><img src="' . $gallerys[0]->getImage() . '" alt="' . $gallerys[0]->title . '">
                                        <div class="preview"><span>Xem thêm</span></div>
                                    </a>
                                </figure>
                                <div class="post_info">
                                    <h3><a href="' . $gallerys[0]->url() . '">' . $gallerys[0]->title . '</a></h3>
                                    <ul>
                                        <li>
                                            <div class="thumb"><img src="' . $avatar . '" alt="' . $full_name . '"></div> ' . $full_name . '
                                        </li>
                                        <li><i class="ti-eye"></i>'.$gallerys[0]->view_count.'</li>
                                    </ul>
                                </div>
                            </article>
                        </div>';
//                    break;
                    /*
                      case 'news':
                      $news = $this->newsRepo->find($val['item_id']);
                      $data[$key]['html'] = '
                      <article class="blog">
                      <figure>
                      <a href="' . $news->url() . '"><img src="' . $news->getImage() . '" alt="' . $news->title . '">
                      <div class="preview"><span>Xem thêm</span></div>
                      </a>
                      </figure>
                      <div class="post_info">
                      <h3><a href="' . $news->url() . '">' . $news->title . '</a></h3>
                      <ul>
                      <li>
                      <div class="thumb"><img src="' . $news->createdBy->avatar . '" alt="' . $news->createdBy->full_name . '"></div> ' . $news->createdBy->full_name . '
                      </li>
                      <li><i class="ti-eye"></i>' . $news->view_count . '</li>
                      </ul>
                      </div>
                      </article>'; */
//                    break;
//            }
       //}
                    
//        foreach ($data as $key => $val) {
//            if ($val['module'] != 'news') {
//                if ($key == 0) {
//                    $html .= '<div class="col-md-12 full-image">' . $data[$key]['html'] . '</div>';
//                } else {
//                    $html .= '<div class="col-md-4">' . $data[$key]['html'] . '</div>';
//                }
//            }
//        }
        $htmls=[];
        $count = 1;
        foreach($gallerys as $key=>$val){
            if($key > 0){
                if($gallerys[$key]->project_id > 0){
                        if($gallerys[$key]->construction){
                            $avatar = $gallerys[$key]->construction->avatar;
                            $full_name = $gallerys[$key]->construction->full_name;
                        }else{
                            $avatar='';
                            $full_name='';
                        }
                    }else{
                        if($gallerys[$key]->user){
                            $avatar = $gallerys[$key]->user->avatar;
                            $full_name = $gallerys[$key]->user->full_name;
                        }else{
                            $avatar='';
                            $full_name='';
                        }
                }
                $htmls[$count] = '
                    <div class="col-md-4">
                        <article class="blog">
                            <figure>
                                <a href="' . $gallerys[$key]->url() . '"><img src="' . $gallerys[$key]->getImage() . '" alt="' . $gallerys[$key]->title . '">
                                    <div class="preview"><span>Xem thêm</span></div>
                                </a>
                            </figure>
                            <div class="post_info">
                                <h3><a href="' . $gallerys[$key]->url() . '">' . $gallerys[$key]->title . '</a></h3>
                                <ul>
                                    <li>
                                        <div class="thumb"><img src="' . $avatar . '" alt="' . $full_name . '"></div> ' . $full_name . '
                                    </li>
                                    <li><i class="ti-eye"></i>'.$gallerys[$key]->view_count.'</li>
                                </ul>
                            </div>
                        </article>
                    </div>';
                $count ++;
            }
        }
        $products = $this->productRepo->readRecentProduct($request->get('page'));
        foreach($products as $key=>$product){
            if($product->createdBy){
                $avatar = $product->createdBy->avatar;
                $full_name = $product->createdBy->full_name;
            }else{
                $avatar='';
                $full_name='';
            }
        $htmls[$count]= '
            <div class="col-md-4">
                <article class="blog">
                    <figure>
                        <a href="' . $product->url() . '"><img src="' . $product->getImage() . '" alt="' . $product->title . '">
                            <div class="preview"><span>Xem thêm</span></div>
                        </a>
                    </figure>
                    <div class="post_info">
                        <h3><a href="' . $product->url() . '">' . $product->title . '</a></h3>
                        <ul>
                            <li>
                                <div class="thumb"><img src="' .$avatar. '" alt="' . $full_name . '"></div> ' . $full_name . '
                            </li>
                            <li><i class="ti-eye"></i>'.$product->view_count.'</li>
                        </ul>
                    </div>
                </article>
            </div>';
           $count++;
        }
        $htmls[] = shuffle($htmls);
        foreach($htmls as $key=>$val){
            if($key < 9){
                $html .=$val;
            }
        }
        return response()->json(array('html' => $html));
    }

    public function getRecentPostMobile(Request $request) {
        $gallerys = $this->galleryRepo->readRecentGalery($request->get('page'));
        $html = '';
        $htmls=[];
        $count = 1;
        foreach($gallerys as $key=>$val){
            $htmls[$count] = '
                <div class="row bottom-15">
                        <article class="recent-post">
                            <figure>
                                <a href="' . $val->url() . '">
                                    <img src="' . $val->getImage() . '" alt="' . $val->title . '" class="img-cover">
                                </a>
                            </figure>
                            <div class="post_info">
                                <h2 class="post-title text-left"><a href="' . $val->url() . '">' . $val->title . '</a></h2>
                            </div>
                        </article>
                    </div>';
            $count ++;
        }
        $products = $this->productRepo->readRecentProduct($request->get('page'));
        foreach($products as $key=>$product){
            if($product->createdBy->avatar){
                $avatar = $product->createdBy->avatar;
            }else{
                $avatar='';
            }
        $htmls[$count]= '
            <div class="row bottom-15">
                <article class="recent-post">
                    <figure>
                        <a href="' . $product->url() . '">
                            <img src="' . $product->getImage() . '" alt="' . $product->title . '">
                        </a>
                    </figure>
                    <div class="post_info">
                        <h2 class="post-title text-left"><a href="' . $product->url() . '">' . $product->title . '</a></h2>
                        <div class="post-price"><b>Giá:</b> <span class="price">' . ($product->price ? $product->getPrice() : 'Liên hệ') . '</span></div>
                    </div>
                </article>
            </div>';
           $count++;
        }
        $htmls[] = shuffle($htmls);
        foreach($htmls as $key=>$val){
            if($key < 10){
                $html .=$val;
            }
        }
        return response()->json(array('html' => $html));
    }

    public function loginMarketing(Request $request) {
        $input = [
            'username' => $request->get('username'),
            'password' => $request->get('password'),
            'status' => '1'
        ];
        if (Auth::guard('marketing')->attempt($input)) {
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }

    public function loginConstruction(Request $request) {
        $input = [
            'username' => $request->get('username'),
            'password' => $request->get('password'),
             'status' => '1'
                
        ];
        if (Auth::guard('construction')->attempt($input)) {
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }
    public function loginMember(Request $request) {
        $input = [
            'username' => $request->get('username'),
            'password' => $request->get('password'),
            'status' => '1'
        ];
        if (Auth::guard('member')->attempt($input)) {
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }

    public function getProductsByTag(Request $request) {
        $tag_title = $request->get('tag_title');
        $data = $this->productRepo->getProductsByTag($tag_title);
        foreach ($data as $key => $val) {
            $data[$key]->url = route('product.detail', ['alias' => $val->alias]);
            $data[$key]->image = explode(',', $val['images'])[0];
        }
        return response()->json(array('success' => true, 'records' => $data));
    }

    public function getTags(Request $request) {
        $gallery_id = $request->get('gallery_id');
        $data = $this->tagRepo->getTagsByGalleryId($gallery_id);
        return response()->json(array('success' => true, 'records' => $data));
    }

    public function sendContact(Request $request) {
        $input = $request->all();
        $input['is_read'] = 0;
        $this->contactRepo->create($input);
        return response()->json(array('success' => true));
    }

    public function checkUser(Request $request) {
        $userData = $request->all();
        if (!empty($userData)) {
            $userData['full_name'] = $userData['name'];
            $userData['facebook_id'] = $userData['id'];
            $user = \DB::table('review_person')->where('facebook_id', $userData['id'])->first();
            if (!$user) {
                $user = $this->reviewPersonRepo->create($userData);
            }
            session_start();
            session(['_review_person' => $user]);
        }
        return response()->json(array('success' => true, 'user' => $user));
    }
    public function upload(Request $request){
        $targetDir = "/upload/images2/";
        $allowTypes = array('jpg','png','jpeg','gif', 'PNG', 'GIF', 'JPG', 'pdf', 'docx', 'xslx');
        $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = '';
        foreach($_FILES['file']['name'] as $key=>$val){
            $fileName = basename($val);
            if(strlen($fileName)!=0){
                $fileType = pathinfo($fileName);
                $fileName = time().'_'.$fileName;
                if(in_array($fileType['extension'], $allowTypes)){
                    // Upload file to server
                    move_uploaded_file($_FILES['file']['tmp_name'][$key],'upload/images2/'.$fileName);
                }elseif(in_array($fileType['extension'], $allowTypes)){
                    move_uploaded_file($_FILES['file']['tmp_name'][$key],'upload/images2/'.$fileName);
                }
                $targetFilePath = $targetDir . $fileName;
                $images[] = $targetFilePath;
                $name[] = $fileName;
            }
        }
        return response()->json(array('success' => true, 'image' => $images,'name'=>$name));
    }
    public function uploadImage(Request $request){
        $targetDir = "/upload/images2/";
        $allowTypes = array('jpg','png','jpeg','gif', 'PNG', 'GIF', 'JPG', 'pdf', 'docx', 'xslx');
        $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = '';
        $fileName = basename($_FILES['file']['name']);
        if(strlen($fileName)!=0){
            $fileName = time().'_'.$fileName;
            $targetFilePath = $targetDir . $fileName;
            // Check whether file type is valid
            $fileType = pathinfo($targetFilePath);
            if(in_array($fileType['extension'], $allowTypes)){                   
                // Upload file to server
                move_uploaded_file($_FILES['file']['tmp_name'],'upload/images2/'.$fileName);
            }else{
                return response()->json(array('success' => false));
            }
            $images=$targetFilePath;
        }
        return response()->json(array('success' => true, 'image' => $images,'name'=>$fileName));
    }
    public function delete_image(Request $request){
         File::delete('..'.$request->get('link'));
    }

    public function get_email(Request $request){
        $data = array();
        $data['email'] = $request->email;

        $dem = 0;
        $email_receive=DB::table('email_receive')->get();
        foreach ($email_receive as $key => $value) {
            if($value->email == $request->email ){
                $dem++;
            }
        }
        if($dem==0){
        $email = DB::table('email_receive')->insert($data);
    }
  }
}
