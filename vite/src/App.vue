<template>
    <router-view />
</template>

<script>
export default {
    mounted() {
        console.log(this.$router.getRoutes())
    }
}
</script>
