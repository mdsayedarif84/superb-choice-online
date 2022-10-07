<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\Order_detail;
use App\Models\Payment;
use App\Models\Shipping;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Session;

class CheckoutController extends Controller
{
    public function index(){
        return view('front-end.checkout.checkout');
    }
    protected function validateCheck($request){
        $this->validate($request, [
            'first_name'          => 'required',
            'last_name'          => 'required',
            'phone_number'          => 'required|min:11',
            'password'          => 'required',
            'address'          => 'required',
            'email'          => 'email|unique:customers,email',
        ]);
    }
    protected function customerSaveInfo($request){
        $customer                   =   new Customer();
        $customer->first_name       =   $request->first_name;
        $customer->last_name        =   $request->last_name;
        $customer->email            =   $request->email;
        $customer->password         =   bcrypt($request->password);
        $customer->phone_number     =   $request->phone_number;
        $customer->address          =   $request->address;
        $customer->save();
    }
    public function customerSignUP(Request $request){
        $this->validateCheck($request);
        $this->customerSaveInfo($request);  
        $customerId                 =   $customer->id;
        Session::put('customerId',$customerId);
        Session::put('customerName',$customer->first_name.' '.$customer->last_name);
        $data                       =   $customer->toArray();
        Mail::send('front-end.mails.confirmation-mails', $data, function ($message) use ($data){
            $message->to($data['email']);
            $message->subject('Confirmation mails');
        });
        return redirect('/checkout/shipping');
    }
    public function shippingForm(){
        $customer                   =   Customer::find(Session::get('customerId'));
        return view('front-end.checkout.shipping', ['customer'=>$customer]);
    }
    public function saveShippingInfo(Request $request){
        $shipping                   =   new Shipping();
        $shipping->full_name        =   $request->full_name;
        $shipping->email            =   $request->email;
        $shipping->phone_number     =   $request->phone_number;
        $shipping->address          =   $request->address;
        $shipping->save();
        Session::put('shippingId', $shipping->id);
        return redirect('/checkout/payment');
    }
    public function paymentForm(){
        return view('front-end.checkout.payment');
    }
    protected function newOrderInfo(Request $request){
        
    }
    public function newOrder(Request $request){
        $paymentType                = $request->payment_type;
        if ($paymentType            ==  'Cash'){
            $order = new Order();
            $order->customer_id     = Session::get('customerId');
            $order->shipping_id     = Session::get('shippingId');
            $order->order_total     = Session::get('orderTotal');
            $order->save();

            $payment                = new Payment();
            $payment->order_id      = $order->id;
            $payment->payment_type  = $paymentType;
            $payment->save();

            $cartProducts = Cart::content();
            foreach ($cartProducts as $cartProduct) {
                $orderDetail = new Order_detail();
                $orderDetail->order_id          = $order->id;
                $orderDetail->product_id        = $cartProduct->id;
                $orderDetail->product_name      = $cartProduct->name;
                $orderDetail->product_price     = $cartProduct->price;
                $orderDetail->product_quantity  = $cartProduct->qty;
                $orderDetail->save();   
        }
        Cart::destroy();
        return redirect('/complete/order');
        }else if($paymentType       == 'Paypal'){
        }else if ($paymentType      ==  'Bkash'){
        }
    }
    public function completeOrder() {
        return view('front-end.checkout.complete-order')->with('message','Your order is finally success!!');
    }
    //customer login check
    public function customerLoginCheck(Request $request){
        $customer    =    Customer::where('email', $request->email)->first();
        if (password_verify($request->password, $customer->password)) {
            //echo 'password is valid ';
            Session::put('customerId',$customer->id);
            Session::put('customerName',$customer->first_name.' '.$customer->last_name);
            return redirect('/checkout/shipping');
        } else {
            //echo 'password is invalid';
            return redirect('/checkout')->with('message', 'Your email or password is invalid');
        }
    }
    public function newCustomerLogin(){
        return view('front-end.customer.new-customer-login');
    }
    public function customerLogout(){
        Session::forget('customerId');
        Session::forget('customerName');
        return redirect('/');

    }
    public function ajaxEmailCheck($email){
        $customer=   Customer::where('email',$email)->first();
        if ($customer){
            echo 'This Email Already exist!';
        }else{
            echo '<span style="color:green;font-size:12px;">This email Available for you</span>';
        }
    }
}
