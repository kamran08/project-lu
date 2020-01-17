<template>
    <div>
         <div class="second-section-add-member content-bg ptb-30">
            <div class="container">
                <div class="section-content">
                    <div class="authentication-row full-card">
                        <div class="col-md-6 col-sm-6">
                            <div class="authentication-name" v-if="alldata.length>0">
                                <div class="name-item" v-for="(item,index) in alldata" :key="index">
                                    <div class="image" v-if="item.image">
                                        <img class="hachib" :src="item.image" alt="">
                                    </div>

                                    <div class="describe">

                                        <h3 class="member-name">{{item.name}}</h3>
                                        <p class="describe-p">Student ID: {{item.student_id}}</p>
                                        <p class="describe-p">Batch: {{item.batch}}</p>
                                    </div>
                                    <div class="authentication save-and-exit-button ">
                                           <button class="save-now-button edit-info-button" @click="openModal(item,index)">Edit info</button>

                                      </div>

                                <!-- <i class="far fa-edit"></i> -->
                                </div>
                         

                            </div>
                            <div class="authentication-name" v-else>
                                <h2>You have no team Member</h2>

                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">

                            <div class="edit-info-image">
                                <img src="/assets/img/edit-info.png" alt="">
                            </div>

                        </div>

                        <!-- <div class="authentication save-and-exit-button ">
                                <button class="save-now-button edit-info-button">Edit info</button>

                        </div> -->
                    </div>
                </div>
            </div>


        </div>
        <Modal
        v-model="modal1"
        title="Edit Memeber"
        >


               <div class="authentication-log">
                        <!-- <form action="#"> -->
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
                                                        <button>hello</button>
                                                        <p class="_1upload_icon"><i class="fas fa-camera"></i></p>
                                                    </div>
                                                </div>
                                            </Upload>

                                        </div>
                                        <div v-if="from.image" class="coustom_image">
                                                    <img :src="from.image" alt="">
                                        </div>
                                        <Button @click="from.image=false" v-if="from.image">delete</Button>
                                        <!-- Upload -->
                            </div>

                        <!-- </form> -->

        </div>

        <div slot="footer">
             <button class="add-now-button" @click="updateMemeber">Update</button>
        </div>
    </Modal>
    </div>
</template>
<script>
export default {
    data(){
        return{
            modal1:false,
            alldata:[],
            editData:{},
            from:{},
            edit:-1,
        }
    },
    created(){
        this.getAllTeamMemebers()
    },
    methods:{
        openModal(item,index){
            this.edit = index
            this.from = _.cloneDeep(item)
            this.modal1 = true
        },
        async getAllTeamMemebers(){
            const res = await this.callApi('get','getTeamMembers')
            if(res.status == 200){
                this.alldata = res.data
            }
            else{
                this.$router.push('/')
            }
        },
        async updateMemeber(){
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
            const res = await this.callApi('post','editTeamMemeber', this.from)
            if(res.status==200 || res.status==201){
                this.alldata[this.edit] = this.from
                this.s("Team Updated!!")
                this.from = {
                    name:'',
                    batch:'',
                    student_id:'',
                    image:false,
                }
                this.edit = -1
                this.modal1 = false

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
    }
}
</script>