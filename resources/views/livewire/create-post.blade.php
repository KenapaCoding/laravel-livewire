<div class="flex flex-col m-8 gap-4">
    <h1 class="text-xl font-bold">Create Post</h1>
    <form wire:submit="save" class="flex flex-col gap-2 xl:w-1/2">
        <label for="title">
            <span class="text-sm font-medium text-gray-700"> Title </span>

            <input
                wire:model="title"
                type="text"
                id="title"
                name="title"
                class="p-2 mt-0.5 w-full rounded border-1 border-gray-500 shadow-sm sm:text-sm"
            />
            @error('title')
                <div class="text-red-500">{{$message}}</div>
            @enderror
        </label>
        <label for="content">
            <span class="text-sm font-medium text-gray-700"> Content </span>

            <textarea
                wire:model="content"
                id="content"
                name="content"
                class="p-2 mt-0.5 w-full resize-none rounded border-gray-500 border-1 shadow-sm sm:text-sm"
                rows="4"
            ></textarea>
            @error('content')
                <div class="text-red-500">{{$message}}</div>
            @enderror
        </label>
        <div>
            <button
            class="group relative inline-block text-sm font-medium text-white focus:ring-3 focus:outline-hidden"
            type="submit"
            >
                <span class="absolute inset-0 border border-red-600"></span>
                <span
                    class="block border border-red-600 bg-red-600 px-12 py-3 transition-transform group-hover:-translate-x-1 group-hover:-translate-y-1"
                >
                    Submit
                </span>
            </button>
        </div>
    </form>
</div>
