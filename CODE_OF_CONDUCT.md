/* USHBU KOD @YALQOVKODER tomonidan tuzilgan tayyor nakrutka bot kodi.Manbaga kut bulsa tegishaver*/

<?php
ob_start();
error_reporting(0);
define('API_KEY','7501779977:AAE-_kCOWZ1jzuBo3PxHcU48UAp-GVdU8gw');  //bot tokeni
$key="59053925a26fd32abd3d9d788e792dbfa"; //api key $sayt saytidan olamz
$admin = "7935543836";

$botname = bot('oksms',['bot'])->result->username;
function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
 curl_setopt($ch,CURLOPT_URL,$url);
 curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
 curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
 $res = curl_exec($ch);
 if(curl_error($ch)){
  var_dump(curl_error($ch));
 }else{
  return json_decode($res);
}
}

$update = json_decode(file_get_contents("php://input"));
$callname = $update->callback_query->from->first_name;
$message = $update->message;
$chat_id = $message->chat->id;
$cid = $message->chat->id;
$mid = $message->message_id;
$text = $message->text;  
$tx = $message->text;  
$callname = $update->callback_query->from->first_name;
$calluser = $update->callback_query->from->username;
$qid = $update->callback_query->id;
$firstname = $message->chat->first_name;
$lastname = $message->chat->last_name;
$uid= $message->from->id;
$dminuser="ADMIN_USER";
$callcid = $update->callback_query->message->chat->id;
$data = $update->callback_query->data;
$callmid = $update->callback_query->message->message_id;  
$mes_idi = $update->callback_query->message->message_id;  
$from_id = $update->callback_query->from->id;
$nameuz = "<a href='tg://user?id=$callfrid'>$callname $surname</a>";

$step = file_get_contents('step/$chat_id.txt');
$type = $message->chat->type;
mkdir("pul");
mkdir("ref");
mkdir("stat");
mkdir("admin");
$ssilka=file_get_contents("nakrutka/$chat_id.txt");
$samandar= file_get_contents("stat/$chat_id.step");
$step=file_get_contents("step/$chat_id.txt");
$pul = file_get_contents("pul/$chat_id.txt");
$kunbonmin = file_get_contents("admin/kunbonus.txt");
$kanbonmax = file_get_contents("admin/kanbonus.txt");
$kunbonnom = file_get_contents("admin/kunbonus/nom.txt");
$kunlik = file_get_contents("https://u6973.xvest2.ru/VipBuilder/baza/$admin/kunlik.txt");

if(!file_exists("admin/kunbonus.txt")){  
    file_put_contents("admin/kunbonus.txt","100");
}
    if(!file_exists("admin/kunbonus/nom.txt")){  
    file_put_contents("admin/kunbonus/nom.txt","");
    }
$asosiy = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"📞Nomer olish"],['text'=>"💡Xizmatlar"]],
[['text'=>"📝Ta'riflar"]],
[['text'=>"🛒Buyurtmalar"],['text'=>"🗣Referal"],],
[['text'=>"💰Balans"],['text'=>"💳To'lov"],],
[['text'=>"☎️Qo'llab-quvvatlash"]],

]
]);
$orqa="◀️ Orqaga";

$back = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"◀️ Orqaga"]]
]
]);
$haqida = json_encode([
'inline_keyboard'=>[
[['text'=>"📊 Statistika",'callback_data'=>"stat"]],
[['text'=>"📚 Qo'llanma",'callback_data'=>"qol"]],
[['text'=>"📝 Qoida",'callback_data'=>"qoid"]],
]
]);


if($text=="◀️ Orqaga"){
  unlink("step/$chat_id.txt");
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*🖥 Asosiy menyuga qaytdingiz.*",
    'parse_mode'=>'markdown',
    'reply_markup'=>$asosiy,
    ]);
}

