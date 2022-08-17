<?php
@include 'con.php';
?>
<!DOCTYPE HTML>
<!--
	Striped by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>GEN Z</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link  rel="shortcut icon"   href="images/logo.jpg" />
		<link rel="stylesheet" href="assets/css/main.css" />
</head>
<style>
	/* Absolute Center Spinner */
.loading {
  position: fixed;
  z-index: 999;
  height: 2em;
  width: 2em;
  overflow: visible;
  margin: auto;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;}

/* Transparent Overlay */
.loading:before {
  content: '';
  display: block;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;

  background-color: rgba(0,0,0,0.8);
}

/* :not(:required) hides these rules from IE9 and below */
.loading:not(:required) {
  /* hide "loading..." text */
  font: 0/0 a;
  color: red;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}

.loading:not(:required):after {
  content: '';
  display: block;
  font-size: 25px;
  width: 1em;
  height: 1em;
  margin-top: -0.5em;
  -webkit-animation: spinner 5s infinite linear;
  border-radius: 0.5em;
  -webkit-box-shadow: rgba(0, 0, 0, 0.75) 1.5em 0 0 0, rgba(0, 0, 0, 0.75) 1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) 0 1.5em 0 0, rgba(0, 0, 0, 0.75) -1.1em 1.1em 0 0, rgba(0, 0, 0, 0.5) -1.5em 0 0 0, rgba(0, 0, 0, 0.5) -1.1em -1.1em 0 0, rgba(0, 0, 0, 0.75) 0 -1.5em 0 0, rgba(0, 0, 0, 0.75) 1.1em -1.1em 0 0;
  box-shadow: white 1.5em 0 0 0, white 1.1em 1.1em 0 0, white 0 1.5em 0 0, white -1.1em 1.1em 0 0, white -1.5em 0 0 0, white -1.1em -1.1em 0 0, white 0 -1.5em 0 0, white 1.1em -1.1em 0 0;
}

/* Animation */

