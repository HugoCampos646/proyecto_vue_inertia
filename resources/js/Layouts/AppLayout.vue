<script setup>
import { Link, usePage } from '@inertiajs/vue3';

const page = usePage();
const user = page.props.auth?.user;
</script>

<template>
    <div class="min-h-screen bg-gray-100">
        
        <!-- NAVBAR -->
        <nav class="bg-gray-900 text-white shadow">
            <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
                
                <!-- IZQUIERDA -->
                <div class="flex items-center space-x-6">
                    <span class="font-bold text-lg">Panel Gestión</span>

                    <Link
                        href="/proyectos"
                        class="hover:text-gray-300"
                    >
                        Proyectos
                    </Link>

                    <Link
                        href="/usuarios"
                        class="hover:text-gray-300"
                    >
                        Usuarios
                    </Link>
                </div>

                <!-- DERECHA -->
                <div class="flex items-center space-x-4">
                    
                    <!-- Usuario logueado -->
                    <span class="text-sm text-gray-300">
                        {{ user?.name }} ({{ user?.role }})
                    </span>

                    <!-- Futuro selector de idioma -->
                    <button class="bg-gray-700 px-3 py-1 rounded hover:bg-gray-600">
                        Idioma
                    </button>

                    <!-- Cerrar sesión -->
                    <Link
                        href="/logout"
                        method="post"
                        as="button"
                        class="bg-red-600 px-3 py-1 rounded hover:bg-red-700"
                    >
                        Cerrar sesión
                    </Link>

                </div>
            </div>
        </nav>

        <!-- CONTENIDO DE LA PÁGINA -->
        <main class="p-6">
            <slot />
        </main>
    </div>
</template>
