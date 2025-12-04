<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth; // ✅ Import Auth
use Illuminate\View\View; // ✅ Import View

class AuthorController extends Controller
{
    public function showAuthor(): View
    {
        $users = User::all();
        return view('backend.pages.author', compact('users'));
    }

    public function userEdit(User $user): View
    {
        if (Auth::user()->email !== 'shawonahsan08@gmail.com') {
            abort(403); // Forbidden
        }

        return view('profile.edit', [
            'user' => $user,
        ]);
    }
    public function destroy($id)
    {
        $author = User::findOrFail($id);

        // Prevent deletion for specific emails
        $protectedEmails = [
            'shawonahsan08@gmail.com',
            'adnanislamsompod@gmail.com'
        ];

        if (in_array($author->email, $protectedEmails)) {
            return redirect()->back()->with('error', 'You cannot delete this author!');
        }

        // Delete author record
        $author->delete();

        return redirect()->back()->with('success', 'Author deleted successfully!');
    }


}
