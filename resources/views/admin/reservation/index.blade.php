<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <h1 class="text-white dark:text-white text-3xl">List of Reservation</h1>
            <div class="flex justify-end mb-2 pb-2">
                <a href="{{route('admin.reservation.create')}}" class="text-white dark:text-white px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg">
                    New Table
                </a>
            </div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Telepon
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Reservation
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Table
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Guest Number
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reservation as $item)
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{$item->first_name.' '.$item->last_name}}
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{$item->email}}
                            </th>
                            <td class="px-6 py-4">
                                {{$item->tel_number}}
                            </td>
                            <td class="px-6 py-4">
                                {{$item->res_date}}
                            </td>
                            <td class="px-6 py-4">
                                {{$item->table->name}}
                            </td>
                            <td class="px-6 py-4">
                                {{$item->guest_number}}
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex space-x-2">
                                    <a href="{{route('admin.reservation.edit', $item->id)}}" class="font-medium text-white dark:text-gray-900 px-2 py-1 bg-white hover:bg-gray-600 hover:text-white rounded-lg">Edit</a>
                                    <form action="{{route('admin.reservation.destroy', $item->id)}}" 
                                        method="POST" 
                                        class="font-medium text-white dark:text-gray-900 px-2 py-1 bg-white hover:bg-gray-600 hover:text-white rounded-lg"
                                        onsubmit="return confirm('Are you sure?')"
                                        >
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
