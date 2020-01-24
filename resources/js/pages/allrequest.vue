<template>
    <div>
    <header class="header header-bg header-account">
        <div class="mobile-menu">
            <div class="container">
                <div class="right main-nav-brand">
                    <a href="home.html"><img src="assets/img/sitelogo.png" alt=""></a>
                </div>


                <div class="mobile-toggle">
                    <span><i class="fas fa-bars"></i></span>
                </div>
                <div class="mobile-open-container">
                    <div class="main-nav-list">
                        <ul class="nav-content">
                            <li ><router-link to="/">Home</router-link></li>
                            <li ><router-link to="/about">About</router-link></li>
                            <li ><router-link to="/">Website</router-link></li>
                            <li ><router-link to="/">Apps</router-link></li>
                            <li ><router-link to="/">Games</router-link></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-nav">
            <div class="container">
                <nav class="navigation">
                    <div class="col-md-2">
                        <a href="home.html">
                            <div class="logo-2">
                            
                            </div>
                        </a>
                        
                    </div>
                    <div class="col-md-8 center">
                        <ul class="nav_list nav-exept-home">
                             <li ><router-link to="/">Home</router-link></li>
                            <li ><router-link to="/about">About</router-link></li>
                            <li ><router-link to="/">Website</router-link></li>
                            <li ><router-link to="/">Apps</router-link></li>
                            <li ><router-link to="/">Games</router-link></li>
							

                        </ul>
                    </div>

                
                </nav>
            </div>
        </div>


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

                                    <div class="describe">

                                        <h3 class="member-name"><span>Mehedi Rahman</span>sent you a download request</h3>
                                        <p class="describe-p">Student ID: 1612020051</p>
                                        <p class="describe-p">He wants source code for learn how to apply code properly</p>
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

    </header>
    </div>
</template>
<script>
export default {
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