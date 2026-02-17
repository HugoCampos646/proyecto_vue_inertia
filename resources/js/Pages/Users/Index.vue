<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    users: Array
});
</script>

<template>
    <AppLayout>
        <Head title="Usuarios" />

        <div class="p-8">
            <h1 class="text-3xl font-bold mb-6">Gestión de Usuarios</h1>

            <!-- Botón crear -->
            <Link
                href="/usuarios/create"
                class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700"
            >
                Crear usuario
            </Link>

            <!-- Tabla -->
            <div class="mt-6 bg-white shadow rounded-lg overflow-hidden">
                <table class="w-full">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="p-3 text-left">ID</th>
                            <th class="p-3 text-left">Nombre</th>
                            <th class="p-3 text-left">Email</th>
                            <th class="p-3 text-left">Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr
                            v-for="user in users"
                            :key="user.id"
                            class="border-t"
                        >
                            <td class="p-3">{{ user.id }}</td>
                            <td class="p-3">{{ user.name }}</td>
                            <td class="p-3">{{ user.email }}</td>
                            <td class="p-3 space-x-2">
                                
                                <Link
                                    :href="`/usuarios/${user.id}/edit`"
                                    class="bg-yellow-500 text-white px-3 py-1 rounded"
                                >
                                    Editar
                                </Link>

                                <Link
                                    :href="`/usuarios/${user.id}`"
                                    method="delete"
                                    as="button"
                                    class="bg-red-600 text-white px-3 py-1 rounded"
                                >
                                    Borrar
                                </Link>

                            </td>
                        </tr>

                        <tr v-if="users.length === 0">
                            <td colspan="4" class="p-4 text-center text-gray-500">
                                No hay usuarios registrados
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </AppLayout>
</template>
