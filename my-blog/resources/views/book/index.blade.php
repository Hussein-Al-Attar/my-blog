<x-app-layout>
    <div class="container p-4">
        <h1 class="mt-4">Book List</h1>
        @foreach ($books as $book)
            <div class="bg-white rounded-lg shadow-lg my-4 p-2 mb-2">
                <div class="bg-gray-200 px-4 py-2">{{ $book->title }}</div>
                <div class="px-4 py-2">
                    <h2 class="text-xl font-bold">{{ $book->title }}</h2>
                    <ul>
                        @foreach ($book->users as $user)
                            <li>{{ $user->name }}</li>
                        @endforeach
                    </ul>
                    <p class="text-sm m-1">Description: {{ $book->description }}</p>
                    <p class="text-sm">Type: {{ $book->type_book }}</p>
                    <p class="text-sm">Department: {{ $book->department }}</p>
                    <p class="text-sm">Specialization: {{ $book->specialization }}</p>
                    <a href="{{ route('books.pdf', ['id' => $book->id]) }}">
                        <button type="button"
                            class="inline-flex items-center px-4 py-2 text-sm font-medium
                             text-gray-900 bg-white border border-gray-200 rounded hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                            <svg class="w-3 h-3 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M14.707 7.793a1 1 0 0 0-1.414 0L11 10.086V1.5a1 1 0 0 0-2 0v8.586L6.707 7.793a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.416 0l4-4a1 1 0 0 0-.002-1.414Z" />
                                <path
                                    d="M18 12h-2.55l-2.975 2.975a3.5 3.5 0 0 1-4.95 0L4.55 12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z" />
                            </svg>
                            Downloads
                        </button></a>

                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>
