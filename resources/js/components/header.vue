<template>
    <div>
    <header class="header">
		<div class="main-nav">
			<div class="container">
				<nav class="navigation">
					 <div class="col-md-2">
                <router-link to="/">
                    <div class="logo-1">

                    </div>
                </router-link>
            </div>
					<div class="col-md-7 center">
						<ul class="nav_list ">
							<li><router-link to="/">Home</router-link></li>
							<li v-if="authInfo"><router-link to="/team-profile">Team Profile</router-link></li>
							<li><router-link to="/all-template?type=Website">Website</router-link></li>
							<li><router-link to="/all-template?type=Apps">Apps</router-link></li>
							<li><router-link to="/all-template?type=Games">Games</router-link></li>
							

						</ul>
					</div>

									<div class="col-md-2">
						<div class="dropdown">
							<button onclick="myFunction()" class="nav-button"> <span><i
										class="fas fa-user-circle"></i></span> My Account</button>
							<div id="myDropdown" class="dropdown-content">
								<ul class="dropdown-item-wrap">

								<template v-if="authInfo">
									<li class="dropdown-item">
										<router-link to="add-member">

											<div class="img-drp-down ">
												<img class="hachib" src="/assets/img/add-mem-small.png" alt="">
											</div>

											<div class="prgp-drp-down">
												<p> Add your team member</p>
											</div>

										</router-link>

									</li>

									<li class="dropdown-item">

										<router-link to="upload-project">

											<div class="img-drp-down">
												<img class="hachib" src="/assets/img/upload-small.png" alt="">
											</div>

											<div class="prgp-drp-down">
												<p>Upload your project</p>
											</div>

										</router-link>


									</li>
									<li class="dropdown-item">

										<router-link to="/myProject">

											<div class="img-drp-down">
												<img class="hachib" src="/assets/img/upload-small.png" alt="">
											</div>

											<div class="prgp-drp-down">
												<p>My Projects</p>
											</div>

										</router-link>


									</li>

									<li class="dropdown-item">

										<router-link to="team-profile">

											<div class="img-drp-down">
												<img class="hachib" src="/assets/img/team-pro.png" alt="">
											</div>

											<div class="prgp-drp-down">
												<p>See your team
													profile</p>
											</div>

										</router-link>


									</li>
									<li class="dropdown-item">

										<router-link to="/allrequest">
											<div class="img-drp-down">
												<img class="hachib" src="/assets/img/notification-small.png" alt="">
											</div>

											<div class="prgp-drp-down">
												<p>See All requests</p>
											</div>

										</router-link>


									</li>

									<li class="dropdown-item">

										<a href="/logout">

											<div class="img-drp-down">
												<img class="hachib" src="/assets/img/sign-out-small.png" alt="">
											</div>

											<div class="prgp-drp-down">
												<p>Sign out from website</p>
											</div>


										</a>

									</li>
									</template>
									<template v-else>

									
									<li class="dropdown-item">

										<router-link to="/login">

											<div class="img-drp-down">
												<img class="hachib" src="/assets/img/sign-out-small.png" alt="">
											</div>

											<div class="prgp-drp-down">
												<p>Log In</p>
											</div>


										</router-link>

									</li>
									<li class="dropdown-item">

										<router-link to="/registration">

											<div class="img-drp-down">
												<img class="hachib" src="/assets/img/sign-out-small.png" alt="">
											</div>

											<div class="prgp-drp-down">
												<p>Registration</p>
											</div>


										</router-link>

									</li>
									</template>

								</ul>

							</div>
						</div>

					</div>
				</nav>
			</div>


			
		</div>
		

	

	</header>


	<!--========End Header Section========-->


    </div>
</template>