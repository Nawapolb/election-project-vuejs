<template>
  <div class="area-check-score">
    <div id="chart-score">
        <div id="description">
            <h2>ผลคะแนนการเลือกตั้ง</h2>
        </div>
        <apexcharts width="100%" height="350" type="bar" :options="chartOptions" :series="series"></apexcharts>
        <div id="description">
            <h4>** ปล. คะแนนจะทำการรีเซ็ตทุก ๆ 5 วินาที **</h4>
        </div>
    </div>
  </div>
</template>

<script>

import axios from 'axios';
import VueApexCharts from 'vue-apexcharts';

export default {
    name: 'chart-score',
    components:{
        apexcharts: VueApexCharts,
    },
    data(){
        return{
            candidate_1: 1,
            candidate_2: 2,
            candidate_3: 3,
            chartOptions: {
                chart: {
                    height: 350,
                    type: 'bar',
                    events: {
                    click: function (chart, w, e) {
                        console.log(chart, w, e)
                    }
                    },
                },
                colors:['#F44336', '#E91E63', '#9C27B0'],
                plotOptions: {
                    bar: {
                    columnWidth: '45%',
                    distributed: true
                    }
                },
                dataLabels: {
                    enabled: false,
                },
                xaxis: {
                    categories: ['Candidate 1', 'Candidate 2', 'Candidate 3'],
                    labels: {
                        style: {
                            colors:['#F44336', '#E91E63', '#9C27B0'],
                            fontSize: '14px'
                        }
                    }
                },
            },
            series: [{
                name: 'Score',
                data: [0 , 0 , 0],
            }],
        }
    },
    methods:{
        getCandidateScore(){
            axios({
                method:'post',
                url:'/getCandidateScore',
            }).then((response) => {
                var candidate_1 = parseInt(response.data[0], 16);
                var candidate_2 = parseInt(response.data[1], 16);
                var candidate_3 = parseInt(response.data[2], 16);
                this.series = [{
                    data: [candidate_1,candidate_2,candidate_3]
                }]
            })
        }
    },
    created(){

        axios({
              method:'post',
              url:'/getCandidateScore',
          }).then((response) => {
              var candidate_1 = parseInt(response.data[0], 16);
              var candidate_2 = parseInt(response.data[1], 16);
              var candidate_3 = parseInt(response.data[2], 16);
              this.series = [{
                  data: [candidate_1,candidate_2,candidate_3]
              }]

              var self = this;

                window.setInterval(function(){
                    self.getCandidateScore();
                }, 5000);
          })

    },

}


</script>

<style scoped>

    .area-check-score{
        width:60%;
        height:100%;
        margin:0 auto;
        margin-top:150px;
    }

    #description{
        text-align:center;
    }

</style>

