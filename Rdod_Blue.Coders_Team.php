<?php

//Codded By Coders Team 
//Site : https://www.coders-team.xyz
//Telegram : https://t.me/CodersTeam_Offical
//Anas : @AnasHatlr / Amore : @AMORE_TP

ob_start();

define('API_KEY',"-Token-");
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

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$time = time() + (979 * 11 + 1 + 30);
$id = $message->from->id;
$type = $update->message->chat->type;
$re = $update->message->reply_to_message;
$re_id = $update->message->reply_to_message->from->id;
$re_user = $update->message->reply_to_message->from->username;
$user_id = $update->message->from->id;
$re_name = $update->message->reply_to_message->from->first_name;
$re_msgid = $update->message->reply_to_message->message_id;
$name = $message->from->name;
$username = $message->from->username;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->message->message_id;
##############################################################


if($text == "/start" or $text == "تفعيل" or $text == "دلوشه"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"[هلْٰا  حٌٰـيَٰـﮧاتّٰـيَٰـﮧ نٍٰ૭ورِٰتّٰـ/يَٰـﮧ 😻🙊ا](t.me/CodersTeam_Offical)",
'parse_mode'=>"Markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "شلونكم" or $text == "شلونك" or $text == "شلونج"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"[ تّٰـمٍٰامٍٰ  ૭وانٍٰتّٰـ/يَٰـﮧ🙋🏻🙊   ](t.me/CodersTeam_Offical)",
'parse_mode'=>"Markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "هلا" or $text == "هلاو" or $text == "هلو"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"[  ھہلآ ّہيِٰہڪٰྀہٰٰ✫┋😾😻  ](t.me/CodersTeam_Offical)",
'parse_mode'=>"Markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "بخير" or $text == "تمام" or $text == "الحمدلله"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"[ دِٰؤمٍٰكٍٰ/جًّـ  يَٰـﮧعافِٰـيَٰـﮧتّٰـيَٰـﮧ  ْٰ₎┋😍🙊   ](t.me/CodersTeam_Offical)",
'parse_mode'=>"Markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "مشتاقين" or $text == "مشتاقلج" or $text == "مشتاقلك"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"[  انٍٰيَٰـﮧ الْٰاشَُـؤقٍٰ  انٍٰتّٰـ/يَٰـﮧ ❤️😉  ](t.me/CodersTeam_Offical)",
'parse_mode'=>"Markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "اخبارك" or $text == "وين ما وين" or $text == "شكو ماكو"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"[ ْٰسٌٍـلْٰامٍٰتّٰـكٍٰ/جًّـ  مٍٰاكٍٰكٍٰ૭و    َُـيَٰـﮧ😐🙈  ](t.me/CodersTeam_Offical)",
'parse_mode'=>"Markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "شسمك" or $text == "شسمج" or $text == "بوت"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"[ ْٰنٍٰيَٰـﮧ ٌٰـنٍٰيَٰـﮧه ؤاسٌٍـمٍٰيَٰـﮧ دِٰلْٰ૭وشَُـه مٍٰؤ ٌٰـؤتّٰـ  ⁞⚡️😂 ](t.me/CodersTeam_Offical)",
'parse_mode'=>"Markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "هههه" or $text == "ههه" or $text == "هه"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"[ ْٰدِٰ૭૭૭૭૭مٍٰ  حٌٰـبٌٰـيَٰـﮧ  •|• ✨🌸 ](t.me/CodersTeam_Offical)",
'parse_mode'=>"Markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "هههههه" or $text == "ههههه" or $text == "هههه"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"[ ْٰدِٰ૭૭૭૭૭مٍٰ  حٌٰـبٌٰـيَٰـﮧ  •|• ✨🌸 ](t.me/CodersTeam_Offical)",
'parse_mode'=>"Markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "اعشقج" or $text == "احبج" or $text == "احبك" or $text == "اعشقج"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"[اسٌٍـفِٰـ  مٍٰرِٰتّٰـبٌٰـطَِـ/ه  😻😹  ](t.me/CodersTeam_Offical)",
'parse_mode'=>"Markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "تحبوني" or $text == "تحبني" or $text == "تحبيني"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"[انٍٰتّٰـ/ي بٌٰـكٍٰدِٰ ابٌٰـنٍٰيَٰـﮧ😹😾    ](t.me/CodersTeam_Offical)",
'parse_mode'=>"Markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "ياملف" or $text == "المطور" or $text == "السورس"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"[تّٰـابٌٰـع  لْٰ 😻  @iq_110 ](t.me/CodersTeam_Offical)",
'parse_mode'=>"Markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "امير" or $text == "امؤري" or $text == "اموري"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"[  هاذا المطور مال اني😹 😻  @iq_110 ](t.me/CodersTeam_Offical)",
'parse_mode'=>"Markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id, 
]);
}
//Codded By Coders Team 
//Site : https://www.coders-team.xyz
//Telegram : https://t.me/CodersTeam_Offical
//Anas : @AnasHatlr / Amore : @AMORE_TP

