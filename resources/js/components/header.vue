<template>
    <div>
    <header class="header">
		<div class="main-nav">
			<div class="container">
				<nav class="navigation">
					<div class="col-md-2">
						<div class="logo-1">
							<router-link to="home"></router-link>
						</div>
					</div>
					<div class="col-md-7 center">
						<ul class="nav_list ">
							<li><router-link to="/">Home</router-link></li>
							<li><router-link to="/team-profile">Team Profile</router-link></li>
							<li><router-link to="/website">Website</router-link></li>
							<li><router-link to="/apps">Apps</router-link></li>
							<li><router-link to="/games">Games</router-link></li>
							

						</ul>
					</div>

					<div class="col-md-3">
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

										<router-link to="download-request">
											<div class="img-drp-down">
												<img class="hachib" src="/assets/img/notification-small.png" alt="">
											</div>

											<div class="prgp-drp-down">
												<p>See notification and request</p>
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