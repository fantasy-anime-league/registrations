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
                    <option value='40532'>Appare-Ranman!</option>
                    <option value='40677'>Argonavis from BanG Dream!</option>
                    <option value='40128'>Arte</option>
                    <option value='40060'>BNA</option>
                    <option value='40934'>Bungou to Alchemist: Shinpan no Haguruma</option>
                    <option value='40417'>Fruits Basket 2nd Season</option>
                    <option value='41120'>Fugou Keiji: Balance:Unlimited</option>
                    <option value='40358'>Gal to Kyouryuu</option>
                    <option value='39463'>Gleipnir</option>
                    <option value='38830'>Hachi-nan tte, Sore wa Nai deshou!</option>
                    <option value='40815'>Honzuki no Gekokujou: Shisho ni Naru Tame ni wa Shudan wo Erandeiraremasen 2nd Season</option>
                    <option value='39730'>Houkago Teibou Nisshi</option>
                    <option value='39049'>Jashin-chan Dropkick'</option>
                    <option value='40716'>Kakushigoto (TV)</option>
                    <option value='40221'>Kami no Tou</option>
                    <option value='40682'>Kingdom 3rd Season</option>
                    <option value='39582'>Kitsutsuki Tanteidokoro</option>
                    <option value='40165'>Listeners</option>
                    <option value='40504'>Major 2nd (TV) 2nd Season</option>
                    <option value='40513'>Nami yo Kiitekure</option>
                    <option value='40529'>No Guns Life 2nd Season</option>
                    <option value='41332'>Ore no Yubi de Midarero.: Heitengo Futarikiri no Salon de...</option>
                    <option value='38555'>Otome Game no Hametsu Flag shika Nai Akuyaku Reijou ni Tensei shiteshimatta...</option>
                    <option value='39292'>Princess Connect! Re:Dive</option>
                    <option value='40783'>Shachou, Battle no Jikan Desu!</option>
                    <option value='40403'>Shin Sakura Taisen the Animation</option>
                    <option value='38843'>Shironeko Project: Zero Chronicle</option>
                    <option value='40902'>Shokugeki no Souma: Gou no Sara</option>
                    <option value='39966'>Tamayomi</option>
                    <option value='39469'>Tsugu Tsugumomo</option>
                    <option value='39710'>Yesterday wo Utatte</option>
                    <option value='40145'>Yu☆Gi☆Oh!: Sevens</option>
                </select>
                <br />
                <label>Active Show #2</label>
                <br />
                <select class='form-control' id="1">
                    <option value='40532'>Appare-Ranman!</option>
                    <option value='40677'>Argonavis from BanG Dream!</option>
                    <option value='40128'>Arte</option>
                    <option value='40060'>BNA</option>
                    <option value='40934'>Bungou to Alchemist: Shinpan no Haguruma</option>
                    <option value='40417'>Fruits Basket 2nd Season</option>
                    <option value='41120'>Fugou Keiji: Balance:Unlimited</option>
                    <option value='40358'>Gal to Kyouryuu</option>
                    <option value='39463'>Gleipnir</option>
                    <option value='38830'>Hachi-nan tte, Sore wa Nai deshou!</option>
                    <option value='40815'>Honzuki no Gekokujou: Shisho ni Naru Tame ni wa Shudan wo Erandeiraremasen 2nd Season</option>
                    <option value='39730'>Houkago Teibou Nisshi</option>
                    <option value='39049'>Jashin-chan Dropkick'</option>
                    <option value='40716'>Kakushigoto (TV)</option>
                    <option value='40221'>Kami no Tou</option>
                    <option value='40682'>Kingdom 3rd Season</option>
                    <option value='39582'>Kitsutsuki Tanteidokoro</option>
                    <option value='40165'>Listeners</option>
                    <option value='40504'>Major 2nd (TV) 2nd Season</option>
                    <option value='40513'>Nami yo Kiitekure</option>
                    <option value='40529'>No Guns Life 2nd Season</option>
                    <option value='41332'>Ore no Yubi de Midarero.: Heitengo Futarikiri no Salon de...</option>
                    <option value='38555'>Otome Game no Hametsu Flag shika Nai Akuyaku Reijou ni Tensei shiteshimatta...</option>
                    <option value='39292'>Princess Connect! Re:Dive</option>
                    <option value='40783'>Shachou, Battle no Jikan Desu!</option>
                    <option value='40403'>Shin Sakura Taisen the Animation</option>
                    <option value='38843'>Shironeko Project: Zero Chronicle</option>
                    <option value='40902'>Shokugeki no Souma: Gou no Sara</option>
                    <option value='39966'>Tamayomi</option>
                    <option value='39469'>Tsugu Tsugumomo</option>
                    <option value='39710'>Yesterday wo Utatte</option>
                    <option value='40145'>Yu☆Gi☆Oh!: Sevens</option>
                </select>
                <br />
                <label>Active Show #3</label>
                <br />
                <select class='form-control' id="2">
                    <option value='40532'>Appare-Ranman!</option>
                    <option value='40677'>Argonavis from BanG Dream!</option>
                    <option value='40128'>Arte</option>
                    <option value='40060'>BNA</option>
                    <option value='40934'>Bungou to Alchemist: Shinpan no Haguruma</option>
                    <option value='40417'>Fruits Basket 2nd Season</option>
                    <option value='41120'>Fugou Keiji: Balance:Unlimited</option>
                    <option value='40358'>Gal to Kyouryuu</option>
                    <option value='39463'>Gleipnir</option>
                    <option value='38830'>Hachi-nan tte, Sore wa Nai deshou!</option>
                    <option value='40815'>Honzuki no Gekokujou: Shisho ni Naru Tame ni wa Shudan wo Erandeiraremasen 2nd Season</option>
                    <option value='39730'>Houkago Teibou Nisshi</option>
                    <option value='39049'>Jashin-chan Dropkick'</option>
                    <option value='40716'>Kakushigoto (TV)</option>
                    <option value='40221'>Kami no Tou</option>
                    <option value='40682'>Kingdom 3rd Season</option>
                    <option value='39582'>Kitsutsuki Tanteidokoro</option>
                    <option value='40165'>Listeners</option>
                    <option value='40504'>Major 2nd (TV) 2nd Season</option>
                    <option value='40513'>Nami yo Kiitekure</option>
                    <option value='40529'>No Guns Life 2nd Season</option>
                    <option value='41332'>Ore no Yubi de Midarero.: Heitengo Futarikiri no Salon de...</option>
                    <option value='38555'>Otome Game no Hametsu Flag shika Nai Akuyaku Reijou ni Tensei shiteshimatta...</option>
                    <option value='39292'>Princess Connect! Re:Dive</option>
                    <option value='40783'>Shachou, Battle no Jikan Desu!</option>
                    <option value='40403'>Shin Sakura Taisen the Animation</option>
                    <option value='38843'>Shironeko Project: Zero Chronicle</option>
                    <option value='40902'>Shokugeki no Souma: Gou no Sara</option>
                    <option value='39966'>Tamayomi</option>
                    <option value='39469'>Tsugu Tsugumomo</option>
                    <option value='39710'>Yesterday wo Utatte</option>
                    <option value='40145'>Yu☆Gi☆Oh!: Sevens</option>
                </select>
                <br />
                <label>Active Show #4</label>
                <br />
                <select class='form-control' id="3">
                    <option value='40532'>Appare-Ranman!</option>
                    <option value='40677'>Argonavis from BanG Dream!</option>
                    <option value='40128'>Arte</option>
                    <option value='40060'>BNA</option>
                    <option value='40934'>Bungou to Alchemist: Shinpan no Haguruma</option>
                    <option value='40417'>Fruits Basket 2nd Season</option>
                    <option value='41120'>Fugou Keiji: Balance:Unlimited</option>
                    <option value='40358'>Gal to Kyouryuu</option>
                    <option value='39463'>Gleipnir</option>
                    <option value='38830'>Hachi-nan tte, Sore wa Nai deshou!</option>
                    <option value='40815'>Honzuki no Gekokujou: Shisho ni Naru Tame ni wa Shudan wo Erandeiraremasen 2nd Season</option>
                    <option value='39730'>Houkago Teibou Nisshi</option>
                    <option value='39049'>Jashin-chan Dropkick'</option>
                    <option value='40716'>Kakushigoto (TV)</option>
                    <option value='40221'>Kami no Tou</option>
                    <option value='40682'>Kingdom 3rd Season</option>
                    <option value='39582'>Kitsutsuki Tanteidokoro</option>
                    <option value='40165'>Listeners</option>
                    <option value='40504'>Major 2nd (TV) 2nd Season</option>
                    <option value='40513'>Nami yo Kiitekure</option>
                    <option value='40529'>No Guns Life 2nd Season</option>
                    <option value='41332'>Ore no Yubi de Midarero.: Heitengo Futarikiri no Salon de...</option>
                    <option value='38555'>Otome Game no Hametsu Flag shika Nai Akuyaku Reijou ni Tensei shiteshimatta...</option>
                    <option value='39292'>Princess Connect! Re:Dive</option>
                    <option value='40783'>Shachou, Battle no Jikan Desu!</option>
                    <option value='40403'>Shin Sakura Taisen the Animation</option>
                    <option value='38843'>Shironeko Project: Zero Chronicle</option>
                    <option value='40902'>Shokugeki no Souma: Gou no Sara</option>
                    <option value='39966'>Tamayomi</option>
                    <option value='39469'>Tsugu Tsugumomo</option>
                    <option value='39710'>Yesterday wo Utatte</option>
                    <option value='40145'>Yu☆Gi☆Oh!: Sevens</option>
                </select>
                <br />
                <label>Active Show #5</label>
                <br />
                <select class='form-control' id="4">
                    <option value='40532'>Appare-Ranman!</option>
                    <option value='40677'>Argonavis from BanG Dream!</option>
                    <option value='40128'>Arte</option>
                    <option value='40060'>BNA</option>
                    <option value='40934'>Bungou to Alchemist: Shinpan no Haguruma</option>
                    <option value='40417'>Fruits Basket 2nd Season</option>
                    <option value='41120'>Fugou Keiji: Balance:Unlimited</option>
                    <option value='40358'>Gal to Kyouryuu</option>
                    <option value='39463'>Gleipnir</option>
                    <option value='38830'>Hachi-nan tte, Sore wa Nai deshou!</option>
                    <option value='40815'>Honzuki no Gekokujou: Shisho ni Naru Tame ni wa Shudan wo Erandeiraremasen 2nd Season</option>
                    <option value='39730'>Houkago Teibou Nisshi</option>
                    <option value='39049'>Jashin-chan Dropkick'</option>
                    <option value='40716'>Kakushigoto (TV)</option>
                    <option value='40221'>Kami no Tou</option>
                    <option value='40682'>Kingdom 3rd Season</option>
                    <option value='39582'>Kitsutsuki Tanteidokoro</option>
                    <option value='40165'>Listeners</option>
                    <option value='40504'>Major 2nd (TV) 2nd Season</option>
                    <option value='40513'>Nami yo Kiitekure</option>
                    <option value='40529'>No Guns Life 2nd Season</option>
                    <option value='41332'>Ore no Yubi de Midarero.: Heitengo Futarikiri no Salon de...</option>
                    <option value='38555'>Otome Game no Hametsu Flag shika Nai Akuyaku Reijou ni Tensei shiteshimatta...</option>
                    <option value='39292'>Princess Connect! Re:Dive</option>
                    <option value='40783'>Shachou, Battle no Jikan Desu!</option>
                    <option value='40403'>Shin Sakura Taisen the Animation</option>
                    <option value='38843'>Shironeko Project: Zero Chronicle</option>
                    <option value='40902'>Shokugeki no Souma: Gou no Sara</option>
                    <option value='39966'>Tamayomi</option>
                    <option value='39469'>Tsugu Tsugumomo</option>
                    <option value='39710'>Yesterday wo Utatte</option>
                    <option value='40145'>Yu☆Gi☆Oh!: Sevens</option>
                </select>
                <br>
                <br>
                <label>Bench Show #1</label>
                <br />
                <select class='form-control' id="5">
                    <option value='40532'>Appare-Ranman!</option>
                    <option value='40677'>Argonavis from BanG Dream!</option>
                    <option value='40128'>Arte</option>
                    <option value='40060'>BNA</option>
                    <option value='40934'>Bungou to Alchemist: Shinpan no Haguruma</option>
                    <option value='40417'>Fruits Basket 2nd Season</option>
                    <option value='41120'>Fugou Keiji: Balance:Unlimited</option>
                    <option value='40358'>Gal to Kyouryuu</option>
                    <option value='39463'>Gleipnir</option>
                    <option value='38830'>Hachi-nan tte, Sore wa Nai deshou!</option>
                    <option value='40815'>Honzuki no Gekokujou: Shisho ni Naru Tame ni wa Shudan wo Erandeiraremasen 2nd Season</option>
                    <option value='39730'>Houkago Teibou Nisshi</option>
                    <option value='39049'>Jashin-chan Dropkick'</option>
                    <option value='40716'>Kakushigoto (TV)</option>
                    <option value='40221'>Kami no Tou</option>
                    <option value='40682'>Kingdom 3rd Season</option>
                    <option value='39582'>Kitsutsuki Tanteidokoro</option>
                    <option value='40165'>Listeners</option>
                    <option value='40504'>Major 2nd (TV) 2nd Season</option>
                    <option value='40513'>Nami yo Kiitekure</option>
                    <option value='40529'>No Guns Life 2nd Season</option>
                    <option value='41332'>Ore no Yubi de Midarero.: Heitengo Futarikiri no Salon de...</option>
                    <option value='38555'>Otome Game no Hametsu Flag shika Nai Akuyaku Reijou ni Tensei shiteshimatta...</option>
                    <option value='39292'>Princess Connect! Re:Dive</option>
                    <option value='40783'>Shachou, Battle no Jikan Desu!</option>
                    <option value='40403'>Shin Sakura Taisen the Animation</option>
                    <option value='38843'>Shironeko Project: Zero Chronicle</option>
                    <option value='40902'>Shokugeki no Souma: Gou no Sara</option>
                    <option value='39966'>Tamayomi</option>
                    <option value='39469'>Tsugu Tsugumomo</option>
                    <option value='39710'>Yesterday wo Utatte</option>
                    <option value='40145'>Yu☆Gi☆Oh!: Sevens</option>
                </select>
                <br />
                <label>Bench Show #2</label>
                <br />
                <select class='form-control' id="6">
                    <option value='40532'>Appare-Ranman!</option>
                    <option value='40677'>Argonavis from BanG Dream!</option>
                    <option value='40128'>Arte</option>
                    <option value='40060'>BNA</option>
                    <option value='40934'>Bungou to Alchemist: Shinpan no Haguruma</option>
                    <option value='40417'>Fruits Basket 2nd Season</option>
                    <option value='41120'>Fugou Keiji: Balance:Unlimited</option>
                    <option value='40358'>Gal to Kyouryuu</option>
                    <option value='39463'>Gleipnir</option>
                    <option value='38830'>Hachi-nan tte, Sore wa Nai deshou!</option>
                    <option value='40815'>Honzuki no Gekokujou: Shisho ni Naru Tame ni wa Shudan wo Erandeiraremasen 2nd Season</option>
                    <option value='39730'>Houkago Teibou Nisshi</option>
                    <option value='39049'>Jashin-chan Dropkick'</option>
                    <option value='40716'>Kakushigoto (TV)</option>
                    <option value='40221'>Kami no Tou</option>
                    <option value='40682'>Kingdom 3rd Season</option>
                    <option value='39582'>Kitsutsuki Tanteidokoro</option>
                    <option value='40165'>Listeners</option>
                    <option value='40504'>Major 2nd (TV) 2nd Season</option>
                    <option value='40513'>Nami yo Kiitekure</option>
                    <option value='40529'>No Guns Life 2nd Season</option>
                    <option value='41332'>Ore no Yubi de Midarero.: Heitengo Futarikiri no Salon de...</option>
                    <option value='38555'>Otome Game no Hametsu Flag shika Nai Akuyaku Reijou ni Tensei shiteshimatta...</option>
                    <option value='39292'>Princess Connect! Re:Dive</option>
                    <option value='40783'>Shachou, Battle no Jikan Desu!</option>
                    <option value='40403'>Shin Sakura Taisen the Animation</option>
                    <option value='38843'>Shironeko Project: Zero Chronicle</option>
                    <option value='40902'>Shokugeki no Souma: Gou no Sara</option>
                    <option value='39966'>Tamayomi</option>
                    <option value='39469'>Tsugu Tsugumomo</option>
                    <option value='39710'>Yesterday wo Utatte</option>
                    <option value='40145'>Yu☆Gi☆Oh!: Sevens</option>
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
