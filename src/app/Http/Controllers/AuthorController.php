<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Contact;
use App\Models\User;


class AuthorController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function register()
    {
        return view('register');
    }

    public function login()
    {
        return view('login');
    }

    public function confirm(Request $request)
    {
        $contact = $request->only(['gender', 'email', 'address', 'building', 'category_id', 'content']);
        $fullName = $request->only(['first_name', 'last_name']);
        $tel = $request->only(['first_part', 'second_part', 'third_part']);



        return view('confirm', compact('contact', 'fullName', 'tel'));
    }

    public function store(Request $request)
    {
        $contact = $request->only(['gender', 'email', 'address', 'building', 'category_id', 'content']);
        $fullName = $request->only(['first_name', 'last_name']);
        $tel = $request->only(['first_part', 'second_part', 'third_part']);

        return view('thanks');
    }





}
