<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';

const props = defineProps({
    user: Object,
});

const form = useForm({
    name: props.user.name,
    email: props.user.email,
    role: props.user.role,
});
</script>

<template>
    <Head title="Editar Usuario" />

    <div class="p-8 max-w-xl">
        <h1 class="text-3xl font-bold mb-6">Editar Usuario</h1>

        <!-- Botón volver -->
        <Link
            href="/usuarios"
            class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600"
        >
            Volver
        </Link>

        <!-- Formulario -->
        <form
            @submit.prevent="form.put(`/usuarios/${props.user.id}`)"
            class="mt-6 bg-white p-6 rounded-lg shadow space-y-4"
        >
            <!-- Nombre -->
            <div>
                <label class="block font-semibold mb-1">Nombre</label>
                <input
                    v-model="form.name"
                    type="text"
                    class="w-full border rounded p-2"
                />
                <div v-if="form.errors.name" class="text-red-500 text-sm">
                    {{ form.errors.name }}
                </div>
            </div>

            <!-- Email -->
            <div>
                <label class="block font-semibold mb-1">Email</label>
                <input
                    v-model="form.email"
                    type="email"
                    class="w-full border rounded p-2"
                />
                <div v-if="form.errors.email" class="text-red-500 text-sm">
                    {{ form.errors.email }}
                </div>
            </div>

            <!-- Rol -->
            <div class="mt-4">
                <label class="block">Rol</label>
                <select v-model="form.role" class="border rounded w-full p-2">
                    <option value="alumno">Alumno</option>
                    <option value="profesor">Profesor</option>
                </select>
            </div>

            <!-- Botón actualizar -->
            <button
                type="submit"
                class="bg-yellow-600 text-white px-6 py-2 rounded hover:bg-yellow-700"
                :disabled="form.processing"
            >
                Actualizar usuario
            </button>
        </form>
    </div>
</template>
