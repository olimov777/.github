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
[['text'=>"$saman3 $tgnarx3 $valyuta",'callback_data'=>"Telegram=Obuna=$tg_id3=$tganarx3"]],
/*[['text'=>"ᴛɢ ⭐ HQ подписчики для поиска ⟮ сим 🇮🇷 Иран ⟯ - 41.00 ₽",'callback_data'=>"Telegram=Obuna=449=41"]],
[['text'=>"ᴛɢ 🇺🇸 Подписчики USA - 29.00 ₽",'callback_data'=>"Telegram=Obuna=785=29"]],
[['text'=>"ᴛɢ 🇸🇦 Арабские подписчики - 46.00 ₽",'callback_data'=>"Telegram=Obuna=332=46"]],
[['text'=>"ᴛɢ ⭐ HQ подписчики для поиска ⟮ сим 🇮🇷 Иран ⟯ - 41.00 ₽",'callback_data'=>"Telegram=Obuna=449=41"]],
[['text'=>"ᴛɢ ⭐ Реальные подписчики ⟮ ♻ ʀ 15 ⟯ - 82.00 ₽",'callback_data'=>"Telegram=Obuna=709=82"]],
 [['text'=>"ᴛɢ ⭐ HQ подписчики ⟮ ♻ ʀ 30 ⟯ - 128.00 ₽",'callback_data'=>"Telegram=Obuna=830=128"]],
  [['text'=>" ᴛɢ 🇰🇿 Подписчики (Казахстан) - 603.00 ₽",'callback_data'=>"Telegram=Obuna=586=603"]],
    [['text'=>" ᴛɢ 🇺🇦 Подписчики живые ⟮ Украина ⟯ - 603.00 ₽ ",'callback_data'=>"Telegram=Obuna=553=603"]],*/
  [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
  $Telegram7=json_encode([
  'inline_keyboard'=>[
  [['text'=>"$reaksiya $reaksiyanarx $valyuta",'callback_data'=>"Telegram=REK=$reaksiyaid=$reaksiyanarx"]],
[['text'=>"$reaksiya1 $reaksiyanarx1 $valyuta",'callback_data'=>"Telegram=REK=$reaksiyaid1=$reaksiyanarx1"]],
[['text'=>"$rek $reknarxi $valyuta",'callback_data'=>"Telegram=REK=$rekid=$reknarxi"]],/*
[['text'=>"ᴛɢ 👍 Реакции на пост - 8.00 ₽",'callback_data'=>"Telegram=REK=868=8"]],
[['text'=>"👎 Реакции на пост - 8.00 ₽",'callback_data'=>"Telegram=REK=869=8"]],
[['text'=>"❤ Реакции на пост - 8.00 ₽ ",'callback_data'=>"Telegram=REK=870=8"]],
[['text'=>" ᴛɢ 🤮 Реакции на пост - 8.00 ₽",'callback_data'=>"Telegram=REK=878=8"]],*/
  [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
  //Telegram
    $Instagram1=json_encode([
  'inline_keyboard'=>[
    [['text'=>"$instagramm1",'callback_data'=>"nakrutka=Instagram2"]],
[['text'=>"$instagramm3",'callback_data'=>"nakrutka=Instagram4"]],
        [['text'=>"$instagramm2",'callback_data'=>"nakrutka=Instagram6"]],
    [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
  $Instagram3=json_encode([
  'inline_keyboard'=>[
  [['text'=>"$instagrammm1 $insta_narx $valyuta",'callback_data'=>"Instagram=Obuna=$insta_id=$insta_narx"]],
[['text'=>"$instagrammm2 $insta_narx1 $valyuta",'callback_data'=>"Instagram=Obuna=$insta_id1=$insta_narx1"]],
/*[['text'=>"ɪɢ 🔥 Моментальные подписчики - 32.00 ₽",'callback_data'=>"Instagram=PM=627=32"]],
[['text'=>"ɪɢ Подписчики Mix - 36.00 ₽",'callback_data'=>"Instagram=Obuna=128=36"]],
[['text'=>"ɪɢ ⭐ 🇷🇺 Подписчики RU HQ - 47.00 ₽",'callback_data'=>"Instagram=Obuna=3=47"]],*/
  [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
    $Instagram7=json_encode([
  'inline_keyboard'=>[
  [['text'=>"$instalike $instalikenarx $valyuta",'callback_data'=>"Instagram=Like=$instalikeid=$instalikenarx"]],
/*[['text'=>"ɪɢ Лайки「 на 10 последних постов 」 - 15.00 ₽",'callback_data'=>"Instagram=Like=582=15"]],*/
  [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
      $Instagram5=json_encode([
  'inline_keyboard'=>[
    [['text'=>"$instakorish $instakorishnarx $valyuta",'callback_data'=>"Instagram=PM=$instakorishid=$instakorishnarx"]],
/*    [['text'=>"ɪɢ Автоохват - 7.00 ₽",'callback_data'=>"Instagram=PM=88=7"]],
        [['text'=>"ɢ Автосохранения - 4.00 ₽",'callback_data'=>"Instagram=PM=87=4"]],*/
          [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
  //Instagram
  $TikTok1=json_encode([
  'inline_keyboard'=>[
    [['text'=>"$tiktok1",'callback_data'=>"nakrutka=TikTok2"]],
   [['text'=>"$tiktokkor",'callback_data'=>"nakrutka=TikTok4"]],
  /*      [['text'=>"TikTok - Лике",'callback_data'=>"nakrutka=TikTok6"]],*/
    [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
$TikTok3=json_encode([
  'inline_keyboard'=>[
  [['text'=>"$tiktokobuna $tiktoknarx $valyuta",'callback_data'=>"TikTok=Obuna=$tiktokobunaid=$tiktoknarx"]],
 /*   [['text'=>"⚫ Obunachi [O'rtacha]  17000 ₽",'callback_data'=>"TikTok=Obuna=388=17000"]],
      [['text'=>"⚫ Obunachi [Chiqmaydigan] 22000 ₽",'callback_data'=>"TikTok=Obuna=356=22000"]],*/
  [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
  $TikTok7=json_encode([
  'inline_keyboard'=>[
   [['text'=>"Лайки - 50.00 ₽",'callback_data'=>"TikTok=Like=430=50"]],
       /*   [['text'=>"❤Like [O'rtacha] 25000 ₽",'callback_data'=>"TikTok=Like=539=25000"]],*/
[['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
    $TikTok5=json_encode([
  'inline_keyboard'=>[
   [['text'=>"$tiktokkor2 $tiktokkornarx $valyuta",'callback_data'=>"TikTok=PM=$tiktokkorid=$tiktokkornarx"]],
/*    [['text'=>"⭐ Реальные просмотры - 11.00 ₽",'callback_data'=>"TikTok=PM=382=11"]],*/
    [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
  //TikTok
    $YouTube1=json_encode([
  'inline_keyboard'=>[
    [['text'=>"$youtube1",'callback_data'=>"nakrutka=YouTube2"]],
/*      [['text'=>"YouTube - Просмотры",'callback_data'=>"nakrutka=YouTube4"]],
        [['text'=>"YouTube - Лике",'callback_data'=>"nakrutka=YouTube6"]],*/
    [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
  $YouTube3=json_encode([
  'inline_keyboard'=>[
    [['text'=>"$youtube2 $youtubenarx $valyuta",'callback_data'=>"YouTube=Obuna=$youtubeid=$youtubenarx"]],
/*[['text'=>" ʏᴛ 🇷🇺 Русские подписчики - 868.00 ₽",'callback_data'=>"YouTube=Obuna=630=868"]],
*/      [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
$YouTube5=json_encode([
  'inline_keyboard'=>[
  [['text'=>" ʏᴛ Просмотры - 29.00 ₽",'callback_data'=>"YouTube=PM=514=29"]],
    [['text'=>"ʏᴛ Просмотры (быстрые) - 35.00 ₽",'callback_data'=>"YouTube=PM=39=35"]],
  [['text'=>"$orqa",'callback_data'=>"back"]],
]
]);
$YouTube7=json_encode([
  'inline_keyboard'=>[
        [['text'=>"ʏᴛ Лайки - 27.00 ₽",'callback_data'=>"YouTube=Like=125=27"]],
                [['text'=>"ʏᴛ Лайки ⟮ ♻ ʀ 30 ⟯ - 35.00 ₽",'callback_data'=>"YouTube=Like=867=35"]],
                                [['text'=>"ʏᴛ ⭐ Дизлайки - 221.00 ₽",'callback_data'=>"YouTube=Like=47=221"]],
                                  [['text'=>"$orqa",'callback_data'=>"back"]],
]
]);
    $Facebook1=json_encode([
  'inline_keyboard'=>[
    [['text'=>"Facebook - Подписчики",'callback_data'=>"nakrutka=Facebook2"]],
   /*   [['text'=>" korish",'callback_data'=>"nakrutka=Instagram4"]],
        [['text'=>"like",'callback_data'=>"nakrutka=Instagram6"]],*/
    [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
$Facebook3=json_encode([
  'inline_keyboard'=>[
  [['text'=>"ғʙ Подписчики на профиль - 58.00 ₽",'callback_data'=>"Facebook=Obuna=899=58"]],
    [['text'=>"ғʙ Подписчики на профиль - 76.00 ₽",'callback_data'=>"Facebook=Obuna=428=76"]],
      [['text'=>"ғʙ Плавные лайки + подписчики для паблик-страницы - 80.00 ₽",'callback_data'=>"Facebook=Obuna=73=80"]],
  [['text'=>"$orqa",'callback_data'=>"back"]],
]
]);
$VK1=json_encode([
  'inline_keyboard'=>[
      [['text'=>"VK - Подписчики",'callback_data'=>"nakrutka=VK2"]],
      [['text'=>"$orqa",'callback_data'=>"back"]],
]
]);
$VK3=json_encode([
  'inline_keyboard'=>[
    [['text'=>"⭐ ᴠᴋ Быстрые подписчики ⟮ ♻ ʀ 30 ⟯ - 68.00 ₽ ",'callback_data'=>"VK=Obuna=1028=68"]],
        [['text'=>" ᴠᴋ Быстрые подписчики - 87.00 ₽",'callback_data'=>"VK=Obuna=34=87"]],
    [['text'=>"$orqa",'callback_data'=>"back"]],
]
]);
$YT=json_encode([
  'inline_keyboard'=>[
    [['text'=>"🗂Obunachi [Jivoy] 80000 ₽",'callback_data'=>"YT=Obuna=152=80000"]],
    [['text'=>"❤Like [Jivoy] 70000 ₽",'callback_data'=>"YT=Like=491=70000"]],
    [['text'=>"$orqa",'callback_data'=>"back"]],
]
]);
$SP=json_encode([
  'inline_keyboard'=>[
  [['text'=>"🔥Obunachi [Kafolatlangan] 6000 ₽",'callback_data'=>"SP=Obuna=359=6000"]],
    [['text'=>"🗂Obunachi[Pleylist] 10000 ₽",'callback_data'=>"SP=Obuna=354=10000"]],
  [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
  $SH=json_encode([
  'inline_keyboard'=>[
  [['text'=>"🔥Obunachi [Russia,Real] 17000 ₽",'callback_data'=>"SH=Obuna=294=17000"]],
    [['text'=>"👁 Ko'rish [video] 6000 ₽",'callback_data'=>"SH=PM=276=6000"]],
  [['text'=>"$orqa",'callback_data'=>"back"]],
  ]
  ]);
if(mb_stripos($data,"nakrutka")!==false){
  bot('DeleteMessage',[
    'chat_id'=>$callcid,
    'message_id'=>$update->callback_query->message->message_id,
    ]);
    $ex=explode("=",$data)[1];
   if($ex=="Telegram"){
   $key=$Telegram1;
}
    $ex=explode("=",$data)[1];
   if($ex=="Telegram2"){
   $key=$Telegram3;
}
    $ex=explode("=",$data)[1];
   if($ex=="Telegram4"){
   $key=$Telegram5;
}
    $ex=explode("=",$data)[1];
   if($ex=="Telegram6"){
   $key=$Telegram7;
}
//Telegram
    $ex=explode("=",$data)[1];
   if($ex=="Instagam"){
   $key=$Instagrm1;
}
   if($ex=="Instagram"){
   $key=$Instagram1;
}
   if($ex=="Instagram2"){
   $key=$Instagram3;
}
   if($ex=="Instagram4"){
   $key=$Instagram5;
}
   if($ex=="Instagram6"){
   $key=$Instagram7;
}
//Instagram
   if($ex=="TikTok"){
   $key=$TikTok1;
}
   if($ex=="TikTok2"){
   $key=$TikTok3;
}
   if($ex=="TikTok4"){
   $key=$TikTok5;
}
   if($ex=="TikTok6"){
   $key=$TikTok7;
}
//Tiktok
   if($ex=="YouTube"){
   $key=$YouTube1;
}
   if($ex=="YouTube2"){
   $key=$YouTube3;
}
   if($ex=="YouTube4"){
   $key=$YouTube5;
}
   if($ex=="YouTub6"){
   $key=$YouTube7;
}
   if($ex=="Likee"){
   $key=$Likee;
}
   if($ex=="Facebook"){
   $key=$Facebook1;
}
   if($ex=="Facebook2"){
   $key=$Facebook3;
}
   if($ex=="VK"){
   $key=$VK1;
}
   if($ex=="VK2"){
   $key=$VK3;
}
   if($ex=="YT"){
   $key=$YT;
}
if($ex=="SP"){
   $key=$SP;
}
if($ex=="SH"){
   $key=$SH;
}
  bot('sendmessage',[
    'chat_id'=>$callcid,
    'text'=>"📂 $ex   Buyurtma uchun kerakli xizmatni tanlang\n💰Narxlar 1000-ta Buyurtma Hisobida Ko'rsatildi..",
    'parse_mode'=>'markdown',
    'reply_markup'=>$key,
    ]);
}
 

if(mb_stripos($data,"=Like")!==false or mb_stripos($data,"=PM")!==false or mb_stripos($data,
"=Obuna")!==false or mb_stripos($data,"=REK")!==false){
  bot('DeleteMessage',[
    'chat_id'=>$callcid,
    'message_id'=>$update->callback_query->message->message_id,
    ]);
  $tarmoq=explode("=",$data)[0];
   $tur=explode("=",$data)[1];
  $id=explode("=",$data)[2];
  $qb=explode("=",$data)[3];
file_put_contents("step/$callcid.txt","nak=$tarmoq=$tur=$id=$qb");
  bot('sendmessage',[
    'chat_id'=>$callcid,
    'text'=>"🗃 Kerakli miqdorni kirting?",
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[       
        [['text'=>"$orqa",'callback_data'=>"back"],],
        ]
      ])
    ]);
}
$minimalnar = file_get_contents("stat/minimal.txt");
if(mb_stripos($step,"nak=")!==false){
  if(is_numeric($text) and $text>0){
  $ex=explode("=",$step);
  $tarmoq=$ex[1];
   $tur=$ex[2];
if($tarmoq=="Telegram"){
$min=$minimalnar;
$max=15000;
}
if($tarmoq=="YouTube"){
$min=$minimalnar;
$max=25000;
}
if($tarmoq=="TikTok"){
$min=$minimalnar;
$max=50000;
}

if($tarmoq=="Instagram"){
$min=$minimalnar;
$max=15000;
}
if($tarmoq=="Likee"){
$min=$minimalnar;
$max=20000;
}
if($tarmoq=="Facebook"){
$min=$minimalnar;
$max=20000;
}
if($tarmoq=="VK"){
$min=$minimalnar;
$max=20000;
}
if($tarmoq=="YT"){
$min=$minimalnar;
$max=20000;
}
if($tarmoq=="SP"){
$min=$minimalnar;
$max=20000;
}
if($tarmoq=="SH"){
$min=$minimalnar;
$max=20000;
}
  $tur=$ex[2];
  $id=$ex[3];
  $qb=$ex[4];
  $son=$text;
if($text>=$min and $text<=$max){
  unlink("step/$chat_id.txt");
file_put_contents("step/$chat_id.txt","havola=$tarmoq=$id=$son=$tur=$qb");
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"$tarmoq havolangizni yuboring(https:// bo'lishi shart).",
    'reply_markup'=>$back,
    ]);
}else{
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"Min: $min Max: $max son oralig‘ida kiriting.",
    'reply_markup'=>$back,
    ]);
}
}else{
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔢 Faqat raqamdan tashkil topgan bo‘lsin",
    'reply_markup'=>$back,
    ]);
}
}
if(mb_stripos($step,"havola")!==false and $text!=$orqa){
  if(mb_stripos($text,"https:")!==false){
    $ex=explode("=",$step);
    $tarmoq=$ex[1];
    $id=$ex[2];
    $son=$ex[3];
    $tur=$ex[4];
    $qb=$ex[5];
    if($tarmoq=="TikTok"){
      $rak=$son/1000*$qb;
    }elseif($tarmoq=="YouTube"){
      $rak=$son/1000*$qb;
    }elseif($tarmoq=="Telegram"){
      $rak=$son/1000*$qb;
    }elseif($tarmoq=="Instagram"){
      $rak=$son/1000*$qb;
    }elseif($tarmoq=="Likee"){
      $rak=$son/1000*$qb;
}elseif($tarmoq=="Facebook"){
      $rak=$son/1000*$qb;
      }elseif($tarmoq=="VK"){
      $rak=$son/1000*$qb;
    }elseif($tarmoq=="YT"){
      $rak=$son/1000*$qb;
          }elseif($tarmoq=="SP"){
      $rak=$son/1000*$qb;
          }elseif($tarmoq=="SH"){
      $rak=$son/1000*$qb;
    }
    if($pul>$rak){
    $info=str_replace("$tarmoq","🌐 $tarmoq tarmog'i uchun $son buyurtmaga $rak $valyuta hisobingizdan yechiladi ",$tarmoq);
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"
<b>🖋️ Buyurtma haqida
🌐 Tarmoq: $tarmoq
🔤 Miqdor: $son
🔢 Havola: $text

<b>$info </b>

❗Iltimos ko'rib chiqing hamma malumot to'g'ri bo'lsa ✅Tasdiqlang...!</b>",
      'parse_mode'=>"html",
          'disable_web_page_preview'=>true,
      'reply_markup'=>json_encode([
        'inline_keyboard'=>[          
          [['text'=>"✅Tasdiqlang",'callback_data'=>"tasdiq"],],
          [['text'=>"$orqa",'callback_data'=>"back"],],
          ]
        ])
      ]);
      unlink("step/$chat_id.txt");
file_put_contents("step/$chat_id.txt","uz=$tarmoq=$son=$rak=$id=$tur=$qb");
file_put_contents("nakrutka/$chat_id.txt","$text");
  }else{
    unlink("step/$chat_id.txt");
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"<b>🚫 Balansingizda mablag' yetarli emas....!</b>",
           'parse_mode'=>"html",
      'reply_markup'=>$menu,
      ]);
  }
  }else{
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"<b>❌ Havola noto'g'ri.... To'g'rilab qayta yuboring!</b>",
      'parse_mode'=>"html",
      'reply_markup'=>$back,
      ]);
  }
}

if(mb_stripos($data,"tasdiq")!==false){
$step=file_get_contents("step/$callcid.txt");
 $ex=explode("=",$step);
 $tarmoq=$ex[1];
 $son=$ex[2];
 $rak=$ex[3];
 $id=$ex[4];
$url=file_get_contents("nakrutka/$callcid.txt");
$tur=$ex[5];
bot('DeleteMessage',[
    'chat_id'=>$callcid,
    'message_id'=>$update->callback_query->message->message_id,
    ]);
$urll=json_decode(file_get_contents("https://$sayt/api/v2?key=$chanel_3&action=add&link=$url&quantity=$son&service=$id"),true);
$order=$urll['order'];
$error=$urll['error'];
file_put_contents("nakrutka/$callcid.dat",file_get_contents('nakrutka/$callcid.dat')."\n".$order);
if(isset($error)){
if($error=="Quantity must be multiple of 1000"){
bot('sendMessage',[
   'chat_id'=>$callcid,
   'text'=>"<b>⛔️ Xato...
Faqat raqamlar bo'lsin!👇</b>
<code>
1000
2000</code>",
      'parse_mode'=>"html",
      'reply_markup'=>$menu,
   ]);
}else{
bot('sendMessage',[
   'chat_id'=>$callcid,
   'text'=>"❌ Sizning buyurtmangiz bor bajarilishini kuting!",
      'parse_mode'=>"html",
      'reply_markup'=>$menu,
   ]);
}
}else{
$balans= file_get_contents("pul/$callcid.txt");
     $plus=$balans-$rak;
  $b = file_put_contents("pul/$callcid.txt","$plus");
 $info=str_replace("$tarmoq","🌐 $tarmoq tarmog'i uchun $son buyurtmaga $rak $valyuta hisobingizdan yechildi✅",$tarmoq);
 bot('sendMessage',[
   'chat_id'=>$kanalga,
   'text'=>"
🔒<b>Buyurtma qabul qilindi!</b>
🆔<b>Buyurtma ID: $order</b>
✅<b>Holati: Bajarilmoqda...</b>
🌐<b>Tarmoq $tarmoq</b>
🔢<b>Buyurtma soni:</b> <b>$son</b>
🔔  IDsi: <code>$callcid</code>

",
      'parse_mode'=>"html",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
	'inline_keyboard'=>[
	[['text'=>"🗃 Buyurtma manzili",'url'=>"$url"]],
	[["text"=>"📁 Botga kirish","url"=>"https://t.me/$botname"],],
	[["text"=>"👨‍💻 Bog'lanish","url"=>"https://t.me/$adminuser"],],
	
	]
	
	])
	]);
unlink("step/$callcid.txt");
unlink("nakrutka/$callcid.txt");
}
}

if($data=="Raqamuz"){
bot('editMessagetext',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
'text'=>"Nomer olish uchun davlatlar ro'yxati:",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"$davlat | $narx10 $valyuta",'callback_data'=>"davlat"]],[['text'=>"$davlat1 | $narx20 $valyuta",'callback_data'=>"davlat1"]],
[['text'=>"$davlat2 | $narx30 $valyuta",'callback_data'=>"davlat2"]],
[['text'=>"Keyingi➡️",'callback_data'=>"keyingi"]],
]]),]);}
if($data=="keyingi"){
bot('editMessagetext',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
'text'=>"Nomer olish uchun davlatlar ro'yxati:",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"$davlat3 | $narx40 $valyuta",'callback_data'=>"davlat3"]],
[['text'=>"$davlat4 | $narx50 $valyuta",'callback_data'=>"davlat4"]],[['text'=>"$davlat5 | $narx60 $valyuta",'callback_data'=>"davlat5"]],
[['text'=>"⬅️Avvalgi",'callback_data'=>"Raqamuz"]],
]]),]);}
if($data == "davlat"){
$pul = file_get_contents("pul/$callcid.txt");
if($pul>=$narx10){
$pul = file_get_contents("pul/$callcid.txt");
$mm=$pul-$narx10;
file_put_contents("pul/$callcid.txt","$mm");
	bot('editMessageText',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
        'text'=>"⏱ <b>Yuklanmoqda...</b>",
       'parse_mode'=>'html',
]);
       bot('editMessageText',[
'chat_id'=>$callcid,
'message_id'=>$callmid + 1,
'text'=>"⏱ <b>Yuklanmoqda...</b>",
       'parse_mode'=>'html',
]);
     bot('editMessageText',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
  'text'=>"<b>$davlat raqamiga buyurtma berildi ✅</b>
🌍 Berilgan raqamlarni $buyurtmakanal kanalida kuzatib boring.
<i>24 soat ichida adminlar siz bilan bog‘lanishadi va raqamni topshirishadi.</i>

<b>Agar biron bir muammo tug‘ilsa admin bilan bog‘laning.</b>",
'parse_mode'=>'html',
	]);
	bot('SendMessage',[
	'chat_id'=>"$buyurtmakanal",
	'text'=>"<b>

👮‍♂️ Foydalanuvchi: $callname

🆔️ iD raqami: <code>$callcid</code>

🔎 Useri: @$calluser

 🌍 $davlat ga buyurtma berildi ✅
 
👨‍💻 Admin: @$adminuser

</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
	'inline_keyboard'=>[
	[["text"=>"☎️ Raqam olish","url"=>"https://t.me/$botname"],],
	[["text"=>"👨‍💻 Bog'lanish","url"=>"https://t.me/$adminuser"],],
	]
	
	])
	]);
	}else{
bot('answerCallbackQuery',[
        'callback_query_id'=>$qid,
        'text'=>"❗ Hisobingizda yetarli mablag‘ mavjud emas ❌",
        'show_alert'=>true,
	]);
	}
}
if($data == "davlat1"){
$pul = file_get_contents("pul/$callcid.txt");
if($pul>=$narx20){
$pul = file_get_contents("pul/$callcid.txt");
$mm=$pul-$narx20;
file_put_contents("pul/$callcid.txt","$mm");
	bot('editMessageText',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
        'text'=>"⏱ <b>Yuklanmoqda...</b>",
       'parse_mode'=>'html',
]);
       bot('editMessageText',[
'chat_id'=>$callcid,
'message_id'=>$callmid + 1,
'text'=>"⏱ <b>Yuklanmoqda...</b>",
       'parse_mode'=>'html',
]);
     bot('editMessageText',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
  'text'=>"<b>$davlat1 raqamiga buyurtma berildi ✅</b>
🌍 Berilgan raqamlarni $buyurtmakanal kanalida kuzatib boring.
<i>24 soat ichida adminlar siz bilan bog‘lanishadi va raqamni topshirishadi.</i>

<b>Agar biron bir muammo tug‘ilsa admin bilan bog‘laning.</b>",
'parse_mode'=>'html',
	]);
	bot('SendMessage',[
	'chat_id'=>"$buyurtmakanal",
	'text'=>"

👮‍♂️ Foydalanuvchi: $callname

🆔️ iD raqami: <code>$callcid</code>

🔎 Useri: @$calluser

 🌍 $davlat1 ga buyurtma berildi ✅
 
👨‍💻 Admin: @$adminuser

",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
	'inline_keyboard'=>[
	[["text"=>"☎️ Raqam olish","url"=>"https://t.me/$botname"],],
	[["text"=>"👨‍💻 Bog'lanish","url"=>"https://t.me/$adminuser"],],
	]
	
	])
	]);
	}else{
bot('answerCallbackQuery',[
        'callback_query_id'=>$qid,
        'text'=>"❗ Hisobingizda yetarli mablag‘ mavjud emas ❌",
        'show_alert'=>true,
	]);
	}
}
if($data == "davlat2"){
$pul = file_get_contents("pul/$callcid.txt");
if($pul>=$narx30){
$pul = file_get_contents("pul/$callcid.txt");
$mm=$pul-$narx30;
file_put_contents("pul/$callcid.txt","$mm");
	bot('editMessageText',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
        'text'=>"⏱ <b>Yuklanmoqda...</b>",
       'parse_mode'=>'html',
]);
       bot('editMessageText',[
'chat_id'=>$callcid,
'message_id'=>$callmid + 1,
'text'=>"⏱ <b>Yuklanmoqda...</b>",
       'parse_mode'=>'html',
]);
     bot('editMessageText',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
  'text'=>"<b>$davlat2 raqamiga buyurtma berildi ✅</b>
🌍 Berilgan raqamlarni $buyurtmakanal kanalida kuzatib boring.
<i>24 soat ichida adminlar siz bilan bog‘lanishadi va raqamni topshirishadi.</i>

<b>Agar biron bir muammo tug‘ilsa admin bilan bog‘laning.</b>",
'parse_mode'=>'html',
	]);
	bot('SendMessage',[
	'chat_id'=>"$buyurtmakanal",
	'text'=>"<b>

👮‍♂️ Foydalanuvchi: $callname

🆔️ iD raqami: <code>$callcid</code>

🔎 Useri: @$calluser

 🌍 $davlat2 ga buyurtma berildi ✅
 
👨‍💻 Admin: @$adminuser

</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
	'inline_keyboard'=>[
	[["text"=>"☎️ Raqam olish","url"=>"https://t.me/$botname"],],
	[["text"=>"👨‍💻 Bog'lanish","url"=>"https://t.me/$adminuser"],],
	]
	
	])
	]);
	}else{
bot('answerCallbackQuery',[
        'callback_query_id'=>$qid,
        'text'=>"❗ Hisobingizda yetarli mablag‘ mavjud emas ❌",
        'show_alert'=>true,
	]);
	}
}
if($data == "davlat3"){
$pul = file_get_contents("pul/$callcid.txt");
if($pul>=$narx40){
$pul = file_get_contents("pul/$callcid.txt");
$mm=$pul-$narx40;
file_put_contents("pul/$callcid.txt","$mm");
	bot('editMessageText',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
        'text'=>"⏱ <b>Yuklanmoqda...</b>",
       'parse_mode'=>'html',
]);
       bot('editMessageText',[
'chat_id'=>$callcid,
'message_id'=>$callmid + 1,
'text'=>"⏱ <b>Yuklanmoqda...</b>",
       'parse_mode'=>'html',
]);
     bot('editMessageText',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
  'text'=>"<b>$davlat3 raqamiga buyurtma berildi ✅</b>
🌍 Berilgan raqamlarni $buyurtmakanal kanalida kuzatib boring.
<i>24 soat ichida adminlar siz bilan bog‘lanishadi va raqamni topshirishadi.</i>

<b>Agar biron bir muammo tug‘ilsa admin bilan bog‘laning.</b>",
'parse_mode'=>'html',
	]);
	bot('SendMessage',[
	'chat_id'=>"$buyurtmakanal",
	'text'=>"<b>

👮‍♂️ Foydalanuvchi: $callname

🆔️ iD raqami: <code>$callcid</code>

🔎 Useri: @$calluser

 🌍 $davlat3 ga buyurtma berildi ✅
 
👨‍💻 Admin: @$adminuser

</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
	'inline_keyboard'=>[
	[["text"=>"☎️ Raqam olish","url"=>"https://t.me/$botname"],],
	[["text"=>"👨‍💻 Bog'lanish","url"=>"https://t.me/$adminuser"],],
	]
	
	])
	]);
	}else{
bot('answerCallbackQuery',[
        'callback_query_id'=>$qid,
        'text'=>"❗ Hisobingizda yetarli mablag‘ mavjud emas ❌",
        'show_alert'=>true,
	]);
	}
}
if($data == "davlat4"){
$pul = file_get_contents("pul/$callcid.txt");
if($pul>=$narx50){
$pul = file_get_contents("pul/$callcid.txt");
$mm=$pul-$narx50;
file_put_contents("pul/$callcid.txt","$mm");
	bot('editMessageText',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
        'text'=>"⏱ <b>Yuklanmoqda...</b>",
       'parse_mode'=>'html',
]);
       bot('editMessageText',[
'chat_id'=>$callcid,
'message_id'=>$callmid + 1,
'text'=>"⏱ <b>Yuklanmoqda...</b>",
       'parse_mode'=>'html',
]);
     bot('editMessageText',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
  'text'=>"<b>$davlat4 raqamiga buyurtma berildi ✅</b>
🌍 Berilgan raqamlarni $buyurtmakanal kanalida kuzatib boring.
<i>24 soat ichida adminlar siz bilan bog‘lanishadi va raqamni topshirishadi.</i>

<b>Agar biron bir muammo tug‘ilsa admin bilan bog‘laning.</b>",
'parse_mode'=>'html',
	]);
	bot('SendMessage',[
	'chat_id'=>"$buyurtmakanal",
	'text'=>"<b>

👮‍♂️ Foydalanuvchi: $callname

🆔️ iD raqami: <code>$callcid</code>

🔎 Useri: @$calluser

 🌍 $davlat4 ga buyurtma berildi ✅
 
👨‍💻 Admin: @$adminuser

</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
	'inline_keyboard'=>[
	[["text"=>"☎️ Raqam olish","url"=>"https://t.me/$botname"],],
	[["text"=>"👨‍💻 Bog'lanish","url"=>"https://t.me/$adminuser"],],
	]
	
	])
	]);
	}else{
bot('answerCallbackQuery',[
        'callback_query_id'=>$qid,
        'text'=>"❗ Hisobingizda yetarli mablag‘ mavjud emas ❌",
        'show_alert'=>true,
	]);
	}
}
if($data == "davlat5"){
$pul = file_get_contents("pul/$callcid.txt");
if($pul>=$narx60){
$pul = file_get_contents("pul/$callcid.txt");
$mm=$pul-$narx60;
file_put_contents("pul/$callcid.txt","$mm");
	bot('editMessageText',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
        'text'=>"⏱ <b>Yuklanmoqda...</b>",
       'parse_mode'=>'html',
]);
       bot('editMessageText',[
'chat_id'=>$callcid,
'message_id'=>$callmid + 1,
'text'=>"⏱ <b>Yuklanmoqda...</b>",
       'parse_mode'=>'html',
]);
     bot('editMessageText',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
  'text'=>"<b>$davlat5 raqamiga buyurtma berildi ✅</b>
🌍 Berilgan raqamlarni $buyurtmakanal kanalida kuzatib boring.
<i>24 soat ichida adminlar siz bilan bog‘lanishadi va raqamni topshirishadi.</i>

<b>Agar biron bir muammo tug‘ilsa admin bilan bog‘laning.</b>",
'parse_mode'=>'html',
	]);
	bot('SendMessage',[
	'chat_id'=>"$buyurtmakanal",
	'text'=>"<b>

👮‍♂️ Foydalanuvchi: $callname

🆔️ iD raqami: <code>$callcid</code>

🔎 Useri: @$calluser

 🌍 $davlat5 ga buyurtma berildi ✅
 
👨‍💻 Admin: @$adminuser

</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
	'inline_keyboard'=>[
	[["text"=>"☎️ Raqam olish","url"=>"https://t.me/$botname"],],
	[["text"=>"👨‍💻 Bog'lanish","url"=>"https://t.me/$adminuser"],],
	]
	
	])
	]);
	}else{
bot('answerCallbackQuery',[
        'callback_query_id'=>$qid,
        'text'=>"❗ Hisobingizda yetarli mablag‘ mavjud emas ❌",
        'show_alert'=>true,
	]);
	}
}
if($data=="back"){
  bot('DeleteMessage',[
    'chat_id'=>$callcid,
    'message_id'=>$update->callback_query->message->message_id,
    ]);
  bot('sendmessage',[
    'chat_id'=>$callcid,
    'text'=>"<b>📱 Quyidagi ijtimoiy tarmoqlardan birini tanlang:</b>",
'parse_mode'=>"HTML",
    'reply_markup'=>$asosiy,
    ]);
}


  if($text=="🇺🇿 Узбекский абонент"){
  unlink("step/$chat_id.txt");
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"📂 Выберите социальную сеть для накрутки.",
    'reply_markup'=>$nakrutka2,
    ]);
}
if($text=="💡Xizmatlar"){
  unlink("step/$chat_id.txt");
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"<b>📱 Kerakli tarmoqni tanlang</b>:",
    'parse_mode'=>"HTML",
    'reply_markup'=>$nakrutka,
    ]);
}
if($text=="📞Nomer olish"){
  unlink("step/$chat_id.txt");
	bot('SendMessage',[
	'chat_id'=>$chat_id,
	'text'=>"<b>❗️Bo'limdan foydalanish uchun ushbu shartlarga roziligingizni bildiring

- Sizga virtual nomer berilganda uni bemalol almashtirishingiz yoki bekor qilishingiz mumkin bo'ladi va buning uchun pul olinmaydi
- Agar sizga sms kod kelsa virtual nomerni boshqa almashtirolmaysiz va nomer uchun pul yechiladi
- Agarda kelgan kod notog'ri bo'lsa siz berilgan 20 daqiqa ichida yangi sms kod so'rashingiz mumkin va buning uchun ortiqcha pul olinmaydi
- Agar sizga sms kelsa lekin nomerga kira olmasangiz hamda berilgan 20 daqiqani ham o'tkazib yuborsangiz nomer baribir sizga sotilgan hisoblanadi va buning uchun da'volar qabul qilinmaydi
- Bot orqali olgan nomeringizni o'chirsangiz yoki u block bo'lsa nomer tiklab berilmaydi
- Olingan nomerga sms telegramga yuborilsa nomerni bekor qiling aks holda u 2 bosqichli parol bilan himoyalangan bo'lsa uning puli qaytarilmaydi

☝️ Yuqoridagi holatlar uchun da'volar qabul qilinmaydi chunki bunga rozilik bildirgan bo'lasiz:</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$raqam,
	
	]);
}
  if($soat == "00:00"){
	$kunlik = file_get_contents("https://u6973.xvest2.ru/VipBuilder/baza/$admin/kunlik.txt");
	$m = $kunlik - 1;
file_put_contents("https://u6973.xvest2.ru/VipBuilder/baza/$admin/kunlik.txt",$m);
}

