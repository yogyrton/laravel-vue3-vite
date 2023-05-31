<template>
    <h1 class="m-5">Создать</h1>


    <div class="m-5  w-50">
        <label for="">Имя</label>
        <input type="text" class="form-control" v-model="name" name="name">

        <label for="">Возраст</label>
        <input type="number" class="form-control" v-model="age" name="age">

        <label for="">Работа</label>
        <input type="text" class="form-control" v-model="job" name="job">

        <button @click.prevent="addPeople" type="submit" class="btn btn-primary">Создать</button>
    </div>
</template>

<script>
export default {
    name: "FormPeople",
    data() {
        return {
            name: null,
            age: null,
            job: null,
        }
    },
    methods: {
        addPeople() {
            axios.post('api/people', {name: this.name, age: this.age, job: this.job})
                .then(res => {
                    this.name = ''
                    this.age = ''
                    this.job = ''
                    this.$parent.$refs.table.getAllPeoples()
                })
        }
    }
}
</script>

<style scoped>

</style>
