<?php

namespace Database\Seeders;

use App\Models\Citie; 
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Citie::insert([
            ['id' => 1, 'name' => 'Aïn Harrouda'],
            ['id' => 2, 'name' => 'Ben Yakhlf'],
            ['id' => 3, 'name' => 'Bouskoura'],
            ['id' => 4, 'name' => 'Casablanca'],
            ['id' => 5, 'name' => 'Médiouna'],
            ['id' => 6, 'name' => 'Mohammadia'],
            ['id' => 7, 'name' => 'Tit Mellil'],
            ['id' => 8, 'name' => 'Ben Yakhlef'],
            ['id' => 9, 'name' => 'Bejaâd'],
            ['id' => 10, 'name' => 'Ben Ahmed'],
            ['id' => 11, 'name' => 'Benslimane'],
            ['id' => 12, 'name' => 'Berrechid'],
            ['id' => 13, 'name' => 'Boujniba'],
            ['id' => 14, 'name' => 'Boulanouare'],
            ['id' => 15, 'name' => 'Bouznika'],
            ['id' => 16, 'name' => 'Deroua'],
            ['id' => 17, 'name' => 'El Borouj'],
            ['id' => 18, 'name' => 'El Gara'],
            ['id' => 19, 'name' => 'Guisser'],
            ['id' => 20, 'name' => 'Hattane'],
            ['id' => 21, 'name' => 'Khouribga'],
            ['id' => 22, 'name' => 'Loulad'],
            ['id' => 23, 'name' => 'Oued Zem'],
            ['id' => 24, 'name' => 'Oulad Abbou'],
            ['id' => 25, 'name' => 'Oulad HRiz Sahel'],
            ['id' => 26, 'name' => 'Oulad Mrah'],
            ['id' => 27, 'name' => 'Oulad Saïd'],
            ['id' => 28, 'name' => 'Oulad Sidi Ben Daoud'],
            ['id' => 29, 'name' => 'Ras El Aïn'],
            ['id' => 30, 'name' => 'Settat'],
            ['id' => 31, 'name' => 'Sidi Rahhal Chataï'],
            ['id' => 32, 'name' => 'Soualem'],
            ['id' => 33, 'name' => 'Azemmour'],
            ['id' => 34, 'name' => 'Bir Jdid'],
            ['id' => 35, 'name' => 'Bouguedra'],
            ['id' => 36, 'name' => 'Echemmaia'],
            ['id' => 37, 'name' => 'El Jadida'],
            ['id' => 38, 'name' => 'Hrara'],
            ['id' => 39, 'name' => 'Ighoud'],
            ['id' => 40, 'name' => 'Jamâat Shaim'],
            ['id' => 41, 'name' => 'Jorf Lasfar'],
            ['id' => 42, 'name' => 'Khemis Zemamra'],
            ['id' => 43, 'name' => 'Laaounate'],
            ['id' => 44, 'name' => 'Moulay Abdallah'],
            ['id' => 45, 'name' => 'Oualidia'],
            ['id' => 46, 'name' => 'Oulad Amrane'],
            ['id' => 47, 'name' => 'Oulad Frej'],
            ['id' => 48, 'name' => 'Oulad Ghadbane'],
            ['id' => 49, 'name' => 'Safi'],
            ['id' => 50, 'name' => 'Sebt El Maârif'],
            ['id' => 51, 'name' => 'Sebt Gzoula'],
            ['id' => 52, 'name' => 'Sidi Ahmed'],
            ['id' => 53, 'name' => 'Sidi Ali Ban Hamdouche'],
            ['id' => 54, 'name' => 'Sidi Bennour'],
            ['id' => 55, 'name' => 'Sidi Bouzid'],
            ['id' => 56, 'name' => 'Sidi Smaïl'],
            ['id' => 57, 'name' => 'Youssoufia'],
            ['id' => 58, 'name' => 'Fès'],
            ['id' => 59, 'name' => 'Aïn Cheggag'],
            ['id' => 60, 'name' => 'Bhalil'],
            ['id' => 61, 'name' => 'Boulemane'],
            ['id' => 62, 'name' => 'El Menzel'],
            ['id' => 63, 'name' => 'Guigou'],
            ['id' => 64, 'name' => 'Imouzzer Kandar'],
            ['id' => 65, 'name' => 'Imouzzer Marmoucha'],
            ['id' => 66, 'name' => 'Missour'],
            ['id' => 67, 'name' => 'Moulay Yaâcoub'],
            ['id' => 68, 'name' => 'Ouled Tayeb'],
            ['id' => 69, 'name' => 'Outat El Haj'],
            ['id' => 70, 'name' => 'Ribate El Kheir'],
            ['id' => 71, 'name' => 'Séfrou'],
            ['id' => 72, 'name' => 'Skhinate'],
            ['id' => 73, 'name' => 'Tafajight'],
            ['id' => 74, 'name' => 'Arbaoua'],
            ['id' => 75, 'name' => 'Aïn Dorij'],
            ['id' => 76, 'name' => 'Dar Gueddari'],
            ['id' => 77, 'name' => 'Had Kourt'],
            ['id' => 78, 'name' => 'Jorf El Melha'],
            ['id' => 79, 'name' => 'Kénitra'],
            ['id' => 80, 'name' => 'Khenichet'],
            ['id' => 81, 'name' => 'Lalla Mimouna'],
            ['id' => 82, 'name' => 'Mechra Bel Ksiri'],
            ['id' => 83, 'name' => 'Mehdia'],
            ['id' => 84, 'name' => 'Moulay Bousselham'],
            ['id' => 85, 'name' => 'Sidi Allal Tazi'],
            ['id' => 86, 'name' => 'Sidi Kacem'],
            ['id' => 87, 'name' => 'Sidi Slimane'],
            ['id' => 88, 'name' => 'Sidi Taibi'],
            ['id' => 89, 'name' => 'Sidi Yahya El Gharb'],
            ['id' => 90, 'name' => 'Souk El Arbaa'],
            ['id' => 91, 'name' => 'Akka'],
            ['id' => 92, 'name' => 'Assa'],
            ['id' => 93, 'name' => 'Bouizakarne'],
            ['id' => 94, 'name' => 'El Ouatia'],
            ['id' => 95, 'name' => 'Es-Semara'],
            ['id' => 96, 'name' => 'Fam El Hisn'],
            ['id' => 97, 'name' => 'Foum Zguid'],
            ['id' => 98, 'name' => 'Guelmim'],
            ['id' => 99, 'name' => 'Taghjijt'],
            ['id' => 100, 'name' => 'Tan-Tan'],
            ['id' => 101, 'name' => 'Tata'],
            ['id' => 102, 'name' => 'Zag'],
            ['id' => 103, 'name' => 'Marrakech'],
            ['id' => 104, 'name' => 'Ait Daoud'],
            ['id' => 115, 'name' => 'Amizmiz'],
            ['id' => 116, 'name' => 'Assahrij'],
            ['id' => 117, 'name' => 'Aït Ourir'],
            ['id' => 118, 'name' => 'Ben Guerir'],
            ['id' => 119, 'name' => 'Chichaoua'],
            ['id' => 120, 'name' => 'El Hanchane'],
            ['id' => 121, 'name' => 'El Kelaâ des Sraghna'],
            ['id' => 122, 'name' => 'Essaouira'],
            ['id' => 123, 'name' => 'Fraïta'],
            ['id' => 124, 'name' => 'Ghmate'],
            ['id' => 125, 'name' => 'Ighounane'],
            ['id' => 126, 'name' => 'Imintanoute'],
            ['id' => 127, 'name' => 'Kattara'],
            ['id' => 128, 'name' => 'Lalla Takerkoust'],
            ['id' => 129, 'name' => 'Loudaya'],
            ['id' => 130, 'name' => 'Lâattaouia'],
            ['id' => 131, 'name' => 'Moulay Brahim'],
            ['id' => 132, 'name' => 'Mzouda'],
            ['id' => 133, 'name' => 'Ounagha'],
            ['id' => 134, 'name' => 'Sid LMokhtar'],
            ['id' => 135, 'name' => 'Sid Zouin'],
            ['id' => 136, 'name' => 'Sidi Abdallah Ghiat'],
            ['id' => 137, 'name' => 'Sidi Bou Othmane'],
            ['id' => 138, 'name' => 'Sidi Rahhal'],
            ['id' => 139, 'name' => 'Skhour Rehamna'],
            ['id' => 140, 'name' => 'Smimou'],
            ['id' => 141, 'name' => 'Tafetachte'],
            ['id' => 142, 'name' => 'Tahannaout'],
            ['id' => 143, 'name' => 'Talmest'],
            ['id' => 144, 'name' => 'Tamallalt'],
            ['id' => 145, 'name' => 'Tamanar'],
            ['id' => 146, 'name' => 'Tamansourt'],
            ['id' => 147, 'name' => 'Tameslouht'],
            ['id' => 148, 'name' => 'Tanalt'],
            ['id' => 149, 'name' => 'Zeubelemok'],
            ['id' => 150, 'name' => 'Meknès'],
            ['id' => 151, 'name' => 'Khénifra'],
            ['id' => 152, 'name' => 'Agourai'],
            ['id' => 153, 'name' => 'Ain Taoujdate'],
            ['id' => 154, 'name' => 'MyAliCherif'],
            ['id' => 155, 'name' => 'Rissani'],
            ['id' => 156, 'name' => 'Amalou Ighriben'],
            ['id' => 157, 'name' => 'Aoufous'],
            ['id' => 158, 'name' => 'Arfoud'],
            ['id' => 159, 'name' => 'Azrou'],
            ['id' => 160, 'name' => 'Aïn Jemaa'],
            ['id' => 161, 'name' => 'Aïn Karma'],
            ['id' => 162, 'name' => 'Aïn Leuh'],
            ['id' => 163, 'name' => 'Aït Boubidmane'],
            ['id' => 164, 'name' => 'Aït Ishaq'],
            ['id' => 165, 'name' => 'Boudnib'],
            ['id' => 166, 'name' => 'Boufakrane'],
            ['id' => 167, 'name' => 'Boumia'],
            ['id' => 168, 'name' => 'El Hajeb'],
            ['id' => 169, 'name' => 'Elkbab'],
            ['id' => 170, 'name' => 'Er-Rich'],
            ['id' => 171, 'name' => 'Errachidia'],
            ['id' => 172, 'name' => 'Gardmit'],
            ['id' => 173, 'name' => 'Goulmima'],
            ['id' => 174, 'name' => 'Gourrama'],
            ['id' => 175, 'name' => 'Had Bouhssoussen'],
            ['id' => 176, 'name' => 'Haj Kaddour'],
            ['id' => 177, 'name' => 'Ifrane'],
            ['id' => 178, 'name' => 'Itzer'],
            ['id' => 179, 'name' => 'Jorf'],
            ['id' => 180, 'name' => 'Kehf Nsour'],
            ['id' => 181, 'name' => 'Kerrouchen'],
            ['id' => 182, 'name' => 'Mhaya'],
            ['id' => 183, 'name' => 'Mrirt'],
            ['id' => 184, 'name' => 'Midelt'],
            ['id' => 185, 'name' => 'Moulay Ali Cherif'],
            ['id' => 186, 'name' => 'Moulay Bouazza'],
            ['id' => 187, 'name' => 'Moulay Idriss Zerhoun'],
            ['id' => 188, 'name' => 'Moussaoua'],
            ['id' => 189, 'name' => 'N\'Zalat Bni Amar'],
            ['id' => 190, 'name' => 'Ouaoumana'],
            ['id' => 191, 'name' => 'Oued Ifrane'],
            ['id' => 192, 'name' => 'Sabaa Aiyoun'],
            ['id' => 193, 'name' => 'Sebt Jahjouh'],
            ['id' => 194, 'name' => 'Sidi Addi'],
            ['id' => 195, 'name' => 'Tichoute'],
            ['id' => 196, 'name' => 'Tighassaline'],
            ['id' => 197, 'name' => 'Tighza'],
            ['id' => 198, 'name' => 'Timahdite'],
            ['id' => 199, 'name' => 'Tinejdad'],
            ['id' => 200, 'name' => 'Tizguite'],
            ['id' => 201, 'name' => 'Toulal'],
            ['id' => 202, 'name' => 'Tounfite'],
            ['id' => 203, 'name' => 'Zaouia d\'Ifrane'],
            ['id' => 204, 'name' => 'Zaïda'],
            ['id' => 205, 'name' => 'Ahfir'],
            ['id' => 206, 'name' => 'Aklim'],
            ['id' => 207, 'name' => 'Al Aroui'],
            ['id' => 208, 'name' => 'Aïn Bni Mathar'],
            ['id' => 209, 'name' => 'Aïn Erreggada'],
            ['id' => 210, 'name' => 'Ben Taïeb'],
            ['id' => 211, 'name' => 'Berkane'],
            ['id' => 212, 'name' => 'Bni Ansar'],
            ['id' => 213, 'name' => 'Bni Chiker'],
            ['id' => 214, 'name' => 'Bni Drar'],
            ['id' => 215, 'name' => 'Bni Tadjite'],
            ['id' => 216, 'name' => 'Bouanane'],
            ['id' => 217, 'name' => 'Bouarfa'],
            ['id' => 218, 'name' => 'Bouhdila'],
            ['id' => 219, 'name' => 'Dar El Kebdani'],
            ['id' => 220, 'name' => 'Debdou'],
            ['id' => 221, 'name' => 'Douar Kannine'],
            ['id' => 222, 'name' => 'Driouch'],
            ['id' => 223, 'name' => 'El Aïoun Sidi Mellouk'],
            ['id' => 224, 'name' => 'Farkhana'],
            ['id' => 225, 'name' => 'Figuig'],
            ['id' => 226, 'name' => 'Ihddaden'],
            ['id' => 227, 'name' => 'Jaâdar'],
            ['id' => 228, 'name' => 'Jerada'],
            ['id' => 229, 'name' => 'Kariat Arekmane'],
            ['id' => 230, 'name' => 'Kassita'],
            ['id' => 231, 'name' => 'Kerouna'],
            ['id' => 232, 'name' => 'Laâtamna'],
            ['id' => 233, 'name' => 'Madagh'],
            ['id' => 234, 'name' => 'Midar'],
            ['id' => 235, 'name' => 'Nador'],
            ['id' => 236, 'name' => 'Naima'],
            ['id' => 237, 'name' => 'Oued Heimer'],
            ['id' => 238, 'name' => 'Oujda'],
            ['id' => 239, 'name' => 'Ras El Ma'],
            ['id' => 240, 'name' => 'Saïdia'],
            ['id' => 241, 'name' => 'Selouane'],
            ['id' => 242, 'name' => 'Sidi Boubker'],
            ['id' => 243, 'name' => 'Sidi Slimane Echcharaa'],
            ['id' => 244, 'name' => 'Talsint'],
            ['id' => 245, 'name' => 'Taourirt'],
            ['id' => 246, 'name' => 'Tendrara'],
            ['id' => 247, 'name' => 'Tiztoutine'],
            ['id' => 248, 'name' => 'Touima'],
            ['id' => 249, 'name' => 'Touissit'],
            ['id' => 250, 'name' => 'Zaïo'],
            ['id' => 251, 'name' => 'Zeghanghane'],
            ['id' => 252, 'name' => 'Rabat'],
            ['id' => 253, 'name' => 'Salé'],
            ['id' => 254, 'name' => 'Ain El Aouda'],
            ['id' => 255, 'name' => 'Harhoura'],
            ['id' => 256, 'name' => 'Khémisset'],
            ['id' => 257, 'name' => 'Oulmès'],
            ['id' => 258, 'name' => 'Rommani'],
            ['id' => 259, 'name' => 'Sidi Allal El Bahraoui'],
            ['id' => 260, 'name' => 'Sidi Bouknadel'],
            ['id' => 261, 'name' => 'Skhirate'],
            ['id' => 262, 'name' => 'Tamesna'],
            ['id' => 263, 'name' => 'Témara'],
            ['id' => 264, 'name' => 'Tiddas'],
            ['id' => 265, 'name' => 'Tiflet'],
            ['id' => 266, 'name' => 'Touarga'],
            ['id' => 267, 'name' => 'Agadir'],
            ['id' => 268, 'name' => 'Agdz'],
            ['id' => 269, 'name' => 'Agni Izimmer'],
            ['id' => 270, 'name' => 'Aït Melloul'],
            ['id' => 271, 'name' => 'Alnif'],
            ['id' => 272, 'name' => 'Anzi'],
            ['id' => 273, 'name' => 'Aoulouz'],
            ['id' => 274, 'name' => 'Aourir'],
            ['id' => 275, 'name' => 'Arazane'],
            ['id' => 276, 'name' => 'Aït Baha'],
            ['id' => 277, 'name' => 'Aït Iaâza'],
            ['id' => 278, 'name' => 'Aït Yalla'],
            ['id' => 279, 'name' => 'Ben Sergao'],
            ['id' => 280, 'name' => 'Biougra'],
            ['id' => 281, 'name' => 'Boumalne-Dadès'],
            ['id' => 282, 'name' => 'Dcheira El Jihadia'],
            ['id' => 283, 'name' => 'Drargua'],
            ['id' => 284, 'name' => 'El Guerdane'],
            ['id' => 285, 'name' => 'Harte Lyamine'],
            ['id' => 286, 'name' => 'Ida Ougnidif'],
            ['id' => 287, 'name' => 'Ifri'],
            ['id' => 288, 'name' => 'Igdamen'],
            ['id' => 289, 'name' => 'Ighil n\'Oumgoun'],
            ['id' => 290, 'name' => 'Imassine'],
            ['id' => 291, 'name' => 'Inezgane'],
            ['id' => 292, 'name' => 'Irherm'],
            ['id' => 293, 'name' => 'Kelaat-M\'Gouna'],
            ['id' => 294, 'name' => 'Lakhsas'],
            ['id' => 295, 'name' => 'Lakhsass'],
            ['id' => 296, 'name' => 'Lqliâa'],
            ['id' => 297, 'name' => 'M\'semrir'],
            ['id' => 298, 'name' => 'Massa (Ma)'],
            ['id' => 299, 'name' => 'Megousse'],
            ['id' => 300, 'name' => 'Ouarzazate'],
            ['id' => 301, 'name' => 'Oulad Berhil'],
            ['id' => 302, 'name' => 'Oulad Teïma'],
            ['id' => 303, 'name' => 'Sarghine'],
            ['id' => 304, 'name' => 'Sidi Ifni'],
            ['id' => 305, 'name' => 'Skoura'],
            ['id' => 306, 'name' => 'Tabounte'],
            ['id' => 307, 'name' => 'Tafraout'],
            ['id' => 308, 'name' => 'Taghzout'],
            ['id' => 309, 'name' => 'Tagzen'],
            ['id' => 310, 'name' => 'Taliouine'],
            ['id' => 311, 'name' => 'Tamegroute'],
            ['id' => 312, 'name' => 'Tamraght'],
            ['id' => 313, 'name' => 'Tanoumrite Nkob Zagora'],
            ['id' => 314, 'name' => 'Taourirt ait zaghar'],
            ['id' => 315, 'name' => 'Taroudannt'],
            ['id' => 316, 'name' => 'Temsia'],
            ['id' => 317, 'name' => 'Tifnit'],
            ['id' => 318, 'name' => 'Tisgdal'],
            ['id' => 319, 'name' => 'Tiznit'],
            ['id' => 320, 'name' => 'Toundoute'],
            ['id' => 321, 'name' => 'Zagora'],
            ['id' => 322, 'name' => 'Afourar'],
            ['id' => 323, 'name' => 'Aghbala'],
            ['id' => 324, 'name' => 'Azilal'],
            ['id' => 325, 'name' => 'Aït Majden'],
            ['id' => 326, 'name' => 'Beni Ayat'],
            ['id' => 327, 'name' => 'Béni Mellal'],
            ['id' => 328, 'name' => 'Bin elouidane'],
            ['id' => 329, 'name' => 'Bradia'],
            ['id' => 330, 'name' => 'Bzou'],
            ['id' => 331, 'name' => 'Dar Oulad Zidouh'],
            ['id' => 332, 'name' => 'Demnate'],
            ['id' => 333, 'name' => 'Dra\'a'],
            ['id' => 334, 'name' => 'El Ksiba'],
            ['id' => 335, 'name' => 'Foum Jamaa'],
            ['id' => 336, 'name' => 'Fquih Ben Salah'],
            ['id' => 337, 'name' => 'Kasba Tadla'],
            ['id' => 338, 'name' => 'Ouaouizeght'],
            ['id' => 339, 'name' => 'Oulad Ayad'],
            ['id' => 340, 'name' => 'Oulad M\'Barek'],
            ['id' => 341, 'name' => 'Oulad Yaich'],
            ['id' => 342, 'name' => 'Sidi Jaber'],
            ['id' => 343, 'name' => 'Souk Sebt Oulad Nemma'],
            ['id' => 344, 'name' => 'Zaouïat Cheikh'],
            ['id' => 345, 'name' => 'Tanger'],
            ['id' => 346, 'name' => 'Tétouan'],
            ['id' => 347, 'name' => 'Akchour'],
            ['id' => 348, 'name' => 'Assilah'],
            ['id' => 349, 'name' => 'Bab Berred'],
            ['id' => 350, 'name' => 'Bab Taza'],
            ['id' => 351, 'name' => 'Brikcha'],
            ['id' => 352, 'name' => 'Chefchaouen'],
            ['id' => 353, 'name' => 'Dar Bni Karrich'],
            ['id' => 354, 'name' => 'Dar Chaoui'],
            ['id' => 355, 'name' => 'Fnideq'],
            ['id' => 356, 'name' => 'Gueznaia'],
            ['id' => 357, 'name' => 'Jebha'],
            ['id' => 358, 'name' => 'Karia'],
            ['id' => 359, 'name' => 'Khémis Sahel'],
            ['id' => 360, 'name' => 'Ksar El Kébir'],
            ['id' => 361, 'name' => 'Larache'],
            ['id' => 362, 'name' => 'M\'diq'],
            ['id' => 363, 'name' => 'Martil'],
            ['id' => 364, 'name' => 'Moqrisset'],
            ['id' => 365, 'name' => 'Oued Laou'],
            ['id' => 366, 'name' => 'Oued Rmel'],
            ['id' => 367, 'name' => 'Ouazzane'],
            ['id' => 368, 'name' => 'Point Cires'],
            ['id' => 369, 'name' => 'Sidi Lyamani'],
            ['id' => 370, 'name' => 'Sidi Mohamed ben Abdallah el-Raisuni'],
            ['id' => 371, 'name' => 'Zinat'],
            ['id' => 372, 'name' => 'Ajdir'],
            ['id' => 373, 'name' => 'Aknoul'],
            ['id' => 374, 'name' => 'Al Hoceïma'],
            ['id' => 375, 'name' => 'Aït Hichem'],
            ['id' => 376, 'name' => 'Bni Bouayach'],
            ['id' => 377, 'name' => 'Bni Hadifa'],
            ['id' => 378, 'name' => 'Ghafsai'],
            ['id' => 379, 'name' => 'Guercif'],
            ['id' => 380, 'name' => 'Imzouren'],
            ['id' => 381, 'name' => 'Inahnahen'],
            ['id' => 382, 'name' => 'Issaguen (Ket)'],
            ['id' => 383, 'name' => 'Karia (El Jad)'],
            ['id' => 384, 'name' => 'Karia Ba Mohamed'],
            ['id' => 385, 'name' => 'Oued Amlil'],
            ['id' => 386, 'name' => 'Oulad Zbair'],
            ['id' => 387, 'name' => 'Tahla'],
            ['id' => 388, 'name' => 'Tala Tazegwaght'],
            ['id' => 389, 'name' => 'Tamassint'],
            ['id' => 390, 'name' => 'Taounate'],
            ['id' => 391, 'name' => 'Targuist'],
            ['id' => 392, 'name' => 'Taza'],
            ['id' => 393, 'name' => 'Taïnaste'],
            ['id' => 394, 'name' => 'Thar Es-Souk'],
            ['id' => 395, 'name' => 'Tissa'],
            ['id' => 396, 'name' => 'Tizi Ouasli'],
            ['id' => 397, 'name' => 'Laayoune,'],
            ['id' => 398, 'name' => 'El Marsa'],
            ['id' => 399, 'name' => 'Tarfaya'],
            ['id' => 400, 'name' => 'Boujdour'],
            ['id' => 401, 'name' => 'Awsard'],
            ['id' => 402, 'name' => 'Oued-Eddahab'],
            ['id' => 403, 'name' => 'Stehat'],
            ['id' => 404, 'name' => 'Aït Attab'],
                            
    ]);
}

    }

