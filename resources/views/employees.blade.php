<x-app-layout>
    <!-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard For Company') }}
        </h2>
    </x-slot> -->

    <div class="py-2 mt-4 max-w-7xl mx-auto flex">
        <div class="w-1/3 sm:px-6 lg:px-8">
            <p style="font-family: TBC Contractica CAPS black; font-size: 16pt; font-weight: bold; margin: 0px !important; padding-top: 10px;">
                <!-- employees -->
                თანამშრომლები
            </p>
        </div>
        <div class="w-2/3 sm:px-6 lg:px-8">
            <button class="float-right bg-green-400 px-3 font-semibold tracking-wider text-white rounded-full hover:bg-green-500" data-bs-toggle="modal" data-bs-target="#exampleModal" style="font-family: TBC Contractica CAPS black; font-size: 10; padding-top: 10px; padding-bottom: 6px;">
                <!-- Add employee -->
                დამატება
            </button>
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" style="font-family: TBC Contractica CAPS black; display: block; text-align: center; font-size: 12pt; padding-top: 5px;">
                            <!-- Register A Employee -->
                            თანამშრომლის რეგისტრაცია
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('register.employee') }}" method="POST" id="add_employee_form">
                            <!-- <p id="company_label" style="display: block; text-align: center; font-size: 24px; font-family: 'Roboto', sans-serif; color: #8BA2FF;">Register A User</p> -->

                            @csrf

                            <!-- First Name -->
                            <div id="first_name_div">
                                <!-- <x-label for="first_name" :value="__('First name')" /> -->
                                <label for="first_name" style="font-family: TBC Contractica CAPS medium; font-size: 10pt;"> სახელი </label>

                                <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" autofocus />
                            </div>

                            <!-- Last Name -->
                            <div id="last_name_div" class="mt-4">
                                <!-- <x-label for="last_name" :value="__('Last name')" /> -->
                                <!-- <x-label for="last_name" :value="__('გვარი')" /> -->
                                <label for="first_name" style="font-family: TBC Contractica CAPS medium; font-size: 10pt;"> გვარი </label>

                                <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" autofocus />
                            </div>

                            <!-- Status -->
                            <input style="display: none;" id="status" type="text" name="status" value="inactive" />

                            <!-- Select Option Rol type -->
                            <div class="mt-4" id="role_id_div" style="display: none">
                                <!-- <x-label for="role_id" value="{{ __('Register as:') }}" /> -->
                                <label for="first_name" style="font-family: TBC Contractica CAPS medium; font-size: 10pt;"> დარეგისტრირება როგორც </label>
                                <select name="role_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                    <option id="role_option_value" value="user"></option>
                                </select>
                            </div>

                            <div class="mt-4" id="role_id_div">
                                <!-- <x-label for="project_id" value="{{ __('Projects:') }}" /> -->
                                <!-- <x-label for="project_id" value="{{ __('პროექტები:') }}" /> -->
                                <label for="first_name" style="font-family: TBC Contractica CAPS medium; font-size: 10pt;"> პროექტები </label>
                                <fieldset>
                                    @foreach($projects as $project)
                                        <input type="checkbox" name="project_id[]" value="{{ $project->id }}" /> {{ $project->project_name }} <br>
                                    @endforeach
                                </fieldset>
                            </div>

                            

                            <!-- Company ID -->
                            <div class="mt-4" style="display: none;">
                                <x-label for="company_id" :value="__('Company ID')" />

                                <input id="company_id" class="block mt-1 w-full" type="text" name="company_id" value="{{ Auth::user()->id  }}" />
                            </div>

                            <!-- Email Address -->
                            <div class="mt-4">
                                <!-- <x-label for="email" :value="__('Email')" /> -->
                                <!-- <x-label for="email" :value="__('მეილი')" /> -->
                                <label for="first_name" style="font-family: TBC Contractica CAPS medium; font-size: 10pt;"> მეილი </label>

                                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                            </div>


                            <!-- Password -->
                            <div class="mt-4">
                                <!-- <x-label for="password" :value="__('Password')" /> -->
                                <!-- <x-label for="password" :value="__('პაროლი')" /> -->
                                <label for="first_name" style="font-family: TBC Contractica CAPS medium; font-size: 10pt;"> პაროლი </label>

                                <x-input id="password" class="block mt-1 w-full"
                                                type="password"
                                                name="password"
                                                required autocomplete="new-password" />
                            </div>

                            <!-- Confirm Password -->
                            <div class="mt-4">
                                <!-- <x-label for="password_confirmation" :value="__('Confirm Password')" /> -->
                                <!-- <x-label for="password_confirmation" :value="__('დაადასტურეთ პაროლი')" /> -->
                                <label for="first_name" style="font-family: TBC Contractica CAPS medium; font-size: 10pt;"> დაადასტურეთ პაროლი </label>

                                <x-input id="password_confirmation" class="block mt-1 w-full"
                                                type="password"
                                                name="password_confirmation" required />
                            </div>
                            <!-- <button type="sumbit">Submit</button> -->
                        </form>
                    </div>
                    <div class="modal-footer">
                        <!-- <button type="submit" class="btn btn-outline-success" form="add_employee_form" style="font-family: TBC Contractica CAPS medium;">
                            Add
                            <span style="padding-top: 10px !important;">დამატება</span>
                        </button> -->
                        <button type="submit" class="float-right bg-green-400 mx-3 px-3 py-2.5 font-semibold tracking-wider text-white hover:bg-green-500" form="add_employee_form" style="font-family: TBC Contractica CAPS regular; font-size: 10pt;">
                            <span class="mt-1">დამატება</span>
                        </button>
                        <button class="bg-gray-400 mx-3 px-3 py-2.5 font-semibold tracking-wider text-white hover:bg-gray-500" data-bs-dismiss="modal" style="font-family: TBC Contractica CAPS regular; font-size: 10pt;">
                            <span class="mt-1">დახურვა</span>
                        </button>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        

    </div>

    <!-- max-w-7xl -->
    <div class="py-6 max-w-7xl mx-auto flex">
        <div class="w-1/3 sm:px-6 lg:px-8">

            <!-- Projects div -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="all-employee w-full flex">
                        <div class="all-employee-icon">
                            <img src="/img/icons/all-employees-40.png" alt="All employees icon" width="30px" height="30px">
                        </div>
                        <p class="all-employess-text" style="font-family: TBC Contractica CAPS black !important; padding-top: 5px;">
                            <!-- All Employees -->
                            ყველა თანამშრომელი
                        </p>
                    </div>

                    <div class="ptojects-div">
                        <p class="ptojects-div-header">
                            <!-- PROJECTS -->
                            <span style="font-family: TBC Contractica CAPS black !important; font-size: 11pt; font-weight: bold;">პროექტები</span>
                        </p>

                        <div class="projects w-full">
                            <livewire:employee-projects />
                        </div>
                    </div>

                    <div class="flex mt-5" style="justify-content: center;">
                        <!-- <button class="px-4 py-2 font-semibold tracking-wider text-white rounded-full" data-bs-toggle="modal" data-bs-target="#exampleModalProject" style="font-family: TBC Contractica CAPS black !important; font-size: 10pt; background: #8453df; margin: auto; font-weight: bold;">
                            Add Project
                            პროექტის დამატება
                        </button> -->
                        <button class="float-right bg-green-400 mx-3 px-3 py-2.5 rounded-full font-semibold tracking-wider text-white hover:bg-green-500" data-bs-toggle="modal" data-bs-target="#exampleModalProject" style="font-family: TBC Contractica CAPS regular; font-size: 10pt; background: #8453df; margin: auto; font-weight: bold;"">
                            <span class="mt-1">პროექტის დამატება</span>
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalProject" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog"> 
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel" style="font-family: TBC Contractica CAPS black; display: block; text-align: center; font-size: 18px;">
                                    <!-- Add New Project -->
                                    ახალი პროექტის დამატება
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="{{ route('dashboard.addProject', 1) }}" id="add_project_form">
                                    @csrf

                                    <!-- Project Name -->
                                    <div id="project_name_div" class="mt-4">
                                        <!-- <x-label for="project_name" :value="__('პროექტის სახელი')" /> -->
                                        <label for="project_name" style="font-family: TBC Contractica CAPS medium; font-size: 10pt;"> პროექტის სახელი </label>

                                        <x-input id="project_name" class="block mt-1 w-full" type="text" name="project_name" :value="old('project_name')" autofocus required />
                                    </div>

                                    <!-- Project Description -->
                                    <div id="project_description_div" class="mt-4">
                                        <!-- <x-label for="description" :value="__('აღწერა')" /> -->
                                        <label for="description" style="font-family: TBC Contractica CAPS medium; font-size: 10pt;"> აღწერა </label>

                                        <textarea name="description" id="description" class="block mt-1 w-full border border-grey-200 rounded-md font-medium text-sm text-gray-700" :value="old('description')" autofocus></textarea>
                                    </div>

                                    <div id="project_name_div" class="mt-4">
                                        <!-- <x-label for="project_status" :value="__('სტატუსი')" /> -->
                                        <label for="project_status" style="font-family: TBC Contractica CAPS medium; font-size: 10pt; margin-bottom: 5px;"> სტატუსი </label>

                                        <select class="form-select" name="project_status" id="project_status" aria-label="Default select example">
                                            <option value="" selected>აირჩიეთ სტატუსი</option>
                                            <option value="active">აქტიური</option>
                                            <option value="suspended">შეჩერებული</option>
                                            <option value="finished">დასრულებული</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <!-- <button type="submit" class="btn btn-outline-success" form="add_project_form">Add</button> -->
                                <button type="submit" class="float-right bg-green-400 mx-3 px-3 py-2.5 font-semibold tracking-wider text-white hover:bg-green-500" form="add_project_form" style="font-family: TBC Contractica CAPS regular; font-size: 10pt;">
                                    <span class="mt-1">დამატება</span>
                                </button>

                                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                <button class="bg-gray-400 mx-3 px-3 py-2.5 font-semibold tracking-wider text-white hover:bg-gray-500" data-bs-dismiss="modal" style="font-family: TBC Contractica CAPS regular; font-size: 10pt;">
                                    <span class="mt-1">დახურვა</span>
                                </button>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                    
            </div>
        </div>

        <div class="w-2/3 sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm">
                <div class="">
                    <table class="min-w-max w-full table-auto border border-gray-200">
                        <thead>
                            <tr class="bg-transparent text-gray-600 uppercase text-sm leading-normal border border-transparent">
                                <!-- <th class="py-3 px-6 text-left border border-gray-200">Projects</th> -->
                                <th class="py-3 px-4 text-left border border-gray-200" style="font-family: TBC Contractica CAPS regular;">პროექტები</th>

                                <!-- <th class="py-3 px-6 text-left border border-gray-200">Employee</th> -->
                                <th class="py-3 px-4 text-left border border-gray-200" style="font-family: TBC Contractica CAPS regular;">თანამშრომელი</th>

                                <!-- <th class="py-3 px-6 text-center border border-gray-200">Working Times</th> -->
                                <th class="py-3 px-4 text-center border border-gray-200" style="font-family: TBC Contractica CAPS regular;">სამუშაო დროები</th>

                                <!-- <th class="py-3 px-6 text-center border border-gray-200">Status</th> -->
                                <th class="py-3 px-4 text-center border border-gray-200" style="font-family: TBC Contractica CAPS regular;">სტატუსი</th>

                                <!-- <th class="py-3 px-6 text-center border border-gray-200">Actions</th> -->
                                <th class="py-3 px-4 text-center border border-gray-200" style="font-family: TBC Contractica CAPS regular;">მოქმედება</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                            @foreach($employees as $key => $employee)
                                <tr class="border border-gray-200 hover:bg-white" style="border-spacing: 5em;">
                                    <td class="py-3 px-4 text-left whitespace-nowrap border border-gray-200" style="border-bottom: 1em;">
                                        <div class="flex items-center">
                                            <span class="font-medium">
                                                <ol>
                                                    @foreach($project_employees as $Value)
                                                        @if($Value->employee_email == $employee->email)
                                                            <li>
                                                                @foreach($projects as $myProject)
                                                                    @if($Value->project_id == $myProject->id)
                                                                        {{ $myProject->project_name }}
                                                                        @break
                                                                    @endif
                                                                @endforeach
                                                            </li>
                                                        @endif
                                                    @endforeach
                                                </ol>
                                            </span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-4 text-left border border-gray-200">
                                        <div class="flex items-center">
                                            <div class="mr-2">
                                                <img class="w-6 h-6 rounded-full" src="https://randomuser.me/api/portraits/men/1.jpg"/>
                                                <!-- <img class="w-6 h-6 rounded-full" src="/img/icons/man.png"/> -->
                                            </div>
                                            <span> 
                                                {{ $employee->first_name }} 
                                            </span>
                                        </div>
                                    </td>
                                    <td class="py-3 text-center border border-gray-200">
                                        <div class="flex items-center justify-center">
                                            <span
                                                type="button"
                                                class="bg-indigo-200 text-white text-semibold px-3 rounded-full text-xs cursor-pointer" 
                                                style="font-family: TBC Contractica CAPS regular; padding-top: 10px; padding-bottom: 5px;"
                                                data-bs-toggle="modal" 
                                                data-bs-target="#timesModal{{$key}}">
                                                დროები
                                            </span>
                                        </div>

                                        <!-- Modal -->
                                        <div class="modal fade" id="timesModal{{$key}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel" style="font-family: TBC Contractica CAPS black;">სამუშაო დროები</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <!-- {{ $employee->first_name }} -->
                                                        <table class="min-w-max w-full table-auto border border-gray-200">
                                                            <thead>
                                                                <tr class="bg-transparent text-gray-600 uppercase text-sm leading-normal border border-transparent">
                                                                    <th class="py-3 px-6 text-left border border-gray-200" style="font-family: TBC Contractica CAPS light;">
                                                                        პროექტი
                                                                    </th>
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
                                                                        სტატუსი
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="text-gray-600 text-sm font-light">
                                                                @foreach($works as $work)
                                                                    @if($work->user_email == $employee->email)
                                                                        <tr class="border border-gray-200 hover:bg-white" style="border-spacing: 5em;">
                                                                            <td class="py-3 px-4 text-left whitespace-nowrap border border-gray-200" style="border-bottom: 1em;">
                                                                                <div class="flex items-center">
                                                                                    <span class="font-medium">
                                                                                        {{ $work->project }}
                                                                                    </span>
                                                                                </div>
                                                                            </td>
                                                                            <td class="py-3 px-3 text-left whitespace-nowrap border border-gray-200" style="border-bottom: 1em;">
                                                                                <div class="flex items-center">
                                                                                    <span class="font-medium">
                                                                                        @php
                                                                                            $start = explode(" ", $work->created_at);
                                                                                        @endphp
                                                                                        {{ $start[0] }}
                                                                                    </span>
                                                                                </div>
                                                                            </td>
                                                                            <td class="py-3 px-6 text-left border border-gray-200">
                                                                                <div class="flex items-center font-medium">
                                                                                    <span> 
                                                                                        @php
                                                                                            $start = explode(" ", $work->created_at);
                                                                                        @endphp
                                                                                        {{ $start[1] }}
                                                                                    </span>
                                                                                </div>
                                                                            </td>
                                                                            <td class="py-3 px-6 text-center border border-gray-200">
                                                                                <div class="flex items-center justify-center font-medium">
                                                                                    @if($work->finishedAt)
                                                                                        {{ $work->finishedAt }}
                                                                                    @else null
                                                                                    @endif
                                                                                </div>
                                                                            </td>
                                                                            <td class="py-3 px-6 text-center border border-gray-200">
                                                                                <span class="font-medium">
                                                                                    {{ gmdate("H", $work->total_time) }} სთ. {{ gmdate("i", $work->total_time) }} წთ.
                                                                                </span>
                                                                            </td>
                                                                            <td class="py-3 px-6 text-center border border-gray-200">
                                                                                <span class="font-medium">
                                                                                    {{ $work->status }}
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                    @endif
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="bg-gray-400 mx-3 px-3 py-2.5 font-semibold tracking-wider text-white hover:bg-gray-500" data-bs-dismiss="modal" style="font-family: TBC Contractica CAPS regular; font-size: 10pt;">
                                                            <span class="mt-1">დახურვა</span>
                                                        </button>
                                                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-3 text-center border border-gray-200">
                                        <div class="flex items-center justify-center px-1">
                                            @if($employee->status == 'active' )
                                                <span class="bg-green-400 text-white px-3 rounded-full text-xs" style="font-family: TBC Contractica CAPS regular; padding-top: 10px; padding-bottom: 5px;">
                                                    აქტიური
                                                </span>
                                            @elseif($employee->status == 'inactive') 
                                                <span class="bg-gray-400 text-white px-3 rounded-full text-xs" style="font-family: TBC Contractica CAPS regular; padding-top: 10px; padding-bottom: 5px;">
                                                    არააქტიური
                                                </span>
                                            @elseif($employee->status == 'working') 
                                                <span class="bg-blue-400 text-white px-3 rounded-full text-xs" style="font-family: TBC Contractica CAPS regular; padding-top: 10px; padding-bottom: 5px;">
                                                    მუშაობს
                                                </span>
                                            @endif
                                        </div>
                                    </td>
                                    <td class="py-3 px-4 text-center border border-gray-200">
                                        <div class="flex item-center justify-center">
                                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <button data-bs-toggle="modal" data-bs-target="#employeeEditModal{{$key}}"  class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <button value="" class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110" data-bs-toggle="modal" data-bs-target="#deleteEmployee{{$key}}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                    <!-- Edit Modal -->
                                    <div class="modal fade" id="employeeEditModal{{$key}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel" style="font-family: TBC Contractica CAPS black; display: block; text-align: center; font-size: 16px;">
                                                    <!-- Edit Employee -->
                                                    რედატქირება
                                                </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('dashboard.editUser', $employee->id) }}" method="POST" id="edit_employee_form{{$key}}">

                                                        @csrf
                                                        @method('PUT')
                                                        <!-- First Name -->
                                                        <div id="first_name_div">
                                                            <!-- <x-label for="first_name" :value="__('First name')" /> -->
                                                            <label for="first_name" style="font-family: TBC Contractica CAPS medium; font-size: 10pt;"> სახელი </label>

                                                            <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" value="{{ $employee->first_name }}" autofocus />
                                                        </div>

                                                        <!-- Last Name -->
                                                        <div id="last_name_div" class="mt-4">
                                                            <!-- <x-label for="last_name" :value="__('Last name')" /> -->
                                                            <label for="last_name" style="font-family: TBC Contractica CAPS medium; font-size: 10pt;"> გვარი </label>

                                                            <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" value="{{ $employee->last_name }}" autofocus />
                                                        </div>

                                                        <!-- Select Option Rol type -->
                                                        <div class="mt-4" id="role_id_div" style="display: none">
                                                            <x-label for="role_id" value="{{ __('Register as:') }}" />
                                                            <select name="role_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                                                <option id="role_option_value" value="user"></option>
                                                            </select>
                                                        </div>

                                                        <div class="mt-4" id="role_id_div">
                                                            <!-- <x-label for="project_id" value="{{ __('Projects:') }}" /> -->
                                                            <label for="project_id" style="font-family: TBC Contractica CAPS medium; font-size: 10pt;"> პროექტები: </label>
                                                            <fieldset>
                                                                @if($employee->project_id)
                                                                    @foreach($projects as $project)
                                                                        @foreach($employee->project_id as $value)
                                                                            @if($value == $project->id)
                                                                                <p style="display: none;">{{ $checker = true }}</p>
                                                                            @endif
                                                                        @endforeach

                                                                        @if($checker) <input type="checkbox" name="project_id[]" value="{{ $project->id }}" checked /> {{ $project->project_name }} <br>
                                                                        @else <input type="checkbox" name="project_id[]" value="{{ $project->id }}" /> {{ $project->project_name }} <br>
                                                                        @endif
                                                                        <p style="display: none;">{{ $checker = false }}</p> 
                                                                    @endforeach
                                                                @else
                                                                    @foreach($projects as $project)
                                                                        <input type="checkbox" name="project_id[]" value="{{ $project->id }}" /> {{ $project->project_name }} <br>
                                                                    @endforeach
                                                                @endif
                                                            </fieldset>
                                                        </div>

                                                        <!-- Company ID -->
                                                        <div class="mt-4" style="display: none;">
                                                            <x-label for="company_id" :value="__('Company ID')" />

                                                            <input id="company_id" class="block mt-1 w-full" type="text" name="company_id" value="{{ Auth::user()->id  }}" />
                                                        </div>

                                                        <!-- Email Address -->
                                                        <div class="mt-4" style="display: none;">
                                                            <x-label for="email" :value="__('Email')" />

                                                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ $employee->email }}" required />
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="float-right bg-green-400 mx-3 px-3 py-2.5 font-semibold tracking-wider text-white hover:bg-green-500" form="edit_employee_form{{$key}}" style="font-family: TBC Contractica CAPS regular; font-size: 10pt;">
                                                        <span class="mt-1">რედატქირება</span>
                                                    </button>
                                                    <!-- <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button> -->
                                                    <button class="bg-gray-400 mx-3 px-3 py-2.5 font-semibold tracking-wider text-white hover:bg-gray-500" data-bs-dismiss="modal" style="font-family: TBC Contractica CAPS regular; font-size: 10pt;">
                                                        <span class="mt-1">დახურვა</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Delete Modal -->
                                    <div class="modal fade" id="deleteEmployee{{$key}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel" style="font-family: TBC Contractica CAPS black;">წაშლა</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p style="font-family: TBC Contractica CAPS regular;">ნამდვილად გსურთ ჩანაწერის წაშლა?</p>
                                                    <form action="{{ route('dashboard.deleteUser', $employee->id) }}" method="POST" id="delete_employee_form">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="float-right bg-red-400 mx-3 px-3 py-2.5 font-semibold tracking-wider text-white hover:bg-red-500" form="delete_employee_form" style="font-family: TBC Contractica CAPS regular; font-size: 10pt;">
                                                        <span class="mt-1">წაშლა</span>
                                                    </button>
                                                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                                    <button class="bg-gray-400 mx-3 px-3 py-2.5 font-semibold tracking-wider text-white hover:bg-gray-500" data-bs-dismiss="modal" style="font-family: TBC Contractica CAPS regular; font-size: 10pt;">
                                                        <span class="mt-1">დახურვა</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>