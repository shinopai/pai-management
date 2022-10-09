<x-app-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>
        <div class="customer__form-wrap">
          <h2 class="customer__form-heading">顧客新規登録</h2>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('customers.store') }}" class="customer__form" novalidate>
            @csrf
        <div class="customer__form-inner">
            <!-- Name -->
            <div class="customer__form-item">
           <x-label for="name" :value="__('氏名')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- StoreID -->
            <div class="customer__form-item">
           <x-label for="store_id" :value="__('店舗番号')" />

                <x-input id="store_id" class="block mt-1 w-full" type="text" name="store_id" :value="old('store_id')" required autofocus />
                <span>1&nbsp;東京本店,2&nbsp;名古屋支店,3&nbsp;大阪支店</span>
            </div>

            <!-- PostCode -->
            <div class="customer__form-item">
           <x-label for="post_code" :value="__('郵便番号')" />

                <x-input id="post_code" class="block mt-1 w-full" type="text" name="post_code" :value="old('post_code')" required autofocus />
            </div>

            <!-- Address -->
            <div class="customer__form-item">
           <x-label for="address" :value="__('住所')" />

                <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4 customer__form-item">
                <x-label for="email" :value="__('メールアドレス')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Birthday -->
            <div class="mt-4 customer__form-item">
                <x-label for="birthday" :value="__('生年月日')" />

                <x-input id="birthday" class="block mt-1 w-full" type="date" name="birthday" :value="old('birthday')" required />
            </div>

            <!-- Phone -->
            <div class="mt-4 customer__form-item">
                <x-label for="phone" :value="__('電話番号')" />

                <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required />
            </div>

            <div>
                <x-button class="ml-4 customer__form-btn">
                    {{ __('登録') }}
                </x-button>
            </div>
            </div>
        </form>
        </div>
    </x-auth-card>
</x-app-layout>
