<template>

    <router-link :to="{name: 'home'}">MAIN</router-link>
    <br>
    <router-link :to="{name: 'peoples_crud'}" >PEOPLES_CRUD</router-link>


    <router-view></router-view>
</template>

<script>


export default {
    name: "App",

}
</script>

<style scoped>

</style>

