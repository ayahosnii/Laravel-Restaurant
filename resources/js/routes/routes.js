import Vue from 'vue';
import VueRouter from 'vue-router'


Vue.use(VueRouter)

import Post from '../components/Posts.vue'
import PostDetails from '../components/PostDetails.vue';
import CategoryPosts from '../components/CategoryPosts.vue';
//import CustomerService from "../components/CustomerService";

export const routes = [
    { path: '/en/post', component: Post, name: 'Post' },
    { path: '/ar/post', component: Post, name: 'postAr'},

    { path: '/en/post/:slug', component: PostDetails, name: 'PostDetails' },
    { path: '/ar/post/:slug', component: PostDetails, name: 'postDetailsAr' },

    {
        path: '/en/category/:slug/posts',
        component: CategoryPosts,
        name: 'CategoryPosts'
    },
    {
        path: '/ar/category/:slug/posts',
        component: CategoryPosts,
        name: 'CategoryPostsAr'
    }

    /*
        { path: '/en/customer-server/:uuid', component: CustomerService, name: 'CustomerService' },
        { path: '/ar/customer-server/:uuid', component: CustomerService, name: 'CustomerService' },*/

 ];


const router = new VueRouter({
    routes,
    hashbang: false,
    mode: 'history'
})

export default router;