@-webkit-keyframes spinner {
  0% {

    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
</style>
	<body class="is-preload">
	<div class="loading" id="preloader">&#8230;</div>

		<!-- Content -->
			<div id="content">
				<div class="inner">
					<!-- Post -->
					<span class="muu"><?php @include 'post1.php';?>0</span>
					
					<!-- Pagination -->
						<div class="pagination">
							<!--<a href="#" class="button previous">Previous Page</a>-->
							<div class="pages">
							    <a  class="active">1</a>
								<a>2</a>
								<a id="myDIV"  onclick="myDIV()">3</a>
								<a>4</a>
								<span>&hellip;</span>
								<a>20</a>
							</div>
							<a href="" class="button next">Дараагийн Хуудас</a>
						</div>

				</div>
			</div>
			<script>

function myDIV() {
   var element = document.getElementById("myDIV");
   element.classList.toggle("active");
}
</script>  <script>
						const btn = document.querySelector(".dar");
						let muu = document.querySelector(".muu"),
						to = document.querySelector(".to");

						let darsan = false;

						btn.addEventListener("click", () => {
						if (!darsan) {
							darsan = true;
							muu.innerHTML = `<?php @include 'post0.php';?>`;
							to.textContent++;
						} else {
							darsan = false;
							muu.innerHTML = `<?php @include 'post1.php';?>`;
							to.textContent--;
						}
						});

					</script>

		<!-- Sidebar -->
			<div id="sidebar">

				<!-- Logo -->
					<h1 id="logo"><a href="#">GEN Z</a></h1>

				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li class="current"><a href="#">Шинэ нийтлэл</a></li>
							<li><a href="#"><strong>Gen Z</strong>  1996-2010</a></li>
							<li><a href="#"><strong>Gen Y</strong>  1981-1995</a></li>
							<li><a href="#"><strong>Gen X</strong>  1965-1980</a></li>
						</ul>
					</nav>

				<!-- Search -->
					<section class="box search">
						<form method="post" action="#">
							<input type="text" class="text" name="search" placeholder="(Гарчиг)аар нь хайх..." />
						</form>
					</section>

				<!-- Text -->
					<section class="box text-style1">
						<div class="inner">
							<p>
								<strong>Эх сурвалж:</strong></br>Бид мэдээ мэдээллээ авсан эх сурвалжаа эндээ хавсаргаад явдаг байгаа.  <a href="https://unread.today/c/2225">UNREAD</a> 
             </br>	<strong>Зураг:</strong> <a href="https://housebuyers4u.co.uk/blog/move-over-millennials-gen-z-is-the-new-focus-for-the-property-market/">Housebuyers4u</a>
							</p>
						</div>
					</section>

				<!-- Recent Posts -->
					<section class="box recent-posts">
						<header>
							<h2>Сүүлийн Нийтлэлүүд</h2>
						</header>
						<ul>
							<li><a href="#">GenZ, Millennials, Boomers</a></li>
							<li><a href="#">ҮЕҮДИЙГ ТАЙЛБАРЛАХ НЬ</a></li>
							<li><a href="#">GenZ Сонгуульд нөлөөлөх сонголт</a></li>
							<li><a href="#">Улс төрд бидний оролцоо</a></li>
							<li><a href="#">Сонирхолтой  мэдээ</a></li>
						</ul>
					</section>

				<!-- Recent Comments -->
					<section class="box recent-comments">
						<header>
							<h2>Хүмүүсийн сэтгэгдэл</h2>
						</header>
						<ul>
							<li>case 1 <a href="#">сэтгэгдэл</a></li>
							<li>case 1 <a href="#">сэтгэгдэл</a></li>
							<li>case 1 <a href="#">сэтгэгдэл</a></li>
						</ul>
					</section>

				<!-- Calendar -->
					<section class="box calendar">
						<div class="inner">
							<table>
								<caption>July 2014</caption>
								<thead>
									<tr>
										<th scope="col" title="Monday">M</th>
										<th scope="col" title="Tuesday">T</th>
										<th scope="col" title="Wednesday">W</th>
										<th scope="col" title="Thursday">T</th>
										<th scope="col" title="Friday">F</th>
										<th scope="col" title="Saturday">S</th>
										<th scope="col" title="Sunday">S</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td colspan="4" class="pad"><span>&nbsp;</span></td>
										<td><span>1</span></td>
										<td><span>2</span></td>
										<td><span>3</span></td>
									</tr>
									<tr>
										<td><span>4</span></td>
										<td><span>5</span></td>
										<td><a href="#">6</a></td>
										<td><span>7</span></td>
										<td><span>8</span></td>
										<td><span>9</span></td>
										<td><a href="#">10</a></td>
									</tr>
									<tr>
										<td><span>11</span></td>
										<td><span>12</span></td>
										<td><span>13</span></td>
										<td class="today"><a href="#">14</a></td>
										<td><span>15</span></td>
										<td><span>16</span></td>
										<td><span>17</span></td>
									</tr>
									<tr>
										<td><span>18</span></td>
										<td><span>19</span></td>
										<td><span>20</span></td>
										<td><span>21</span></td>
										<td><span>22</span></td>
										<td><a href="#">23</a></td>
										<td><span>24</span></td>
									</tr>
									<tr>
										<td><a href="#">25</a></td>
										<td><span>26</span></td>
										<td><span>27</span></td>
										<td><span>28</span></td>
										<td class="pad" colspan="3"><span>&nbsp;</span></td>
									</tr>
								</tbody>
							</table>
						</div>
					</section>

				<!-- Copyright -->
					<ul id="copyright">
						<li>&copy; Untitled.</li><li>Design: <a href="#">HTML5 UP</a></li>
					</ul>

			</div>
			<script>
				var loader = document.getElementById("preloader");

				window.addEventListener("load", function(){
					loader.style.display = "none";
				})

			</script>

		<!-- Scripts -->
		<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>



<!-- oN sar -->
<script>
	// var months = ['Нэгдүгээр сар', 'Хоёрдугаар сар', 'Гуравдугаар сар', 'Дөрөвдүгээр сар', 'Тавдугаар сар', 'Зургадугаар сар', 'Долоодугаар сар', '	Наймдугаар сар', '	Есдүгээр сар', 'Аравдугаар сар', 'Арван нэгдүгээр сар', '	Арван хоёрдугаар сар'];

var months2 = ['Нэгдүгээр сар','Хоёрдугаар сар', 'Гуравдугаар сар', 'Дөрөвдүгээр сар', 'Тавдугаар сар', 'Зургадугаар сар', 'Долоодугаар ', '8,', '	Есдүгээр сар', 'Аравдугаар сар', 'Арван нэгдүгээр сар', '	Арван хоёрдугаар сар'];
// var weekDay = ['Даваа', 'Мягмар','Лхагва', 'Пүрэв', 'Баасан', 'Бямба', 'Ням'];

function currentDate(div) {
  var date = new Date();
  var currentDate =months2[date.getMonth()] + ' ' + date.getDate()+' '+(date.getFullYear()<10?'0':'') ;

  $(div).html(currentDate);
}

// set currentDate() update period in 1000 milliseconds(1 time per second)
setInterval("currentDate('.today')",0);


// put your id or class as function argument
currentDate('.today');
</script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="assets/js/like.js"></script>

	</body>
</html>