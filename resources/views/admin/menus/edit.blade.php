<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">  
                <form method="POST" action="{{route('admin.menus.update', $menu->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                    <div class="mb-6">
                        <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                        <input name="name" value="{{$menu->name}}" type="text" id="base-input" class="@error('name') border-red-400 @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @error('name')
                            <div class="text-sm font-medium text-gray-900 dark:text-white">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-6">                    
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Image</label>
                        <img src="{{Storage::url($menu->image)}}" class="w-20 h-20 rounded mb-2" alt="">
                        <input name="image" class="@error('image') border-red-400 @enderror block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 p-2.5 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                        @error('image')
                            <div class="text-sm font-medium text-gray-900 dark:text-white">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-6">                    
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Price</label>
                        <input name="price" value="{{$menu->price}}" class="@error('price') border-red-400 @enderror block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 p-2.5 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="number">
                        @error('price')
                            <div class="text-sm font-medium text-gray-900 dark:text-white">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                        <textarea name="description" id="message" rows="4" class="@error('description') border-red-400 @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{$menu->description}}</textarea>
                        @error('description')
                            <div class="text-sm font-medium text-gray-900 dark:text-white">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                        <select name="categories[]" multiple type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}" @selected($menu->categories->contains($category))>{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    <a href="{{route('admin.menus.index')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Cancel
                    </a>
                </form>
        </div>
    </div>
</x-admin-layout>
