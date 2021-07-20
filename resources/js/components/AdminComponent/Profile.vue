<template>
	<div>
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="title">
								<h4>Profile</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Profile</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30 ">
						<div class="pd-20 card-box height-100-p">
							<div class="profile-photo">
								<a href="modal" data-toggle="modal" data-target="#modal" class="edit-avatar"><i class="fa fa-pencil"></i></a>
								<img :src="'admin/vendors/images/photo1.jpg'" alt="" class="avatar-photo">
								<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-body pd-5">
												<div class="img-container">
													<img id="image" :src="'admin/vendors/images/photo1.jpg'" alt="Picture">
												</div>
											</div>
											<div class="modal-footer">
												<input type="submit" value="Update" class="btn btn-primary">
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<h5 class="text-center h5 mb-0">{{users.name}}</h5>
							<div class="profile-info">
								<h5 class="mb-20 h5 text-blue">Contact Information</h5>
								<ul>
									<li>
										<span>Email Address:</span>
										<input class="form-control" type="text" :readonly="!emailEditable" id="email" v-model="user.email" @change="updateProfile(user)">
										<i class="fa fa-pencil" id="icon_email"  @click="editProfile(users,type='email')" style="padding: 0px 0px 0px 20px;"></i>
									</li>
									<li>
										<span>Phone Number:</span>
										<input class="form-control" type="text" :readonly="!contactEditable" id="contact" v-model="user.contact" @change="updateProfile(user)">
										<i class="fa fa-pencil" id="icon_contact" @click="editProfile(users,type='contact')" style="padding: 0px 0px 0px 20px;"></i>
									</li>
									<li>
										<span>Whatsapp Number:</span>
										<input class="form-control" type="text" :readonly="!whatsappEditable" id="whatsapp_no" v-model="user.whatsapp_no" @change="updateProfile(user)">
										<i class="fa fa-pencil" id="icon_whatsapp_no" @click="editProfile(users,type='whatsapp_no')" style="padding: 0px 0px 0px 20px;"></i>
									</li>
									<li>
										<span>Country:</span>
										<input class="form-control" type="text" :readonly="!countryEditable" id="country" v-model="user.country" @change="updateProfile(user)">
										<i class="fa fa-pencil" id="icon_country" @click="editProfile(users,type='country')" style="padding: 0px 0px 0px 20px;"></i>
									</li>
								</ul>
							</div>
							<div class="profile-social">
								<h5 class="mb-20 h5 text-blue">Your Current Id</h5>
								<ul class="clearfix">
									<li><a href="#" class="btn" data-color="#ffffff"><img :src="origin_path + '/admin/vendors/images/betdaily.png'" alt=""></a></li>
									<li><a href="#" class="btn" data-color="#ffffff"><img :src="origin_path + '/admin/vendors/images/bullexch.png'" alt=""></a></li>
									<li><a href="#" class="btn" data-color="#ffffff"><img :src="origin_path + '/admin/vendors/images/RD-LOGO.png'" alt=""></a></li>
									<li><a href="#" class="btn" data-color="#ffffff"><img :src="origin_path + '/admin/vendors/images/logo.png'" alt=""></a></li>
									<li><a href="#" class="btn" data-color="#ffffff"><img :src="origin_path + '/admin/vendors/images/betdaily.png'" alt=""></a></li>
									<li><a href="#" class="btn" data-color="#ffffff"><img :src="origin_path + '/admin/vendors/images/bullexch.png'" alt=""></a></li>
									<li><a href="#" class="btn" data-color="#ffffff"><img :src="origin_path + '/admin/vendors/images/RD-LOGO.png'" alt=""></a></li>
									<li><a href="#" class="btn" data-color="#ffffff"><img :src="origin_path + '/admin/vendors/images/logo.png'" alt=""></a></li>
									<li><a href="#" class="btn" data-color="#ffffff"><img :src="origin_path + '/admin/vendors/images/betdaily.png'" alt=""></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
export default {
	props: ['users'],
	data(){
		return{
			origin_path: this.$user_base_url,
			isEditing: false,
			user: {name: '',email:'',contact:'',whatsapp_no:'',country:''},
			nameEditable:false,
			emailEditable:false,
			contactEditable:false,
			whatsappEditable:false,
			countryEditable:false,
			currentUser: null,
			
		}
	},
	mounted(){
		$(document).ready(function(){
  			
		});
	},
	methods: {
		editProfile(user,type){			
			this.currentUser = user;
			if(type=='whatsapp_no'){
			this.whatsappEditable = true;
			this.user.whatsapp_no= this.currentUser.whatsapp_no;
			}
			if(type=='email'){
			this.emailEditable = true;
			this.user.email= this.currentUser.email;
			}
			if(type=='contact'){
			this.contactEditable = true;
			this.user.contact= this.currentUser.contact;
			}			
			
			this.user.name = this.currentUser.name;
			
			
			// console.log(this.user.contact);
			
			this.user.country= this.currentUser.country;
		},
		updateProfile(data){
			console.log(data);
		}
	}
}
</script>