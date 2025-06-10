<template>
  <div class="container mt-5">
    <h1>Mi Agenda Telefónica</h1>

    <form @submit.prevent="guardarContacto" class="mb-4">
      <div class="row">
        <div class="col-md-4">
          <input type="text" v-model="form.nombre" placeholder="Nombre" class="form-control" required>
        </div>
        <div class="col-md-3">
          <input type="number" v-model="form.telefono" placeholder="Teléfono" class="form-control" required>
        </div>
        <div class="col-md-3">
          <input type="date" v-model="form.fecha_nacimiento" class="form-control" required>
        </div>
        <div class="col-md-2">
          <button type="submit" class="btn btn-primary w-100">{{ editando ? 'Actualizar' : 'Guardar' }}</button>
        </div>
      </div>
    </form>

    <table class="table">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Teléfono</th>
          <th>Fecha de Nacimiento</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="contacto in contactos" :key="contacto.id">
          <td>{{ contacto.nombre }}</td>
          <td>{{ contacto.telefono }}</td>
          <td>{{ contacto.fecha_nacimiento }}</td>
          <td>
            <button @click="editarContacto(contacto)" class="btn btn-sm btn-warning me-2">Editar</button>
            <button @click="eliminarContacto(contacto.id)" class="btn btn-sm btn-danger">Eliminar</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';

// Estado del componente
const contactos = ref([]);
const form = ref({
  id: null,
  nombre: '',
  telefono: '',
  fecha_nacimiento: '',
});
const editando = ref(false);

// Hooks del ciclo de vida
onMounted(() => {
  cargarContactos();
});

// Métodos
const cargarContactos = async () => {
  try {
    const response = await axios.get('/api/contactos');
    contactos.value = response.data;
  } catch (error) {
    console.error("Error al cargar contactos:", error);
    // Manejo de errores (mostrar un mensaje al usuario)
  }
};

const guardarContacto = async () => {
  try {
    if (editando.value) {
      await axios.put(`/api/contactos/${form.value.id}`, form.value);
    } else {
      await axios.post('/api/contactos', form.value);
    }
    limpiarFormulario();
    await cargarContactos(); // Recargar lista
  } catch (error) {
    console.error("Error al guardar el contacto:", error.response.data);
    // Manejo de errores
  }
};

const editarContacto = (contacto) => {
  editando.value = true;
  form.value = { ...contacto }; // Copiar datos al formulario
};

const eliminarContacto = async (id) => {
  if (!confirm('¿Estás seguro de que quieres eliminar este contacto?')) return;
  try {
    await axios.delete(`/api/contactos/${id}`);
    await cargarContactos(); // Recargar lista
  } catch (error) {
    console.error("Error al eliminar el contacto:", error);
    // Manejo de errores
  }
};

const limpiarFormulario = () => {
  editando.value = false;
  form.value = { id: null, nombre: '', telefono: '', fecha_nacimiento: '' };
};
</script>