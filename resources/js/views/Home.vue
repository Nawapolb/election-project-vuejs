<template>
    <div>
        <Parallax></Parallax>
        <section id="section03" class="demo">
            <a href="#grid-home"><span></span>Scroll</a>
        </section>
        <div class="area-free"></div>
        <GridHome id="grid-home"></GridHome>
        <section id="section03" class="demo">
            <a href="#"><span></span>Scroll</a>
        </section>
    </div>
</template>

<script>
import $ from 'jquery';
import Parallax from '../components/Parallax.vue';
import GridHome from '../components/GridHome.vue';

/* script */

$(function() {
  $('a[href*=\\#]').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
  });
});

/* export default */

export default {
    data(){
        return{

        }
    },
    components:{
        Parallax,
        GridHome,
    },
    created(){

    }
}
</script>

<style scoped>

    .area-free{
        width:100%;
        height:20px;
        background:black;
    }

/* scroll down */
    .demo a {
        position: absolute;
        left: 48%;
        margin-top:-80px;
        z-index: 2;
        display: inline-block;
        -webkit-transform: translate(0, -50%);
        transform: translate(0, -50%);
        color: #fff;
        font : normal 400 20px/1 'Josefin Sans', sans-serif;
        letter-spacing: .1em;
        text-decoration: none;
        transition: opacity .3s;
    }
    .demo a:hover {
        opacity: .5;
    }

    #section03 a {
        padding-top: 60px;
    }
    #section03 a span {
        position: absolute;
        top: 0;
        left: 50%;
        width: 46px;
        height: 46px;
        margin-left: -23px;
        border: 1px solid #fff;
        border-radius: 100%;
        box-sizing: border-box;
    }
    #section03 a span::after {
        position: absolute;
        top: 50%;
        left: 50%;
        content: '';
        width: 16px;
        height: 16px;
        margin: -12px 0 0 -8px;
        border-left: 1px solid #fff;
        border-bottom: 1px solid #fff;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        box-sizing: border-box;
    }
    #section03 a span::before {
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        content: '';
        width: 44px;
        height: 44px;
        box-shadow: 0 0 0 0 rgba(255,255,255,.1);
        border-radius: 100%;
        opacity: 0;
        -webkit-animation: sdb03 3s infinite;
        animation: sdb03 3s infinite;
        box-sizing: border-box;
    }
    @-webkit-keyframes sdb03 {
        0% {
            opacity: 0;
        }
        30% {
            opacity: 1;
        }
        60% {
            box-shadow: 0 0 0 60px rgba(255,255,255,.1);
            opacity: 0;
        }
        100% {
            opacity: 0;
        }
    }
    @keyframes sdb03 {
        0% {
            opacity: 0;
        }
        30% {
            opacity: 1;
        }
        60% {
            box-shadow: 0 0 0 60px rgba(255,255,255,.1);
            opacity: 0;
        }
        100% {
            opacity: 0;
        }
    }

</style>


