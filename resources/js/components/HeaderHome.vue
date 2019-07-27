<template>
    <div id="header-home">
        <v-toolbar id="nav-function" class="nav-scrollbar-disable" flat :color="this.background">

            <!-- <router-link to="/" id="link"><v-btn flat large :color="this.color">Home</v-btn></router-link> -->
            <router-link to="/">
            <v-img :src="require('../../asset/election-logo-black.png')" id="logo-img" v-if="this.scroll == false"></v-img>
            <v-img :src="require('../../asset/election-logo-white.png')" id="logo-img" v-if="this.scroll == true"></v-img>
            </router-link>
            <v-spacer></v-spacer>
            <router-link to="/check-score" id="link"><v-btn flat :color="this.color">CHECK SCORE !</v-btn></router-link>
            <router-link to="/voter" id="link"><v-btn icon flat :color="this.color"><v-icon>check_box</v-icon></v-btn></router-link>
        </v-toolbar>
    </div>
</template>

<script>
export default {
    data(){
        return{
            background:'transparent',
            color:'black',
            scroll: false,
        }
    },
    methods:{
        handleScroll(){
                if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                    this.color = 'white';
                    this.scroll = true;
                    document.getElementById('nav-function').className = "nav-scrollbar-enable";
                } else {
                    this.background = 'transparent';
                    this.color = 'black';
                    this.scroll = false;
                    document.getElementById('nav-function').className = "nav-scrollbar-disable";
                }
            },
    },
    created() {
        if(process.browser) {
            window.addEventListener('scroll',this.handleScroll);
        }
    },
    destroyed() {
        if(process.browser) {
            window.removeEventListener('scroll',this.handleScroll);
        }
    }
}
</script>


<style scoped>
    #link{
        text-decoration: none;
    }

    .nav-scrollbar-enable{
        background:#30a03b;
        color:white;
        -webkit-box-shadow: 0px 2px 15px 0px rgba(0,0,0,0.75);
        -moz-box-shadow: 0px 2px 15px 0px rgba(0,0,0,0.75);
        box-shadow: 0px 2px 15px 0px rgba(0,0,0,0.75);
        transition:0.5s all;
    }

    .nav-scrollbar-disable{
        transition:0.5s all;
    }

    #logo-img{
        width:50px;
    }

</style>
