<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Booking Details') }}
        </h2>
        <a href="{{ route('booking.index') }}" class="float-right bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded" style="position:relative; top: -33px">
            Back?
        </a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- INI TEMPLATE TAILWIND CSS -->

                <!-- DONE -->
            </div>
        </div>
    </div>
</x-app-layout>
