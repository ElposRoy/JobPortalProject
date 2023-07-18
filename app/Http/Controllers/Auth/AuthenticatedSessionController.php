<?php
// AuthenticatedSessionController.php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Inertia\Response;

class AuthenticatedSessionController extends Controller
{
    public function create(): Response
    {
        return Inertia::render('Auth/Login', [
            'canResetPassword' => Route::has('password.request'),
            'status' => session('status'),
        ]);
    }

    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

    //Auth::user()->getRoleNames()->first() is a Spatie package methods to retrieve the user's role:
    //Use this instead to get the user role and navigate them to their page.
        if (Auth::user()->getRoleNames()->first() === 'jobseeker') {
            return redirect()->intended(RouteServiceProvider::JOBSEEKER);
        } elseif (Auth::user()->getRoleNames()->first() === 'admin') {
            return redirect()->intended(RouteServiceProvider::ADMIN);
        }
     
        return redirect()->intended('/');
      
    }

    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
