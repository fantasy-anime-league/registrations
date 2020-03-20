var show_dict = {
	40532: "Appare-Ranman!",
	40677: "Argonavis from BanG Dream!",
	40128: "Arte",
	40060: "BNA",
	40934: "Bungou to Alchemist: Shinpan no Haguruma",
	40417: "Fruits Basket 2nd Season",
	41120: "Fugou Keiji: Balance:Unlimited",
	40358: "Gal to Kyouryuu",
	39463: "Gleipnir",
	38830: "Hachi-nan tte, Sore wa Nai deshou!",
	40815: "Honzuki no Gekokujou: Shisho ni Naru Tame ni wa Shudan wo Erandeiraremasen 2nd Season",
	39730: "Houkago Teibou Nisshi",
	39049: "Jashin-chan Dropkick'",
	40716: "Kakushigoto (TV)",
	40221: "Kami no Tou",
	40682: "Kingdom 3rd Season",
	39582: "Kitsutsuki Tanteidokoro",
	40165: "Listeners",
	40504: "Major 2nd (TV) 2nd Season",
	40513: "Nami yo Kiitekure",
	40529: "No Guns Life 2nd Season",
	41332: "Ore no Yubi de Midarero.: Heitengo Futarikiri no Salon de...",
	38555: "Otome Game no Hametsu Flag shika Nai Akuyaku Reijou ni Tensei shiteshimatta...",
	39292: "Princess Connect! Re:Dive",
	40783: "Shachou, Battle no Jikan Desu!",
	40403: "Shin Sakura Taisen the Animation",
	38843: "Shironeko Project: Zero Chronicle",
	40902: "Shokugeki no Souma: Gou no Sara",
	39966: "Tamayomi",
	39469: "Tsugu Tsugumomo",
	39710: "Yesterday wo Utatte",
	40145: "Yu☆Gi☆Oh!: Sevens"
}
var order_array = [
	40532,
	40677,
	40128,
	40060,
	40934,
	40417,
	41120,
	40358,
	39463,
	38830,
	40815,
	39730,
	39049,
	40716,
	40221,
	40682,
	39582,
	40165,
	40504,
	40513,
	40529,
	41332,
	38555,
	39292,
	40783,
	40403,
	38843,
	40902,
	39966,
	39469,
	39710,
	40145
]

$(document).ready(function () {
	var username = '';
	$('#code_btn').click(function () {
		document.getElementById("username_input").disabled = true;
		document.getElementById("code_btn").disabled = true;

		username = document.getElementById('username_input').value.toLowerCase();
		if (username == '') {
			alert('Username cannot be blank.');
			return;
		}
		$.ajax({
			url: "reg.php?func=get_code&username=" + username,
			success: function (response) {
				if (response == 'username invalid') {
					alert('Username invalid. Please try again.');
					document.getElementById("username_input").disabled = false;
					document.getElementById("code_btn").disabled = false;
					return;
				}
				document.getElementById('code').innerHTML = response;
				document.getElementById('code_div').style.display = 'block';
				document.getElementById('register_btn').style.display = 'block';
				document.getElementById('selections_div').style.display = 'block';
			}
		})
	})
	$('#register_btn').click(function () {
		document.getElementById('register_btn').disabled = true;
		var my_data = [];
		for (var i = 0; i < 7; i++) {
			my_data.push(parseInt($('#' + i.toString()).val()));
		}
		console.log(my_data);

		$.ajax({
			url: 'reg.php',
			type: 'POST',
			data: { func: 'check_code', username: username, team_data: my_data },
			success: function (response) {
				if (response == 'auth invalid') {
					alert('Could not validate your username. Please verify that the code was copied correctly.');
				}
				else if (response == 'invalid dupes') {
					alert('You have one or more duplicate titles on your submitted team. Please correct your team and try again.');
				}
				else if (response == 'invalid restrict') {
					alert('You have multiple restricted sequels on your submitted team. You may only choose one of them. Please correct your team and try again.');
				}
				else if (response == 'success') {
					alert('Your team has been successfully submitted. Returning to start...');
					location.reload()
				}
				document.getElementById('register_btn').disabled = false;
			}
		});
	})
	$('#team_code_btn').click(function () {
		document.getElementById("team_username_input").disabled = true;
		document.getElementById("team_code_btn").disabled = true;

		username = document.getElementById('team_username_input').value.toLowerCase();
		if (username == '') {
			alert('Username cannot be blank.');
			return;
		}
		$.ajax({
			url: "reg.php?func=get_code&username=" + username,
			success: function (response) {
				if (response == 'username invalid') {
					alert('Username invalid. Please try again.');
					document.getElementById("team_username_input").disabled = false;
					document.getElementById("team_code_btn").disabled = false;
					return;
				}
				document.getElementById('team_code').innerHTML = response;
				document.getElementById('instructions_div').style.display = 'block';
			}
		})
	})
	$('#team_btn').click(function () {
		document.getElementById('team_btn').disabled = true;

		$.ajax({
			url: 'reg.php?func=get_team&username=' + username,
			success: function (response) {
				if (response == 'auth invalid') {
					alert('Could not validate your username. Please verify that the code was copied correctly.');
					document.getElementById('team_btn').disabled = false;
				}
				else if (response == 'user not found') {
					alert("You have not registered for Fantasy Anime League. You don't have a team.");
					document.getElementById('team_btn').disabled = false;
				}
				else {
					var ids = response.trim().split(/\s+/);
					ids.forEach(function (id, index) {
						document.getElementById('team_' + (index + 1)).innerHTML = show_dict[id];
					});
					document.getElementById('team_div').style.display = 'block';
				}
			}
		});
	})
});
/*
window.onload = function(){
	console.log('creating select fields');
	var my_innerhtml = '';
	for(var i = 0; i< order_array.length; i++){
		my_innerhtml += '<option value="'+order_array[i].toString()+'">'+show_dict[order_array[i]]+'</option>';
	}
	var my_html = '';
	for(var i=0; i<5; i++){
		my_html += 'Active Show #'+(i+1).toString()+'<br><select id="'+i.toString()+'">'+my_innerhtml+'</select><br>';
	}
	my_html += '<br><hr><br>';
	for(var i=5; i<7; i++){
		my_html += 'Bench Show #'+(i+1).toString()+'<br><select id="'+i.toString()+'">'+my_innerhtml+'</select><br>';
	}
	document.getElementById('selections_div').innerhtml = my_html;
	console.log(my_html);
}
*/