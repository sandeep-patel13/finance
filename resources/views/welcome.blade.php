<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Home Page</h1>
    <hr>
    {{-- <x-alert/>
    <x-alert/>
    <x-alert/> --}}

    <x-alert>
        <x-slot name="title">Alert Title 1</x-slot>
        <span>Hello I am Alert</span>
        <span>Alert</span>
    </x-alert>
</body>
</html>