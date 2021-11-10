<x-app-layout>
    <!-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard For Company') }}
        </h2>
    </x-slot> -->

        <livewire:employee-working />

        <div class="py-4 pb-12 max-w-7xl mx-auto flex">
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
                            <div id="user-notification-id" class="user-notification">
                                <h2 class="mt-3 ml-6 mb-2" style="font-family: TBC Contractica CAPS black, sans-serif;">თანაგუნდელები</h2>
                                
                                @foreach($teammates as $teammate)
                                    <div class="user-notification-user-card">
                                        <img class="rounded-full ml-3" style="height: 40px; margin-top: 10px;" src="https://randomuser.me/api/portraits/men/1.jpg"/>
                                        <p class="ml-3" style="font-family: TBC Contractica CAPS black, sans-serif; line-height: 60px; font-size: 12pt !important;"> {{ $teammate->first_name }} {{ $teammate->last_name }} </p>
                                        @if($teammate->status == 'inactive')
                                            <span class="flex h-full w-6" style="position: absolute; right: 10px;">
                                                <span style="margin-top: calc(30px - 0.55rem);" class="absolute inline-flex h-3 w-3 rounded-full bg-gray-400 opacity-75"></span>
                                                <span style="margin-top: calc(30px - 0.55rem);" class="relative inline-flex rounded-full h-3 w-3 bg-gray-500"></span>
                                            </span>
                                        @elseif($teammate->status == 'active')
                                            <span class="flex h-full w-6" style="position: absolute; right: 10px;">
                                                <span style="margin-top: calc(30px - 0.55rem);" class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-green-400 opacity-75"></span>
                                                <span style="margin-top: calc(30px - 0.55rem);" class="relative inline-flex rounded-full h-3 w-3 bg-green-500"></span>
                                            </span>
                                        @endif
                                    </div>
                                @endforeach
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
            <div class="w-2/3 sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <!-- <div class="p-6 bg-white border-b border-gray-200">

                        <p style="font-family: TBC Contractica CAPS black, sans-serif; font-size: 18pt; font-weight: bold;">
                            პროექტები
                        </p>

                        <div class="px-2 mt-3 mb-3" style="width: 100%; height: auto; display: flex;">
                            <div class="row w-full" style="margin: auto;">
                                @foreach($projects as $project)
                                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                        <div 
                                            class="border-1 my-3 mr-3 shadow-md bg-gray-50 transform duration-700 hover:-translate-y-4 cursor-pointer"
                                            id="project{{ $project->id }}"
                                            style="width: 140px; height: 140px; border-radius: 10px; margin: auto;"
                                            onclick="usserProject({{ $project->id }}, {{ json_encode($projectIds, True)}})"
                                        >
                                            <p class="my-2" style="font-family: TBC Contractica CAPS black; font-size: 22pt; font-weight: bold; text-align: center;">28</p>
                                            <p class="my-2" style="font-family: TBC Contractica CAPS black; font-size: 10pt; font-weight: bold; text-align: center; color: grey; font-style: italic;">{{$project->project_name}}</p>
                                            @if($project->project_status == "active")
                                            <p style="font-family: TBC Contractica CAPS regular; font-size: 10pt; font-weight: bold; text-align: center; color: #34D399; margin-top: 20px;">
                                                აქტიური
                                            </p>
                                            @elseif($project->project_status == "suspended")
                                            <p style="font-family: TBC Contractica CAPS regular; font-size: 10pt; font-weight: bold; text-align: center; color: #6B7280; margin-top: 20px;">
                                                შეჩერებული
                                            </p>
                                            @elseif($project->project_status == "finished")
                                            <p style="font-family: TBC Contractica CAPS regular; font-size: 10pt; font-weight: bold; text-align: center; color: #EF4444; margin-top: 20px;">
                                                დასრულებული
                                            </p>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <table class="min-w-max w-full table-auto border border-gray-200">
                            <thead>
                                <tr class="bg-transparent text-gray-600 uppercase text-sm leading-normal border border-transparent">
                                    <th class="py-3 px-6 text-left border border-gray-200" style="font-family: TBC Contractica CAPS light;">
                                        თარიღი
                                    </th>
                                    <th class="py-3 px-6 text-left border border-gray-200" style="font-family: TBC Contractica CAPS light;">
                                        დასაწყისი
                                    </th>
                                    <th class="py-3 px-6 text-center border border-gray-200" style="font-family: TBC Contractica CAPS light;">
                                        დასასრული
                                    </th>
                                    <th class="py-3 px-6 text-center border border-gray-200" style="font-family: TBC Contractica CAPS light;">
                                        საერთო დრო
                                    </th>
                                    <th class="py-3 px-6 text-center border border-gray-200" style="font-family: TBC Contractica CAPS light;">
                                        მოქმედებები
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 text-sm font-light">
                                <tr class="border border-gray-200 hover:bg-white" style="border-spacing: 5em;">
                                    <td class="py-3 px-6 text-left whitespace-nowrap border border-gray-200" style="border-bottom: 1em;">
                                        <div class="flex items-center">
                                            <span class="font-medium">
                                                2021-05-27
                                            </span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-left border border-gray-200">
                                        <div class="flex items-center font-medium">
                                            <span> 
                                                12:30:10
                                            </span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-center border border-gray-200">
                                        <div class="flex items-center justify-center font-medium">
                                            16:15:42
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-center border border-gray-200">
                                        <span class="font-medium">
                                            3.5
                                        </span>
                                    </td>
                                    <td class="py-3 px-6 text-center border border-gray-200">
                                        <div class="flex item-center justify-center">
                                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <button data-bs-toggle="modal" data-bs-target="#employeeEditModal"  class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <form action="" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                    <button type="submit" value="" class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border border-gray-200 hover:bg-white" style="border-spacing: 5em;">
                                    <td class="py-3 px-6 text-left whitespace-nowrap border border-gray-200" style="border-bottom: 1em;">
                                        <div class="flex items-center">
                                            <span class="font-medium">
                                                2021-05-28
                                            </span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-left border border-gray-200">
                                        <div class="flex items-center font-medium">
                                            <span> 
                                                09:00:10
                                            </span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-center border border-gray-200">
                                        <div class="flex items-center justify-center font-medium">
                                            16:00:42
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-center border border-gray-200">
                                        <span class="font-medium">
                                            7
                                        </span>
                                    </td>
                                    <td class="py-3 px-6 text-center border border-gray-200">
                                        <div class="flex item-center justify-center">
                                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <button data-bs-toggle="modal" data-bs-target="#employeeEditModal"  class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <form action="" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                    <button type="submit" value="" class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border border-gray-200 hover:bg-white" style="border-spacing: 5em;">
                                    <td class="py-3 px-6 text-left whitespace-nowrap border border-gray-200" style="border-bottom: 1em;">
                                        <div class="flex items-center">
                                            <span class="font-medium">
                                                2021-05-29
                                            </span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-left border border-gray-200">
                                        <div class="flex items-center font-medium">
                                            <span> 
                                                10:00:10
                                            </span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-center border border-gray-200">
                                        <div class="flex items-center justify-center font-medium">
                                            18:00:42
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-center border border-gray-200">
                                        <span class="font-medium">
                                            8
                                        </span>
                                    </td>
                                    <td class="py-3 px-6 text-center border border-gray-200">
                                        <div class="flex item-center justify-center">
                                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <button data-bs-toggle="modal" data-bs-target="#employeeEditModal"  class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <form action="" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                    <button type="submit" value="" class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border border-gray-200 hover:bg-white" style="border-spacing: 5em;">
                                    <td class="py-3 px-6 text-left whitespace-nowrap border border-gray-200" style="border-bottom: 1em;">
                                        <div class="flex items-center">
                                            <span class="font-medium">
                                                2021-05-30
                                            </span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-left border border-gray-200">
                                        <div class="flex items-center font-medium">
                                            <span> 
                                                13:30:10
                                            </span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-center border border-gray-200">
                                        <div class="flex items-center justify-center font-medium">
                                            19:30:42
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-center border border-gray-200">
                                        <span class="font-medium">
                                            6
                                        </span>
                                    </td>
                                    <td class="py-3 px-6 text-center border border-gray-200">
                                        <div class="flex item-center justify-center">
                                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <button data-bs-toggle="modal" data-bs-target="#employeeEditModal"  class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <form action="" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                    <button type="submit" value="" class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border border-gray-200 hover:bg-white" style="border-spacing: 5em;">
                                    <td class="py-3 px-6 text-left whitespace-nowrap border border-gray-200" style="border-bottom: 1em;">
                                        <div class="flex items-center">
                                            <span class="font-medium">
                                                2021-05-31
                                            </span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-left border border-gray-200">
                                        <div class="flex items-center font-medium">
                                            <span> 
                                                11:50:10
                                            </span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-center border border-gray-200">
                                        <div class="flex items-center justify-center font-medium">
                                            16:10:42
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-center border border-gray-200">
                                        <span class="font-medium">
                                            4
                                        </span>
                                    </td>
                                    <td class="py-3 px-6 text-center border border-gray-200">
                                        <div class="flex item-center justify-center">
                                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <button data-bs-toggle="modal" data-bs-target="#employeeEditModal"  class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <form action="" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                    <button type="submit" value="" class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border border-gray-200 hover:bg-white" style="border-spacing: 5em;">
                                    <td class="py-3 px-6 text-left whitespace-nowrap border border-gray-200" style="border-bottom: 1em;">
                                        <div class="flex items-center">
                                            <span class="font-medium">
                                                2021-06-01
                                            </span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-left border border-gray-200">
                                        <div class="flex items-center font-medium">
                                            <span> 
                                                12:00:10
                                            </span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-center border border-gray-200">
                                        <div class="flex items-center justify-center font-medium">
                                            18:00:42
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-center border border-gray-200">
                                        <span class="font-medium">
                                            6
                                        </span>
                                    </td>
                                    <td class="py-3 px-6 text-center border border-gray-200">
                                        <div class="flex item-center justify-center">
                                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <button data-bs-toggle="modal" data-bs-target="#employeeEditModal"  class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <form action="" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                    <button type="submit" value="" class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div> -->
                    <livewire:user-projects />

                </div>
            </div>
        </div>
</x-app-layout>