<?php

namespace Faker\Provider\ar_EG;

class Person extends \Faker\Provider\Person
{
    protected static $maleNameFormats = [
        '{{firstNameMale}} {{lastName}}',
        '{{prefix}} {{firstNameMale}} {{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}}',
    ];

    protected static $femaleNameFormats = [
        '{{firstNameFemale}} {{lastName}}',
        '{{prefix}} {{firstNameFemale}} {{lastName}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}}',
    ];

    /**
     * @see http://muslim-names.us/
     */
    protected static $firstNameMale = [
        'آدم',
        'أبراهيم',
        'أحمد',
        'أدهم',
        'أسامة',
        'أسعد',
        'أشرف',
        'أكثم',
        'أكرم',
        'أمجد',
        'أمين',
        'أنس',
        'أنور',
        'أيمن',
        'أيوب',
        'إبراهيم',
        'إسلام',
        'إسماعيل',
        'إلياس',
        'إياد',
        'إيهاب',
        'ابراهيم',
        'احسان',
        'احمد',
        'ادريس',
        'ادم',
        'ادهم',
        'اديب',
        'اسامة',
        'اسحاق',
        'اسحق',
        'اسعد',
        'اسلام',
        'اسماعيل',
        'اصلان',
        'اكرم',
        'المنصور',
        'امجد',
        'امير',
        'امين',
        'أنس',
        'انور',
        'انيس',
        'اياد',
        'اياس',
        'ايمن',
        'ايوب',
        'باسل',
        'باسم',
        'باهر',
        'بدر',
        'برهان',
        'بسام',
        'بشار',
        'بشر',
        'بشير',
        'بكر',
        'بلال',
        'بليغ',
        'بهاء',
        'توفيق',
        'جابر',
        'جاسر',
        'جاسم',
        'جعفر',
        'جلال',
        'جمال',
        'جمزه',
        'جميل',
        'جهاد',
        'حاتم',
        'حازم',
        'حافظ',
        'حامد',
        'حبيب',
        'حسام',
        'حسان',
        'حسن',
        'حسني',
        'حسين',
        'حمدان',
        'حمدي',
        'حمزة',
        'حميد',
        'خالد',
        'خضر',
        'خلف',
        'خليفة',
        'خليل',
        'خميس',
        'داوود',
        'دياب',
        'رأفت',
        'رؤوف',
        'رائد',
        'رائف',
        'راجح',
        'راجي',
        'راشد',
        'راضي',
        'راغب',
        'رافت',
        'راكان',
        'رامز',
        'رامي',
        'ربيع',
        'رجب',
        'رزق',
        'رشاد',
        'رشيد',
        'رضا',
        'رضوان',
        'رياض',
        'ريان',
        'زاهر',
        'زاهي',
        'زايد',
        'زكريا',
        'زمام',
        'زهير',
        'زياد',
        'زيد',
        'زيدان',
        'زين',
        'سالم',
        'سامح',
        'سامر',
        'سامي',
        'سعد',
        'سعيد',
        'سلام',
        'سلطان',
        'سلمان',
        'سليم',
        'سليمان',
        'سمعان',
        'سميح',
        'سنان',
        'سند',
        'سيف',
        'شادي',
        'شاكر',
        'شريف',
        'شهاب',
        'شهم',
        'شوان',
        'صادق',
        'صافي',
        'صالح',
        'صفاء',
        'صفوان',
        'صقر',
        'صلاح',
        'صلاح الدين',
        'صهيب',
        'ضرغام',
        'ضياء',
        'ضياء الدين',
        'طارق',
        'طالب',
        'طاهر',
        'طه',
        'عادل',
        'عاصم',
        'عاطف',
        'عبيدة',
        'عثمان',
        'عدلي',
        'عدنان',
        'عزت',
        'عصام',
        'علاء',
        'علي',
        'عماد',
        'عمار',
        'عمر',
        'عمرو',
        'عنان',
        'عواد',
        'عوض',
        'عوف',
        'عوني',
        'عيد',
        'عيسى',
        'غازي',
        'غسان',
        'غيث',
        'فؤاد',
        'فادي',
        'فارس',
        'فاروق',
        'فاضل',
        'فايز',
        'فتحي',
        'فراس',
        'فرح',
        'فريد',
        'فهد',
        'فهمي',
        'فوزي',
        'فيصل',
        'قارس',
        'قاسم',
        'قيس',
        'كامل',
        'كرم',
        'كريم',
        'كمال',
        'لؤي',
        'لبيب',
        'لطفي',
        'ليث',
        'مأمون',
        'مؤمن',
        'مؤنس',
        'ماجد',
        'مازن',
        'مالك',
        'مامون',
        'ماهر',
        'مبارك',
        'مجد',
        'مجدي',
        'محسن',
        'محمد ',
        'محمود',
        'محي',
        'مختار',
        'مدحت',
        'مراد',
        'مروان',
        'مسعد',
        'مسعود',
        'مصباح',
        'مصطفى',
        'مصعب',
        'معاذ',
        'معتز',
        'معتصم',
        'ممدوح',
        'منتصر',
        'منصور',
        'منير',
        'مهاب',
        'مهدي',
        'مهند',
        'موسى',
        'نائل',
        'ناجي',
        'نادر',
        'ناصر',
        'نبيل',
        'نديم',
        'نزار',
        'نزيه',
        'نسيم',
        'نشات',
        'نصار',
        'نصر',
        'نضال',
        'نعمان',
        'نعمة',
        'نعيم',
        'نقولا',
        'هادي',
        'هاشم',
        'هانى',
        'هاني',
        'هشام',
        'هلال',
        'همام',
        'هيثم',
        'وائل',
        'واصف',
        'وجدي',
        'وجيه',
        'وحيد',
        'وديع',
        'وسام',
        'وسيم',
        'وصفي',
        'وليد',
        'وهيب',
        'ياسر',
        'ياسين',
        'يامن',
        'يحيى',
        'يشار',
        'يعقوب',
        'يوسف',
        'يونس',
    ];

