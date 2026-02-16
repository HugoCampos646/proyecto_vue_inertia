<script setup>
import { Head, Link } from '@inertiajs/vue3';

const props = defineProps({
    proyecto: Object,
});
</script>

<template>
    <Head title="Detalle del Proyecto" />

    <div class="p-8 max-w-2xl">
        <h1 class="text-3xl font-bold mb-6">Detalle del Proyecto</h1>

        <!-- Botón volver -->
        <Link
            href="/proyectos"
            class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600"
        >
            Volver
        </Link>

        <div class="mt-6 bg-white shadow rounded-lg p-6 space-y-4">
            <div>
                <h2 class="text-lg font-semibold text-gray-600">Título</h2>
                <p class="text-xl">{{ proyecto.titulo }}</p>
            </div>

            <div>
                <h2 class="text-lg font-semibold text-gray-600">Fecha de inicio</h2>
                <p class="text-xl">{{ proyecto.fecha_inicio }}</p>
            </div>

            <div>
                <h2 class="text-lg font-semibold text-gray-600">Fecha de fin</h2>
                <p class="text-xl">{{ proyecto.fecha_fin }}</p>
            </div>
        </div>
    </div>
</template>
