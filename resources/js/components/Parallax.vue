<template>
    <div>
        <v-app>
        <v-parallax dark :src="require('../../asset/banner.png')" :height="this.height">
            <v-layout column justify-center>
                <div id="area-font">
                    <h1 id="head-font1">Blockchain for</h1>
                    <h1 id="head-font2">Election !</h1>
                </div>
                <div class="wrap">
                    <a href="/voter" class="button">TEST ELECTION</a>
                </div>
            </v-layout>
        </v-parallax>
        </v-app>
    </div>
</template>

<script>
export default {
    data(){
        return{
            height:0,
        }
    },
    methods:{
        windowHeight () {
        this.height = window.innerHeight;
      },
    },
    created(){
        if (process.browser) { 
          this.height = window.innerHeight;
          window.addEventListener('resize', this.windowHeight);
        }
    }
}
</script>

<style scoped>

    @font-face {
        font-family: font1;
        src: url('../../font/Gorgeous-Grafix.otf');
    }

    @font-face {
        font-family: font2;
        src: url('../../font/KeepCalm-Medium.ttf');
    }

    #area-font{
        margin-top:-200px;
    }

    .wrap {
        position:absolute;
        margin-top:200px;
        left:120px;
        text-align: center;
        width:250px;
    }

    a {
        -webkit-transition: all 200ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
        -moz-transition: all 200ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
        -ms-transition: all 200ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
        -o-transition: all 200ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
        transition: all 200ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
        display: block;
        margin: 20px auto;
        max-width: 250px;
        text-decoration: none;
        border-radius: 4px;
        padding: 20px 30px;
        font-size:20px;
    }

    a.button {
        /* color: rgba(30, 22, 54, 0.6); */
        /* box-shadow: rgba(30, 22, 54, 0.4) 0 0px 0px 2px inset; */
        color: black;
        box-shadow: black 0 0px 0px 2px inset;
    }

    a.button:hover {
        color: rgba(255, 255, 255, 0.85);
        /* box-shadow: rgba(30, 22, 54, 0.7) 0 0px 0px 40px inset; */
        box-shadow: #186d1e 0 0px 0px 40px inset;;
    }

    #head-font1{
        font-size:90px;
        font-family: font2;
        padding-left:100px;
        color:black;
    }

    #head-font2{
        font-size:110px;
        font-family: font1;
        padding-left:100px;
        color:black;
    }
</style>

