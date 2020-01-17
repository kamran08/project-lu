<template>
    <div>
          <div class="second-section-account content-bg ptb-30 ">
                <div class="container">
                    <div class="section-content">
                        <div class="authentication-row">
                            <div class="col-md-6 col-sm-6">
                                <div class="authentication-image">
                                    <img src="/assets/img/sign-up.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="authentication-card">
                                    <div class="authentication-title">
                                        <h3><span>Login</span>to your Account</h3>
                                        
                                    </div>
                                    <div class="authentication-log">
                                        <form action="#">
                                            <div class="authentication-item">
                                                <label for="input">Email</label>
                                                <input v-model="from.email" type="text" placeholder="User email">
                                            </div>
                                            <div class="authentication-item">
                                                <label for="input">password</label>
                                                <input v-model="from.password" type="password" placeholder="Enter password">
                                            </div>
                                            
                                             <div class="checkbox">
                                                <label><input type="checkbox" value="">Remember me</label>
                                                <a class="lost-pass-link" href="#">Lost your password?</a>
                                             </div>                                         
                                        </form>

                                        <div class="authentication create-account-button">
                                                 <button class="sign-now-button" @click="login">Log in</button>
                                        </div>
                                        
                            
                                        <div class="authentication-info">
                                            <p class="login-p">Don't use Project Rakho? 
                                                <router-link to="/registration">Sign Up Now</router-link>
                                                
                                             </p>
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
export default {
    data(){
        return{
            from:{
                email:'',
                password:'',
            },
        }
    },
    created(){
        
    } ,
    methods:{
        async login(){
      
            if(this.from.email==''){
                    return this.e("email does not match!!")
            }
            if(this.from.password=''){
                 return this.e("password does not match!!")
            }
            const res = await this.callApi('post','login', this.from)
            if(res.status == 200 || res.status==201){
                this.s("Login successfull!");
                   this.$store.dispatch("setAuthuser", res.data.user);
                
                window.location = '/'
                // this.$router.push('/')
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