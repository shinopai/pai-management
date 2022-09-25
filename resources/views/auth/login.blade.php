@extends('layouts.base')

@section('title', 'ログインフォーム')

@section('content')
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}" class="form" novalidate>
            @csrf

            <!-- Email Address -->
            <div class="form__item">
                <x-label for="email" :value="__('メールアドレス')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus class="form__input" />
            </div>

            <!-- Password -->
            <div class="form__item">
                <x-label for="password" :value="__('パスワード')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" class="form__input" />
            </div>

            <div class="form__item">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 form__link" href="{{ route('password.request') }}">
                        {{ __('パスワードをお忘れですか?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('ログイン') }}
                </x-button>
            </div>
        </form>
@endsection
