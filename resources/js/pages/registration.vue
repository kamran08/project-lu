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
                                                <label for="input">First Name</label>
                                                <input type="text" placeholder="First Name Here">
                                            </div>
                                            <div class="authentication-item">
                                                <label for="input">Student ID</label>
                                                <input type="text" placeholder="1612----56">
                                            </div>

                                            <div class="authentication-item">
                                                <label for="input">Batch</label>
                                                <input type="text" placeholder="41">
                                            </div>
                                            <div class="authentication-item">
                                                <label for="input">Email Address</label>
                                                <input type="text" placeholder="your-email@domail.com">
                                            </div>
                                            <div class="authentication-item">
                                                <label for="input">Password</label>
                                                <input type="text" placeholder="">
                                            </div>
                                            <div class="authentication-item">
                                                <label for="input">Confirm Password</label>
                                                <input type="password" placeholder="">
                                            </div>
                                          
                                            <p class="authentication-p" >Your personal data will be used to support your experience through your websites.to manage access to your account and for other purposes described in our <router-link to="#">privacy policy</router-link>.</p>
                                            <div class="authentication create-account-button">
                                                <router-link to="/">
                                                     <button class="sign-now-button">Sign up</button>
                                                </router-link>
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