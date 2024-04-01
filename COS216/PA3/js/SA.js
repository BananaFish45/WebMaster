// This is for the page loader function
var loader = document.querySelector(".loader");

window.addEventListener("load", vanish);

function vanish() {
	loader.classList.add("disppear");
}

//Now this if for the search bar function

function loadDoc() {
	var req = new XMLHttpRequest();
	req.open(
		"GET",
		"https://api.thenewsapi.com/v1/news/top?api_token=i0AXk9T8gPjeSu1P7WcJBlbDBnb2XRg5wVpNwmTE&locale=za&limit=3",
		true
	);
	// console.log("Here is me ");
	req.onreadystatechange = function() {
		if (req.readyState == 4 && req.status == 200) {
			var res = req.responseText;
			var articles = JSON.parse(res)["data"];
			console.log(articles);
			for (var i = 0; i < articles.length; i++) {
				if (articles[i] != null) {
					var output = document.getElementById("blog-container");
					console.log(output);
					output.innerHTML += getArticleTemplate(articles[i]);
					console.log(output);
				}
			}
		}
	};
	req.send();
}

function getArticleTemplate(article) {
	return `<div class="blog-box">
                
                <div class="blog-img">
                    <img src="${article.image_url}" alt="img/globe-ga36509739_1920.jpg">
                </div>

                <div class="blog-text">
                    <span class="publishedAt">
                       Published at :${article.published_at} |Category : ${article.categories}
                    </span>
                    <h1 class="blog-title">${article.title}</h1>
                    <p class="description">${article.description}</p>
                    <li id="Aurthor" font-type="bold">Author : ${article.source}</li>
                    <a href="${article.url}" target="_blank" rel="noopener noreferrer" class="Read-more">Read More</a>
                </div>
            </div>`;
}