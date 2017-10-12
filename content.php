<?php
$image = 'image/';
$like  = '<img class="like" src="image/like.png" />';
$post = 
	[ 'users' => [
		'name_user' => 'Семёнов Олег',
		'avatar' => 'avatar1.jpg',
		'date_post' => 'Два часа назад',
		'image' => 'image1.jpg',
		'counter_like' => '51',
		'hash_tags' => '#Отлично настроение #эмоция #зубы',	

	],
	[ 'users' => [	
		'name_user' => 'Семёнов Олег',
		'avatar' => 'avatar1.jpg',
		'date_post' => 'Два часа назад',
		'image' => 'image1.jpg',
		'counter_like' => '51',
		'hash_tags' => '#Отлично настроение #эмоция #зубы',	

		],
	]
];
?>

<div id="content">

<?php
	foreach($post as $key => $value){

		echo '
		<div class="content_user">
			<div class="content_header">
				<img class="avatar" src="'. $image . $post["users"] .'"/>  		
				'.$post[0]["name_user"].'
				<p>'.$post[0]["date_post"].'</p>
			</div>
			<div>
				<img class="foto" src="image/image1.jpg"/>
			</div>	  		
				<div class="content_footer">
	  			<img class="like" src="image/like.png" /> 22
		  		<p>#Отлично настроение #эмоция #зубы</p>
	  		</div>
	    </div>
		';

	}
?>
	
  <div class="content_user">
		<div class="content_header">
			<img class="avatar" src="image/avatar2.jpeg"/>
	  		Alexey2007
	  		<p>вчера</p>
  		</div>
  		<img class="foto" src="foto1.jpg"/>
  		<div  class="content_footer">
	  		<img class="like" src="image/like.png" /> 22
	  		<p>Отлично настроение #эмоция #жизнь</p>
  		</div>
	</div>
</div>

