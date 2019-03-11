<?php

namespace App\Http\Controllers\Admin;

use App\ContactUs;
use App\Http\Controllers\Controller;
use Bcgen\LaravelHelper\Controllers\Traits\ResourceTrait;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    use ResourceTrait;

    public function store(Request $request)
    {
        ContactUs::create($this->validateRequest());
        return back()->withInput()->with('message', 'success');
    }

    protected function validateRequest()
    {
        return request()->validate([
            'name'         => '',
            'main_content' => '',
            'email'        => '',
            'phone'        => '',
        ]);
    }
}
