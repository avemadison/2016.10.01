<?php
class Bands
{
    public $bandName = "Стандартное название";
    public $countArtist = 1;
    public $artists = array();
    public $albums = array();
    public static $count = 0;
    public function __construct()
    {
        self::$count += 1;
    }
    public function getBand ($bandName)
    {
        return $this->bandName = $bandName;
    }
}
$band1 = new Bands();
$band1->bandName = "Evanescence";
$band1->countArtist = 5;
$band1->artists = [
    'Эми Ли',
    'Тим Маккорд',
    'Уилл Хант',
    'Трой Маклоухорн',
    'Джен Маджура'
];
$band1->albums = [
    '4 ноября 2000 — Origin',
    '4 марта 2003 — Fallen',
    '3 октября 2006 — The Open Door',
    '11 октября 2011 — Evanescence'
];
$band2 = new Bands();
$band2->bandName = "Iron Maiden";
$band2->countArtist = 6;
$band2->artists = [
    'Стив Харрис',
    'Дэйв Мюррей',
    'Адриан Смит',
    'Брюс Дикинсон',
    'Нико МакБрэйн',
    'Яник Герс'
];
$band2->albums = [
    '1980 — Iron Maiden',
    '1981 — Killers',
    '1982 — The Number of the Beast',
    '1983 — Piece of Mind',
    '1984 — Powerslave',
    '1986 — Somewhere in Time',
    '1988 — Seventh Son of a Seventh Son',
    '1990 — No Prayer for the Dying',
    '1992 — Fear of the Dark',
    '1995 — The X Factor',
    '1998 — Virtual XI',
    '2000 — Brave New World',
    '2003 — Dance of Death',
    '2006 — A Matter of Life and Death',
    '2010 — The Final Frontier',
    '2015 — The Book of Souls'
];
$band3 = new Bands();
$band3->bandName = "Metallica";
$band3->countArtist = 4;
$band3->artists = [
    'Джеймс Хэтфилд',
    'Ларс Ульрих',
    'Кирк Хэмметт',
    'Роберт Трухильо'
];
$band3->albums = [
    "1983 — Kill 'em All",
    '1984 — Ride the Lightning',
    '1986 — Master of Puppets',
    '1988 — …And Justice for All',
    '1991 — Metallica',
    '1996 — Load',
    '1997 — Reload',
    '2003 — St. Anger',
    '2008 — Death Magnetic',
    '2016 — Hardwired...To Self-Destruct'
];
$band4 = new Bands();
$band4->bandName = "Black Sabbath";
$band4->countArtist = 3;
$band4->artists = [
    'Оззи Осборн',
    'Тони Айомми',
    'Гизер Батлер'
];
$band4->albums = [
    'Black Sabbath (1970)',
    'Paranoid (1970)',
    'Master of Reality (1971)',
    'Black Sabbath Vol. 4 (1972)',
    'Sabbath Bloody Sabbath (1973)',
    'Sabotage (1975)',
    'Technical Ecstasy (1976)',
    'Never Say Die! (1978)',
    'Heaven and Hell (1980)',
    'Mob Rules (1981)',
    'Born Again (1983)',
    'Seventh Star (1986)',
    'The Eternal Idol (1987)',
    'Headless Cross (1989)',
    'Tyr (1990)',
    'Dehumanizer (1992)',
    'Cross Purposes (1994)',
    'Forbidden (1995)',
    '13 (2013)'
];
$band5 = new Bands();
$band5->bandName = "Judas Priest";
$band5->countArtist = 5;
$band5->artists = [
    'Йен Хилл',
    'Роб Хэлфорд',
    'Гленн Типтон',
    'Скотт Трэвис',
    'Ричи Фолкнер'
];
$band5->albums = [
    'Rocka Rolla',
    'Sad Wings of Destiny',
    'Sin After Sin',
    'Stained Class',
    'Killing Machine',
    'British Steel',
    'Point of Entry',
    'Screaming for Vengeance',
    'Defenders of the Faith',
    'Turbo',
    'Ram It Down',
    'Painkiller',
    'Jugulator',
    'Demolition',
    'Angel of Retribution',
    'Nostradamus',
    'Redeemer of Souls'
];
