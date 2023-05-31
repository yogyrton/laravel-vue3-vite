import {createRouter, createWebHistory} from 'vue-router'
import PeopleComponent from "../components/People/PeopleComponent.vue";
import MainComponent from "../components/MainComponent.vue";


const routes = [
    {
        path: '/',
        component: MainComponent,
        name: 'home'
    },
    {
        path: '/peoples_crud',
        component: PeopleComponent,
        name: 'peoples_crud'
    }
]

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router
