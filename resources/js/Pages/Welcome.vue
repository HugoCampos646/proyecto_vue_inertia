<script setup>
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Inicio" />

    <div class="min-h-screen bg-gray-100 flex items-center justify-center">
        <div class="text-center bg-white p-10 rounded-xl shadow-xl w-full max-w-2xl">
            
            <h1 class="text-4xl font-bold mb-4">
                Aplicación de Gestión
            </h1>

            <p class="text-gray-600 mb-8">
                Gestión de usuarios, proyectos y alumnos
            </p>

            <!-- Usuario NO logueado -->
            <div v-if="!$page.props.auth.user" class="space-x-4">
                <Link
                    href="/login"
                    class="bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-700"
                >
                    Iniciar sesión
                </Link>

                <Link
                    href="/register"
                    class="bg-green-600 text-white px-6 py-3 rounded hover:bg-green-700"
                >
                    Registrarse
                </Link>
            </div>

            <!-- Usuario logueado -->
            <div v-else class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-6">
                
                <Link
                    href="/usuarios"
                    class="bg-white border p-6 rounded-lg shadow hover:bg-gray-100"
                >
                    <h2 class="text-xl font-semibold">Usuarios</h2>
                    <p class="text-gray-500 text-sm">Gestionar usuarios</p>
                </Link>

                <Link
                    href="/proyectos"
                    class="bg-white border p-6 rounded-lg shadow hover:bg-gray-100"
                >
                    <h2 class="text-xl font-semibold">Proyectos</h2>
                    <p class="text-gray-500 text-sm">Gestionar proyectos</p>
                </Link>

            </div>
        </div>
    </div>
</template>
