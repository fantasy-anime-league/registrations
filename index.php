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
            <input type='text' class='form-control' id='username_input' placeholder='Username'>
            <br>
            <button class='btn btn-info btn-block' id='code_btn'>Continue</button>
            <br>
            <br>
            <div id='selections_div' style='display:none'>
                <h3>Select your team:</h3>
                <br>
                <label>Active Show #1</label>
                <br />
                <select class='form-control' id="0">
                    <option value='38670'>Actors: Songs Connection</option>
                    <option value='39590'>Africa no Salaryman (TV)</option>
                    <option value='37403'>Ahiru no Sora</option>
                    <option value='39959'>Ani ni Tsukeru Kusuri wa Nai! 3</option>
                    <option value='38572'>Assassins Pride</option>
                    <option value='38328'>Azur Lane</option>
                    <option value='37525'>Babylon</option>
                    <option value='39195'>Beastars</option>
                    <option value='40004'>Bokutachi wa Benkyou ga Dekinai 2</option>
                    <option value='37379'>Chihayafuru 3</option>
                    <option value='39523'>Choujin Koukousei-tachi wa Isekai demo Yoyuu de Ik</option>
                    <option value='38390'>Chuubyou Gekihatsu Boy</option>
                    <option value='39811'>Fairy Gone 2nd Season</option>
                    <option value='38084'>Fate/Grand Order: Zettai Majuu Sensen Babylonia</option>
                    <option value='36587'>Granblue Fantasy The Animation Season 2</option>
                    <option value='39030'>Hataage! Kemono Michi</option>
                    <option value='39570'>High Score Girl II</option>
                    <option value='39468'>Honzuki no Gekokujou: Shisho ni Naru Tame ni wa Sh</option>
                    <option value='37972'>Hoshiai no Sora</option>
                    <option value='38276'>Houkago Saikoro Club</option>
                    <option value='40196'>Kandagawa Jet Girls</option>
                    <option value='39567'>Keishichou Tokumubu Tokushu Kyouakuhan Taisakushit</option>
                    <option value='38889'>Kono Oto Tomare! 2nd Season</option>
                    <option value='39196'>Mairimashita! Iruma-kun</option>
                    <option value='39701'>Nanatsu no Taizai: Kamigami no Gekirin</option>
                    <option value='39539'>No Guns Life</option>
                    <option value='40178'>Null Peta</option>
                    <option value='38483'>Ore wo Suki nano wa Omae dake ka yo</option>
                    <option value='37522'>Pet</option>
                    <option value='39506'>Phantasy Star Online 2: Episode Oracle</option>
                    <option value='39491'>Psycho-Pass 3</option>
                    <option value='39355'>Radiant 2nd Season</option>
                    <option value='38529'>Rifle Is Beautiful</option>
                    <option value='38659'>Shinchou Yuusha: Kono Yuusha ga Ore Tueee Kuse ni Shinchou Sugiru</option>
                    <option value='39940'>Shokugeki no Souma: Shin no Sara</option>
                    <option value='38331'>Stand My Heroes: Piece of Truth</option>
                    <option value='39799'>Val x Love</option>
                    <option value='37393'>Watashi, Nouryoku wa Heikinchi de tte Itta yo ne!</option>
                    <option value='40254'>XL Joushi.</option>
                    <option value='37268'>Z/X: Code Reunion</option>
                </select>
                <br />
                <label>Active Show #2</label>
                <br />
                <select class='form-control' id="1">
                    <option value='38670'>Actors: Songs Connection</option>
                    <option value='39590'>Africa no Salaryman (TV)</option>
                    <option value='37403'>Ahiru no Sora</option>
                    <option value='39959'>Ani ni Tsukeru Kusuri wa Nai! 3</option>
                    <option value='38572'>Assassins Pride</option>
                    <option value='38328'>Azur Lane</option>
                    <option value='37525'>Babylon</option>
                    <option value='39195'>Beastars</option>
                    <option value='40004'>Bokutachi wa Benkyou ga Dekinai 2</option>
                    <option value='37379'>Chihayafuru 3</option>
                    <option value='39523'>Choujin Koukousei-tachi wa Isekai demo Yoyuu de Ik</option>
                    <option value='38390'>Chuubyou Gekihatsu Boy</option>
                    <option value='39811'>Fairy Gone 2nd Season</option>
                    <option value='38084'>Fate/Grand Order: Zettai Majuu Sensen Babylonia</option>
                    <option value='36587'>Granblue Fantasy The Animation Season 2</option>
                    <option value='39030'>Hataage! Kemono Michi</option>
                    <option value='39570'>High Score Girl II</option>
                    <option value='39468'>Honzuki no Gekokujou: Shisho ni Naru Tame ni wa Sh</option>
                    <option value='37972'>Hoshiai no Sora</option>
                    <option value='38276'>Houkago Saikoro Club</option>
                    <option value='40196'>Kandagawa Jet Girls</option>
                    <option value='39567'>Keishichou Tokumubu Tokushu Kyouakuhan Taisakushit</option>
                    <option value='38889'>Kono Oto Tomare! 2nd Season</option>
                    <option value='39196'>Mairimashita! Iruma-kun</option>
                    <option value='39701'>Nanatsu no Taizai: Kamigami no Gekirin</option>
                    <option value='39539'>No Guns Life</option>
                    <option value='40178'>Null Peta</option>
                    <option value='38483'>Ore wo Suki nano wa Omae dake ka yo</option>
                    <option value='37522'>Pet</option>
                    <option value='39506'>Phantasy Star Online 2: Episode Oracle</option>
                    <option value='39491'>Psycho-Pass 3</option>
                    <option value='39355'>Radiant 2nd Season</option>
                    <option value='38529'>Rifle Is Beautiful</option>
                    <option value='38659'>Shinchou Yuusha: Kono Yuusha ga Ore Tueee Kuse ni Shinchou Sugiru</option>
                    <option value='39940'>Shokugeki no Souma: Shin no Sara</option>
                    <option value='38331'>Stand My Heroes: Piece of Truth</option>
                    <option value='39799'>Val x Love</option>
                    <option value='37393'>Watashi, Nouryoku wa Heikinchi de tte Itta yo ne!</option>
                    <option value='40254'>XL Joushi.</option>
                    <option value='37268'>Z/X: Code Reunion</option>                </select>
                <br />
                <label>Active Show #3</label>
                <br />
                <select class='form-control' id="2">
                    <option value='38670'>Actors: Songs Connection</option>
                    <option value='39590'>Africa no Salaryman (TV)</option>
                    <option value='37403'>Ahiru no Sora</option>
                    <option value='39959'>Ani ni Tsukeru Kusuri wa Nai! 3</option>
                    <option value='38572'>Assassins Pride</option>
                    <option value='38328'>Azur Lane</option>
                    <option value='37525'>Babylon</option>
                    <option value='39195'>Beastars</option>
                    <option value='40004'>Bokutachi wa Benkyou ga Dekinai 2</option>
                    <option value='37379'>Chihayafuru 3</option>
                    <option value='39523'>Choujin Koukousei-tachi wa Isekai demo Yoyuu de Ik</option>
                    <option value='38390'>Chuubyou Gekihatsu Boy</option>
                    <option value='39811'>Fairy Gone 2nd Season</option>
                    <option value='38084'>Fate/Grand Order: Zettai Majuu Sensen Babylonia</option>
                    <option value='36587'>Granblue Fantasy The Animation Season 2</option>
                    <option value='39030'>Hataage! Kemono Michi</option>
                    <option value='39570'>High Score Girl II</option>
                    <option value='39468'>Honzuki no Gekokujou: Shisho ni Naru Tame ni wa Sh</option>
                    <option value='37972'>Hoshiai no Sora</option>
                    <option value='38276'>Houkago Saikoro Club</option>
                    <option value='40196'>Kandagawa Jet Girls</option>
                    <option value='39567'>Keishichou Tokumubu Tokushu Kyouakuhan Taisakushit</option>
                    <option value='38889'>Kono Oto Tomare! 2nd Season</option>
                    <option value='39196'>Mairimashita! Iruma-kun</option>
                    <option value='39701'>Nanatsu no Taizai: Kamigami no Gekirin</option>
                    <option value='39539'>No Guns Life</option>
                    <option value='40178'>Null Peta</option>
                    <option value='38483'>Ore wo Suki nano wa Omae dake ka yo</option>
                    <option value='37522'>Pet</option>
                    <option value='39506'>Phantasy Star Online 2: Episode Oracle</option>
                    <option value='39491'>Psycho-Pass 3</option>
                    <option value='39355'>Radiant 2nd Season</option>
                    <option value='38529'>Rifle Is Beautiful</option>
                    <option value='38659'>Shinchou Yuusha: Kono Yuusha ga Ore Tueee Kuse ni Shinchou Sugiru</option>
                    <option value='39940'>Shokugeki no Souma: Shin no Sara</option>
                    <option value='38331'>Stand My Heroes: Piece of Truth</option>
                    <option value='39799'>Val x Love</option>
                    <option value='37393'>Watashi, Nouryoku wa Heikinchi de tte Itta yo ne!</option>
                    <option value='40254'>XL Joushi.</option>
                    <option value='37268'>Z/X: Code Reunion</option>
                </select>
                <br />
                <label>Active Show #4</label>
                <br />
                <select class='form-control' id="3">
                    <option value='38670'>Actors: Songs Connection</option>
                    <option value='39590'>Africa no Salaryman (TV)</option>
                    <option value='37403'>Ahiru no Sora</option>
                    <option value='39959'>Ani ni Tsukeru Kusuri wa Nai! 3</option>
                    <option value='38572'>Assassins Pride</option>
                    <option value='38328'>Azur Lane</option>
                    <option value='37525'>Babylon</option>
                    <option value='39195'>Beastars</option>
                    <option value='40004'>Bokutachi wa Benkyou ga Dekinai 2</option>
                    <option value='37379'>Chihayafuru 3</option>
                    <option value='39523'>Choujin Koukousei-tachi wa Isekai demo Yoyuu de Ik</option>
                    <option value='38390'>Chuubyou Gekihatsu Boy</option>
                    <option value='39811'>Fairy Gone 2nd Season</option>
                    <option value='38084'>Fate/Grand Order: Zettai Majuu Sensen Babylonia</option>
                    <option value='36587'>Granblue Fantasy The Animation Season 2</option>
                    <option value='39030'>Hataage! Kemono Michi</option>
                    <option value='39570'>High Score Girl II</option>
                    <option value='39468'>Honzuki no Gekokujou: Shisho ni Naru Tame ni wa Sh</option>
                    <option value='37972'>Hoshiai no Sora</option>
                    <option value='38276'>Houkago Saikoro Club</option>
                    <option value='40196'>Kandagawa Jet Girls</option>
                    <option value='39567'>Keishichou Tokumubu Tokushu Kyouakuhan Taisakushit</option>
                    <option value='38889'>Kono Oto Tomare! 2nd Season</option>
                    <option value='39196'>Mairimashita! Iruma-kun</option>
                    <option value='39701'>Nanatsu no Taizai: Kamigami no Gekirin</option>
                    <option value='39539'>No Guns Life</option>
                    <option value='40178'>Null Peta</option>
                    <option value='38483'>Ore wo Suki nano wa Omae dake ka yo</option>
                    <option value='37522'>Pet</option>
                    <option value='39506'>Phantasy Star Online 2: Episode Oracle</option>
                    <option value='39491'>Psycho-Pass 3</option>
                    <option value='39355'>Radiant 2nd Season</option>
                    <option value='38529'>Rifle Is Beautiful</option>
                    <option value='38659'>Shinchou Yuusha: Kono Yuusha ga Ore Tueee Kuse ni Shinchou Sugiru</option>
                    <option value='39940'>Shokugeki no Souma: Shin no Sara</option>
                    <option value='38331'>Stand My Heroes: Piece of Truth</option>
                    <option value='39799'>Val x Love</option>
                    <option value='37393'>Watashi, Nouryoku wa Heikinchi de tte Itta yo ne!</option>
                    <option value='40254'>XL Joushi.</option>
                    <option value='37268'>Z/X: Code Reunion</option>
                </select>
                <br />
                <label>Active Show #5</label>
                <br />
                <select class='form-control' id="4">
                    <option value='38670'>Actors: Songs Connection</option>
                    <option value='39590'>Africa no Salaryman (TV)</option>
                    <option value='37403'>Ahiru no Sora</option>
                    <option value='39959'>Ani ni Tsukeru Kusuri wa Nai! 3</option>
                    <option value='38572'>Assassins Pride</option>
                    <option value='38328'>Azur Lane</option>
                    <option value='37525'>Babylon</option>
                    <option value='39195'>Beastars</option>
                    <option value='40004'>Bokutachi wa Benkyou ga Dekinai 2</option>
                    <option value='37379'>Chihayafuru 3</option>
                    <option value='39523'>Choujin Koukousei-tachi wa Isekai demo Yoyuu de Ik</option>
                    <option value='38390'>Chuubyou Gekihatsu Boy</option>
                    <option value='39811'>Fairy Gone 2nd Season</option>
                    <option value='38084'>Fate/Grand Order: Zettai Majuu Sensen Babylonia</option>
                    <option value='36587'>Granblue Fantasy The Animation Season 2</option>
                    <option value='39030'>Hataage! Kemono Michi</option>
                    <option value='39570'>High Score Girl II</option>
                    <option value='39468'>Honzuki no Gekokujou: Shisho ni Naru Tame ni wa Sh</option>
                    <option value='37972'>Hoshiai no Sora</option>
                    <option value='38276'>Houkago Saikoro Club</option>
                    <option value='40196'>Kandagawa Jet Girls</option>
                    <option value='39567'>Keishichou Tokumubu Tokushu Kyouakuhan Taisakushit</option>
                    <option value='38889'>Kono Oto Tomare! 2nd Season</option>
                    <option value='39196'>Mairimashita! Iruma-kun</option>
                    <option value='39701'>Nanatsu no Taizai: Kamigami no Gekirin</option>
                    <option value='39539'>No Guns Life</option>
                    <option value='40178'>Null Peta</option>
                    <option value='38483'>Ore wo Suki nano wa Omae dake ka yo</option>
                    <option value='37522'>Pet</option>
                    <option value='39506'>Phantasy Star Online 2: Episode Oracle</option>
                    <option value='39491'>Psycho-Pass 3</option>
                    <option value='39355'>Radiant 2nd Season</option>
                    <option value='38529'>Rifle Is Beautiful</option>
                    <option value='38659'>Shinchou Yuusha: Kono Yuusha ga Ore Tueee Kuse ni Shinchou Sugiru</option>
                    <option value='39940'>Shokugeki no Souma: Shin no Sara</option>
                    <option value='38331'>Stand My Heroes: Piece of Truth</option>
                    <option value='39799'>Val x Love</option>
                    <option value='37393'>Watashi, Nouryoku wa Heikinchi de tte Itta yo ne!</option>
                    <option value='40254'>XL Joushi.</option>
                    <option value='37268'>Z/X: Code Reunion</option>
                </select>
                <br>
                <br>
                <label>Bench Show #1</label>
                <br />
                <select class='form-control' id="5">
                    <option value='38670'>Actors: Songs Connection</option>
                    <option value='39590'>Africa no Salaryman (TV)</option>
                    <option value='37403'>Ahiru no Sora</option>
                    <option value='39959'>Ani ni Tsukeru Kusuri wa Nai! 3</option>
                    <option value='38572'>Assassins Pride</option>
                    <option value='38328'>Azur Lane</option>
                    <option value='37525'>Babylon</option>
                    <option value='39195'>Beastars</option>
                    <option value='40004'>Bokutachi wa Benkyou ga Dekinai 2</option>
                    <option value='37379'>Chihayafuru 3</option>
                    <option value='39523'>Choujin Koukousei-tachi wa Isekai demo Yoyuu de Ik</option>
                    <option value='38390'>Chuubyou Gekihatsu Boy</option>
                    <option value='39811'>Fairy Gone 2nd Season</option>
                    <option value='38084'>Fate/Grand Order: Zettai Majuu Sensen Babylonia</option>
                    <option value='36587'>Granblue Fantasy The Animation Season 2</option>
                    <option value='39030'>Hataage! Kemono Michi</option>
                    <option value='39570'>High Score Girl II</option>
                    <option value='39468'>Honzuki no Gekokujou: Shisho ni Naru Tame ni wa Sh</option>
                    <option value='37972'>Hoshiai no Sora</option>
                    <option value='38276'>Houkago Saikoro Club</option>
                    <option value='40196'>Kandagawa Jet Girls</option>
                    <option value='39567'>Keishichou Tokumubu Tokushu Kyouakuhan Taisakushit</option>
                    <option value='38889'>Kono Oto Tomare! 2nd Season</option>
                    <option value='39196'>Mairimashita! Iruma-kun</option>
                    <option value='39701'>Nanatsu no Taizai: Kamigami no Gekirin</option>
                    <option value='39539'>No Guns Life</option>
                    <option value='40178'>Null Peta</option>
                    <option value='38483'>Ore wo Suki nano wa Omae dake ka yo</option>
                    <option value='37522'>Pet</option>
                    <option value='39506'>Phantasy Star Online 2: Episode Oracle</option>
                    <option value='39491'>Psycho-Pass 3</option>
                    <option value='39355'>Radiant 2nd Season</option>
                    <option value='38529'>Rifle Is Beautiful</option>
                    <option value='38659'>Shinchou Yuusha: Kono Yuusha ga Ore Tueee Kuse ni Shinchou Sugiru</option>
                    <option value='39940'>Shokugeki no Souma: Shin no Sara</option>
                    <option value='38331'>Stand My Heroes: Piece of Truth</option>
                    <option value='39799'>Val x Love</option>
                    <option value='37393'>Watashi, Nouryoku wa Heikinchi de tte Itta yo ne!</option>
                    <option value='40254'>XL Joushi.</option>
                    <option value='37268'>Z/X: Code Reunion</option>
                </select>
                <br />
                <label>Bench Show #2</label>
                <br />
                <select class='form-control' id="6">
                    <option value='38670'>Actors: Songs Connection</option>
                    <option value='39590'>Africa no Salaryman (TV)</option>
                    <option value='37403'>Ahiru no Sora</option>
                    <option value='39959'>Ani ni Tsukeru Kusuri wa Nai! 3</option>
                    <option value='38572'>Assassins Pride</option>
                    <option value='38328'>Azur Lane</option>
                    <option value='37525'>Babylon</option>
                    <option value='39195'>Beastars</option>
                    <option value='40004'>Bokutachi wa Benkyou ga Dekinai 2</option>
                    <option value='37379'>Chihayafuru 3</option>
                    <option value='39523'>Choujin Koukousei-tachi wa Isekai demo Yoyuu de Ik</option>
                    <option value='38390'>Chuubyou Gekihatsu Boy</option>
                    <option value='39811'>Fairy Gone 2nd Season</option>
                    <option value='38084'>Fate/Grand Order: Zettai Majuu Sensen Babylonia</option>
                    <option value='36587'>Granblue Fantasy The Animation Season 2</option>
                    <option value='39030'>Hataage! Kemono Michi</option>
                    <option value='39570'>High Score Girl II</option>
                    <option value='39468'>Honzuki no Gekokujou: Shisho ni Naru Tame ni wa Sh</option>
                    <option value='37972'>Hoshiai no Sora</option>
                    <option value='38276'>Houkago Saikoro Club</option>
                    <option value='40196'>Kandagawa Jet Girls</option>
                    <option value='39567'>Keishichou Tokumubu Tokushu Kyouakuhan Taisakushit</option>
                    <option value='38889'>Kono Oto Tomare! 2nd Season</option>
                    <option value='39196'>Mairimashita! Iruma-kun</option>
                    <option value='39701'>Nanatsu no Taizai: Kamigami no Gekirin</option>
                    <option value='39539'>No Guns Life</option>
                    <option value='40178'>Null Peta</option>
                    <option value='38483'>Ore wo Suki nano wa Omae dake ka yo</option>
                    <option value='37522'>Pet</option>
                    <option value='39506'>Phantasy Star Online 2: Episode Oracle</option>
                    <option value='39491'>Psycho-Pass 3</option>
                    <option value='39355'>Radiant 2nd Season</option>
                    <option value='38529'>Rifle Is Beautiful</option>
                    <option value='38659'>Shinchou Yuusha: Kono Yuusha ga Ore Tueee Kuse ni Shinchou Sugiru</option>
                    <option value='39940'>Shokugeki no Souma: Shin no Sara</option>
                    <option value='38331'>Stand My Heroes: Piece of Truth</option>
                    <option value='39799'>Val x Love</option>
                    <option value='37393'>Watashi, Nouryoku wa Heikinchi de tte Itta yo ne!</option>
                    <option value='40254'>XL Joushi.</option>
                    <option value='37268'>Z/X: Code Reunion</option>
                </select>
            </div>
            <br>
            <br>
            <div id='code_div' style='display:none'>
                <hr>
                <br> Your verification code is:
                <br>
                <br><b><code><span id='code'></span></code></b>
                <br>
                <br>Please copy and paste this code inside the "Location" field on your MAL profile. Once this is done, click the button below to register your team.
            </div>
            <br>
            <br>
            <br>
            <button id='register_btn' style='display:none' class='btn btn-primary btn-block'>Register Team</button>

            <!-- <div class='text-center'>Registration is now closed.</div>
            <br>
            <br>
            <br> -->

            <h2 class='text-center' id='subtitle'>Check Your Team</h2>
            <br>
            <label>Your MAL Username:</label>
            <input type='text' class='form-control' id='team_username_input' placeholder='Username'>
            <br>
            <button class='btn btn-info btn-block' id='team_code_btn'>Continue</button>
            <br>
            <br>
            <div id='instructions_div' style='display:none'>
                <hr>
                <br> Your verification code is:
                <br>
                <br><b><code><span id='team_code'></span></code></b>
                <br>
                <br>Please copy and paste this code inside the "Location" field on your MAL profile. Once this is done, click the button below to see your team.
                <br><br>
                <button class='btn btn-primary btn-block' id='team_btn'>See Team</button>
            </div>
            <div id='team_div' style='display:none'>
                <h3>Active Team:</h3>
                <h4 id='team_1'>1</h4>
                <h4 id='team_2'>2</h4>
                <h4 id='team_3'>3</h4>
                <h4 id='team_4'>4</h4>
                <h4 id='team_5'>5</h4>
                <h3>Bench Team:</h3>
                <h4 id='team_6'>6</h4>
                <h4 id='team_7'>7</h4>
            </div>
        </div>
    </div>
</body>

</html>
