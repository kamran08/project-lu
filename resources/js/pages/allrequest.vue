<template>
    <div>
   <headerSection/>



        <div class="second-section-add-member content-bg ptb-30">
            <div class="container">
                <div class="section-content">
                    <div class="authentication-row full-card">
                        <div class="col-md-12 col-sm-12">
                            <div class="authentication-name">
                                <div class="name-item for-notification" v-for="(item,index) in alldata" :key="index">
                                    <div class="image" v-if="item.user && item.user.image">
                                        <img class="hachib" :src="item.user.image" alt="">
                                    </div>

                                    <div class="describe" >

                                        <h3 class="member-name" v-if="item.user"><span>{{item.user.name}}</span>sent you a download request</h3>
                                        <h3 class="member-name" v-if="item.email"><span>Email:</span>{{item.email}}</h3>
                                        <p class="describe-p" v-if="item.user.student_id">{{item.user.student_id}}</p>
                                        <p class="describe-p">{{item.reason}}</p>
                                    </div>
                                    <div class="authentication save-and-exit-button ">

                                        <a :href="'mailto:'+item.email" target="_top"><button class="save-now-button edit-info-button access-btn notifivation-btn-1">Send Mail</button></a>
                                            

                                        <button class="save-now-button edit-info-button access-btn notifivation-btn-2" @click="deleteRequest(item,index)">Delete</button>

            
                                    </div>

                                </div>
                        


                            </div>
                        </div>
                        

                       
                    </div>
                </div>
            </div>


        </div>

    </div>
</template>
<script>
import headerSection from '../components/header.vue'

export default {
     components:{
      headerSection,
    },
    data(){
        return{
            alldata:{}
        }
    },
    created(){
        this.getallRequest()
    },
    methods:{
        async getallRequest(){
            const res = await this.callApi('get','getallrequest')
            if(res.status==200){
                this.alldata = res.data
            }
            else if(res.status==401){
                window.location = '/'
            }
            else{
                this.swr()
                window.location = '/'
            }
        },
        async deleteRequest(item,index){
            if (!confirm("Are you sure to delete this")) {
                return;
            }
            const res = await this.callApi('post', 'deleteRequest',item)
            if(res.status==200){
                this.s("request has been deleted!!")
                this.alldata.splice(index,1)
            }
            else if(res.status===401){
                this.e(res.data.msg)
            }
            else{this.swr()}
        }
    }
}
</script>