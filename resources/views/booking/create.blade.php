<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Booking') }}
        </h2>
        <a href="{{ route('booking.index') }}" class="float-right bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded" style="position:relative; top: -33px">
            Back?
        </a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- INI TEMPLATE TAILWIND CSS -->
                <form method="POST" action="{{ route('booking.index') }}">
                    @csrf
                    <div class="flex justify-center pt-10">
                        <div>
                            <div class="form-floating pb-3 mb-3 xl:w-96 text-2xl text-center">
                                <h1><b>Booking Ticket Hotel<b></h1>
                            </div>
                            <div class="form-floating mb-3 xl:w-96">
                                <input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="name" placeholder="Nama" required>
                            </div>
                            <div class="form-floating mb-3 xl:w-96">
                                <input type="number" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="no_guest" placeholder="Jumlah Tamu" required>
                            </div>
                            <div class="form-floating mb-3 xl:w-96">
                                <select class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="room_type" required>
                                    <option value="">Please Choose!</option>
                                    <option value="Standard Room">Standard Room</option>
                                    <option value="Superior Room">Superior Room</option>
                                    <option value="Deluxe Room">Deluxe Room</option>
                                    <option value="Family Room">Family Room</option>
                                    <option value="Presidential Suite">Presidential Suite</option>
                                </select>
                            </div>
                            <div class="form-floating mb-3 xl:w-96">
                                <input type="email" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="email" placeholder="Email address" required>
                            </div>
                            <div class="form-floating mb-3 xl:w-96">
                                <input type="tel" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="phone_number" placeholder="Nomor Telepon" required>
                            </div>
                            <div>
                                <input class="text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"type="date" name="date_checkin_at" placeholder="Check in" required>
                                <input class="text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"type="date" name="date_checkout_at"placeholder="Check in" required>
                            </div>
                            <div class="pt-3 pb-5">
                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded"  type="submit">
                                    Submit   
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- DONE -->
            </div>
        </div>
    </div>
</x-app-layout>
