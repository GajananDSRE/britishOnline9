<header class="header-area header-fixed">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<nav class="main-nav">
					<a href="index.html" class="logo">
						<img src="{{ asset('images/logo.png') }}" alt="">
					</a>
					<ul class="nav">
						<li class="scroll-to-section"><a href="/">Get Id'd/My Id's</a></li>
						<li class="scroll-to-section"><a href="{{ route('users.gamezone') }}">Games</a></li>
						<li class="scroll-to-section"><a href="{{ route('users.payment') }}">Payment</a></li>
						<li class="scroll-to-section"><a href="{{ route('users.service') }}">Service</a></li>
						<li class="scroll-to-section"><a href="{{ route('users.offer') }}">offers</a></li>
						<li class="scroll-to-section"><a href="{{ route('users.contact') }}">Contact/Service</a></li> 
						<li class="scroll-to-section">
							<div class="d-flex icons">
								<div class="dropdown"><a href="{{ route('users.profile') }}">
									<i class="fa fa-user dropbtn"style="margin-right:10px;color:black;font-size:20px"></i></a>
								</div>
								<div class="icon">
									<a href="{{ route('users.wallet') }}"> <i class="fa fa-folder-open" style="margin:14px;color:black;font-size:20px"></i></a>
								</div>
							</div>
						</li>
					</ul>        
					<a class='menu-trigger'>
						<span>Menu</span>
					</a>
				</nav>
			</div>
		</div>
	</div>
</header>
