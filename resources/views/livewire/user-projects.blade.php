<div>
    <div class="p-6 bg-white border-b border-gray-200">

        <p style="font-family: TBC Contractica CAPS black, sans-serif; font-size: 18pt; font-weight: bold;">
            პროექტები
        </p>

        <div class="px-2 mt-3 mb-3" style="width: 100%; height: auto; display: flex;">
            <div class="row w-full" style="margin: auto;">
                @if($Project == "all")
                    <div class="col-12">
                        <div
                            wire:click="changeProject('all')"
                            class="border-2 border-green-300 my-3 mr-3 shadow-md bg-gray-50 transform duration-700 hover:-translate-y-2 cursor-pointer"
                            style="width: 100%; border-radius: 10px; margin: auto;"
                        >
                            <p class="my-1" style="font-family: TBC Contractica CAPS regular; font-size: 12pt; font-weight: bold; text-align: center; padding-top: 5px;">ყველა პროექტი</p>               
                        </div>
                    </div>
                @else
                <div class="col-12">
                    <div
                        wire:click="changeProject('all')"
                        class="border-1 my-3 mr-3 shadow-md bg-gray-50 transform duration-700 hover:-translate-y-2 cursor-pointer"
                        style="width: 100%; border-radius: 10px; margin: auto;"
                    >
                        <p class="my-1" style="font-family: TBC Contractica CAPS regular; font-size: 12pt; font-weight: bold; text-align: center; padding-top: 5px;">ყველა პროექტი</p>               
                    </div>
                </div>
                @endif

                @foreach($projects as $project)
                    @if($Project == $project->project_name)
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div
                                wire:click="changeProject({{$project}})"
                                class="border-2 border-green-500 my-3 mr-3 shadow-md bg-gray-50 transform duration-700 hover:-translate-y-4 cursor-pointer"
                                id="project{{ $project->id }}"
                                style="width: 140px; height: 140px; border-radius: 10px; margin: auto;"
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
                    @else
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div
                                wire:click="changeProject({{$project}})"
                                class="border-1 my-3 mr-3 shadow-md bg-gray-50 transform duration-700 hover:-translate-y-4 cursor-pointer"
                                id="project{{ $project->id }}"
                                style="width: 140px; height: 140px; border-radius: 10px; margin: auto;"
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
                    @endif
                @endforeach
            </div>
        </div>
        <p class="mb-2 ml-2" style="font-family: TBC Contractica CAPS regular, sans-serif; font-size: 14pt; font-weight: bold;">
            @if($Project != 'all') {{ $Project }}
            @else ყველა პროექტი
            @endif
        </p>
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
                        სტატუსი
                    </th>
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
                @foreach($works as $work)
                    @if($work->status == 'working')
                        <tr class="border border-green-200 hover:bg-white" style="border-spacing: 5em;">
                            <td class="py-3 px-3 text-left whitespace-nowrap border border-gray-200" style="border-bottom: 1em;">
                                <div class="flex items-center">
                                    <span class="font-medium" style="color: #34D399;">
                                        @php
                                            $start = explode(" ", $work->created_at);
                                        @endphp
                                        {{ $start[0] }}
                                    </span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left border border-gray-200">
                                <div class="flex items-center font-medium">
                                    <span style="color: #34D399;"> 
                                        @php
                                            $start = explode(" ", $work->created_at);
                                        @endphp
                                        {{ $start[1] }}
                                    </span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center border border-gray-200">
                                <div class="flex items-center justify-center font-medium" style="color: #34D399;">
                                    @if($work->finishedAt)
                                        {{ $work->finishedAt }}
                                    @else null
                                    @endif
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center border border-gray-200">
                                <span class="font-medium" style="color: #34D399;">
                                    {{ gmdate("H", $work->total_time) }} სთ. {{ gmdate("i", $work->total_time) }} წთ.
                                </span>
                            </td>
                            <td class="py-3 px-6 text-center border border-gray-200">
                                <span class="font-medium" style="color: #34D399;">
                                    {{ $work->status }}
                                </span>
                            </td>
                        </tr>
                    @else
                        <tr class="border border-gray-200 hover:bg-white" style="border-spacing: 5em;">
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
</div>