$kunlik = file_get_contents("https://u6973.xvest2.ru/VipBuilder/baza/$admin/kunlik.txt");
	if($kunlik == "0"){
		file_put_contents("https://api.telegram.org/bot5123760474:AAFyrLiKYiadZvpXL2dFhcuvD8agCGEOB9Q/deletewebhook");
}

//////kutamiz

if($text=="📚 Bot haqida"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>$text."<b>Malumot olish uchun quyidagi menyulardan birini tanlang-Bo'limi</b>",
      'parse_mode'=>"html",
'reply_markup'=>$haqida,
]);
}
if($data=="qoid"){
bot('editMessageText',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
'text'=>"<b>@$botname Qoidalari❗️
• Adminga yolgʻon xabar yubormang. Bu uchun botda ban olishingiz mumkin
• Yordam boʻlimidan foydalanayotganda adminga haqiratli soʻz yozmang. Bu uchun botda ban olishingiz mumkin.
• Buyurtma berilgan linkning buyurtmasi bajarilmasdan oʻsha link uchun yana buyurtma bermang. Bu holdagi xatolik uchun sizga pul qaytarilmaydi.
• Admindan tekinga yoki savob uchun hisobingizni toʻldirishni soʻramang.

Qoʻshimcha maʼlumotlar olish uchun @$adminuseri bilan bogʻlaning.</b>  ",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🧑‍💻Admin",'url'=>"https://t.me/$adminuser"]],
]]),]);}
if($data=="qol"){
bot('editMessagetext',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
'text'=>"<b>@$botname dan foydalanish.
•Qanday buyurtma berish mumkin ?
Buyurtma berish boʻlimiga kiring. Oʻzingizga kerakli Ijtimoiy tarmoqni tanlang. Soʻng xizmatni tanlang. Kerakli obunachi miqdorini yozing va kerrakli linkni kiriting. 
•Hisobni qanday toʻldirish mumkin ?
Hisobim boʻlimiga kiring. U yerdan hisobni toʻldirish boʻlimini tanlang. Oʻzizga kerakli toʻlov usulini tanlang va bot bergan qoʻllanma boʻyicha ish tuting.

Sizda boshqacharoq savol va murojaatlar boʻlsa @$adminuseri bilan bogʻlaning.</b> ",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"☎️ Administrator",'url'=>"https://t.me/$adminuser"]],
]]),]);}
if($data=="stat"){
bot('editMessageText',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
'text'=>" 📊 <b>Bot foydalanuvchilari soni</b>: ".substr_count($lichka,"\n")."  ta",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🧑‍💻Admin",'url'=>"https://t.me/$adminuser"]],
]]),]);}


