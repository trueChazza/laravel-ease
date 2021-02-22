<template>
    <div class="grid-container">
        <template v-for="(route, index) in routes" :key="`route-${ index }`">

            <router-link class="capitalize" :to="route.path" v-text="route.name" />
        </template>
    </div>

    <router-view />
</template>

<script setup>
import { computed } from 'vue'
import { useRouter } from 'vue-router'

const routes = computed(() => useRouter().getRoutes())
</script>

<style scoped>
.grid-container {
    display: grid;
    grid: 20px / auto auto auto;
}
.capitalize {
    text-transform: capitalize;
}
</style>