    /**
     * @see http://muslim-names.us/
     */
    protected static $firstNameFemale = [
        'آثار',
        'آلاء',
        'آية',
        'أبرار',
        'أحلام',
        'أروى',
        'أريج',
        'أسماء',
        'أسيل',
        'أصاله',
        'أفنان',
        'ألاء',
        'أماني',
        'أمل',
        'أميرة',
        'أنسام',
        'أنوار',
        'إخلاص',
        'إسراء',
        'إكرام',
        'إنعام',
        'إيمان',
        'إيناس',
        'ابتهاج',
        'ابتهال',
        'إخلاص',
        'أروى',
        'أريج',
        'أزهار',
        'اسراء',
        'اسرار',
        'اسيل',
        'اشراق',
        'أفراح',
        'إكرام',
        'إلهام',
        'آمال',
        'أمنة',
        'أميرة',
        'أمينة',
        'أنعام',
        'أنوار',
        'آيات',
        'إيمان',
        'إيناس',
        'آية',
        'بتول',
        'بثينة',
        'بسمة',
        'بشائر',
        'بشرى',
        'تالا',
        'تالة',
        'تسنيم',
        'تغريد',
        'تقوى',
        'تقى',
        'تمارا',
        'تهاني',
        'ثريا',
        'جميلة',
        'جنى',
        'جهاد',
        'حبيبة',
        'حسناء',
        'حلا',
        'حليمة',
        'حنان',
        'حنين',
        'حياة',
        'خديجة',
        'خلود',
        'دارين',
        'داليا',
        'دانا',
        'دانة',
        'دانية',
        'دعاء',
        'دلال',
        'دنيا',
        'ديانا',
        'ديما',
        'دينا',
        'رؤى',
        'راما',
        'رانا',
        'رانيا',
        'راوية',
        'راية',
        'ربا',
        'رباب',
        'ربى',
        'رجاء',
        'رحمة',
        'رحمه',
        'رزان',
        'رشا',
        'رغد',
        'رغدة',
        'رقية',
        'رنا',
        'رناد',
        'رنده',
        'رنيم',
        'رنين',
        'رهف',
        'روان',
        'رولى',
        'رويدة',
        'ريان',
        'ريتا',
        'ريم',
        'ريما',
        'ريناد',
        'ريهام',
        'زكية',
        'زهرة',
        'زين',
        'زينا',
        'زينات',
        'زينب',
        'زينة',
        'ساجدة',
        'سارة',
        'سجى',
        'سحر',
        'سعاد',
        'سكينة',
        'سلسبيل',
        'سلمى',
        'سلوى',
        'سما',
        'سماح',
        'سماره',
        'سمر',
        'سمية',
        'سميرة',
        'سناء',
        'سندس',
        'سهام',
        'سهر',
        'سهى',
        'سهير',
        'سهيله',
        'سوزان',
        'سوسن',
        'سيرين',
        'سيرينا',
        'سيلين',
        'سيما',
        'شذى',
        'شروق',
        'شريفة',
        'شرين',
        'شريهان',
        'شفاء',
        'شهد',
        'شيرين',
        'شيماء',
        'صابرين',
        'صبا',
        'صباح',
        'صبرين',
        'صفا',
        'صفاء',
        'صفية',
        'ضحى',
        'ضياء',
        'عائشة',
        'عاليا',
        'عالية',
        'عبلة',
        'عبير',
        'عزة',
        'عزيزة',
        'عفاف',
        'علا',
        'علياء',
        'عهد',
        'غادة',
        'غدير',
        'غرام',
        'غزل',
        'غيداء',
        'فاتن',
        'فاديه',
        'فاطمة',
        'فايزة',
        'فتحية',
        'فدوى',
        'فدى',
        'فرح',
        'فريال',
        'فريدة',
        'فوزية',
        'فيروز',
        'فيفيان',
        'قمر',
        'لارا',
        'لانا',
        'لبنا',
        'لطيفة',
        'لمى',
        'لميس',
        'لنا',
        'لورا',
        'لورينا',
        'لونا',
        'ليان',
        'ليدا',
        'ليلى',
        'ليليان',
        'لين',
        'لينا',
        'لينة',
        'ليندا',
        'مايا',
        'مجدولين',
        'مديحة',
        'مرام',
        'مروة',
        'مريام',
        'مريم',
        'مشيرة',
        'معالي',
        'ملاك',
        'ملك',
        'منار',
        'منال',
        'منى',
        'مها',
        'مي',
        'ميادة',
        'مياده',
        'ميار',
        'ميان',
        'ميرا',
        'ميرال',
        'ميران',
        'ميرفت',
        'ميس',
        'ميساء',
        'ميسره',
        'ناديا',
        'نادية',
        'نادين',
        'ناديه',
        'نانسي',
        'نبيله',
        'نجاة',
        'نجلاء',
        'نجوى',
        'نداء',
        'ندى',
        'نرمين',
        'نسرين',
        'نسيمة',
        'نعمت',
        'نعمه',
        'نهاد',
        'نهى',
        'نوال',
        'نور',
        'نورا',
        'نوران',
        'نيروز',
        'نيفين',
        'هادلين',
        'هالة',
        'هانيا',
        'هايدي',
        'هبة',
        'هدايه',
        'هدى',
        'هديل',
        'هلا',
        'هنا',
        'هناء',
        'هنادي',
        'هند',
        'هيا',
        'هيفا',
        'هيفاء',
        'هيلين',
        'وئام',
        'وجدان',
        'وداد',
        'ورود',
        'وسام',
        'وسيم',
        'وعد',
        'وفاء',
        'ولاء',
        'يارا',
        'ياسمين',
        'يسرى',
    ];

