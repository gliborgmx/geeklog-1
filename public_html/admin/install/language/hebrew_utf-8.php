<?php

/* Reminder: always indent with 4 spaces (no tabs). */
// +---------------------------------------------------------------------------+
// | Geeklog 1.6                                                               |
// +---------------------------------------------------------------------------+
// | hebrew_utf-8.php                                                          |
// |                                                                           |
// | Hebrew language file for the Geeklog installation script                  |
// +---------------------------------------------------------------------------+
// | Copyright (C) 2008                                                        |
// | http://lior.weissbrod.com                                                 |
// | Version 1.5#1                                                             |
// +---------------------------------------------------------------------------+
// |                                                                           |
// | This program is free software; you can redistribute it and/or             |
// | modify it under the terms of the GNU General Public License               |
// | as published by the Free Software Foundation; either version 2            |
// | of the License, or (at your option) any later version.                    |
// |                                                                           |
// | This program is distributed in the hope that it will be useful,           |
// | but WITHOUT ANY WARRANTY; without even the implied warranty of            |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the             |
// | GNU General Public License for more details.                              |
// |                                                                           |
// | You should have received a copy of the GNU General Public License         |
// | along with this program; if not, write to the Free Software Foundation,   |
// | Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.           |
// |                                                                           |
// +---------------------------------------------------------------------------+

// +---------------------------------------------------------------------------+

$LANG_CHARSET = 'utf-8';
$LANG_DIRECTION = 'rtl';

// +---------------------------------------------------------------------------+
// | Array Format:                                                             |
// | $LANG_NAME[XX]: $LANG - variable name                                     |
// |                 NAME  - where array is used                               |
// |                 XX    - phrase id number                                  |
// +---------------------------------------------------------------------------+

// +---------------------------------------------------------------------------+
// install.php

