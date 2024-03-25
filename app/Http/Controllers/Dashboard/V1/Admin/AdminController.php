<?php

namespace App\Http\Controllers\Dashboard\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use App\Models\Role;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    public function index()
    {
        $admins = User::latest()->admins()->get();
        return view('dashboard.admins.pages.admins.index', compact('admins'));
    }


    public function create()
    {
        return view('dashboard.admins.pages.admins.create');
    }

    public function store(StoreAdminRequest $request)
    {
        Log::debug("Save admin::  " . print_r($request->all(), true));

        try {
            $admin = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role_id' => Role::ADMIN,
            ]);
        } catch (Exception $e) {
            Log::error("SAVE_ADMIN_EXCEPTION | " . print_r($e->getMessage(), true));
            return redirect()->route('dashboard.admins.admin.index')->with('danger-message', 'Unable to create admin');
        }

        return redirect()->route('dashboard.admins.admin.index')->with('success-message', 'Admin Created successfully');
    }

    public function show(User $admin)
    {
        return view('dashboard.admins.pages.admins.show', compact('admin'));
    }

    public function edit(User $admin)
    {
        return view('dashboard.admins.pages.admins.edit', compact('admin'));
    }


    public function update(UpdateAdminRequest $request, User $admin)
    {
        // dd($request->all());
        Log::debug("update admin::  " . print_r($request->all(), true));

        try {
            if ($request->password == NULL && $request->password_confirmation == NULL) {
                $admin = $admin->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'role_id' => Role::ADMIN,
                ]);
                Log::debug("update admin inside no password::  ");

            }else{
                $admin = $admin->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'role_id' => Role::ADMIN,
                ]);
            }
            return redirect()->route('dashboard.admins.admin.index')->with('success-message', 'Admin Updated successfully');

        } catch (Exception $e) {
            Log::error("UPDATE_ADMIN_EXCEPTION | " . print_r($e->getMessage(), true));
            return redirect()->route('dashboard.admins.admin.index')->with('danger-message', 'Unable to update admin! Try again');
        
        }
    }

    public function destroy(User $admin)
    {
        // dd($admin->email);
        try {
            if ($admin->delete()) {
                return redirect()->route('dashboard.admins.admin.index')->with('success-message', 'Admin Deleted successfully');
            }
        } catch (\Exception $e) {
            Log::error("DELETE_ADMIN_EXCEPTION | " . print_r($e->getMessage(), true));
        }

        return redirect()->route('dashboard.admins.admin.index')->with('danger-message', 'Unable to delete admin');
    }
}
