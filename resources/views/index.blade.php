
@extends('layout.layout')
@section('body.content')
<div class="greet">
	<div class="container">
		<center>
			<span style="font-size:30px;
			font-family: 'Sriracha', cursive;">
			<marquee behavior="scroll" direction="left">Chào mừng bạn đến với Cánh cụt SHOP !!! </marquee>
		</span>
	</center>
</div>
</div>
<!-- Carousel -->
<div class="space-3"></div>
<div class="container">
	<div class="row">
		<div class="col-xs-8">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
					<li data-target="#myCarousel" data-slide-to="4"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" id="carousel-innerr" role="listbox">
					<div class="item active img-responsive center-block">
						<img width="750px" height="412px" src="http://cdn.akamai.steamstatic.com/steam/apps/384490/capsule_616x353.jpg?t=1473188447" alt="Chania">
					</div>

					<div class="item img-responsive center-block">
						<img src="assets/img/1.jpg">
					</div>

					<div class="item img-responsive center-block">
						<img src="assets/img/2.jpg">
					</div>

					<div class="item img-responsive center-block">
						<img src="assets/img/3.jpg">
					</div>
					<div class="item img-responsive center-block">
						<img src="assets/img/4.jpg">
					</div>
				</div>

				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
		<div class="col-xs-4">
			<div id="nextCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#nextCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#nextCarousel" data-slide-to="1"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img width="360px" src="http://cdn.akamai.steamstatic.com/steam/spotlights/90ffedcfef801daf927c17fe/spotlight_image_english.jpg?t=1472740561" alt="Chania">
					</div>

					<div class="item">
						<img width="360px" src="http://cdn.akamai.steamstatic.com/steam/spotlights/8a0a0db5e2effbfe57e39570/spotlight_image_english.jpg?t=1472842258" alt="Chania">
					</div>
				</div>

				<!-- Left and right controls -->
				<a class="left carousel-control" href="#nextCarousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#nextCarousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</div>
</div>
<!-- End Carousel -->

