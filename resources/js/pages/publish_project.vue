<template>
    <div>
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

                            <div class="upload-project-menu">
                                <ul>
                                    <li ><router-link to="upload-project">Project<span><i
                                                    class="fas fa-angle-double-right"></i></span></router-link></li>
                                    <li ><router-link to="cover-image">Cover & Image<span><i
                                                    class="fas fa-angle-double-right"></i></span></router-link></li>
                                    <li class="active"><router-link to="#">Publishing</router-link></li>

                                </ul>
                            </div>
                            <div class="authentication-log publish-card">
                                <form action="#">
                                    <div class="authentication-item ">
                                        <label  for="input">Upload source file</label>
                                        <input class="publish-label" name="input" type="file">
                                        <p>Create a .Zip file with all of your code and resources like html, css, JavaScript, php files. Don't worry! Download will be controlled only by you or your project team</p>
                                    </div>
                                    

                                    <div class="authentication-item">
                                        <label for="input">Settings</label>
                                        <label><input type="checkbox" value="">Cloase Comments</label>
                                    </div>


     
                                </form>
                                <div class="authentication next-button">
                                    <router-link to="/">
                                        <button class="sign-now-button next-btn">Publish now</button>
                                    </router-link>
                                </div>



                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>