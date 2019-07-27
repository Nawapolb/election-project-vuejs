<template>
    <div id="area-all" :style="'height:' + this.height + 'px;'">
        <div id="area-out">
            <div id="area-in">
                <transition name="fade">
                <v-layout row wrap v-if="this.active == 1" class="area-information">
                    <v-flex d-flex xs12 sm6 md5 class="area-in-information">
                        <div id="area-text">
                            <h1 id="area2-font-head1"><span style="font-size:80px;">BLOCKCHAIN</span> FOR</h1>
                            <h1 id="area2-font-head2">ELECTION !</h1>
                            <br><br>
                            <div id="area-description">
                                <h4>เทคโนโลยี Blockchain หากอธิบายให้เห็นภาพง่าย ๆ ลองนึกภาพว่ามันเป็นเสมือนโซ่ที่สร้างขึ้นเพื่อกระจายข้อมูลเก็บไว้ในชิ้นส่วนโซ่ที่ต่อกัน
                                แต่ข้อมูลเหล่านั้นจะไม่สามารถถูกเปลี่ยนแปลงได้ เรียกได้ว่า Blockchain เป็นอินเตอร์เน็ตในรูปแบบใหม่โดยเริ่มแรกถูกสร้างขึ้นมาเพื่อสร้างสกุลเงินดิจิทัล
                                (Digital Currency) เช่น Bitcoin อย่างไรก็ตามในตอนนี้เทคโนโลยี Blockchain ไม่ได้ถูกสร้างขึ้นเพื่อรองรับสกุลเงินดิจิทัลเพียงอย่างเดียวเท่านั้น ณ 
                                ปัจจุบันวงการอุตสาหกรรมอื่น ๆ ได้นำศักยภาพของเทคโนโลยี Blockchain ไปใช้ประโยชน์เพื่ออำนวยความสะดวกให้กับธุรกิจของตนอย่างแพร่หลายมากยิ่งขึ้น</h4>
                            </div>
                            <br><br><br><br>
                            <v-btn color="info" @click="next">NEXT <v-icon right dark>arrow_forward_ios</v-icon> </v-btn>
                        </div>
                    </v-flex>
                    <v-flex d-flex xs12 sm6 md7>
                        <div id="area-image">
                            <BlockchainImg1></BlockchainImg1>
                        </div>
                    </v-flex>
                </v-layout>
                </transition>
                <transition name="fade">
                <v-layout row wrap v-if="this.active == 2" class="area-information">
                    <v-flex d-flex xs12 sm6 md5 class="area-in-information">
                        <div id="area-text">
                            <h1 id="area2-font-head1"><span style="font-size:80px;">BLOCKCHAIN 2</span> FOR</h1>
                            <h1 id="area2-font-head2">ELECTION !</h1>
                            <br><br>
                            <div id="area-description">
                                <h4>เทคโนโลยี Blockchain หากอธิบายให้เห็นภาพง่าย ๆ ลองนึกภาพว่ามันเป็นเสมือนโซ่ที่สร้างขึ้นเพื่อกระจายข้อมูลเก็บไว้ในชิ้นส่วนโซ่ที่ต่อกัน
                                แต่ข้อมูลเหล่านั้นจะไม่สามารถถูกเปลี่ยนแปลงได้ เรียกได้ว่า Blockchain เป็นอินเตอร์เน็ตในรูปแบบใหม่โดยเริ่มแรกถูกสร้างขึ้นมาเพื่อสร้างสกุลเงินดิจิทัล
                                (Digital Currency) เช่น Bitcoin อย่างไรก็ตามในตอนนี้เทคโนโลยี Blockchain ไม่ได้ถูกสร้างขึ้นเพื่อรองรับสกุลเงินดิจิทัลเพียงอย่างเดียวเท่านั้น ณ 
                                ปัจจุบันวงการอุตสาหกรรมอื่น ๆ ได้นำศักยภาพของเทคโนโลยี Blockchain ไปใช้ประโยชน์เพื่ออำนวยความสะดวกให้กับธุรกิจของตนอย่างแพร่หลายมากยิ่งขึ้น</h4>
                            </div>
                            <br><br><br><br>
                            <v-btn color="info" @click="next">NEXT <v-icon right dark>arrow_forward_ios</v-icon> </v-btn>
                        </div>
                    </v-flex>
                    <v-flex d-flex xs12 sm6 md7>
                        <div id="area-image">
                            <BlockchainImg1></BlockchainImg1>
                        </div>
                    </v-flex>
                </v-layout>
                </transition>
                <transition name="fade">
                <v-layout row wrap v-if="this.active == 0" class="area-information">
                    <v-flex d-flex xs12 sm6 md5 class="area-in-information">
                        <div id="area-text">
                            <h1 id="area2-font-head1"><span style="font-size:80px;">BLOCKCHAIN 3</span> FOR</h1>
                            <h1 id="area2-font-head2">ELECTION !</h1>
                            <br><br>
                            <div id="area-description">
                                <h4>เทคโนโลยี Blockchain หากอธิบายให้เห็นภาพง่าย ๆ ลองนึกภาพว่ามันเป็นเสมือนโซ่ที่สร้างขึ้นเพื่อกระจายข้อมูลเก็บไว้ในชิ้นส่วนโซ่ที่ต่อกัน
                                แต่ข้อมูลเหล่านั้นจะไม่สามารถถูกเปลี่ยนแปลงได้ เรียกได้ว่า Blockchain เป็นอินเตอร์เน็ตในรูปแบบใหม่โดยเริ่มแรกถูกสร้างขึ้นมาเพื่อสร้างสกุลเงินดิจิทัล
                                (Digital Currency) เช่น Bitcoin อย่างไรก็ตามในตอนนี้เทคโนโลยี Blockchain ไม่ได้ถูกสร้างขึ้นเพื่อรองรับสกุลเงินดิจิทัลเพียงอย่างเดียวเท่านั้น ณ 
                                ปัจจุบันวงการอุตสาหกรรมอื่น ๆ ได้นำศักยภาพของเทคโนโลยี Blockchain ไปใช้ประโยชน์เพื่ออำนวยความสะดวกให้กับธุรกิจของตนอย่างแพร่หลายมากยิ่งขึ้น</h4>
                            </div>
                            <br><br><br><br>
                            <v-btn color="info" @click="next">NEXT <v-icon right dark>arrow_forward_ios</v-icon> </v-btn>
                        </div>
                    </v-flex>
                    <v-flex d-flex xs12 sm6 md7>
                        <div id="area-image">
                            <BlockchainImg1></BlockchainImg1>
                        </div>
                    </v-flex>
                </v-layout>
                </transition>
            </div>
        </div>
    </div>
