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
                    <h1 class="text-2xl mb-3">Data that is stored in the database</h1>
                    <div class="overflow-x-auto">
                        <table class="table table-compact w-full">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Slug</th>
                                    <th>Footer</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($locals as $local)
                                    <tr>
                                        <td class="border px-4 py-2">{{ $local->id }}</td>
                                        <td class="border px-4 py-2">{{ $local->slug }}</td>
                                        <td class="border px-4 py-2">{{ $local->footer }}</td>
                                        <td class="border px-4 py-2">{{ $local->created_at }}</td>
                                        <td class="border px-4 py-2">{{ $local->updated_at }}</td>
                                        <td class="border px-4 py-2">
                                            <div class="btn-group btn-group-vertical lg:btn-group-horizontal">
                                                <a href="{{ route('local.show', $local) }}"
                                                    class="btn btn-info">View</a>
                                                <button class="btn btn-warning">Edit</button>
                                                <button class="btn btn-error">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Slug</th>
                                    <th>Footer</th>
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