###########################الاوامر##########################
if(preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/',$text) ){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"عہہزيہزي  الرؤابط ممنؤعه في المجمؤعه انتبه🚫💣  $name \n معرفك @$username"
]);
}
if($reply_mesage && $text == "/kick" or $text == "حظر" or $text == "حظر"){
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"- تم حظر العضو 🔱 •
        • العضو 📌 • : @$user_reply •",
        'reply_to_message_id'=>$message->message_id,
    ]);
    bot('kickChatMember',[
        'chat_id'=>$chat_id,
        'user_id'=>$id_reply,
    ]);
}
if($reply_mesage && $text == "/unkick" or $text == "الغاء حظر" or $text == "الغاء الحظر"){
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"- تم الغاء الحظر العضو 🔱 •
        • العضو 📌 • : @$user_reply •",
        'reply_to_message_id'=>$message->message_id,
    ]);
    bot('ChatMember',[
        'chat_id'=>$chat_id,
        'user_id'=>$id_reply,
    ]);
}
//Codded By Coders Team 
//Site : https://www.coders-team.xyz
//Telegram : https://t.me/CodersTeam_Offical
//Anas : @AnasHatlr / Amore : @AMORE_TP

########################################################3
if($text =="الوقت" or $text =="الساعه" or $text =="التاريخ"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"🇮🇶 البلد : العراق \n" . "❣️  السنة : " . date("Y") . "\n" . "🗓  الشهر : " . date("n") . "\n" . "💫  اليوم :" . date("j") . "\n" . "⏰ الساعه :" . date('g', $time) . "\n" . "⌚️ الدقيقه :" . date('i', $time) . "\n" . " ❣
تابع ل @CodersTeam_Offical",
'reply_to_message_id'=>$message->message_id
]);
}
$url2 = "http://api.telegram.org/bot".API_KEY."/getChatMembersCount?chat_id=$chat_id";
$getmember = file_get_contents($url2);
$json2 = json_decode($getmember);
$result2 = $json2->result; 
$get = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChat?chat_id=$chat_id"));
$about = $get->result->description;
if($text =="/info" or $text =="ايدي" or $text =="معلوماتي"){
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"• | معلومات المجموعة ✨🌝 | • 
    - اهلا بك حياتي بنور💥💫 : @$username  •
  $name
〰➰〰➰〰➰〰➰〰➰〰➰
       _ ايديك 💡 •   $id
    - اسم المجموعة 🏴  • : $Name_Group •
    - ايدي المجموعة 🎈 • : $chat_id •
    - عدد الاعضاء 👥 • : $result2 •
    - عدد الرسائل 📝 • :  $message->message_id •
    - وصف المجموعة ◽️ • : $abou
〰➰〰➰〰➰〰➰〰➰〰➰",
    'reply_to_message_id'=>$message->message_id,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [['text'=>"- 🗨➖DEV➖💬 - ",'url'=>"t.me/iq_110"]]
    ]
    ])
    ]);
}
//Codded By Coders Team 
//Site : https://www.coders-team.xyz
//Telegram : https://t.me/CodersTeam_Offical
//Anas : @AnasHatlr / Amore : @AMORE_TP

##########################################
if($message->new_chat_member){
bot('sendMessage',[
'chat_id' =>$chat_id,
'text' =>"مٍٰنٍٰؤرِٰ/ه  عافِٰـيَٰـﮧتّٰـيَٰـﮧ ‏ ⁾⇣✿💖 [اضغط هنا ](t.me/CodersTeam_Offical)",
 'reply_to_message_id'=>$message->message_id, 
 'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true'
]);
}

if($message->left_chat_member){
bot('sendMessage',[
'chat_id' =>$chat_id,
'text' =>"     خرررب هاذا غادر  [اضغط هنا من فضلك 🌝✨](t.me/CodersTeam_Offical)",
 'reply_to_message_id'=>$message->message_id, 
 'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true'
]);
}
//Codded By Coders Team 
//Site : https://www.coders-team.xyz
//Telegram : https://t.me/CodersTeam_Offical
//Anas : @AnasHatlr / Amore : @AMORE_TP

########################################
$yss = $message->chat->type;
if($text == "نوع المجموعة" or $text == "/type"){
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"المجموعة هية ☑️ : $yss ",
        'reply_to_message_id'=>$message->message_id,
]);
}

//Codded By Coders Team 
//Site : https://www.coders-team.xyz
//Telegram : https://t.me/CodersTeam_Offical
//Anas : @AnasHatlr / Amore : @AMORE_TP

?>
