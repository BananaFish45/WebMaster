// This is for the page loader function
var loader = document.querySelector(".loader")

window.addEventListener("load", vanish);

function vanish() {
  loader.classList.add("disppear");
}

//Now this if for the search bar function


function loadDoc() {
    var req = new XMLHttpRequest();
    req.open(
      "GET",
      "https://newsdata.io/api/1/news?apikey=pub_6037668429635e90131271f129012b6d6aee&language=en&country=us,au,za",
      true
    );
  console.log("Here is me ");
    req.onreadystatechange = function () {
      if (req.readyState == 4 && req.status == 200) {
        var res = req.responseText;
        var articles = JSON.parse(res)["results"]
        console.log(articles);
        for (var i = 0; i < articles.length; i++) {
          if (articles[i] != null) {
            var output = document.getElementById("blog-container");
            output.innerHTML += getArticleTemplate(articles[i]);
          }
        }
      }
    };
    req.send();
  }

function getArticleTemplate(article) {
    return `<div class="blog-box">
                
                <div class="blog-img">
                    <img src="${article.image_url}" alt="img/papers.jpg">
                </div>

                <div class="blog-text">
                    <span class="publishedAt">
                       Published at :${article.pubDate} |Category : ${article.category}
                    </span>
                    <h1 class="blog-title">${article.title}</h1>
                    <p class="description">${article.description}</p>
                    <li id="Aurthor" font-type="bold">Author : ${article.source_id}</li>
                    <a href="${article.link}" target="_blank" rel="noopener noreferrer" class="Read-more">Read More</a>
                </div>
            </div>`
  }
  