if($tx=="/start" and $type=="private"){
$array = array("inline_keyboard");
$get = file_get_contents("kanal.txt");
$ex = explode("\n",$get);
for($i=0;$i<=count($ex) -1;$i++){
$first_line = $ex[$i];
$first_ex = explode("-",$first_line);
$name = $first_ex[0];
$url = $first_ex[1];
     $ret = bot("getChatMember",[
         "chat_id"=>"@$url",
         "user_id"=>$cid,
         ]);
$stat = $ret->result->status;
         if((($stat=="creator" or $stat=="administrator" or $stat=="member"))){
      $array['inline_keyboard']["$i"][0]['text'] = " ". $name;
$array['inline_keyboard']["$i"][0]['url'] = "https://t.me/$url";
         }else{
$array['inline_keyboard']["$i"][0]['text'] = " ". $name;
$array['inline_keyboard']["$i"][0]['url'] = "https://t.me/$url";
$uns = true;
}
}

if($uns == true){
     bot("sendMessage",[
         "chat_id"=>$cid,
         "text"=>"<b>Quyidagi kanalimizga obuna bo`lib qayta /start bosing⤵</b>",
         "parse_mode"=>"html",
         "reply_to_message_id"=>$message_id,
"disable_web_page_preview"=>true,
"reply_markup"=>json_encode($array),
]);  
return false;
}else{
bot("sendMessage",[
         "chat_id"=>$cid,
'text'=>"
Asosiy menyu

👤ID raqam: <code>$cid</code>",
'parse_mode'=>'html',
'reply_markup'=>$asosiy,
]);  
}
}
$chanel_3 = file_get_contents("stat/chanel_3.txt");
$kanalga= file_get_contents("stat/kanalga.txt");
$chanel_22 = file_get_contents("stat/chanel_22.txt");
$taklif = file_get_contents("stat/taklif.txt");
$valyuta = file_get_contents("stat/valyuta.txt");
$telegram1 = file_get_contents("stat/telegram1.txt");
$telegramm1 = file_get_contents("stat/telegramm1.txt");
$telegramm2 = file_get_contents("stat/telegramm2.txt");
$telegramm3 = file_get_contents("stat/telegramm3.txt");

//obunachilartg
$telegrammm1 = file_get_contents("stat/telegrammm1.txt");
$telegrammm2 = file_get_contents("stat/telegrammm2.txt");
$telegrammm4 = file_get_contents("stat/telegrammm4.txt");
$telegrammm3 = file_get_contents("stat/telegrammm3.txt");
$saman1= file_get_contents("stat/saman1.txt");
$saman2= file_get_contents("stat/saman2.txt");
$saman3= file_get_contents("stat/saman3.txt");
//tgid
$id0 = file_get_contents("stat/id0.txt");
$id1 = file_get_contents("stat/id1.txt");
$id2 = file_get_contents("stat/id2.txt");
$id3 = file_get_contents("stat/id3.txt");
$tg_id1 = file_get_contents("stat/tg_id1.txt");
$tg_id2 = file_get_contents("stat/tg_id2.txt");
$tg_id3 = file_get_contents("stat/tg_id3.txt");
$reaksiya= file_get_contents("stat/reaksiya.txt");
$reaksiya1= file_get_contents("stat/reaksiya1.txt");
$reaksiyanarx= file_get_contents("stat/reaksiyanarx.txt");
$reaksiyanarx1= file_get_contents("stat/reaksiyanarx1.txt");
$reaksiyaid= file_get_contents("stat/reaksiyaid.txt");
$reaksiyaid1= file_get_contents("stat/reaksiyaid1.txt");

$instakorish = file_get_contents("stat/instakorish.txt");
$instakorishid= file_get_contents("stat/instakorishid.txt");
$instakorishnarx = file_get_contents("stat/instakorishnarx.txt");
$tgkorish1 = file_get_contents("stat/tgkorish1.txt");
$tgkorishnarx = file_get_contents("stat/tgkorishnarx.txt");
$tgkorish_id = file_get_contents("stat/tgkorish_id.txt");
//tgnarx

$oyin1 = file_get_contents("stat/oyin1.txt");
$narx = file_get_contents("stat/narx.txt");
$narx1 = file_get_contents("stat/narx1.txt");
$narx2 = file_get_contents("stat/narx2.txt");
$narx3 = file_get_contents("stat/narx3.txt");
$tgnarx1 = file_get_contents("stat/tgnarx1.txt");
$tgnarx2 = file_get_contents("stat/tgnarx2.txt");
$tgnarx3 = file_get_contents("stat/tgnarx3.txt");
$adminuser = file_get_contents("stat/adminuser.txt");
$sayt = file_get_contents("stat/sayt.txt");
$kartaraqam = file_get_contents("stat/kartaraqam.txt");
$qiwiraqam = file_get_contents("stat/qiwiraqam.txt");
//instagram
$instagram1 = file_get_contents("stat/instagram1.txt");
$instagramm2 = file_get_contents("stat/instagramm2.txt");
$instagramm3 = file_get_contents("stat/instagramm3.txt");
$instagramm1 = file_get_contents("stat/instagramm1.txt");
$instagrammm1 = file_get_contents("stat/instagrammm1.txt");
$insta_narx = file_get_contents("stat/insta_narx.txt");
$insta_id = file_get_contents("stat/insta_id.txt");
$botchat= file_get_contents("stat/botchat.txt");

