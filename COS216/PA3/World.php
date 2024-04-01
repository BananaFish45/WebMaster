<!-- Paul Nhlapo u18108378 -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" href="./css/World.css">
	<title>World</title>
</head>

<body class="background" onload="loadDoc()">
	<div class="loader"> <img src="img/load-gif.gif" alt=""> </div>
	<div class="nav">
		<div class="container flex">
			<nav>
				<ul>
					<li><a href="/index.html">HOME</a></li>
					<li><a href="./South_Africa.html">South Africa</a></li>
					<li><a href="./COVID-19.html">Covid-19</a></li>
					<li><a href="./Calendar.html">Calendar</a></li>
					<li><img src="./img/myWebsitelogo/black.png" alt=""></li>
					<li>
						<div class="Search-bar flex">
							<form class="btnSearch" style="margin:auto;max-width:300px">
								<input type="text" placeholder="Search.." data-search>
								<button type="submit"><i class="fa fa-search"></i></button> <strong class="SearchLabel">Search by fields:</strong>
								<div class="items">
									<input type="checkbox" id="Tags" name="Tags" value="Bike">
									<label for="Tags"> Tags</label>
									<input type="checkbox" id="Aurthor" name="Aurthor" value="Aurthor">
									<label for="Aurthor"> Aurthor</label>
									<input type="checkbox" id="Categories" name="Categories" value="Market">
									<label for="Categories"> Categories</label>
								</div>
							</form>
						</div>
					</li>
				</ul>
			</nav>
		</div>
	</div>
	<section id="blog">
		<div class="blog-heading">
			<h1>Trending Hot</h1> <span>The World News</span> </div>
		<!-- <h1 class="animated-headline">TREDING WORLD-WIDE TODAY</h1> -->
		<div id="blog-container"> </div>
	</section>
	<script src="./js/World.js"></script>
</body>

</html>