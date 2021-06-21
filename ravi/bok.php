<html>
<body>
<div class="col-3">
   <ul class="list-group">
   	<?php 
   	if($result = $conn->query($sql)){
   	foreach ($result as $article): ?>
   		<li><a class='text' href="news.php?id=<?= $article['id'] ?>"><?= $article['Published_date'] ?> <?= $article['Title'] ?> </a></li>
   		<?php endforeach; }?>
   </ul>
   </div>
</body>
</html>

