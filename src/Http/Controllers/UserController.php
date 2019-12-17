<?php

namespace Demo\Web\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Demo\Web\Models\Contact;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('demo::demo');
    }

    public function store(Request $request)
    {

        Contact::create($request->all());


        return redirect()->back()->with(['success' => 'Tạo liên hệ thành công']);


    }
}
