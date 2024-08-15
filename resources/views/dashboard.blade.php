<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                    {{__("lang.welcome")}}
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{url('lang/hi')}}" style="margin: 12px;">Hindi</a>
                    <a href="{{url('lang/en')}}" style="margin: 12px;">English</a>
                    <a href="{{url('lang/fr')}}" style="margin: 12px;">French</a>
                    <a href="{{url('lang/ru')}}" style="margin: 12px;">Russian</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
