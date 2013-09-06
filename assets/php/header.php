
<style>
h1,h2,h3,h4,h5,h6{
	font-family: headlineFontFamily;
	color: purple
}

body{
	background: black url(assets/images/back-image.png) repeat-x fixed;

	margin-top: 30px;
}

p{

	font-family: copyFontFamily;
	font-size: 1.1em;
	line-height:1.4em;
	
	
	padding: 0 2%;

}

hr { 
	border-top: 2px solid #ccc;
}

.container{
	background: beige;
	-webkit-border-radius: 60px 0 0 0;
	-moz-border-radius: 60px 0 0 0;
	border-radius: 60px 0 0 0;

	@media(max-width: 767px){
		-webkit-border-radius: 20px 0 0 0;
		-moz-border-radius: 20px 0 0 0;
		border-radius: 20px 0 0 0;

	}
}
.main{
	background: beige;
}
.navbar{
	margin-bottom: 0;
}

.carousel{
	margin-bottom: 0;
}
.main>article{
	margin: 0 5%;

}
.sidebar>aside{
	padding-right:5%;

	@media(max-width: 767px){
		padding-left:5%;
	}
}

aside h2{
	
	font-size: 1.8em;
	color:pink;
	border-bottom: 1px dotted purple;


	
}

.navbar{
	border-right:none;
	border-left:none;
	border-radius:0;
}

#branding img{
	
	margin:10px 0 5px 25px;
	max-width:450px;
	@media(max-width: 767px){
		margin:10px 0 5px 10px;
		width: 90%;
	}
	
}

.accordion-heading{
	background: #dc5346;
	padding-bottom: 5px;
	margin-bottom: 5px;
	
}
.accordion-heading:hover{

	background: #e37368;
	padding-bottom: 5px;
	margin-bottom: 5px;
	
}
.accordion-heading a{
	color:white;
}
.accordion-heading a:hover{
	text-decoration: none;
	color:black;
}

.nav-tabs li a{
	color: purple;
}
.nav-tabs li.active a{
	color: #dc5346;
	background: white;
	font-weight: bold;
}
.nav-tabs li a:hover{
	background: #dc5346;
	color: white;
}
.nav-tabs li.active{
	color: purple;
}

.grid img{
	padding-bottom: 5px;
	width: 150px;
	height: 160px;
	margin: 0 5px 5px 0;
	cursor: pointer;  
}
.photogrid img{
	width: 96px;
	margin: 0 5px 5px 0;
	cursor: pointer;  
}


footer ul.breadcrumb{
	width: 100%;
	background: #5e5556;
	margin: 0 auto;
	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0;

}

footer li{
	text-shadow: none;

}
footer li a{
	color:white;
}
footer li.active {
	background-color:#5e5556;
	color:black;
	text-color:black;
}
footer li a:hover{
	color:black;
	text-decoration: none
}
.navbar .nav > li.dropdown-menu{
	top:30px;
}

.scrollspy .nav{
	width: 150px;
	background: purple;
	margin-top: 20px;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	border-radius: 10px;

}
.scrollspy .nav li{
	padding: 0;
	margin: 0;
	border-bottom: 1px solid white;
	
}

.scrollspy .nav li a{
	color: white;
	text-indent: none;
	
	
}
.scrollspy .nav li a:hover{
	background: #fe42ff;
	color: black;
	
}
li.active{
	background: #b200b2;
}

li:first-child{
	border-top: none;
}
li:last-child{
	border-bottom: none;

}
.affix {
	top: 20px;
}

.tab-content{
	background: white;
}

.thumbnail img {
	box-shadow: 0 0 25px 0px #737370;
	-webkit-box-shadow: 0 0 25px 0px #737370;
	padding: 4px 6px 5px 5px;
	background-color: #c1c0bb;
	
}

.modal-body-others {
	position: relative;
	max-height: 500px;
	max-height: 700px;
	padding: 15px;
	overflow-y: auto;
}
.carousel-caption h3{
	color: white;

}
.scrollup{
	width:40px;
	height:40px;
	opacity:0.3;
	position:fixed;
	bottom:50px;
	right:100px;
	display:none;
	text-indent:-9999px;
	background: url('assets/images/icon_top.png') no-repeat;
}
.dropdown-submenu{position:relative;}
.dropdown-submenu>.dropdown-menu{top:0;left:100%;margin-top:-6px;margin-left:-1px;-webkit-border-radius:0 6px 6px 6px;-moz-border-radius:0 6px 6px 6px;border-radius:0 6px 6px 6px;}
.dropdown-submenu:hover>.dropdown-menu{display:block;}
.dropdown-submenu>a:after{display:block;content:" ";float:right;width:0;height:0;border-color:transparent;border-style:solid;border-width:5px 0 5px 5px;border-left-color:#cccccc;margin-top:5px;margin-right:-10px;}
.dropdown-submenu:hover>a:after{border-left-color:#ffffff;}
.dropdown-submenu.pull-left{float:none;}.dropdown-submenu.pull-left>.dropdown-menu{left:-100%;margin-left:10px;-webkit-border-radius:6px 0 6px 6px;-moz-border-radius:6px 0 6px 6px;border-radius:6px 0 6px 6px;}
</style>
<div class="content row">
	<div class="col-lg-12">
		<header class="clearfix">
			<section id="branding">
				<a href="index.php">
					<img src="assets/images/logo.png" alt="">
				</a>
			</section>

			<div class="navbar navbar-inverse">
				<ul class="nav navbar-nav">
					<li><a href="index.php">Home</a></li>
					<li><a href="categories.php">Categories</a></li>
					<li  class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Characters <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
							<li ><a tabindex="-1" href="characters.php">All Characters</a></li>
							<li role="presentation" class="divider"></li>
							<!-- <li role="presentation"><a role="menuitem" tabindex="-1" href="villians.php">All Villians</a></li> -->
							<li class="dropdown-submenu">
								<a tabindex="-1" href="villians.php">All Villians</a>
								<ul class="dropdown-menu">
									<li><a tabindex="-1" href="villians.php#bane">Bane</a></li>
									<li><a tabindex="-1" href="villians.php#face">Clay Face</a></li>
									<li><a tabindex="-1" href="villians.php#catwoman">Catwoman</a></li>
									<li><a tabindex="-1" href="villians.php#freeze">Mr. Freeze</a></li>
									<li><a tabindex="-1" href="villians.php#joker">Joker</a></li>
									<li><a tabindex="-1" href="villians.php#2face">Two Face</a></li>
									
								</ul>
							</li>
							<li role="presentation" class="divider"></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="characters.php#batman">Batman</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="characters.php#Batwing">Batwing</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="characters.php#nightwing">Nightwing</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="characters.php#Batgirl">Batgirl</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="characters.php#robin">Red robin</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="characters.php#Robin_V">Robin V</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="characters.php#Alfred">Alfred</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="characters.php#Lucius_Fox">Lucius Fox</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="characters.php#Jim_Gordon">Jim Gordon</a></li>
							
							
						</ul>
					</li>
					<li><a href="others.php">Others</a></li>
					<li><a href="register.php">Register</a></li>
					
				</ul>
			</div>

			<section id="modal" class="modal fade">
				<div class="modal-body">
					<img id="modal-image"src="" alt="modal photo" >
				</div>
			</section>
		</header>
	</div>
</div>