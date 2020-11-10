<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Starwars</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >

    </head>
    <body class="antialiased">

        @include('partials.navbar')

        <div class="container">

            @yield('container')

        </div>

        <div>
            <svg class="icons_star_wars" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 261.07 67.91">
                <defs>
                    <style>
                    .cls-1{fill:#e73d4c}.cls-2{fill:#9097b3}.cls-3{fill:#0bb6a6}
                    </style>
                </defs>
                <path class="cls-1" d="M227.54 29.43c.88-.61.58-1.51.61-2.28.19-5.21.33-10.42.52-15.63.05-1.26-.31-2.77 1.84-2.79s2 1.51 2.08 2.91c.16 4.8.27 9.59.43 14.39a6 6 0 00.75 3.64c1.09-3.84.64-7.39.89-10.88.14-1.81.27-3.63.35-5.44.06-1.46.79-2.07 2.23-2 5.31.26 10.2 2 12.36 6.94a38.92 38.92 0 013.51 13.93c.07 1.69-.8 1.46-1.89 1-4.5-2-9.05-2.81-13.68-.37a5.41 5.41 0 00-1.1.56c-.52.48-1.44 1-1.07 1.76.46.93 1.28.2 1.93-.06 6.45-2.55 12.17-.55 15.61 5.43a124.12 124.12 0 017.16 14.14 11.55 11.55 0 01-.2 9.85c-.6 1.26-1.24 2-2.44.36a15.57 15.57 0 00-6.94-5.1c-1.44-.58-1.62-1.26-.52-2.33.17-.17.27-.45.46-.58 3.57-2.18 2.57-4.97 1.2-7.88a37.86 37.86 0 01-2.18-5.28c-2.16-7.12-10.11-7.28-14.8-3.29-3.83 3.27-4.38 3.27-8.27-.14a9.33 9.33 0 00-12.12-.58 7.23 7.23 0 00-1.81 2.6c-1.51 3.05-2.65 6.25-3.94 9.39a3 3 0 001 3.93 6.65 6.65 0 01.59.46c2.6 2.45 2.58 2.65-.63 4.29-2.15 1.09-4.23 2.22-5.48 4.45-1 1.74-2 1.15-2.67-.26a10.52 10.52 0 01-.89-7.5c2.08-7 5.71-13.2 9.55-19.28 2.3-3.64 8.7-4.84 13.41-3 .74.29 1.39.93 2.41.59-.18-1.44-1.15-2.07-2.27-2.63-4.3-2.15-8.53-1.56-12.78.13-2.47 1-3.05.55-2.57-2 .81-4.45.94-9.07 3.65-13 3-4.43 7.34-6.21 12.5-6.45 1.9-.08 1.87 1.29 1.93 2.53.19 4.29.32 8.6.53 12.89.03.82-.36 1.91.75 2.58z"/>
                <path class="cls-2" d="M157 47.25c.26 2.38-1 4.06-3.13 5a4.67 4.67 0 00-2.5 2.85c-1.5 3.7-3.24 7.25-7 9.33s-7.35 1.38-9.68-2.32c-1.15-1.81-1.91-3.85-3-5.68-1.77-2.88-3.7-2.77-5.32.23-.71 1.31-1.29 2.69-1.92 4-2.59 5.46-8 6.51-12.45 2.45a19.22 19.22 0 01-5.22-8.33c-.36-1.07-.75-2-2-2.36-4.46-1.21-5.09-7.58-1.46-10.2 1.4-1 1.56-2.11 1.67-3.55.21-2.89.87-5.58 4-6.89 1.44-.61 2.3-.41 2.7 1.31 1.11 4.75 3.67 5.64 7.85 2.84a31.65 31.65 0 005.46-5.3c2.59-2.85 5.81-2.87 8.35 0a28 28 0 006.11 5.79c3.71 2.3 6.64 1.15 7.25-3.1.33-2.34 1.41-2.06 2.84-1.38 2.77 1.3 3.55 3.82 3.69 6.57.09 1.66.38 3 2 4s1.88 2.81 1.76 4.74zm-28-8.17a2.78 2.78 0 00-.5 0c-5.42 1.16-8.68 5.19-12.09 9a.72.72 0 000 .67.81.81 0 001.11.17c1.23-.7 2.45-1.4 3.63-2.16 6-3.85 11.64-3.6 17.22.86a5.27 5.27 0 002.29 1.38c.52.09 1.08.78 1.55.08s-.12-1.06-.53-1.47c-1.54-1.51-3-3.1-4.62-4.51-2.32-2.1-4.78-3.92-8.06-4.02zm11.64 16.39a3.71 3.71 0 00-3.78 3.53 3.93 3.93 0 003.64 4 3.79 3.79 0 003.75-3.57 3.73 3.73 0 00-3.62-3.96zm-19.11 3.61a3.88 3.88 0 00-4-3.6 4 4 0 00-3.59 3.8A4.42 4.42 0 00118 63a4.25 4.25 0 003.52-3.92z"/>
                <path class="cls-3" d="M32.76 52.39V39.47c0-1.58.43-2.33 2.17-2.62 3.68-.6 7.32-1.53 11-2.31 1-.22 2.09-.39 1.91-1.78s-1.33-1.06-2.17-1c-3.16.16-6.32.29-9.46.61-8.58.88-17.11-.16-25.65-.59-.42 0-.83-.06-1.25-.06-.74 0-1.59-.09-1.72 1S8 34.1 9 34.3c3.83.77 7.63 1.68 11.47 2.36 1.61.28 2.3.91 2.29 2.57-.06 8.78 0 17.55-.06 26.33 0 1.07.14 2.41-1.46 2.34S20 66.53 20 65.6c0-6.66-.53-13.24-3.24-19.45A15.74 15.74 0 009 37.79c-2.36-1.12-3-.79-3.14 1.77-.3 4.38-.58 8.75-.93 13.12-.07.87.41 2.32-1.16 2.25s-1.48-1.4-1.44-2.47c.17-4 .41-7.93.62-11.9a5.81 5.81 0 00-1.07-3.64C.24 34.33.89 31.21.72 28.3c0-.81.38-1.69.21-2.44C0 21.91 1.06 18 1 14A74.48 74.48 0 00.06 3C-.19 1.43.32.88 1.89.43 6-.72 9.6.66 13.33 1.78c.92.28 1.69.8 1.47 2s-1.08 1.11-1.94 1.15c-2.48.11-5-.18-7.41.69C4.18 6 3.51 6.56 3.52 8q.06 9.07 0 18.14c0 1.86.79 2.64 2.66 2.78 11.69.88 23.36 1.91 35.09.56 2.31-.26 4.65-.2 7-.4s3.51 1 3.62 3.3c.18 3.89.41 7.77.61 11.65q.21 3.72.38 7.44a10.11 10.11 0 010 1.74c-.1.87-.45 1.74-1.44 1.71s-.93-1-1-1.71c-.22-3.14-.4-6.28-.62-9.41-.11-1.49-.22-3-.41-4.45-.34-2.68-1-3-3.32-1.67a18.31 18.31 0 00-8 9.49 42.91 42.91 0 00-2.64 15.07c0 1 0 2-.09 3s.34 2.44-1.35 2.4c-1.51 0-1.14-1.39-1.16-2.3-.05-2.57 0-5.14 0-7.7v-5.22z"/>
                <path class="cls-3" d="M27.38 27.65c-6.23-.07-12.44-.37-18.64-.95-1.78-.16-2.86-.47-2.49-2.82 1-6.54 4.82-10.63 11-12.48C25.06 9 33 9.07 40.58 12.41A13.86 13.86 0 0149.11 24c.24 1.85-.59 2.53-2.34 2.68-6.45.59-12.91.92-19.39.97z"/>
                <path class="cls-2" d="M129.32 9.7c4 .24 8 .45 11.78 1.74a13.9 13.9 0 019.56 14.4c-.14 1.85-1.17 1.71-2.38 1.44a95.65 95.65 0 00-15.55-1.93 89.85 89.85 0 00-21.73 1.7c-3.44.66-3.75.46-3.42-3.07.66-7.12 5.45-12.23 12.86-13.42a48.51 48.51 0 018.88-.86z"/>
                <path class="cls-1" d="M230.43 66.7h-10c-.73 0-1.65.09-1.89-.81s.58-1.17 1.24-1.57c2.82-1.7 4.52-4.53 6.64-6.91s5.68-2.79 7.93-.36c1.46 1.57 2.84 3.22 4.2 4.88a7.32 7.32 0 002.85 2.32c.66.27 1.62.39 1.44 1.39s-1.22 1-2 1c-2.91.06-5.81 0-8.71.06zM237.32 48.17c1.63.93 3.53.89 5.44.78a6.59 6.59 0 003.24-1.11c1.52-1 2.44-.8 3.22 1 1.59 3.64 1.68 3.61-1.14 6.49a16 16 0 00-3.52 4.73c-.71 1.63-1.75 1.75-3 .33-1.58-1.79-3.28-3.47-4.92-5.22-.81-.86-1.16-5.65-.53-6.57a1 1 0 011.21-.43zM225.29 51.75c.87 3.62-2.68 5-4.41 7.31-2.18 2.93-2.23 2.57-4.8 0-1.74-1.72-2.53-4-4.51-5.63s-.06-3.7.82-5.37 2-.73 3.15-.08a8.64 8.64 0 006.51.75c3.29-.73 3.29-.73 3.24 3.02z"/>
                <path class="cls-3" d="M17 62c0 .85.42 1.5-.2 1.9s-1.27-.05-1.8-.44c-2.47-1.81-4.93-3.62-7.37-5.46a3.08 3.08 0 01-.87-3.8 33.68 33.68 0 013.61-7.26c1.26-1.72 2.28-1.67 3.35.22 1.7 3 2 6.43 2.67 9.74.35 1.75.44 3.58.61 5.1zM38.23 61.89c.7-4.4 1.17-8.85 2.61-13.11.38-1.13.75-2.54 2.18-2.78 1.59-.28 2 1.21 2.68 2.2a36.09 36.09 0 012.95 7.09 1.74 1.74 0 01-.65 2.19c-2.5 1.91-4.94 3.9-7.46 5.78-.55.41-1.28 1.08-2 .54-.54-.43-.2-1.25-.31-1.91z"/>
                <path class="cls-1" d="M230.68 53c-1.68.11-2.62-.48-2.5-2.1s.59-3 2.36-2.94 2.58 1.23 2.63 3c.06 1.88-1.25 2.04-2.49 2.04z"/>
            </svg>          
        </div>
        
        <h1>Let's talk about Star Wars!</h1>
    
        <p>Get all the information you need about every character. </p>

    </body>
</html>
