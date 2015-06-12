<?php 
foreach ($article->articleList as $key => $value) {
?>
	<div id="article">
		<h4><?php echo $value['title']; ?></h4>
		<hr>
		<p class="article_description"><?php echo $value['description']; ?></p>
	</div>
<?php 
}
unset($key);
unset($value);
?>
