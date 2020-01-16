<template>
    <div>
         <div class="second-section-add-member content-bg ptb-30">
            <div class="container">
                <div class="section-content">
                    <div class="authentication-row full-card">
                        <div class=" col-12 col-md-7">
                            <div class="authentication-name">
                                <div class="name-item">
                                    <div class="image">
                                        <img class="hachib" src="/assets/img/hachib.png" alt="">
                                    </div>

                                    <div class="describe">
                                        <h3 class="member-name">Hachibur Rahaman</h3>
                                        <p class="describe-p">Student ID: 1612020051</p>
                                        <p class="describe-p">Batch: 41'st</p>

                                    </div>

                                </div>
                                <div class="name-item">
                                    <div class="image">
                                        <img class="hachib" src="/assets/img/suhas.png" alt="">
                                    </div>

                                    <div class="describe">

                                        <h3 class="member-name">Suhas Chowdhury</h3>
                                        <p class="describe-p">Student ID: 1612020053</p>
                                        <p class="describe-p">Batch: 41'st</p>
                                    </div>

                                </div>

                                <div class="name-item">
                                    <div class="image">
                                        <img class="hachib" src="/assets/img/3rd-member.png" alt="">
                                    </div>
                                    <div class="describe">

                                        <h3 class="member-name">Al Juned</h3>
                                        <p class="describe-p">Student ID: 1612020090</p>
                                        <p class="describe-p">Batch: 41'st</p>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class=" col-sm-12 col-md-5">
                            <div class="authentication-card auth-back">
                                <div class="authentication-title">
                                    <h3><span>Add</span>new member</h3>

                                </div>
                                <div class="authentication-log">
                                    <form action="#">
                                        <div class="authentication-item">
                                            <label for="input">User Name</label>
                                            <input v-model="from.name" type="text" placeholder="User name ">
                                        </div>
                                        <div class="authentication-item">
                                            <label for="input">Student ID</label>
                                            <input v-model="from.student_id" type="text" placeholder="1612020051">
                                        </div>
                                        <div class="authentication-item">
                                            <label for="input">Batch</label>
                                            <input v-model="from.batch" type="text" placeholder="bach name">
                                        </div>
                                        <div class="authentication-item">
                                            <label for="input">Upload Photo</label>

                                                    <!-- Upload -->
                                                    <div class="_1upload_upload" v-if="!from.image">

                                                        <!-- :headers="crfObj" -->
                                                        <Upload name='img' 
                                                                ref="upload" :show-upload-list="false" 
                                                                :on-success="handleSuccess" 
                                                                :format="['jpg','jpeg','png']" 
                                                                :max-size="2048" 
                                                                :on-format-error="handleFormatError" 
                                                                :on-exceeded-size="handleMaxSize" 
                                                                :before-upload="handleBeforeUpload" 
                                                                type="drag" 
                                                                action="/uploadImages">
                                                            <div>
                                                                <div class="_1upload_main">
                                                                    <p class="_1upload_icon"><i class="fas fa-camera"></i></p>
                                                                </div>
                                                            </div>
                                                        </Upload>

                                                    </div>
                                                    <div v-if="from.image">
                                                             <img :src="from.image" alt="">
                                                    </div>
                                                    <!-- Upload -->
                                        </div>

                                    </form>

                                    <div class="authentication ">
                                      
                                            <button class="add-now-button">Add now</button>
                                       
                                    </div>

                                </div>
                            </div>

                            <div class="authentication save-and-exit-button ">
                                <router-link to="/">
                                    <button class="save-now-button add-member-button">Save and exit</button>
                                </router-link>

                            </div>
                        </div>


                    </div>
                </div>
            </div>


        </div>
    </div>
</template>

<script>
export default {
    data(){
        return{
            from:{
                name:'',
                batch:'',
                student_id:'',
                image:false,
            }
        }
    },
    methods:{
        async addNewMemeber(){
            if(this.from.name==''){
                return this.e("name field can not be empty!!")
            }
            if(this.from.batch==''){
                return this.e("batch field can not be empty!!")
            }
            if(this.from.student_id==''){
                return this.e("student_id field can not be empty!!")
            }
            if(!this.from.image){
                return this.e("upload a Image!!")
            }
            const res = await this.callApi('post','/addTeamMember', this.from)
            if(res.status==200 || res.status==201){
                this.s("New Member Added!!")
                this.from = {
                    name:'',
                    batch:'',
                    student_id:'',
                    image:false,
                }
            }
            else if(res.status==401){
                this.e(res.data.msg)
            }
            else{
                this.e("check your network")
            }
        },
        handleSuccess(res, file){
            this.from.image = res
        },
  
         handleFormatError (file) {
            this.$Notice.warning({
                title: 'The file format is incorrect',
                desc: 'File format of ' + file.name + ' is incorrect, please select jpg or png.'
            });
        },

         handleMaxSize (file) {
            this.$Notice.warning({
                title: 'Exceeding file size limit',
                desc: 'File  ' + file.name + ' is too large, no more than 2M.'
            });
        },
          handleBeforeUpload () {
        },

    },
    created(){

    }
}
</script>