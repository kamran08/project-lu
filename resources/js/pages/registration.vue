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
                                        <form action="#">
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
                                        </form>
                                        
                            
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
            }
        }
    },
    created(){
        
    } ,
    methods:{
        async registerUser(){
            
        }
    },
}
</script>