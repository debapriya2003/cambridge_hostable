<?php

namespace App\Http\Controllers\Dashboard\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::latest()->get();
        return view('dashboard.admins.pages.contacts.index', compact('contacts'));
    }

    public function destroy(Contact $contact)
    {
        try {
            if ($contact->delete()) {
                return redirect()->back()->with('success-message', 'Contact Deleted successfully');
            }
        } catch (\Exception $e) {
            Log::error("DELETE_CONTACT_EXCEPTION | " . print_r($e->getMessage(), true));
        }
        return redirect()->back()->with('danger-message', 'Unable to delete contact');
    }
}
