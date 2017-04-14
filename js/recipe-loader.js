"use strict";

// var link = "https://yb1997.github.io/College-Project/JSON/recipes.JSON";

function cardResizer (card,height,width,unit) {
  card.css({"height": height+unit, "width": width+unit});
}

function cardLoader(url) {
  $.getJSON(url, function (recipes) {
    let j = 1;
    for (let i = 0; i < recipes.length; i++,j++) {
      let recipe = recipes[i];
      let cardWrapper = $("<div class='col-md-3 col-sm-4 col-xs-6 card-wrapper'></div>");
      let card = $("<div class='card'></h1>");// handle click properly
      let imageWrapper = $("<div class='img-wrapper'></div>");
      let image = $("<img src='https://unsplash.it/400/200' alt=" + recipe.name + " height='100%' width='100%'>");
      let cardDesc = $("<div class='card-desc'></div>");
      let recipeName = $("<a href='#' class='recipe-name text-capitalize'></a>");
      let author = $("<p class='author-name'>By </p>");
      let bookmark = $("<i class='fa fa-bookmark fa-2x pull-right'></i>");
      let clearfixXS = $("<div class='clearfix visible-xs-block'></div>");
      let clearfixSM = $("<div class='clearfix visible-sm-block'></div>");

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
