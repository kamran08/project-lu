<template>
  <div>
    
    <!-- <header class="header header-bg header-account"> -->
   
     <headerSection/>


    <div class="second-section-add-member content-bg ptb-30">
      <div class="container">
        <div class="section-content">
          <div class="authentication-row full-card">
            <div class="col-md-12 col-sm-12">
              <div class="authentication-name">
                <div
                  class="name-item for-notification"
                  v-for="(item,index) in alldata"
                  :key="index"
                >
                  <div class="image" v-if="item && item.image">
                    <img class="hachib" :src="item.image" alt />
                  </div>

                  <div class="describe">
                    <h3 class="member-name">{{item.projectName}}</h3>
                    <p class="describe-p">{{(item.year==3)?"3rd Year":"4th Year"}}</p>
                    <p class="describe-p">{{item.description}}</p>
                  </div>
                  <div class="authentication save-and-exit-button">
                    <button
                      @click="openEditModal(item,index)"
                      class="save-now-button edit-info-button access-btn notifivation-btn-1"
                    >Edit</button>

                    <button
                      class="save-now-button edit-info-button access-btn notifivation-btn-2"
                      @click="deleteMyProject(item,index)"
                    >Delete</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- </header> -->

    <Modal v-model="editModal" title="Profile Memeber">
      <div class="authentication-card">
        <div class="authentication-log">
          <div class="authentication-item">
            <label for="input">Project Title</label>
            <input v-model="from.projectName" type="text" placeholder="E-Commerce website" />
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
            <input v-model="from.category" type="text" placeholder="Type category of webaite" />
          </div>

          <div class="authentication-item">
            <label for="input">Upload Cover Photo</label>
            <div class="_1upload">
              <div class="_image_upload_pic">
                <!-- Image -->
                <div class="_upload_image" v-if="from.image">
                  <img
                    class="_image_upload_img"
                    style="width:200px; height:200px;"
                    :src="from.image"
                    alt
                    title
                  />

                  <p class="_1upload_edit" @click="from.image=false">
                    <i class="far fa-trash-alt"></i>
                  </p>
                </div>
                <!-- Image -->

                <!-- Upload -->
                <div class="_1upload_upload" v-if="!from.image">
                  <!-- :headers="crfObj" -->
                  <Upload
                    name="img"
                    ref="upload"
                    :show-upload-list="false"
                    :on-success="handleSuccess"
                    :format="['jpg','jpeg','png']"
                    :max-size="2048"
                    :on-format-error="handleFormatError"
                    :on-exceeded-size="handleMaxSize"
                    :before-upload="handleBeforeUpload"
                    type="drag"
                    action="/uploadImages"
                  >
                    <div>
                      <div class="_1upload_main">
                        <p class="_1upload_icon">
                          <i class="fas fa-camera"></i>
                        </p>
                      </div>
                    </div>
                  </Upload>
                </div>
                <!-- Upload -->

                <!-- <p class="_upload_text">Upload your Picture</p> -->
              </div>
            </div>
          </div>

          <div class="authentication-item">
            <label for="input">Upload File</label>

            <div class="_1upload">
              <div class="_image_upload_pic">
                <!-- Image -->
                <div class="_upload_image" v-if="from.file">
                  <!-- <span>{{from.file}}</span> -->
                  <a :href="from.file" class="get-source" :download="from.file">Get source Code</a>
                  <!-- <img class="_image_upload_img" :src="from.file" alt="" title=""> -->

                  <p class="_1upload_edit" @click="from.file=false">
                    <i class="far fa-trash-alt"></i>
                  </p>
                </div>
                <!-- Image -->

                <!-- Upload -->
                <div class="_1upload_upload" v-if="!from.file">
                  <!-- :headers="crfObj" -->
                  <Upload
                    name="img"
                    ref="upload"
                    :show-upload-list="false"
                    :on-success="handleSuccess1"
                    :on-format-error="handleFormatError"
                    :on-exceeded-size="handleMaxSize"
                    :before-upload="handleBeforeUpload"
                    type="drag"
                    action="/uploadImages"
                  >
                    <div>
                      <div class="_1upload_main">
                        <p class="_1upload_icon">
                          <i class="fas fa-camera"></i>
                        </p>
                      </div>
                    </div>
                  </Upload>
                </div>
                <!-- Upload -->

                <!-- <p class="_upload_text">Upload your Picture</p> -->
              </div>
            </div>
          </div>

          <div class="authentication-item">
            <label for="input">Upload Project Book</label>
            <div class="_1upload">
              <div class="_image_upload_pic">
                <!-- Image -->
                <div class="_upload_image" v-if="from.book">
                  <a :href="from.book" class="get-source" :download="from.book">Get Book</a>
                  <!-- <span>{{from.book}}</span> -->
                  <!-- <img class="_image_upload_img" :src="from.file" alt="" title=""> -->

                  <p class="_1upload_edit" @click="from.book=false">
                    <i class="far fa-trash-alt"></i>
                  </p>
                </div>
                <!-- Image -->

                <!-- Upload -->
                <div class="_1upload_upload" v-if="!from.book">
                  <!-- :headers="crfObj" -->
                  <Upload
                    name="img"
                    ref="upload"
                    :show-upload-list="false"
                    :on-success="handleSuccess2"
                    :on-format-error="handleFormatError"
                    :on-exceeded-size="handleMaxSize"
                    :before-upload="handleBeforeUpload"
                    type="drag"
                    action="/uploadImages"
                  >
                    <div>
                      <div class="_1upload_main">
                        <p class="_1upload_icon">
                          <i class="fas fa-camera"></i>
                        </p>
                      </div>
                    </div>
                  </Upload>
                </div>
                <!-- Upload -->

                <!-- <p class="_upload_text">Upload your Picture</p> -->
              </div>
            </div>
          </div>

          <div class="authentication-item">
            <label for="input">Project description</label>
            <textarea v-model="from.description" class="textarea upload-textarea">Describe your project</textarea>
          </div>
        </div>
      </div>

      <div slot="footer">
        <button class="add-now-button" @click="editModal=false">Cancel</button>
        <button class="add-now-button" @click="updateProject">Update</button>
      </div>
    </Modal>
  </div>
