<template>
    <div class="index">

        <img alt="Vue logo" src="https://raw.githubusercontent.com/vitejs/vite/main/packages/create-app/template-vue/src/assets/logo.png" />

        <h1>{{ state.message }}</h1>

        <p>
            <a href="https://vitejs.dev/guide/features.html" target="_blank">Vite Documentation</a> |
            <a href="https://v3.vuejs.org/" target="_blank">Vue 3 Documentation</a>
        </p>

        <button @click="state.count++">count is: {{ state.count }}</button>
        <p>
            Edit
            <code>resources/js/laravel/ease/example/index.vue</code> to test hot module replacement.
        </p>
    </div>
</template>

<script setup>
import { reactive } from 'vue'

const state = reactive({
    message: 'Hello Example',
    count: 0
})
</script>

<style scoped>
.index {
    font-family: Avenir, Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-align: center;
    color: #2c3e50;
    margin-top: 60px;
}

a {
    color: #42b983;
}
</style>
