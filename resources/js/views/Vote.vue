<template>
    <div id="area-vote">
        <div id="area-head">
            <h1>ยินดีต้อนรับผู้ใช้สิทธิ์เลือกตั้ง ! </h1>
            <div style="width:70%; margin:0 auto;">
                <hr>
                <h4 v-if="this.$route.params.sex == 'Male'">ข้อมูลผู้ใช้สิทธิ์ : Mr. {{ this.$route.params.name }} {{ this.$route.params.surname }}</h4>
                <h4 v-if="this.$route.params.sex == 'Female'">ข้อมูลผู้ใช้สิทธิ์ : Ms. {{ this.$route.params.name }} {{ this.$route.params.surname }}</h4>
                <h4>เลขบัตรประชาชน : {{ this.$route.params.ssn }}</h4>
            </div>
        </div>
        <v-container>
            <v-layout align-center justify-space-around row fill-height wrap>
                <v-flex d-flex xs12 sm6 md4>
                   <div id="card-active">
                    <v-card style="padding-top:30px;">
                        <v-layout>
                            <v-flex xs12>
                                <v-img :src="require('../../asset/election-logo-black.png')" class="img-center"/>
                            </v-flex>
                        </v-layout>
                        <v-layout>
                            <v-flex xs12>
                            <v-card-title primary-title>
                                <div>
                                    <div class="headline">Candidate 1</div>
                                    <div>information ...</div>
                                </div>
                            </v-card-title>
                            </v-flex>
                        </v-layout>
                        <v-divider light></v-divider>
                        <v-card-actions class="pa-3">
                            <v-btn flat color="orange">นโยบายเพิ่มเติม</v-btn>
                            <v-spacer></v-spacer>
                            <v-btn flat color="green" @click="voteCandidate(1)">เลือกพรรคนี้ !</v-btn>
                        </v-card-actions>
                    </v-card>
                    </div>
                </v-flex>
                <v-flex d-flex xs12 sm6 md4>
                    <div id="card-active">
                    <v-card style="padding-top:30px;">
                        <v-layout>
                            <v-flex xs12>
                                <v-img :src="require('../../asset/election-logo-black.png')" class="img-center"/>
                            </v-flex>
                        </v-layout>
                        <v-layout>
                            <v-flex xs12>
                            <v-card-title primary-title>
                                <div>
                                    <div class="headline">Candidate 2</div>
                                    <div>information ...</div>
                                </div>
                            </v-card-title>
                            </v-flex>
                        </v-layout>
                        <v-divider light></v-divider>
                        <v-card-actions class="pa-3">
                            <v-btn flat color="orange">นโยบายเพิ่มเติม</v-btn>
                            <v-spacer></v-spacer>
                            <v-btn flat color="green" @click="voteCandidate(2)">เลือกพรรคนี้ !</v-btn>
                        </v-card-actions>
                    </v-card>
                    </div>
                </v-flex>
                <v-flex d-flex xs12 sm6 md4>
                    <div id="card-active">
                    <v-card style="padding-top:30px;">
                        <v-layout>
                            <v-flex xs12>
                                <v-img :src="require('../../asset/election-logo-black.png')" class="img-center"/>
                            </v-flex>
                        </v-layout>
                        <v-layout>
                            <v-flex xs12>
                            <v-card-title primary-title>
                                <div>
                                    <div class="headline">Candidate 3</div>
                                    <div>information ...</div>
                                </div>
                            </v-card-title>
                            </v-flex>
                        </v-layout>
                        <v-divider light></v-divider>
                        <v-card-actions class="pa-3">
                            <v-btn flat color="orange">นโยบายเพิ่มเติม</v-btn>
                            <v-spacer></v-spacer>
                            <v-btn flat color="green" @click="voteCandidate(3)">เลือกพรรคนี้ !</v-btn>
                        </v-card-actions>
                    </v-card>
                    </div>
                </v-flex>
            </v-layout>
        </v-container>

        <v-dialog v-model="loading" persistent fullscreen>
            <v-app id="inspire">
                <!-- <v-container fill-height>
                    <v-layout row justify-center align-center>
                        <v-progress-circular indeterminate :size="70" :width="7" color="purple"></v-progress-circular>
                    </v-layout>
                </v-container> -->
                <Loading></Loading>
            </v-app>
        </v-dialog>
    </div>
</template>

<script>

import axios from 'axios';
import Swal from 'sweetalert2';
import Loading from '../components/Loading.vue';

export default {
    data(){
        return{
            loading:false,
        }
    },
    components:{
        Loading,
    },
    methods:{
        voteCandidate(candidate_id){
            if(candidate_id == 1){
                var candidate = 'Candidate 1';
            }else if(candidate_id == 2){
                var candidate = 'Candidate 2';
            }else if(candidate_id == 3){
                var candidate = 'Candidate 3';
            }

            Swal.fire({
                title: 'คุณต้องการเลือก ' + candidate + ' ใช่หรือไม่ ?',
                text: "เมื่อคุณเลือกแล้วไม่สามารถเปลี่ยนผลโหวตได้ กรุณากดปุ่ม Yes เมื่อท่านแน่ใจ.",
                type: 'warning',
                width: 600,
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes'
            }).then((result) => {
                if (result.value) {
                    this.loading = true;

                     axios({
                        method:'post',
                        url:'/voteCandidate',
                        data:{
                            candidate_id: candidate_id,
                            name: this.$route.params.name,
                            surname: this.$route.params.surname,
                            age: this.$route.params.age,
                            sex: this.$route.params.sex,
                            ssn: this.$route.params.ssn,
                        }
                    }).then((response) => {
                        console.log(response.data);
                        if(response.data == true){
                            this.loading = false;
                            Swal.fire(
                            'Vote Success!',
                            'คุณใช้สิทธิ์เลือกตั้งเรียบร้อยแล้ว.',
                            'success'
                            ).then(() => {
                                this.$router.push({path: '/'});
                            })
                        }
                    })
                }
            })

        }
    },
    props:['name','surname','age','sex','ssn'],
    created(){
        if(this.$route.params.name != null || this.$route.params.surname != null || this.$route.params.age || this.$route.params.sex || this.$route.params.ssn){
            console.log('true!');
        }else{
            console.log('false!');
            this.$router.push({path: '/'});
        }
    }
}
</script>

<style scoped>
    #area-vote{
        width:80%;
        margin:0 auto;
        margin-top:100px;
    }

    #area-head{
        width:60%;
        margin:0 auto;
        text-align:center;
    }

    .img-center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
    }

    #card-active{
        transition:0.5s all;
        margin:30px;
    }

    #card-active:hover{
        -webkit-box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);
        -moz-box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);
        box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);
    }

    .loading-dialog{
        width:100%;
        background: white;
    }
</style>

