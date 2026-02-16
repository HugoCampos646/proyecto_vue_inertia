<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';

const form = useForm({
    titulo: '',
    fecha_inicio: '',
    fecha_fin: '',
});
</script>

<template>
    <Head title="Crear Proyecto" />

    <div class="p-8 max-w-xl">
        <h1 class="text-3xl font-bold mb-6">Crear Proyecto</h1>

        <!-- Botón volver -->
        <Link
            href="/proyectos"
            class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600"
        >
            Volver
        </Link>

        <!-- Formulario -->
        <form
            @submit.prevent="form.post('/proyectos')"
            class="mt-6 bg-white p-6 rounded-lg shadow space-y-4"
        >
            <!-- Título -->
            <div>
                <label class="block font-semibold mb-1">Título</label>
                <input
                    v-model="form.titulo"
                    type="text"
                    class="w-full border rounded p-2"
                />
                <div v-if="form.errors.titulo" class="text-red-500 text-sm">
                    {{ form.errors.titulo }}
                </div>
            </div>

            <!-- Fecha inicio -->
            <div>
                <label class="block font-semibold mb-1">Fecha de inicio</label>
                <input
                    v-model="form.fecha_inicio"
                    type="date"
                    class="w-full border rounded p-2"
                />
                <div v-if="form.errors.fecha_inicio" class="text-red-500 text-sm">
                    {{ form.errors.fecha_inicio }}
                </div>
            </div>

            <!-- Fecha fin -->
            <div>
                <label class="block font-semibold mb-1">Fecha de fin</label>
                <input
                    v-model="form.fecha_fin"
                    type="date"
                    class="w-full border rounded p-2"
                />
                <div v-if="form.errors.fecha_fin" class="text-red-500 text-sm">
                    {{ form.errors.fecha_fin }}
                </div>
            </div>

            <!-- Botón guardar -->
            <button
                type="submit"
                class="bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700"
                :disabled="form.processing"
            >
                Crear proyecto
            </button>
        </form>
    </div>
</template>
