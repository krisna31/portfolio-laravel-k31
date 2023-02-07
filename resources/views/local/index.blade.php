<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard | Content') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-2xl mb-3">Data that is stored in the database.</h1>
                    {{-- create table ui with tailwind --}}
                    <table class="table-auto">
                        <thead>
                            <tr>
                                {{-- <th class="px-4 py-2">ID</th>
                                <th class="px-4 py-2">Slug</th> --}}
                                <th class="px-4 py-2">Intro Text</th>
                                <th class="px-4 py-2">contact me text</th>
                                <th class="px-4 py-2">contact me link</th>
                                <th class="px-4 py-2">bio title</th>
                                <th class="px-4 py-2">bio body</th>
                                <th class="px-4 py-2">project title</th>
                                <th class="px-4 py-2">project list</th>
                                <th class="px-4 py-2">quote text</th>
                                <th class="px-4 py-2">quote name</th>
                                <th class="px-4 py-2">social text</th>
                                <th class="px-4 py-2">social list</th>
                                <th class="px-4 py-2">social footer</th>
                                <th class="px-4 py-2">Created At</th>
                                <th class="px-4 py-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($locals as $local)
                                {{ dd($local->projects) }}
                                {{ $projects = $local->projects }}
                                {{ $socmed = $local->socmeds }}
                                <tr>
                                    {{-- <td class="border px-4 py-2">{{ $local->id }}</td>
                                    <td class="border px-4 py-2">{{ $local->slug }}</td> --}}
                                    <td class="border px-4 py-2">{{ $local->intro_text }}</td>
                                    <td class="border px-4 py-2">{{ $local->contact_me_text }}</td>
                                    <td class="border px-4 py-2">{{ $local->contact_me_link }}</td>
                                    <td class="border px-4 py-2">{{ $local->bio_title }}</td>
                                    <td class="border px-4 py-2">{{ $local->bio_body }}</td>
                                    <td class="border px-4 py-2">{{ $local->project_title }}</td>
                                    <td class="border px-4 py-2">{{ $projects->id ?? 'default' }}</td>
                                    <td class="border px-4 py-2">{{ $local->qoute_text }}</td>
                                    <td class="border px-4 py-2">{{ $local->quote_name }}</td>
                                    <td class="border px-4 py-2">{{ $local->social_text }}</td>
                                    <td class="border px-4 py-2">{{ $socmed->id ?? 'default' }}</td>
                                    <td class="border px-4 py-2">{{ $local->footer }}</td>
                                    <td class="border px-4 py-2">{{ $local->created_at }}</td>
                                    <td class="border px-4 py-2">
                                        {{-- create button ui with tailwind --}}
                                        <button>View</button>
                                        <button>Edit</button>
                                        <button>Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
