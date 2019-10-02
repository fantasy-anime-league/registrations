my_str = """Actors: Songs Connection	38670
Africa no Salaryman (TV)	39590
Ahiru no Sora	37403
Ani ni Tsukeru Kusuri wa Nai! 3	39959
Assassins Pride	38592
Azur Lane	38328
Babylon	37525
Beastars	39195
Bokutachi wa Benkyou ga Dekinai 2	40004
Chihayafuru 3	37379
Choujin Koukousei-tachi wa Isekai demo Yoyuu de Ikinuku you desu!	39523
Chuubyou Gekihatsu Boy	38390
Fairy Gone 2nd Season	39811
Fate/Grand Order: Zettai Majuu Sensen Babylonia	38084
Granblue Fantasy The Animation Season 2	36587
Hataage! Kemono Michi	39030
High Score Girl II	39570
Honzuki no Gekokujou: Shisho ni Naru Tame ni wa Shudan wo Erandeiraremasen	39468
Hoshiai no Sora	37972
Houkago Saikoro Club	38276
Kabukichou Sherlock	38161
Kandagawa Jet Girls	40196
Keishichou Tokumubu Tokushu Kyouakuhan Taisakushitsu Dainanaka: Tokunana	39567
Kono Oto Tomare! 2nd Season	38889
Mairimashita! Iruma-kun	39196
Nanatsu no Taizai: Kamigami no Gekirin	39701
No Guns Life	39539
Null Peta	40178
Ore wo Suki nano wa Omae dake ka yo	38483
Pet	37522
Phantasy Star Online 2: Episode Oracle	39506
Psycho-Pass 3	39491
Radiant 2nd Season	39355
Rifle Is Beautiful	38529
Shinchou Yuusha: Kono Yuusha ga Ore Tueee Kuse ni Shinchou Sugiru	38659
Shokugeki no Souma: Shin no Sara	39940
Stand My Heroes: Piece of Truth	38331
Val x Love	39799
Watashi, Nouryoku wa Heikinchi de tte Itta yo ne!	37393
XL Joushi.	40254
Z/X: Code Reunion	37268"""

my_dict_str="{"
for line in my_str.splitlines():
    an_id = line[-5:]
    my_dict_str += an_id + ": "
    title = line[0:-6]
    my_dict_str += "\""+ title +"\","


#print my_dict_str

my_new_str = ""
for line in my_str.splitlines():
    an_id = line[-5:]
    my_new_str += an_id +','

#print my_new_str

my_html_str = ""
for line in my_str.splitlines():
	an_id = line[-5:]
	title = line[0:-6]
	print "<option value='" + an_id + "'>" + title + "</option>"