</template>

<script>

import BlockchainImg1 from './BlockchainImg1.vue';

export default {
    data(){
        return{
            height:0,
            active: 1,
        }
    },
    components:{
        BlockchainImg1,
    },
    methods:{
        windowHeight () {
        this.height = window.innerHeight;
      },
       next () {
        const active = parseInt(this.active)
        this.active = (active < 2 ? active + 1 : 0)
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

    .fade-enter-active, .fade-leave-active {
        transition: opacity .5s;
        animation-delay: 1s;
    }
    .fade-enter, .fade-leave-to {
        animation-delay: 0s;
        opacity: 0;
    }

    #area-description{
        color:white;
        padding:30px;
    }

    .area-information{
        position:absolute;
        background:#0c0019;
    }

    .area-in-information{
        width:100%;
        padding:50px;
        padding-top:10%;
    }

    @font-face {
        font-family: font1;
        src: url('../../font/KeepCalm-Medium.ttf');
    }

    #area2-font-head1{
        font-size:50px;
        font-family: font1;
        color:white;
    }

    #area2-font-head2{
        font-size:60px;
        font-family: font1;
        color:white;
    }

    #area-all{
        /* padding-top:80px; */
    }

    #area-out{
        width:100%;
    }

    /* #area-in{
        padding:100px;
    } */

    #area-description{
        width:70%;
    }

    .area-img{
        text-align:center;
    }

    /* #header{
        text-align:center;
        font-family: Lamoon;
    } */

</style>
