import VueRouter from 'vue-router';

let routes = [
    {
        path: '/',
        components: require('./components/pages/Home')
    },
    {
        path: '/about',
        components: require('./components/pages/About')
    },
    {
        path: '/posts/:id',
        name: 'posts',
        components: require('./components/posts/Post')
    },
    {
        path: '/register',
        name: 'register',
        components: require('./components/register/Register')
    },
    {
        path: '/confirm',
        name: 'confirm',
        components: require('./components/confirm/Email')
    }
];

export default new VueRouter({
    mode: 'history',
    routes
});

