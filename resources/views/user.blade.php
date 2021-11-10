<x-app-layout>
    <!-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard For Company') }}
        </h2>
    </x-slot> -->
    <div class="py-12 max-w-7xl mx-auto flex">
        <!-- <div class="w-1/3 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg"> -->
                <!-- <div class="p-6 bg-white border-b border-gray-200"> -->
                    <!-- <p>ID: <b> {{ Auth::user()->id }} </b> </p>
                    <p>Email: <b> {{ Auth::user()->email }} </b> </p>
                    <p>Role: <b> {{ Auth::user()->role_id }} </b> </p> -->
                    
                    <div class="w-1/3 sm:px-6 lg:px-8" style="position: relative;">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 bg-white border-b border-gray-200">
                                <div class="shadow-lg mb-3" style="width: 120px; height: 120px; position: relative; border: solid 3px lightGrey; border-radius: 50%; margin: auto;">
                                    <!-- <div class="bg-green-400" style="width: 15px; height: 15px; border: solid 2px white; border-radius: 50%; position: absolute; top: 8px; left: 8px;"></div> -->
                                    <span class="flex h-full w-6" style="position: absolute; top: -8px; left: 8px;">
                                        <span style="margin-top: calc(30px - 0.55rem);" class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-green-400 opacity-75"></span>
                                        <span style="margin-top: calc(30px - 0.55rem);" class="relative inline-flex rounded-full h-3 w-3 bg-green-500"></span>
                                    </span>
                                    <img src="/img/icons/avatar.png" alt="user avatar icon" style="border-radius: 50%;">
                                </div>
                                <p style="font-family: 'Nunito'; font-size: 14pt; font-weight: bold; margin: 0px !important; text-align: center;">  {{ Auth::user()->first_name }} {{ Auth::user()->last_name }} </p>
                                <p style="font-family: 'Nunito'; font-size: 10pt; margin: 0px !important; text-align: center; font-style: italic; color: grey;">  {{ Auth::user()->email }} </p>

                                <div class="mt-14" style="width: 100%;">
                                    <div class="my-3 px-3 message-div" style="width: 250px; border-radius: 20px; display: flex;">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 my-2 mr-5 message-icon" fill="none" viewBox="0 0 24 24" stroke="#818CF8">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                                        </svg>
                                        <p class="pt-2.5 message-text contractica-font" style="font-size: 12pt; font-weight: bold; margin: 0px !important;">
                                            <!-- messages -->
                                            მიმოწერა
                                        </p>
                                    </div>

                                    <div class="my-3 px-3 message-div" style="width: 250px; border-radius: 20px; display: flex;" onclick="notifications()">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 my-2 mr-5 message-icon" fill="none" viewBox="0 0 24 24" stroke="#818CF8">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                        </svg>
                                        <p class="pt-2.5 message-text contractica-font" style="font-size: 12pt; font-weight: bold; margin: 0px !important;">
                                            <!-- teammates -->
                                            თანაგუნდელები
                                        </p>
                                    </div>
                                    

                                    <div class="my-3 px-3 message-div" style="width: 250px; border-radius: 20px; display: flex;">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 my-2 mr-5 message-icon" fill="none" viewBox="0 0 24 24" stroke="#818CF8">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                        </svg>
                                        <p class="pt-2.5 message-text contractica-font" style="font-size: 12pt; font-weight: bold; margin: 0px !important;">
                                            <!-- notifications -->
                                            შეტყობინებები
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <!-- </div>
            </div>
        </div> -->
        <div class="w-2/3 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p>ID: <b> {{ Auth::user()->id }} </b> </p>
                    <p>სახელი: <b> {{ Auth::user()->first_name }} </b> </p>
                    <p>გვარი: <b> {{ Auth::user()->last_name }} </b> </p>
                    <p>მეილი: <b> {{ Auth::user()->email }} </b> </p>
                    <p>როლი: <b> {{ Auth::user()->role_id }} </b> </p>
                    
                    <!-- <div>
                        <div class="md:grid md:grid-cols-3 md:gap-6">
                            <div class="md:col-span-1">
                            <div class="px-4 sm:px-0">
                                <h3 class="text-lg font-medium leading-6 text-gray-900">Profile</h3>
                                <p class="mt-1 text-sm text-gray-600">
                                This information will be displayed publicly so be careful what you share.
                                </p>
                            </div>
                            </div> 
                            <div class="md:col-span-4">
                                <form action="#" method="POST">
                                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                        <div class="grid grid-cols-3 gap-6">
                                        <div class="col-span-3 sm:col-span-2">
                                            <label for="company_website" class="block text-sm font-medium text-gray-700">
                                            Website
                                            </label>
                                            <div class="mt-1 flex rounded-md shadow-sm">
                                            <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                                http://
                                            </span>
                                            <input type="text" name="company_website" id="company_website" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="www.example.com">
                                            </div>
                                        </div>
                                        </div>

                                        <div>
                                        <label for="about" class="block text-sm font-medium text-gray-700">
                                            About
                                        </label>
                                        <div class="mt-1">
                                            <textarea id="about" name="about" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="you@example.com"></textarea>
                                        </div>
                                        <p class="mt-2 text-sm text-gray-500">
                                            Brief description for your profile. URLs are hyperlinked.
                                        </p>
                                        </div>

                                        <div>
                                        <label class="block text-sm font-medium text-gray-700">
                                            Photo
                                        </label>
                                        <div class="mt-1 flex items-center">
                                            <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                                            <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                            </svg>
                                            </span>
                                            <button type="button" class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            Change
                                            </button>
                                        </div>
                                        </div>

                                        <div>
                                        <label class="block text-sm font-medium text-gray-700">
                                            Cover photo
                                        </label>
                                        <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                            <div class="space-y-1 text-center">
                                            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <div class="flex text-sm text-gray-600">
                                                <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                <span>Upload a file</span>
                                                <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                                </label>
                                                <p class="pl-1">or drag and drop</p>
                                            </div>
                                            <p class="text-xs text-gray-500">
                                                PNG, JPG, GIF up to 10MB
                                            </p>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        Save
                                        </button>
                                    </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>