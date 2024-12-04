<div class="flex justify-center items-center min-h-screen bg-gray-100">
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
        <h1 class="text-2xl font-bold mb-4 text-gray-700 text-center">To-Do List</h1>
        <form wire:submit.prevent="addTodo" class="flex flex-col space-y-4">
            <div class="relative">
                <input
                    type="text"
                    wire:model="todo"
                    placeholder="Enter a new task"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-indigo-200 focus:outline-none text-gray-700"
                >
            </div>
            <div class="relative">

                @error('todo')
                    <span class="text-sm text-red-600 mt-1 absolute bottom-0 left-0">{{ $message }}</span>
                @enderror
            </div>

            <button
                type="submit"
                class="px-6 py-2 bg-indigo-500 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-600 focus:outline-none focus:ring focus:ring-indigo-300">
                Add
            </button>
        </form>
        <ul class="mt-4">
            @foreach ($todos as $todo)
                <li>{{ $todo }}</li>
            @endforeach
        </ul>
    </div>
</div>
