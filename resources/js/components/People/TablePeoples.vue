<template>

    <h1 class="m-5">Список людей</h1>

    <table class="table m-5 w-50">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Имя</th>
            <th scope="col">Возраст</th>
            <th scope="col">Работа</th>
            <th scope="col">Редактировать</th>
            <th scope="col">Удалить</th>
        </tr>
        </thead>
        <tbody>
        <template v-for="people in peoples">
            <tr :class="isEdit(people.id)  ? 'd-none' : ''">
                <th scope="row">{{ people.id }}</th>
                <td>{{ people.name }}</td>
                <td>{{ people.age }}</td>
                <td>{{ people.job }}</td>
                <td><a href="#" class="btn btn-primary" @click.prevent="inputID(people)">Редактировать</a></td>
                <td><a href="#" class="btn btn-danger" @click.prevent="deletePerson(people.id)">Удалить</a></td>
            </tr>

            <tr :class="isEdit(people.id)  ? '' : 'd-none'">
                <th scope="row">{{ people.id }}</th>
                <td><input type="text" v-model="name" class="form-control"></td>
                <td><input type="number" v-model="age" class="form-control"></td>
                <td><input type="text" v-model="job" class="form-control"></td>
                <td><a href="#" class="btn btn-success" @click.prevent="updateID(people.id)">Сохранить</a></td>
            </tr>
        </template>
        </tbody>
    </table>

</template>

<script>

export default {
    name: "TablePeoples",
    data() {
        return {
            peoples: null,
            inputId: null,
            name: null,
            age: null,
            job: null,
        }
    },
    mounted() {
        this.getAllPeoples()
    },
    methods: {
        getAllPeoples() {
            axios.get('api/people')
                .then(res => this.peoples = res.data)
        },
        inputID(people) {
            this.inputId = people.id
            this.name = people.name
            this.age = people.age
            this.job = people.job

        },
        updateID(id) {
            this.inputId = 0
            axios.patch(`api/people/${id}`, {name: this.name, age: this.age, job: this.job})
                .then(res => this.getAllPeoples())

        },
        isEdit(id) {
            return this.inputId === id
        },
        deletePerson(id) {
            axios.delete(`api/people/${id}`)
                .then(res => this.getAllPeoples())
        }
    }
}
</script>

<style scoped>

</style>