</template>
<script>
import headerSection from '../components/header.vue'
export default {
  components:{
      headerSection,
        },
  data() {
    return {
      alldata: {},
      from: {},
      editModal: false,
      edit: -1
    };
  },
  created() {
    this.getallRequest();
  },
  methods: {
    handleSuccess(res, file) {
      console.log(res);
      this.from.image = res;
    },
    handleSuccess1(res, file) {
      console.log(res);
      this.from.file = res;
    },
    handleSuccess2(res, file) {
      console.log(res);
      this.from.book = res;
    },
    handleFormatError(file) {
      this.$Notice.warning({
        title: "The file format is incorrect",
        desc:
          "File format of " +
          file.name +
          " is incorrect, please select jpg or png."
      });
    },

    handleMaxSize(file) {
      this.$Notice.warning({
        title: "Exceeding file size limit",
        desc: "File  " + file.name + " is too large, no more than 2M."
      });
    },
    handleBeforeUpload() {
      // const check = this.uploadList.length < 6;
      // if (!check) {
      //     this.$Notice.warning({
      //         title: 'Up to five pictures can be uploaded.'
      //     });
      // }
      // return check;
    },
    openEditModal(item, index) {
      this.from = _.cloneDeep(item);
      this.edit = index;
      this.editModal = true;
    },
    async getallRequest() {
      const res = await this.callApi("get", "getAllMyProject");
      if (res.status == 200) {
        this.alldata = res.data;
      } else if (res.status == 401) {
        window.location = "/";
      } else {
        this.swr();
        window.location = "/";
      }
    },
    async deleteMyProject(item, index) {
      if (!confirm("Are you sure to delete this")) {
        return;
      }
      const res = await this.callApi("post", "deleteMyProject", item);
      if (res.status == 200) {
        this.s("request has been deleted!!");
        this.alldata.splice(index, 1);
      } else if (res.status === 401) {
        this.e(res.data.msg);
      } else {
        this.swr();
      }
    },
    async editMyProject(item, index) {
      if (!confirm("Are you sure to delete this")) {
        return;
      }
      const res = await this.callApi("post", "editMyProject", item);
      if (res.status == 200) {
        this.s("request has been deleted!!");
        this.alldata.splice(index, 1);
      } else if (res.status === 401) {
        this.e(res.data.msg);
      } else {
        this.swr();
      }
    },
    async updateProject() {
      if (this.from.projectName == "") {
        return this.e("Project Name can not be empty!!");
      }
      if (this.from.year == "") {
        return this.e("Select Year !!");
      }
      if (this.from.category == "") {
        return this.e("Project category can not be empty!!");
      }
      if (this.from.type == "") {
        return this.e("Select type can not be empty!!");
      }
      if (this.from.description == "") {
        return this.e("Project description can not be empty!!");
      }
      if (this.from.image == false) {
        return this.e("Image can not be empty!!");
      }
      const res = await this.callApi('post', 'updateProject', this.from)
      if(res.status==200){
        this.alldata[this.edit] = res.data
        this.edit = -1
        this.editModal = false
      }
      else if(res.status==401){
       return  this.e(res.data.msg)
      }
      else{
        this.swr()
      }

    }
  }
};
</script>