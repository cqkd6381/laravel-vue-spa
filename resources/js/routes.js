import VueRouter from 'vue-router';

let routes = [
    {
        path: '/',
        components: require('./components/Home')
    },
    {
        path: '/about',
        components: require('./components/About')
    },
    {
        path: '/posts/:id',
        name: 'posts',
        components: require('./components/Post')
    }
];

export default new VueRouter({
    mode: 'history',
    routes
});

