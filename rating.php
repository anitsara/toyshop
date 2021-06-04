<?php

require_once 'db.php';

$query = $db->query("
    SELECT  articles.id, articles.title, AVG(articles_ratings.rating) AS rating 
	FROM articles
	LEFT JOIN articles_ratings
	ON articles.id = articles_ratings.article
	GROUP BY articles.id
");

$articles = [];

while($row = $query->fetch_object()){
	$articles[] = $row;
}
 
?>
<!DOCTYPE html>
<html>
<head>
   <title>Star Rating System</title>
</head>
<body>
   <?php foreach($articles as $article): ?>
      <div class="article">
      <h3><a href="article.php?id=<?php echo $article->id; ?>"><?php echo $article->title; ?></a></h3>
	  <div class="article-rating">Rating: <?php  echo round($article->rating);  ?>/5</div>
	 </div>
	<?php endforeach; ?>
   </body>
</html>