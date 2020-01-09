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
                                    <li class="active"><router-link to="#">Cover & Image<span><i
                                                    class="fas fa-angle-double-right"></i></span></router-link></li>
                                    <li><router-link to="publish-project">Publishing</router-link></li>

                                </ul>
                            </div>
                            <div class="authentication-log">
                                
                                    <div class="authentication-item">
                                        
                                        <div class="file-upload">
                                            <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button>
                                          
                                            <div class="image-upload-wrap">
                                              <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                                              <div class="drag-text">
                                                <h3>Drag and drop a file or select add Image</h3>
                                              </div>
                                            </div>
                                            <div class="file-upload-content">
                                              <img class="file-upload-image" src="#" alt="your image" />
                                              <div class="image-title-wrap">
                                                <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                                              </div>
                                            </div>
                                          </div>
                                    </div>
     
                               
                                <div class="authentication next-button">
                                    <router-link to="publish-project">
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