$LANG_INSTALL = array(
    0 => 'Geeklog - The Ultimate Weblog System',
    1 => 'תמיכת התקנה',
    2 => 'The Ultimate Weblog System',
    3 => 'התקנת Geeklog',
    4 => 'דרוש PHP 4.1.0',
    5 => 'מצטערים, אבל Geeklog דורש לפחות PHP 4.1.0 בשביל לרוץ (לכם יש גירסה ',
    6 => '). אנא <a href="http://www.php.net/downloads.php">שדרגו את גירסת ה-PHP שלכם</a> או בקשו ממארחי השרת שלכם לעשות זאת בשבילכם.',
    7 => 'לא אותרו הקבצים של Geeklog',
    8 => 'קובץ ההתקנה לא הצליח לאתר את הקבצים החשובים של Geeklog. זה כנראה מפני שהיזזתם אותם ממיקום ברירת המחדל שלהם. אנא ציינו את הנתיבים לקבצים ולספריות להלן:',
    9 => 'ברוכים הבאים ותודה לכם שבחרתם Geeklog!',
    10 => 'קובץ/ספרייה',
    11 => 'הרשאות',
    12 => 'שנו ל',
    13 => 'כרגע',
    14 => 'שנו את הספרייה ל',
    15 => 'ייצוא הכותרות ב-Geeklog מכובה. ספריית ה-<code>backend</code> לא נבדקה',
    17 => 'התמונות של המשתמשים מנוטרלים. ספריית ה-<code>userphotos</code> לא נבדקה',
    18 => 'התמונות במאמרים מנוטרלים. ספריית ה-<code>articles</code> לא נבדקה',
    19 => 'Geeklog צריך שקבצים וספריות מסוימות יהיו ניתנים לכתיבה על ידי השרת. להלן רשימת הקבצים והספריות שצריכים להשתנות.',
    20 => 'אזהרה!',
    21 => 'המערכת לניהול תוכן והאתר לא יעבדו כמו שצריך עד שיתוקנו הבעיות המצוינות לעיל. כישלון בקיום הצעד הזה הוא הסיבה מספר אחת שאנשים מקבלים שגיאות כשהם מנסים בפעם הראשונה להריץ את Geeklog. אנא בצעו את השינויים הדרושים לפני שהנכם ממשיכים.',
    22 => 'לא ידוע',
    23 => 'ביחרו את שיטת ההתקנה שלכם:',
    24 => 'התקנה חדשה',
    25 => 'שידרוג',
    26 => 'השינוי לא מצליח',
    27 => '. האם וידאתם שהקובץ ניתן לכתיבה על ידי השרת?',
    28 => 'siteconfig.php. האם וידאתם שהקובץ ניתן לכתיבה על ידי השרת?',
    29 => 'אתר Geeklog',
    30 => 'עוד אתר מעניין של Geeklog',
    31 => 'מידע הגדרות הכרחיות',
    32 => 'שם האתר',
    33 => 'סלוגן האתר',
    34 => 'סוג מאגר המידע',
    35 => 'MySQL',
    36 => 'MySQL עם תמיכה בטבלת InnoDB',
    37 => 'Microsoft SQL',
    38 => '',
    39 => 'שם השרת של מאגר המידע',
    40 => 'שם מאגר המידע',
    41 => 'שם המשתמש של מאגר המידע',
    42 => 'הסיסמה למאגר המידע',
    43 => 'תחילית הטבלאות במאגר המידע',
    44 => 'הגדרות אופציונליות',
    45 => 'כתובת האתר',
    46 => '(ללא לוכסן בסוף)',
    47 => 'נתיב ספריית ה-admin',
    48 => 'כתובת האימייל של האתר',
    49 => 'כתובת האימייל של No-Reply',
    50 => 'התקנה',
    51 => 'נדרש MySQL 3.23.2',
    52 => 'מצטערים, אך Geeklog דורש לפחות MySQL 3.23.2 כדי לרוץ (לכם יש גירסה ',
    53 => '). אנא <a href="http://dev.mysql.com/downloads/mysql/">שדרגו את גירסת ה-MySQL שלכם</a> או בקשו ממארחי השרת שלכם לעשות זאת בשבילכם.',
    54 => 'מידע מאגר המידע אינו נכון',
    55 => 'מצטערים, אך מידע מאגר המידע שציינתם נראה שגוי. אנא חיזרו ונסו שוב.',
    56 => 'החיבור למאגר המידע נכשל',
    57 => 'מצטערים, אך ההתקנה לא הצליחה למצוא את מאגר המידע שציינתם. מאגר המידע אינו קיים או ששגיתם באיות שמו. אנא חיזרו ונסו שוב.',
    58 => '. האם וידאתם שהקובץ ניתן לכתיבה על ידי השרת?',
    59 => 'הערה:',
    60 => 'טבלאות InnoDB אינן נתמכות על ידי גירסת ה-MySQL שלכם. האם תרצו להמשיך את ההתקנה ללא תמיכה ב-InnoDB?',
    61 => 'חזרה',
    62 => 'המשך',
    63 => 'כבר מותקן מאגר מידע של Geeklog. ההתקנה לא תאפשר לכם להריץ התקנה חדשה על מאגר מידע Geeklog קיים. כדי להמשיך הנכם חייבים לעשות אחד מהדברים הבאים:',
    64 => 'מיחקו את הטבלאות ממאגר המידע הקיים. או פשוט מיחקו את מאגר המידע וצרו אותו צחדש. ליחצו על "נסיון חוזר" שלהלן.',
    65 => 'בצעו שידרוג למאגר מידע (לגירסת Geeklog חדשה) על ידי בחירת אופציית השידרוג שלהלן.',
    66 => 'נסיון חוזר',
    67 => 'שגיאה בהקמת מאגר המידע של Geeklog', 
    68 => 'מאגר המידע אינו ריק. אנא מיחקו את כל הטבלאות במאגר המידע והתחילו מחדש.',
    69 => 'שידרוג Geeklog',
    70 => 'לפני שנתחיל חשוב שתגבו את מאגר המידע של Geeklog הנוכחי שלכם. ההתקנה תשנה את מאגר המידע של Geeklog כך שאם משהו ישתבש ותאולצו להתחיל מחדש את תהליך השידרוג, תצטרכו גיבוי של מאגר המידע המקורי. *ראו הוזהרתם!*',
    71 => 'אנא ודאו שבחרתם את הגירסה הנכונה של Geeklog שאותה תרצו לשדרג. ההתקנה משדרגת בשלבים לפי כל גרסה החל מהגירסה שבחרתם (כלומר תוכלו לשדרג ישירות מכל גירסה ישנה היישר אל ',
    72 => ').',
    73 => 'אנא שימו לב שההתקנה לא תשדרג שום גרסת בטה או גרסה מועמדת לשיחרור של Geeklog.',
    74 => 'מאגר המידע כבר מעודכן!',
    75 => 'נראה שמאגר המידע שלכם כבר מעודכן. כנראה שהרצתם כבר שדרוג. אם אתם צריכים להריץ את השידרוג מחדש, אנא התקינו מחדש את גיבוי מאגר המידע שלכם ונסו שוב.',
    76 => 'בחירת גרסת ה-Geeklog הנוכחית שלכם',
    77 => 'ההתקנה לא הצליחה לזהות את הגירסה הנוכחית שלכם של Geeklog, אנא ביחרו אותה מהרשימה שלהלן:',
    78 => 'תקלה בשידרוג',
    79 => 'חלה תקלה בזמן השידרוג של התקנת Geeklog שלכם.',
    80 => 'שינוי',
    81 => 'הפסק!',
    82 => 'חשוב מאוד שתשנו את הרשאות הקבצים הרשומים להלן. Geeklog לא יצליח לעבור התקנה עד שתעשו זאת.',
    83 => 'תקלה בהתקנה',
    84 => 'הנתיב "',
    85 => '" נראה שאינו נכון. אנא חיזרו ונסו שוב.',
    86 => 'שפה',
    87 => 'http://www.geeklog.net/forum/index.php?forum=1',
    88 => 'שינוי הספרייה והקבצים שבה ל',
    89 => 'גירסה נוכחית:',
    90 => 'מאגר מידע ריק?',
    91 => 'נראה שמאגר המידע שלכם ריק או שהגדרות ההזדהות שציינתם בשבילו אינן נכונות. או שאולי התכוונתם לבצע התקנה חדשה (ולא שידרוג)? אנא חיזרו ונסו שוב.',
    92 => 'שימוש ב-UTF-8'
);

