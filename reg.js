var show_dict = {39337: "Araiya-san!: Ore to Aitsu ga Onnayu de!?",38860: "Bakumatsu: Crisis",38186: "Bokutachi wa Benkyou ga Dekinai",37435: "Carole & Tuesday",38226: "Chou Kadou Girl ⅙: Amazing Stranger",38731: "Diamond no Ace: Act II",39063: "Fairy Gone",37806: "Gunjou no Magmel",38091: "Hachigatsu no Cinderella Nine",38268: "Hangyakusei Million Arthur 2nd Season",37614: "Hitoribocchi no ○○ Seikatsu",38295: "Joshikausei",38161: "Kabukichou Sherlock",36407: "Kenja no Mago",38000: "Kimetsu no Yaiba",38080: "Kono Oto Tomare!",34620: "Kono Yo no Hate de Koi wo Utau Shoujo YU-NO",37964: "Mayonaka no Occult Koumuin",38778: "Midara na Ao-chan wa Benkyou ga Dekinai",38098: "Mix: Meisei Story",38150: "Namu Amida Butsu!: Rendai Utena",38397: "Nande Koko ni Sensei ga!?",38814: "Nobunaga-sensei no Osanazuma",38707: "RobiHachi",37426: "Sarazanmai",38787: "Senryuu Shoujo",38759: "Sewayaki Kitsune no Senko-san",37952: "Shoumetsu Toshi",38004: "World Witches Series: 501-butai Hasshin Shimasu!",37940: "Yatogame-chan Kansatsu Nikki"}
var order_array = [39337,38860,38186,37435,38226,38731,39063,37806,38091,38268,37614,38295,38161,36407,38000,38080,34620,37964,38778,38098,38150,38397,38814,38707,37426,38787,38759,37952,38004,37940]

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
					alert ('You have both "Jojo no Kimyou na Bouken: Ougon no Kaze" and "Toaru Majutsu no Index III" on your submitted team. You may only choose one of them. Please correct your team and try again.');
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