if($text=="🪙API Balans" and $chat_id==$admin){
$api_balance = json_decode(file_get_contents("https://$sayt/api/v2?key=$chanel_3&action=balance"),true);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"Sizning API Balansingizda
".$api_balance['balance']." Rubl",
'reply_markup'=>$panel,
]);
}
/*
if($text=="🗂 Instagram xizmatlari nomini sozlash"){
  unlink("step/$chat_id.txt");
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"<b> Quyidagi  birini tanlang</b>:",
    'parse_mode'=>"HTML",
    'reply_markup'=>$isoz,
    ]);
}*/


if($text=="☎️Qo'llab-quvvatlash"){
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*Murojaat uchun: @$adminuser

To'lovlar bo'yicha admin: @$adminuser

Telegram kanal: @$oyin1
*",
'parse_mode'=>'markdown',
/*reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🧑‍💻Admin",'url'=>"https://t.me/$adminuser"]],*/
]);}


if($text=="❗Hozirgi holati"){
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*
   $text
  🎆 Kunlik to'lovi: 150 so'm
   🎉To'langan: $day kunga
   🌏 API SAYT: $sayt
   💴 Valyuta: $valyuta
   👤Taklif narxi: $taklif $valyuta
   🔑 API: $chanel_3
   🧑‍💻Admin: $adminuser
   🔔Qiwi hamyon: $qiwiraqam
   💳Karta hamyon: $kartaraqam
   
   *",
'parse_mode'=>'markdown',
    ]);
}
$panel = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"💵 To'lov holati"]],
[['text'=>"☎️ Raqamlar bo'limini sozlash"]],
[['text'=>"📝Userga Xabar"],['text'=>"📋Userga Forward"]],
[['text'=>"📢 Buyurtmalar kanali"],['text'=>"📢 Bonus kanal"]],
[['text'=>"➕Pul berish"],['text'=>"➖Pul ayirish"]],
[['text'=>"❗️ Majburiy a'zo"],['text'=>"🎁 Bonus"],
['text'=>"✉ Muhokama chati"]],
[['text'=>"🎮 Tariflar kanali sozlash"]],
[['text'=>"🪙API Balans"],['text'=>"❤️Api Sozlash"],['text'=>"🔑 API saytni sozlash"]],
[['text'=>"👤 Taklif narxi"],['text'=>"💴 Valyutani sozlash"]],
[['text'=>"🔵 Telegram nomini sozlash va yoqish"],],
[['text'=>"🔵 Telegram ko'rishlarni sozlash va yoqish"],],
[['text'=>"🔵 Telegram obunachilar nomini sozlash"]],
[['text'=>"🔵 Telegram reaksiya menyusini sozlash"]],
[['text'=>"🗂 Telegram xizmatlari nomini sozlash"]],
[['text'=>"🔴 Instagram nomini sozlash va yoqish"],],
[['text'=>"🔴 Instagram obunachilar nomini sozlash"]],
[['text'=>"🔴 Instagram ko'rishlarni sozlash va yoqish"],],
[['text'=>"🔴 Instagram layklar nomini sozlash"]],
[['text'=>"🗂 Instagram xizmatlari nomini sozlash"]],
[['text'=>"⚫ Tiktok nomini sozlash va yoqish"],],
[['text'=>"⚫ Tiktok obunachilar menyusini sozlash"]],
[['text'=>"⚫ Tiktok ko'rishlar menyusini sozlash"]],
[['text'=>"⚫ Tiktok xizmatlar nomini sozlash"]],
[['text'=>"🟥 Youtube nomini sozlash va yoqish"],],
[['text'=>"🟥 Youtube obunachilar menyusini sozlash"]],
[['text'=>"🟥 Youtube xizmatlar nomini sozlash"]],
[['text'=>"🧑‍💻 Admin user sozlash"],['text'=>"❗Hozirgi holati"]],
[['text'=>"🔔 Qiwi hamyon"],['text'=>"💳 Karta hamyon"],],
[['text'=>"📊Statistika"],['text'=>"🔰 Minimal buyurtmani"]],


]
]);
$davlat_soz = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"1-davlat"],['text'=>"2-davlat"]],
[['text'=>"3-davlat"],['text'=>"4-davlat"]],
[['text'=>"5-davlat"],['text'=>"6-davlat"]],
[['text'=>"◀️ Orqaga"]],
]
]);
$raqam_narx = json_encode([
'resize_keyboard'=>true,
	'keyboard'=>[
	[['text'=>"1-davlat raqam narxi"],['text'=>"2-davlat raqam narxi"]],
	[['text'=>"3-davlat raqam narxi"],['text'=>"4-davlat raqam narxi"]],
[['text'=>"5-davlat raqam narxi"],['text'=>"6-davlat raqam narxi"]],
	
	[['text'=>"◀️ Orqaga"]],
]
]);

