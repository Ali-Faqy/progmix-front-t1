<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    @vite('resources/css/home.css')
    @vite('resources/js/home.js')
</head>

<body>
    <x-chatbot></x-chatbot>
    <x-header></x-header>
    <main>
        <x-main-slider></x-main-slider>
        <x-how-we-are></x-how-we-are>
        <x-features></x-features>
        <x-portfolio></x-portfolio>
        <x-payment-plan></x-payment-plan>
        <x-start-project></x-start-project>
        <x-contact-us></x-contact-us>
    </main>
    <footer>
        <x-footer></x-footer>
    </footer>

</body>

</html>
