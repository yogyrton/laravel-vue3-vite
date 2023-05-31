<template>

    <table-peoples
        ref="table"
    ></table-peoples>

    <form-people></form-people>

</template>

<script>
import FormPeople from "./FormPeople.vue";
import TablePeoples from "./TablePeoples.vue";

export default {
    name: "App",
    components: {TablePeoples, FormPeople}
}
</script>

<style scoped>

</style>

