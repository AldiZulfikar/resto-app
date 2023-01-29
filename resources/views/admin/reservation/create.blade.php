<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">  
                <form method="POST" action="{{route('admin.reservation.store')}}">
                    @csrf
                    <div class="mb-6">
                        <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                        <input type="text" name="first_name" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @error('first_name')
                            <div class="text-sm font-medium text-gray-900 dark:text-white">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                        <input type="text" name="last_name" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @error('last_name')
                            <div class="text-sm font-medium text-gray-900 dark:text-white">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" name="email" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @error('email')
                            <div class="text-sm font-medium text-gray-900 dark:text-white">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telepone</label>
                        <input type="text" name="tel_number" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @error('tel_number')
                            <div class="text-sm font-medium text-gray-900 dark:text-white">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Reservation</label>
                        <input type="datetime-local" name="res_date" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @error('res_date')
                            <div class="text-sm font-medium text-gray-900 dark:text-white">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Guest Number</label>
                        <input type="number" name="guest_number" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @error('guest_number')
                            <div class="text-sm font-medium text-gray-900 dark:text-white">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Table</label>
                        <select name="table_id" type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @foreach ($tables as $table)
                            <option value="{{$table->id}}">{{$table->name}}</option>
                            @endforeach
                        </select>
                        @error('table_id')
                            <div class="text-sm font-medium text-gray-900 dark:text-white">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    <a href="{{route('admin.reservation.index')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Cancel
                    </a>
                </form>
        </div>
    </div>
</x-admin-layout>
