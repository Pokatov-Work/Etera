<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Pages') }}
        </h2>
    </x-slot>

    <div class="mt-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
{{--            <a class="btn btn-primary" href="/admin/pages/create" role="button">Add new page</a>--}}
            <a class="btn btn-primary" href="{{ route('pages.create') }}" role="button">Add new page</a>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3>List pages</h3>
                    <hr>
                    <div class="mt-4">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Slug</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($pages as $key => $page)
                                <tr>
                                    <th scope="row"><a class="nav-link" href="{{ $page->slug }}">{{ $page->id }}</a></th>
                                    <td><a class="nav-link" href="{{ $page->slug }}">{{ $page->name }}</a></td>
                                    <td>{{ $page->slug }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
