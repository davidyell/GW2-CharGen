<?php

$genders = array(
	'Female'=>array(
		'icon'=>'images/1343398117_Female.png'
	),
	'Male'=>array(
		'icon'=>'images/1343398114_Male.png'
	)
);

$races = array(
	'Norn'=>array(
		'icon'=>'http://wiki.guildwars2.com/images/c/c9/Norn_tango_icon_48px.png'
	),
	'Sylvari'=>array(
		'icon'=>'http://wiki.guildwars2.com/images/5/5c/Sylvari_tango_icon_48px.png'
	),
	'Asura'=>array(
		'icon'=>'http://wiki.guildwars2.com/images/d/d7/Asura_tango_icon_48px.png'
	),
	'Charr'=>array(
		'icon'=>'http://wiki.guildwars2.com/images/f/f5/Charr_tango_icon_48px.png'
	),
	'Human'=>array(
		'icon'=>'http://wiki.guildwars2.com/images/a/a4/Human_tango_icon_48px.png'
	)
);

$professions = array(
	'Warrior'=>array(
		'icon'=>'http://wiki.guildwars2.com/images/2/28/Warrior_tango_icon_48px.png'
	),
	'Guardian'=>array(
		'icon'=>'http://wiki.guildwars2.com/images/5/53/Guardian_tango_icon_48px.png'
	),
	'Ranger'=>array(
		'icon'=>'http://wiki.guildwars2.com/images/b/b5/Ranger_tango_icon_48px.png'
	),
	'Engineer'=>array(
		'icon'=>'http://wiki.guildwars2.com/images/d/dd/Engineer_tango_icon_48px.png'
	),
	'Thief'=>array(
		'icon'=>'http://wiki.guildwars2.com/images/c/cd/Thief_tango_icon_48px.png'
	),
	'Elementalist'=>array(
		'icon'=>'http://wiki.guildwars2.com/images/5/55/Elementalist_tango_icon_48px.png'
	),
	'Necromancer'=>array(
		'icon'=>'http://wiki.guildwars2.com/images/e/ea/Necromancer_tango_icon_48px.png'
	),
	'Mesmer'=>array(
		'icon'=>'http://wiki.guildwars2.com/images/3/38/Mesmer_tango_icon_48px.png'
	)
);

$personalities = array(
	'Charm'=>array(
		'icon'=>'http://wiki.guildwars2.com/images/thumb/3/37/Biography_Charm.png/50px-Biography_Charm.png'
	),
	'Dignity'=>array(
		'icon'=>'http://wiki.guildwars2.com/images/thumb/5/5f/Biography_Dignity.png/50px-Biography_Dignity.png'
	),
	'Ferocity'=>array(
		'icon'=>'http://wiki.guildwars2.com/images/thumb/9/92/Biography_Ferocity.png/50px-Biography_Ferocity.png'
	)
);
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Guild Wars 2 random character picker</title>
  <meta name="description" content="Guild Wars 2 random character picker">
  <meta name="author" content="[DiY]Neon">
  <link href='http://fonts.googleapis.com/css?family=Quando' rel='stylesheet' type='text/css'>
  <style type='text/css'>
  	body{
  		background-color: #333;
  	}
  	#wrapper{
  		width: 930px;
  		margin: 0 auto;
  		padding: 15px;
  		background-color: #fff;
  		border-radius: 5px;
  		border: 1px solid #ccc;
  	}
  	h1.title{
  		font-family: 'Quando', serif;
  		font-size: 36px;
  		text-align: center;
  		margin: 0 0 5px 0;
  	}
  	h2.subtitle{
  		font-family: Helvetica, Arial, sans-serif;
  		font-size: 18px;
  		font-weight: bold;
  		color: #000;
  		text-align: center;	
  		margin: 0 0 10px 0;
  	}
  	body,h1,h2,h3,p,a{
  		font: 14px Helvetica, Arial, sans-serif;
  		color: #333;
  	}
  	#gen-btn{
  		width: 300px;
  		height: 120px;
  		margin: 30px auto 15px;
  		padding-top: 30px;
  		display: block;
  		border-radius: 5px;
  		border: 1px solid #5A8908;
  		font-size: 40px;
  		color: #fff;
  		text-shadow: 0 1px 0 #333;
  		text-decoration: none;
  		text-align: center;

		background: #9dd53a;
		background: -moz-linear-gradient(top,  #9dd53a 0%, #a1d54f 50%, #80c217 51%, #7cbc0a 100%);
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#9dd53a), color-stop(50%,#a1d54f), color-stop(51%,#80c217), color-stop(100%,#7cbc0a));
		background: -webkit-linear-gradient(top,  #9dd53a 0%,#a1d54f 50%,#80c217 51%,#7cbc0a 100%);
		background: -o-linear-gradient(top,  #9dd53a 0%,#a1d54f 50%,#80c217 51%,#7cbc0a 100%);
		background: -ms-linear-gradient(top,  #9dd53a 0%,#a1d54f 50%,#80c217 51%,#7cbc0a 100%);
		background: linear-gradient(to bottom,  #9dd53a 0%,#a1d54f 50%,#80c217 51%,#7cbc0a 100%);
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#9dd53a', endColorstr='#7cbc0a',GradientType=0 );

  	}
  	footer{
  		text-align: center;
  	}
  	div.well{
  		width: 300px;
  		padding: 20px;
  		margin: 30px auto 0;
  		background-color: #efefef;
  		border-radius: 5px;
  		box-shadow: 0 -1px 2px #333;
  	}
  	div.well p{
  		margin: 10px auto;
  		text-align: center;
  		vertical-align: top;
  		font: 24px 'Quando', serif;
  	}
  	div.well p:first-child{
  		margin-top: 0;
  	}
  	div.well p:last-child{
  		margin-bottom: 0;
  	}
  	div.well p img{
  		margin-right: 10px;
  	}
  </style>
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body>
	<div id="wrapper">
		<h1 class="title">Guild Wars 2 random character picker</h1>
		<h2 class="subtitle">Not sure what type of character to create or just want some ideas? Hit the button!</h2>

		<?php
		if(isset($_GET['go'])){
			?>
			<div class="well">
				<?php

				$gender = array_rand($genders,1);
				$race = array_rand($races,1);
				$profession = array_rand($professions,1);
				$personality = array_rand($personalities, 1);

				echo "<p><img style='width:48px;height:48px' src='".$genders[$gender]['icon']."' alt='".$genders[$gender]."'> ".$gender."</p>";
				echo "<p><img src='".$races[$race]['icon']."' alt='".$races[$race]."'> ".$race."</p>";
				echo "<p><img src='".$professions[$profession]['icon']."' alt='".$professions[$profession]."'> ".$profession."</p>";
				// echo "<hr>";
				// echo "<p><img src='".$personalities[$personality]['icon']."' alt='".$personalities[$personality]."'> ".$personality."</p>";
				// echo "<hr>";
				?>
			</div>
			<?php
			?><a href="?go" title="Generate character" id="gen-btn">Again,<br>again!</a><?php
		}else{
			?><a href="?go" title="Generate character" id="gen-btn">Make me a character</a><?php
		}
		?>

		<footer>
			<p>Created by the DiY Guild.<br><a href=".." title="DiY Guild">www.diyguild.org</a></p>
		</footer>
	</div>
</body>
</html>

