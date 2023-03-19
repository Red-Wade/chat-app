<script setup>
import { Head, Link } from '@inertiajs/vue3'
import LogoLayout from '@/Layouts/LogoLayout.vue'
</script>

<template>
  <Head title="Welcome" />
  <div class="relative flex justify-center items-center min-h-screen bg-center bg-gray-100 dark:bg-gray-900">
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
      <div class="flex items-center justify-center">
        <LogoLayout class="w-24 h-24" />
        <h1 class="text-4xl font-bold text-gray-900 dark:text-white">Security Chat</h1>
      </div>
      <div class="mt-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 ">
          <Link :href="route('login')"
            class="p-6 bg-white dark:bg-gray-800/50 dark:from-gray-700/50 dark:via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex hover:scale-[1.01] transition-all duration-250 focus:outline focus:ring focus:ring-red-500">
          <div>
            <h2 class="mt-1 text-xl font-semibold text-gray-900 dark:text-white">Login</h2>
            <p class="mt-2 text-gray-600 dark:text-gray-400">Inicia sesión para acceder a tu cuenta</p>
          </div>
          </Link>
          <Link :href="route('register')"
            class="p-6 bg-white dark:bg-gray-800/50 dark:from-gray-700/50 dark:via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex hover:scale-[1.01] transition-all duration-250 focus:outline focus:ring focus:ring-red-500">
          <div class="grid">
            <h2 class="mt-1 text-xl font-semibold text-gray-900 dark:text-white">Register</h2>
            <p class="mt-2 text-gray-600 dark:text-gray-400">Regístrate para crear una cuenta</p>
          </div>
          </Link>
        </div>
      </div>
      <div class="mt-5">
        <div
          class="p-6 bg-white dark:bg-gray-800/50 rounded-lg shadow-lg dark:shadow-none flex flex-col md:flex-row items-center justify-between transition-all duration-250 focus:outline focus:ring focus:ring-red-500">
          <div class="md:w-2/3">
            <h1 class="text-gray-600 dark:text-gray-400 text-lg md:text-xl font-semibold mb-4 md:mb-0">
              ¡Hola y bienvenidos a nuestra aplicación de chat!
            </h1>
          </div>
        </div>
        <div
          class="p-6 bg-white dark:bg-gray-800/50 dark:from-gray-700/50 dark:via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex flex-col gap-4 mt-5 transition-all duration-250 focus:outline focus:ring focus:ring-red-500">
          <p class="text-gray-600 dark:text-gray-400 text-base md:text-lg font-medium">
            Es un placer daros la bienvenida a este espacio en línea donde podréis conectarte con amigos y familiares de
            todo
            el mundo. Aquí podréis enviar mensajes, compartir archivos y realizar llamadas de voz y video de alta calidad.
          </p>
          <p class="text-gray-600 dark:text-gray-400 text-base md:text-lg font-medium">
            Estamos encantados de que hayáis elegido nuestra aplicación de chat y esperamos que disfrutéis de todas las
            características que ofrecemos. Nuestra aplicación es fácil de usar y estamos constantemente trabajando para
            mejorarla
            y agregar nuevas funciones para mejorar vuestra experiencia.
          </p>
          <p class="text-gray-600 dark:text-gray-400 text-base md:text-lg font-medium">
            Nos tomamos muy en serio vuestra privacidad y seguridad, por lo que todos los chats se borran automáticamente
            después de 30 días para garantizar que vuestra información se mantenga segura y protegida.
          </p>
          <p class="text-gray-600 dark:text-gray-400 text-base md:text-lg font-medium">
            Si tenéis alguna pregunta o necesitáis ayuda con cualquier cosa en nuestra aplicación de chat, no dudéis en
            poneros
            en contacto con nosotros. Estamos aquí para ayudaros en todo lo que podamos y esperamos que disfrutéis de
            vuestra
            experiencia en nuestra aplicación de chat. ¡Bienvenidos de nuevo y gracias por uniros a nuestra comunidad!
          </p>
        </div>
        <footer
          class="pl-6 mt-5 bg-white dark:bg-gray-800/50 dark:from-gray-700/50 dark:via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex transition-all duration-250 focus:outline focus:ring focus:ring-red-500 bottom-0 w-full">
          <div class="container mx-auto py-6 ">
            <div class="md:flex md:items-center md:justify-between pr-6">
              <p class="text-gray-600 dark:text-gray-400 text-sm">&copy; 2023 Security Chat. Todos los derechos
                reservados.</p>
            </div>
          </div>
        </footer>
      </div>
    </div>
  </div>
</template>
