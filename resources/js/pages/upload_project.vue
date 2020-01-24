<template>
    <div>
        <headerSection/>
         <div class="back-right-up">
            <div class="container">

                <img class="back-design-right-up" src="/assets/img/back-design-right-up.png" alt="">
            </div>
        </div>



        <div class="second-section-account content-bg ptb-30">
            <div class="container">
                <div class="section-content">
                    <div class="authentication-row">

                        <div class="authentication-card upload-card">
                            <div class="authentication-title">
                                <h3><span>Upload</span>your project</h3>

                            </div>

                            <div class="upload-project-menu" v-if="tab">
                                <ul>
                                    <li :class="(tab==1)?'active_1':''" @click="tab=1">Project<span><i
                                                    class="fas fa-angle-double-right"></i></span></li>
                                    <li :class="(tab==2)?'active_1':''" @click="submitMethod1">Cover & Image<span><i
                                                    class="fas fa-angle-double-right"></i></span></li>
                                    <li :class="(tab==3)?'active_1':''" @click="tab=4">upload book<span><i
                                                    class="fas fa-angle-double-right"></i></span></li>
                                    <li :class="(tab==4)?'active_1':''" @click="submitFrom">Publishing</li>

                                </ul>
                            </div>
                            <div class="authentication-log" v-if="tab==1">
                                    <div class="authentication-item">
                                        <label for="input">Project Title</label>
                                        <input v-model="from.projectName" type="text" placeholder="E-Commerce website">
                                    </div>
                                    <div class="authentication-item">
                                        <label for="input">Project Type</label>
                                        <select v-model="from.type" class="select-category" id="sel1">
                                            <option value="Website">Website</option>
                                            <option value="Apps">Apps</option>
                                            <option value="Game">Game</option>
                                            <!-- <option value="Thesis">Thesis</option> -->
                                        </select>
                                    </div>
                                    <div class="authentication-item">
                                        <label for="input">Select Year</label>
                                        <select v-model="from.year" class="select-category" id="sel1">
                                            <option value="3">3rd year</option>
                                            <option value="4">4th year</option>
                                        </select>
                                    </div>

                                    <div class="authentication-item">
                                        <label for="input">Project Category</label>
                                        <input v-model="from.category" type="text" placeholder="Type category of webaite">
                                    </div>
                                    <div class="authentication-item">
                                        <label for="input">Project description</label>
                                        <textarea v-model="from.description"  class="textarea upload-textarea">Describe your project</textarea>
                                    </div>

                                <div class="authentication next-button" >
                                    
                                    <button class="sign-now-button next-btn" @click="submitMethod1">Next</button>
                                   
                                </div>
                            </div>
                            <!-- project image -->
                            <div class="authentication-log" v-if="tab==2">

                            <div class="authentication-item">

                                <div class="file-upload">

                                    <div class="col-12 col-md-6 col-lg-6">
                                        <div class="_1input_group">
                                            <div class="_1upload">
                                                <div class="_image_upload_pic">
                                                    <!-- Image -->
                                                    <div class="_upload_image" v-if="from.image">
                                                        <img class="_image_upload_img" :src="from.image" alt="" title="">

                                                        <p class="_1upload_edit" @click="from.image=false"><i class="fas fa-pen"></i></p>
                                                    </div>
                                                    <!-- Image -->

                                                    <!-- Upload -->
                                                    <div class="_1upload_upload">

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
                                                    <!-- Upload -->

                                                    <p class="_upload_text">Upload your Picture</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="authentication next-button" @click="tab=3">

                                <button class="sign-now-button next-btn">Next</button>

                            </div>

                        </div>
                                            
                            <!-- project image -->
                            <!-- project image -->
                            <div class="authentication-log" v-if="tab==3">

                            <div class="authentication-item">

                                <div class="file-upload">

                                    <div class="col-12 col-md-6 col-lg-6">
                                        <div class="_1input_group">
                                            <div class="_1upload">
                                                <div class="_image_upload_pic">
                                                    <!-- Image -->
                                                    <div class="_upload_image" v-if="from.book">
                                                        <img class="_image_upload_img" :src="from.book" alt="" title="">

                                                        <p class="_1upload_edit" @click="from.book=false"><i class="fas fa-pen"></i></p>
                                                    </div>
                                                    <!-- Image -->

                                                    <!-- Upload -->
                                                    <div class="_1upload_upload">

                                                        <!-- :headers="crfObj" -->
                                                        <Upload name='img' 
                                                                ref="upload" :show-upload-list="false" 
                                                                :on-success="handleSuccess1Book" 
                                                                :on-format-error="handleFormatErrorBook" 
                                                                :on-exceeded-size="handleMaxSizeBook" 
                                                                :before-upload="handleBeforeUploadBook" 
                                                                type="drag" 
                                                                action="/uploadImages">
                                                            <div>
                                                                <div class="_1upload_main">
                                                                    <p class="_1upload_icon"><i class="fas fa-camera"></i></p>
                                                                </div>
                                                            </div>
                                                        </Upload>

                                                    </div>
                                                    <!-- Upload -->

                                                    <p class="_upload_text">Upload your Picture</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="authentication next-button" @click="tab=4">

                                <button class="sign-now-button next-btn">Next</button>

                            </div>

                        </div>
                                            
                            <!-- project image -->

                            <!-- publish project -->

                            <div class="authentication-log publish-card" v-if="tab==4">
                                <form action="#">
                                    <div class="authentication-item ">
                                        <label  for="input">Upload source file</label>

                                                         <div class="file-upload">

                                    <div class="col-12 col-md-6 col-lg-6">
                                        <div class="_1input_group">
                                            <div class="_1upload">
                                                <div class="_image_upload_pic">
                                                    <!-- Image -->
                                                    <div class="_upload_image" v-if="from.file">
                                                        <span>{{from.file}}</span>
                                                        <!-- <img class="_image_upload_img" :src="from.file" alt="" title=""> -->

                                                        <p class="_1upload_edit" @click="from.file=false"><i class="fas fa-pen"></i></p>
                                                    </div>
                                                    <!-- Image -->

                                                    <!-- Upload -->
                                                    <div class="_1upload_upload">

                                                        <!-- :headers="crfObj" -->
                                                        <Upload name='img' 
                                                                ref="upload" :show-upload-list="false" 
                                                                :on-success="handleSuccess1" 
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
                                                    <!-- Upload -->

                                                    <!-- <p class="_upload_text">Upload your Picture</p> -->
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                        <p>Create a .Zip file with all of your code and resources like html, css, JavaScript, php files. Don't worry! Download will be controlled only by you or your project team</p>
                                    </div>
                                    

                                    <div class="authentication-item">
                                        <label for="input">Settings</label>
                                        <label><input type="checkbox" value="">Cloase Comments</label>
                                    </div>


     
                                </form>
                                <div class="authentication next-button" @click="submitFrom">
                                 
                                        <button class="sign-now-button next-btn">Publish now</button>
                                    
                                </div>



                            </div>
                            <!-- publish project -->



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
            uploads:[],
            defaultList:[],
            listMethod:false,
            uploadList:[],
            tab:1,
            value:"",
            from:{
                projectName:'',
                type:'',
                category:'',
                description:'',
                image:false,
                file:false,
                book:false,
                year:''
            },
             imageUrl:'',
             imgName: '',
             image:'',
           
            //   crfObj: {
            //         'X-CSRF-TOKEN' : document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            //     },
            
        }
    },
    created(){

    },
    methods:{
        submitMethod1(){
            if(this.from.projectName==''){
                return this.e("Project Name can not be empty!!")
            }
            if(this.from.year==''){
                return this.e("Select Year !!")
            }
            if(this.from.category==''){
                return this.e("Project category can not be empty!!")
            }
            if(this.from.type==''){
                return this.e("Select type can not be empty!!")
            }
            if(this.from.description==''){
                return this.e("Project description can not be empty!!")
            }
            this.tab = 2

        },
       submitMethod2(){
           if(this.from.image){
               this.tab = 3
               return
               
           }
           return this.e("Please upload Image")
           
            
        },
       async submitFrom(){
            if(!this.from.file){
                return this.e("Please upload Image")
            }
            else{
                const res = await this.callApi('post', 'uploadPorject', this.from)
                if(res.status==200 || res.status==201){
                    this.s("Project has been uploaded!!")
                }
                else if(res.status==401){
                    this.e(res.data.msg)
                }
                else{
                    this.swr()
                }
            }
            
        },
        handleSuccess(res, file){
            console.log(res)
            this.from.image = res
				// this.uploadList.push({link:res.imageUrl})
				// console.log(this.uploadList);
        },
        handleSuccess1(res, file){
            console.log(res)
            this.from.file = res
				// this.uploadList.push({link:res.imageUrl})
				// console.log(this.uploadList);
        },
        handleSuccess1Book(res, file){
            console.log(res)
            this.from.book = res
				// this.uploadList.push({link:res.imageUrl})
				// console.log(this.uploadList);
        },
         handleFormatError (file) {
            this.$Notice.warning({
                title: 'The file format is incorrect',
                desc: 'File format of ' + file.name + ' is incorrect, please select jpg or png.'
            });
        },
         handleFormatErrorBook (file) {
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
            // const check = this.uploadList.length < 6;
            // if (!check) {
            //     this.$Notice.warning({
            //         title: 'Up to five pictures can be uploaded.'
            //     });
            // }
            // return check;
        },
          handleBeforeUploadBook () {
            // const check = this.uploadList.length < 6;
            // if (!check) {
            //     this.$Notice.warning({
            //         title: 'Up to five pictures can be uploaded.'
            //     });
            // }
            // return check;
        },

    }


}
</script>
<style >
    .active_1{
        color:blue;
    }
</style>