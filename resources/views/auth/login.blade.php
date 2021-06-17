<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <div class="ml-5 mt-3" style="margin-left: 20px; margin-right: 20px; width: calc(100% - 40px); height: 50px;">
                <span style="font-family: TBC Contractica CAPS medium; font-size: 24px; float: left; color: white; line-height: 50px;">
                    <!-- Login -->
                    შესვლა
                </span>
                <span style="font-family: 'Nunito'; font-size: 24px; float: right; color: white;">
                    <a href="/">
                        <img src="/img/time.svg" alt="Time tracking icon" width="50px" height="50px">
                    </a>
                </span>
            </div>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <!-- <x-label for="email" :value="__('მეილი')" /> -->
                <label for="email" style="font-family: TBC Contractica CAPS medium; font-size: 10pt;"> მეილი </label>

                <x-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <!-- <x-label for="password" :value="__('პაროლი')" /> -->
                <label for="password" style="font-family: TBC Contractica CAPS medium; font-size: 10pt;"> პაროლი </label>

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600" style="font-family: TBC Contractica CAPS medium; padding-top: 6px !important;">
                        <!-- {{ __('Remember me') }} -->
                        დამახსოვრება
                    </span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-3" style="font-family: TBC Contractica CAPS medium; padding-top: 12px !important;">
                    <!-- {{ __('Log in') }} -->
                    შესვლა
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
