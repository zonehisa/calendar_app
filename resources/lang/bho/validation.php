<?php

declare(strict_types=1);

return [
    'accepted'               => ':attribute के स्वीकार करे के होई।',
    'accepted_if'            => ':attribute के तब स्वीकार करे के पड़ी जब :other :value होखे।',
    'active_url'             => ':attribute कवनो वैध यूआरएल ना ह।',
    'after'                  => ':attribute के तारीख :date के बाद के होखे के चाही।',
    'after_or_equal'         => ':attribute के तारीख :date के बाद के होखे के चाहीं भा ओकरा बराबर होखे के चाहीं.',
    'alpha'                  => ':attribute में खाली अक्षर होखे के चाहीं।',
    'alpha_dash'             => ':attribute में खाली अक्षर, संख्या, डैश आ अंडरस्कोर होखे के चाहीं।',
    'alpha_num'              => ':attribute में खाली अक्षर आ संख्या होखे के चाहीं.',
    'array'                  => ':attribute के एगो सरणी होखे के चाहीं।',
    'ascii'                  => ':attribute फील्ड में खाली सिंगल-बाइट अल्फान्यूमेरिक वर्ण आ चिन्ह होखे के चाहीं।',
    'before'                 => ':attribute के तारीख :date से पहिले के होखे के चाही।',
    'before_or_equal'        => ':attribute के तारीख :date से पहिले भा ओकरा बराबर होखे के चाहीं.',
    'between'                => [
        'array'   => ':attribute में :min से :max के बीच आइटम होखे के चाही।',
        'file'    => ':attribute के :min से :max किलोबाइट के बीच होखे के चाही।',
        'numeric' => ':attribute के उमिर :min से :max के बीच होखे के चाहीं.',
        'string'  => ':attribute में :min से :max अक्षर के बीच होखे के चाहीं.',
    ],
    'boolean'                => ':attribute के फील्ड सही होखे के चाहीं भा गलत.',
    'can'                    => ':attribute फील्ड में एगो अनधिकृत मान होला।',
    'confirmed'              => ':attribute के पुष्टि मेल ना खाला।',
    'contains'               => ':attribute फील्ड में एगो जरूरी मान गायब बा।',
    'current_password'       => 'पासवर्ड गलत बा।',
    'date'                   => ':attribute के कवनो वैध तारीख नइखे.',
    'date_equals'            => ':attribute के तारीख :date के बराबर होखे के चाहीं।',
    'date_format'            => ':attribute के फॉर्मेट :format से मेल ना खाला।',
    'decimal'                => ':attribute फील्ड में :decimal दशमलव स्थान होखे के चाहीं।',
    'declined'               => ':attribute के अस्वीकार करे के पड़ी।',
    'declined_if'            => ':attribute के अस्वीकार करे के पड़ी जब :other :value होखे।',
    'different'              => ':attribute आ :other के अलग अलग होखे के चाहीं.',
    'digits'                 => ':attribute के :digits अंक के होखे के चाहीं।',
    'digits_between'         => ':attribute के :min से :max अंक के बीच होखे के चाही।',
    'dimensions'             => ':attribute में अमान्य छवि आयाम बा।',
    'distinct'               => ':attribute फील्ड के डुप्लिकेट मान होला।',
    'doesnt_end_with'        => ':attribute फील्ड के अंत निम्नलिखित में से कवनो एक से ना होखे के चाहीं: :values.',
    'doesnt_start_with'      => ':attribute फील्ड के शुरुआत निम्नलिखित में से कवनो एक से ना होखे के चाहीं: :values.',
    'email'                  => ':attribute गो के वैध ईमेल पता होखे के चाहीं.',
    'ends_with'              => ':attribute के अंत निम्नलिखित में से कवनो एक से होखे के चाहीं: :values.',
    'enum'                   => 'चुनल गइल :attribute गो अमान्य बा.',
    'exists'                 => 'चुनल गइल :attribute गो अमान्य बा.',
    'extensions'             => ':attribute फील्ड में निम्नलिखित में से कवनो एक एक्सटेंशन होखे के चाहीं: :values.',
    'file'                   => ':attribute गो फाइल होखे के चाहीं.',
    'filled'                 => ':attribute फील्ड के एगो मान होखे के चाहीं।',
    'gt'                     => [
        'array'   => ':attribute में :value से जादा आइटम होखे के चाही।',
        'file'    => ':attribute के :value किलोबाइट से अधिका होखे के चाहीं.',
        'numeric' => ':attribute के :value से अधिका होखे के चाहीं.',
        'string'  => ':attribute के :value अक्षर से अधिका होखे के चाहीं.',
    ],
    'gte'                    => [
        'array'   => ':attribute में :value गो आइटम भा ओकरा से अधिका होखे के चाहीं.',
        'file'    => ':attribute के :value किलोबाइट से अधिका भा बराबर होखे के चाहीं.',
        'numeric' => ':attribute के :value से अधिका भा बराबर होखे के चाहीं.',
        'string'  => ':attribute के :value अक्षर से अधिका भा बराबर होखे के चाहीं.',
    ],
    'hex_color'              => ':attribute फील्ड के वैध हेक्साडेसिमल रंग होखे के चाहीं।',
    'image'                  => ':attribute गो के छवि होखे के चाहीं.',
    'in'                     => 'चुनल गइल :attribute गो अमान्य बा.',
    'in_array'               => ':attribute के फील्ड :other में मौजूद नइखे।',
    'integer'                => ':attribute के एगो पूर्णांक होखे के चाहीं।',
    'ip'                     => ':attribute के वैध आईपी पता होखे के चाहीं।',
    'ipv4'                   => ':attribute के वैध आईपीवी 4 पता होखे के चाहीं।',
    'ipv6'                   => ':attribute के वैध आईपीवी 6 पता होखे के चाहीं।',
    'json'                   => ':attribute के एगो वैध JSON स्ट्रिंग होखे के चाहीं।',
    'list'                   => ':attribute के फील्ड एगो लिस्ट होखे के चाहीं.',
    'lowercase'              => ':attribute के फील्ड छोट अक्षर के होखे के चाहीं।',
    'lt'                     => [
        'array'   => ':attribute में :value से कम आइटम होखे के चाही।',
        'file'    => ':attribute के :value किलोबाइट से कम होखे के चाहीं।',
        'numeric' => ':attribute के :value से कम होखे के चाहीं।',
        'string'  => ':attribute के :value अक्षर से कम होखे के चाहीं.',
    ],
    'lte'                    => [
        'array'   => ':attribute में :value से जादा आइटम ना होखे के चाही।',
        'file'    => ':attribute के :value किलोबाइट से कम भा बराबर होखे के चाहीं.',
        'numeric' => ':attribute के :value से कम भा बराबर होखे के चाहीं.',
        'string'  => ':attribute के :value अक्षर से कम भा बराबर होखे के चाहीं.',
    ],
    'mac_address'            => ':attribute के वैध मैक पता होखे के चाहीं।',
    'max'                    => [
        'array'   => ':attribute में :max से जादा आइटम ना होखे के चाही।',
        'file'    => ':attribute के :max किलोबाइट से अधिका ना होखे के चाहीं.',
        'numeric' => ':attribute के :max से अधिका ना होखे के चाहीं.',
        'string'  => ':attribute के :max अक्षर से अधिका ना होखे के चाहीं.',
    ],
    'max_digits'             => ':attribute फील्ड में :max अंक से अधिका ना होखे के चाहीं.',
    'mimes'                  => ':attribute के एगो फाइल होखे के चाहीं जवना के प्रकार: :values.',
    'mimetypes'              => ':attribute के एगो फाइल होखे के चाहीं जवना के प्रकार: :values.',
    'min'                    => [
        'array'   => ':attribute में कम से कम :min गो आइटम होखे के चाहीं।',
        'file'    => ':attribute के कम से कम :min किलोबाइट होखे के चाही।',
        'numeric' => ':attribute के कम से कम :min के होखे के चाही।',
        'string'  => ':attribute में कम से कम :min अक्षर के होखे के चाहीं.',
    ],
    'min_digits'             => ':attribute गो फील्ड में कम से कम :min अंक होखे के चाहीं.',
    'missing'                => ':attribute के खेत गायब होखे के चाहीं।',
    'missing_if'             => ':attribute के फील्ड गायब होखे के चाहीं जब :other :value होखे.',
    'missing_unless'         => 'जबले :other :value ना होखे तबले :attribute के फील्ड गायब होखे के चाहीं.',
    'missing_with'           => ':attribute के फील्ड गायब होखे के चाहीं जब :values मौजूद होखे।',
    'missing_with_all'       => ':attribute के फील्ड गायब होखे के चाहीं जब :values मौजूद होखे।',
    'multiple_of'            => ':attribute के :value के गुणनफल होखे के चाहीं।',
    'not_in'                 => 'चुनल गइल :attribute गो अमान्य बा.',
    'not_regex'              => ':attribute के प्रारूप अमान्य बा।',
    'numeric'                => ':attribute के एगो नंबर होखे के चाहीं.',
    'password'               => [
        'letters'       => ':attribute के फील्ड में कम से कम एगो अक्षर होखे के चाहीं.',
        'mixed'         => ':attribute के फील्ड में कम से कम एगो बड़का आ एगो छोट अक्षर होखे के चाहीं.',
        'numbers'       => ':attribute के फील्ड में कम से कम एगो नंबर होखे के चाहीं.',
        'symbols'       => ':attribute फील्ड में कम से कम एगो चिन्ह होखे के चाहीं.',
        'uncompromised' => 'दिहल :attribute डेटा लीक में लउकल बा। कृपया एगो अलग :attribute चुनीं।',
    ],
    'present'                => ':attribute के खेत मौजूद होखे के चाहीं।',
    'present_if'             => ':attribute के फील्ड तब मौजूद होखे के चाहीं जब :other :value होखे.',
    'present_unless'         => ':attribute के फील्ड तब तक मौजूद होखे के चाहीं जबले कि :other :value ना होखे.',
    'present_with'           => ':attribute के फील्ड तब मौजूद होखे के चाहीं जब :values मौजूद होखे।',
    'present_with_all'       => ':attribute के फील्ड तब मौजूद होखे के चाहीं जब :values मौजूद होखे।',
    'prohibited'             => ':attribute खेत के मनाही बा।',
    'prohibited_if'          => ':attribute के खेत पर रोक बा जब :other :value होखे।',
    'prohibited_if_accepted' => ':attribute फील्ड पर रोक लगावल गइल बा जब :other गो स्वीकार कइल जाला.',
    'prohibited_if_declined' => ':attribute के फील्ड पर रोक लगावल गइल बा जब :other गो के गिरावट आई.',
    'prohibited_unless'      => 'जबले :values में :other ना होखे तबले :attribute के खेत पर रोक बा.',
    'prohibits'              => ':attribute के मैदान में :other लोग के मौजूद रहे प रोक बा।',
    'regex'                  => ':attribute के प्रारूप अमान्य बा।',
    'required'               => ':attribute के खेत के जरूरत बा।',
    'required_array_keys'    => ':attribute फील्ड में निम्नलिखित खातिर प्रविष्टि होखे के चाहीं: :values.',
    'required_if'            => ':attribute के फील्ड के जरूरत तब होला जब :other :value होखे।',
    'required_if_accepted'   => ':attribute के फील्ड तब जरूरी होला जब :other के स्वीकार कइल जाला।',
    'required_if_declined'   => ':attribute के फील्ड के जरूरत तब होला जब :other के अस्वीकार कइल जाला।',
    'required_unless'        => ':attribute के फील्ड तब तक जरूरी बा जब तक कि :other :values में ना होखे।',
    'required_with'          => ':attribute फील्ड के जरूरत तब होला जब :values मौजूद होखे।',
    'required_with_all'      => ':attribute फील्ड के जरूरत तब होला जब :values मौजूद होखे।',
    'required_without'       => ':attribute फील्ड के जरूरत तब होला जब :values मौजूद ना होखे।',
    'required_without_all'   => ':attribute फील्ड के जरूरत तब होला जब :values में से कवनो भी मौजूद ना होखे।',
    'same'                   => ':attribute आ :other के मिलान होखे के चाहीं.',
    'size'                   => [
        'array'   => ':attribute में :size गो आइटम होखे के चाहीं.',
        'file'    => ':attribute के :size किलोबाइट होखे के चाहीं।',
        'numeric' => ':attribute के :size होखे के चाहीं।',
        'string'  => ':attribute में :size अक्षर के होखे के चाहीं.',
    ],
    'starts_with'            => ':attribute के शुरुआत निम्नलिखित में से कवनो एक से होखे के चाहीं: :values.',
    'string'                 => ':attribute के एगो तार होखे के चाहीं.',
    'timezone'               => ':attribute के वैध समय क्षेत्र होखे के चाहीं।',
    'ulid'                   => ':attribute फील्ड के वैध यूएलआईडी होखे के चाहीं।',
    'unique'                 => ':attribute के पहिलही ले लिहल गईल बा।',
    'uploaded'               => ':attribute गो अपलोड ना हो पावल।',
    'uppercase'              => ':attribute के फील्ड बड़का अक्षर के होखे के चाहीं.',
    'url'                    => ':attribute के वैध यूआरएल होखे के चाहीं।',
    'uuid'                   => ':attribute के वैध यूयूआईडी होखे के चाहीं।',
    'attributes'             => [
        'address'                  => 'पता',
        'affiliate_url'            => 'संबद्ध यूआरएल के बा',
        'age'                      => 'उमिर',
        'amount'                   => 'राशि',
        'announcement'             => 'मुनादी',
        'area'                     => 'इलाका',
        'audience_prize'           => 'दर्शकन के पुरस्कार दिहल गइल बा',
        'audience_winner'          => 'audience winner',
        'available'                => 'उपलब्ध',
        'birthday'                 => 'जनमदिन',
        'body'                     => 'देह',
        'city'                     => 'शहर',
        'company'                  => 'company',
        'compilation'              => 'संकलन के बा',
        'concept'                  => 'संकल्पना',
        'conditions'               => 'हालात',
        'content'                  => 'सामग्री',
        'contest'                  => 'contest',
        'country'                  => 'देश',
        'cover'                    => 'ढँकल',
        'created_at'               => 'पर बनावल गइल बा',
        'creator'                  => 'रचनाकार के बा',
        'currency'                 => 'मुद्रा',
        'current_password'         => 'वर्तमान पासवर्ड के बा',
        'customer'                 => 'गहकी',
        'date'                     => 'तारीख',
        'date_of_birth'            => 'जन्म के तारीख के बारे में बतावल गइल बा',
        'dates'                    => 'तारीख के बा',
        'day'                      => 'दिन',
        'deleted_at'               => 'पर हटा दिहल गइल बा',
        'description'              => 'बिबरन',
        'display_type'             => 'डिस्प्ले के प्रकार के बा',
        'district'                 => 'जिला',
        'duration'                 => 'अवधी',
        'email'                    => 'ईमेल पर भेजल जा सकेला',
        'excerpt'                  => 'अंश के बा',
        'filter'                   => 'फिल्टर कइल जाला',
        'finished_at'              => 'पर समाप्त हो गइल',
        'first_name'               => 'पहिला नांव',
        'gender'                   => 'लिंग',
        'grand_prize'              => 'भव्य पुरस्कार के पुरस्कार दिहल गइल',
        'group'                    => 'समूह',
        'hour'                     => 'घंटा',
        'image'                    => 'छवि',
        'image_desktop'            => 'डेस्कटॉप के छवि के बारे में बतावल गइल बा',
        'image_main'               => 'मुख्य छवि के बा',
        'image_mobile'             => 'मोबाइल के छवि के बारे में बतावल गइल बा',
        'images'                   => 'छवियन के बा',
        'is_audience_winner'       => 'दर्शक विजेता बा',
        'is_hidden'                => 'छिपल बा',
        'is_subscribed'            => 'सब्सक्राइब हो गइल बा',
        'is_visible'               => 'लउकत बा',
        'is_winner'                => 'विजेता बा',
        'items'                    => 'वस्तू',
        'key'                      => 'चाभी',
        'last_name'                => 'अंतिम नाम',
        'lesson'                   => 'सबक',
        'line_address_1'           => 'लाइन के पता 1 के बा',
        'line_address_2'           => 'लाइन के पता 2 के बा',
        'login'                    => 'लॉगिन हो गइल बा',
        'message'                  => 'सनेस',
        'middle_name'              => 'बीच के नाम बा',
        'minute'                   => 'मिनट',
        'mobile'                   => 'मोबाइल',
        'month'                    => 'महीना',
        'name'                     => 'नांव',
        'national_code'            => 'राष्ट्रीय संहिता के बारे में बतावल गइल बा',
        'number'                   => 'संख्या',
        'password'                 => 'पासवर्ड',
        'password_confirmation'    => 'पासवर्ड के पुष्टि हो गइल बा',
        'phone'                    => 'फोन',
        'photo'                    => 'तस्वीर',
        'portfolio'                => 'पोर्टफोलियो के ह',
        'postal_code'              => 'डाक कोड के बारे में बतावल गइल बा',
        'preview'                  => 'पूर्वावलोकन कइल जाला',
        'price'                    => 'दाम',
        'product_id'               => 'उत्पाद आईडी के बा',
        'product_uid'              => 'उत्पाद के यूआईडी के बा',
        'product_uuid'             => 'उत्पाद यूयूआईडी के बा',
        'promo_code'               => 'प्रोमो कोड के बा',
        'province'                 => 'प्रान्त',
        'quantity'                 => 'मात्रा',
        'reason'                   => 'कारन',
        'recaptcha_response_field' => 'रिकैपचा रिस्पांस फील्ड के बा',
        'referee'                  => 'रेफरी के रूप में काम कइले बाड़न',
        'referees'                 => 'रेफरी लोग के नाम से जानल जाला',
        'reject_reason'            => 'तर्क के खारिज कर देत बानी',
        'remember'                 => 'इयाद कयिल',
        'restored_at'              => 'पर बहाल कइल गइल',
        'result_text_under_image'  => 'छवि के तहत परिणाम पाठ बा',
        'role'                     => 'भूमिका',
        'rule'                     => 'नियम',
        'rules'                    => 'नियम',
        'second'                   => 'दूसरा',
        'sex'                      => 'सेक्स के बारे में बतावल गईल',
        'shipment'                 => 'शिपमेंट के बारे में बतावल गइल बा',
        'short_text'               => 'छोट पाठ के बा',
        'size'                     => 'आकार',
        'skills'                   => 'कौशल',
        'slug'                     => 'स्लग के नाम से जानल जाला',
        'specialization'           => 'विशेषज्ञता के बारे में बतावल गइल बा',
        'started_at'               => 'से शुरू भइल',
        'state'                    => 'राज',
        'status'                   => 'ओहदा',
        'street'                   => 'गली',
        'student'                  => 'छात्र',
        'subject'                  => 'बिषय',
        'tag'                      => 'घुंडी',
        'tags'                     => 'टैग के बारे में बतावल गइल बा',
        'teacher'                  => 'गुरूजी',
        'terms'                    => 'शर्त',
        'test_description'         => 'परीक्षण के वर्णन बा',
        'test_locale'              => 'परीक्षण लोकेल के बा',
        'test_name'                => 'परीक्षण के नाम बा',
        'text'                     => 'पाठ',
        'time'                     => 'समय',
        'title'                    => 'हक',
        'type'                     => 'किसिम',
        'updated_at'               => 'पर अपडेट कइल गइल बा',
        'user'                     => 'प्रयोगकर्ता के बा',
        'username'                 => 'उपयोगकर्ता के नाम बा',
        'value'                    => 'कीमत',
        'winner'                   => 'winner',
        'work'                     => 'work',
        'year'                     => 'बरिस',
    ],
];
