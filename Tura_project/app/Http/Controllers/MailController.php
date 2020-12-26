<?php

namespace App\Http\Controllers;

use App\Mail\PostApprovedMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function create_mail()
    {
        return view('mail.create_mail');
    }

    public function send(Request $request)
    {
        $data = [
            "text" => 'your order is approved'
        ];

        Mail::to(request('mail'))->send(new PostApprovedMail($data));

    }
}
