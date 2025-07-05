<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;


class MainController extends Controller{
    public function index(){
        $googleClientId = env('GOOGLE_CLIENT_ID');
        $facebookClientId = env('FACEBOOK_CLIENT_ID');
        $apiBaseUrl = env('API_URL');
        return view('modules.login.index', compact('googleClientId', 'apiBaseUrl', 'facebookClientId'));
    }

    public function register(){
        return view('modules.register.index');
    }

    public function addUser(Request $request){
        $validated = $request->validate([
            'email' => 'required|email',
        ]);

        $baseUrl = env('API_URL');

        try {
            $response = Http::post("$baseUrl/register", [
                'email' => $validated['email'],
                'name' => $request->input('name'),
                'password' => $request->input('password'),
                'password_confirmation' => $request->input('password_confirmation')
            ]);

            if ($response->successful()) {
                $data = $response->json();

                Session::put('email', $data['email']);

                return redirect('/home')->with('success', 'Registered!');
            }

            return back()->withErrors(['register' => $response->body()]);
        } catch (\Exception $e) {
            return back()->withErrors(['register' => $e->getMessage()]);
        }
    }

    public function home(Request $request){
        $email = session('email');
        $baseUrl = env('API_URL');

        try {
            // Send email as a query parameter
            $response = Http::get("$baseUrl/content", [
                'query' => ['email' => $email]
            ]);


            if ($response->successful()) {
                $data = $response->json();
                return view('modules.home.index', compact('data', 'email'));
            }

            return back()->withErrors(['content' => 'Failed to fetch content']);
        } catch (\Exception $e) {
            return back()->withErrors(['content' => $e->getMessage()]);
        }
    }

    public function handleGoogleLogin(Request $request){
        $email = is_array($request->input('email')) ? $request->input('email')[0] : $request->input('email');
        $isNew = $request->input('status') == false; // from Node.js or wherever

        // ✅ Store in session
        Session::put('email', $email);

        $baseUrl = env('API_URL');

        
        $response = Http::get("$baseUrl/content", [
            'query' => ['email' => $email]
        ]);
        
        if ($response->successful()) {
            $data = json_encode($response->json());

            return 200;
        }else {
            return back()->withErrors(['error' => 'Content fetch failed']);
        }

    }

    public function login(Request $request){
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $baseUrl = env('API_URL');

        try {
            $response = Http::post("$baseUrl/login", [
                'email' => $validated['email'],
                'password' => $validated['password']
            ]);

            if ($response->successful()) {
                $data = $response->json(); // ✅ FIXED

                if ($data) {
                    Session::put('email', $validated['email']);
                    return redirect()->route('home');
                } else {
                    return back()->withErrors(['login' => $data['message'] ?? 'Login failed.']);
                }
            }

            return back()->withErrors(['login' => 'Failed to connect to authentication server.']);
        } catch (\Exception $e) {
            return back()->withErrors(['login' => $e->getMessage()]);
        }

    }

}
