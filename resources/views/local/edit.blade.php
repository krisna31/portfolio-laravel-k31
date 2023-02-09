<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard | Local') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 flex flex-col items-center">
                    <h1 class="text-2xl mb-3">Edit Data In Local</h1>
                    <form action="{{ route('local.edit') }}" class="form-control" method="POST">
                        @csrf
                        @method('PUT')
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
                        <label class="label">
                            <span class="label-text">Slug</span>
                        </label>
                        <label class="input-group">
                            <span>Slug</span>
                            <input name="slug" autofocus type="text" placeholder="slug"
                                class="input input-bordered" value="{{ old('slug', $local->slug) }}" />
                        </label>
                        <label class="label">
                            <span class="label-text">Landing Text</span>
                        </label>
                        <label class="input-group">
                            <span>Landing Text</span>
                            <input name="landing_text" type="text" placeholder="Landing Text"
                                class="input input-bordered" value="{{ old('landing_text', $local->landing_text) }}" />
                        </label>
                        <label class="label">
                            <span class="label-text">Landing Body</span>
                        </label>
                        <label class="input-group">
                            <span>Landing Body</span>
                            <input name="landing_body" type="text" placeholder="Landing Body"
                                class="input input-bordered" value="{{ old('landing_body', $local->landing_body) }}" />
                        </label>
                        <label class="label">
                            <span class="label-text">Intro Text</span>
                        </label>
                        <label class="input-group">
                            <span>Intro Text</span>
                            <input name="intro_text" type="text" placeholder="Intro Text"
                                class="input input-bordered" value="{{ old('intro_text', $local->intro_text) }}" />
                        </label>
                        <label class="label">
                            <span class="label-text">Contact Me Text</span>
                        </label>
                        <label class="input-group">
                            <span>Contact Me Text</span>
                            <input name="contact_me_text" type="text" placeholder="Contact Me Text"
                                class="input input-bordered"
                                value="{{ old('contact_me_text', $local->contact_me_text) }}" />
                        </label>
                        <label class="label">
                            <span class="label-text">Contact Me Link</span>
                        </label>
                        <label class="input-group">
                            <span>Contact Me Link</span>
                            <input name="contact_me_link" type="text" placeholder="Contact Me Link"
                                class="input input-bordered"
                                value="{{ old('contact_me_link', $local->contact_me_link) }}" />
                        </label>
                        <label class="label">
                            <span class="label-text">Bio Title</span>
                        </label>
                        <label class="input-group">
                            <span>Bio Title</span>
                            <input name="bio_title" type="text" placeholder="Bio Title" class="input input-bordered"
                                value="{{ old('bio_title', $local->bio_title) }}" />
                        </label>
                        <label class="label">
                            <span class="label-text">Bio Body</span>
                        </label>
                        <label class="input-group">
                            <span>Bio Body</span>
                            <input name="bio_body" type="text" placeholder="Bio Body" class="input input-bordered"
                                value="{{ old('bio_body', $local->bio_body) }}" />
                        </label>
                        <label class="label">
                            <span class="label-text">Qoute Text</span>
                        </label>
                        <label class="input-group">
                            <span>Qoute Text</span>
                            <input name="quote_text" type="text" placeholder="Qoute Text"
                                class="input input-bordered" value="{{ old('quote_text', $local->quote_text) }}" />
                        </label>
                        <label class="label">
                            <span class="label-text">Quote Name</span>
                        </label>
                        <label class="input-group">
                            <span>Quote Name</span>
                            <input name="quote_name" type="text" placeholder="Quote Name"
                                class="input input-bordered" value="{{ old('quote_name', $local->quote_name) }}" />
                        </label>
                        <label class="label">
                            <span class="label-text">Social Text</span>
                        </label>
                        <label class="input-group">
                            <span>Social Text</span>
                            <input name="social_text" type="text" placeholder="Social Text"
                                class="input input-bordered" value="{{ old('social_text', $local->social_text) }}" />
                        </label>
                        <label class="label">
                            <span class="label-text">Footer</span>
                        </label>
                        <label class="input-group">
                            <span>Footer</span>
                            <input name="footer" type="text" placeholder="Footer" class="input input-bordered"
                                value="{{ old('footer', $local->footer) }}" />
                        </label>
                        <button type="submit" class="btn btn-success mt-6">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
