<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @livewireStyles
</head>
<body class="{{ session('theme', 'light') }}">
    <div id="app">
        <nav>
            <!-- Sidebar navigation -->
            <ul>
                <li><a href="{{ route('admin.analytics') }}">Analytics</a></li>
                <li><a href="{{ route('admin.needs') }}">Needs</a></li>
                <li><a href="{{ route('admin.users') }}">All Users</a></li>
                <li><a href="{{ route('admin.donations') }}">All Donations</a></li>
                <li><a href="{{ route('admin.notifications') }}">Notifications</a></li>
                <li><a href="{{ route('admin.settings') }}">Settings</a></li>
            </ul>
        </nav>
        <main>
            @yield('content')
        </main>
    </div>
    @livewireScripts
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
