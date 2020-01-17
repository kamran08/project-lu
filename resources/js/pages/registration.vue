<template>
    <div class="second-section-account content-bg ptb-30">
                <div class="container">
                    <div class="section-content">
                        <div class="authentication-row">
                            <div class="col-md-6 col-12">
                                <div class="authentication-image">
                                    <img src="/assets/img/sign-up.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="authentication-card">
                                    <div class="authentication-title">
                                        <h3><span>Sign Up</span>to your Account</h3>
                                        
                                    </div>
                                    <div class="authentication-log">
                                            <div class="authentication-item">
                                                <label for="input">Full Name</label>
                                                <input v-model="from.name" type="text" placeholder="First Name Here">
                                            </div>
                                            <div class="authentication-item">
                                                <label for="input">Student ID</label>
                                                <input v-model="from.student_id" type="text" placeholder="1612----56">
                                            </div>

                                            <div class="authentication-item">
                                                <label for="input">Batch</label>
                                                <input v-model="from.batch" type="text" placeholder="41">
                                            </div>
                                            <div class="authentication-item">
                                                <label for="input">Email Address</label>
                                                <input v-model="from.email" type="text" placeholder="your-email@domail.com">
                                            </div>
                                            <div class="authentication-item">
                                                <label for="input">Password</label>
                                                <input v-model="from.password" type="text" placeholder="">
                                            </div>
                                            <div class="authentication-item">
                                                <label for="input">Confirm Password</label>
                                                <input v-model="confirmpassword" type="password" placeholder="">
                                            </div>
                                          
                                            <p class="authentication-p" >Your personal data will be used to support your experience through your websites.to manage access to your account and for other purposes described in our <router-link to="#">privacy policy</router-link>.</p>
                                            <div class="authentication create-account-button">
                                                     <button @click="registerUser" class="sign-now-button">Sign up</button>
                                            </div>
                                        
                            
                                        <div class="authentication-info">
                                            <p>Already have an account? <router-link to="/login">Log in Now</router-link></p>
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
export default {
    data(){
        return{
            from:{
                name:'',
                student_id:'',
                email:'',
                password:'',
                batch:'',
            },
            confirmpassword:''
        }
    },
    created(){
        
    } ,
    methods:{
        async registerUser(){
            if(this.from.name==''){
                    return this.e("Name Field Can Not be Empty!!")
            }
            if(this.from.student_id==''){
                    return this.e("student id Field Can Not be Empty!!")
            }
            if(this.from.email==''){
                    return this.e("email Field Can Not be Empty!!")
            }
            if(this.from.batch==''){
                    return this.e("batch Field Can Not be Empty!!")
            }
            if(this.from.password!=this.confirmpassword){
                 return this.e("password does not match!!")
            }

            const res = await this.callApi('post','registration', this.from)
            if(res.status == 200 || res.status==201){
                this.s("registion has been completed please log in !!")
                this.$router.push('/login')
            }
            else if(res.status==422){
                if(res.data.errors){
                    if(res.data.errors.name){
                        return this.e(res.data.errors.name[0])
                    }
                    if(res.data.errors.email){
                        return this.e(res.data.errors.email[0])
                    }
                    if(res.data.errors.password){
                        return this.e(res.data.errors.password[0])
                    }
                }
            }
            
        }
    },
}
</script>