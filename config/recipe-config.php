<?php
  $recipes_queries = "SELECT * FROM `recipe`";
  $recipes_queries_result = mysqli_query($conn,$recipes_queries) or die("query failed !");
  $recipes = mysqli_fetch_all($recipes_queries_result, MYSQLI_ASSOC);
?>