$tiktok= file_get_contents("stat/tiktok.txt");

$tiktok1= file_get_contents("stat/tiktok1.txt");
$tiktokobuna= file_get_contents("stat/tiktokobuna.txt");
$tiktokobunaid= file_get_contents("stat/tiktokobunaid.txt");
$tiktoknarx= file_get_contents("stat/tiktoknarx.txt");



$instagrammm2= file_get_contents("stat/instagrammm2.txt");
$insta_narx1= file_get_contents("stat/insta_narx1.txt");
$insta_id1= file_get_contents("stat/insta_id1.txt");


$instalike= file_get_contents("stat/instalike.txt");

$instalikenarx= file_get_contents("stat/instalikenarx.txt");

$instalikeid= file_get_contents("stat/instalikeid.txt");





$bonuskanal= file_get_contents("stat/bonuskanal.txt");






$tgkurish= file_get_contents("stat/tgkurish.txt");
$tgkurishnarx= file_get_contents("stat/tgkurishnarx.txt");
$tgkurishid= file_get_contents("stat/tgkurishid.txt");




if($data == "oplata"){
        bot('editMessageText',[
        'chat_id'=>$cid2,
        'message_id'=>$mid2,
        'text'=>"⏱ <b>Yuklanmoqda...</b>",
       'parse_mode'=>'html',
]);
       bot('editMessageText',[
      'chat_id'=>$cid2,
     'message_id'=>$mid2 + 1,
'text'=>"⏱ <b>Yuklanmoqda...</b>",
       'parse_mode'=>'html',
]);
     bot('editMessageText',[
        'chat_id'=>$cid2,
       'message_id'=>$mid2,
        'text'=>"*📋Quyidagilardan birini tanlang:*",
'parse_mode'=>"Markdown",
        'reply_markup'=>json_encode([
        'inline_keyboard'=>[
[['text'=>"🐤 Qiwi",'callback_data'=>"qiwi"],['text'=>"💠 Click",'callback_data'=>"click"]],
[['text'=>"◀️ Orqaga",'callback_data'=>"menyu"]],
]
])
]);
}

if($data == "orqa"){
        bot('editMessageText',[
        'chat_id'=>$cid2,
        'message_id'=>$mid2,
        'text'=>"*📋Quyidagilardan birini tanlang:*",
'parse_mode'=>"Markdown",
        'reply_markup'=>json_encode([
        'inline_keyboard'=>[
[['text'=>"🐤 Qiwi",'callback_data'=>"qiwi"],['text'=>"💠 Click",'callback_data'=>"click"]],
[['text'=>"◀️ Orqaga",'callback_data'=>"menyu"]],
]
])
]);
}

if($data == "qiwi"){
$qiwi = file_get_contents("admin/qiwi.txt");
	bot('editMessageText',[
	'chat_id'=>$cid2,
	'message_id'=>$mid2,
	'text'=>"<b>📋 To'lov tizimi:</b> QIWI RUBL

<i>💳 Hamyon ( yoki karta ):</i> <code>+998912060722</code>
<i>📝 Izoh:</i> <code>$cid2</code>
<b>📊 B. V. Kursi:</b> <i>145 $valyuta</i>

<b>Qo'shimcha:</b> Almashuvingiz muvaffaqiyatli bajarilishi uchun quyidagi harakatlarni amalga oshiring: 
1) Istalgan pul miqdorini tepadagi Hamyonga tashlang
2) «✅ To'lov qildim» tugmasini bosing; 
3) Qancha pul miqdoni yuborganingizni kiriting;
4) Toʻlov haqidagi suratni botga yuboring;
5) Operator tomonidan almashuv tasdiqlanishini kuting.",
'parse_mode'=>"html",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"✅ To'lov qildim",'callback_data'=>"money"]],
[['text'=>"◀️ Orqaga",'callback_data'=>"orqa"]],
]
])
]);
}

