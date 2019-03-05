var show_dict = {37561: "Akanesasu Shoujo",37206: "Anima Yell!",37584: "Bakumatsu",37716: "Beelzebub-jou no Okinimesu mama.",37823: "Conception",37597: "Dakaretai Otoko 1-i ni Odosarete Imasu.",37496: "Double Decker! Doug & Kirill",36317: "Gaikotsu Shotenin Honda-san",37657: "Gakuen Basara",37989: "Golden Kamuy 2nd Season",37490: "Gyakuten Saiban: Sono \"Shinjitsu\", Igi Ari! Season 2",37555: "Hangyakusei Million Arthur",36945: "Himote House",37007: "Hinomaruzumou",37497: "Irozuku Sekai no Ashita kara",37992: "Jingai-san no Yome",37991: "Jojo no Kimyou na Bouken: Ougon no Kaze",37447: "Karakuri Circus",37965: "Kaze ga Tsuyoku Fuiteiru",37475: "Kishuku Gakkou no Juliet",37232: "Merc Storia: Mukiryoku no Shounen to Bin no Naka no Shoujo",36632: "Ore ga Suki nano wa Imouto dakedo Imouto ja Nai",37202: "Radiant",37221: "Release the Spyce",35835: "RErideD: Tokigoe no Derrida",37450: "Seishun Buta Yarou wa Bunny Girl Senpai no Yume wo Minai",36037: "Senran Kagura: Shinovi Master - Tokyo Youma-hen",36000: "Sora to Umi no Aida",35847: "SSSS.Gridman",37430: "Tensei shitara Slime Datta Ken",36432: "Toaru Majutsu no Index III",37579: "Tonari no Kyuuketsuki-san",36653: "Tsurune: Kazemai Koukou Kyuudoubu",37722: "Uchi no Maid ga Uzasugiru!",36510: "Ulysses: Jehanne Darc to Renkin no Kishi",37786: "Yagate Kimi ni Naru",37976: "Zombieland Saga"}
var order_array = [37561,37206,37584,37716,37823,37597,37496,36317,37657,37989,37490,37555,36945,37007,37497,37992,37991,37447,37965,37475,37232,36632,37202,37221,35835,37450,36037,36000,35847,37430,36432,37579,36653,37722,36510,37786,37976]

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