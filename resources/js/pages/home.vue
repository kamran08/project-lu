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
							<li v-if="authInfo"><router-link to="/team-profile">Team Profile</router-link></li>
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
					<li v-if="authInfo"><router-link to="/team-profile">Team Profile</router-link></li>
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
			
		

		<div class="header-description">
			<div class="container">
				<div class="col-md-6">
					<div class="text-part mt-">
						<h1 class="first-header">smartly manage your project,and share with other's</h1>
						<p class="header-p">I'm a paragraph. Click here to add your own text and edit me. It’s easy.
							Just click “Edit Text” or double click me to add your own content and make changes to the
							font.</p>

						<router-link to="upload-project">
							<button class="header-button">Upload project</button>
						</router-link>

					</div>
				</div>

				<div class="col-md-6 header-image">
					<img src="assets/img/header-desh-img.png" alt="">
				</div>
			</div>
		</div>

	</header>


	<!--========First Section========-->

	<div class="first-section" id="first-section-id">
		<div class="container">
			<div class="col-md-7">
				<h1 class="first-sec-header"><span>Website</span>design and development</h1>
				<p class="first-sec-p">I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just
					click “Edit Text” or double click me to add your own content and make changes to the font. I’m a
					great place for you to tell a story and let your users know a little more about you.</p>
				<div class="icon-section">
					<img src="assets/img/icon-group.png" alt="">
				</div>

			</div>

			<div class="col-md-5 first-sec-image">
				<img src="assets/img/software-teams.png" alt="">
			</div>

		</div>
	</div>

	<!--========End First Section========-->


	<!--========Second Section========-->
	<div class="second-section">
		<div class="container">
			<div class="flex-section">
				<div class="card-item" :class="((index%2==0))?'mgt-15':''" v-for="(item,index) in allwebsite" :key="index">
					<div class="card-design first-card">
						<router-link :to="'/product-description/'+item.id">
							<div class="content-overlay"></div>
							<img class="content-image" :src="item.image">
							<div class="content-details fadeIn-bottom">
								<h3 class="content-title">{{item.projectName}}</h3>
								<p class="content-text">{{item.category}}</p>
								<!-- <p class="content-like"><span><i class="far fa-thumbs-up"></i></span>275 <span><i
											class="fas fa-eye"></i></span>358</p> -->
							</div>
						</router-link>
					</div>
				</div>

			</div>

			<div class="second-sec-button textAlign">
				<router-link to="/all-template?type=Website">
					<button class="view-button web-sec-btn">View all websites</button>
				</router-link>
			</div>
		</div>

	</div>
	<!--========End Second Section========-->


	<!--========Start third Section========-->

	<div class="third-section" id="third-section-id">
		<div class="container">
			<h1 class="third-sec-h"><span>Mobile</span>Application Project</h1>
			<p class="third-sec-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
				Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
				galley of type and scrambled it to make a type specimen book.</p>

			<div class="col-md-5 col-md-offset-1 box-wrap">
				<div class="box android-card">
					<a href="#">

						<div class="icon"><img src="assets/img/ios-apps.png" alt=""></div>
						<div class="text-part-mbl-apps">
							<h4 class="title">Android Application</h4>
							<p class="description">Mobile Apps Develpment For Any Business</p>
						</div>

					</a>
				</div>

			</div>
			<div class="col-md-5 box-wrap">
				<div class="box ios-card">
					<a href="#">

						<div class="icon"><img src="assets/img/ios-apps.png" alt=""></div>
						<h4 class="title">IOS Application</h4>
						<p class="description">Mobile Apps Develpment For Any Business</p>
					</a>
				</div>
			</div>

		</div>
	</div>
	<!--========End third Section========-->



	<!--========Start fourth Section========-->

	<div class="fourth-section">
		<div class="container">
			<div class="flex-section">
				<div class="card-item" :class="((index%2==0))?'mgt-15':''" v-for="(item,index) in allApps" :key="index">
					<div class="card-design first-card">
						<router-link :to="'/product-description/'+item.id">
							<div class="content-overlay"></div>
							<img class="content-image" :src="item.image">
							<div class="content-details fadeIn-bottom">
								<h3 class="content-title">{{item.projectName}}</h3>
								<p class="content-text">{{item.category}}</p>
								<!-- <p class="content-like"><span><i class="far fa-thumbs-up"></i></span>275 <span><i
											class="fas fa-eye"></i></span>358</p> -->
							</div>
						</router-link>
					</div>
				</div>
			</div>

			<div class="second-sec-button textAlign">
				<router-link to="/all-template?type=Apps">
					<button class="view-button web-sec-btn">View all Apps</button>
				</router-link>
			</div>
		</div>
	</div>


	<!--========End fourth Section========-->

	<!--========Start fifth Section========-->
	<div class="fifth-section" id="fifth-section-id">
		<div class="container">

			<div class="col-md-6 fifth-sec-image">
				<img src="assets/img/game-img.png" alt="">
			</div>

			<div class="col-md-6">
				<h1 class="fifth-sec-header"><span>Game</span>Development</h1>
				<p class="fifth-sec-p">I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just
					click “Edit Text” or double click me to add your own content and make changes to the font.</p>

					<div class="icon-section">
						<img src="assets/img/icon-group.png" alt="">
					</div>

			</div>
		</div>
	</div>

	<!--========End fifth Section========-->



	<!--========Start sixth Section========-->

	<div class="sixth-section">
		<div class="container">
			<div class="flex-section">
				<div class="card-item" :class="((index%2==0))?'mgt-15':''" v-for="(item,index) in allGames" :key="index">
					<div class="card-design first-card">
						<router-link :to="'/product-description/'+item.id">
							<div class="content-overlay"></div>
							<img class="content-image" :src="item.image">
							<div class="content-details fadeIn-bottom">
								<h3 class="content-title">{{item.projectName}}</h3>
								<p class="content-text">{{item.category}}</p>
								<!-- <p class="content-like"><span><i class="far fa-thumbs-up"></i></span>275 <span><i
											class="fas fa-eye"></i></span>358</p> -->
							</div>
						</router-link>
					</div>
				</div>
			</div>

			<div class="second-sec-button textAlign">
				<router-link to="/all-template?type=Games">
					<button class="view-button web-sec-btn">View all Games</button>
				</router-link>
			</div>
		</div>

	</div>

	<!--========End Sixth Section========-->


	<!--========start Seventh Section========-->
	<!-- <div class="seventh-section">
		<div class="container">
			<div class="area">
				<h1 class="seventh-sec-header">User<span> Expression</span></h1>
				<div class="col-md-3">
					<img class="couneter-icon" src="assets/img/couneter-d.png" alt="">
					<p class="counter-p">Download</p>
					<h1 class="counter">10K +</h1>
				</div>

				<div class="col-md-3">
					<img class="couneter-icon" src="assets/img/couneter-u.png" alt="">
					<p class="counter-p">Active User</p>
					<h1 class="counter">8K +</h1>
				</div>

				<div class="col-md-3">
					<img class="couneter-icon" src="assets/img/couneter-l.png" alt="">
					<p class="counter-p">Like</p>
					<h1 class="counter">16K +</h1>
				</div>

				<div class="col-md-3">
					<img class="couneter-icon" src="assets/img/couneter-r.png" alt="">
					<p class="counter-p">5 Star Rating</p>
					<h1 class="counter">12K +</h1>
				</div>
			</div>
		</div>
	</div> -->

	<!--========End Seventh Section========-->



	</div>
</template>

<script>
export default {
	data(){
		return{
			allwebsite:{},
			allApps:{},
			allGames:{},
		}
	},
	async created(){
		this.allwebsite =await this.getProject('Website')
		this.allApps =await this.getProject('Apps')
		this.allGames = await this.getProject('Games')

	},
	methods:{
		  async getProject(type){
            const res = await this.callApi('get',`getProject?type=${type}`)
            if(res.status == 200){
              return res.data
            }
            else{
                this.$router.push('/')
            }
        },
	}
}
</script>
<style>
.textAlign{
	text-align: center;
}
</style>