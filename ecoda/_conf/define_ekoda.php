<?php

    // COMMON
    //define("__APP__", "sys");

    /// 江古田
    /// mail　
    // 仮サポーター登録 start
    define("EVENT_TITLE_J", "【江古田芸術祭】");
    define("EVENT_TITLE_E", "[EKODA ARTS FESTIVAL]");
    define("EVENT_TITLE_E", "[EKODA ARTS FESTIVAL]");
    define("RETURN_PATH", "no_replay@art-festival.net");
    define("PRE_ENTRY_SUBJECT_J", EVENT_TITLE_J."仮登録のご連絡です！");
    define("PRE_ENTRY_SUBJECT_E", EVENT_TITLE_E."The notice of provisional registration");
    define("SENDER_J", EVENT_TITLE_J);
    define("NO_REPLAY_MAIL", 'no-replay@art-festival.net');

    // URL & pass
    define("__SYS__", 'sys/');
    define("DR", $_SERVER[DOCUMENT_ROOT]);
    define("__FESURL__", 'https://ekoda.art-festival.net/');
    
    define("ORGANISER_URL", "https://green-line.tokyo"); 
    $organiserUrl = ORGANISER_URL;
    
    $preentry_URL = __FESURL__.__SYS__.'_login/';
    define("TO_ENTRY_URL", $preentry_URL);
 
    $organiserUrl = ORGANISER_URL;

    $preentry_mail_body_j =<<< EOF
   【江古田芸術祭】
    
    __HANDLE__さん、
    この度は江古田芸術祭への参加、誠に有難う御座います！

    下記URLからのログインにてご登録を完了となり、アーティスト登録、店舗登録などが可能となります！
    思う存分ご宣伝下さい！
    __TOENTRYURL__

    江古田芸術祭は、
    ”芸術”というキーワードで、人・街を結び
    芸術の振興、そしてあなたの芸術やご趣味の発表の場の創出、ご活動の支援と、
    地域経済発展の為の、『非営利』のイベント（with システム）です。
    どうぞご活用ください！
    
    ----------------------------------------------------------------------
    [江古田芸術祭事務局]
    お問い合わせ：https:ekoda.art-festival.net/inquiry
    運営：グリーン・ライン・アーティスツ
    {$organiserUrl}
    ----------------------------------------------------------------------
    
EOF;

$preentry_mail_body_e =<<< EOF
EVENT_TITLE_E
 
 Helllo, __HANDLE__ !
 Thank you for participating in the Ekoda arts festival!

 This art festival's purposes are,

* Essential development of art
* People who aspire to art and the people who live there
* Regional economic support

realizing these by using the keyword "art".

 __TOENTRYURL__
[Contact]
https:ekoda.art-festival.net/inquiry
[Organizer] Green Line Artists
{$organiserUrl}
EOF;

define("PRE_ENTRY_MAIL_BODY_J", $preentry_mail_body_j);
define("PRE_ENTRY_MAIL_BODY_E", $preentry_mail_body_j);

define('ART_CATEGORIES', 
    [
        1 => [0 => '音楽', 1 => 'musice'],
        2 => [0 => '美術', 1 => 'art'],
        3 => [0 => 'エンターテインメント', 1 => 'Entertainment'],
        4 => [0 => '文芸', 1 => 'Literature'],
        5 => [0 => '芸術関連技術', 1 => 'Art-related technologies'],
        6 => [0 => '手芸 園芸 etc', 1 => 'Handicraft gardening etc'],
        7 => [0 => 'その他', 1 => 'Others'],
    ]); 


    // 仮サポーター登録 end

