// +---------------------------------------------------------------------------+
// success.php

$LANG_SUCCESS = array(
    0 => 'ההתקנה הושלמה',
    1 => 'ההתקנה של Geeklog ',
    2 => ' הושלמה!',
    3 => 'כל הכבוד, הצלחתם ',
    4 => ' Geeklog. אנא קחו רגע כדי לקרוא את המידע המצוין להלן.',
    5 => 'כדי להזדהות באתר ה-Geeklog החדש שלכם, אנא השתמשו בחשבון זה:',
    6 => 'שם משתמש:',
    7 => 'Admin',
    8 => 'סיסמה:',
    9 => 'password',
    10 => 'אזהרת אבטחה',
    11 => 'אל תשכחו לבצע',
    12 => 'דברים',
    13 => 'להסיר או לשנות את שם ספריית ההתקנה,',
    14 => 'לשנות ל-',
    15 => 'את סיסמת החשבון.',
    16 => 'לשנות את ההרשאות של',
    17 => 'וגם של',
    18 => 'בחזרה ל:',
    19 => '<strong>שימו לב:</strong> עקב כך ששונה מודל האבטחה, יצרנו חשבון חדש עם ההרשאות שהנכם זקוקים להן כדי לנהל את אתרכם החדש.  שם המשתמש של חשבון חדש זה הוא <b>NewAdmin</b> והסיסמה היא <b>password</b>',
    20 => 'להתקין את',
    21 => 'לשדרג את'
);

// +---------------------------------------------------------------------------+
// help.php

$LANG_HELP = array(
    0 => 'תמיכה בהתקנת Geeklog',
    1 => 'שם האתר שלכם.',
    2 => 'תיאור פשוט של האתר שלכם.',
    3 => 'Geeklog יכול להיות מותקן בעזרת שימוש ב-MySQL או Microsoft SQL database. אם אינכם בטוחים איזו אופצייה לבחור עליכם ליצור קשר עם מארחי השרת שלכם.</p><p class="indent"><strong>שימו לב:</strong> טבלאות InnoDB עשויות לשפר את הביצועים באתרים (מאוד) גדולים, אך גם להפוך את גיבויי מאגר המידע ליותר מסובכים.',
    4 => 'שם הרשת (או כתובת ה-IP) של שרת מאגר המידע שלכם. בדרך כלל זהו "localhost". אם אינכם בטוחים צרו קשר אם מארחי השרת שלכם.',
    5 => 'שם מאגר המידע שלכם. אם אינכם בטוחים מהו צרו קשר עם מארחי השרת שלכם.',
    6 => 'שם המשתמש של מאגר המידע שלכם. אם אינכם בטוחים מהו צרו קשר עם מארחי השרת שלכם.',
    7 => 'סיסמת מאגר המידע שלכם. אם אינכם בטוחים מהי צרו קשר עם מארחי השרת שלכם.',
    8 => 'חלק מהמשתמשים מעוניינים להתקין העתקים מרובים של Geeklog על אותו מאגר מידע. כדי שכל עותק של Geeklog יוכל לתפקד כמו שצריך הוא חייב שתהיה לו תחילית טבלה ייחודית (כלומר gl1_, gl2_, וכדומה).',
    9 => 'ודאו שזוהי הכתובת הנכונה של האתר שלכם. כלומר, איפה שהקובץ של Geeklog בשם <code>index.php</code> נמצא (ללא לוכסן בסוף).',
    10 => 'לחלק ממארחי השרתים יש ספריית ניהול מוגדרת מראש. במקרה זה, תצטרכו לשנות את שם ספריית ה-admin של Geeklog למשהו כמו "myadmin" ולשנות את הכתובת שלהלן בהתאם. אל תעשו זאת אלא אם תיתקלו בבעיות כשתנסו לגשת לתפריט הניהול של Geeklog.',
    11 => 'זוהי הכתובת החוזרת בכל הודעות האימייל שישלחו מ-Geeklog ובמידע צרו קשר שמוצג בהזנות סינדיקציה.',
    12 => 'זוהי כתובת השולח של הודעות אימייל שנשלחות על ידי המערכת כשמשתמשים נרשמים וכדומה. היא צריכה להיות זהה לכתובת האימייל של האתר או להיות כתובת שלא מקבלת הודעות כדי למנוע מספאמרים להשיג את כתובת האימייל שלכם על ידי הרשמה לאתר. אם היא לא זהה לכתובת הרגילה, תהיה הודעה בהודעות שישלחו שלא מומלץ לענות להן.',
    13 => 'ציינו האם להשתמש ב-UTF-8 בתור קידוד ברירת המחדל של האתר שלכם. מומלץ בעיקר להתקנות רב לשוניות.'
);

?>
