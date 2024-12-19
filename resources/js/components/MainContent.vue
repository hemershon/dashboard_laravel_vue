<template>
    <div class="main-content">
        <h3>Lista de Carros</h3>
        <ul>
            <li v-for="car in cars" :key="car.id">
                {{ car.name }} - R$ {{ car.price }}
            </li>
        </ul>
    </div>
</template>

<script>
    import axios from 'axios';

    export default {
        data() {
            return {
                cars: [],
            };
        },
        created() {
            axios.get('/api/cars')
            .then(response => {
                this.cars = response.data;
            })
            .catch(error => {
                console.error('Erro ao buscar carros:', error);
            });

        },
    };
</script>

<style scoped>
    .main-content {
        padding: 20px;
        background-color: #f9f9f9;
        min-height: 100vh;
    }
</style>
