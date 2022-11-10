<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Datatables Demo 1</title>

        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <script src="https://cdn.tailwindcss.com"></script>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>

        @livewireStyles
    </head>
    <body>

        {{--
            Clicking Export gives error:
                Attempt to read property "preventExport" on int
        --}}
        <livewire:datatable model="App\Models\User" exportable />

        @livewireScripts
    </body>
</html>
