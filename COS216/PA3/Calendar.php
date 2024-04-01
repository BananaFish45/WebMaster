<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Calendar</title>
    <link rel="stylesheet" href="./css/calendar.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
	<div class="nav">
		<div class="container2 flex">
			<nav>
				<ul>
					<li><a href="/index.html">HOME</a></li>
					<li><a href="./Today.html">PA1</a></li>
					<li><a href="/COS216/PA2/Today.html">PA2</a></li>
					<li><a href="./construction.html">PA3</a></li>
					<li><a href="./construction.html">PA4</a></li>
					<li><a href="./construction.html">PA5</a></li>
					<li><img src="./img/myWebsitelogo/black.png" alt=""></li>
					<li>
						<div class="Search-bar flex">
							<form class="btnSearch" style="margin:auto;max-width:300px">
								<input type="text" placeholder="Search.." name="search2">
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

    <div class="container">
      <div class="calendar">
        <div class="month">
          <i class="fas fa-angle-left prev"></i>
          <div class="date">
            <h1></h1>
            <p></p>
          </div>
          <i class="fas fa-angle-right next"></i>
        </div>
        <div class="weekdays">
          <div>Sun</div>
          <div>Mon</div>
          <div>Tue</div>
          <div>Wed</div>
          <div>Thu</div>
          <div>Fri</div>
          <div>Sat</div>
        </div>
        <div class="days"></div>
      </div>
    </div>

    <script src="js/calendar.js"></script>
  </body>
</html>