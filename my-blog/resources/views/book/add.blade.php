<x-app-layout>
    <div class="p-2 m-2">
        @if (session('success'))
            <div class="bg-green-200 text-green-800 p-4 mb-4">
                {{ session('success') }}
            </div>
        @endif

        <h1 class="mt-4">Add Book</h1>

        <form action="{{ route('book.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label for="title" class="block">Title</label>
                <input type="text" name="title" id="title" class="w-full p-2 border border-gray-300 rounded"
                    required>
            </div>

            <div class="mb-4">
                <label for="authors" class="block">Authors</label>
                <select name="user_ids[]" id="user_ids" class="w-full p-2 border border-gray-300 rounded" multiple
                    required>
                    @foreach ($authors as $author)
                        <option value="{{ $author->id }}">{{ $author->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="description" class="block">Description:</label>
                <textarea name="description" id="description" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
            </div>
            </select>
            <div class="mb-4">
                <label for="type_book"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type:</label>
                <select name="type_book" id="type_book"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="book">book</option>
                    <option value="research">research</option>

                </select>
            </div>
            <div class="mb-4">
                <label for="specialization" class="block">Specialization:</label>
                <input type="text" name="specialization" id="specialization"
                    class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div class="mb-4">
                <label for="department" class="block">Department:</label>
                <input type="text" name="department" id="department"
                    class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div class="mb-4">

                    <div class="flex items-center justify-center w-full">
                        <label for="dropzone-file"
                            class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to
                                        upload</span> or drag and drop</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">PDF OR DOCX (MAX. 2048)</p>
                            </div>
                            <input id="dropzone-file" type="file" class="hidden" name="pdf"/>
                        </label>
                    </div>

            </div>
            <div class="mb-4">
                <button type="submit" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 ">Add Book</button>
            </div>
        </form>
    </div>
</x-app-layout>
