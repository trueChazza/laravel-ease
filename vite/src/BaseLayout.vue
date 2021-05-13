<template>
    <div class="ease.h-screen ease.flex ease.overflow-hidden ease.bg-white">

        <TransitionRoot as="template" :show="sidebarOpen">

            <Dialog as="div" ease.static class="ease.fixed ease.inset-0 ease.flex ease.z-40 md:ease.hidden" @close="sidebarOpen = false" :open="sidebarOpen">
                <TransitionChild as="template" enter="ease.transition-opacity ease-linear ease.duration-300" enter-from="ease.opacity-0" enter-to="ease.opacity-100" leave="ease.transition-opacity ease-linear ease.duration-300" leave-from="ease.opacity-100" leave-to="ease.opacity-0">
                    <DialogOverlay class="ease.fixed ease.inset-0 ease.bg-gray-600 ease.bg-opacity-75" />
                </TransitionChild>

                <TransitionChild as="template" enter="ease.transition ease-in-out ease.duration-300 ease.transform" enter-from="ease.-translate-x-full" enter-to="ease.translate-x-0" leave="ease.transition ease-in-out ease.duration-300 ease.transform" leave-from="ease.translate-x-0" leave-to="ease.-translate-x-full">
                    <div class="ease.relative ease.flex-1 ease.flex ease.flex-col ease.max-w-xs ease.w-full ease.pt-5 ease.pb-4 ease.bg-white">

                        <TransitionChild as="template" enter="ease-in-out ease.duration-300" enter-from="ease.opacity-0" enter-to="ease.opacity-100" leave="ease-in-out ease.duration-300" leave-from="ease.opacity-100" leave-to="ease.opacity-0">
                            <div class="ease.absolute ease.top-0 ease.right-0 ease.-mr-12 ease.pt-2">
                                <button class="ease.ml-1 ease.flex ease.items-center ease.justify-center ease.h-10 ease.w-10 ease.rounded-full focus:ease.outline-none focus:ease.ring-2 focus:ease.ring-inset focus:ease.ring-white" @click="sidebarOpen = false">
                                    <span class="ease.sr-only">Close sidebar</span>
                                    <svg class="ease.h-6 ease.w-6 ease.text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </TransitionChild>

                        <div class="ease.flex-shrink-0 ease.flex ease.items-center ease.px-4 ease.space-x-4">
                            <img class="ease.h-8 ease.w-auto" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png" alt="logo">
                            <h1>Ease</h1>
                        </div>

                        <div class="ease.mt-5 ease.flex-1 ease.h-0 ease.overflow-y-auto">
                            <nav class="ease.mt-5 ease.px-2 ease.space-y-1">
                                <template v-for="item in getMenu">
                                    <router-link :to="item.path" active-class="ease.bg-gray-100 ease.text-gray-900" class="group ease.flex ease.items-center ease.px-2 ease.py-2 ease.text-base ease.font-medium ease.rounded-md hover:ease.text-gray-900 hover:ease.bg-gray-100">
                                        {{ item.name }}
                                    </router-link>
                                </template>
                            </nav>
                        </div>
                    </div>
                </TransitionChild>

                <div class="ease.flex-shrink-0 ease.w-14" aria-hidden="true">
                    <!-- Dummy element to force sidebar to shrink to fit close icon -->
                </div>
            </Dialog>
        </TransitionRoot>

        <div class="ease.hidden md:ease.flex md:ease.flex-shrink-0">
            <div class="ease.flex ease.flex-col ease.w-64">

                <div class="ease.flex ease.flex-col ease.flex-grow ease.border-r ease.border-gray-200 ease.pt-5 ease.pb-4 ease.bg-white ease.overflow-y-auto">

                    <div class="ease.flex ease.items-center ease.flex-shrink-0 ease.px-4 ease.space-x-3">
                        <img class="ease.h-8 ease.w-auto" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png" alt="logo">
                        <h1>Ease</h1>
                    </div>

                    <div class="ease.mt-5 ease.flex-grow ease.flex ease.flex-col">
                        <nav class="ease.flex-1 ease.px-2 ease.space-y-1 ease.bg-white" aria-label="Sidebar">

                            <div>
                                <template v-for="item in getMenu">
                                    <router-link :to="item.path" active-class="ease.bg-gray-100 ease.text-gray-900" class="group ease.w-full ease.flex ease.items-center ease.pl-7 ease.pr-2 ease.py-2 ease.text-sm ease.font-medium ease.rounded-md hover:ease.text-gray-900 hover:ease.bg-gray-100">
                                        {{ item.name }}
                                    </router-link>
                                </template>
                            </div>

                        </nav>
                    </div>
                </div>

            </div>
        </div>

        <div class="ease.flex ease.flex-col ease.w-0 ease.flex-1 ease.overflow-hidden">

            <div class="md:ease.hidden ease.pl-1 ease.pt-1 sm:ease.pl-3 sm:ease.pt-3">

                <button @click="sidebarOpen = true" class="ease.-ml-0.5 ease.-mt-0.5 ease.h-12 ease.w-12 ease.inline-flex ease.items-center ease.justify-center ease.rounded-md ease.text-gray-500 hover:ease.text-gray-900 focus:ease.outline-none focus:ease.ring-2 focus:ease.ring-inset focus:ease.ring-indigo-500">
                    <span class="ease.sr-only">Open sidebar</span>
                    <svg class="ease.h-6 ease.w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>

            <main class="ease.flex-1 ease.relative ease.z-0 ease.overflow-y-auto focus:ease.outline-none" tabindex="0">
                <div class="ease.py-6">

                    <div class="ease.max-w-7xl ease.mx-auto ease.px-4 sm:ease.px-6 md:ease.px-8">
                        <h1 class="ease.text-2xl ease.font-semibold ease.text-gray-900">{{ this.getRouteName }}</h1>
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
