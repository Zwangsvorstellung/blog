@extends('layouts.default')
@section('content')

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            <br>
            <form class="center" method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-label for="email" :value="__('Email')" />

                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                </div>

                <br>
                <div class="flex items-center justify-end mt-4">
                    <x-button>
                        {{ __('Demander un mot de passe') }}
                    </x-button>
                </div>
                <br>
            </form>

@endsection