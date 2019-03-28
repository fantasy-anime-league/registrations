<?php
header("Cache-Control: no-cache, must-revalidate"); //HTTP 1.1
header("Pragma: no-cache"); //HTTP 1.0
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
session_start();
?>
<!DOCTYPE html>
<html lang='en'>
<head>
<title>FAL Registration</title>
<meta charset='utf-8'>
<link rel="shortcut icon" type="image/x-icon" href="favicon.png">
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script type='text/javascript' src='reg.js'></script>
</head>
<body style='margin-bottom:150px'>
<h1 class='text-center' id='title'>FAL Registration</h1>
<br>
<div id='main' class='container-fluid'>
	
<div class='col-md-offset-3 col-md-6 col-lg-offset-4 col-lg-4 col-xl-offset-5 col-xl-2'>
<label>Your MAL Username:</label>
<input type='text' class='form-control' id='username_input' placeholder='Username'><br>
<button class='btn btn-info btn-block' id='code_btn'>Continue</button><br>
<br>
<div id='selections_div' style='display:none'>
<h3>Select your team:</h3>
<br>
<label>Active Show #1</label><br />
<select class='form-control' id="0">
<option value='39337'>Araiya-san!: Ore to Aitsu ga Onnayu de!?</option>
<option value='38860'>Bakumatsu: Crisis</option>
<option value='38186'>Bokutachi wa Benkyou ga Dekinai</option>
<option value='37435'>Carole & Tuesday</option>
<option value='38226'>Chou Kadou Girl ⅙: Amazing Stranger</option>
<option value='38731'>Diamond no Ace: Act II</option>
<option value='39063'>Fairy Gone</option>
<option value='37806'>Gunjou no Magmel</option>
<option value='38091'>Hachigatsu no Cinderella Nine</option>
<option value='38268'>Hangyakusei Million Arthur 2nd Season</option>
<option value='37614'>Hitoribocchi no 笳銀雷 Seikatsu</option>
<option value='38295'>Joshikausei</option>
<option value='38161'>Kabukichou Sherlock</option>
<option value='36407'>Kenja no Mago</option>
<option value='38000'>Kimetsu no Yaiba</option>
<option value='38080'>Kono Oto Tomare!</option>
<option value='34620'>Kono Yo no Hate de Koi wo Utau Shoujo YU-NO</option>
<option value='37964'>Mayonaka no Occult Koumuin</option>
<option value='38778'>Midara na Ao-chan wa Benkyou ga Dekinai</option>
<option value='38098'>Mix: Meisei Story</option>
<option value='38150'>Namu Amida Butsu!: Rendai Utena</option>
<option value='38397'>Nande Koko ni Sensei ga!?</option>
<option value='38814'>Nobunaga-sensei no Osanazuma</option>
<option value='38707'>RobiHachi</option>
<option value='37426'>Sarazanmai</option>
<option value='38787'>Senryuu Shoujo</option>
<option value='38759'>Sewayaki Kitsune no Senko-san</option>
<option value='37952'>Shoumetsu Toshi</option>
<option value='38004'>World Witches Series: 501-butai Hasshin Shimasu!</option>
<option value='37940'>Yatogame-chan Kansatsu Nikki</option>
</select><br />
<label>Active Show #2</label><br />
<select class='form-control' id="1">
<option value='39337'>Araiya-san!: Ore to Aitsu ga Onnayu de!?</option>
<option value='38860'>Bakumatsu: Crisis</option>
<option value='38186'>Bokutachi wa Benkyou ga Dekinai</option>
<option value='37435'>Carole & Tuesday</option>
<option value='38226'>Chou Kadou Girl ⅙: Amazing Stranger</option>
<option value='38731'>Diamond no Ace: Act II</option>
<option value='39063'>Fairy Gone</option>
<option value='37806'>Gunjou no Magmel</option>
<option value='38091'>Hachigatsu no Cinderella Nine</option>
<option value='38268'>Hangyakusei Million Arthur 2nd Season</option>
<option value='37614'>Hitoribocchi no 笳銀雷 Seikatsu</option>
<option value='38295'>Joshikausei</option>
<option value='38161'>Kabukichou Sherlock</option>
<option value='36407'>Kenja no Mago</option>
<option value='38000'>Kimetsu no Yaiba</option>
<option value='38080'>Kono Oto Tomare!</option>
<option value='34620'>Kono Yo no Hate de Koi wo Utau Shoujo YU-NO</option>
<option value='37964'>Mayonaka no Occult Koumuin</option>
<option value='38778'>Midara na Ao-chan wa Benkyou ga Dekinai</option>
<option value='38098'>Mix: Meisei Story</option>
<option value='38150'>Namu Amida Butsu!: Rendai Utena</option>
<option value='38397'>Nande Koko ni Sensei ga!?</option>
<option value='38814'>Nobunaga-sensei no Osanazuma</option>
<option value='38707'>RobiHachi</option>
<option value='37426'>Sarazanmai</option>
<option value='38787'>Senryuu Shoujo</option>
<option value='38759'>Sewayaki Kitsune no Senko-san</option>
<option value='37952'>Shoumetsu Toshi</option>
<option value='38004'>World Witches Series: 501-butai Hasshin Shimasu!</option>
<option value='37940'>Yatogame-chan Kansatsu Nikki</option>
</select><br />
<label>Active Show #3</label><br />
<select class='form-control' id="2">
<option value='39337'>Araiya-san!: Ore to Aitsu ga Onnayu de!?</option>
<option value='38860'>Bakumatsu: Crisis</option>
<option value='38186'>Bokutachi wa Benkyou ga Dekinai</option>
<option value='37435'>Carole & Tuesday</option>
<option value='38226'>Chou Kadou Girl ⅙: Amazing Stranger</option>
<option value='38731'>Diamond no Ace: Act II</option>
<option value='39063'>Fairy Gone</option>
<option value='37806'>Gunjou no Magmel</option>
<option value='38091'>Hachigatsu no Cinderella Nine</option>
<option value='38268'>Hangyakusei Million Arthur 2nd Season</option>
<option value='37614'>Hitoribocchi no 笳銀雷 Seikatsu</option>
<option value='38295'>Joshikausei</option>
<option value='38161'>Kabukichou Sherlock</option>
<option value='36407'>Kenja no Mago</option>
<option value='38000'>Kimetsu no Yaiba</option>
<option value='38080'>Kono Oto Tomare!</option>
<option value='34620'>Kono Yo no Hate de Koi wo Utau Shoujo YU-NO</option>
<option value='37964'>Mayonaka no Occult Koumuin</option>
<option value='38778'>Midara na Ao-chan wa Benkyou ga Dekinai</option>
<option value='38098'>Mix: Meisei Story</option>
<option value='38150'>Namu Amida Butsu!: Rendai Utena</option>
<option value='38397'>Nande Koko ni Sensei ga!?</option>
<option value='38814'>Nobunaga-sensei no Osanazuma</option>
<option value='38707'>RobiHachi</option>
<option value='37426'>Sarazanmai</option>
<option value='38787'>Senryuu Shoujo</option>
<option value='38759'>Sewayaki Kitsune no Senko-san</option>
<option value='37952'>Shoumetsu Toshi</option>
<option value='38004'>World Witches Series: 501-butai Hasshin Shimasu!</option>
<option value='37940'>Yatogame-chan Kansatsu Nikki</option>
</select><br />
<label>Active Show #4</label><br />
<select class='form-control' id="3">
<option value='39337'>Araiya-san!: Ore to Aitsu ga Onnayu de!?</option>
<option value='38860'>Bakumatsu: Crisis</option>
<option value='38186'>Bokutachi wa Benkyou ga Dekinai</option>
<option value='37435'>Carole & Tuesday</option>
<option value='38226'>Chou Kadou Girl ⅙: Amazing Stranger</option>
<option value='38731'>Diamond no Ace: Act II</option>
<option value='39063'>Fairy Gone</option>
<option value='37806'>Gunjou no Magmel</option>
<option value='38091'>Hachigatsu no Cinderella Nine</option>
<option value='38268'>Hangyakusei Million Arthur 2nd Season</option>
<option value='37614'>Hitoribocchi no 笳銀雷 Seikatsu</option>
<option value='38295'>Joshikausei</option>
<option value='38161'>Kabukichou Sherlock</option>
<option value='36407'>Kenja no Mago</option>
<option value='38000'>Kimetsu no Yaiba</option>
<option value='38080'>Kono Oto Tomare!</option>
<option value='34620'>Kono Yo no Hate de Koi wo Utau Shoujo YU-NO</option>
<option value='37964'>Mayonaka no Occult Koumuin</option>
<option value='38778'>Midara na Ao-chan wa Benkyou ga Dekinai</option>
<option value='38098'>Mix: Meisei Story</option>
<option value='38150'>Namu Amida Butsu!: Rendai Utena</option>
<option value='38397'>Nande Koko ni Sensei ga!?</option>
<option value='38814'>Nobunaga-sensei no Osanazuma</option>
<option value='38707'>RobiHachi</option>
<option value='37426'>Sarazanmai</option>
<option value='38787'>Senryuu Shoujo</option>
<option value='38759'>Sewayaki Kitsune no Senko-san</option>
<option value='37952'>Shoumetsu Toshi</option>
<option value='38004'>World Witches Series: 501-butai Hasshin Shimasu!</option>
<option value='37940'>Yatogame-chan Kansatsu Nikki</option>
</select><br />
<label>Active Show #5</label><br />
<select class='form-control' id="4">
<option value='39337'>Araiya-san!: Ore to Aitsu ga Onnayu de!?</option>
<option value='38860'>Bakumatsu: Crisis</option>
<option value='38186'>Bokutachi wa Benkyou ga Dekinai</option>
<option value='37435'>Carole & Tuesday</option>
<option value='38226'>Chou Kadou Girl ⅙: Amazing Stranger</option>
<option value='38731'>Diamond no Ace: Act II</option>
<option value='39063'>Fairy Gone</option>
<option value='37806'>Gunjou no Magmel</option>
<option value='38091'>Hachigatsu no Cinderella Nine</option>
<option value='38268'>Hangyakusei Million Arthur 2nd Season</option>
<option value='37614'>Hitoribocchi no 笳銀雷 Seikatsu</option>
<option value='38295'>Joshikausei</option>
<option value='38161'>Kabukichou Sherlock</option>
<option value='36407'>Kenja no Mago</option>
<option value='38000'>Kimetsu no Yaiba</option>
<option value='38080'>Kono Oto Tomare!</option>
<option value='34620'>Kono Yo no Hate de Koi wo Utau Shoujo YU-NO</option>
<option value='37964'>Mayonaka no Occult Koumuin</option>
<option value='38778'>Midara na Ao-chan wa Benkyou ga Dekinai</option>
<option value='38098'>Mix: Meisei Story</option>
<option value='38150'>Namu Amida Butsu!: Rendai Utena</option>
<option value='38397'>Nande Koko ni Sensei ga!?</option>
<option value='38814'>Nobunaga-sensei no Osanazuma</option>
<option value='38707'>RobiHachi</option>
<option value='37426'>Sarazanmai</option>
<option value='38787'>Senryuu Shoujo</option>
<option value='38759'>Sewayaki Kitsune no Senko-san</option>
<option value='37952'>Shoumetsu Toshi</option>
<option value='38004'>World Witches Series: 501-butai Hasshin Shimasu!</option>
<option value='37940'>Yatogame-chan Kansatsu Nikki</option>
</select>
<br><br>
<label>Bench Show #1</label><br />
<select class='form-control' id="5">
<option value='39337'>Araiya-san!: Ore to Aitsu ga Onnayu de!?</option>
<option value='38860'>Bakumatsu: Crisis</option>
<option value='38186'>Bokutachi wa Benkyou ga Dekinai</option>
<option value='37435'>Carole & Tuesday</option>
<option value='38226'>Chou Kadou Girl ⅙: Amazing Stranger</option>
<option value='38731'>Diamond no Ace: Act II</option>
<option value='39063'>Fairy Gone</option>
<option value='37806'>Gunjou no Magmel</option>
<option value='38091'>Hachigatsu no Cinderella Nine</option>
<option value='38268'>Hangyakusei Million Arthur 2nd Season</option>
<option value='37614'>Hitoribocchi no 笳銀雷 Seikatsu</option>
<option value='38295'>Joshikausei</option>
<option value='38161'>Kabukichou Sherlock</option>
<option value='36407'>Kenja no Mago</option>
<option value='38000'>Kimetsu no Yaiba</option>
<option value='38080'>Kono Oto Tomare!</option>
<option value='34620'>Kono Yo no Hate de Koi wo Utau Shoujo YU-NO</option>
<option value='37964'>Mayonaka no Occult Koumuin</option>
<option value='38778'>Midara na Ao-chan wa Benkyou ga Dekinai</option>
<option value='38098'>Mix: Meisei Story</option>
<option value='38150'>Namu Amida Butsu!: Rendai Utena</option>
<option value='38397'>Nande Koko ni Sensei ga!?</option>
<option value='38814'>Nobunaga-sensei no Osanazuma</option>
<option value='38707'>RobiHachi</option>
<option value='37426'>Sarazanmai</option>
<option value='38787'>Senryuu Shoujo</option>
<option value='38759'>Sewayaki Kitsune no Senko-san</option>
<option value='37952'>Shoumetsu Toshi</option>
<option value='38004'>World Witches Series: 501-butai Hasshin Shimasu!</option>
<option value='37940'>Yatogame-chan Kansatsu Nikki</option>
</select><br />
<label>Bench Show #2</label><br />
<select class='form-control' id="6">
<option value='39337'>Araiya-san!: Ore to Aitsu ga Onnayu de!?</option>
<option value='38860'>Bakumatsu: Crisis</option>
<option value='38186'>Bokutachi wa Benkyou ga Dekinai</option>
<option value='37435'>Carole & Tuesday</option>
<option value='38226'>Chou Kadou Girl ⅙: Amazing Stranger</option>
<option value='38731'>Diamond no Ace: Act II</option>
<option value='39063'>Fairy Gone</option>
<option value='37806'>Gunjou no Magmel</option>
<option value='38091'>Hachigatsu no Cinderella Nine</option>
<option value='38268'>Hangyakusei Million Arthur 2nd Season</option>
<option value='37614'>Hitoribocchi no 笳銀雷 Seikatsu</option>
<option value='38295'>Joshikausei</option>
<option value='38161'>Kabukichou Sherlock</option>
<option value='36407'>Kenja no Mago</option>
<option value='38000'>Kimetsu no Yaiba</option>
<option value='38080'>Kono Oto Tomare!</option>
<option value='34620'>Kono Yo no Hate de Koi wo Utau Shoujo YU-NO</option>
<option value='37964'>Mayonaka no Occult Koumuin</option>
<option value='38778'>Midara na Ao-chan wa Benkyou ga Dekinai</option>
<option value='38098'>Mix: Meisei Story</option>
<option value='38150'>Namu Amida Butsu!: Rendai Utena</option>
<option value='38397'>Nande Koko ni Sensei ga!?</option>
<option value='38814'>Nobunaga-sensei no Osanazuma</option>
<option value='38707'>RobiHachi</option>
<option value='37426'>Sarazanmai</option>
<option value='38787'>Senryuu Shoujo</option>
<option value='38759'>Sewayaki Kitsune no Senko-san</option>
<option value='37952'>Shoumetsu Toshi</option>
<option value='38004'>World Witches Series: 501-butai Hasshin Shimasu!</option>
<option value='37940'>Yatogame-chan Kansatsu Nikki</option>
</select>
</div>
<br><br>
<div id='code_div' style='display:none'><hr><br>
Your verification code is:<br><br><b><code><span id='code'></span></code></b><br><br>Please copy and paste this code inside the "Location" field on your MAL profile. Once this is done, click the button below to register your team.
</div>
<br>
<br>
<br>
<button id='register_btn' style='display:none' class='btn btn-primary btn-block'>Register Team</button>
</div>
<!--
<div class='text-center'>Registration is now closed.</div>
</div>
-->
</body>
</html>