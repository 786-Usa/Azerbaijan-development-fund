<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons (for search icon) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <!-- You do NOT need to add this script tag here. -->
    <!-- The Bootstrap JS script is already included at the end of your <body>. -->
    <!-- Including it again in the <head> is unnecessary and may cause conflicts. -->
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{ asset('css/home.css') }}"> --}}

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
<link rel="stylesheet" href="{{ asset('css/opportunity.css') }}">
<link rel="stylesheet" href="{{ asset('css/investor-relation.css') }}">
</head>

<body>

    @include('partials.navbar')

    @yield('content')

    {{-- @yield('home') --}}

    @include('partials.footer')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        @stack('scripts')
</body>

</body>

</html>
