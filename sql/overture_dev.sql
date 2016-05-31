-- Adminer 4.2.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `sections`;
CREATE TABLE `sections` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `content` text NOT NULL,
  `weight` int(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

TRUNCATE `sections`;
INSERT INTO `sections` (`id`, `title`, `content`, `weight`) VALUES
(1,	'Chinese',	'<p>存細像一寿沖愛部答成投有実豊負年察親。好信康格崇真録択世類共強白指別文千明起。天幕香送不田三間受索弁過稼令不規。事善稿今芸督好擬定読木票天小市価旬。中家山説挙米感般断木者陸切唄者樹与高王状。水済介須問州権読街様議索塚。般月図話決改機果影妙面警岸味他省。真万供応合和故丸以外想校質上。絵号指出溟券世出史真球東肉根争動</p>\r\n\r\n<p>館獲期合議俳権違性勝健倉畠人住監及天車摘。映動去判役要最察己第隆台今新。者区藤見農個厳米作手析編子雄辺下相統。投堀短海治千調理官約何国画多。行配決著卒何車画式成雪酸出完掲菅。人米芸入能掲練提視就関世広細始児観都。切福結帯生民平入町製制数幸。堂共動覧題企載積喜仕野京水変将済妥。動追覧力公択科置問重志市病炎入養閉何増典。</p>\r\n\r\n<p>権稿末上東読問院栃方習質辞扱。全信明実瀬著全社優恥釈総聞子盛際。皇統統更現況北望近人際私喪臨活。連海強惑南込並写覧意不宝場能選載。応不禁壊勲務馬彼人相横年津悩時定。民載港強青専究視毎挙交獲詳唄染国複知年軍。香連面供村事前意芸準絵稿元吾相。断治地経斜面限政対憶官船注。夏前掲訴前通井沢事和申寛田著。</p>',	2),
(2,	'Japanese',	'<p>大サラ他城ナヱクヤ会名へ村真ぐけく水医っ予座ハメセア開長目幹んすだ番聞ぎくる生要マハ型同エナ稿応キシイラ伝始く新読関きぱわ合誌困摘んまリし。学ヒサケ経挙ラト境2極ろさ販日96看業ムト重面むっ別室歳つばさ郎冠揺浴譲お。実ヘテ第新道メムヒヌ者校わせ雑売イぜろ禁高ムソツ電食サテ賛伝クスコ古経そトせい放9内決設かざゃ実分ゅ必1毎倶イぎょ。</p>\r\n\r\n<p>酒94載変モカフ動計対ワ向索タエヲヱ図扱ハユ査役ぜ農間天セイツ場雇ノセレエ多読名ラだ械営ウヨ満真払縄クぐがン。陸ろおば評応シイ匿59治モ傷能フ問力メ寿生や一完れどつむ撤認せイよ開天氷もフうし法7江るょそわ負期ゅほぶ准着ノア政西クふずお勢画志挙浦絶たの。種ヱヒニ公広チ著劇わフ校選ぴあこ公発ンみリっ用枠が旅者昨ト初81全ヱネユヨ正声ふうひお査厳68埋詰軟ンゃがめ。</p>\r\n\r\n<p>3礎むく過数ぞくみほ引4展ル文継ホリハシ回祝ニ吸8住伝キヒ蒼演アモシ厳緑ゆ達哉循っゃ。全セロ滋男二ラフヲマ案毅ッ木雄条だル局経アカウノ秀区社家もぱすっ果索ヘニ稿小そド京社うがぶ強毎ぼぐふイ夢設数試の。域せ覧中港をろ上霊字ぞ武水ノ安著あぼ魅民96芸ニ極著ハヲヌ他更トモテ間護誘めひ採日コシ業図ヤ大半もがぎ属理フヲメス和件づルち込端づそ。</p>',	1),
(3,	'Esperanto',	'<p>Li nenia tiaĵo deciliono tri, do veo ekde traigi. Fo hop zepto rilativa adjektiva, iam lipa frida il. Ac certa nelimigita ari, mo aŭ tuta pluen hodiaŭa, ore jota koreo stopi ge. Cit so kies kioma.</p>\r\n\r\n<p>Cit op tera stopi jesigi, plue centimetro antaŭmetado antaŭtagmezo je. Cis oj duto kab\'o sekstiliono, ina aliu elparolo fo. Sia ne trafe kunmetita, et mil milo geedzo. Decimala alternativa nek mf.</p>\r\n\r\n<p>Jen meze veka decilitro it. Pra fo neoficiala disskribado. Ebleco mezurunuo instruitulo tie so, vi devi iele per, dek li tipo titolo elrigardi. Unuj simil nv pro.</p>',	4),
(4,	'Cyrillic',	'<p>Мэль но граэкы альяквюам жкаывола. Аккузата зальютатуж эа векж, ёудико хабымуч компльыктётюр ючю ед. Йн фачтидёе ылаборарэт рыпримёквуы про, нам ед тымпор витюпырата дытыррюизщэт. Нощтыр окюррырэт пожйдонёюм нам ут. Мэль аугюэ зэнтынтиаэ йн. Нэ мэя консэквюат конжыквуюнтюр.</p>\r\n\r\n<p>Харюм рэгяонэ инимёкюж ыам экз. Ут зюаз декам утамюр ыюм, ийжквюы пондэрюм окюррырэт эю мыа, толлйт адепйжкйнг ут еюж. Факэр фачтидёе янжольэнж дуо экз. Фэюгаят партйэндо нэ вим, дёко фабыллас ан хёз. Хаж жольюта вэртырэм нэ, эю лаудым ёнвидюнт мыдиокрым вяш. Диам жкаывола ан нам, ку квюо нобёз апыирёан.</p>\r\n\r\n<p>Ат ыам видэ кхоро. Путант конкльюдатюрквюэ квуй ат, нэ зыд тхэопхражтуз дежпютатионй, ыт рыбюм пэркёпитюр шэа. Эи льюкяльиюч кончэктэтюыр мэль, ад диам дёжкэрэ дэтракто векж, но нощтыр ёнэрмйщ шэа. Кюм ельлюд долорэм рэформйданч ты. Фюйзчыт пхйложопхяа про ку, ийжквюы дэлььынётё лыгэндоч нэ пэр, хаж ад юллюм июварыт. Дуо чэнзэрет рэформйданч ыт.</p>',	3),
(5,	'Standard',	'<p>Lorem ipsum dolor sit amet, id ubique impetus eos. Prima fierent pri id, esse verterem definitionem qui ei, odio minim ut ius. Est at graeci deterruisset, cu nec conceptam intellegebat. Ex adhuc phaedrum vis, ea mei feugiat legendos. Iisque veritus cu nec, eu pri suavitate quaerendum, velit contentiones ne vis.</p>\r\n\r\n<p>Commune consectetuer usu ut, nisl graeci delenit eu nec. Dicam legere pri cu. No oratio dictas aliquam vel. Cibo dolore ullamcorper id eos, partem honestatis at vim.</p>\r\n\r\n<p>Ex tantas oporteat qui. Eu falli vitae gloriatur sit, in ius ridens nonumes. An mei omnium scaevola molestiae, mei ut essent diceret perpetua. Eius nostro tibique cu ius, at cum solum bonorum adipiscing.</p>',	0);

-- 2016-05-31 04:04:45
