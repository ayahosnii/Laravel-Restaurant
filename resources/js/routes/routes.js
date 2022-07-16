import Vue from 'vue';
import VueRouter from 'vue-router'


Vue.use(VueRouter)

import Home from '../components/GlobalHome';
import Post from '../components/Posts.vue';
import PostDetails from '../components/PostDetails.vue';

const routes = [
    { path: '/blog', component: Post, name: 'Post' },
    { path: '/post/:slug', component: PostDetails, name: 'PostDetails' },
 ];


const router = new VueRouter({
    routes,
    hashbang: false,
    mode: 'history'
})

export default router;
