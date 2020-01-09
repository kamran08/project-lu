<template>
    <div>
         <div class="second-section-account content-bg ptb-30">
            <div class="container">
                <div class="section-content">
                    <div class="authentication-row full-card">
                        <div class="col-md-5 col-sm-5">
                            <div class="authentication-image">
                                <img src="/assets/img/download-rec.png" alt="">
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-7">
                            <div class="authentication-card auth-back">
                                <div class="authentication-title">
                                    <h3><span>Download</span>request form</h3>

                                </div>
                                <div class="authentication-log">
                                    <form action="#">
                                        <div class="authentication-item">
                                            <label for="input">User Name</label>
                                            <input type="text" placeholder="User name or email">
                                        </div>
                                        <div class="authentication-item">
                                            <label for="input">Student ID</label>
                                            <input type="text" placeholder="1612----56">
                                        </div>

                                        <div class="authentication-item">
                                            <label for="input">Student ID</label>
                                            <textarea class="textarea">Why you want source file? </textarea>
                                        </div>

                                    </form>

                                    <div class="authentication download-button">
                                        <router-link to="/">
                                            <button class="save-now-button">Send a request</button>
                                        </router-link>
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