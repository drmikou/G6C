<?php
	$reponse= $db->query('SELECT news_title, news_content FROM news ORDER BY news_id DESC LIMIT 0, 4');
?>