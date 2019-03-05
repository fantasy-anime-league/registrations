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
<option value='37561'>Akanesasu Shoujo</option>
<option value='37206'>Anima Yell!</option>
<option value='37584'>Bakumatsu</option>
<option value='37716'>Beelzebub-jou no Okinimesu mama.</option>
<option value='37823'>Conception</option>
<option value='37597'>Dakaretai Otoko 1-i ni Odosarete Imasu.</option>
<option value='37496'>Double Decker! Doug & Kirill</option>
<option value='36317'>Gaikotsu Shotenin Honda-san</option>
<option value='37657'>Gakuen Basara</option>
<option value='37989'>Golden Kamuy 2nd Season</option>
<option value='37490'>Gyakuten Saiban: Sono "Shinjitsu", Igi Ari! Season 2</option>
<option value='37555'>Hangyakusei Million Arthur</option>
<option value='36945'>Himote House</option>
<option value='37007'>Hinomaruzumou</option>
<option value='37497'>Irozuku Sekai no Ashita kara</option>
<option value='37992'>Jingai-san no Yome</option>
<option value='37991'>Jojo no Kimyou na Bouken: Ougon no Kaze</option>
<option value='37447'>Karakuri Circus</option>
<option value='37965'>Kaze ga Tsuyoku Fuiteiru</option>
<option value='37475'>Kishuku Gakkou no Juliet</option>
<option value='37232'>Merc Storia: Mukiryoku no Shounen to Bin no Naka no Shoujo</option>
<option value='36632'>Ore ga Suki nano wa Imouto dakedo Imouto ja Nai</option>
<option value='37202'>Radiant</option>
<option value='37221'>Release the Spyce</option>
<option value='35835'>RErideD: Tokigoe no Derrida</option>
<option value='37450'>Seishun Buta Yarou wa Bunny Girl Senpai no Yume wo Minai</option>
<option value='36037'>Senran Kagura: Shinovi Master - Tokyo Youma-hen</option>
<option value='36000'>Sora to Umi no Aida</option>
<option value='35847'>SSSS.Gridman</option>
<option value='37430'>Tensei shitara Slime Datta Ken</option>
<option value='36432'>Toaru Majutsu no Index III</option>
<option value='37579'>Tonari no Kyuuketsuki-san</option>
<option value='36653'>Tsurune: Kazemai Koukou Kyuudoubu</option>
<option value='37722'>Uchi no Maid ga Uzasugiru!</option>
<option value='36510'>Ulysses: Jehanne Darc to Renkin no Kishi</option>
<option value='37786'>Yagate Kimi ni Naru</option>
<option value='37976'>Zombieland Saga</option>
</select><br />
<label>Active Show #2</label><br />
<select class='form-control' id="1">
<option value='37561'>Akanesasu Shoujo</option>
<option value='37206'>Anima Yell!</option>
<option value='37584'>Bakumatsu</option>
<option value='37716'>Beelzebub-jou no Okinimesu mama.</option>
<option value='37823'>Conception</option>
<option value='37597'>Dakaretai Otoko 1-i ni Odosarete Imasu.</option>
<option value='37496'>Double Decker! Doug & Kirill</option>
<option value='36317'>Gaikotsu Shotenin Honda-san</option>
<option value='37657'>Gakuen Basara</option>
<option value='37989'>Golden Kamuy 2nd Season</option>
<option value='37490'>Gyakuten Saiban: Sono "Shinjitsu", Igi Ari! Season 2</option>
<option value='37555'>Hangyakusei Million Arthur</option>
<option value='36945'>Himote House</option>
<option value='37007'>Hinomaruzumou</option>
<option value='37497'>Irozuku Sekai no Ashita kara</option>
<option value='37992'>Jingai-san no Yome</option>
<option value='37991'>Jojo no Kimyou na Bouken: Ougon no Kaze</option>
<option value='37447'>Karakuri Circus</option>
<option value='37965'>Kaze ga Tsuyoku Fuiteiru</option>
<option value='37475'>Kishuku Gakkou no Juliet</option>
<option value='37232'>Merc Storia: Mukiryoku no Shounen to Bin no Naka no Shoujo</option>
<option value='36632'>Ore ga Suki nano wa Imouto dakedo Imouto ja Nai</option>
<option value='37202'>Radiant</option>
<option value='37221'>Release the Spyce</option>
<option value='35835'>RErideD: Tokigoe no Derrida</option>
<option value='37450'>Seishun Buta Yarou wa Bunny Girl Senpai no Yume wo Minai</option>
<option value='36037'>Senran Kagura: Shinovi Master - Tokyo Youma-hen</option>
<option value='36000'>Sora to Umi no Aida</option>
<option value='35847'>SSSS.Gridman</option>
<option value='37430'>Tensei shitara Slime Datta Ken</option>
<option value='36432'>Toaru Majutsu no Index III</option>
<option value='37579'>Tonari no Kyuuketsuki-san</option>
<option value='36653'>Tsurune: Kazemai Koukou Kyuudoubu</option>
<option value='37722'>Uchi no Maid ga Uzasugiru!</option>
<option value='36510'>Ulysses: Jehanne Darc to Renkin no Kishi</option>
<option value='37786'>Yagate Kimi ni Naru</option>
<option value='37976'>Zombieland Saga</option>
</select><br />
<label>Active Show #3</label><br />
<select class='form-control' id="2">
<option value='37561'>Akanesasu Shoujo</option>
<option value='37206'>Anima Yell!</option>
<option value='37584'>Bakumatsu</option>
<option value='37716'>Beelzebub-jou no Okinimesu mama.</option>
<option value='37823'>Conception</option>
<option value='37597'>Dakaretai Otoko 1-i ni Odosarete Imasu.</option>
<option value='37496'>Double Decker! Doug & Kirill</option>
<option value='36317'>Gaikotsu Shotenin Honda-san</option>
<option value='37657'>Gakuen Basara</option>
<option value='37989'>Golden Kamuy 2nd Season</option>
<option value='37490'>Gyakuten Saiban: Sono "Shinjitsu", Igi Ari! Season 2</option>
<option value='37555'>Hangyakusei Million Arthur</option>
<option value='36945'>Himote House</option>
<option value='37007'>Hinomaruzumou</option>
<option value='37497'>Irozuku Sekai no Ashita kara</option>
<option value='37992'>Jingai-san no Yome</option>
<option value='37991'>Jojo no Kimyou na Bouken: Ougon no Kaze</option>
<option value='37447'>Karakuri Circus</option>
<option value='37965'>Kaze ga Tsuyoku Fuiteiru</option>
<option value='37475'>Kishuku Gakkou no Juliet</option>
<option value='37232'>Merc Storia: Mukiryoku no Shounen to Bin no Naka no Shoujo</option>
<option value='36632'>Ore ga Suki nano wa Imouto dakedo Imouto ja Nai</option>
<option value='37202'>Radiant</option>
<option value='37221'>Release the Spyce</option>
<option value='35835'>RErideD: Tokigoe no Derrida</option>
<option value='37450'>Seishun Buta Yarou wa Bunny Girl Senpai no Yume wo Minai</option>
<option value='36037'>Senran Kagura: Shinovi Master - Tokyo Youma-hen</option>
<option value='36000'>Sora to Umi no Aida</option>
<option value='35847'>SSSS.Gridman</option>
<option value='37430'>Tensei shitara Slime Datta Ken</option>
<option value='36432'>Toaru Majutsu no Index III</option>
<option value='37579'>Tonari no Kyuuketsuki-san</option>
<option value='36653'>Tsurune: Kazemai Koukou Kyuudoubu</option>
<option value='37722'>Uchi no Maid ga Uzasugiru!</option>
<option value='36510'>Ulysses: Jehanne Darc to Renkin no Kishi</option>
<option value='37786'>Yagate Kimi ni Naru</option>
<option value='37976'>Zombieland Saga</option>
</select><br />
<label>Active Show #4</label><br />
<select class='form-control' id="3">
<option value='37561'>Akanesasu Shoujo</option>
<option value='37206'>Anima Yell!</option>
<option value='37584'>Bakumatsu</option>
<option value='37716'>Beelzebub-jou no Okinimesu mama.</option>
<option value='37823'>Conception</option>
<option value='37597'>Dakaretai Otoko 1-i ni Odosarete Imasu.</option>
<option value='37496'>Double Decker! Doug & Kirill</option>
<option value='36317'>Gaikotsu Shotenin Honda-san</option>
<option value='37657'>Gakuen Basara</option>
<option value='37989'>Golden Kamuy 2nd Season</option>
<option value='37490'>Gyakuten Saiban: Sono "Shinjitsu", Igi Ari! Season 2</option>
<option value='37555'>Hangyakusei Million Arthur</option>
<option value='36945'>Himote House</option>
<option value='37007'>Hinomaruzumou</option>
<option value='37497'>Irozuku Sekai no Ashita kara</option>
<option value='37992'>Jingai-san no Yome</option>
<option value='37991'>Jojo no Kimyou na Bouken: Ougon no Kaze</option>
<option value='37447'>Karakuri Circus</option>
<option value='37965'>Kaze ga Tsuyoku Fuiteiru</option>
<option value='37475'>Kishuku Gakkou no Juliet</option>
<option value='37232'>Merc Storia: Mukiryoku no Shounen to Bin no Naka no Shoujo</option>
<option value='36632'>Ore ga Suki nano wa Imouto dakedo Imouto ja Nai</option>
<option value='37202'>Radiant</option>
<option value='37221'>Release the Spyce</option>
<option value='35835'>RErideD: Tokigoe no Derrida</option>
<option value='37450'>Seishun Buta Yarou wa Bunny Girl Senpai no Yume wo Minai</option>
<option value='36037'>Senran Kagura: Shinovi Master - Tokyo Youma-hen</option>
<option value='36000'>Sora to Umi no Aida</option>
<option value='35847'>SSSS.Gridman</option>
<option value='37430'>Tensei shitara Slime Datta Ken</option>
<option value='36432'>Toaru Majutsu no Index III</option>
<option value='37579'>Tonari no Kyuuketsuki-san</option>
<option value='36653'>Tsurune: Kazemai Koukou Kyuudoubu</option>
<option value='37722'>Uchi no Maid ga Uzasugiru!</option>
<option value='36510'>Ulysses: Jehanne Darc to Renkin no Kishi</option>
<option value='37786'>Yagate Kimi ni Naru</option>
<option value='37976'>Zombieland Saga</option>
</select><br />
<label>Active Show #5</label><br />
<select class='form-control' id="4">
<option value='37561'>Akanesasu Shoujo</option>
<option value='37206'>Anima Yell!</option>
<option value='37584'>Bakumatsu</option>
<option value='37716'>Beelzebub-jou no Okinimesu mama.</option>
<option value='37823'>Conception</option>
<option value='37597'>Dakaretai Otoko 1-i ni Odosarete Imasu.</option>
<option value='37496'>Double Decker! Doug & Kirill</option>
<option value='36317'>Gaikotsu Shotenin Honda-san</option>
<option value='37657'>Gakuen Basara</option>
<option value='37989'>Golden Kamuy 2nd Season</option>
<option value='37490'>Gyakuten Saiban: Sono "Shinjitsu", Igi Ari! Season 2</option>
<option value='37555'>Hangyakusei Million Arthur</option>
<option value='36945'>Himote House</option>
<option value='37007'>Hinomaruzumou</option>
<option value='37497'>Irozuku Sekai no Ashita kara</option>
<option value='37992'>Jingai-san no Yome</option>
<option value='37991'>Jojo no Kimyou na Bouken: Ougon no Kaze</option>
<option value='37447'>Karakuri Circus</option>
<option value='37965'>Kaze ga Tsuyoku Fuiteiru</option>
<option value='37475'>Kishuku Gakkou no Juliet</option>
<option value='37232'>Merc Storia: Mukiryoku no Shounen to Bin no Naka no Shoujo</option>
<option value='36632'>Ore ga Suki nano wa Imouto dakedo Imouto ja Nai</option>
<option value='37202'>Radiant</option>
<option value='37221'>Release the Spyce</option>
<option value='35835'>RErideD: Tokigoe no Derrida</option>
<option value='37450'>Seishun Buta Yarou wa Bunny Girl Senpai no Yume wo Minai</option>
<option value='36037'>Senran Kagura: Shinovi Master - Tokyo Youma-hen</option>
<option value='36000'>Sora to Umi no Aida</option>
<option value='35847'>SSSS.Gridman</option>
<option value='37430'>Tensei shitara Slime Datta Ken</option>
<option value='36432'>Toaru Majutsu no Index III</option>
<option value='37579'>Tonari no Kyuuketsuki-san</option>
<option value='36653'>Tsurune: Kazemai Koukou Kyuudoubu</option>
<option value='37722'>Uchi no Maid ga Uzasugiru!</option>
<option value='36510'>Ulysses: Jehanne Darc to Renkin no Kishi</option>
<option value='37786'>Yagate Kimi ni Naru</option>
<option value='37976'>Zombieland Saga</option>
</select>
<br><br>
<label>Bench Show #1</label><br />
<select class='form-control' id="5">
<option value='37561'>Akanesasu Shoujo</option>
<option value='37206'>Anima Yell!</option>
<option value='37584'>Bakumatsu</option>
<option value='37716'>Beelzebub-jou no Okinimesu mama.</option>
<option value='37823'>Conception</option>
<option value='37597'>Dakaretai Otoko 1-i ni Odosarete Imasu.</option>
<option value='37496'>Double Decker! Doug & Kirill</option>
<option value='36317'>Gaikotsu Shotenin Honda-san</option>
<option value='37657'>Gakuen Basara</option>
<option value='37989'>Golden Kamuy 2nd Season</option>
<option value='37490'>Gyakuten Saiban: Sono "Shinjitsu", Igi Ari! Season 2</option>
<option value='37555'>Hangyakusei Million Arthur</option>
<option value='36945'>Himote House</option>
<option value='37007'>Hinomaruzumou</option>
<option value='37497'>Irozuku Sekai no Ashita kara</option>
<option value='37992'>Jingai-san no Yome</option>
<option value='37991'>Jojo no Kimyou na Bouken: Ougon no Kaze</option>
<option value='37447'>Karakuri Circus</option>
<option value='37965'>Kaze ga Tsuyoku Fuiteiru</option>
<option value='37475'>Kishuku Gakkou no Juliet</option>
<option value='37232'>Merc Storia: Mukiryoku no Shounen to Bin no Naka no Shoujo</option>
<option value='36632'>Ore ga Suki nano wa Imouto dakedo Imouto ja Nai</option>
<option value='37202'>Radiant</option>
<option value='37221'>Release the Spyce</option>
<option value='35835'>RErideD: Tokigoe no Derrida</option>
<option value='37450'>Seishun Buta Yarou wa Bunny Girl Senpai no Yume wo Minai</option>
<option value='36037'>Senran Kagura: Shinovi Master - Tokyo Youma-hen</option>
<option value='36000'>Sora to Umi no Aida</option>
<option value='35847'>SSSS.Gridman</option>
<option value='37430'>Tensei shitara Slime Datta Ken</option>
<option value='36432'>Toaru Majutsu no Index III</option>
<option value='37579'>Tonari no Kyuuketsuki-san</option>
<option value='36653'>Tsurune: Kazemai Koukou Kyuudoubu</option>
<option value='37722'>Uchi no Maid ga Uzasugiru!</option>
<option value='36510'>Ulysses: Jehanne Darc to Renkin no Kishi</option>
<option value='37786'>Yagate Kimi ni Naru</option>
<option value='37976'>Zombieland Saga</option>
</select><br />
<label>Bench Show #2</label><br />
<select class='form-control' id="6">
<option value='37561'>Akanesasu Shoujo</option>
<option value='37206'>Anima Yell!</option>
<option value='37584'>Bakumatsu</option>
<option value='37716'>Beelzebub-jou no Okinimesu mama.</option>
<option value='37823'>Conception</option>
<option value='37597'>Dakaretai Otoko 1-i ni Odosarete Imasu.</option>
<option value='37496'>Double Decker! Doug & Kirill</option>
<option value='36317'>Gaikotsu Shotenin Honda-san</option>
<option value='37657'>Gakuen Basara</option>
<option value='37989'>Golden Kamuy 2nd Season</option>
<option value='37490'>Gyakuten Saiban: Sono "Shinjitsu", Igi Ari! Season 2</option>
<option value='37555'>Hangyakusei Million Arthur</option>
<option value='36945'>Himote House</option>
<option value='37007'>Hinomaruzumou</option>
<option value='37497'>Irozuku Sekai no Ashita kara</option>
<option value='37992'>Jingai-san no Yome</option>
<option value='37991'>Jojo no Kimyou na Bouken: Ougon no Kaze</option>
<option value='37447'>Karakuri Circus</option>
<option value='37965'>Kaze ga Tsuyoku Fuiteiru</option>
<option value='37475'>Kishuku Gakkou no Juliet</option>
<option value='37232'>Merc Storia: Mukiryoku no Shounen to Bin no Naka no Shoujo</option>
<option value='36632'>Ore ga Suki nano wa Imouto dakedo Imouto ja Nai</option>
<option value='37202'>Radiant</option>
<option value='37221'>Release the Spyce</option>
<option value='35835'>RErideD: Tokigoe no Derrida</option>
<option value='37450'>Seishun Buta Yarou wa Bunny Girl Senpai no Yume wo Minai</option>
<option value='36037'>Senran Kagura: Shinovi Master - Tokyo Youma-hen</option>
<option value='36000'>Sora to Umi no Aida</option>
<option value='35847'>SSSS.Gridman</option>
<option value='37430'>Tensei shitara Slime Datta Ken</option>
<option value='36432'>Toaru Majutsu no Index III</option>
<option value='37579'>Tonari no Kyuuketsuki-san</option>
<option value='36653'>Tsurune: Kazemai Koukou Kyuudoubu</option>
<option value='37722'>Uchi no Maid ga Uzasugiru!</option>
<option value='36510'>Ulysses: Jehanne Darc to Renkin no Kishi</option>
<option value='37786'>Yagate Kimi ni Naru</option>
<option value='37976'>Zombieland Saga</option>
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