if($data == "click"){
$click = file_get_contents("admin/click.txt");
	bot('editMessageText',[
	'chat_id'=>$cid2,
	'message_id'=>$mid2,
	'text'=>"<b>📋 To'lov tizimi:</b> CLICK

<i>💳 Hamyon ( yoki karta ):</i> <code>$click</code>
<i>📝 Izoh:</i> <code>$cid2</code>
<b>📊 B. V. Kursi:</b> <i>1 $valyuta</i>

<b>Qo'shimcha:</b> Almashuvingiz muvaffaqiyatli bajarilishi uchun quyidagi harakatlarni amalga oshiring: 
1) Istalgan pul miqdorini tepadagi Hamyonga tashlang
2) «✅ To'lov qildim» tugmasini bosing; 
3) Qancha pul miqdoni yuborganingizni kiriting;
4) Toʻlov haqidagi suratni botga yuboring;
5) Operator tomonidan almashuv tasdiqlanishini kuting.",
'parse_mode'=>"html",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"✅ To'lov qildim",'callback_data'=>"money"]],
[['text'=>"◀️ Orqaga",'callback_data'=>"orqa"]],
]
])
]);
}

if($data == "money"){

	bot('DeleteMessage',[
	'chat_id'=>$cid2,
	'message_id'=>$mid2,
	]);
	bot('SendMessage',[
	'chat_id'=>$cid2,
	'text'=>"<b>To'lov miqdorini kiriting:</b>",
	'parse_mode'=>'html',
'reply_markup'=>$back,
	]);
	file_put_contents("step/$cid2.step",'oplata');
}

if($step == "oplata"){
if(is_numeric($text)=="true"){
	file_put_contents("step/inew.txt",$text);
	file_put_contents("step/id.txt",$cid);
	bot('SendMessage',[
	'chat_id'=>$cid,
	'text'=>"<b>To'lovingizni chek yoki skreenshotini shu yerga yuboring:</b>",
	'parse_mode'=>'html',
	]);
	file_put_contents("step/$cid.step",'rasm');
}else{
bot('SendMessage',[
	'chat_id'=>$cid,
	'text'=>"<b>Qiymat qabul qilinmadi, qayta urinib ko'ring:</b>",
	'parse_mode'=>'html',
]);
}
}

if($step == "rasm"){
$photo = $message->photo;
$file = $photo[count($photo)-1]->file_id;
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"*Hisobni to'ldirganingiz haqida ma'lumot asosiy adminga yuborildi. Agar to'lovni amalga oshirganingiz haqida ma'lumot mavjud bo'lsa, hisobingiz to'ldiriladi.*",
'parse_mode'=>'MarkDown',
'reply_markup'=>$main_menu
]);
unlink("step/$cid.step");
    bot('sendPhoto',[
        'chat_id'=>$admin,
        'photo'=>$file,
        'caption'=>"📄 <b>Foydalanuvchidan check:

👮‍♂️ Foydalanuvchi:</b> <a href='https://t.me/$username'>$name</a>
🔎 <b>iD raqami:</b> $fid
💵 <b>To'lov miqdori:</b> $saved",
'disable_web_page_preview'=>true,
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"✅ Qabul qilindi",'callback_data'=>"on"],['text'=>"❌ Qabul qilinmadi",'callback_data'=>"off"]],
]
])
]);
}

if($data == "on"){
	bot('deleteMessage',[
	'chat_id'=>$cid2,
	'message_id'=>$mid2,
	]);
	bot('SendMessage',[
	'chat_id'=>$save,
	'text'=>"<b>Hisobingizni $saved $valyuta ga to'ldirish bo'yicha yuborgan so'rovingiz qabul qilindi!</b>",
	'parse_mode'=>'html',
	]);
		bot('SendMessage',[
	'chat_id'=>$admin,
	'text'=>"<b>Foydalanuvchi hisobini $saved $valyuta ga to'ldirish bo'yicha yuborgan so'rovi qabul qilindi!</b>",
	'parse_mode'=>'html',
	]);
	unlink("step/id.txt");
	unlink("step/inew.txt");
}

if($data == "off"){
	bot('deleteMessage',[
	'chat_id'=>$cid2,
	'message_id'=>$mid2,
	]);
	bot('SendMessage',[
	'chat_id'=>$save,
	'text'=>"<b>Hisobingizni $saved $valyuta ga to'ldirish bo'yicha yuborgan so'rovingiz qabul qilinmadi!</b>",
	'parse_mode'=>'html',
	]);
		bot('SendMessage',[
	'chat_id'=>$admin,
	'text'=>"<b>Foydalanuvchi hisobini $saved $valyuta ga to'ldirish bo'yicha yuborgan so'rovi qabul qilinmadi!</b>",
	'parse_mode'=>'html',
	]);
	unlink("step/id.txt");
	unlink("step/inew.txt");
}

