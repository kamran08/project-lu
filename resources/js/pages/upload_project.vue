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
                                    <li :class="(tab==1)?'active_1':''" @click="tab=1">Project<span><i
                                                    class="fas fa-angle-double-right"></i></span></li>
                                    <li :class="(tab==2)?'active_1':''" @click="tab=2">Cover & Image<span><i
                                                    class="fas fa-angle-double-right"></i></span></li>
                                    <li :class="(tab==3)?'active_1':''" @click="tab=3">Publishing</li>

                                </ul>
                            </div>
                            <div class="authentication-log" v-if="tab==1">
                                    <div class="authentication-item">
                                        <label for="input">Project Title</label>
                                        <input type="text" placeholder="E-Commerce website">
                                    </div>
                                    <div class="authentication-item">
                                        <label for="input">Project Type</label>
                                        <select v-model="value" class="select-category" id="sel1">
                                            <option value="Website">Website</option>
                                            <option value="Apps">Apps</option>
                                            <option value="Game">Game</option>
                                            <option value="Thesis">Thesis</option>
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

                                <div class="authentication next-button" @click="tab=2">
                                    
                                    <button class="sign-now-button next-btn">Next</button>
                                   
                                </div>
                            </div>
                            <!-- project image -->

                               <div class="authentication-log" v-if="tab==2">
                                
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
     
                               
                                <div class="authentication next-button" @click="tab=3">
                                    
                                        <button class="sign-now-button next-btn">Next</button>
                                    
                                </div>



                            </div>
                            <!-- project image -->

                            <!-- publish project -->

                            <div class="authentication-log publish-card" v-if="tab==3">
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
                                <div class="authentication next-button" @click="tab=1">
                                 
                                        <button class="sign-now-button next-btn">Publish now</button>
                                    
                                </div>



                            </div>
                            <!-- publish project -->



                        </div>

                    </div>
                </div>
            </div>
        </div>
        {{tab +"hell"}}

    </div>
</template>

<script>
export default {
    data(){
        return{
            tab:1,
            value:"",
            from:{
                
            }
        }
    },
    created(){

    },
    methods:{

    }


}
</script>
<style >
    .active_1{
        color:blue;
    }
</style>