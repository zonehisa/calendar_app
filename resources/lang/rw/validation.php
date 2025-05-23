<?php

declare(strict_types=1);

return [
    'accepted'               => ':attribute igomba kwemerwa.',
    'accepted_if'            => ':attribute igomba kwemerwa mugihe :other ari :value.',
    'active_url'             => ':attribute ntabwo ari URL yemewe.',
    'after'                  => ':attribute igomba kuba itariki nyuma ya :date.',
    'after_or_equal'         => ':attribute igomba kuba itariki nyuma cyangwa ingana na :date.',
    'alpha'                  => ':attribute igomba kuba irimo inyuguti gusa.',
    'alpha_dash'             => ':attribute igomba kuba irimo inyuguti, imibare, imirongo hamwe nu munsi.',
    'alpha_num'              => ':attribute igomba kuba irimo inyuguti nimibare gusa.',
    'array'                  => ':attribute igomba kuba umurongo.',
    'ascii'                  => 'Umwanya :attribute ugomba kuba urimo gusa-byte inyuguti ninyuguti.',
    'before'                 => ':attribute igomba kuba itariki mbere ya :date.',
    'before_or_equal'        => ':attribute igomba kuba itariki mbere cyangwa ingana na :date.',
    'between'                => [
        'array'   => ':attribute igomba kuba ifite ibintu biri hagati ya :min na :max.',
        'file'    => ':attribute igomba kuba hagati ya :min na :max kilobytes.',
        'numeric' => ':attribute igomba kuba hagati ya :min na :max.',
        'string'  => ':attribute igomba kuba iri hagati yinyuguti :min na :max.',
    ],
    'boolean'                => 'Umwanya :attribute ugomba kuba ukuri cyangwa ibinyoma.',
    'can'                    => 'Umwanya :attribute urimo agaciro katemewe.',
    'confirmed'              => 'Kwemeza :attribute ntabwo bihuye.',
    'contains'               => 'Umwanya :attribute wabuze agaciro gasabwa.',
    'current_password'       => 'Ijambobanga ntabwo ari ryo.',
    'date'                   => ':attribute ntabwo ari itariki yemewe.',
    'date_equals'            => ':attribute igomba kuba itariki ingana na :date.',
    'date_format'            => ':attribute ntabwo ihuye nimiterere :format.',
    'decimal'                => 'Umurima :attribute ugomba kuba ufite imyanya :decimal icumi.',
    'declined'               => ':attribute igomba kwangwa.',
    'declined_if'            => ':attribute igomba kwangwa mugihe :other ari :value.',
    'different'              => ':attribute na :other bigomba kuba bitandukanye.',
    'digits'                 => ':attribute igomba kuba imibare :digits.',
    'digits_between'         => ':attribute igomba kuba hagati yimibare :min na :max.',
    'dimensions'             => ':attribute ifite ibipimo by\'ishusho bitemewe.',
    'distinct'               => 'Umwanya :attribute ufite agaciro kabili.',
    'doesnt_end_with'        => 'Umurima :attribute ntugomba kurangirana numwe muribi bikurikira: :values.',
    'doesnt_start_with'      => 'Umwanya :attribute ntugomba gutangirana numwe muribi bikurikira: :values.',
    'email'                  => ':attribute igomba kuba aderesi imeri yemewe.',
    'ends_with'              => ':attribute igomba kurangirana nimwe muri ibi bikurikira: :values.',
    'enum'                   => 'Ibyatoranijwe :attribute ntabwo byemewe.',
    'exists'                 => 'Ibyatoranijwe :attribute ntabwo byemewe.',
    'extensions'             => 'Umwanya :attribute ugomba kuba ufite kimwe mu byagutse bikurikira: :values.',
    'file'                   => ':attribute igomba kuba dosiye.',
    'filled'                 => 'Umwanya :attribute ugomba kugira agaciro.',
    'gt'                     => [
        'array'   => ':attribute igomba kuba ifite ibintu birenga :value.',
        'file'    => ':attribute igomba kuba irenze kilobytes :value.',
        'numeric' => ':attribute igomba kuba irenze :value.',
        'string'  => ':attribute igomba kuba irenze inyuguti :value.',
    ],
    'gte'                    => [
        'array'   => ':attribute igomba kuba ifite ibintu :value cyangwa birenga.',
        'file'    => ':attribute igomba kuba irenze cyangwa ingana na kilobytes :value.',
        'numeric' => ':attribute igomba kuba irenze cyangwa ingana na :value.',
        'string'  => ':attribute igomba kuba irenze cyangwa ingana ninyuguti :value.',
    ],
    'hex_color'              => 'Umwanya :attribute ugomba kuba ibara ryemewe.',
    'image'                  => ':attribute igomba kuba ishusho.',
    'in'                     => 'Ibyatoranijwe :attribute ntabwo byemewe.',
    'in_array'               => 'Umurima :attribute ntubaho muri :other.',
    'integer'                => ':attribute igomba kuba integer.',
    'ip'                     => ':attribute igomba kuba adresse IP yemewe.',
    'ipv4'                   => ':attribute igomba kuba aderesi ya IPv4 yemewe.',
    'ipv6'                   => ':attribute igomba kuba aderesi ya IPv6 yemewe.',
    'json'                   => ':attribute igomba kuba umugozi wa JSON wemewe.',
    'list'                   => 'Umwanya :attribute ugomba kuba urutonde.',
    'lowercase'              => 'Umwanya :attribute ugomba kuba muto.',
    'lt'                     => [
        'array'   => ':attribute igomba kuba ifite ibintu bitarenze :value.',
        'file'    => ':attribute igomba kuba munsi ya kilobytes :value.',
        'numeric' => ':attribute igomba kuba munsi ya :value.',
        'string'  => ':attribute igomba kuba munsi yinyuguti :value.',
    ],
    'lte'                    => [
        'array'   => ':attribute ntigomba kugira ibintu birenga :value.',
        'file'    => ':attribute igomba kuba munsi cyangwa ingana na kilobytes :value.',
        'numeric' => ':attribute igomba kuba munsi cyangwa ingana na :value.',
        'string'  => ':attribute igomba kuba munsi cyangwa ihwanye ninyuguti :value.',
    ],
    'mac_address'            => ':attribute igomba kuba adresse ya MAC yemewe.',
    'max'                    => [
        'array'   => ':attribute ntigomba kugira ibintu birenga :max.',
        'file'    => ':attribute ntigomba kurenza kilobytes :max.',
        'numeric' => ':attribute ntigomba kurenza :max.',
        'string'  => ':attribute ntigomba kurenza inyuguti :max.',
    ],
    'max_digits'             => 'Umurima :attribute ntugomba kugira imibare irenga :max.',
    'mimes'                  => ':attribute igomba kuba dosiye yubwoko: :values.',
    'mimetypes'              => ':attribute igomba kuba dosiye yubwoko: :values.',
    'min'                    => [
        'array'   => ':attribute igomba kuba ifite byibura ibintu :min.',
        'file'    => ':attribute igomba kuba byibura kilobytes :min.',
        'numeric' => ':attribute igomba kuba nibura :min.',
        'string'  => ':attribute igomba kuba byibuze inyuguti :min.',
    ],
    'min_digits'             => 'Umurima :attribute ugomba kuba ufite byibuze imibare :min.',
    'missing'                => 'Umurima :attribute ugomba kubura.',
    'missing_if'             => 'Umurima :attribute ugomba kubura mugihe :other ari :value.',
    'missing_unless'         => 'Umurima :attribute ugomba kubura keretse :other ni :value.',
    'missing_with'           => 'Umwanya :attribute ugomba kubura mugihe :values ihari.',
    'missing_with_all'       => 'Umurima :attribute ugomba kubura mugihe :values ihari.',
    'multiple_of'            => ':attribute igomba kuba inshuro :value.',
    'not_in'                 => 'Ibyatoranijwe :attribute ntabwo byemewe.',
    'not_regex'              => 'Imiterere :attribute ntabwo yemewe.',
    'numeric'                => ':attribute igomba kuba umubare.',
    'password'               => [
        'letters'       => 'Umwanya :attribute ugomba kuba urimo byibuze inyuguti imwe.',
        'mixed'         => 'Umwanya :attribute ugomba kuba ufite byibuze inyuguti imwe ninyuguti nto.',
        'numbers'       => 'Umwanya :attribute ugomba kuba ufite byibuze umubare umwe.',
        'symbols'       => 'Umwanya :attribute ugomba kuba ufite byibuze ikimenyetso kimwe.',
        'uncompromised' => ':attribute yatanzwe yagaragaye mumakuru yatangajwe. Nyamuneka hitamo :attribute.',
    ],
    'present'                => 'Umwanya :attribute ugomba kuba uhari.',
    'present_if'             => 'Umwanya :attribute ugomba kuba uhari mugihe :other ari :value.',
    'present_unless'         => 'Umwanya :attribute ugomba kuba uhari keretse :other ari :value.',
    'present_with'           => 'Umwanya :attribute ugomba kuba uhari mugihe :values ihari.',
    'present_with_all'       => 'Umwanya :attribute ugomba kuba uhari mugihe :values ihari.',
    'prohibited'             => 'Umurima :attribute urabujijwe.',
    'prohibited_if'          => 'Umurima :attribute urabujijwe iyo :other ari :value.',
    'prohibited_if_accepted' => 'Umurima :attribute urabujijwe igihe :other yemewe.',
    'prohibited_if_declined' => 'Umurima :attribute urabujijwe igihe :other yanze.',
    'prohibited_unless'      => 'Umurima :attribute urabujijwe keretse :other iri muri :values.',
    'prohibits'              => 'Umurima :attribute ubuza :other kuba bahari.',
    'regex'                  => 'Imiterere :attribute ntabwo yemewe.',
    'required'               => 'Umwanya :attribute urakenewe.',
    'required_array_keys'    => 'Umwanya :attribute ugomba kuba urimo ibyanditswe kuri: :values.',
    'required_if'            => 'Umwanya :attribute urasabwa mugihe :other ari :value.',
    'required_if_accepted'   => 'Umwanya :attribute urasabwa mugihe :other byemewe.',
    'required_if_declined'   => 'Umwanya :attribute urasabwa mugihe :other yanze.',
    'required_unless'        => 'Umwanya :attribute urakenewe keretse :other iri muri :values.',
    'required_with'          => 'Umwanya :attribute urakenewe mugihe :values ihari.',
    'required_with_all'      => 'Umwanya :attribute urakenewe mugihe :values ihari.',
    'required_without'       => 'Umwanya :attribute urasabwa mugihe :values idahari.',
    'required_without_all'   => 'Umwanya :attribute urasabwa mugihe ntanumwe muri :values uhari.',
    'same'                   => ':attribute na :other bigomba guhura.',
    'size'                   => [
        'array'   => ':attribute igomba kuba irimo ibintu :size.',
        'file'    => ':attribute igomba kuba kilobytes :size.',
        'numeric' => ':attribute igomba kuba :size.',
        'string'  => ':attribute igomba kuba inyuguti :size.',
    ],
    'starts_with'            => ':attribute igomba gutangirana numwe muribi bikurikira: :values.',
    'string'                 => ':attribute igomba kuba umurongo.',
    'timezone'               => ':attribute igomba kuba igihe cyemewe.',
    'ulid'                   => 'Umwanya :attribute ugomba kuba ULID yemewe.',
    'unique'                 => ':attribute zimaze gufatwa.',
    'uploaded'               => ':attribute bananiwe kohereza.',
    'uppercase'              => 'Umwanya :attribute ugomba kuba inyuguti nkuru.',
    'url'                    => ':attribute igomba kuba URL yemewe.',
    'uuid'                   => ':attribute igomba kuba UUID yemewe.',
    'attributes'             => [
        'address'                  => 'aderesi',
        'affiliate_url'            => 'URL ifitanye isano',
        'age'                      => 'imyaka',
        'amount'                   => 'umubare',
        'announcement'             => 'itangazo',
        'area'                     => 'akarere',
        'audience_prize'           => 'igihembo cy\'abumva',
        'audience_winner'          => 'audience winner',
        'available'                => 'irahari',
        'birthday'                 => 'isabukuru',
        'body'                     => 'umubiri',
        'city'                     => 'umujyi',
        'company'                  => 'company',
        'compilation'              => 'icyegeranyo',
        'concept'                  => 'igitekerezo',
        'conditions'               => 'imiterere',
        'content'                  => 'ibirimo',
        'contest'                  => 'contest',
        'country'                  => 'igihugu',
        'cover'                    => 'igifuniko',
        'created_at'               => 'yaremye kuri',
        'creator'                  => 'umuremyi',
        'currency'                 => 'ifaranga',
        'current_password'         => 'ijambo ryibanga',
        'customer'                 => 'umukiriya',
        'date'                     => 'itariki',
        'date_of_birth'            => 'itariki y\'amavuko',
        'dates'                    => 'amatariki',
        'day'                      => 'umunsi',
        'deleted_at'               => 'Gusiba kuri',
        'description'              => 'ibisobanuro',
        'display_type'             => 'Ubwoko Ubwoko',
        'district'                 => 'karere',
        'duration'                 => 'igihe',
        'email'                    => 'imeri',
        'excerpt'                  => 'igice',
        'filter'                   => 'muyunguruzi',
        'finished_at'              => 'Byarangiye',
        'first_name'               => 'izina rya mbere',
        'gender'                   => 'uburinganire',
        'grand_prize'              => 'igihembo kinini',
        'group'                    => 'itsinda',
        'hour'                     => 'isaha',
        'image'                    => 'ishusho',
        'image_desktop'            => 'ishusho ya desktop',
        'image_main'               => 'ishusho nyamukuru',
        'image_mobile'             => 'ishusho igendanwa',
        'images'                   => 'amashusho',
        'is_audience_winner'       => 'ni abatsinze',
        'is_hidden'                => 'ni Byihishe',
        'is_subscribed'            => 'yiyandikishije',
        'is_visible'               => 'ni Kugaragara',
        'is_winner'                => 'ni uwatsinze',
        'items'                    => 'ibintu',
        'key'                      => 'urufunguzo',
        'last_name'                => 'izina ryanyuma',
        'lesson'                   => 'isomo',
        'line_address_1'           => 'aderesi y\'umurongo 1',
        'line_address_2'           => 'umurongo wa 2',
        'login'                    => 'injira',
        'message'                  => 'ubutumwa',
        'middle_name'              => 'izina ryo hagati',
        'minute'                   => 'umunota',
        'mobile'                   => 'mobile',
        'month'                    => 'ukwezi',
        'name'                     => 'izina',
        'national_code'            => 'amategeko y\'igihugu',
        'number'                   => 'umubare',
        'password'                 => 'ijambo ryibanga',
        'password_confirmation'    => 'kwemeza ijambo ryibanga',
        'phone'                    => 'telefone',
        'photo'                    => 'ifoto',
        'portfolio'                => 'portfolio',
        'postal_code'              => 'kode y\'iposita',
        'preview'                  => 'ibanziriza',
        'price'                    => 'igiciro',
        'product_id'               => 'indangamuntu',
        'product_uid'              => 'ibicuruzwa UID',
        'product_uuid'             => 'ibicuruzwa UUID',
        'promo_code'               => 'kode ya promo',
        'province'                 => 'intara',
        'quantity'                 => 'ingano',
        'reason'                   => 'impamvu',
        'recaptcha_response_field' => 'gusubiramo igisubizo',
        'referee'                  => 'umusifuzi',
        'referees'                 => 'abasifuzi',
        'reject_reason'            => 'kwanga impamvu',
        'remember'                 => 'ibuka',
        'restored_at'              => 'yagaruwe kuri',
        'result_text_under_image'  => 'ibisubizo byanditse munsi yishusho',
        'role'                     => 'uruhare',
        'rule'                     => 'amategeko',
        'rules'                    => 'amategeko',
        'second'                   => 'kabiri',
        'sex'                      => 'igitsina',
        'shipment'                 => 'ibyoherejwe',
        'short_text'               => 'inyandiko ngufi',
        'size'                     => 'ingano',
        'skills'                   => 'ubuhanga',
        'slug'                     => 'slug',
        'specialization'           => 'umwihariko',
        'started_at'               => 'yatangiriye kuri',
        'state'                    => 'leta',
        'status'                   => 'imiterere',
        'street'                   => 'ibarabara',
        'student'                  => 'umunyeshuri',
        'subject'                  => 'ingingo',
        'tag'                      => 'tag',
        'tags'                     => 'tagi',
        'teacher'                  => 'mwarimu',
        'terms'                    => 'magambo',
        'test_description'         => 'ibisobanuro by\'ikizamini',
        'test_locale'              => 'Ikizamini',
        'test_name'                => 'izina ry\'ikizamini',
        'text'                     => 'inyandiko',
        'time'                     => 'igihe',
        'title'                    => 'Umutwe',
        'type'                     => 'Ubwoko',
        'updated_at'               => 'bigezweho kuri',
        'user'                     => 'umukoresha',
        'username'                 => 'izina ukoresha',
        'value'                    => 'agaciro',
        'winner'                   => 'winner',
        'work'                     => 'work',
        'year'                     => 'umwaka',
    ],
];
