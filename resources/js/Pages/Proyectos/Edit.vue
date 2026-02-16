<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';

const props = defineProps({
    proyecto: Object,
});

const form = useForm({
    titulo: props.proyecto.titulo,
    fecha_inicio: props.proyecto.fecha_inicio,
    fecha_fin: props.proyecto.fecha_fin,
});
</script>

<template>
    <Head title="Editar Proyecto" />

    <div class="p-8 max-w-xl">
        <h1 class="text-3xl font-bold mb-6">Editar Proyecto</h1>

        <!-- Botón volver -->
        <Link
            href="/proyectos"
            class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600"
        >
            Volver
        </Link>

        <form
            @submit.prevent="form.put(`/proyectos/${proyecto.id}`)"
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

            <!-- Botón actualizar -->
            <button
                type="submit"
                class="bg-yellow-600 text-white px-6 py-2 rounded hover:bg-yellow-700"
                :disabled="form.processing"
            >
                Actualizar proyecto
            </button>
        </form>
    </div>
</template>
