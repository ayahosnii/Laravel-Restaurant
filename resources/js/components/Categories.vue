<template>

    <div class="card my-3">
        <h5 class="card-header" style="background: #f9d342; color:white">Categories</h5>
        <div class="card-body">
            <ul class="list-unstyled mb-0">
                <li v-for="category in categories" :key="category.id">

                    <a :href="'/category/'+category.slug+'/posts'" style="font-family: 'Kdam Thmor Pro', sans-serif; font-size: medium">{{ category.name }}</a>

                </li>

            </ul>
        </div>
    </div>

</template>

<script>
export default {
    data(){
        return{
            categories:{},
        }
    },
    mounted() {
        this.getCategories();
    },

    methods:{
        getCategories(){
            axios.get('/api/categories')
                .then(res => {
                    this.categories = res.data
                })
                .catch(err => console.log(err))
        }
    },
}
</script>