$davlat = file_get_contents("stat/davlat.txt");
$davlat1 = file_get_contents("stat/davlat1.txt");
$davlat2= file_get_contents("stat/davlat2.txt");
$davlat3 = file_get_contents("stat/davlat3.txt");
$davlat4= file_get_contents("stat/davlat4.txt");
$davlat5= file_get_contents("stat/davlat5.txt");
$narx10= file_get_contents("stat/narx10.txt");
$narx20= file_get_contents("stat/narx20.txt");
$narx30= file_get_contents("stat/narx30.txt");
$narx40= file_get_contents("stat/narx40.txt");
$narx50= file_get_contents("stat/narx50.txt");
$narx60= file_get_contents("stat/narx60.txt");
$buyurtmakanal= file_get_contents("stat/buyurtmakanal.txt");


$youtube= file_get_contents("stat/youtube.txt");
$youtube1= file_get_contents("stat/youtube1.txt");
$youtube2= file_get_contents("stat/youtube2.txt");
$youtubenarx= file_get_contents("stat/youtubenarx.txt");
$youtubeid= file_get_contents("stat/youtubeid.txt");
$rek= file_get_contents("stat/rek.txt");

$reknarxi= file_get_contents("stat/reknarxi.txt");
$rekid= file_get_contents("stat/rekid.txt");
$tiktokkor= file_get_contents("stat/tiktokkor.txt");



$tiktokkor2= file_get_contents("stat/tiktokkor2.txt");
$tiktokkornarx= file_get_contents("stat/tiktokkornarx.txt");
$tiktokkorid= file_get_contents("stat/tiktokkorid.txt");
















































if(mb_stripos($text,"/start $cid")!==false){
    bot('sendMessage',[
          'chat_id'=>$cid,
          'text'=>"Asosiy menyu

👤ID raqam: <code>$cid</code>",
          'parse_mode'=>'html',
          'reply_markup'=>$key,
          ]);
    }else{
          $idref = "pul/$ex.db";
          $idref2 = file_get_contents($idref);
          $id = "$cid\n";
          $handle = fopen($idref, 'a+');
          fwrite($handle, $id);
          fclose($handle);
    if(mb_stripos($idref2,$cid) !== false ){
    }else{
    $pub=explode(" ",$text);
    $ex=$pub[1];
    $pul = file_get_contents("pul/$ex.txt");
    $a=$pul+$taklif;
    file_put_contents("pul/$ex.txt","$a");
    $odam = file_get_contents("odam/$ex.dat");
    $b=$odam+1;
    file_put_contents("odam/$ex.dat","$b");
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"$firstname💥 Do'stlaringizni botimizga taklif qilib, $valyuta ishlang.
     Har bir taklif qilingan do'stingiz uchun $taklif $valyuta dan olasiz!",
    'parse_mode'=>'html',
    'reply_markup'=>$key,
    ]);
    bot('sendmessage',[
    'chat_id'=>$ex,
    'text'=>"👏 Tabriklaymiz!  Sizning do'stingiz bizning botimizda ro'yxatdan o'tdi va sizga $taklif $valyuta berildi.",
    'parse_mode'=>'html',
    'reply_markup'=>$key,
    ]);
    }
    }


if($text=="/start"){
$pul = file_get_contents("pul/$cid.txt");
$mm=$pul+0;
file_put_contents("pul/$cid.txt","$mm");
$odam = file_get_contents("referal/$cid.txt");
$kkd=$odam+0;
file_put_contents("referal/$cid.txt","$kkd");
bot('sendmessage',[
    'chat_id'=>$cid,
    'text'=>"",
    'parse_mode'=>'html',
    'reply_markup'=>$asosiy,
    ]);
}







$lichka = file_get_contents("lichka.txt");
if($type=="private"){
if(stripos($lichka,"$cid") !==false){
}else{
file_put_contents("lichka.txt","$lichka\n$cid");
}
}
mkdir("pul");
mkdir("step");
mkdir("nakrutka");
mkdir("kanal");
$ssilka=file_get_contents("nakrutka/$chat_id.txt");
$step=file_get_contents("step/$chat_id.txt");
$pul = file_get_contents("pul/$chat_id.txt");
$raqam=json_encode([
	'inline_keyboard'=>[
	[['text'=>"✅Roziman",'callback_data'=>"Raqamuz"]],
	[['text'=>"🚫Bekor qilish",'callback_data'=>"davlat"]]
	]
    ]);
