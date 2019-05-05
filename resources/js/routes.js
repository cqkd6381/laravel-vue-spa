import VueRouter from 'vue-router'
import Store from './store/index'
import JwtToken from './helpers/jwt'

let routes = [
    {
        path: '/',
        name: 'home',
        components: require('./components/pages/Home'),
        meta: {}
    },
    {
        path: '/about',
        components: require('./components/pages/About'),
        meta: {}
    },
    {
        path: '/posts/:id',
        name: 'posts',
        components: require('./components/posts/Post'),
        meta: {}
    },
    {
        path: '/register',
        name: 'register',
        components: require('./components/register/Register'),
        meta: {}
    },
    {
        path: '/login',
        name: 'login',
        components: require('./components/login/Login'),
        meta: {requireGuest: true}
    },
    {
        path: '/confirm',
        name: 'confirm',
        components: require('./components/confirm/Email'),
        meta: {}
    },
    {
        path: '/profile',
        name: 'profile',
        components: require('./components/user/Profile'),
        meta: {requireAuth: true}
    }
];

const router = new VueRouter({
    mode: 'history',
    routes
});

router.beforeEach((to, from, next) => {
    if(to.meta.requireAuth) {
        if(Store.state.AuthUser.authenticated || JwtToken.getToken()) {
            return next()
        }else{
            return next({name: 'login'})
        }
    }
    if(to.meta.requireGuest) {
        if(Store.state.AuthUser.authenticated || JwtToken.getToken()) {
            return next({name: 'home'})
        }else{
            return next()
        }
    }
    return next()
});

export default router

