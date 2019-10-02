from os import listdir
from os.path import isfile, join
import urllib.request
import re

show_dict = {
	38670: "Actors: Songs Connection",
	39590: "Africa no Salaryman (TV)",
	37403: "Ahiru no Sora",
	39959: "Ani ni Tsukeru Kusuri wa Nai! 3",
	38572: "Assassins Pride",
	38328: "Azur Lane",
	37525: "Babylon",
	39195: "Beastars",
	40004: "Bokutachi wa Benkyou ga Dekinai 2",
	37379: "Chihayafuru 3",
	39523: "Choujin Koukousei-tachi wa Isekai demo Yoyuu de Ik",
	38390: "Chuubyou Gekihatsu Boy",
	39811: "Fairy Gone 2nd Season",
	38084: "Fate/Grand Order: Zettai Majuu Sensen Babylonia",
	36587: "Granblue Fantasy The Animation Season 2",
	39030: "Hataage! Kemono Michi",
	39570: "High Score Girl II",
	39468: "Honzuki no Gekokujou: Shisho ni Naru Tame ni wa Sh",
	37972: "Hoshiai no Sora",
	38276: "Houkago Saikoro Club",
	38161: "Kabukichou Sherlock",
	40196: "Kandagawa Jet Girls",
	39567: "Keishichou Tokumubu Tokushu Kyouakuhan Taisakushit",
	38889: "Kono Oto Tomare! 2nd Season",
	39196: "Mairimashita! Iruma-kun",
	39701: "Nanatsu no Taizai: Kamigami no Gekirin",
	39539: "No Guns Life",
	40178: "Null Peta",
	38483: "Ore wo Suki nano wa Omae dake ka yo",
	37522: "Pet",
	39506: "Phantasy Star Online 2: Episode Oracle",
	39491: "Psycho-Pass 3",
	39355: "Radiant 2nd Season",
	38529: "Rifle Is Beautiful",
	38659: "Shinchou Yuusha: Kono Yuusha ga Ore Tueee Kuse ni Shinchou Sugiru",
	39940: "Shokugeki no Souma: Shin no Sara",
	38331: "Stand My Heroes: Piece of Truth",
	39799: "Val x Love",
	37393: "Watashi, Nouryoku wa Heikinchi de tte Itta yo ne!",
	40254: "XL Joushi.",
	37268: "Z/X: Code Reunion"
}

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
