<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <div class="ml-5 mt-3" style="margin-left: 20px; margin-right: 20px; width: calc(100% - 40px); height: 50px;">
                <span style="font-family: TBC Contractica CAPS black; font-size: 20px; float: left; color: white; line-height: 50px;">რეგისტრაცია</span>
                <span style="font-family: 'Nunito'; font-size: 24px; float: right; color: white;">
                    <a href="/">
                        <img src="/img/time.svg" alt="Time tracking icon" width="50px" height="50px">
                    </a>
                </span>
            </div>
            <!-- <a href="/registerCompany" style="text-decoration: none;">
                <button type="button" class="btn btn-outline-primary mr-5">Company</button>
            </a>
            <a href="/register" style="text-decoration: none;">
                <button type="button" class="btn btn-outline-primary ml-5">User</button>
            </a> -->
            <!-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> -->
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register.company') }}">
            <p id="company_label" style="font-family: TBC Contractica CAPS medium; display: block; text-align: center; font-size: 20px; letter-spacing: 5px; color: #8BA2FF;">კომპანიის რეგისტრაცია</p>
            @csrf

            <!-- Company Name -->
            <div id="company_name_div">
                <!-- <x-label for="company_name" :value="__('Company Name')" /> -->
                <label for="company_name" style="font-family: TBC Contractica CAPS medium; font-size: 10pt;"> კომპანიის სახელი </label>

                <x-input id="company_name" class="block mt-1 w-full" type="text" name="company_name" :value="old('company_name')" autofocus />
            </div>

             <!-- Select Option Rol type -->
             <div class="mt-4" id="role_id_div" style="display: none">
                <!-- <x-label for="role_id" value="{{ __('Register as:') }}" /> -->
                <select name="role_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <option id="role_option_value" value="company"></option>
                </select>
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <!-- <x-label for="email" :value="__('Email')" /> -->
                <label for="email" style="font-family: TBC Contractica CAPS medium; font-size: 10pt;"> მეილი </label>

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <!-- <x-label for="password" :value="__('Password')" /> -->
                <label for="password" style="font-family: TBC Contractica CAPS medium; font-size: 10pt;"> პაროლი </label>

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <!-- <x-label for="password_confirmation" :value="__('Confirm Password')" /> -->
                <label for="password_confirmation" style="font-family: TBC Contractica CAPS medium; font-size: 10pt;"> გაიმეორეთ პაროლი </label>

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4" style="font-family: TBC Contractica CAPS medium; padding-top: 12px !important;">
                    {{ __('რეგისტრაცია') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

