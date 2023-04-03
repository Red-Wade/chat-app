<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta http-equiv="Content-Security-Policy" content="block-all-mixed-content">
    <meta name="description" content="Únete a nuestra aplicación de chat en línea para conectarte con amigos y familiares de todo el mundo. Envía mensajes, comparte archivos y realiza llamadas de voz y video de alta calidad con facilidad. Nuestra aplicación es fácil de usar y segura, con chats que se borran automáticamente después de 30 días. Si necesitas ayuda o tienes preguntas, estamos aquí para ayudarte. ¡Únete a nuestra comunidad hoy mismo y disfruta de todas las características que ofrecemos!">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
 

    <!-- Scripts -->
    @routes
    @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
    @inertiaHead
</head>

<body class="font-sans antialiased">
    @inertia
</body>

</html>