<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ContactController extends Controller
{
    // public function index()
    // {
    //     $data = Contact::query()->latest('id')->paginate(5);
    //     return view('admin.contact.index', compact('data'));
    // }

    public function index()
    {
        $data = Contact::query()->latest('id')->paginate(5);
        return view('client.contact', compact('data'));
    }

    public function create()
    {
        return view('client.contact', compact('data'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'  => ['required'],
            'email' => ['required','email'],
            'phone' => 'nullable|string',
            'message'   => 'required|string',
        ]);

        Contact::query()->create($data);
        
        return redirect()
            ->route('contact.store')
            ->with('success', 'Gửi thành công');
    }
}
