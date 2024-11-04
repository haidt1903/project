<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{
    public function index()
    {
        $data = Contact::query()->latest('id')->paginate(5);
        return view('admin.contacts.index', compact('data'));
    }
    public function delete(Contact $contact)  {
        if ($contact->image) {
            Storage::delete($contact->image);
        }
        $contact->delete();
        return redirect()->route('admin.contact.index')->with('message','Xóa thành công');

    }
}