<template>
    <div id="voter">
        <h1>VOTER</h1>
        <div v-if="this.data == '' && this.permission == false">      
          <div id="ssn-textbox" style="width:70%; margin:0 auto;">
            <v-text-field v-validate="'required|digits:13'" v-model="ssn" label="Please input your SSN" name="ssn" required></v-text-field>
            <span style="color:red;" v-show="errors.has('ssn')">{{ errors.first('ssn') }}</span>
          </div>
          <br>
          <v-btn color="success" @click="getVoter">check permission</v-btn>
          <br><br>
        </div>
        <div v-if="this.data == '' && this.permission == true">
            <v-form>
                <v-container>
                    <v-layout>
                      <v-flex md12>
                        <v-text-field v-validate="'required'" v-model="name" label="Please input your name" name="name" required></v-text-field>
                        <span style="color:red;" v-show="errors.has('name')">{{ errors.first('name') }}</span>
                      </v-flex>
                    </v-layout>
                    <v-layout>
                      <v-flex md12>
                        <v-text-field v-validate="'required'" v-model="surname" label="Please input your surname" name="surname" required></v-text-field>
                        <span style="color:red;" v-show="errors.has('surname')">{{ errors.first('surname') }}</span>
                      </v-flex>
                    </v-layout> 
                    <v-layout>
                      <v-flex md6>
                        <v-select v-validate="'required'" v-model="sex" :items="items" label="Please select your sex" name="sex" required></v-select>
                        <span style="color:red;" v-show="errors.has('sex')">{{ errors.first('sex') }}</span>
                      </v-flex>
                      <v-flex md6>
                        <v-text-field v-validate="'required|integer|between:18,120'" v-model="age" label="Please input your age" name="age" required></v-text-field>
                        <span style="color:red;" v-show="errors.has('age')">{{ errors.first('age') }}</span>
                      </v-flex>
                    </v-layout>  
                </v-container>
            </v-form>
            <v-btn color="success" @click="moveToVote">use permission</v-btn>
            <br><br>
            <span style="color:red;">{{ this.message }}</span>
            <br>
        </div>
        <div v-if="this.data != ''">
            <v-form>
                <v-container>
                    <v-layout>
                      <v-flex md1>
                        Name
                      </v-flex>
                      <v-flex md5>
                        <v-text-field :label="this.data[0].name" required disabled></v-text-field>
                      </v-flex>
                      <v-flex md1>
                        Surname
                      </v-flex>
                      <v-flex md5>
                        <v-text-field :label="this.data[0].surname" required disabled></v-text-field>
                      </v-flex>
                    </v-layout> 
                    <v-layout>
                      <v-flex md1>
                        Sex
                      </v-flex>
                      <v-flex md2>
                        <v-text-field :label="this.data[0].sex" required disabled></v-text-field>
                      </v-flex>
                      <v-flex md1>
                        Age
                      </v-flex>
                      <v-flex md2>
                        <v-text-field :label="this.data[0].age" required disabled></v-text-field>
                      </v-flex>
                      <v-flex md1>
                        SSN
                      </v-flex>
                      <v-flex md5>
                        <v-text-field :label="this.data[0].ssn" required disabled></v-text-field>
                      </v-flex>
                    </v-layout> 
                    <v-layout>
                      <v-flex md1>
                        Address
                      </v-flex>
                      <v-flex md11>
                        <v-text-field :label="this.data[0].address" required disabled></v-text-field>
                      </v-flex>
                    </v-layout>  
                </v-container>
                <h3 style="color: green;">{{ this.message }}</h3>
                <br>
                <v-btn color="success" @click="clear">clear</v-btn>
            </v-form>
        </div>
    </div>
</template>

<script>

import axios from 'axios';

export default {
  data(){
    return {
      error:'',
      data:'',
      message:'',
      permission:false,
      items: ['Male', 'Female'],
      name:'',
      surname:'',
      sex:'',
      age:'',
      ssn:'',
      address:'',
    }
  },
  methods:{
    getVoter(){
      this.$validator.validateAll().then(result => {
        if(result){
            if(this.ssn != ''){

            this.error = '';
            this.message = '';
            this.permission = false;

            axios({
                method:'post',
                url:'/getVoter',
                data:{
                  ssn:this.ssn,
                }
            }).then((response) => {
                this.data = JSON.parse(response.data);
                console.log(this.data);
                if(this.data.length == 0){
                  this.permission = true;
                }else if(this.data.length != 0){
                  this.message = 'คุณทำการใช้สิทธิ์เลือกตั้งแล้ว !';
                }
            }).catch((error) => {
              console.log(error);
            })

          }else{
            this.error = 'Please input your SSN';
          }
        }
      })
    },
    moveToVote(){
      this.$validator.validateAll().then(result => {
        if(result){
          if(this.name == '' || this.surname == '' || this.age == '' || this.sex == '' || this.ssn == ''){
            this.message = 'กรุณากรอกข้อมูลให้ครบถ้วน !';
          }else{
            this.message = '';
            this.$router.push({name: 'vote', params:{ name: this.name, surname: this.surname, sex: this.sex, age: this.age, ssn: this.ssn } });
          }
        }
      })
    },
    clear(){
      this.error = '';
      this.message = '';
      this.name = '';
      this.surname = '';
      this.age = '';
      this.sex = '';
      this.ssn = '';
      this.address = '';
      this.data = '';
      this.permission = false;
    }
  }
}
</script>


<style scoped>

    #voter{
      width:40%;
      margin:0 auto;
      text-align:center;
      margin-top:200px;
      padding:30px;
      border:1px solid #777777;
      border-radius: 10px;
    }

</style>
