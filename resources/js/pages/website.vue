<template>
    <div>
         <!--========First Section========-->

	<div class="first-section" id="first-section-id">
		<div class="container">
			<div class="col-md-7">
				<h1 class="first-sec-header"><span>Website</span>design and development</h1>
				<p class="first-sec-p">I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just
					click “Edit Text” or double click me to add your own content and make changes to the font. I’m a
					great place for you to tell a story and let your users know a little more about you.</p>
				<div class="icon-section">
					<img src="/assets/img/icon-group.png" alt="">
				</div>

			</div>

			<div class="col-md-5 first-sec-image">
				<img src="/assets/img/software-teams.png" alt="">
			</div>

		</div>
	</div>

	<!--========End First Section========-->
    	<!--========Second Section========-->
	<div class="second-section">
		<div class="container">
			<div class="flex-section">
				<div class="card-item" :class="((index%2==0))?'mgt-15':''" v-for="(item,index) in alldata" :key="index">
					<div class="card-design first-card">
						<router-link :to="'/product-description/'+item.id">
							<div class="content-overlay"></div>
							<img class="content-image" :src="item.image">
							<div class="content-details fadeIn-bottom">
								<h3 class="content-title">{{item.projectName}}</h3>
								<p class="content-text">{{item.category}}</p>
								<!-- <p class="content-like"><span><i class="far fa-thumbs-up"></i></span>275 <span><i
											class="fas fa-eye"></i></span>358</p> -->
							</div>
						</router-link>
					</div>
				</div>

			</div>

			<div class="second-sec-button">
				<router-link to="/all-template?type=Website">
					<button class="view-button web-sec-btn">View all websites</button>
				</router-link>
			</div>
		</div>

	</div>
	<!--========End Second Section========-->
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
        this.getProject('Website')
    },
    methods:{
        openModal(item,index){
            this.edit = index
            this.from = _.cloneDeep(item)
            this.modal1 = true
        },
        async getProject(type){
            const res = await this.callApi('get',`getProject?type=${type}`)
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