<template>
    <div>
        <router-view></router-view>
    </div>

</template>

<script>
export default {
    data(){
        return{
            categories:'',
        }
    },
    created() {
        this.getCategories();
    },
    methods:{
        getCategories(){
            axios.get('/api/categories')
                .then(res => {
                    this.categories = res.data;
                })
                .catch(err => console.log(err))
        }
    }
}
</script>
