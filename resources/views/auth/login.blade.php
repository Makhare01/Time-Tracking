<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <div class="ml-5 mt-3" style="margin-left: 20px; margin-right: 20px; width: calc(100% - 40px); height: 50px;">
                <span style="font-family: 'Nunito'; font-size: 24px; float: left; color: white; line-height: 50px;">
                    <!-- Login -->
                    შესვლა
                </span>
                <span style="font-family: 'Nunito'; font-size: 24px; float: right; color: white;">
                    <a href="/">
                        <img src="/img/time.svg" alt="Time tracking icon" width="50px" height="50px">
                    </a>
                </span>
            </div>
            <a href="/">
                <!-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> -->
                <!-- <img src="/img/f.png" alt="Faust logo"> -->
                <!-- <img src="/img/time.svg" alt="Time tracking icon"> -->
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Name -->
            <!-- <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" autofocus />
            </div> -->

            <!-- <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')" required autofocus />
            </div> -->
            <div>
                <x-label for="email" :value="__('მეილი')" />

                <x-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <!-- <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div> -->
            <div class="mt-4">
                <x-label for="password" :value="__('პაროლი')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">
                        <!-- {{ __('Remember me') }} -->
                        დამახსოვრება
                    </span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-3">
                    <!-- {{ __('Log in') }} -->
                    შესვლა
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
