import Vue from 'vue';
import Router from 'vue-router';
import Document from '../components/document/';
import LoggedUser from '../components/loggedUser';

Vue.use(Router);

export default new Router({
    routes: [
        {
            path: "/",
            name: 'Logged User',
            component: LoggedUser
        },
        {
            path: '/about',
            name: 'Document',
            component: Document
        }
    ]
})