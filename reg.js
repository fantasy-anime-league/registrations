var show_dict = {
	38670:"Actors: Songs Connection",
	39590:"Africa no Salaryman (TV)",
	37403:"Ahiru no Sora",
	39959:"Ani ni Tsukeru Kusuri wa Nai! 3",
	38572:"Assassins Pride",
	38328:"Azur Lane",
	37525:"Babylon",
	39195:"Beastars",
	40004:"Bokutachi wa Benkyou ga Dekinai 2",
	37379:"Chihayafuru 3",
	39523:"Choujin Koukousei-tachi wa Isekai demo Yoyuu de Ik",
	38390:"Chuubyou Gekihatsu Boy",
	39811:"Fairy Gone 2nd Season",
	38084:"Fate/Grand Order: Zettai Majuu Sensen Babylonia",
	36587:"Granblue Fantasy The Animation Season 2",
	39030:"Hataage! Kemono Michi",
	39570:"High Score Girl II",
	39468:"Honzuki no Gekokujou: Shisho ni Naru Tame ni wa Sh",
	37972:"Hoshiai no Sora",
	38276:"Houkago Saikoro Club",
	40196:"Kandagawa Jet Girls",
	39567:"Keishichou Tokumubu Tokushu Kyouakuhan Taisakushit",
	38889:"Kono Oto Tomare! 2nd Season",
	39196:"Mairimashita! Iruma-kun",
	39701:"Nanatsu no Taizai: Kamigami no Gekirin",
	39539:"No Guns Life",
	40178:"Null Peta",
	38483:"Ore wo Suki nano wa Omae dake ka yo",
	37522:"Pet",
	39506:"Phantasy Star Online 2: Episode Oracle",
	39491:"Psycho-Pass 3",
	39355:"Radiant 2nd Season",
	38529:"Rifle Is Beautiful",
	38659:"Shinchou Yuusha: Kono Yuusha ga Ore Tueee Kuse ni Shinchou Sugiru",
	39940:"Shokugeki no Souma: Shin no Sara",
	38331:"Stand My Heroes: Piece of Truth",
	39799:"Val x Love",
	37393:"Watashi, Nouryoku wa Heikinchi de tte Itta yo ne!",
	40254:"XL Joushi.",
	37268:"Z/X: Code Reunion"
}
var order_array = [
	38670,
	39590,
	37403,
	39959,
	38572,
	38328,
	37525,
	39195,
	40004,
	37379,
	39523,
	38390,
	39811,
	38084,
	36587,
	39030,
	39570,
	39468,
	37972,
	38276,
	40196,
	39567,
	38889,
	39196,
	39701,
	39539,
	40178,
	38483,
	37522,
	39506,
	39491,
	39355,
	38529,
	38659,
	39940,
	38331,
	39799,
	37393,
	40254,
	37268
]

$(document).ready(function(){
	var username = '';
	$('#code_btn').click(function(){
		document.getElementById("username_input").disabled = true;
		document.getElementById("code_btn").disabled = true;

		username = document.getElementById('username_input').value.toLowerCase();
		if (username == ''){
			alert('Username cannot be blank.');
			return;
		}
		$.ajax({url: "reg.php?func=get_code&username="+username,
			success: function(response){
     			if(response == 'username invalid'){
    				alert('Username invalid. Please try again.');
    				document.getElementById("username_input").disabled = false;
					document.getElementById("code_btn").disabled = false;
    				return;
    			}
    			document.getElementById('code').innerHTML = response;
				document.getElementById('code_div').style.display='block';
				document.getElementById('register_btn').style.display='block';
				document.getElementById('selections_div').style.display='block';
        	}
    	})
	})
	$('#register_btn').click(function(){
		document.getElementById('register_btn').disabled = true;
		var my_data = [];
		for(var i = 0; i<7; i++){
			my_data.push(parseInt($('#'+i.toString()).val()));
		}
		console.log(my_data);

		$.ajax({
			url: 'reg.php',
			type: 'POST',
			data: {func: 'check_code', username: username, team_data: my_data},
			success: function(response){
				if (response == 'auth invalid'){
					alert ('Could not validate your username. Please verify that the code was copied correctly.');
				}
				else if (response == 'invalid dupes'){
					alert ('You have one or more duplicate titles on your submitted team. Please correct your team and try again.');
				}
				else if (response == 'invalid restrict'){
					alert ('You have multiple restricted sequels on your submitted team. You may only choose one of them. Please correct your team and try again.');
				}
				else if (response == 'success'){
					alert ('Your team has been successfully submitted. Returning to start...');
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