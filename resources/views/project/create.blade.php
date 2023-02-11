<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard | Project | Create') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('project.store') }}" method="post" enctype="multipart/form-data"
                        class="flex justify-center items-center flex-col">
                        @if ($errors->any())
                            <div class="alert alert-error flex flex-col gap-1 ">
                                <p><strong>Opps Something went wrong</strong></p>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @csrf
                        <div class="form-control">
                            <div class="input-group mb-3">
                                <span>Pick Slug</span>
                                <select class="select select-bordered" name="local_id">
                                    @foreach ($locals as $local)
                                        <option selected value="{{ $local->id }}">{{ $local->slug }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <label class="input-group mb-3">
                                <span>Title</span>
                                <input name="title" type="text" placeholder="Project Title"
                                    class="input input-bordered" required />
                            </label>
                            <label class="input-group mb-3">
                                <span>Link Github</span>
                                <input name="link_github" type="url" placeholder="Github Link"
                                    class="input input-bordered" required />
                            </label>
                            <label class="input-group mb-3">
                                <span>Picture</span>
                                <input name="image" type="file" placeholder="Image" class="input input-bordered"
                                    required accept="image/*" />
                            </label>
                            <button type="submit" class="btn btn-success">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
