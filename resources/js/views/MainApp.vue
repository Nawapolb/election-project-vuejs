<template>
    <div id="main">
        <v-app>
            <HeaderHome style="width:100%; position: fixed; z-index:99;"></HeaderHome>
            <router-view></router-view>
            <Footer></Footer>
        </v-app>
    </div>
</template>

<script>

import HeaderHome from './../components/HeaderHome';
import Footer from './../components/Footer';

    export default {
        name: 'main-app',
        components:{
            HeaderHome,
            Footer,
        },
        methods:{
            
        }
    }
</script>

<style scoped>

</style>

