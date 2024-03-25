<?php

namespace App\Http\Controllers\Frontend\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactRequest;
use App\Models\Contact;
use Exception;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function store(StoreContactRequest $request)
    {
        try {
            Contact::create($request->validated());
        } catch (Exception $e) {
            Log::error("SAVE_CONTACT_EXCEPTION | " . print_r($e->getMessage(), true));
            return redirect()->back()->with('danger-message', 'Something Went Wrong! Please try again');
        }

        return redirect()->back()->with('success-message', 'Thank you for contacting us!');
    }
}
