<?php
$image = 'image/';
$like  = '<img class="like" src="image/like.png" />';
$post = 
	[ 
		[
		'name_user' => 'Семёнов Олег',
		'avatar' => 'avatar1.jpg',
		'date_post' => 'Два часа назад',
		'image' => 'image1.jpg',
		'counter_like' => '51',
		'hash_tags' => '#Отлично настроение #эмоция #зубы',	
		],
		[
		'name_user' => 'Александ Семёнов',
		'avatar' => 'avatar2.jpeg',
		'date_post' => '3 часа назад',
		'image' => 'image2.jpg',
		'counter_like' => '11',
		'hash_tags' => '#Отлично настроение #эмоция #зубы',	
		],
];
?>

<div id="content">

	<?php
	for($i=0; $i < count($post); $i++){
	echo '
			<div class="content_user">
				<div class="content_header">
					<img class="avatar" src="'. $image . $post[$i]["avatar"] .'"/>  		
					'.$post[0]["name_user"].'
					<p>'.$post[0]["date_post"].'</p>
				</div>
				<div>
					<img class="foto" src="'. $image . $post[$i]["image"] .'"/> 
				</div>	  		
					<div class="content_footer">
		  			<img class="like" src="image/like.png" /> 22
			  		<p>#Отлично настроение #эмоция #зубы</p>
		  		</div>
		    </div>
			';
	}

	?>
	
 
</div>

