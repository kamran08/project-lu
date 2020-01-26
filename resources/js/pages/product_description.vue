<template>
    <div>
        <headerSection/>
        <div class="all-temp-header">
            <div class="container">
                <h1 class="Product-Header Product-desc-header">Ecommerce website template</h1>
                <p class="Product-desc-p">I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just
                    click “Edit Text” or double click me.I'm a paragraph. Click here to add your own text and edit me.
                    It’s easy. Just
                    click “Edit Text” or double click me.</p>
                <img class="all-temp-back-right-up" src="/assets/img/back-design-right-up.png" alt="">
            </div>
        </div>

        <div class="second-section-account content-bg product-desc-all ptb-30">
            <div class="container">



                <div class="row">

                    <div class="col-md-8 col-sm-8 ">
                        <div class="image-part-left" v-if="alldata.image">
                            <img class="content-image" :src="alldata.image">
                        </div>

                        <div class="list ">
                            <ul>
                                <li @click="tab=1"><span :class="(tab==1)?'active-m':''">Description </span></li>
                                <li @click="tab=2"><span :class="(tab==2)?'active-m':''">Review </span></li>


                            </ul>
                        </div>

                        
                        <div class="text-part-left" v-if="tab==2">

                            <div class="features ptb-20">
                                <h1 class="product-review-h">Review And Comment</h1>

                                <div class="authentication-card person-comment-card">

                                    <div class="person-cmt">
                                        <div class="comment-items">
                                            <div class="col-md-1 img" v-if="authInfo.image">
                                                <img class="hachib" :src="authInfo.image" alt="">
                                            </div>

                                            <div class="col-md-11 customer-rate">
                                                <Rate v-model="cData.rate" />

                                                <!-- <ul>
                                                    <li class="rate-l">Rating :</li>
                                                    <li><a href="#"><span><i class="far fa-star"></i></span></a></li>
                                                    <li><a href="#"><span><i class="far fa-star"></i></span></a></li>
                                                    <li><a href="#"><span><i class="far fa-star"></i></span></a></li>
                                                    <li><a href="#"><span><i class="far fa-star"></i></span></a></li>
                                                    <li><a href="#"><span><i class="far fa-star"></i></span></a></li>

                                                </ul> -->

                                                <div class="comment-box">
                                                        <label for="input">Type your comment</label>
                                                        <textarea class="textarea" v-model="cData.comment">Write your comment</textarea>

                                                    <div>
                                                        <button class="add-now-button comment-btn" @click="storeReview">Comment</button>
                                                    </div>
                                                        

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>


                     


                                <div class="authentication-card done-comment-card" v-for="(item,index) in alldata.reviews" :key="index">

                                        <div class="person-cmt">
                                            <div class="comment-items">
                                                <div class="col-md-1 img" v-if="item.user && item.user.image">
                                                    <img class="commentor" :src="item.user.image" alt="">
                                                </div>
    
                                                <div class="col-md-5  name-r" v-if="item.user">
                                                    <p class="name-of-customer" v-if="item.user.name">{{item.user.name}}</p>
                                                    <p class="opinion-of-customer">{{item.comment}}</p>
                                                </div>
    
                                                <div class="col-md-6 rate-and-date">
                                                    <div class="rate-and-date-wrap">
                                                            <ul>
                                                                    <li class="rate-l">Rating :</li>
                                                                    <li><span :class="(item.rate>0)?'gold-star':''"><i class="fas fa-star"></i></span></li>
                                                                    <li><span :class="(item.rate>1)?'gold-star':''"><i class="fas fa-star"></i></span></li>
                                                                    <li><span :class="(item.rate>2)?'gold-star':''"><i class="fas fa-star"></i></span></li>
                                                                    <li><span :class="(item.rate>3)?'gold-star':''"><i class="fas fa-star"></i></span></li>
                                                                    <li><span :class="(item.rate>4)?'gold-star':''"><i class="fas fa-star"></i></span></li>
                
                                                                </ul>
                
                                                                <div class="date-of-commnet">
                                                                    <p>{{item.created_at}}</p>
                                                                </div>
                                                                <div class="date-of-commnet" v-if="item.user && authInfo">
                                                                    <button v-if="item.user.id == authInfo.id" @click="deleteReview(item.id ,index)">delete</button>
                                                                </div>
                                                    </div>
                                   
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>

                            </div>


                        </div>

                        <div class="text-part-left">
                            <div class="about-product border-b ptb-20">
                                <h1 class="product-desc-h">About this product</h1>
                                <p> 
                                    {{alldata.description}}
                                </p>
                            </div>

                            <div class="features border-b ptb-20">
                                <h1 class="product-desc-h">Features</h1>
                                <p><span><i class="fas fa-square-full"></i></span>Fully Responsive and Mobile ready</p>
                                <p><span><i class="fas fa-square-full"></i></span>Unlimited Color and Typhography option
                                </p>
                                <p><span><i class="fas fa-square-full"></i></span>Fully Customizable every elmenty</p>
                                <p><span><i class="fas fa-square-full"></i></span>Cross Browser Capbility</p>
                                <p><span><i class="fas fa-square-full"></i></span>17 Page Template</p>


                            </div>

                            <div class="workfollow border-b ptb-20">
                                <h1 class="product-desc-h">Workfollow(Tools)</h1>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </p>

                            </div>

                            <div class="theam-supprt border-b ptb-20">
                                <h1 class="product-desc-h">Theam Supprt</h1>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </p>

                            </div>

                            <div class="faq border-b ptb-20">
                                <h1 class="product-desc-h ">FAQ</h1>
                                <button class="accordion">Ask a first question?</button>
                                <div class="panel">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </p>
                                </div>

                                <button class="accordion">Ask a second question??</button>
                                <div class="panel">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </p>
                                </div>

                                <button class="accordion">Ask a third question??</button>
                                <div class="panel">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </p>
                                </div>
                               
                            </div>
                        </div>



                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="authentication-card product-desc-card">
                            <div class="authentication-title">
                                <h3><span>Have</span>sourse code</h3>

                            </div>
                            <div class="rating">
                                <div class="row">
                                    <div class="col-md-6 rate-side" v-if="alldata.avgreview">
                                        <p>Rating <span><Rate show-text v-model="alldata.avgreview.averageRating" /></span></p>
                                      
                                    </div>
                                    <div class="col-md-6 download">
                                        <p><span><i class="fas fa-arrow-circle-down"></i></span> </p>
                                        <a  :href="alldata.file"  class="get-source" :download="alldata.file">Get source code</a>
                                        <!-- <a class="get-source">Get source code</a> -->
                                    </div>
                                </div>
                            </div>

                            <div class="code-advise">

                                <div class="benifits">
                                    <p class="benifits-p"><span><i class="fas fa-check-circle"></i></span>Reviewed by
                                        the Bootstarp team</p>
                                    <p class="benifits-p"><span><i class="fas fa-check-circle"></i></span>6 months
                                        technical support</p>
                                    <p class="benifits-p"><span><i class="fas fa-check-circle"></i></span>100% money
                                        back guarantee</p>

                                    <p></p>

                                </div>
                                <div class="authentication download-button ">

                                   

                                    <a :href="alldata.link"  v-if="alldata.link">
                                        <button class="sign-now-button live-preview-button"><span><i
                                                    class="far fa-file-pdf"></i></span>Live preview</button>
                                    </a>

                                    <a :href="alldata.book" :download="alldata.book" v-if="alldata.book" >
                                        <button class="sign-now-button live-preview-button"><span><i
                                                    class="far fa-file-pdf"></i></span>download book</button>
                                    </a>
                                    <router-link :to="'/download-request/'+alldata.id" v-if="!alldata.file">
                                        <button class="sign-now-button request-for-code-button">Request for
                                            code</button>
                                    </router-link>
                                </div>

                            </div>

                        </div>

                        <div class="authentication-card product-desc-card">
                            <div class="advertisement">
                                <p><span>Upload</span> <span class="flt-right">{{alldata.created_at.substring(0, 10)}}</span> </p>
                                <p><span>Last Update</span><span class="flt-right">{{alldata.updated_at.substring(0, 10)}}</span></p>
                                <p><span>Catagories</span><span class="flt-right">{{alldata.category}}</span></p>



                            </div>

                        </div>

                        <div class="authentication-card product-desc-card">
                            <div class="authentication-title">
                                <h3><span>Project</span>team</h3>

                            </div>
                            <div class="member-name" v-if="alldata.team">
                                <div class="name-item" v-for="(item,index) in alldata.team" :key="index">
                                    <div class="image" v-if="item.image">
                                        <img class="hachib" :src="item.image" alt="">
                                    </div>

                                    <div class="name">
                                        <h3>{{item.name}}</h3>
                                        <p class="describe-p">Student Id: {{item.user_id}}</p>
                                        <p class="describe-p">Batch: {{item.batch}}</p>
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
        alldata:{},
            id:'',
             tab:1,
             cData:{
                 rate:0,
                 comment:'',
                 user_id:'',
                 project_id:''
             }
        }
    },
    created(){
            if(this.$route.params.id){

                this.id = this.$route.params.id
                this.getProjectDetails(this.id)
            }
            else{
                window.location = '/'
            }

    },
    methods:{
        async getProjectDetails(key){
            const res = await this.callApi('get', `getProject/${key}`)
            if(res.status == 200){
                this.alldata = res.data
            }
            else{
                window.location = '/'
            }
        },
        async storeReview(){
            if(!this.authInfo){
                return this.e("please log in")
            }
            if(this.alldata.has_pic){
               return this.e("You already done this")
            }
            this.cData.project_id = this.id
            this.cData.user_id = this.authInfo.id
            if(this.cData.comment==''){
                return this.e("please write your review")
            }
            const res = await this.callApi('post','storeReview', this.cData)
            if(res.status==200 || res.status==201){
                res.data.user ={}
                res.data.user = this.authInfo
                this.alldata.reviews.unshift(res.data)
                this.alldata.has_pic = {
                    id:'5'
                }
            }
            else{
                this.e("please check your network!!")
            }
        },
        async deleteReview(id,index){
            if(!this.authInfo){
                return this.e("please login ")
            }
            const res = await this.callApi('post', 'deleteReview', {'id':id})
            if(res.status ==200){
                this.alldata.reviews.splice(index,1)
                delete  this.alldata.has_pic
                this.s("review deleted!!")
            }
            else{
                this.e("please check your network")
            }
        }
    }
}
</script>