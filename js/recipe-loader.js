"use strict";

// var link = "http://127.0.0.1:3000/JSON/recipes.JSON";// Change it later
var link = "http://127.0.0.1:8080/College-Project/JSON/recipes.JSON";

function cardResizer (card,height,width,unit) {
  card.css({"height": height+unit, "width": width+unit});
}

function cardLoader(url) {
  $.getJSON(url, recipes => {
    let j = 1;
    for (let i = 0; i < recipes.length; i++,j++) {
      let recipe = recipes[i];
      let cardWrapper = $("<div class='col-md-3 col-sm-4 col-xs-6 card-wrapper'></div>");
      let card = $("<div class='card'></h1>");// handle click properly
      let imageWrapper = $("<div class='img-wrapper'></div>");
      let image = $("<img alt=" + recipe.name + " height='100%' width='100%'>");
      let cardDesc = $("<div class='card-desc'></div>");
      let recipeName = $("<a href='#' class='recipe-name text-capitalize'></a>");
      let author = $("<p class='author-name'>By </p>");
      let bookmark = $("<i class='fa fa-bookmark fa-2x pull-right'></i>");
      let clearfixXS = $("<div class='clearfix visible-xs-block'></div>");
      let clearfixSM = $("<div class='clearfix visible-sm-block'></div>");

      recipe.name = recipe.name || "Recipe_Name";
      recipe.author = recipe.author || "Author";
      image.attr("src",recipe.image_loc || "img/recipe-placeholder.jpg");
      if (recipe.name.length > 26) {
        recipe.name = recipe.name.slice(0,23) + "...";
      }
      recipeName.html(recipe.name);
      author.append(recipe.author);
      imageWrapper.append(image);
      cardDesc.append(recipeName,author,bookmark);
      card.append(imageWrapper,cardDesc);
      // if you want to call cradResizer then call here.
      cardWrapper.append(card);
      $("#cards").append(cardWrapper);
      if (j % 2 === 0) {
        if (j > 0 && i !== recipes.length-1)
          $("#cards").append(clearfixXS); // created clearfix div after every two cards for extra small viewport
      }
      if (j % 3 === 0) {
        if (j > 0 && i !== recipes.length-1)
          $("#cards").append(clearfixSM); // created clearfix div after every three cards for small viewport
      }
    }
  });
}

cardLoader(link);
