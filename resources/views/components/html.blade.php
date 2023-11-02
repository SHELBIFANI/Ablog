<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ablog</title>
    @vite('resources/css/app.css')
    {{-- @type {import('tailwindcss').Config} --}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');
        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Josefin Sans', sans-serif;
        }
        #active{
            border-radius: 24px;
            background-color: #fff;
        }
        #fontbutton{
            font-family: 'Josefin Sans';
        }
        #container{
            background-image: url('/images/background_image3.jpg');
            background-size: cover;
            /* filter: blur(10px); */
            /* filter: grayscale(90%); */
            
        }
        span{
            color: #f5f5f5;
        }
    </style>
</head>
<body class="w-full h-screen">
    {{$slot}}
</body>
</html>