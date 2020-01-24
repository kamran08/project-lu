<template>
    <div>
        <header class="header header-bg">
		<div class="mobile-menu">
			<div class="container">
				<div class="right main-nav-brand">
					<router-link href="/"><img class="logo" src="assets/img/site-logo-2.png" alt=""></router-link>
				</div>


				<div class="mobile-toggle">
					<span><i class="fas fa-bars"></i></span>
				</div>
				<div class="mobile-open-container">
					<div class="main-nav-list">
						<ul class="nav-content">
							<li class="active">
								<router-link to="/">Home</router-link>
							</li>
							<li><a href="#">About</a></li>
                            <li><a href="#first-section-id">Website</a></li>
                            <li><a href="#third-section-id">Apps</a></li>
                            <li><a href="#fifth-section-id">Games</a></li>
                            <li><a href="#">Contact us</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		
<div class="main-nav">
    <div class="container">
        <nav class="navigation">
            <div class="col-md-2">
                <router-link to="/">
                    <div class="logo-1">

                    </div>
                </router-link>
            </div>
            <div class="col-md-8 center">
                <ul class="nav_list ">
                    <li><router-link to="/">Home</router-link></li>
                    <li><a href="#about-section-id">About</a></li>
                    <li><a href="#first-section-id">Website</a></li>
                    <li><a href="#third-section-id">Apps</a></li>
                    <li><a href="#fifth-section-id">Games</a></li>

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
			
		

		<div class="header-description">
			<div class="container">
				

				<div class="col-md-6 header-image">
					<img src="assets/img/header-desh-img.png" alt="">
				</div>
			</div>
		</div>

	</header>
    </div>
</template>