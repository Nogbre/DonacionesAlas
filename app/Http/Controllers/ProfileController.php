<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        // Since authentication is disabled, return a default user or handle gracefully
        $user = $request->user() ?? new \App\Models\User([
            'name' => 'Usuario Demo',
            'email' => 'demo@example.com'
        ]);
        
        return view('profile.edit', [
            'user' => $user,
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        // Since authentication is disabled, this functionality may not work properly
        // You might want to redirect to dashboard or show an error message
        return Redirect::route('dashboard')->with('status', 'profile-update-disabled');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        // Since authentication is disabled, this functionality is not available
        return Redirect::route('dashboard')->with('status', 'account-deletion-disabled');
    }
}
