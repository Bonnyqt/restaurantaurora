
<style>
   @import url(http://fonts.googleapis.com/css?family=Indie+Flower);

::before,
::after {
	content: "";
}
.container{
   display: flex;
   align-items: center;
   justify-content: center;
}

ul {
	margin: 0;
	padding: 0;
	list-style: none;
}

a {
	color: #2c3e50;
	text-decoration: none;
}

.btn1 {
	display: inline-block;
	margin-top: 100px; 
	font-size: 1.2em;
	font-weight: 700;
	padding: 0.1em 0.8em;
	text-align: center;
	-webkit-transform: rotate(20deg);
	-moz-transform: rotate(20deg);
	transform: rotate(20deg);
	font-family: "Indie Flower", serif;
	-webkit-transition: color 0.3s;
	-moz-transition: color 0.3s;
	transition: color 0.3s;
}

.btn1:hover {
	color: #16a085;
}


.align {
	clear: both;
	width: 100%;
	text-align: center;
}

.align > li {
	width: 500px;
	min-height: 300px;
	display: inline-block;
	margin: 30px 20px 30px 60px;
	padding: 0 0 0 60px;
	vertical-align: top;
}


.book {
	position: relative;
	width: 160px; 
	height: 220px;
	-webkit-perspective: 1000px;
	-moz-perspective: 1000px;
	perspective: 1000px;
	-webkit-transform-style: preserve-3d;
	-moz-transform-style: preserve-3d;
	transform-style: preserve-3d;
}



.paperback_front {
	background-color: #000;
}

.paperback_front::after{
	background-image: -webkit-linear-gradient( -135deg, rgba(255, 255, 255, 0.45) 0%, transparent 100%);
	background-image: -moz-linear-gradient( -135deg, rgba(255, 255, 255, 0.45) 0%, transparent 100%);
	background-image: linear-gradient( -135deg, rgba(255, 255, 255, 0.45) 0%, transparent 100%);
	position: absolute;
	top: 0;
	left: 0;
	bottom: 0;
	right: 0;
}

.paperback_back {
	background-color: #333;
}


.ruled_paper > li {
	background-color: #fff;
	background-image: -webkit-linear-gradient(rgba(200, 200, 200, 0.1) 0.1em, transparent 0.1em), -webkit-linear-gradient(left, #e1ddd8 0%, #fffbf6 100%);
	background-image: -moz-linear-gradient(rgba(200, 200, 200, 0.1) 0.1em, transparent 0.1em), -moz-linear-gradient(left, #e1ddd8 0%, #fffbf6 100%);
	background-image: -ms-linear-gradient(rgba(200, 200, 200, 0.1) 0.1em, transparent 0.1em), -moz-linear-gradient(left, #e1ddd8 0%, #fffbf6 100%);
	background-image: linear-gradient(rgba(200, 200, 200, 0.1) 0.1em, transparent 0.1em), linear-gradient(left, #e1ddd8 0%, #fffbf6 100%);
	background-size: 100% 0.6em;
	box-shadow: inset 0px -1px 2px rgba(50, 50, 50, 0.1), inset -1px 0px 1px rgba(150, 150, 150, 0.2);
	border-radius: 0px 10px 10px 0px;
}


.paperback_front {
	-webkit-transform: rotateY(-38deg) translateZ(0px);
	-moz-transform: rotateY(-38deg) translateZ(0px);
	transform: rotateY(-38deg) translateZ(0px);
	z-index: 100;
}

.paperback_back {
	-webkit-transform: rotateY(-25deg);
	-moz-transform: rotateY(-25deg);
	transform: rotateY(-25deg);
}

.ruled_paper li:nth-child(1) {
	-webkit-transform: rotateY(-27deg);
	-moz-transform: rotateY(-27deg);
	transform: rotateY(-27deg);
}

.ruled_paper li:nth-child(2) {
	-webkit-transform: rotateY(-29deg);
	-moz-transform: rotateY(-29deg);
	transform: rotateY(-29deg);
}

.ruled_paper li:nth-child(3) {
	-webkit-transform: rotateY(-31deg);
	-moz-transform: rotateY(-31deg);
	transform: rotateY(-31deg);
}

.ruled_paper li:nth-child(4) {
	-webkit-transform: rotateY(-33deg);
	-moz-transform: rotateY(-33deg);
	transform: rotateY(-33deg);
}

.ruled_paper li:nth-child(5) {
	-webkit-transform: rotateY(-35deg);
	-moz-transform: rotateY(-35deg);
	transform: rotateY(-35deg);
}

/*
	4. position, transform y transition
*/

.paperback_front,
.paperback_back,
.paperback_front li,
.paperback_back li {
	border-radius: 2px 8px 8px 2px;
	position: absolute;
	top: 0;
	left: 0px;
	width: 100%;
	height: 100%;
	-webkit-transform-style: preserve-3d;
	-moz-transform-style: preserve-3d;
	transform-style: preserve-3d;
}

.paperback_front,
.paperback_back {
	-webkit-transform-origin: 0% 100%;
	-moz-transform-origin: 0% 100%;
	transform-origin: 0% 100%;
}

.paperback_front{
	-webkit-transition: all 0.5s ease, z-index 0.6s;
	-moz-transition: all 0.5s ease, z-index 0.6s;
	transition: all 0.5s ease, z-index 0.6s;
}

.paperback_front li img,
.paperback_back li img {
	border-radius: 2px 8px 8px 2px;
	position: absolute;
	top: 0;
	left: 0;
}

/* Ruled paper */

.ruled_paper,
.ruled_paper > li {
	position: absolute;
	-webkit-transform-style: preserve-3d;
	-moz-transform-style: preserve-3d;
	transform-style: preserve-3d;
}

.ruled_paper {
	width: 98%;
	height: 98%;
	top: 1%;
	left: 1%;
	z-index: 10;
}

.ruled_paper > li {
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}

.ruled_paper > li {
	-webkit-transform-origin: left center;
	-moz-transform-origin: left center;
	transform-origin: left center;
	-webkit-transition-property: transform;
	-moz-transition-property: transform;
	transition-property: transform;
	-webkit-transition-timing-function: ease;
	-moz-transition-timing-function: ease;
	transition-timing-function: ease;
}

.ruled_paper li:nth-child(1) {
	-webkit-transition-duration: 0.6s;
	-moz-transition-duration: 0.6s;
	transition-duration: 0.6s;
}

.ruled_paper li:nth-child(2) {
	-webkit-transition-duration: 0.6s;
	-moz-transition-duration: 0.6s;
	transition-duration: 0.6s;
}

.ruled_paper li:nth-child(3) {
	-webkit-transition-duration: 0.4s;
	-moz-transition-duration: 0.4s;
	transition-duration: 0.4s;
}

.ruled_paper li:nth-child(4) {
	-webkit-transition-duration: 0.5s;
	-moz-transition-duration: 0.5s;
	transition-duration: 0.5s;
}

.ruled_paper li:nth-child(5) {
	-webkit-transition-duration: 0.5s;
	-moz-transition-duration: 0.5s;
	transition-duration: 0.5s;
}

/*
	5. events
*/

.book:hover > .paperback_front {
	-webkit-transform: rotateY(-125deg) translateZ(0px);
	-moz-transform: rotateY(-125deg) translateZ(0px);
	transform: rotateY(-125deg) translateZ(0px);
	z-index: 0;
}

.book:hover > .ruled_paper li:nth-child(1) {
	-webkit-transform: rotateY(-30deg);
	-moz-transform: rotateY(-30deg);
	transform: rotateY(-30deg);
	-webkit-transition-duration: 1.5s;
	-moz-transition-duration: 1.5s;
	transition-duration: 1.5s;
}

.book:hover > .ruled_paper li:nth-child(2) {
	-webkit-transform: rotateY(-35deg);
	-moz-transform: rotateY(-35deg);
	transform: rotateY(-35deg);
	-webkit-transition-duration: 1.8s;
	-moz-transition-duration: 1.8s;
	transition-duration: 1.8s;
}

.book:hover > .ruled_paper li:nth-child(3) {
	-webkit-transform: rotateY(-110deg);
	-moz-transform: rotateY(-110deg);
	transform: rotateY(-110deg);
	-webkit-transition-duration: 2.2s;
	-moz-transition-duration: 2.2s;
	transition-duration: 2.2s;
}

.book:hover > .ruled_paper li:nth-child(4) {
	-webkit-transform: rotateY(-115deg);
	-moz-transform: rotateY(-115deg);
	transform: rotateY(-115deg);
	-webkit-transition-duration: 1.8s;
	-moz-transition-duration: 1.8s;
	transition-duration: 1.8s;
}

.book:hover > .ruled_paper li:nth-child(5) {
	-webkit-transform: rotateY(-120deg);
	-moz-transform: rotateY(-120deg);
	transform: rotateY(-120deg);
	-webkit-transition-duration: 1.2s;
	-moz-transition-duration: 1.2s;
	transition-duration: 1.2s;
}



.ribbon{
	background: #949393;
	color: #fff;
	display: block;
	font-size: 0.7em;
	position: absolute;
	top: 11px;
	right: 1px;
	width: 40px;
	height: 20px;
	line-height: 20px;
	letter-spacing: 0.15em; 
	text-align: center;
	-webkit-transform: rotateZ(45deg) translateZ(1px);
	-moz-transform: rotateZ(45deg) translateZ(1px);
	transform: rotateZ(45deg) translateZ(1px);
	-webkit-backface-visibility: hidden;
	-moz-backface-visibility: hidden;
	backface-visibility: hidden;
	z-index: 10;
}

.ribbon::before,
.ribbon::after{
	position: absolute;
	top: -20px;
	width: 0;
	height: 0;
	border-bottom: 20px solid #949393;
	border-top: 20px solid transparent;
}

.ribbon::before{
	left: -20px;
	border-left: 20px solid transparent;
}

.ribbon::after{
	right: -20px;
	border-right: 20px solid transparent;
}



/* Media Queries */
@media screen and (max-width: 37.8125em) {
	.align > li {
		width: 100%;
		min-height: 440px;
		height: auto;
		padding: 0;
		margin: 0 0 30px 0;
	}

	.book {
		margin: 0 auto;
	}

	figcaption {
		text-align: center;
		width: 320px;
		top: 250px;
		padding-left: 0;
		left: -80px;
		font-size: 90%;
	}
}
</style>


		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/book2.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="container">	
			<div class="component">
				<ul class="align">
					<li>
						<figure class='book'>

							<!-- Front -->

							<ul class='paperback_front'>
								<li>
									<span class="ribbon">Menu</span>
									<img src="{% static 'images/branding.png'%}" alt="" style="height: 40px;width: auto; margin-left: 10px; margin-top: 90px;" width="100%" height="100%">
								</li>
								<li></li>
							</ul>

							<!-- Pages -->

							<ul class='ruled_paper'>
								<li></li>
								<li>
									<a class="btn1" href="#">VIEW MENU</a>
								</li>
								<li></li>
								<li></li>
								<li></li>
							</ul>

					
							<ul class='paperback_back'>
								<li>
									<img src="img/bg.jpg" alt="" width="100%" height="100%">
								</li>
								<li></li>
							</ul>

						</figure>
					</li>
				</ul>
			</div>
		</div>
	</body>
</html>