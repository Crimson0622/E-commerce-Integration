<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    //ADMIN
    public function adminsDashboard()
    {
        return view('admins.dashboard');
    }

    public function adminsOrders()
    {
        return view('admins.orders');
    }

    public function adminsInventory()
    {
        return view('admins.inventory');
    }
   
    public function adminsRealtime()
    {
        return view('admins.realtime');
    }

    //CUSTOMER
    public function home()
    {
        return view('home');
    }

    public function cart()
    {
        return view('cart');
    }

    public function checkout()
    {
        return view('checkout');
    }

    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }

    public function signup()
    {
        return view('signup');
    }

    public function login()
    {
        return view('login');
    }

    public function wishlist()
    {
        return view('wishlist');
    }

    public function profile()
    {
        return view('profile');
    }

    public function shop()
    {
        return view('shop');
    }

    public function products()
    {
        return view('products');
    }

    public function customerOrders()
    {
        return view('customer-orders');
    }

}
