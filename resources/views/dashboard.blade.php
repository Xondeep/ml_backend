<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @elseif (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-4">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-center">Skin Cancer Detection</h1>
                    <form id="upload-form" action="{{ route('upload.image') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="image-upload">Upload an image</label>
                            <input type="file" class="form-control-file" id="image-upload" name="image" accept="image/*" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Upload Image</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
