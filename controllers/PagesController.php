<?php
namespace App\Controllers;


use App\Core\App;

class PagesController {
    public function items()
    {
        $items = App::get('database')->getAll('items'); //ovaj treba da ne bude descenging. Orders treba

        return view('items', compact('items'));
    }

    public function orders()
    {
//        check_auth();
        $orders = App::get('database')->getAllDesc('orders');
        return view('orders', compact('orders'));
    }

    public function aboutCulture()
    {
        check_auth();
        return view('about-culture');
    }

    public function contact()
    {

        return view('contact');
    }

    public function contactFormSubmit()
    {
        App::get('database')->insert('messages', [
            'subject' => $_POST['subject'],
            'message' => $_POST['message']
        ]);

        return redirect('/');

    }

}