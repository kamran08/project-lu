<template>
    <div>
        <div class="all-temp-header">
            <div class="container">
                <h1 class="Product-Header">Templates and Plugins from $20</h1>
                <p class="Product-p">I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just
                    click “Edit Text” or double click me.</p>
                <img class="all-temp-back-right-up" src="/assets/img/back-design-right-up.png" alt="">
            </div>
        </div>


        <div class="second-section-account content-bg ptb-30">
            <div class="container">
               
                <div class="row">

                    <div class="col-md-3 col-sm-3">

                        <div class="authentication download-button ">

                            
                            <input class="filter-button" type="text" placeholder="Filter & Refine">

                        </div>
                        <div class="filter-card card-all-temp">
                            <div class="authentication-title list">
                                <h3 class="" >Categories</h3>
                                 <CheckboxGroup  v-model="category" @on-change="getAlldata">
                                    <Checkbox  class="checkbox" :label="it.category" v-for="(it,index) in allcategory" :key="index">
                                        <span>{{it.category}}</span>
                                    </Checkbox>
                                 </CheckboxGroup>
                            </div>

                        </div>

                        <div class="year-card card-all-temp product-desc-card">
                            <h3 class="">Year</h3>

                             <RadioGroup v-model="year" @on-change="getAlldata" vertical>
                                <Radio label="3">
                                    <span>3rd year</span>
                                </Radio>
                                <Radio label="4">
                                    <span>4th yaer</span>
                                </Radio>
                             </RadioGroup>
                        </div>

                        <div class="rating-card card-all-temp product-desc-card">

                            <h3 class="">Rating</h3>
                            <div class="form-option-all-temps">
                                <CheckboxGroup v-model="rate" @on-change="getAlldata">
                                    <Checkbox  class="checkbox" :label="1">
                                        <span>1 star and higher</span>
                                    </Checkbox>
                                    <Checkbox class="checkbox" :label="2">
                                        <span>2 star and higher</span>
                                    </Checkbox>
                                    <Checkbox class="checkbox" :label="3">
                                        <span>3 star and higher</span>
                                    </Checkbox>
                                    <Checkbox class="checkbox" :label="4">
                                        <span>4 star and higher </span>
                                    </Checkbox>
                                    <Checkbox class="checkbox" :label="5">
                                        <span>5 star and higher </span>
                                    </Checkbox>
                                </CheckboxGroup>
                            </div>


                            <!-- <form class="form-option-all-temps">
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">Show all</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">1 star and higher</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">2 star and higher</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">3 star and higher</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">4 star and higher</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">5 star and higher</label>
                                </div>
                                

                            </form> -->

                        </div>

                    </div>
                    <div class="col-md-9 col-sm-9 ">
                        <div class="second-section all-templates-card">

                            <div class="flex-section">
                                <div :class="(index%2==0)?'card-item mgr-15':'card-item'" v-for="(item,index) in alldata.data" :key="index">
                                    <div class="card-design first-card">
                                        <a :to="'product-description'/item.id">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" :src="item.image">
                                            <div class="content-details fadeIn-bottom">
                                                <h3 class="content-title">{{item.projectName}}</h3>
                                                <p class="content-text">{{item.category}}</p>
                                                <p class="content-like">
                                                    <!-- <span><i class="far fa-thumbs-up"></i></span>275
                                                    <span><i class="fas fa-eye"></i></span>358 -->
                                                    </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>


                         

                             

                         

                  

                     


                          

                            </div>








                        </div>

                        <div style="padding-top: 30px;text-align: center;">
                                 <Page :total="alldata.total" :current="alldata.current_page" prev-text="Previous" next-text="Next"/>
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
            alldata:{},
            type:'Website',
            category:[],
            rate:[1],
            allcategory:{},
            year:''
        }
    },
    created(){
        if(this.$route.query.type){
            this.type = this.$route.query.type
        }
        this.getAlldata()
        this.getAllCategory()

    },
    methods:{
        async getAllCategory(){
            const res = await this.callApi('get', 'getallCategory')
            if(res.status==200){
                this.allcategory = res.data
            }

        },
        async getAlldata(){
            let rate =  JSON.stringify(this.rate)
            let category =  JSON.stringify(this.category)
            const res = await this.callApi('get', `getProjectFull?type=${this.type}&year=${this.year}&category=${category}&rate=${rate}`)
            if(res.status==200){
                this.alldata = res.data
            }
            else{
                this.e("please check your network!!")
            }
       }
    }
}
</script>
<style>
.ivu-checkbox-group-item .list{
     display: list-item !important;
 }
</style>