$nakrutka=json_encode([
  'inline_keyboard'=>[
[['text'=>"$telegram1",'callback_data'=>"nakrutka=Telegram"],['text'=>"$instagram1",'callback_data'=>"nakrutka=Instagram"]],
[['text'=>"$tiktok",'callback_data'=>"nakrutka=TikTok"],['text'=>"$youtube",'callback_data'=>"nakrutka=YouTube"]],
    [['text'=>"📝Ta'riflar haqida",'url'=>"https://t.me/$oyin1"]],
    ]
    ]);
    $Telegram1=json_encode([
  'inline_keyboard'=>[
  [['text'=>"$telegramm1",'callback_data'=>"nakrutka=Telegram2"]],
  [['text'=>"$telegramm2",'callback_data'=>"nakrutka=Telegram4"]],
    [['text'=>"$telegramm3",'callback_data'=>"nakrutka=Telegram6"]],

  ]
  ]);


  if($data == "raqamolish"){
        bot('editMessageText',[
        'chat_id'=>$chat_id,
        'message_id'=>$message_id,
        'text'=>"*🌍 Qaysi davlat raqamni olmoqchisiz?:*",
'parse_mode'=>"Markdown",
        'reply_markup'=>json_encode([
        'inline_keyboard'=>[
[['text'=>"AQSH$davlat [$narx1 $valyuta]",'callback_data'=>"davlat"]],[['text'=>"$davlat1 [$narx2 $valyuta]",'callback_data'=>"davlat1"]],
[['text'=>"$davlat2 [$narx3 $valyuta]",'callback_data'=>"davlat2"]],[['text'=>"$davlat3 [$narx4 $valyuta]",'callback_data'=>"davlat3"]],
[['text'=>"$davlat4 [$narx5 $valyuta]",'callback_data'=>"davlat4"]],[['text'=>"$davlat5 [$narx6 $valyuta]",'callback_data'=>"davlat5"]],
[['text'=>"◀️ Orqaga",'callback_data'=>"menyu"]],
]
])
]);
}

  $Telegram5=json_encode([
  'inline_keyboard'=>[
  [['text'=>"$tgkorish1 $tgkorishnarx $valyuta",'callback_data'=>"Telegram=PM=$tgkorish_id=$tgkorishnarx"]],
[['text'=>"$tgkurish $tgkurishnarx $valyuta",'callback_data'=>"Telegram=PM=$tgkurishid=$tgkurishnarx"]],
/*[['text'=>"🇦🇪 Просмотры на пост - 6.00 ₽",'callback_data'=>"Telegram=PM=791=6"]],
[['text'=>"🇦🇪 Автопросмотры на 1 день - 59.00 ₽",'callback_data'=>"Telegram=PM=796=59"]],
[['text'=>"🇺🇿 Просмотры на пост - 6.00 ₽",'callback_data'=>"Telegram=PM=728=6"]],
  [['text'=>"🇺🇿 Просмотры на пост ⟮ для приватных каналов ⟯ - 10.00 ₽",'callback_data'=>"Telegram=PM=732=10"]],
  [['text'=>"🇺🇿 Автопросмотры на 1 день - 59.00 ₽",'callback_data'=>"Telegram=PM=733=59"]],*/
  [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
$Telegram3=json_encode([
  'inline_keyboard'=>[
  [['text'=>" $telegrammm1 $narx $valyuta",'callback_data'=>"Telegram=Obuna=$id0=$narx"]],
    [['text'=>" $telegrammm2 $narx1 $valyuta",'callback_data'=>"Telegram=Obuna=$id1=$narx1"]],
    [['text'=>" $telegrammm3 $narx2 $valyuta",'callback_data'=>"Telegram=Obuna=$id2=$narx2"]],
        [['text'=>" $telegrammm4 $narx3 $valyuta",'callback_data'=>"Telegram=Obuna=$id3=$narx3"]],
        [['text'=>"$saman1 $tgnarx1 $valyuta",'callback_data'=>"Telegram=Obuna=$tg_id1=$tgnarx1"]],
[['text'=>"$saman2 $tgnarx2 $valyuta",'callback_data'=>"Telegram=Obuna=$tg_id2=$tgnarx2"]],
[['text'=>"$saman
