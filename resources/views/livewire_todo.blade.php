<html>
<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body>
    @livewire(Todos::class)
    @livewireScripts
</body>
</html>