$raqamsoz = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🌐 Davlatlar nomini sozlash va yoqish"]],
[['text'=>"☎️ Raqamlar narxini sozlash"]],
[['text'=>"📢 To'lovlar kanali"],],
]
]);
$youtube_soz = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🟥 Youtube arzon obunachi nomini sozlash"]],
[['text'=>"youtube arzon obunachi id"],['text'=>"youtube arzon obunachi narxi"]],
]
]);
$step = file_get_contents("stat/$cid.step");
   if($tx=="1-davlat" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","davlat");
} 

if($step=="davlat" and $cid==$admin){ 
file_put_contents("stat/davlat.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");
   if($tx=="2-davlat" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","davlat1");
} 

if($step=="davlat1" and $cid==$admin){ 
file_put_contents("stat/davlat1.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");
   if($tx=="3-davlat" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","davlat2");
} 

if($step=="davlat2" and $cid==$admin){ 
file_put_contents("stat/davlat2.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");
   if($tx=="4-davlat" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","davlat3");
} 

if($step=="davlat3" and $cid==$admin){ 
file_put_contents("stat/davlat3.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");
   if($tx=="5-davlat" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","davlat4");
} 

if($step=="davlat4" and $cid==$admin){ 
file_put_contents("stat/davlat4.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");
   if($tx=="6-davlat" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","davlat5");
} 

if($step=="davlat5" and $cid==$admin){ 
file_put_contents("stat/davlat5.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}

$step = file_get_contents("stat/$cid.step");
   if($tx=="📢 To'lovlar kanali" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Kanal  nomini @ belgisi bilan  kiriting::</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","buyurtmakanal");
} 

if($step=="buyurtmakanal" and $cid==$admin){ 
file_put_contents("stat/buyurtmakanal.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}

$step = file_get_contents("stat/$cid.step");
   if($tx=="1-davlat raqam narxi" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","narx10");
} 

if($step=="narx10" and $cid==$admin){ 
file_put_contents("stat/narx10.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}

$step = file_get_contents("stat/$cid.step");
   if($tx=="2-davlat raqam narxi" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","narx20");
} 

if($step=="narx20" and $cid==$admin){ 
file_put_contents("stat/narx20.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}

$step = file_get_contents("stat/$cid.step");
   if($tx=="3-davlat raqam narxi" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","narx30");
} 

if($step=="narx30" and $cid==$admin){ 
file_put_contents("stat/narx30.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");
   if($tx=="4-davlat raqam narxi" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","narx40");
} 

if($step=="narx40" and $cid==$admin){ 
file_put_contents("stat/narx40.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");
   if($tx=="5-davlat raqam narxi" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","narx50");
} 

if($step=="narx50" and $cid==$admin){ 
file_put_contents("stat/narx50.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}

$step = file_get_contents("stat/$cid.step");
   if($tx=="6-davlat raqam narxi" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","narx60");
} 

if($step=="narx60" and $cid==$admin){ 
file_put_contents("stat/narx60.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
$tiktok_soz = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⚫ TikTok arzon obunachi nomini sozlash"]],
[['text'=>"⚫ TikTok arzon ko'rish nomini sozlash"]],
[['text'=>"tiktok arzon obunachi id"],['text'=>"tiktok arzon obunachi narxi"]],
[['text'=>"tiktok arzon korish id"],['text'=>"tiktok arzon korish narxi"]],
]
]);

$isoz = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔴 Instagram arzon obunachi nomini sozlash"]],
[['text'=>"🔴 Instagram tezkor obunachi nomini sozlash"]],
[['text'=>"🔴 Instagram ko'rishlar nomini sozlash"]],
[['text'=>"🔴 Instagram like nomini sozlash"]],
[['text'=>"insta arzon obunachi id"],['text'=>"insta arzon obunachi narxi"]],
[['text'=>"insta tezkor obunachi id"],['text'=>"insta tezkor obunachi narxi"]],
[['text'=>"insta like id"],['text'=>"insta like narxi"]],
[['text'=>"insta ko'rishlar id"],['text'=>"insta ko'rishlar narxi"]],
]
]);
$step = file_get_contents("stat/$cid.step");
   if($tx=="tiktok arzon korish narxi" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","tiktokkornarx");
} 

if($step=="tiktokkornarx" and $cid==$admin){ 
file_put_contents("stat/tiktokkornarx.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");
   if($tx=="⚫ TikTok arzon ko'rish nomini sozlash" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","tiktokkor2");
} 

if($step=="tiktokkor2" and $cid==$admin){ 
file_put_contents("stat/tiktokkor2.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");
   if($tx=="tiktok arzon korish id" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","tiktokkorid");
} 

if($step=="tiktokkorid" and $cid==$admin){ 
file_put_contents("stat/tiktokkorid.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");
   if($tx=="⚫ Tiktok ko'rishlar menyusini sozlash" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","tiktokkor");
} 

if($step=="tiktokkor" and $cid==$admin){ 
file_put_contents("stat/tiktokkor.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");
   if($tx=="youtube arzon obunachi narxi" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","youtubenarx");
} 

if($step=="youtubenarx" and $cid==$admin){ 
file_put_contents("stat/youtubenarx.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");
   if($tx=="youtube arzon obunachi id" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","youtubeid");
} 

if($step=="youtubeid" and $cid==$admin){ 
file_put_contents("stat/youtubeid.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");
   if($tx=="🟥 Youtube arzon obunachi nomini sozlash" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","youtube2");
} 

if($step=="youtube2" and $cid==$admin){ 
file_put_contents("stat/youtube2.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");
   if($tx=="🟥 Youtube obunachilar menyusini sozlash" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","youtube1");
} 

if($step=="youtube1" and $cid==$admin){ 
file_put_contents("stat/youtube1.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");
   if($tx=="🟥 Youtube nomini sozlash va yoqish" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","youtube");
} 

if($step=="youtube" and $cid==$admin){ 
file_put_contents("stat/youtube.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");
   if($tx=="⚫ TikTok arzon obunachi nomini sozlash" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","tiktokobuna");
} 

if($step=="tiktokobuna" and $cid==$admin){ 
file_put_contents("stat/tiktokobuna.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");
   if($tx=="tiktok arzon obunachi narxi" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","tiktoknarx");
} 

if($step=="tiktoknarx" and $cid==$admin){ 
file_put_contents("stat/tiktoknarx.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");
   if($tx=="tiktok arzon obunachi id" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","tiktokobunaid");
} 

if($step=="tiktokobunaid" and $cid==$admin){ 
file_put_contents("stat/tiktokobunaid.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");
   if($tx=="⚫ Tiktok obunachilar menyusini sozlash" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","tiktok1");
} 

if($step=="tiktok1" and $cid==$admin){ 
file_put_contents("stat/tiktok1.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");
   if($tx=="⚫ Tiktok nomini sozlash va yoqish" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","tiktok");
} 

if($step=="tiktok" and $cid==$admin){ 
file_put_contents("stat/tiktok.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");
   if($tx=="insta ko'rishlar narxi" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","instakorishnarx");
} 
$step = file_get_contents("stat/$cid.step");
   if($tx=="📢 Buyurtmalar kanali" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","kanalga");
} 

if($step=="kanalga" and $cid==$admin){ 
file_put_contents("stat/kanalga.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");
   if($tx=="insta ko'rishlar narxi" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","instakorishnarx");
} 

if($step=="instakorishnarx" and $cid==$admin){ 
file_put_contents("stat/instakorishnarx.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");
   if($tx=="insta ko'rishlar id" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","instakorishid");
} 

if($step=="instakorishid" and $cid==$admin){ 
file_put_contents("stat/instakorishid.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");
   if($tx=="🔴 Instagram ko'rishlar nomini sozlash" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","instakorish");
} 

if($step=="instakorish" and $cid==$admin){ 
file_put_contents("stat/instakorish.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");
   if($tx=="🔴 Instagram ko'rishlarni sozlash va yoqish" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","instagramm3");
} 

if($step=="instagramm3" and $cid==$admin){ 
file_put_contents("stat/instagramm3.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");
   if($tx=="🔴 Instagram layklar nomini sozlash" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","instagramm2");
} 

if($step=="instagramm2" and $cid==$admin){ 
file_put_contents("stat/instagramm2.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");
   if($tx=="insta like narxi" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","instalikenarx");
} 

if($step=="instalikenarx" and $cid==$admin){ 
file_put_contents("stat/instalikenarx.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");
   if($tx=="insta like id" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","instalikeid");
} 

if($step=="instalikeid" and $cid==$admin){ 
file_put_contents("stat/instalikeid.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");
   if($tx=="🔴 Instagram like nomini sozlash" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","instalike");
} 

if($step=="instalike" and $cid==$admin){ 
file_put_contents("stat/instalike.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");
   if($tx=="insta tezkor obunachi narxi" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","insta_narx1");
} 

if($step=="insta_narx1" and $cid==$admin){ 
file_put_contents("stat/insta_narx1.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");
   if($tx=="insta tezkor obunachi id" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","insta_id1");
} 

if($step=="insta_id1" and $cid==$admin){ 
file_put_contents("stat/insta_id1.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");
   if($tx=="🔴 Instagram tezkor obunachi nomini sozlash" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","instagrammm2");
} 

if($step=="instagrammm2" and $cid==$admin){ 
file_put_contents("stat/instagrammm2.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
  $qsoz = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔵 Telegram arzon obunachi nomini sozlash"]],
[['text'=>"🔵 Telegram tezkor obunachi nomini sozlash"]],
[['text'=>"🔵 Telegram oddiy obunachi nomini sozlash"]],
[['text'=>"🔵 Telegram chiqmaydigan obunachi nomini sozlash"]],
[['text'=>"🔵 Telegram 5-qator obunachi nomini sozlash"]],
[['text'=>"🔵 Telegram 6-qator obunachi nomini sozlash"]],
[['text'=>"🔵 Telegram 7-qator obunachi nomini sozlash"]],
[['text'=>"🔵 Telegram 1-qator reaksiya nomini sozlash"]],
[['text'=>"🔵 Telegram 2-qator reaksiya nomini sozlash"]],
[['text'=>"🔵 Telegram 3-qator reaksiya nomini sozlash"]],
[['text'=>"Arzon obunachi id"],['text'=>"Arzon obunachi narxi"]],
[['text'=>"Tezkor obunachi id"],['text'=>"Tezkor obunachi narxi"]],
[['text'=>"oddiy obunachi id"],['text'=>"oddiy obunachi narxi"]],
[['text'=>"chiqmaydigan obunachi id"],['text'=>"chiqmaydigan obunachi narxi"]],
[['text'=>"5-qator obunachi id"],['text'=>"5-qator obunachi narxi"]],
[['text'=>"6-qator obunachi id"],['text'=>"6-qator obunachi narxi"]],
[['text'=>"7-qator obunachi id"],['text'=>"7-qator obunachi narxi"]],
[['text'=>"1-qator reaksiya id"],['text'=>"1-qator reaksiya narxi"]],
[['text'=>"2-qator reaksiya id"],['text'=>"2-qator reaksiya narxi"]],
[['text'=>"3-qator reaksiya id"],['text'=>"3-qator reaksiya narxi"]],
]
]);

$tgkorish = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔵 Telegram ko'rishlar menyusini sozlash"]],
[['text'=>"🔵 Telegram arzon ko'rishlar nomini sozlash"]],
[['text'=>"🔵 Telegram tezkor ko'rishlar nomini sozlash"]],
[['text'=>"Arzon ko'rish id"],['text'=>"Arzon ko'rish narxi"]],
[['text'=>"tezkor ko'rish id"],['text'=>"tezkor ko'rish narxi"]],
]
]);
$step = file_get_contents("stat/$cid.step");
   if($tx=="3-qator reaksiya id" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","rekid");
} 

if($step=="rekid" and $cid==$admin){ 
file_put_contents("stat/rekid.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");
   if($tx=="3-qator reaksiya narxi" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","reknarxi");
} 

if($step=="reknarxi" and $cid==$admin){ 
file_put_contents("stat/reknarxi.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");
   if($tx=="2-qator reaksiya narxi" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","reaksiyanarx1");
} 

if($step=="reaksiyanarx1" and $cid==$admin){ 
file_put_contents("stat/reaksiyanarx1.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");
   if($tx=="1-qator reaksiya narxi" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","reaksiyanarx");
} 

if($step=="reaksiyanarx" and $cid==$admin){ 
file_put_contents("stat/reaksiyanarx.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");
   if($tx=="2-qator reaksiya id" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","reaksiyaid1");
} 

if($step=="reaksiyaid1" and $cid==$admin){ 
file_put_contents("stat/reaksiyaid1.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");
   if($tx=="1-qator reaksiya id" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","reaksiyaid");
} 

if($step=="reaksiyaid" and $cid==$admin){ 
file_put_contents("stat/reaksiyaid.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");
   if($tx=="🔵 Telegram 2-qator reaksiya nomini sozlash" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","reaksiya1");
} 

if($step=="reaksiya1" and $cid==$admin){ 
file_put_contents("stat/reaksiya1.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");
   if($tx=="🔵 Telegram 3-qator reaksiya nomini sozlash" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","rek");
} 

if($step=="rek" and $cid==$admin){ 
file_put_contents("stat/rek.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");
   if($tx=="🔵 Telegram 1-qator reaksiya nomini sozlash" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","reaksiya");
} 

if($step=="reaksiya" and $cid==$admin){ 
file_put_contents("stat/reaksiya.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");
   if($tx=="🔵 Telegram reaksiya menyusini sozlash" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","telegramm3");
} 

if($step=="telegramm3" and $cid==$admin){ 
file_put_contents("stat/telegramm3.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");
   if($tx=="📢 Bonus kanal" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","bonuskanal");
} 

if($step=="bonuskanal" and $cid==$admin){ 
file_put_contents("stat/bonuskanal.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");
   if($tx=="🔵 Telegram tezkor ko'rishlar nomini sozlash" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","tgkurish");
} 

if($step=="tgkurish" and $cid==$admin){ 
file_put_contents("stat/tgkurish.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");
   if($tx=="tezkor ko'rish id" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","tgkurishid");
} 

if($step=="tgkurishid" and $cid==$admin){ 
file_put_contents("stat/tgkurishid.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");
   if($tx=="tezkor ko'rish narxi" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","tgkurishnarx");
} 

if($step=="tgkurishnarx" and $cid==$admin){ 
file_put_contents("stat/tgkurishnarx.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");
   if($tx=="Arzon ko'rish narxi" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","tgkorishnarx");
} 

if($step=="tgkorishnarx" and $cid==$admin){ 
file_put_contents("stat/tgkorishnarx.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");
   if($tx=="Arzon ko'rish id" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","tgkorish_id");
} 

if($step=="tgkorish_id" and $cid==$admin){ 
file_put_contents("stat/tgkorish_id.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");
   if($tx=="🔵 Telegram ko'rishlar menyusini sozlash" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","telegramm2");
} 

if($step=="telegramm2" and $cid==$admin){ 
file_put_contents("stat/telegramm2.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");
   if($tx=="🔵 Telegram arzon ko'rishlar nomini sozlash" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","tgkorish1");
} 

if($step=="tgkorish1" and $cid==$admin){ 
file_put_contents("stat/tgkorish1.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
/*
  $step = file_get_contents("stat/$cid.step");
   if($tx="Arzon ko'rish narxi" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","tgkorishnarx");
} 

if($step=="tgkorishnarx" and $cid==$admin){ 
file_put_contents("stat/tgkorishnarx.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
  $step = file_get_contents("stat/$cid.step");
   if($tx="Arzon ko'rish id" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","tgkorish_id");
} 

if($step=="tgkorish_id" and $cid==$admin){ 
file_put_contents("stat/tgkorish_id.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
  $step = file_get_contents("stat/$cid.step");
   if($tx="🔵 Telegram arzon ko'rishlar nomini sozlash" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","tgkorish1");
} 

if($step=="tgkorish1" and $cid==$admin){ 
file_put_contents("stat/tgkorish1.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");
   if($tx=="🔵 Telegram ko'rishlar menyusini sozlash" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","telegramm2");
} 

if($step=="telelgramm2" and $cid==$admin){ 
file_put_contents("stat/telegramm2.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}*/
$step = file_get_contents("stat/$cid.step");
   if($tx=="7-qator obunachi narxi" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","tgnarx3");
} 

if($step=="tgnarx3" and $cid==$admin){ 
file_put_contents("stat/tgnarx3.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");
   if($tx=="6-qator obunachi narxi" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","tgnarx2");
} 

if($step=="tgnarx2" and $cid==$admin){ 
file_put_contents("stat/tgnarx2.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
  $step = file_get_contents("stat/$cid.step");
   if($tx=="5-qator obunachi narxi" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","tgnarx1");
} 

if($step=="tgnarx1" and $cid==$admin){ 
file_put_contents("stat/tgnarx1.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
  $step = file_get_contents("stat/$cid.step");
   if($tx=="7-qator obunachi id" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","tg_id3");
} 

if($step=="tg_id3" and $cid==$admin){ 
file_put_contents("stat/tg_id3.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
  $step = file_get_contents("stat/$cid.step");
   if($tx=="6-qator obunachi id" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","tg_id2");
} 

if($step=="tg_id2" and $cid==$admin){ 
file_put_contents("stat/tg_id2.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
  $step = file_get_contents("stat/$cid.step");
   if($tx=="5-qator obunachi id" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","tg_id1");
} 

if($step=="tg_id1" and $cid==$admin){ 
file_put_contents("stat/tg_id1.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
  $step = file_get_contents("stat/$cid.step");
   if($tx=="🔵 Telegram 7-qator obunachi nomini sozlash" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","saman3");
} 

if($step=="saman3" and $cid==$admin){ 
file_put_contents("stat/saman3.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
  $step = file_get_contents("stat/$cid.step");
   if($tx=="🔵 Telegram 6-qator obunachi nomini sozlash" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","saman2");
} 

if($step=="saman2" and $cid==$admin){ 
file_put_contents("stat/saman2.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
  $step = file_get_contents("stat/$cid.step");
   if($tx=="🔵 Telegram 5-qator obunachi nomini sozlash" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","saman1");
} 

if($step=="saman1" and $cid==$admin){ 
file_put_contents("stat/saman1.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
  $step = file_get_contents("stat/$cid.step");
   if($tx=="insta arzon obunachi narxi" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","insta_narx");
} 

if($step=="insta_narx" and $cid==$admin){ 
file_put_contents("stat/insta_narx.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
  $step = file_get_contents("stat/$cid.step");
   if($tx=="insta arzon obunachi id" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","insta_id");
} 

if($step=="insta_id" and $cid==$admin){ 
file_put_contents("stat/insta_id.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
  $step = file_get_contents("stat/$cid.step");
   if($tx=="🔴 Instagram arzon obunachi nomini sozlash" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","instagrammm1");
} 

if($step=="instagrammm1" and $cid==$admin){ 
file_put_contents("stat/instagrammm1.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
  $step = file_get_contents("stat/$cid.step");
   if($tx=="🔴 Instagram nomini sozlash va yoqish" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","instagram1");
} 

if($step=="instagram1" and $cid==$admin){ 
file_put_contents("stat/instagram1.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
  $step = file_get_contents("stat/$cid.step");
   if($tx=="🔴 Instagram obunachilar nomini sozlash" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","instagramm1");
} 

if($step=="instagramm1" and $cid==$admin){ 
file_put_contents("stat/instagramm1.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
  $step = file_get_contents("stat/$cid.step");
   if($tx=="💳 Karta hamyon" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","kartaraqam");
} 

if($step=="kartaraqam" and $cid==$admin){ 
file_put_contents("stat/kartaraqam.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
  $step = file_get_contents("stat/$cid.step");
   if($tx=="🔔 Qiwi hamyon" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","qiwiraqam");
} 

if($step=="qiwiraqam" and $cid==$admin){ 
file_put_contents("stat/qiwiraqam.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
  $step = file_get_contents("stat/$cid.step");
   if($tx=="✉ Muhokama chati" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash muhokama  chati userini @ belgisini quymay  yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","botchat");
} 

if($step=="botchat" and $cid==$admin){ 
file_put_contents("stat/botchat.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
  $step = file_get_contents("stat/$cid.step");
   if($tx=="🔑 API saytni sozlash" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","sayt");
} 

if($step=="sayt" and $cid==$admin){ 
file_put_contents("stat/sayt.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
  $step = file_get_contents("stat/$cid.step");
   if($tx=="🧑‍💻 Admin user sozlash" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","adminuser");
} 

if($step=="adminuser" and $cid==$admin){ 
file_put_contents("stat/adminuser.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
  $step = file_get_contents("stat/$cid.step");
   if($tx=="chiqmaydigan obunachi narxi" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","narx3");
} 

if($step=="narx3" and $cid==$admin){ 
file_put_contents("stat/narx3.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
  $step = file_get_contents("stat/$cid.step");
   if($tx=="oddiy obunachi narxi" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","narx2");
} 

if($step=="narx2" and $cid==$admin){ 
file_put_contents("stat/narx2.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
  $step = file_get_contents("stat/$cid.step");
   if($tx=="Tezkor obunachi narxi" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","narx1");
} 

if($step=="narx1" and $cid==$admin){ 
file_put_contents("stat/narx1.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
  $step = file_get_contents("stat/$cid.step");
   if($tx=="Arzon obunachi narxi" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","narx");
} 

if($step=="narx" and $cid==$admin){ 
file_put_contents("stat/narx.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
  $step = file_get_contents("stat/$cid.step");
   if($tx=="chiqmaydigan obunachi id" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","id3");
} 

if($step=="id3" and $cid==$admin){ 
file_put_contents("stat/id3.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
    $step = file_get_contents("stat/$cid.step");
   if($tx=="oddiy obunachi id" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","id2");
} 

if($step=="id2" and $cid==$admin){ 
file_put_contents("stat/id2.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");
   if($tx=="Tezkor obunachi id" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","id1");
} 

if($step=="id1" and $cid==$admin){ 
file_put_contents("stat/id1.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
  $step = file_get_contents("stat/$cid.step");
   if($tx=="Arzon obunachi id" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","id0");
} 

if($step=="id0" and $cid==$admin){ 
file_put_contents("stat/id0.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
  $step = file_get_contents("stat/$cid.step");
   if($tx=="🔵 Telegram chiqmaydigan obunachi nomini sozlash" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","telegrammm4");
} 

if($step=="telegrammm4" and $cid==$admin){ 
file_put_contents("stat/telegrammm4.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
  $step = file_get_contents("stat/$cid.step");
   if($tx=="🔵 Telegram oddiy obunachi nomini sozlash" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","telegrammm3");
} 

if($step=="telegrammm3" and $cid==$admin){ 
file_put_contents("stat/telegrammm3.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
  $step = file_get_contents("stat/$cid.step");
   if($tx=="🔵 Telegram tezkor obunachi nomini sozlash" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","telegrammm2");
} 

if($step=="telegrammm2" and $cid==$admin){ 
file_put_contents("stat/telegrammm2.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
  $step = file_get_contents("stat/$cid.step");
   if($tx=="🔵 Telegram arzon obunachi nomini sozlash" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","telegrammm1");
} 

if($step=="telegrammm1" and $cid==$admin){ 
file_put_contents("stat/telegrammm1.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
  $step = file_get_contents("stat/$cid.step");
   if($tx=="🔵 Telegram obunachilar nomini sozlash" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  Telegram obunachini sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","telegramm1");
} 

if($step=="telegramm1" and $cid==$admin){ 
file_put_contents("stat/telegramm1.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
/*  $step = file_get_contents("stat/$cid.step");
   if($tx=="🔵 Telegram nomini sozlash va yoqish" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  Telegram nomini sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","telegram1");
} 

if($step=="telegram1" and $cid==$admin){ 
file_put_contents("stat/telegram1.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i> Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}*/
  $step = file_get_contents("stat/$cid.step");
   if($tx=="🔵 Telegram nomini sozlash va yoqish" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  Sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","telegram1");
} 

if($step=="telegram1" and $cid==$admin){ 
file_put_contents("stat/telegram1.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Taklif narxi $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
  $step = file_get_contents("stat/$cid.step");
   if($tx=="👤 Taklif narxi" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  Sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","taklif");
} 

if($step=="taklif" and $cid==$admin){ 
file_put_contents("stat/taklif.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Taklif narxi $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
  $step = file_get_contents("stat/$cid.step");
   if($tx=="🎮 Tariflar kanali sozlash" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  Sozlash uchun yuboring:</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","oyin1");
} 

if($step=="oyin1" and $cid==$admin){ 
file_put_contents("stat/oyin1.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Sozlash $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
  $step = file_get_contents("stat/$cid.step");
   if($tx=="💴 Valyutani sozlash" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>  Sozlash uchun yuboring, </i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","valyuta");
} 

if($step=="valyuta" and $cid==$admin){ 
file_put_contents("stat/valyuta.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Valyuta $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}

$okstat=file_get_contents("status/$cid.status");
if($text=="🛒Buyurtmalar"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"❗Buyurtma berganmsiz?

Buyurtma ID sini kiriting:",
]);
mkdir("status");
file_put_contents("status/$cid.status","1");
}
if($okstat==1){
if(is_numeric($text)){
$orderstat=json_decode(file_get_contents("https://$sayt/api/v2?key=$chanel_3&action=status&order=$text"),true);
$miqdor=$orderstat['charge'];
if($orderstat['status'] !=null or $orderstat['remains'] !=null){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"
Статус заказа: ".$orderstat['status']."
Количество заказа: ".$orderstat['remains']."",
]);unlink("status/$cid.status");
}else{
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"⚠️ Qandaydir muammo yuz berdi!" ,
]);
unlink("status/$cid.status");
}}}


mkdir("stat");
if($tx=="❗️ Majburiy a'zo" and $cid==$admin){ 
    bot('sendmessage',[ 
  'chat_id'=>$admin, 
  'text'=>"Kanallar nomi va userlarini @ belgisisiz yuboring

           Namuna: 
             Nom                User
    ✔️ АмировБекжан-AmirovBekjan
     ✔️ ScSMM-Sc_SMM
     ✔️ Info-AmirovBekjanInfo


Eslatma ❗Kanallarni shu ketma ketlikda xoxlagancha ulashingiz mumkim.", 
  'parse_mode'=>'markdown',
  ]); 
file_put_contents("stat/$cid.step",maj);  
  } 

if($step == 'maj') { 
if($text = "$text") { 
file_put_contents("kanal.txt","$text");  
         bot('sendmessage',[ 
         'chat_id'=>$admin, 
         'text'=>"✅ Majburiy a'zo kanali o'zgardi", 
 ]); 
unlink("stat/$cid.step");  
} 
}



if($tx=="🔰 Minimal buyurtmani" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<b>Minimal buyurtmani yuboring!</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","minmalna");
} 

if($step=="minmalna" and $cid==$admin){ 
file_put_contents("stat/minimal.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>$tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");
if($step=="chanel_1" and $cid==$admin){ 
file_put_contents("stat/chanel_1.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Sizning birinchi kanalingiz @$tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}

  $step = file_get_contents("stat/$cid.step");
   if($tx=="❤️Api Sozlash" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Api kalitni  sozlash uchun yuboring, <b>uni ushbu saytdan olasiz https://$sayt</b> ‼️.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","chanel_3");
} 

if($step=="chanel_3" and $cid==$admin){ 
file_put_contents("stat/chanel_3.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Sizning api kalitingiz $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}


if($text == "☎️ Raqamlar narxini sozlash"){
if($cid == $admin){
	bot('SendMessage',[
	'chat_id'=>$admin,
	'text'=>"<b>📋 Quyidagilardan birini tanlang:</b>",
	'parse_mode'=>'html',
'reply_markup'=>$raqam_narx
]);
}
}
if($text=="🌐 Davlatlar nomini sozlash va yoqish"){
  unlink("step/$chat_id.txt");
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"⚙ Quyidagilardan birini tanlang:",
    'reply_markup'=>$davlat_soz,
    ]);
}

if($text=="🗂 Telegram xizmatlari nomini sozlash"){
  unlink("step/$chat_id.txt");
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"⚙ Quyidagilardan birini tanlang:",
    'reply_markup'=>$qsoz,
    ]);
}
if($text=="🗂 Instagram xizmatlari nomini sozlash"){
  unlink("step/$chat_id.txt");
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"<b> Quyidagi  birini tanlang</b>:",
    'parse_mode'=>"HTML",
    'reply_markup'=>$isoz,
    ]);
}
if($text=="⚫ Tiktok xizmatlar nomini sozlash"){
  unlink("step/$chat_id.txt");
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"⚙ Quyidagilardan birini tanlang:",
    'reply_markup'=>$tiktok_soz,
    ]);
}
if($text=="🟥 Youtube xizmatlar nomini sozlash"){
  unlink("step/$chat_id.txt");
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"⚙ Quyidagilardan birini tanlang:",
    'reply_markup'=>$youtube_soz,
    ]);
}
if($text=="☎️ Raqamlar bo'limini sozlash"){
  unlink("step/$chat_id.txt");
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"⚙ Quyidagilardan birini tanlang:",
    'reply_markup'=>$raqamsoz,
    ]);
}
if($text=="🔵 Telegram ko'rishlarni sozlash va yoqish"){
  unlink("step/$chat_id.txt");
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"<b>📱 Quyidagilardan birini tanlang</b>:",
    'parse_mode'=>"HTML",
    'reply_markup'=>$tgkorish,
    ]);
}
if($text == "/panel" and $cid==$admin ){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>Assalamu alaykum <a href='tg://user?id=$uid'>Admin</a></b>\n\n<i>Kerakli boʻlimni tanlang!!</i>",
	'parse_mode'=>"html",
	'reply_markup'=>$panel,
]);
}


if($text=="📊Statistika" && $cid==$admin){
bot('deleteMessage',[
'chat_id'=>$cid,
'message_id'=>$mid,
]);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"
@$botname statistikasi
Bot azolari ".substr_count($lichka,"\n")." ta ",
'reply_markup'=>$panel,
]);
}

function send($c,$m,$p){
bot('sendMessage',[
'chat_id'=>$c,
'text'=>$m,
'parse_mode'=>$p,
]);
}
function reyting(){
    $text = "🏆 <b>TOP 5 ta eng koʻp pul ishlagan foydalanuvchilar:</b>\n\n";
    $daten = [];
    $rev = [];
    $fayllar = glob("./pul/*.*");
    foreach($fayllar as $file){
        if(mb_stripos($file,".pul")!==false){
        $value = file_get_contents($file);
        $id = str_replace(["./pul/",".pul"],["",""],$file);
        $daten[$value] = $id;
        $rev[$id] = $value;
        }
        echo $file;
    }

    asort($rev);
    $reversed = array_reverse($rev);
    for($i=0;$i<5;$i+=1){
        $order = $i+1;
        $id = $daten["$reversed[$i]"];
        $text.= "<b>{$order}</b>. <a href='tg://user?id={$id}'>{$id}</a> - "."<code>".$reversed[$i]."</code>"." <b>rubl</b>"."\n";
    }
    return $text;
}
if($text=="/reyting"){
$y = reyting();
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>$y,
'parse_mode'=>html,
]);
}
$step = file_get_contents("step/$chat_id.step");
     
if($text == "📝Userga Xabar" and $cid == $admin){
      bot('sendMessage',[
      'chat_id'=>$cid,
      'text'=>"<b>Userlarga yuboriladigan habarni kiriting!!</b>",
      'parse_mode'=>"html",
      'reply_markup'=>$panel,
      ]);
      file_put_contents("step/$cid.step","user");
    }

    if($step == "user" and $cid == $admin){
      if($text == "/cancel"){
      unlink("step/$chat_id.step");
      }else{ 
      $idszs=explode("\n",$lichka);
      foreach($idszs as $idlat){
     $userr = bot('sendMessage',[
      'chat_id'=>$idlat,
      'text'=>"<b>$text</b>",
      'parse_mode'=>'html',
      'disable_web_page_preview' => true,
      ]);  unlink("step/$cid.step");
      }
        if($userr){
          bot('sendmessage',[
          'chat_id'=>$admin,
          'text'=>"Habar Barcha Userlarga yuborildi!",
          ]);      
      unlink("step/$cid.step");
        }
      }
    }
     

if($text == "📋Userga Forward" and $cid == $admin){
 bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"✅ *Userlarga forward qilinadigan xabarni kiriting!
Bakor qilish uchun /cancel ni bosing*",
'parse_mode'=>'markdown',
]);
file_put_contents("step/$cid.step","forward");
}

if($step == "forward" and $cid == $admin){
if($text == "/cancel"){
unlink("stat/$chat_id.step");
}else{ 
$ids=explode("\n",$lichka);
foreach($ids as $id){
$user = bot('forwardMessage', [
'chat_id'=>$id,
'from_chat_id'=>$admin,
'message_id'=>$mid,
]);unlink("step/$cid.step");
}

if($user){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"✅ Xabar yetkazildi!",
'parse_mode'=>"markdown",
]);     
unlink("step/$cid.step");
}
}
}

if($text=="💰Balans"){

$dost = file_get_contents("pul/$cid.ref");
$soat=date('H:i:s',strtotime('0 hour'));
$sana=date("d-M-y",strtotime("0 hour"));
$hisob  = file_get_contents("pul/$chat_id.txt");
bot('deleteMessage',[
'chat_id'=>$cid,
'message_id'=>$mid,
]);
$dl = bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"
💰Balansingiz: $hisob $valyuta

👤ID raqam: <code>$cid</code>
",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
    [['text'=>"💳To'lov",'callback_data'=>"buy"]],
]]),])->result->message_id;}

$dost = file_get_contents("pul/$cid.ref");
$hisob  = file_get_contents("pul/$chat_id.txt");
if($text=="👤 Реферальная система"){
bot('deleteMessage',[
'chat_id'=>$cid,
'message_id'=>$mid,
]);
$dl = bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"‍Партнёрская программа

Даёт возможность хорошо заработать, с каждого потенциального клиента.Все чисто и прозрачно.Если ваш реферал пополнит баланс от 1000 руб, то вы получите 50 руб.

Ваши приглашённые:

Приглашено всего: $dost 
Заработано с рефералов: 0.25 ₽
Ваша партнёрская ссылка: 
https://t.me/$botname?start=$cid
",
'reply_markup'=>$pay,
])->result->message_id;
}

if($data=="card"){
bot('editMessagetext',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
'text'=>"💳 To'lov tizimi: 💳  Karta orqali

   Hamyon: <code>$kartaraqam</code>
   Izoh:<code>5164281685</code>


<b>Almashuvingiz muvaffaqiyatli bajarilishi uchun quyidagi harakatlarni amalga oshiring: 
1) Istalgan pul miqdorini tepadagi Hamyonga tashlang
2) «☎️ Bog'lanish» tugmasini bosing; 
4) Qancha pul miqdoni yuborganingizni kiritin;
3) Toʻlov haqidagi suratni botga yuboring;
3) Operator tomonidan almashuv tasdiqlanishini kuting</b>.",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"☎️ Bog'lanish",'url'=>"https://t.me/$adminuser"]],
]]),]);}

if($data=="qiwi"){
bot('editMessageText',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
'text'=>"<b> 💳 To'lov tizimi: 🐤 Qiwi orqali </b>

💳  Hamyon: <code>$qiwiraqam</code>
📝 Izoh: <code>$callcid</code>

<b>Diqqat! Agar siz sharh yozishni unutib qo'ysangiz yoki uni noto'g'ri kiritsangiz, hisobingizga pul tushmaydi!
 Bunday hollarda biz bilan bog'lanishingiz mumkin‌‌.</b>",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🧑‍💻 Admin bilan bog'lanish",'url'=>"https://t.me/$adminuser"]],
/*[['text'=>"⚙ Bot yasash",'url'=>"https://t.me/Vipkonsbot"]],*/
]]),]);}

if($text=="◀️ Orqaga"){
bot('sendmessage',[
    'chat_id'=>$cid,
    'text'=>"Отменено!",
    'parse_mode'=>"html",
'reply_markup'=>$mem,
]);
unlink("step/$cid.step");
exit();
}

$step = file_get_contents("step/$cid.step");
$hisob = file_get_contents("pul/$cid.txt");
$types = file_get_contents("step/$cid.turi");


$dost = file_get_contents("pul/$cid.ref");
if($text=="🗣Referal"){
bot('deleteMessage',[
'chat_id'=>$cid,
'message_id'=>$mid,
]);
$dl = bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"
Sizning referal havolangiz:

https://t.me/$botname?start=$cid

Sizning referalingiz: $dost ta

Sizga har bir taklif qilgan o'zbek referalingiz uchun $taklif $valyuta boshqa davlat referali uchun esa  yarimi beriladi va ular balansini har gal to'ldirganda sizga 5% foyda taqdim etiladi!

👤ID raqam: <code>$cid</code>",
"parse_mode"=>"html",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[

]]),])->result->message_id;}
$dost = file_get_contents("pul/$cid.ref");
if($text=="💳To'lov"){
bot('deleteMessage',[
'chat_id'=>$cid,
'message_id'=>$mid,
]);
$dl = bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"
💵 Marhamat, quyidagilardan menyudagi hisob to'ldirish usullaridan birini tanlang:

⬇️ Pul kiritish: Siz ushbu bo'lim orqali Botdagi hisobingizni to'ldirishingiz mumkin.

Davom etish uchun quyidagi tugmalardan burini tanlang:",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
    [['text'=>"💳 Sotib olish",'callback_data'=>"buy"]],
[['text'=>"⚙ Bog'lanish","url"=>"https://t.me/$adminuser"]],
]]),])->result->message_id;}
$dost = file_get_contents("pul/$cid.ref");
if($data=="ref"){
bot('editMessagetext',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
'text'=>"
✅ Ushbu bot orqali eng ommabop ijtimoiy tarmoqlar uchun obunachilar qo'shishingiz va ko'rishlar sonini ko'paytirishingiz mumkin!

Imkoniyatni qo'ldan boy bermang. Botga o'tish uchun quyidagi havolani ustiga bosing:
https://t.me/$botname?start=$callcid

1 ta taklif narxi $taklif $valyuta",
]);
}


if($text=="📝Ta'riflar"){
bot('deleteMessage',[
'chat_id'=>$cid,
'message_id'=>$mid,
]);
$dl = bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"
Barcha ta'riflar haqida batafsil👇👇👇",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"📝Ta'riflar haqida",'url'=>"https://t.me/$oyin1"]],
[['text'=>"",'callback_data'=>"kunbonus"]],
]]),])->result->message_id;}
$dost = file_get_contents("pul/$cid.ref");
if($data=="ref"){
bot('editMessagetext',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
'text'=>"
✅ Ushbu bot orqali eng ommabop ijtimoiy tarmoqlar uchun obunachilar qo'shishingiz va ko'rishlar sonini ko'paytirishingiz mumkin!

Imkoniyatni qo'ldan boy bermang. Botga o'tish uchun quyidagi havolani ustiga bosing:
https://t.me/$botname?start=$callcid

1 ta taklif narxi $taklif $valyuta",
]);
}
if($text == "💵 To'lov holati" and $cid == $admin){
	$kunlik = file_get_contents("https://u6973.xvest2.ru/VipBuilder/baza/$admin/kunlik.txt");
	bot('SendMessage',[
	'chat_id'=>$admin,
	'text'=>"<b>💵 Ushbu bot uchun $kunlik kunlik to'lov to'langan!</b>

Muddatni uzaytirish uchun @ProBuiIderBot ga o'ting
$day
   <i>Muddatni faqatgina asosiy admin uzaytirishi mumkin!</i>",
	'parse_mode'=>'html',
	'reply_markup'=>json_encode([
	'inline_keyboard'=>[
	[['text'=>"@ProBuiIderBot",'url'=>"https://t.me/ProBuiIderBot"]]
	]
	])
	]);
}
if($data=="buy"){
bot('editMessageText',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
'text'=>"
💳 <b>Quyidagi to'lov tizimlaridan birini tanlang:</b>

<code>1 So'm - 1 so'm</code>",
    'parse_mode'=>"html",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"💳 Karta orqali",'callback_data'=>"card"]],
[['text'=>"🥝 QIWI orqali",'callback_data'=>"qiwi"]],
]
]),
]);
}                            



$ss=file_get_contents("admin.txt");
if($text=="➕Pul berish" and $cid==$admin){
file_put_contents("admin.txt","coin");
bot("sendMessage",[
"chat_id"=>$admin,
"text"=>"Foydalanuvchi hisobini nechi $valyuta ga toʻldirmoqchisiz:",
"parse_mode"=>"html",
"reply_markup"=>$panel,
]);
}

if($ss=="coin" and $cid==$admin){
file_put_contents("adminpul.coin",$text);
bot("sendMessage",[
"chat_id"=>$admin,
"text"=>"Foydalanuvchi ID raqamini kiriting:",
"parse_mode"=>"html",
"reply_markup"=>$panel,
]);
unlink("admin.txt");
file_put_contents("admin.txt","pay");
 }


if($ss=="pay" and $cid==$admin){
$summa = file_get_contents("adminpul.coin");
$sum =  file_get_contents("pul/$text.txt");
$jami = $sum + $summa;
file_put_contents("pul/$text.txt","$jami");
bot("sendMessage",[
   "chat_id"=>$text,
          "text"=>"
💰 Sizning hisobingiz admin tomonidan $summa $valyuta ga toʻldirildi!

Hozirgi hisobingiz: $jami $valyuta",
]);
bot("sendMessage",[
"chat_id"=>$admin,
"text"=>"✅ Foydalanuvchi balansi toʻldirildi!",
"parse_mode"=>"html",
"reply_markup"=>$panel,
]);
unlink("admin.txt");
unlink("adminpul.txt");
}
////////
$ss=file_get_contents("admin.txt");
if($text=="➖Pul ayirish" and $cid==$admin){
file_put_contents("admin.txt","coin1");
bot("sendMessage",[
"chat_id"=>$admin,
"text"=>"Foydalanuvchi hisobidan qancha $valyuta ayirmoqchisiz:",
"parse_mode"=>"html",
"reply_markup"=>$panel,
]);
}

if($ss=="coin1" and $cid==$admin){
file_put_contents("adminpul.coin",$text);
bot("sendMessage",[
"chat_id"=>$admin,
"text"=>"Foydalanuvchi ID raqamini kiriting:",
"parse_mode"=>"html",
"reply_markup"=>$panel,
]);
unlink("admin.txt");
file_put_contents("admin.txt","pay1");
 }


if($ss=="pay1" and $cid==$admin){
$summa = file_get_contents("adminpul.coin");
$sum =  file_get_contents("pul/$text.txt");
$jami = $sum - $summa;
$okminus=file_put_contents("pul/$text.txt","$jami");
bot("sendMessage",[
   "chat_id"=>$text,
          "text"=>"
💰 Sizning hisobingizdan admin tomonidan $summa $valyuta ayirildi!

Hozirgi hisobingiz: $jami $valyuta",
]);
}
if($okminus){
bot("sendMessage",[
"chat_id"=>$admin,
"text"=>"✅ Foydalanuvchi balansidan $summa $valyuta ayirildi!",
"parse_mode"=>"html",
"reply_markup"=>$panel,
]);
unlink("admin.txt");
unlink("adminpul.txt");
}

if($tx=="/jwjwwjwjwjwjat"){
$lich = substr_count($lichka,"\n");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Botimiz a'zolari $lich ta
",
]);
}
$callback = $update->callback_query;
$botla = file_get_contents("rubl/bonus5.txt");
$b=file_get_contents("admin.txt");
$message_id = $callback->message->message_id;
if($tx=="🎁 Bonus" and $cid==$admin){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Eng kam ( MIN ) bonus olish miqdorini kiriting",
'reply_markup'=>json_encode([
 'remove_keyboard'=>true,
]),   
]);
file_put_contents("admin.txt","b");
unlink('rubl/olindi1.txt');
unlink('rubl/berildi1.txt');
unlink('rubl/bonus2.txt');
unlink('rubl/bonus3.txt');
unlink('rubl/bonus4.txt');
unlink('rubl/bonus5.txt');
}
	
	
if($b=="b" and $cid==$admin){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Eng ko'p ( MAX ) bonus olish miqdorini kiriting",
'reply_markup'=>json_encode([
 'remove_keyboard'=>true,
]),   
]);
file_put_contents("admin.txt","bb");
file_put_contents("rubl/bonus3.txt","$text");
}
	
if($b=="bb" and $cid==$admin){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Bonus beriladigan kanal ID raqamini yuboring!

Namuna: Bu shartmas",
'reply_markup'=>json_encode([
 'remove_keyboard'=>true,
]),   
]);
file_put_contents("admin.txt","bn");
file_put_contents("rubl/bonus4.txt","$text");
}

if($b=="bn" and $cid==$admin){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Qancha foydalanuvchiga bonus berilsin ?",
'reply_markup'=>json_encode([
 'remove_keyboard'=>true,
]),   
]);
file_put_contents("rubl/bonus5.txt","-100$text");
file_put_contents("admin.txt","bonusa");
}

if($b=="bonusa" and $cid==$admin){
file_put_contents("rubl/bonus2.txt","$text");
$ch4 = file_get_contents("ch4.txt");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Bonus $botla kanaliga yuborildi",
'reply_markup'=>$panel,
]);
unlink("admin.txt");
$vaqt1=date('H:i',strtotime('0 hour'));
$vaqt11=date('H:i',strtotime('1 hour'));
bot('sendmessage',[
'chat_id'=>"$bonuskanal", 
'text'=>"
*🎲 O'yin boshlandi!

🧮 Yutib olingan pullar: 0 $valyuta
🏦 Yutib olinishi mumkin bo'lgan pullar: 0 $valyuta
👥 O'yinda qatnashgan foydalanuvchilar: 0/0 ta
🧭 Navbatdagi o'yin: UZB $vaqt11 da 

✉️ @$botchat da muhokama qiling
🛠 Bot admini: @$adminuser

🤖 Bizning bot: @$botname

⏳ Boshlangan vaqti:* $vaqt1",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🎁 Yutuqni olish","callback_data"=>"bo"]],
]
]),
]);
}
mkdir("rubl");
if($data == "bo"){
$olindi=file_get_contents("rubl/bonus2.txt");
$ee1 = file_get_contents("rubl/olindi1.txt");
$eea = substr_count($ee1,"n"); 
if($eea==$olindi or $olindi==$eea){
$mn2 = file_get_contents("rubl/berildi1.txt");
$olindi=file_get_contents("rubl/bonus2.txt");
$vaqt2=date('H:i',strtotime('0 hour'));
$vaqt22=date('H:i',strtotime('1 hour'));
$mn2 = file_get_contents("rubl/berildi1.txt");
bot('editMessageText',[
'chat_id'=>"$bonuskanal",
'message_id'=>$message_id,
'text'=>"

‼️ O'yin yakunlandi!

🧮 Yutib olingan pullar: $mn2 $valyuta
🏦 Yutib olinishi mumkin bo'lgan pullar: 0 $valyuta
👥 O'yinda qatnashgan foydalanuvchilar: $eea/$olindi ta
🧭 Navbatdagi o'yin: UZB $vaqt22 da

✉️ @$botchat da muhokama qiling
🛠 Bot admini: @$adminuser

🤖 Bizning bot: @$botname

⏳ Tugagan vaqti: $vaqt2
",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🤖 Botga kirish",'url'=>"https://t.me/$botname"]],
]
]),
]);
}else{
$id = $update->callback_query->id;
$frid= $update->callback_query->from->id;
$ee1 = file_get_contents("rubl/olindi1.txt");
if(mb_stripos($ee1,$frid)!==false){
bot('answerCallbackQuery',[
'callback_query_id'=>$id,
'text'=>"⚠️ Sizga bonus berilgan, iltimos keyingi bonusni kuting!",
"show_alert"=>true,
]);
}else{
$minb = file_get_contents("rubl/bonus3.txt");
$maxb =file_get_contents("rubl/bonus4.txt");
$bonusrand = rand($minb,$maxb);
$vaqt1 = date('H:i',strtotime('0 hour'));
$vaqt121 = date('H:i',strtotime('1 hour'));
$id = $update->callback_query->id;
$pul = file_get_contents("pul/$frid.txt");
$bonus=$pul+$bonusrand;
file_put_contents("pul/$frid.txt","$bonus");
file_put_contents("rubl/$frid.txt",1);
$frid= $update->callback_query->from->id;
bot('answerCallbackQuery',[
'callback_query_id'=>$id,
'text'=>"
🎉 Berildi $bonusrand-$valyuta
💵 Hisobingizda: $bonus-$valyuta",
'show_alert'=>true,
]);
file_put_contents("rubl/olindi1.txt","n".$frid, FILE_APPEND);
$ee1 = file_get_contents("rubl/olindi1.txt");
$eea = substr_count($ee1,"n"); 
$mm1 = file_get_contents("rubl/berildi1.txt");
$mm3 = $mm1+$bonusrand;
file_put_contents("rubl/berildi1.txt","$mm3");
$mn2 = file_get_contents("rubl/berildi1.txt");
$olindi=file_get_contents("rubl/bonus2.txt");
    bot('editMessageText',[
    'chat_id'=>"$bonuskanal", 
      'message_id'=>$message_id,
'text'=>"
🎲 O'yin boshlandi!

🧮 Yutib olingan pullar: $mn2 $valyuta
🏦 Yutib olinishi mumkin bo'lgan pullar oralig'i: $minb-$maxb $valyuta
👥 O'yinda qatnashgan foydalanuvchilar: $eea/$olindi ta
🧭 Navbatdagi o'yin: UZB $vaqt121 da

✉️ @$botchat da muhokama qiling
🛠 Bot admini: @$adminuser

🤖 Bizning bot: @$botname

⏳ Boshlangan vaqti: $vaqt1
",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>" 🎁 Yutuqni olish","callback_data"=>"bo"]],
]
]),
]);
}
}
}
/*$admin5_menu1 = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🎁 Kunlik bonusni belgilash"],['text'=>"🗑️ Kunlik bonusni o'chirish"]],
[['text'=>"🗄 Boshqarish"]]
]
]);
*/
if($tx == "🎁 Kunlik bonus" and $cid == $admin){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"<b>🎁 Kunlik bonus sozlamalari xush kelibsiz</b>",
    'parse_mode'=>"html",
    'reply_markup'=>$admin5_menu1
    ]);
}

if($tx == "🗑️ Kunlik bonusni o'chirish" and $cid == $admin){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"✅ Kunlik bonus o'chirildi",
    'parse_mode'=>"html",
    'reply_markup'=>$admin4_menu1
    ]);
    unlink("admin/kunbonus.txt");
    unlink("admin/kunbonus/nom.txt");
    rmdir("bonus");
}

if($tx == "🎁 Kunlik bonusni belgilash" and $cid == $admin){
	
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"Kunlik bonusni qiymatini kirit",
    'parse_mode'=>"html",
        'reply_markup'=>$orqaga1
    ]);
    file_put_contents("step/$cid.txt","kunlikbonus");
    }
if($userstep == "kunlikbonus" and $tx !== "🗄 Boshqarish"){
	file_put_contents("admin/kunbonus.txt","$tx");
	file_put_contents("admin/kunbonus/nom.txt","💰 Kunlik bonus");
bot('sendMessage',[
 'chat_id'=>$cid,
'text'=>"✅ Kunlik bonus $tx so'mga o'zgardi.",
  'parse_mode'=>"html",
    'reply_markup'=>$admin4_menu1
    ]);
    unlink("step/$cid.txt");
}

$vaqt = date('D');
mkdir("bonus");
$frid= $update->callback_query->from->id;
if($data == "kunbonus"){
$bonustime = file_get_contents("bonus/$cid2.txt");
$bonusrand = file_get_contents("admin/kunbonus.txt");
if($bonustime == $vaqt){
bot('sendmessage',[
'chat_id'=>$cid2,
'text'=>"📛Siz bonusni olib bo‘lgansiz!",
'parse_mode'=>'markdown',
]);
}else{
$pul = file_get_contents("pul/$cid2.txt");
$bonus=$pul+$bonusrand;
file_put_contents("pul/$cid2.txt","$bonus");
file_put_contents("bonus/$cid2.txt","$vaqt");
bot('sendmessage',[
'chat_id'=>$cid2,
'text'=>"👏Tabriklaymiz sizga $bonusrand uzs miqdorida 🎁bonus taqdim etildi!",
'parse_mode'=>'markdown',
]);
}
} 
