"use strict";
// var link = "../JSON/recipes.JSON";
var link = "http://127.0.0.1:8080/College-Project/JSON/recipes.JSON";

function cardResizer(card) {
  card.css({"height": "300px", "width": "260px"});
}

function cardLoader(url) {
  $.getJSON(url, function (recipes) {
    for (let i = 0; i < recipes.length; i++) {
      let cardWrapper = $("<div class='col-md-3 col-sm-4 col-xs-6 card-wrapper'></div>");
      let card = $("<div class='card'></h1>");
      let imageWrapper = $("<div class='img-wrapper'></div>");
      let image = $("<img src='https://unsplash.it/400/200' alt='recipe'>");
      let cardDesc = $("<div class='card-desc'></div>");
      let recipeName = $("<h3 class='recipe-name text-capitalize'></h3>");
      let author = $("<p class='author-name'>By </p>");
      let bookmark = $("<i class='fa fa-bookmark fa-2x pull-right'></i>");

      let recipe = recipes[i];
      recipeName.html(recipe.name);
      author.append(recipe.author);
      imageWrapper.append(image);
      cardDesc.append(recipeName,author,bookmark);
      card.append(imageWrapper,cardDesc);
      cardWrapper.append(card);
      $("#cards").append(cardWrapper);
    }
    
  });
}

cardLoader(link);