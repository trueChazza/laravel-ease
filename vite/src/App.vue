<template>
    <sidebar-menu :menu="menu" />

    <router-view />
</template>

<script>
import 'vue-sidebar-menu/dist/vue-sidebar-menu.css'
import { SidebarMenu } from 'vue-sidebar-menu'

export default {
    components: {
        SidebarMenu
    },
    computed: {
        menu() {
            return [
                {
                    header: 'Navigation',
                    hiddenOnCollapse: true
                },
                ...this.$router.getRoutes().map(route => ({
                    href: route.path,
                    title: route.name
                }))
            ]
        }
    }
}
</script>
