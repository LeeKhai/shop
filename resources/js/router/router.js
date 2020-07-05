import Vue from 'vue';
import VueRouter from 'vue-router';
import Home from '../components/Home';
import UserList from '../components/UserList';
import UserDetail from '../components/UserDetail';

Vue.use(VueRouter);

export default new VueRouter({
    base: '/admin',
    mode: 'history',
    routes: [{
        path: '/admin',
        name: 'home',
        component: Home,
    },
        {
            path: 'admin/user-list',
            name: 'user.list',
            component: UserList,
        },
        {
            path: 'admin/user-detail',
            name: 'user.detail',
            component: UserDetail,
        }
    ],
});
