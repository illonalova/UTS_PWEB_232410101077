@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-gradient-to-br from-emerald-100 via-emerald-200 to-emerald-50 flex justify-center items-center">
        <!-- Container Login Form -->
        <div class="max-w-sm w-full p-6 bg-white shadow-lg rounded-lg border border-emerald-600">
            <h2 class="text-center text-2xl font-semibold text-emerald-600 mb-6">Login Minuman App</h2>
            
            <!-- Form Login -->
            <form action="{{ route('login.submit') }}" method="POST">
                @csrf
                
                <!-- Username Input -->
                <div class="mb-4">
                    <label for="username" class="block text-emerald-600">Username</label>
                    <input type="text" name="username" id="username" class="w-full px-4 py-2 border border-emerald-500 rounded-lg" required>
                </div>
                
                <!-- Password Input -->
                <div class="mb-6">
                    <label for="password" class="block text-emerald-600">Password</label>
                    <input type="password" name="password" id="password" class="w-full px-4 py-2 border border-emerald-500 rounded-lg" required>
                </div>
                
                <!-- Submit Button -->
                <button type="submit" class="w-full py-2 bg-emerald-600 text-white rounded-lg hover:bg-emerald-700">Login</button>
            </form>
        </div>
    </div>
@endsection
