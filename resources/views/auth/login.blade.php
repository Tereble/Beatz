@extends('layouts.main')
@include('partial.header')

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                <div class="card-header px-4 py-3 border-bottom">
                    <h5 class="mb-0">Login</h5>
                </div>
                <div class="card-body p-4">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                
                        <!-- Email Address -->
                        <div class="row mb-3">
                            <x-input-label class="col-sm-3 col-form-label" for="email" :value="__('Email')" >Email Address</label>
                            <div class="col-sm-9">
                            <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                        </div>
                        
                        <div style="display: none;">
                            <label for="honeypot"></label>
                            <input type="text" name="honeypot" id="honeypot" autocomplete="off">
                        </div>

                        <div class="row mb-3">
                            <x-input-label for="password" :value="__('Password')" class="col-sm-3 col-form-label">Password</label>
                                <div class="col-sm-9">
                            <x-text-input id="password" class="form-control"
                                            type="password"
                                            name="password"
                                            required autocomplete="current-password" />
                
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            
                            <div class="col-sm-9">
                                {!! NoCaptcha::display() !!}
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="remember_me" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="remember_me" name="remember">
                                    <label class="form-check-label" for="remember_me">Remember me</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                        </div>

        
                        
                        <div class="row">
                            <label class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                                <div class="d-md-flex d-grid align-items-center gap-3">
                                    <button type="submit" class="btn btn-white px-4" >Submit</button>
                                  
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

            {{-- <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button> --}}
       

    {!! NoCaptcha::renderJs() !!}

    