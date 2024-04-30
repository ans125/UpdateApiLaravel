<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Mail\UserUpdatedNotification;
use Illuminate\Support\Facades\Mail;
use App\Jobs\MailJob;

class UserController extends Controller
{
    public function update(Request $request, $userId)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'email' => 'required|email',
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'dob' => 'required|date|before:' . now()->subYear()->format('Y-m-d'), // Validate dob before current year
            'cnic' => 'required',
        ]);

        // Find the user record by user ID
        $user = User::findOrFail($userId);
        // Update the user record
        $user->update($validatedData);
        MailJob::dispatch($user);
        // Send notification to user via email (queued)
               
        return response()->json(['message' => 'User data updated successfully'], 200);
    }
}