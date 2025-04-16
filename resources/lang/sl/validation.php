<?php

declare(strict_types=1);

return [
    'accepted'               => ':Attribute mora biti sprejet.',
    'accepted_if'            => 'Polje mora biti sprejeto, če je :other :value.',
    'active_url'             => ':Attribute ni pravilen.',
    'after'                  => ':Attribute mora biti za datumom :date.',
    'after_or_equal'         => ':Attribute mora biti za ali enak :date.',
    'alpha'                  => ':Attribute lahko vsebuje samo črke.',
    'alpha_dash'             => ':Attribute lahko vsebuje samo črke, številke in črtice.',
    'alpha_num'              => ':Attribute lahko vsebuje samo črke in številke.',
    'array'                  => ':Attribute mora biti polje.',
    'ascii'                  => ':Attribute sme vsebovati le enobajtne alfanumerične znake in simbole.',
    'before'                 => ':Attribute mora biti pred datumom :date.',
    'before_or_equal'        => ':Attribute mora biti pred ali enak :date.',
    'between'                => [
        'array'   => ':Attribute mora imeti med :min in :max elementov.',
        'file'    => ':Attribute mora biti med :min in :max kilobajti.',
        'numeric' => ':Attribute mora biti med :min in :max.',
        'string'  => ':Attribute mora biti med :min in :max znaki.',
    ],
    'boolean'                => ':Attribute polje mora biti 1 ali 0',
    'can'                    => 'Polje :attribute vsebuje nedovoljeno vrednost.',
    'confirmed'              => ':Attribute potrditev se ne ujema.',
    'contains'               => 'V polju :attribute manjka zahtevana vrednost.',
    'current_password'       => 'Geslo ni veljavno.',
    'date'                   => ':Attribute ni veljaven datum.',
    'date_equals'            => ':Attribute mora biti enak :date.',
    'date_format'            => ':Attribute se ne ujema z obliko :format.',
    'decimal'                => ':Attribute mora imeti :decimal decimalnih mest.',
    'declined'               => ':Attribute je treba zavrniti.',
    'declined_if'            => ':Attribute je treba zavrniti, ko je :other :value.',
    'different'              => ':Attribute in :other mora biti drugačen.',
    'digits'                 => ':Attribute mora imeti :digits cifer.',
    'digits_between'         => ':Attribute mora biti med :min in :max ciframi.',
    'dimensions'             => ':Attribute ima napačne dimenzije slike.',
    'distinct'               => ':Attribute je duplikat.',
    'doesnt_end_with'        => ':Attribute se ne sme končati z enim od naslednjih: :values.',
    'doesnt_start_with'      => ':Attribute se ne sme začeti z enim od naslednjih: :values.',
    'email'                  => ':Attribute mora biti veljaven e-poštni naslov.',
    'ends_with'              => ':Attribute se mora končati z eno od naslednjih vrednosti: :values.',
    'enum'                   => 'Izbranih :attribute ni veljavnih.',
    'exists'                 => 'izbran :attribute je neveljaven.',
    'extensions'             => 'Polje :attribute mora imeti eno od naslednjih končnic: :values.',
    'file'                   => ':Attribute mora biti datoteka.',
    'filled'                 => ':Attribute mora biti izpolnjen.',
    'gt'                     => [
        'array'   => ':Attribute mora imeti več kot :value elementov.',
        'file'    => ':Attribute mora biti večji od :value kilobajtov.',
        'numeric' => ':Attribute mora biti večji od :value.',
        'string'  => ':Attribute mora imeti več kot :value znakov.',
    ],
    'gte'                    => [
        'array'   => ':Attribute mora imeti število elementov enako ali večje od :value.',
        'file'    => ':Attribute mora biti večji ali enak :value kilobajtov.',
        'numeric' => ':Attribute mora biti večji ali enak :value.',
        'string'  => ':Attribute mora imeti število znakov večje ali enako :value.',
    ],
    'hex_color'              => 'Polje :attribute mora biti veljavne šestnajstiške barve.',
    'image'                  => ':Attribute mora biti slika.',
    'in'                     => 'izbran :attribute je neveljaven.',
    'in_array'               => ':Attribute ne obstaja v :other.',
    'integer'                => ':Attribute mora biti število.',
    'ip'                     => ':Attribute mora biti veljaven IP naslov.',
    'ipv4'                   => ':Attribute mora biti veljaven IPv4 naslov.',
    'ipv6'                   => ':Attribute mora biti veljaven IPv6 naslov.',
    'json'                   => ':Attribute mora biti veljaven JSON tekst.',
    'list'                   => 'Polje :attribute mora biti seznam.',
    'lowercase'              => ':Attribute mora biti z malimi črkami.',
    'lt'                     => [
        'array'   => ':Attribute mora imeti manj kot :value elementov.',
        'file'    => ':Attribute mora biti manjši od :value kilobajtov.',
        'numeric' => ':Attribute mora biti manjši od :value.',
        'string'  => ':Attribute mora imeti manj kot :value znakov.',
    ],
    'lte'                    => [
        'array'   => ':Attribute mora imeti število elementov manjše ali enako :value.',
        'file'    => ':Attribute mora biti manjši ali enak od :value kilobajtov.',
        'numeric' => ':Attribute mora biti manjši ali enak :value.',
        'string'  => ':Attribute mora imeti število znakov manjše ali enako :value.',
    ],
    'mac_address'            => ':Attribute mora biti veljaven naslov MAC.',
    'max'                    => [
        'array'   => ':Attribute ne smejo imeti več kot :max elementov.',
        'file'    => ':Attribute ne sme biti večje :max kilobajtov.',
        'numeric' => ':Attribute ne sme biti večje od :max.',
        'string'  => ':Attribute ne sme biti večje :max znakov.',
    ],
    'max_digits'             => ':Attribute ne sme imeti več kot :max števk.',
    'mimes'                  => ':Attribute mora biti datoteka tipa: :values.',
    'mimetypes'              => ':Attribute mora biti datoteka tipa: :values.',
    'min'                    => [
        'array'   => ':Attribute mora imeti vsaj :min elementov.',
        'file'    => ':Attribute mora imeti vsaj :min kilobajtov.',
        'numeric' => ':Attribute mora biti vsaj dolžine :min.',
        'string'  => ':Attribute mora imeti vsaj :min znakov.',
    ],
    'min_digits'             => ':Attribute mora imeti vsaj :min števk.',
    'missing'                => 'Polje :attribute mora manjkati.',
    'missing_if'             => 'Če je :other :value, mora manjkati polje :attribute.',
    'missing_unless'         => 'Polje :attribute mora manjkati, razen če je :other :value.',
    'missing_with'           => 'Polje :attribute mora manjkati, če je prisotno :values.',
    'missing_with_all'       => 'Polje :attribute mora manjkati, če je prisotnih :values.',
    'multiple_of'            => ':Attribute mora biti večkratnik od :value',
    'not_in'                 => 'Izbran :attribute je neveljaven.',
    'not_regex'              => 'Format :attribute je neveljaven.',
    'numeric'                => ':Attribute mora biti število.',
    'password'               => [
        'letters'       => ':Attribute mora vsebovati vsaj eno črko.',
        'mixed'         => ':Attribute mora vsebovati vsaj eno veliko in eno malo črko.',
        'numbers'       => ':Attribute mora vsebovati vsaj eno številko.',
        'symbols'       => ':Attribute mora vsebovati vsaj en simbol.',
        'uncompromised' => 'Podanih :attribute se je pojavilo pri uhajanju podatkov. Prosimo izberite drugih :attribute.',
    ],
    'present'                => 'Polje :attribute mora biti prisotno.',
    'present_if'             => 'Polje :attribute mora biti prisotno, ko je :other :value.',
    'present_unless'         => 'Polje :attribute mora biti prisotno, razen če je :other :value.',
    'present_with'           => 'Polje :attribute mora biti prisotno, ko je prisotno :values.',
    'present_with_all'       => 'Polje :attribute mora biti prisotno, ko je prisotnih :values.',
    'prohibited'             => 'Polje :attribute je prepovedano.',
    'prohibited_if'          => 'Polje :attribute je prepovedano, ko je :other :value.',
    'prohibited_if_accepted' => 'Polje :attribute je prepovedano, ko je :other sprejetih.',
    'prohibited_if_declined' => 'Polje :attribute je prepovedano, ko :other zavrne.',
    'prohibited_unless'      => 'Polje :attribute je prepovedano, razen če je :other v :values.',
    'prohibits'              => 'To polje prepoveduje prisotnost :other.',
    'regex'                  => 'Format polja :attribute je neveljaven.',
    'required'               => 'Polje :attribute je obvezno.',
    'required_array_keys'    => 'Polje :attribute mora vsebovati vnose za: :values.',
    'required_if'            => 'Polje :attribute je obvezno, če je :other enak :value.',
    'required_if_accepted'   => 'Polje :attribute je obvezno, če je sprejeto :other.',
    'required_if_declined'   => 'Polje :attribute je obvezno, če je :other zavrnjeno.',
    'required_unless'        => 'Polje :attribute je obvezno, razen če je :other v :values.',
    'required_with'          => 'Polje :attribute je obvezno, če je :values prisoten.',
    'required_with_all'      => 'Polje :attribute je obvezno, če so :values prisoten.',
    'required_without'       => 'Polje :attribute je obvezno, če :values ni prisoten.',
    'required_without_all'   => 'Polje :attribute je obvezno, če :values niso prisotni.',
    'same'                   => 'Polje :attribute in :other se morata ujemati.',
    'size'                   => [
        'array'   => ':Attribute mora vsebovati :size elementov.',
        'file'    => ':Attribute mora biti :size kilobajtov.',
        'numeric' => ':Attribute mora biti :size.',
        'string'  => ':Attribute mora biti :size znakov.',
    ],
    'starts_with'            => ':Attribute se mora začeti z eno od naslednjih vrednosti: :values',
    'string'                 => ':Attribute mora biti tekst.',
    'timezone'               => ':Attribute mora biti časovna cona.',
    'ulid'                   => ':Attribute mora biti veljaven ULID.',
    'unique'                 => ':Attribute je že zaseden.',
    'uploaded'               => 'Nalaganje :attribute ni uspelo.',
    'uppercase'              => ':Attribute mora biti z velikimi črkami.',
    'url'                    => ':Attribute format je neveljaven.',
    'uuid'                   => ':Attribute mora biti veljaven UUID.',
    'attributes'             => [
        'address'                  => 'naslov',
        'affiliate_url'            => 'pridruženi URL',
        'age'                      => 'starost',
        'amount'                   => 'znesek',
        'announcement'             => 'obvestilo',
        'area'                     => 'območje',
        'audience_prize'           => 'nagrada občinstva',
        'audience_winner'          => 'audience winner',
        'available'                => 'na voljo',
        'birthday'                 => 'rojstni dan',
        'body'                     => 'vsebina',
        'city'                     => 'mesto',
        'company'                  => 'company',
        'compilation'              => 'kompilacija',
        'concept'                  => 'koncept',
        'conditions'               => 'pogoji',
        'content'                  => 'vsebina',
        'contest'                  => 'contest',
        'country'                  => 'država',
        'cover'                    => 'pokrov',
        'created_at'               => 'ustvarjen ob',
        'creator'                  => 'ustvarjalec',
        'currency'                 => 'valuta',
        'current_password'         => 'trenutno geslo',
        'customer'                 => 'stranka',
        'date'                     => 'datum',
        'date_of_birth'            => 'datum rojstva',
        'dates'                    => 'datumi',
        'day'                      => 'dan',
        'deleted_at'               => 'izbrisano ob',
        'description'              => 'opis',
        'display_type'             => 'vrsta zaslona',
        'district'                 => 'okrožje',
        'duration'                 => 'trajanje',
        'email'                    => 'E-naslov',
        'excerpt'                  => 'povzetek',
        'filter'                   => 'filter',
        'finished_at'              => 'končal ob',
        'first_name'               => 'ime',
        'gender'                   => 'spol',
        'grand_prize'              => 'glavna nagrada',
        'group'                    => 'skupina',
        'hour'                     => 'ura',
        'image'                    => 'slika',
        'image_desktop'            => 'slika namizja',
        'image_main'               => 'glavna slika',
        'image_mobile'             => 'mobilna slika',
        'images'                   => 'slike',
        'is_audience_winner'       => 'je zmagovalec občinstva',
        'is_hidden'                => 'je skrit',
        'is_subscribed'            => 'je naročen',
        'is_visible'               => 'je viden',
        'is_winner'                => 'je zmagovalec',
        'items'                    => 'predmete',
        'key'                      => 'ključ',
        'last_name'                => 'priimek',
        'lesson'                   => 'lekcija',
        'line_address_1'           => 'naslov vrstice 1',
        'line_address_2'           => 'naslov vrstice 2',
        'login'                    => 'Vpiši se',
        'message'                  => 'sporočilo',
        'middle_name'              => 'srednje ime',
        'minute'                   => 'minuta',
        'mobile'                   => 'mobilni telefon',
        'month'                    => 'mesec',
        'name'                     => 'ime',
        'national_code'            => 'nacionalni zakonik',
        'number'                   => 'število',
        'password'                 => 'geslo',
        'password_confirmation'    => 'potrditev gesla',
        'phone'                    => 'telefon',
        'photo'                    => 'fotografija',
        'portfolio'                => 'portfelj',
        'postal_code'              => 'Poštna številka',
        'preview'                  => 'predogled',
        'price'                    => 'cena',
        'product_id'               => 'ID izdelka',
        'product_uid'              => 'UID izdelka',
        'product_uuid'             => 'UUID izdelka',
        'promo_code'               => 'promocijska koda',
        'province'                 => 'pokrajina',
        'quantity'                 => 'količino',
        'reason'                   => 'razlog',
        'recaptcha_response_field' => 'polje odgovora recaptcha',
        'referee'                  => 'sodnik',
        'referees'                 => 'sodniki',
        'reject_reason'            => 'zavrniti razlog',
        'remember'                 => 'zapomni si',
        'restored_at'              => 'obnovljeno pri',
        'result_text_under_image'  => 'besedilo rezultata pod sliko',
        'role'                     => 'vloga',
        'rule'                     => 'pravilo',
        'rules'                    => 'pravila',
        'second'                   => 'sekunda',
        'sex'                      => 'spol',
        'shipment'                 => 'pošiljka',
        'short_text'               => 'kratko besedilo',
        'size'                     => 'velikost',
        'skills'                   => 'spretnosti',
        'slug'                     => 'polž',
        'specialization'           => 'specializacijo',
        'started_at'               => 'začel ob',
        'state'                    => 'država',
        'status'                   => 'stanje',
        'street'                   => 'ulica',
        'student'                  => 'študent',
        'subject'                  => 'zadeva',
        'tag'                      => 'oznaka',
        'tags'                     => 'oznake',
        'teacher'                  => 'učiteljica',
        'terms'                    => 'pogoji',
        'test_description'         => 'opis testa',
        'test_locale'              => 'testni jezik',
        'test_name'                => 'ime testa',
        'text'                     => 'besedilo',
        'time'                     => 'čas',
        'title'                    => 'naslov',
        'type'                     => 'vrsta',
        'updated_at'               => 'posodobljeno ob',
        'user'                     => 'uporabnik',
        'username'                 => 'uporabniško ime',
        'value'                    => 'vrednost',
        'winner'                   => 'winner',
        'work'                     => 'work',
        'year'                     => 'leto',
    ],
];