    protected static $lastName = [
        'عبد الرحيم',
        'عبد الرحمن',
        'عبد الرؤوف',
        'عبد الحميد',
        'عبد الله',
        'عبد الباسط',
        'عبد الحليم',
        'عبد الجواد',
        'عبد الجليل',
        'عبد المجيد',
        'عبد المطلب',
        'عبد المهيمن',
        'عبد القادر',
        'عبد الفتاح',
        'عبد العزيز',
        'عبد السلام',
        'عبد الرزاق',
        'طلال',
        'هارون',
        'شافع',
        'عبد الكريم',
        'عبد اللطيف',
        'عبد الوهاب',
        'عبد الهادي',
        'عبد الناصر',
        'عبد المعطي',
        'نجيب',
        'مظهر',
        'عزيز',
        'عمران',
        'فواز',
        'غانم',
        'مجاهد',
        'عزمي',
        'زين العابدين',
        'كاظم',
        'السويلم',
        'رجائي',
        'مهران',
        'رسلان',
        'السقا',
        'مكي',
        'حارث',
        'غالب',
        'السايس',
        'صدام',
        'هوساوي',
        'السعيد',
        'الداوود',
        'جبر',
        'عز الدين',
        'عزام',
        'عز العرب',
        'الصعيدي',
        'جمال الدين',
        'السباعي',
        'الكفراوي',
    ];

    protected static $titleMale = ['السيد', 'الأستاذ', 'الدكتور', 'المهندس'];
    protected static $titleFemale = [
        'السيدة',
        'الآنسة',
        'الدكتورة',
        'المهندسة',
    ];
    private static $prefix = ['أ.', 'د.', 'أ.د', 'م.'];

    /**
     * @example 'أ.'
     */
    public static function prefix()
    {
        return static::randomElement(static::$prefix);
    }

    /**
     * @see https://ar.wikipedia.org/wiki/%D8%A8%D8%B7%D8%A7%D9%82%D8%A9_%D8%A7%D9%84%D8%B1%D9%82%D9%85_%D8%A7%D9%84%D9%82%D9%88%D9%85%D9%8A_%D8%A7%D9%84%D9%85%D8%B5%D8%B1%D9%8A%D8%A9
     *
     * @example 27512310101010
     *
     * @return string
     */
    public static function nationalIdNumber($gender = null)
    {
        $randomBirthDateTimestamp = mt_rand(
            strtotime('1950-Jan-10'),
            strtotime('2005-Dec-25')
        );

        $centuryId =
            ((int) date('Y', $randomBirthDateTimestamp)) >= 2000 ? 3 : 2;
        $fullBirthDate = date('ymd', $randomBirthDateTimestamp);
        $governorateId = Address::governorateId();
        $birthRegistrationSequence = mt_rand(1, 500);

        if ($gender === static::GENDER_MALE) {
            $birthRegistrationSequence = $birthRegistrationSequence | 1; // Convert to the nearest odd number
        } elseif ($gender === static::GENDER_FEMALE) {
            $birthRegistrationSequence = $birthRegistrationSequence & ~1; // Convert to the nearest even number
        }

        $birthRegistrationSequence = str_pad(
            (string) $birthRegistrationSequence,
            4,
            '0',
            STR_PAD_LEFT
        );
        $randomCheckDigit = mt_rand(1, 9);

        return $centuryId .
            $fullBirthDate .
            $governorateId .
            $birthRegistrationSequence .
            $randomCheckDigit;
    }
}