<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    proyectos: Array
});
</script>

<template>
    <Head title="Proyectos" />

    <div class="p-8">
        <h1 class="text-3xl font-bold mb-6">Gestión de Proyectos</h1>

        <!-- Botón crear -->
        <Link
            href="/proyectos/create"
            class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700"
        >
            Crear proyecto
        </Link>

        <!-- Tabla -->
        <div class="mt-6 bg-white shadow rounded-lg overflow-hidden">
            <table class="w-full">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="p-3 text-left">ID</th>
                        <th class="p-3 text-left">Título</th>
                        <th class="p-3 text-left">Fecha inicio</th>
                        <th class="p-3 text-left">Fecha fin</th>
                        <th class="p-3 text-left">Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    <tr
                        v-for="proyecto in proyectos"
                        :key="proyecto.id"
                        class="border-t"
                    >
                        <td class="p-3">{{ proyecto.id }}</td>
                        <td class="p-3">{{ proyecto.titulo }}</td>
                        <td class="p-3">{{ proyecto.fecha_inicio }}</td>
                        <td class="p-3">{{ proyecto.fecha_fin }}</td>
                        <td class="p-3 space-x-2">

                            <Link
                                :href="`/proyectos/${proyecto.id}`"
                                class="bg-indigo-600 text-white px-3 py-1 rounded"
                            >
                                Ver
                            </Link>

                            <Link
                                :href="`/proyectos/${proyecto.id}/edit`"
                                class="bg-yellow-500 text-white px-3 py-1 rounded"
                            >
                                Editar
                            </Link>

                            <Link
                                :href="`/proyectos/${proyecto.id}`"
                                method="delete"
                                as="button"
                                class="bg-red-600 text-white px-3 py-1 rounded"
                            >
                                Borrar
                            </Link>

                        </td>
                    </tr>

                    <tr v-if="proyectos.length === 0">
                        <td colspan="5" class="p-4 text-center text-gray-500">
                            No hay proyectos registrados
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
