@extends('layouts.main')
@include('partial.header')

<div class="row">
    <div class="col-lg-8 mx-auto">
        <div class="card">
            <div class="card-header px-4 py-3 border-bottom">
                <h5 class="mb-0">Registration</h5>
            </div>
            <div class="card-body p-4">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="row mb-3">
                            <x-input-label for="name" :value="__('Name')" class="col-sm-3 col-form-label">Enter Your Name</label>
                          <div class="col-sm-9">
                            <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                    </div>
                   
                    <div style="display: none;">
                        <label for="honeypot"></label>
                        <input type="text" name="honeypot" id="honeypot" autocomplete="off">
                    </div>
                      </div>
                    

                   
                     <!-- Email Address -->
                    <div class="row mb-3">
                        <x-input-label for="email" :value="__('Email')"  class="col-sm-3 col-form-label">Email Address</label>
                        <div class="col-sm-9">
                            
                            <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                    </div>

                     <!-- Password -->
    
                    <div class="row mb-3">
                        <x-input-label for="password" :value="__('Password')" class="col-sm-3 col-form-label"> Password</label>
                       
                        <div class="col-sm-9">
                            <x-text-input id="password" class="form-control"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                    </div>
                     <!-- Confirm Password -->
                    <div class="row mb-3">
                        
        <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="col-sm-3 col-form-label">Confirm Password</label>

                        <div class="col-sm-9">
                            <x-text-input id="password_confirmation" class="form-control"
                        type="password"
                        name="password_confirmation" required autocomplete="new-password" />

        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                           
                        </div>
                    </div>
                    
    

                    <!-- reCAPTCHA -->
                    
                    <div class="row mb-3">
                        
                        <div class="col-sm-9">
                            {!! NoCaptcha::display() !!}
                        </div>
                    </div>
                    
                    
                        
                    <div class="row">
                        <label class="col-sm-3 col-form-label"></label>
                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>
                
                            <x-primary-button class="ms-4">
                                {{ __('Register') }}
                            </x-primary-button>
                        </div>
                    
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

    <!-- Load reCAPTCHA Script -->
    {!! NoCaptcha::renderJs() !!}


    