<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Styles --}}

    @livewireStyles()

    {{-- Scripts --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.0/dist/cdn.min.js"></script>

</head>
<body>



    <main class=" cotnainer">

       @include('components.layouts.components.navbar')

        {{ $slot }}

    </main>



    {{-- Body scripts --}}
    @livewireScripts()

</body>
</html>
