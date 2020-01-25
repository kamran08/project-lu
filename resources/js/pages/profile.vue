<template>
       <!--==========================
                        Profile
            ===========================-->
                <!--======= Profile Main ======-->
        <div class="profile_main">
            <div class="container">
                <div class="_title_header _b_color2">
                    <h3 class="_title">{{authInfo.name}} Profile</h3>
                </div>

                <!-- <p class="_title4"><i class="fas fa-chevron-left"></i> BACK</p> -->

                <div class="row">
                        <!--~~~~~~~ Profile Card ~~~~~~~-->
                    <div class="col-12 col-md-4 col-lg-4" >
                        <!--~~~~~~~ Details Right Profile ~~~~~~~-->
                        <div class="Details_profie _mr_b30 _box_shadow2 _border_radious _padd_20">
                            <div class="Details_profie_img_div" v-if="authInfo.id==user_id" >
                                <Upload
                                 ref="upload"
                                 type="drag"
                                 name="img"
                                 :with-credentials="true"
                                 :on-success="handleSuccess"
                                 :format="['jpg','jpeg','png']"
                                 :max-size="2048"
                                 action="/app/getUserImage">
                                 <!-- action="/app/uploadServiceImages"> -->
                                 <div  >
                                   <img class="Details_profie_img" :src="(authInfo.image==null)? defultImage: authInfo.image" title="" alt="">
                                    <p   class="Details_profie_img_edit">Upload Image</p>
                                 </div>
                              </Upload>
                                
                            </div>
                            <div class="Details_profie_img_div" v-if="authInfo.id!=user_id || authInfo == false" >
                                <div  >
                                   <img class="Details_profie_img" :src="(authInfo.image==null)? defultImage: authInfo.image" title="" alt="">
                                  
                                 </div>
                            </div>

                            <div class="Details_profie_title">
                                <h3 v-if="!isEdit" class="_title3">{{authInfo.name}} <span  v-if="authInfo.id==user_id" class="pro_edit_all" @click="isEdit=true" ><i class="fas fa-pencil-alt"></i> Edit</span></h3>
                                <div class="Details_profie_title_line"></div>
                            </div>

                     

                            <div class="Details_profie_location">
                                <div class="Details_pro_renge _dis_flex _b_color2">
                                    <i class="fas fa-map-marker-alt"></i>

                                    <p class="Details_pro_renge_name _flex_space">Location</p>

                                    <p v-if="!isEdit" class="Details_pro_renge_num">{{authInfo.location}}</p>
                                    <p v-if="isEdit" class="Details_pro_renge_num">
                                        <input type="text" v-model="editauthInfo.location">
                                    </p>
                                </div>

                           

                             
                      

                                <div class="Details_pro_renge _dis_flex _b_color2">
                                    <i class="far fa-money-bill-alt"></i>

                                    <p class="Details_pro_renge_name _flex_space">Payment info</p>

                                    <div class="boi_text_div _w_100">
                                        <div class="Pro_details">
                                            <p v-if="isEdit" class="boi_text _text_overflow">
                                                <input type="text" v-model="editauthInfo.paymentInfo">
                                            </p>
                                            <p v-if="!isEdit" class="boi_text _text_overflow">{{authInfo.paymentInfo}}</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="Details_pro_renge _dis_flex _b_color2">
                                    <i class="far fa-money-bill-alt"></i>

                                    <p class="Details_pro_renge_name _flex_space">Billing info</p>

                                    <div class="boi_text_div _w_100">
                                        <div class="Pro_details">
                                            <p v-if="isEdit" class="boi_text _text_overflow">
                                                <input type="text" v-model="editauthInfo.billingInfo">
                                            </p>
                                            <p  v-if="!isEdit" class="boi_text _text_overflow">{{authInfo.billingInfo}}</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="Details_pro_renge _dis_flex _b_color2" v-if="authInfo.id==user_id ">
                                    <i class="far fa-envelope"></i>

                                    <p class="Details_pro_renge_name _flex_space">Email</p>

                                    <div class="boi_text_div _w_100">
                                        <div class="Pro_details">
                                            <p class="boi_text _text_overflow">{{authInfo.email}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="Details_pro_renge _dis_flex _b_color2">
                                    <i class="fas fa-phone"></i>

                                    <p class="Details_pro_renge_name _flex_space">Contact Number</p>

                                    <div class="boi_text_div _w_100">
                                        <div class="Pro_details">
                                            <p v-if="isEdit" class="boi_text _text_overflow">
                                                <input type="text" v-model="editauthInfo.phone">
                                            </p>
                                            <p v-if="!isEdit" class="boi_text _text_overflow">{{authInfo.phone}}</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="Details_pro_renge _dis_flex _b_color2">
                                    <i class="fas fa-home"></i>

                                    <p class="Details_pro_renge_name _flex_space">Country</p>

                                    <div class="boi_text_div _w_100">
                                        <div class="Pro_details">
                                            <p v-if="isEdit" class="boi_text _text_overflow">
                                                <input type="text" v-model="editauthInfo.country">
                                            </p>
                                            <p  v-if="!isEdit" class="boi_text _text_overflow">{{authInfo.country}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="Details_pro_renge _dis_flex _b_color2">
                                    <i class="fas fa-home"></i>

                                    <p class="Details_pro_renge_name _flex_space">website</p>

                                    <div class="boi_text_div _w_100">
                                        <div class="Pro_details">
                                            <p v-if="isEdit" class="boi_text _text_overflow">
                                                <input type="text" v-model="editauthInfo.website">
                                            </p>
                                            <p  v-if="!isEdit" class="boi_text _text_overflow">{{authInfo.website}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="Details_pro_renge _dis_flex _b_color2 _text_center justify-content-center" v-if="isEdit"> 
                                <p v-if="isEdit" class="_dis_flex align-items-center _text_center"> <span class="pro_edit_all_ff _btn _bg" @click="updateInfo" > SAVE</span></p>
                            </div>
                            
                                <div class="Details_pro_renge Details_pro_renge2   _b_color2 _text_center" @click="msgModal = true" v-if="authInfo.id != authInfo.id" >
                                    <p class="_contect_me _color_green"> Send Message <i class="fas fa-comments"></i></p>
                                </div>
                            </div>
                        </div>
                    
                        <!--~~~~~~~ Profile Card ~~~~~~~-->

                        <!--~~~~~~~ Profile Details ~~~~~~~-->
            
                        <!--~~~~~~~ Profile Details ~~~~~~~-->
                </div>
            </div>
            <Modal
                v-model="msgModal"
                :title="authInfo.name"
                :closable = "false"
                width='500'
            >
            <div class="User_List">
                 <div>
                    <div class="form-group">
                        <p class=" msg_box_header">Your Message</p>
                        <textarea placeholder="Write your message..." class="form-control msg_box" v-model="msgData.msg" rows="3"></textarea>
                    </div>
                </div>
                    
            </div>
            
            <div slot="footer">
                <Button type="warning"  @click="msgModal = false">Close</Button>
                <Button type="success" @click="sendMsg">Send</Button>
            </div>
        </Modal>
        </div>

</template>

<script>

        
export default {
 
    data(){
        return{
            sellerTab:1,
            user_id:this.$route.params.id,
            authInfo:{},
            editauthInfo:[],
            isEdit:false,
            defultImage:'/uploads/pcpSlKaSylqS3Vj2WUvtVmghh8KyPwERrbGGamVP.jpeg',
            Modal:false,
            msgData:{
                msg: '',
                con_id: '',
                reciever:'',
                conType:null
            }
        }
    },
    methods:{
        async getProfileInfo(){
            const res = await this.callApi('get',`getProfileInfo/${this.user_id}`)
            if(res.status === 200){
                this.authInfo = res.data
                this.editauthInfo = res.data
            }
            else{
                this.swr();
            }
        },
        async updateInfo(){
            const res = await this.callApi('post','updateauthInfo',this.authInfo)
            if(res.status===200){
                this.s("You profile updated successfuly!");
                
                 this.authInfo =this.editauthInfo
                  this.isEdit =false
            }
            else{
                this.swr();
                 this.isEdit =false
            }
        },
        handleSuccess(res, file){

             this.authInfo.image = res;
            
        },
        async sendMsg(){
            if(this.msgData.msg===''){
               return
            }
            // check if current buddy has any con_id or newly created one
            
            this.msgData.reciever=this.authInfo.id
            this.msgData.conType= 1
            const res = await this.callApi('post','insert-chat',this.msgData) 
            if(res.status===201){
                  this.msgData.msg=''
                  this.msgData.reciever=''
                  // update new chat 
                  this.s("Message has been sent Successfully")
                  this.msgModal = false;
            }
            else{
                this.swr();
            }


         },
    },
    created(){
        if(this.$route.query.tab>0 && this.$route.query.tab<7){
          this.sellerTab = this.$route.query.tab
          window.history.pushState(this.sellerTab, 'Title', '/sprofile/'+this.$route.params.id);
        }
        
        
        this.getProfileInfo();
    }
}
</script>

<style>

</style>
