<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Новая страница
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <form action="{{ route('pages.store') }}" method="post" class="row g-3">
                        @csrf
                        <div class="mb-3 col-md-6">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Title page">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" name="slug" class="form-control" id="slug" placeholder="Slug page">
                        </div>
                        <div class="mb-3 col-md-8">
                            <label for="config" class="form-label">Configuration</label>
                            <input type="text" name="config-model" class="form-control" id="config" placeholder="app/model/Test">
                        </div>
                        <div class="mb-3 col-md-8">
                            <input type="text" name="config-view" class="form-control" id="config" placeholder="pages.test">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" name="active" class="form-check-input" id="active">
                            <label class="form-check-label" for="active">Active</label>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-outline-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
