from os import listdir
from os.path import isfile, join
import urllib.request
import re

show_dict = {39337: "Araiya-san!: Ore to Aitsu ga Onnayu de!?",38860: "Bakumatsu: Crisis",38186: "Bokutachi wa Benkyou ga Dekinai",37435: "Carole & Tuesday",38226: "Chou Kadou Girl ⅙: Amazing Stranger",38731: "Diamond no Ace: Act II",39063: "Fairy Gone",37806: "Gunjou no Magmel",38091: "Hachigatsu no Cinderella Nine",38268: "Hangyakusei Million Arthur 2nd Season",37614: "Hitoribocchi no ○○ Seikatsu",38295: "Joshikausei",38161: "Kabukichou Sherlock",36407: "Kenja no Mago",38000: "Kimetsu no Yaiba",38080: "Kono Oto Tomare!",34620: "Kono Yo no Hate de Koi wo Utau Shoujo YU-NO",37964: "Mayonaka no Occult Koumuin",38778: "Midara na Ao-chan wa Benkyou ga Dekinai",38098: "Mix: Meisei Story",38150: "Namu Amida Butsu!: Rendai Utena",38397: "Nande Koko ni Sensei ga!?",38814: "Nobunaga-sensei no Osanazuma",38707: "RobiHachi",37426: "Sarazanmai",38787: "Senryuu Shoujo",38759: "Sewayaki Kitsune no Senko-san",37952: "Shoumetsu Toshi",38004: "World Witches Series: 501-butai Hasshin Shimasu!",37940: "Yatogame-chan Kansatsu Nikki"}


files = [f for f in listdir('fal_data') if isfile(join('fal_data', f))]

for file in files:
	contents=''
	with open('fal_data/'+file) as f:
		try:
			for show in f.readlines():
				contents += show_dict[int(show[:-1])]+'\n'
		except Exception as e:
			print(file)

	username = file.split('.txt')[0]
	try:
		page_data = urllib.request.urlopen('https://myanimelist.net/profile/'+username).read().decode('utf-8')
		formatted_username = re.search(r"<title>\n(.*)&#039;s Profile - MyAnimeList.net\n</title>", page_data).group(1)
		#print(formatted_username)
		#print(contents)
		with open('user_list.txt', 'a', encoding='utf-8') as f:
			f.write("Team: " + formatted_username+'\n'+contents+'\n')
	except Exception as e:
		print('ERROR: ' + username + '\n')
		print('Please double check this entry; it may need to be changed manually.')
		with open('user_list.txt', 'a', encoding='utf-8') as f:
			f.write(username+'\n'+contents+'\n')
		pass
		
print (len(files))
