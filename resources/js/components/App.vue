<template>
    <div>
        <top-menu></top-menu>
        <transition name="fade" mode="out-in">
            <router-view></router-view>
        </transition>
    </div>
</template>

<script>
    import TopMenu from './common/TopMenu'
    export default {
        name: "App",
        components: {
            TopMenu
        }
    }
</script>

<style scoped>

</style>