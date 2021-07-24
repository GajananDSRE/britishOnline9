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
								<a class="edit-avatar"><i class="fa fa-pencil" @click="editProfile(users,type='profile')" ></i></a>
								<img :src="origin_path + '/admin/vendors/images/Profile/' + users.profile" alt="" class="avatar-photo">
								<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="exampleModalLabel">Profile</h4>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body pd-5">

												<div class="col-xs-12">
													<form id="update-profile-form" v-on:submit.prevent="handleUpdate(users,type)" enctype="multipart/form-data">
														<div class="form-group img-container">
															<input type="file" name="file" id="customFile" v-if="imageEditable==true" ref="file" @change="handleFileObject()">
															<!-- <label class="custom-file-label text-left" for="customFile">{{ user.fileName }}</label> -->
															<img :src="origin_path + '/admin/vendors/images/Profile/' + users.profile" alt="Picture" v-if="imageEditable==true">
														</div>
														<div class="form-group" v-if="nameEditable==true">
															<span>Name :</span>
															<input class="form-control" type="text" name="name" v-model="user.name">
														</div>
														<div class="form-group" v-if="emailEditable==true">
															<span>Email Address:</span>
															<input class="form-control" type="text" name="email" v-model="user.email">
														</div>
														<div class="form-group" v-if="contactEditable==true">
															<span>Phone Number:</span>
															<input class="form-control" type="text"  name="contact" v-model="user.contact">
														</div>
														<div class="form-group" v-if="whatsappEditable==true">
															<span>Whatsapp Number:</span>
															<input class="form-control" type="text" name="whatsapp_no" v-model="user.whatsapp_no">
														</div>
														<div class="form-group" v-if="countryEditable==true">
															<span>Country:</span>
															<input class="form-control" type="text" name="country" v-model="user.country">
														</div>
														<div class="form-group">
															<button class="btn btn-info btn-block btn-lg">Update</button>
														</div>
													</form>
												</div>
												<!-- <div class="form-group img-container">
													<input type="file" id="customFile" v-if="imageEditable==true" ref="file" @change="handleFileObject()">
													<label class="custom-file-label text-left" for="customFile">{{ user.fileName }}</label>
													<img :src="origin_path + '/admin/vendors/images/Profile/' + users.profile" alt="Picture" v-if="imageEditable==true">
												</div>
												<div class="form-group" v-if="nameEditable==true">
													<span>Name :</span>
													<input class="form-control" type="text" v-model="user.name">
												</div>
												<div class="form-group" v-if="emailEditable==true">
													<span>Email Address:</span>
													<input class="form-control" type="text" v-model="user.email">
												</div>
												<div class="form-group" v-if="contactEditable==true">
													<span>Phone Number:</span>
													<input class="form-control" type="text"  v-model="user.contact">
												</div>
												<div class="form-group" v-if="whatsappEditable==true">
													<span>Whatsapp Number:</span>
													<input class="form-control" type="text" v-model="user.whatsapp_no">
												</div>
												<div class="form-group" v-if="countryEditable==true">
													<span>Country:</span>
													<input class="form-control" type="text" v-model="user.country">
												</div>
												<div class="form-group">
													<button class="btn btn-primary btn-block btn-lg" @click="updateProfile(users,type)">Update</button>
												</div> -->
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<h5 class="text-center h5 mb-0">{{users.name}}
								<i class="fa fa-pencil" @click="editProfile(users,type='name')" style="padding: 0px 0px 0px 20px;"></i>
							</h5>
							<div class="profile-info">
								<h5 class="mb-20 h5 text-blue">Contact Information</h5>
								<ul>
									<li>
										<span>Email Address:</span>{{users.email}}
										<i class="fa fa-pencil"  @click="editProfile(users,type='email')" style="padding: 0px 0px 0px 20px;"></i>
									</li>
									<li>
										<span>Phone Number:</span>{{users.contact}}
										<i class="fa fa-pencil" @click="editProfile(users,type='contact')" style="padding: 0px 0px 0px 20px;"></i>
									</li>
									<li>
										<span>Whatsapp Number:</span>{{users.whatsapp_no}}
										<i class="fa fa-pencil" @click="editProfile(users,type='whatsapp_no')" style="padding: 0px 0px 0px 20px;"></i>
									</li>
									<li>
										<span>Country:</span>{{users.country}}
										<i class="fa fa-pencil" @click="editProfile(users,type='country')" style="padding: 0px 0px 0px 20px;"></i>
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
			user: {id: '',file:'',fileName: '',name: '',email:'',contact:'',whatsapp_no:'',country:''},
			nameEditable:false,
			emailEditable:false,
			contactEditable:false,
			whatsappEditable:false,
			countryEditable:false,
			imageEditable:false,
			currentUser: null,
			type:'',
			form:''			
		}
	},
	methods: {
		handleFileObject() {
            this.user.file = this.$refs.file.files[0]			
            this.user.fileName = this.$refs.file.files[0].name
        },
		editProfile(user,type){			
			this.currentUser = user;
			this.type = type;
			$('#modal').modal('show');
			if(this.type=='whatsapp_no'){
			this.whatsappEditable = true;
			this.user.whatsapp_no= this.currentUser.whatsapp_no;
			this.emailEditable = false;this.contactEditable = false;this.countryEditable = false;this.nameEditable = false;this.imageEditable = false;
			
			}
			if(this.type=='email'){
			this.emailEditable = true;
			this.user.email= this.currentUser.email;
			this.whatsappEditable = false;this.contactEditable = false;this.countryEditable = false;this.nameEditable = false;this.imageEditable = false;
			}
			if(this.type=='contact'){
			this.contactEditable = true;
			this.user.contact= this.currentUser.contact;
			this.whatsappEditable = false;this.emailEditable = false;this.countryEditable = false;this.nameEditable = false;this.imageEditable = false;
			}
			if(this.type=='country'){
			this.countryEditable = true;
			this.user.country= this.currentUser.country;
			this.whatsappEditable = false;this.emailEditable = false;this.contactEditable = false;this.nameEditable = false;this.imageEditable = false;
			}	
			if(this.type=='name'){
			this.nameEditable = true;
			this.user.name= this.currentUser.name;
			this.whatsappEditable = false;this.emailEditable = false;this.contactEditable = false;this.countryEditable = false;this.imageEditable = false;
			}	
			if(this.type=='profile'){
			this.imageEditable = true;
			this.whatsappEditable = false;this.emailEditable = false;this.contactEditable = false;this.countryEditable = false;this.nameEditable = false;
			// this.user.file= this.user.fileName;
			// console.log(this.user.file);
			}			
		},
		
		// updateProfile(user,type){
		// 	this.form = new FormData();
		// 	// $("#update-form").validate();
		// 	// if($("#update-form").valid()){
		// 	this.user.id = this.users.id;
		// 	if(type=='whatsapp_no'){this.form.append('id', this.user.id);this.form.append('type',type);this.form.append('whatsapp_no',this.user.whatsapp_no);}
		// 	if(type=='email'){
		// 		this.form.append('id', this.user.id);
		// 		this.form.append('type',type);
		// 		this.form.append('email',this.user.email);
		// 	}
		// 	if(type=='contact'){
		// 		this.form.append('id', this.user.id);
		// 		this.form.append('type',type);
		// 	this.form.append('contact',this.user.contact);
		// 	}
		// 	if(type=='country'){
		// 		this.form.append('id', this.user.id);
		// 		this.form.append('type',type);
		// 	this.form.append('country',this.user.country);
		// 	}
		// 	if(type=='name'){
		// 		this.form.append('id', this.user.id);
		// 		this.form.append('type',type);
		// 		this.form.append('name',this.user.name);
		// 	}
		// 	if(type=='profile'){
		// 		if(this.user.file == '') {
		// 			this.form.append('id', this.user.id);
		// 			this.form.append('type',type);
        //     	}	
		// 		else{ 
		// 			this.form.append('id', this.user.id);
		// 			this.form.append('type',type);
		// 			this.form.append('file',this.user.file);
		// 		}			
		// 	}
		// 	var config = {
        //         header: { 'Contect-type': 'multipart/form-data'}
        //     }
		// 	axios.post('/profile-update',this.form,config)
        //   	.then((res) => {

		// 	  if (res.data.errorStatus) {
        //         this.$toasted.error(res.data.message, { icon: "not_interested" });
        //       } else{
		// 		  $('#modal').modal('hide');				  				  
		// 		  this.$toasted.success(res.data.message, { icon: "" });
        //         // res.data.user_bet.data = Object.values(res.data.user_bet.data);
		// 		// this.users.append(res.data);
        //       }
        //   	})	
		// // }
		// 	// .catch((e) => {
		// 	// 	console.log(e.res);
        // 	// });		
		// },
		handleUpdate: function (event,type) {
			$('#update-profile-form').validate();
			// if(type=='name'){if(this.user.name == ''){this.$toasted.error('Please Enter Name');}}
			// if(type=='whatsapp_no'){if(this.user.whatsapp_no == ''){this.$toasted.error('Please Enter Number');}}
			// if(type=='contact'){if(this.user.contact == ''){this.$toasted.error('Please Enter Number');}}
			// if(type=='country'){if(this.user.country == ''){this.$toasted.error('Please Enter Country');}}
			// if(type=='email'){if(this.user.email == ''){this.$toasted.error('Please Enter Email');}}
				if($('#update-profile-form').valid()){
				this.form = new FormData();
				// let formData = new FormData(document.getElementById("edit-image-form"));console.log(formData);
				this.user.id = this.users.id;
				if(type=='whatsapp_no'){this.form.append('id', this.user.id);this.form.append('type',type);this.form.append('whatsapp_no',this.user.whatsapp_no);}
				if(type=='email'){
					this.form.append('id', this.user.id);
					this.form.append('type',type);
					this.form.append('email',this.user.email);
				}
				if(type=='contact'){
					this.form.append('id', this.user.id);
					this.form.append('type',type);
				this.form.append('contact',this.user.contact);
				}
				if(type=='country'){
					this.form.append('id', this.user.id);
					this.form.append('type',type);
				this.form.append('country',this.user.country);
				}
				if(type=='name'){
					this.form.append('id', this.user.id);
					this.form.append('type',type);
					this.form.append('name',this.user.name);
				}
				if(type=='profile'){
					if(this.user.file == '') {
						this.form.append('id', this.user.id);
						this.form.append('type',type);
					}	
					else{ 
						this.form.append('id', this.user.id);
						this.form.append('type',type);
						this.form.append('file',this.user.file);
					}			
				}
				axios.post('profile-update', this.form, { headers: {
					'Content-type': 'application/x-www-form-urlencoded',
				},
				}).then((res) => { 
					if(res.data.errorStatus== true){
						this.$toasted.error(res.data.message, {icon : 'not_interested'});
					}
					else{
						this.$toasted.success(res.data.message, {icon: 'check_circle'});
						$('#modal').modal('hide');
					}
				})
			}
			
		},
	}
}
</script>