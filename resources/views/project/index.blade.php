<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard | Project') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('project.create') }}"
                class="btn btn-success btn-xs sm:btn-sm md:btn-md lg:btn-lg aspect-video mb-6">Create</a>
            @if (session()->has('success'))
                <div class="alert alert-success shadow-lg mb-6">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>{{ session('success') }}</span>
                    </div>
                </div>
            @endif
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-2xl mb-3">Project that is stored in the database</h1>
                    <div class="overflow-x-auto">
                        <table class="table table-compact w-full">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Belongs To Slug</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($projects as $project)
                                    <tr>
                                        <td class="border px-4 py-2">{{ $project->id }}</td>
                                        <td class="border px-4 py-2">{{ $project->local->slug }}</td>
                                        <td class="border px-4 py-2">{{ $project->created_at }}</td>
                                        <td class="border px-4 py-2">{{ $project->updated_at }}</td>
                                        <td class="border px-4 py-2">
                                            <div class="btn-group btn-group-vertical lg:btn-group-horizontal">
                                                <a href="{{ route('project.show', $project) }}">
                                                    <button class="btn btn-info">View</button></a>
                                                <a href="{{ route('project.edit', $project) }}">
                                                    <button class="btn btn-warning">Edit</button></a>
                                                <label for="{{ $project->id }}" class="btn btn-error">
                                                    Delete
                                                </label>
                                                <input type="checkbox" id="{{ $project->id }}"
                                                    class="modal-toggle" />
                                                <label for="{{ $project->id }}"
                                                    class="modal modal-bottom sm:modal-middle">
                                                    <div class="modal-box relative">
                                                        <label for="{{ $project->id }}"
                                                            class="btn btn-sm rounded-full absolute right-2 top-2">✕</label>
                                                        <h3 class="font-bold text-lg">Are you sure to delete
                                                            {{ $project->id }}</h3>
                                                        <div class="modal-action">
                                                            <form action="{{ route('project.destroy', $project) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-error"
                                                                    type="submit">Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Belongs To Slug</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
