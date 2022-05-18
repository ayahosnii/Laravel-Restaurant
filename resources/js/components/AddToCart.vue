<template>
    <div>
        <a href="#" class="w-c-q-icn" v-on:click.prevent="addProductToCart()"><i class="fa fa-shopping-bag"></i></a>
    </div>
</template>

<script>
export default {
    data() {

    },
    props:['productId', 'userId'],
    methods:{
         addProductToCart() {

            //Check if you are login
            this.addProductToCart()
            {
                if(this.userId === 0){
                    this.$toastr.e('You need to login, to add this product in Cart');
                    return;
                }

                //If user logged in then add item to cart
                /*let response = await axios.post('/cart', {
                    'product_id': this.productId
                })*/
            }
        },
    },
    mounted() {
        console.log('Component mounted.')
    }
}
</script>
