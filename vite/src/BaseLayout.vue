<template>
    <div class="h-screen flex overflow-hidden bg-white">

        <TransitionRoot as="template" :show="sidebarOpen">

            <Dialog as="div" static class="fixed inset-0 flex z-40 md:hidden" @close="sidebarOpen = false" :open="sidebarOpen">
                <TransitionChild as="template" enter="transition-opacity ease-linear duration-300" enter-from="opacity-0" enter-to="opacity-100" leave="transition-opacity ease-linear duration-300" leave-from="opacity-100" leave-to="opacity-0">
                    <DialogOverlay class="fixed inset-0 bg-gray-600 bg-opacity-75" />
                </TransitionChild>

                <TransitionChild as="template" enter="transition ease-in-out duration-300 transform" enter-from="-translate-x-full" enter-to="translate-x-0" leave="transition ease-in-out duration-300 transform" leave-from="translate-x-0" leave-to="-translate-x-full">
                    <div class="relative flex-1 flex flex-col max-w-xs w-full pt-5 pb-4 bg-white">

                        <TransitionChild as="template" enter="ease-in-out duration-300" enter-from="opacity-0" enter-to="opacity-100" leave="ease-in-out duration-300" leave-from="opacity-100" leave-to="opacity-0">
                            <div class="absolute top-0 right-0 -mr-12 pt-2">
                                <button class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" @click="sidebarOpen = false">
                                    <span class="sr-only">Close sidebar</span>
                                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </TransitionChild>

                        <div class="flex-shrink-0 flex items-center px-4 space-x-4">
                            <img class="h-8 w-auto" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png" alt="logo">
                            <h1>Ease</h1>
                        </div>

                        <div class="mt-5 flex-1 h-0 overflow-y-auto">
                            <nav class="mt-5 px-2 space-y-1">
                                <template v-for="item in getMenu">
                                    <router-link :to="item.path" active-class="bg-gray-100 text-gray-900" class="group flex items-center px-2 py-2 text-base font-medium rounded-md hover:text-gray-900 hover:bg-gray-100">
                                        {{ item.name }}
                                    </router-link>
                                </template>
                            </nav>
                        </div>
                    </div>
                </TransitionChild>

                <div class="flex-shrink-0 w-14" aria-hidden="true">
                    <!-- Dummy element to force sidebar to shrink to fit close icon -->
                </div>
            </Dialog>
        </TransitionRoot>

        <div class="hidden md:flex md:flex-shrink-0">
            <div class="flex flex-col w-64">

                <div class="flex flex-col flex-grow border-r border-gray-200 pt-5 pb-4 bg-white overflow-y-auto">

                    <div class="flex items-center flex-shrink-0 px-4 space-x-3">
                        <img class="h-8 w-auto" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png" alt="logo">
                        <h1>Ease</h1>
                    </div>

                    <div class="mt-5 flex-grow flex flex-col">
                        <nav class="flex-1 px-2 space-y-1 bg-white" aria-label="Sidebar">

                            <div>
                                <template v-for="item in getMenu">
                                    <router-link :to="item.path" active-class="bg-gray-100 text-gray-900" class="group w-full flex items-center pl-7 pr-2 py-2 text-sm font-medium rounded-md hover:text-gray-900 hover:bg-gray-100">
                                        {{ item.name }}
                                    </router-link>
                                </template>
                            </div>

                        </nav>
                    </div>
                </div>

            </div>
        </div>

        <div class="flex flex-col w-0 flex-1 overflow-hidden">

            <div class="md:hidden pl-1 pt-1 sm:pl-3 sm:pt-3">

                <button @click="sidebarOpen = true" class="-ml-0.5 -mt-0.5 h-12 w-12 inline-flex items-center justify-center rounded-md text-gray-500 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>

            <main class="flex-1 relative z-0 overflow-y-auto focus:outline-none" tabindex="0">
                <div class="py-6">

                    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                        <h1 class="text-2xl font-semibold text-gray-900">{{ this.getRouteName }}</h1>
                    </div>

                    <slot />
                </div>
            </main>
        </div>
    </div>

</template>

<script>
import { ref } from 'vue'
import { Dialog, DialogOverlay, TransitionChild, TransitionRoot } from '@headlessui/vue'

export default {
    components: {
        Dialog,
        DialogOverlay,
        TransitionChild,
        TransitionRoot
    },
    computed: {
        getMenu() {
            return this.$router.getRoutes().map(route => ({
                path: route.path,
                name: route.name
            }))
        },
        getRouteName() {
            return this.$route.name
        }
    },
    setup() {
        const sidebarOpen = ref(false)

        return {
            sidebarOpen
        }
    }
}
</script>
