<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
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

        <form method="POST" action="{{ route('register') }}">
            <p id="company_label" style="display: block; text-align: center; font-size: 24px; font-family: 'Roboto', sans-serif; color: #8BA2FF;">Register A User</p>

            @csrf

            <!-- Company Name -->
            <!-- <div id="company_name_div">
                <x-label for="company_name" :value="__('Company Name')" />

                <x-input id="company_name" class="block mt-1 w-full" type="text" name="company_name" :value="old('company_name')" autofocus />
            </div> -->

            <!-- First Name -->
            <div id="first_name_div">
                <x-label for="first_name" :value="__('First name')" />

                <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" autofocus />
            </div>

            <!-- Last Name -->
            <div id="last_name_div">
                <x-label for="last_name" :value="__('Last name')" />

                <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" autofocus />
            </div>

            <!-- Name -->
            <!-- <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div> -->

             <!-- Select Option Rol type -->
             <div class="mt-4" id="role_id_div" style="display: none">
                <x-label for="role_id" value="{{ __('Register as:') }}" />
                <select name="role_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <option id="role_option_value" value="user"></option>
                    <!-- <option value="registrar">registrar</option>
                    <option value="superadmin">superadmin</option>
                    <option value="roller">roller</option>
                    <option value="admin">Admin</option> -->
                </select>
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

