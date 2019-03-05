my_str = """Akanesasu Shoujo 37561
Anima Yell! 37206
Bakumatsu 37584
Beelzebub-jou no Okinimesu mama. 37716
Conception 37823
Dakaretai Otoko 1-i ni Odosarete Imasu. 37597
Double Decker! Doug & Kirill 37496
Gaikotsu Shotenin Honda-san 36317
Gakuen Basara 37657
Golden Kamuy 2nd Season 37989
Gyakuten Saiban: Sono \"Shinjitsu\", Igi Ari! Season 2 37490
Hangyakusei Million Arthur 37555
Himote House 36945
Hinomaruzumou 37007
Irozuku Sekai no Ashita kara 37497
Jingai-san no Yome 37992
Jojo no Kimyou na Bouken: Ougon no Kaze 37991
Karakuri Circus 37447
Kaze ga Tsuyoku Fuiteiru 37965
Kishuku Gakkou no Juliet 37475
Merc Storia: Mukiryoku no Shounen to Bin no Naka no Shoujo 37232
Ore ga Suki nano wa Imouto dakedo Imouto ja Nai 36632
Radiant 37202
Release the Spyce 37221
RErideD: Tokigoe no Derrida 35835
Seishun Buta Yarou wa Bunny Girl Senpai no Yume wo Minai 37450
Senran Kagura: Shinovi Master - Tokyo Youma-hen 36037
Sora to Umi no Aida 36000
SSSS.Gridman 35847
Tensei shitara Slime Datta Ken 37430
Toaru Majutsu no Index III 36432
Tonari no Kyuuketsuki-san 37579
Tsurune: Kazemai Koukou Kyuudoubu 36653
Uchi no Maid ga Uzasugiru! 37722
Ulysses: Jehanne Darc to Renkin no Kishi 36510
Yagate Kimi ni Naru 37786
Zombieland Saga 37976"""

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
    
print my_new_str
    