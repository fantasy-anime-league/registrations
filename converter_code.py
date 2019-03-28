my_str = """Araiya-san!: Ore to Aitsu ga Onnayu de!?	39337
Bakumatsu: Crisis	38860
Bokutachi wa Benkyou ga Dekinai	38186
Carole & Tuesday	37435
Chou Kadou Girl ⅙: Amazing Stranger	38226
Diamond no Ace: Act II	38731
Fairy Gone	39063
Gunjou no Magmel	37806
Hachigatsu no Cinderella Nine	38091
Hangyakusei Million Arthur 2nd Season	38268
Hitoribocchi no ○○ Seikatsu	37614
Joshikausei	38295
Kabukichou Sherlock	38161
Kenja no Mago	36407
Kimetsu no Yaiba	38000
Kono Oto Tomare!	38080
Kono Yo no Hate de Koi wo Utau Shoujo YU-NO	34620
Mayonaka no Occult Koumuin	37964
Midara na Ao-chan wa Benkyou ga Dekinai	38778
Mix: Meisei Story	38098
Namu Amida Butsu!: Rendai Utena	38150
Nande Koko ni Sensei ga!?	38397
Nobunaga-sensei no Osanazuma	38814
RobiHachi	38707
Sarazanmai	37426
Senryuu Shoujo	38787
Sewayaki Kitsune no Senko-san	38759
Shoumetsu Toshi	37952
World Witches Series: 501-butai Hasshin Shimasu!	38004
Yatogame-chan Kansatsu Nikki	37940"""

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