<template>
    <div>
         <div class="second-section-add-member content-bg ptb-30">
            <div class="container">
                <div class="section-content">
                    <div class="authentication-row full-card">
                        <div class=" col-12 col-md-7">
                            <div class="authentication-name">
                                <div class="name-item">
                                    <div class="image">
                                        <img class="hachib" src="/assets/img/hachib.png" alt="">
                                    </div>

                                    <div class="describe">
                                        <h3 class="member-name">Hachibur Rahaman</h3>
                                        <p class="describe-p">Student ID: 1612020051</p>
                                        <p class="describe-p">Batch: 41'st</p>

                                    </div>

                                </div>
                                <div class="name-item">
                                    <div class="image">
                                        <img class="hachib" src="/assets/img/suhas.png" alt="">
                                    </div>

                                    <div class="describe">

                                        <h3 class="member-name">Suhas Chowdhury</h3>
                                        <p class="describe-p">Student ID: 1612020053</p>
                                        <p class="describe-p">Batch: 41'st</p>
                                    </div>

                                </div>

                                <div class="name-item">
                                    <div class="image">
                                        <img class="hachib" src="/assets/img/3rd-member.png" alt="">
                                    </div>
                                    <div class="describe">

                                        <h3 class="member-name">Al Juned</h3>
                                        <p class="describe-p">Student ID: 1612020090</p>
                                        <p class="describe-p">Batch: 41'st</p>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class=" col-sm-12 col-md-5">
                            <div class="authentication-card auth-back">
                                <div class="authentication-title">
                                    <h3><span>Add</span>new member</h3>

                                </div>
                                <div class="authentication-log">
                                    <form action="#">
                                        <div class="authentication-item">
                                            <label for="input">User Name</label>
                                            <input type="text" placeholder="User name or email">
                                        </div>
                                        <div class="authentication-item">
                                            <label for="input">Student ID</label>
                                            <input type="text" placeholder="1612020051">
                                        </div>
                                        <div class="authentication-item">
                                            <label for="input">Student ID</label>
                                            <input type="text" placeholder="1612020053">
                                        </div>

                                    </form>

                                    <div class="authentication ">
                                        <router-link to="/">
                                            <button class="add-now-button">Add now</button>
                                        </router-link>
                                    </div>

                                </div>
                            </div>

                            <div class="authentication save-and-exit-button ">
                                <router-link to="/">
                                    <button class="save-now-button add-member-button">Save and exit</button>
                                </router-link>

                            </div>
                        </div>


                    </div>
                </div>
            </div>


        </div>
    </div>
</template>