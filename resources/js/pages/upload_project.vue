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
                                    <li class="active"><router-link to="#">Project<span><i
                                                    class="fas fa-angle-double-right"></i></span></router-link></li>
                                    <li><router-link to="cover-image">Cover & Image<span><i
                                                    class="fas fa-angle-double-right"></i></span></router-link></li>
                                    <li><router-link to="publish-project">Publishing</router-link></li>

                                </ul>
                            </div>
                            <div class="authentication-log">
                                <form action="#">
                                    <div class="authentication-item">
                                        <label for="input">Project Title</label>
                                        <input type="text" placeholder="E-Commerce website">
                                    </div>
                                    <div class="authentication-item">
                                        <label for="input">Project Type</label>
                                        <select class="select-category" id="sel1">
                                            <option>Website</option>
                                            <option>Apps</option>
                                            <option>Game</option>
                                            <option>Thesis</option>
                                        </select>
                                    </div>

                                    <div class="authentication-item">
                                        <label for="input">Project Category</label>
                                        <input type="text" placeholder="Type category of webaite">
                                    </div>
                                    <div class="authentication-item">
                                        <label for="input">Project description</label>
                                        <textarea class="textarea upload-textarea">Describe your project</textarea>
                                    </div>



                                </form>
                                <div class="authentication next-button">
                                    <router-link to="/">
                                        <button class="sign-now-button next-btn">Next</button>
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