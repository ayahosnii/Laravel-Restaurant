<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">Aya</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
<!--                        <li class="nav-item active">
                            <router-link  class="nav-link" v-if="isAdmin" to="/admin">admin
                                <span class="sr-only">(current)</span>
                            </router-link>
                        </li>-->
                        <li class="nav-item active">
                            <router-link  class="nav-link" to="/">Home
                                <span class="sr-only">(current)</span>
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <router-view></router-view>
    </div>

</template>

<script>
export default {
    created(){
        this.updateToken()
        //this.setUser();
    },methods:{

        updateToken(){
            let token =JSON.parse(localStorage.getItem('userToken'));
            //this.$store.commit('setUserToken',token)
        },
        /*setUser(){
            if(this.isLogged){
                axios.get('/api/user')
                    .then(res => {
                        //console.log(res.data)
                        this.$store.commit('setUser', res.data.user)
                    })
            }
        },
        logout(){
            this.$store.commit('logout')
        }*/
    },
    /*computed:{
        isLogged(){
            return this.$store.getters.isLogged
        },
        isAdmin(){
            return this.$store.getters.isAdmin
        }
    }*/
}
</script>