<!-- Game Grid -->
<div class="space-2"></div>
<div class="container">
	<center>
		<span class='title'><img class="home_actions_icon" src="http://store.akamai.steamstatic.com/public/images/v6/icon_bucket_new.png"> Game mới ra mắt </span> </center>
		<div class="space-1"></div>
		<div class="newg-section">
			<table class="table tablebordered">
				<tr>
					<thead class="newg-content">
						<th>
							<div class="newg-item">
								<center>
									<img src="http://cdn.akamai.steamstatic.com/steam/apps/504240/header.jpg?t=1472878728">

									<span class="title">Graves Smart</span>
									<span class="price">15$</span>
								</center>
							</div>
						</th>
						<th>
							<div class="newg-item">
								<center>
									<img src="http://cdn.akamai.steamstatic.com/steam/apps/510570/header.jpg?t=1472852126">

									<span class="title">Graves Smart</span>
									<span class="price">15$</span>
								</center>
							</div>
						</th>
						<th>
							<div class="newg-item">
								<center>
									<img src="http://cdn.akamai.steamstatic.com/steam/apps/524340/header.jpg?t=1472813543">

									<span class="title">Graves Smart</span>
									<span class="price">15$</span>
								</center>
							</div>
						</th>
						<th>
							<div class="newg-item">
								<div class="moree" style="margin-left:8%;margin-top:5%">
									<center style="margin-top:10%;"><span>Xem thêm</span></center>
								</div>
							</div>
						</th>
					</thead>
				</tr>
			</table>
		</div>
	</div>

	<!-- List Game -->
	<div class="container">
		<center>
			<span class='title'><img class="home_actions_icon" src="http://store.akamai.steamstatic.com/public/images/v6/icon_bucket_new.png">Game hiện có trong SHOP </span>
		</center>
		<div class="space-1"></div>
		<hr/>
		<div class="row">
			<div class="col-md-8 no-radius" >
				<div class="space-1"></div>
				<ul class="nav nav-tabs no-radius">
					<li class="active no-radius"><a data-toggle="tab" href="#home" style="font-family:'Sriracha';">Bán chạy</a></li>
					<li class="no-radius"><a data-toggle="tab" href="#menu1"style="font-family:'Sriracha';" >Mới ra mắt</a></li>
					<li class="no-radius" ><a data-toggle="tab" href="#menu2" style="font-family:'Sriracha';">Nổi bật</a></li>
				</ul>

				<div class="tab-content">
					<div id="home" class="tab-pane fade in active">	
						<div class="game-float-wrapper">
							<div class="game-item">
								<div>
									<img  src="http://cdn.akamai.steamstatic.com/steam/apps/360170/header.jpg?t=1473343936">
								</div>
								<div class="game-item-name">
									How to Survive 2
								</div>
								<div class="game-item-price">
									<span>8.99$</span>
								</div>
								<div class="game-item-categories">
									<span>Multiplayer</span>
									<span>Action</span>
									<span>Survival</span>
									<span>Zombie</span>
								</div>
							</div>
						</div>
						<div class="game-float-wrapper">
							<div class="game-item">
								<div>
									<img  src="http://cdn.akamai.steamstatic.com/steam/apps/360170/header.jpg?t=1473343936">
								</div>
								<div class="game-item-name">
									How to Survive 2
								</div>
								<div class="game-item-price">
									<span>8.99$</span>
								</div>
								<div class="game-item-categories">
									<span>Multiplayer</span>
									<span>Action</span>
									<span>Survival</span>
									<span>Zombie</span>
								</div>
							</div>
						</div>
						<div class="game-float-wrapper">
							<div class="game-item">
								<div>
									<img  src="http://cdn.akamai.steamstatic.com/steam/apps/360170/header.jpg?t=1473343936">
								</div>
								<div class="game-item-name">
									How to Survive 2
								</div>
								<div class="game-item-price">
									<span>8.99$</span>
								</div>
								<div class="game-item-categories">
									<span>Multiplayer</span>
									<span>Action</span>
									<span>Survival</span>
									<span>Zombie</span>
								</div>
							</div>
						</div>
						<div class="game-float-wrapper">
							<div class="game-item">
								<div>
									<img  src="http://cdn.akamai.steamstatic.com/steam/apps/360170/header.jpg?t=1473343936">
								</div>
								<div class="game-item-name">
									How to Survive 2
								</div>
								<div class="game-item-price">
									<span>8.99$</span>
								</div>
								<div class="game-item-categories">
									<span>Multiplayer</span>
									<span>Action</span>
									<span>Survival</span>
									<span>Zombie</span>
								</div>
							</div>
						</div>
						<div class="game-float-wrapper">
							<div class="game-item">
								<div>
									<img  src="http://cdn.akamai.steamstatic.com/steam/apps/360170/header.jpg?t=1473343936">
								</div>
								<div class="game-item-name">
									How to Survive 2
								</div>
								<div class="game-item-price">
									<span>8.99$</span>
								</div>
								<div class="game-item-categories">
									<span>Multiplayer</span>
									<span>Action</span>
									<span>Survival</span>
									<span>Zombie</span>
								</div>
							</div>
						</div>
						<div class="game-float-wrapper">
							<div class="game-item">
								<div>
									<img  src="http://cdn.akamai.steamstatic.com/steam/apps/360170/header.jpg?t=1473343936">
								</div>
								<div class="game-item-name">
									How to Survive 2
								</div>
								<div class="game-item-price">
									<span>8.99$</span>
								</div>
								<div class="game-item-categories">
									<span>Multiplayer</span>
									<span>Action</span>
									<span>Survival</span>
									<span>Zombie</span>
								</div>
							</div>
						</div>
						<div class="game-float-wrapper">
							<div class="game-item">
								<div>
									<img  src="http://cdn.akamai.steamstatic.com/steam/apps/360170/header.jpg?t=1473343936">
								</div>
								<div class="game-item-name">
									How to Survive 2
								</div>
								<div class="game-item-price">
									<span>8.99$</span>
								</div>
								<div class="game-item-categories">
									<span>Multiplayer</span>
									<span>Action</span>
									<span>Survival</span>
									<span>Zombie</span>
								</div>
							</div>
						</div>
						<div class="game-float-wrapper">
							<div class="game-item">
								<div>
									<img  src="http://cdn.akamai.steamstatic.com/steam/apps/360170/header.jpg?t=1473343936">
								</div>
								<div class="game-item-name">
									How to Survive 2
								</div>
								<div class="game-item-price">
									<span>8.99$</span>
								</div>
								<div class="game-item-categories">
									<span>Multiplayer</span>
									<span>Action</span>
									<span>Survival</span>
									<span>Zombie</span>
								</div>
							</div>
						</div>
						<div class="game-float-wrapper">
							<div class="game-item">
								<div>
									<img  src="http://cdn.akamai.steamstatic.com/steam/apps/360170/header.jpg?t=1473343936">
								</div>
								<div class="game-item-name">
									How to Survive 2
								</div>
								<div class="game-item-price">
									<span>8.99$</span>
								</div>
								<div class="game-item-categories">
									<span>Multiplayer</span>
									<span>Action</span>
									<span>Survival</span>
									<span>Zombie</span>
								</div>
							</div>
						</div>
						<div class="game-float-wrapper">
							<div class="game-item">
								<div>
									<img  src="http://cdn.akamai.steamstatic.com/steam/apps/360170/header.jpg?t=1473343936">
								</div>
								<div class="game-item-name">
									How to Survive 2
								</div>
								<div class="game-item-price">
									<span>8.99$</span>
								</div>
								<div class="game-item-categories">
									<span>Multiplayer</span>
									<span>Action</span>
									<span>Survival</span>
									<span>Zombie</span>
								</div>
							</div>
						</div>
						<div class="game-item-more">
							<button class="btn-primary">More</button>
						</div>

					</div>
					<div id="menu1" class="tab-pane fade">
						<div class="game-float-wrapper">
							<div class="game-item">
								<div>
									<img  src="http://cdn.akamai.steamstatic.com/steam/apps/360170/header.jpg?t=1473343936">
								</div>
								<div class="game-item-name">
									How to Survive 2
								</div>
								<div class="game-item-price">
									<span>8.99$</span>
								</div>
								<div class="game-item-categories">
									<span>Multiplayer</span>
									<span>Action</span>
									<span>Survival</span>
									<span>Zombie</span>
								</div>
							</div>
						</div>
						<div class="game-float-wrapper">
							<div class="game-item">
								<div>
									<img  src="http://cdn.akamai.steamstatic.com/steam/apps/360170/header.jpg?t=1473343936">
								</div>
								<div class="game-item-name">
									How to Survive 2
								</div>
								<div class="game-item-price">
									<span>8.99$</span>
								</div>
								<div class="game-item-categories">
									<span>Multiplayer</span>
									<span>Action</span>
									<span>Survival</span>
									<span>Zombie</span>
								</div>
							</div>
						</div>
						<div class="game-float-wrapper">
							<div class="game-item">
								<div>
									<img  src="http://cdn.akamai.steamstatic.com/steam/apps/360170/header.jpg?t=1473343936">
								</div>
								<div class="game-item-name">
									How to Survive 2
								</div>
								<div class="game-item-price">
									<span>8.99$</span>
								</div>
								<div class="game-item-categories">
									<span>Multiplayer</span>
									<span>Action</span>
									<span>Survival</span>
									<span>Zombie</span>
								</div>
							</div>
						</div>
						<div class="game-float-wrapper">
							<div class="game-item">
								<div>
									<img  src="http://cdn.akamai.steamstatic.com/steam/apps/360170/header.jpg?t=1473343936">
								</div>
								<div class="game-item-name">
									How to Survive 2
								</div>
								<div class="game-item-price">
									<span>8.99$</span>
								</div>
								<div class="game-item-categories">
									<span>Multiplayer</span>
									<span>Action</span>
									<span>Survival</span>
									<span>Zombie</span>
								</div>
							</div>
						</div>
						<div class="game-float-wrapper">
							<div class="game-item">
								<div>
									<img  src="http://cdn.akamai.steamstatic.com/steam/apps/360170/header.jpg?t=1473343936">
								</div>
								<div class="game-item-name">
									How to Survive 2
								</div>
								<div class="game-item-price">
									<span>8.99$</span>
								</div>
								<div class="game-item-categories">
									<span>Multiplayer</span>
									<span>Action</span>
									<span>Survival</span>
									<span>Zombie</span>
								</div>
							</div>
						</div>
						<div class="game-float-wrapper">
							<div class="game-item">
								<div>
									<img  src="http://cdn.akamai.steamstatic.com/steam/apps/360170/header.jpg?t=1473343936">
								</div>
								<div class="game-item-name">
									How to Survive 2
								</div>
								<div class="game-item-price">
									<span>8.99$</span>
								</div>
								<div class="game-item-categories">
									<span>Multiplayer</span>
									<span>Action</span>
									<span>Survival</span>
									<span>Zombie</span>
								</div>
							</div>
						</div>
						<div class="game-float-wrapper">
							<div class="game-item">
								<div>
									<img  src="http://cdn.akamai.steamstatic.com/steam/apps/360170/header.jpg?t=1473343936">
								</div>
								<div class="game-item-name">
									How to Survive 2
								</div>
								<div class="game-item-price">
									<span>8.99$</span>
								</div>
								<div class="game-item-categories">
									<span>Multiplayer</span>
									<span>Action</span>
									<span>Survival</span>
									<span>Zombie</span>
								</div>
							</div>
						</div>
						<div class="game-float-wrapper">
							<div class="game-item">
								<div>
									<img  src="http://cdn.akamai.steamstatic.com/steam/apps/360170/header.jpg?t=1473343936">
								</div>
								<div class="game-item-name">
									How to Survive 2
								</div>
								<div class="game-item-price">
									<span>8.99$</span>
								</div>
								<div class="game-item-categories">
									<span>Multiplayer</span>
									<span>Action</span>
									<span>Survival</span>
									<span>Zombie</span>
								</div>
							</div>
						</div>
						<div class="game-float-wrapper">
							<div class="game-item">
								<div>
									<img  src="http://cdn.akamai.steamstatic.com/steam/apps/360170/header.jpg?t=1473343936">
								</div>
								<div class="game-item-name">
									How to Survive 2
								</div>
								<div class="game-item-price">
									<span>8.99$</span>
								</div>
								<div class="game-item-categories">
									<span>Multiplayer</span>
									<span>Action</span>
									<span>Survival</span>
									<span>Zombie</span>
								</div>
							</div>
						</div>
						<div class="game-float-wrapper">
							<div class="game-item">
								<div>
									<img  src="http://cdn.akamai.steamstatic.com/steam/apps/360170/header.jpg?t=1473343936">
								</div>
								<div class="game-item-name">
									How to Survive 2
								</div>
								<div class="game-item-price">
									<span>8.99$</span>
								</div>
								<div class="game-item-categories">
									<span>Multiplayer</span>
									<span>Action</span>
									<span>Survival</span>
									<span>Zombie</span>
								</div>
							</div>
						</div>
						<div class="game-item-more">
							<button class="btn-primary">More</button>
						</div>
					</div>
					<div id="menu2" class="tab-pane fade">
						<div class="game-float-wrapper">
							<div class="game-item">
								<div>
									<img  src="http://cdn.akamai.steamstatic.com/steam/apps/360170/header.jpg?t=1473343936">
								</div>
								<div class="game-item-name">
									How to Survive 2
								</div>
								<div class="game-item-price">
									<span>8.99$</span>
								</div>
								<div class="game-item-categories">
									<span>Multiplayer</span>
									<span>Action</span>
									<span>Survival</span>
									<span>Zombie</span>
								</div>
							</div>
						</div>
						<div class="game-float-wrapper">
							<div class="game-item">
								<div>
									<img  src="http://cdn.akamai.steamstatic.com/steam/apps/360170/header.jpg?t=1473343936">
								</div>
								<div class="game-item-name">
									How to Survive 2
								</div>
								<div class="game-item-price">
									<span>8.99$</span>
								</div>
								<div class="game-item-categories">
									<span>Multiplayer</span>
									<span>Action</span>
									<span>Survival</span>
									<span>Zombie</span>
								</div>
							</div>
						</div>
						<div class="game-float-wrapper">
							<div class="game-item">
								<div>
									<img  src="http://cdn.akamai.steamstatic.com/steam/apps/360170/header.jpg?t=1473343936">
								</div>
								<div class="game-item-name">
									How to Survive 2
								</div>
								<div class="game-item-price">
									<span>8.99$</span>
								</div>
								<div class="game-item-categories">
									<span>Multiplayer</span>
									<span>Action</span>
									<span>Survival</span>
									<span>Zombie</span>
								</div>
							</div>
						</div>
						<div class="game-float-wrapper">
							<div class="game-item">
								<div>
									<img  src="http://cdn.akamai.steamstatic.com/steam/apps/360170/header.jpg?t=1473343936">
								</div>
								<div class="game-item-name">
									How to Survive 2
								</div>
								<div class="game-item-price">
									<span>8.99$</span>
								</div>
								<div class="game-item-categories">
									<span>Multiplayer</span>
									<span>Action</span>
									<span>Survival</span>
									<span>Zombie</span>
								</div>
							</div>
						</div>
						<div class="game-float-wrapper">
							<div class="game-item">
								<div>
									<img  src="http://cdn.akamai.steamstatic.com/steam/apps/360170/header.jpg?t=1473343936">
								</div>
								<div class="game-item-name">
									How to Survive 2
								</div>
								<div class="game-item-price">
									<span>8.99$</span>
								</div>
								<div class="game-item-categories">
									<span>Multiplayer</span>
									<span>Action</span>
									<span>Survival</span>
									<span>Zombie</span>
								</div>
							</div>
						</div>
						<div class="game-float-wrapper">
							<div class="game-item">
								<div>
									<img  src="http://cdn.akamai.steamstatic.com/steam/apps/360170/header.jpg?t=1473343936">
								</div>
								<div class="game-item-name">
									How to Survive 2
								</div>
								<div class="game-item-price">
									<span>8.99$</span>
								</div>
								<div class="game-item-categories">
									<span>Multiplayer</span>
									<span>Action</span>
									<span>Survival</span>
									<span>Zombie</span>
								</div>
							</div>
						</div>
						<div class="game-float-wrapper">
							<div class="game-item">
								<div>
									<img  src="http://cdn.akamai.steamstatic.com/steam/apps/360170/header.jpg?t=1473343936">
								</div>
								<div class="game-item-name">
									How to Survive 2
								</div>
								<div class="game-item-price">
									<span>8.99$</span>
								</div>
								<div class="game-item-categories">
									<span>Multiplayer</span>
									<span>Action</span>
									<span>Survival</span>
									<span>Zombie</span>
								</div>
							</div>
						</div>
						<div class="game-float-wrapper">
							<div class="game-item">
								<div>
									<img  src="http://cdn.akamai.steamstatic.com/steam/apps/360170/header.jpg?t=1473343936">
								</div>
								<div class="game-item-name">
									How to Survive 2
								</div>
								<div class="game-item-price">
									<span>8.99$</span>
								</div>
								<div class="game-item-categories">
									<span>Multiplayer</span>
									<span>Action</span>
									<span>Survival</span>
									<span>Zombie</span>
								</div>
							</div>
						</div>
						<div class="game-float-wrapper">
							<div class="game-item">
								<div>
									<img  src="http://cdn.akamai.steamstatic.com/steam/apps/360170/header.jpg?t=1473343936">
								</div>
								<div class="game-item-name">
									How to Survive 2
								</div>
								<div class="game-item-price">
									<span>8.99$</span>
								</div>
								<div class="game-item-categories">
									<span>Multiplayer</span>
									<span>Action</span>
									<span>Survival</span>
									<span>Zombie</span>
								</div>
							</div>
						</div>
						<div class="game-float-wrapper">
							<div class="game-item">
								<div>
									<img  src="http://cdn.akamai.steamstatic.com/steam/apps/360170/header.jpg?t=1473343936">
								</div>
								<div class="game-item-name">
									How to Survive 2
								</div>
								<div class="game-item-price">
									<span>8.99$</span>
								</div>
								<div class="game-item-categories">
									<span>Multiplayer</span>
									<span>Action</span>
									<span>Survival</span>
									<span>Zombie</span>
								</div>
							</div>
						</div>
						<div class="game-item-more">
							<button class="btn-primary">More</button>
						</div>


					</div>
				</div>
			</div>
			<div class="col-md-4">
				<center>
					<span class="comming-title">Sắp ra mắt</span>
				</center>
				<hr/>
				<div class="game-item-preorder">
					<div id="miniCarousel" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#miniCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#miniCarousel" data-slide-to="1"></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner" id="carousel-innerr" role="listbox">
							<div class="item active img-responsive center-block">
								<img src="assets/img/1.jpg" alt="Chania">
							</div>

							<div class="item img-responsive center-block">
								<img src="assets/img/1.jpg">
							</div>
						</div>

						<!-- Left and right controls -->
						<a class="left carousel-control" href="#miniCarousel" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#miniCarousel" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
					<div>
						<button class="btn btn-primary button-pre"> Xem thêm </button>
					</div>
				</div>
				<div class="space-1"></div>
				<center>
					<span class="title"> Game dưới 100k </span>
				</center>
				<hr/>
				<div class="low-price-games">
					<div class="low-price-item">
						<img src="http://cdn.akamai.steamstatic.com/steam/apps/49520/header.jpg?t=1450123296">
					</div>
					<div class="low-price-item">
						<img src="http://cdn.akamai.steamstatic.com/steam/apps/218550/header.jpg?t=1465409668">
					</div>
					<div class="low-price-item">
						<img src="http://cdn.akamai.steamstatic.com/steam/apps/391540/header.jpg?t=1468759045">
					</div>
					<div class="low-price-item">
						<img src="http://cdn.akamai.steamstatic.com/steam/apps/242640/header.jpg?t=1447358083">
					</div>
					<div class="low-price-item">
						<img src="http://cdn.akamai.steamstatic.com/steam/apps/391540/header.jpg?t=1468759045">
					</div>
					<div class="low-price-item">
						<img src="http://cdn.akamai.steamstatic.com/steam/apps/242640/header.jpg?t=1447358083">
					</div>
				</div>
			</div>
		</div>
	</div>
	@stop