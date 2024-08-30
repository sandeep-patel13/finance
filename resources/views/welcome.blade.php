<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Component</title>
    <style>
        .myClass{
            color: blue;
        }
    </style>
</head>
<body>
    @php
        $desc = 'Card Discription';
    @endphp
    <x-include.header/>
    <hr>
    <x-card title="Card Title 1" sub-title="Card Subtitle 1" :description=$desc class="myClass"/>
    <x-card title="Card Title 2" sub-title="Card Subtitle 2" :description=$desc class="myClass"/>
    <x-card title="Card Title 3" sub-title="Card Subtitle 3" :description=$desc class="myClass"/>
    <x-include.footer/>
</body>
</html>