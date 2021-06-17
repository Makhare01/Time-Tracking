<div>
@foreach($projects as $key => $project)
    @php
        $random_keys = array_rand($colors, 3);
    @endphp
    <div class="project flex my-4">
        <button type="button" class="flex" data-bs-toggle="modal" data-bs-target="#exampleProjectModal{{$key}}">
            <div class="project-icon {{ $colors[$random_keys[0]] }}">
                <p> {{ strtoupper($project->project_name[0]) }}{{ strtoupper($project->project_name[1]) }} </p>
            </div>
            <p class="all-employess-text">{{ $project->project_name }} </p>
        </button>
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="exampleProjectModal{{$key}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content" style="border-radius: 10px !important; background-color: #F3F4F6 !important;">
                <div class="modal-header" style="border: none !important;">
                    <h5 class="modal-title" id="exampleModalLabel" style="font-family: TBC Contractica CAPS regular; font-size: 10pt; font-weight: bold;"> 
                        <!-- Project start date:  --> პროექტის დაწყების თარიღი
                        <i> {{ $project->created_at }} </i>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h1 style="font-weight: bold; font-size: 24px; text-align: center;">{{ $project->project_name }}</h1>
                    <p style="font-family: TBC Contractica CAPS regular; padding: 10px; font-size: 14px;">  
                        <!-- Description:  -->აღწერა:
                    <i> {{ $project->description }} </i> </p>
                    <div class="my-5" style="width: 100%; display: flex;">
                        <p style="font-family: TBC Contractica CAPS regular; font-weight: bold; font-size: 18px;">
                            <!-- Project Members: -->
                            პროექტის წევრები
                        </p>
                        <!-- <button type="button" class="focus:outline-none text-green-600 text-sm py-2.5 px-5 rounded-md hover:bg-green-100" style="margin-left: auto; order: 2;">Add member</button> -->
                    </div>

                    <table class="min-w-max w-full table-auto border border-gray-200">
                        <thead>
                            <tr class="bg-transparent text-gray-600 uppercase text-sm leading-normal border border-transparent">
                                <th class="py-3 px-6 text-left border border-gray-200" style="font-family: TBC Contractica CAPS regular;">
                                    <!-- Employee -->
                                    თანამშრომელი
                                </th>
                                <th class="py-3 px-6 text-center border border-gray-200" style="font-family: TBC Contractica CAPS regular;">
                                    <!-- Working Times -->
                                    სამუშაო დროები
                                </th>
                                <th class="py-3 px-6 text-center border border-gray-200" style="font-family: TBC Contractica CAPS regular;">
                                    <!-- Status -->
                                    სტატუსი
                                </th>
                                <th class="py-3 px-6 text-center border border-gray-200" style="font-family: TBC Contractica CAPS regular;">
                                    <!-- Actions -->
                                    მოქმედება
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                            @foreach($employees as $key => $employee)
                                @foreach($employee->project_id as $userProject)
                                    @if($userProject == $project->id)
                                        <tr class="border border-gray-200 hover:bg-white" style="border-spacing: 5em;">
                                            <td class="py-3 px-6 text-left border border-gray-200">
                                                <div class="flex items-center">
                                                    <div class="mr-2">
                                                        <img class="w-6 h-6 rounded-full" src="https://randomuser.me/api/portraits/men/1.jpg"/>
                                                    </div>
                                                    <span> 
                                                        {{ $employee->first_name }} 
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="py-3 px-6 text-center border border-gray-200">
                                                <div class="flex items-center justify-center">
                                                    <span class="bg-indigo-200 text-white text-semibold px-3 rounded-full text-xs cursor-pointer" style="font-family: TBC Contractica CAPS regular; padding-top: 10px; padding-bottom: 5px;">
                                                        დროები
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="py-3 px-6 text-center border border-gray-200">
                                                <!-- <span class="bg-green-400 text-white py-1 px-3 rounded-full text-xs">
                                                    აქტიური
                                                </span> -->
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
                                            <td class="py-3 px-6 text-center border border-gray-200">
                                                <div class="flex item-center justify-center">
                                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                        <form action="{{ route('dashboard.deleteUserFormProject', ['id' => $employee->email, 'project_id' => $project->id]) }}" method="POST">
                                                            @csrf
                                                            @method('PATCH')
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
                                    @endif
                                @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">Edit Project</button> -->
                    <select wire:change="changeStatus($event.target.value, {{$project->id}})" class="form-select" aria-label="Default select example">
                        @if($project->project_status == 'active')
                            <option selected>აქტიური</option>
                        @elseif($project->project_status == 'suspended')
                            <option selected>შეჩერებული</option>
                        @elseif($project->project_status == 'finished')
                            <option selected>დასრულებული</option>
                        @endif
                        <!-- <option selected>{{ $project->project_status }}</option> -->
                        <option value="active">აქტიური</option>
                        <option value="suspended">შეჩერებული</option>
                        <option value="finished">დასრულებული</option>
                    </select>
                    
                    <!-- <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteProject{{$project->id}}">პროექტის წაშლა</button> -->
                    <button type="button" data-bs-toggle="modal" data-bs-target="#deleteProject{{$project->id}}" class="float-right bg-red-400 mx-3 px-3 py-2.5 font-semibold tracking-wider text-white hover:bg-red-500" style="font-family: TBC Contractica CAPS regular; font-size: 10pt;">
                        <span class="mt-1">პროექტის წაშლა</span>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="deleteProject{{$project->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel" style="font-family: TBC Contractica CAPS black;">პროექტის წაშლა</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p style="font-family: TBC Contractica CAPS regular;">  
                                ნამდვილად გსურთ პროექტ " {{ $project->project_name }}"-ის წაშლა?
                            </p>
                        </div>
                        <div class="modal-footer">
                            <!-- <button wire:click="deleteProject({{$project->id}})" data-bs-dismiss="modal" type="button" class="btn btn-outline-danger">წაშლა</button> -->
                            <button type="submit" wire:click="deleteProject({{$project->id}})" data-bs-dismiss="modal" type="button" class="float-right bg-red-400 mx-3 px-3 py-2.5 font-semibold tracking-wider text-white hover:bg-red-500" form="add_project_form" style="font-family: TBC Contractica CAPS regular; font-size: 10pt;">
                                <span class="mt-1">წაშლა</span>
                            </button>
                            <button class="bg-gray-400 mx-3 px-3 py-2.5 font-semibold tracking-wider text-white hover:bg-gray-500" data-bs-dismiss="modal" style="font-family: TBC Contractica CAPS regular; font-size: 10pt;">
                                <span class="mt-1">დახურვა</span>
                            </button>
                        </div>
                        </div>
                    </div>
                    </div>

                    <!-- <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button> -->
                    <!-- <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">დახურვა</button> -->
                    <button class="bg-gray-400 mx-3 px-3 py-2.5 font-semibold tracking-wider text-white hover:bg-gray-500" data-bs-dismiss="modal" style="font-family: TBC Contractica CAPS regular; font-size: 10pt;">
                        <span class="mt-1">დახურვა</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endforeach
</div>
