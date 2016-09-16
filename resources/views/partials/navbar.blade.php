<div style="position: relative">
	<nav class="navbar custom" id='sidebar'>
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<center>
					<a class="navbar-brand" href="#">
						<img width="50%" src="{{ URL::asset('assets/img/penguin.png') }}">
					</a>
				</center>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="#" style="text-decoration: none;">List Game</a></li>
				<li><a href="#" style="text-decoration: none;">Tính giá Game</a></li> 
				<li><a href="#" style="text-decoration: none;">Hướng dẫn</a></li> 
			</ul>
			<div class="col-sm-3 col-md-3 navbar-right">
				<form class="navbar-form" role="search">
					<div class="input-group" id="navsearch">
						<input type="text" class="form-control" id="livesearch" placeholder="Search" name="q">
						<div class="input-group-btn">
							<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</nav>
	<div class="search-wrapper" id="result"></div>
</div>