<?php

declare(strict_types=1);

return [
    'accepted'               => 'Dapat na tanggapin ang :attribute.',
    'accepted_if'            => 'Ang :attribute ay dapat tanggapin kapag ang :other ay :value.',
    'active_url'             => 'Hindi valid na URL ang :attribute.',
    'after'                  => 'Ang :attribute ay dapat na isang petsa pagkatapos ng :date.',
    'after_or_equal'         => 'Ang :attribute ay dapat na isang petsa na pagkatapos o katumbas ng :date.',
    'alpha'                  => 'Mga titik lang dapat ang nilalaman ng :attribute.',
    'alpha_dash'             => 'Mag titik, numero, gitlling at underscore lang dapat ang nilalaman ng :attribute.',
    'alpha_num'              => 'Mag titik, numero, gitlling at underscore lang dapat ang nilalaman ng :attribute.',
    'array'                  => 'Dapat na isang array ang :attribute.',
    'ascii'                  => 'Ang :attribute ay dapat lamang maglaman ng mga single-byte na alphanumeric na character at simbolo.',
    'before'                 => 'Ang :attribute ay dapat na isang petsa bago ang :date.',
    'before_or_equal'        => 'Ang :attribute ay dapat na isang petsa bago ang o katumbas ng :date.',
    'between'                => [
        'array'   => 'Ang :attribute ay dapat na nasa pagitan ng :min at :max (na) item.',
        'file'    => 'Ang :attribute ay dapat na nasa pagitan ng :min at :max (na) kilobyte.',
        'numeric' => 'Ang :attribute ay dapat na nasa pagitan ng :min at :max.',
        'string'  => 'Ang :attribute ay dapat na nasa pagitan ng :min at :max (na) character.',
    ],
    'boolean'                => 'Dapat na true o false ang field na :attribute.',
    'can'                    => 'Ang :attribute field ay naglalaman ng hindi awtorisadong halaga.',
    'confirmed'              => 'Hindi tumutugma ang pagkumpirma ng :attribute.',
    'contains'               => 'Ang :attribute field ay walang kinakailangang halaga.',
    'current_password'       => 'Mali ang password.',
    'date'                   => 'Hindi valid na petsa ang :attribute.',
    'date_equals'            => 'Ang :attribute ay dapat na isang petsa na katumbas ng :date.',
    'date_format'            => 'Hindi tumutugma ang :attribute sa format na :format.',
    'decimal'                => 'Ang :attribute ay dapat mayroong :decimal decimal na lugar.',
    'declined'               => 'Dapat tanggihan ang :attribute.',
    'declined_if'            => 'Ang :attribute ay dapat tanggihan kapag ang :other ay :value.',
    'different'              => 'Dapat na magkaiba ang :attribute at :other.',
    'digits'                 => 'Ang :attribute ay dapat na :digits (na) digits',
    'digits_between'         => 'Ang :attribute ay dapat na nasa pagitan ng :min at :max (na) digit.',
    'dimensions'             => 'May mga hindi valid na dimensyon ng larawan ang :attribute.',
    'distinct'               => 'May duplicate na value ang field na :attribute.',
    'doesnt_end_with'        => 'Ang :attribute ay maaaring hindi magtapos sa isa sa mga sumusunod: :values.',
    'doesnt_start_with'      => 'Ang :attribute ay maaaring hindi magsimula sa isa sa mga sumusunod: :values.',
    'email'                  => 'Dapat na valid na email address ang :attribute.',
    'ends_with'              => 'Ang :attribute ay dapat magtapos sa isa sa mga sumusunod: :values.',
    'enum'                   => 'Ang napiling :attribute ay hindi wasto.',
    'exists'                 => 'Hindi valid ang piniling :attribute.',
    'extensions'             => 'Ang :attribute field ay dapat may isa sa mga sumusunod na extension: :values.',
    'file'                   => 'Dapat na isang file ang :attribute.',
    'filled'                 => 'Dapat na may value ang field na :attribute.',
    'gt'                     => [
        'array'   => 'Ang :attribute ay dapat na mayroong mahigit sa :value (na) item.',
        'file'    => 'Ang :attribute ay dapat na mas malaki sa :value (na) kilobyte.',
        'numeric' => 'Ang :attribute ay dapat na mas malaki sa :value.',
        'string'  => 'Ang :attribute ay dapat na mas marami sa :value (na) character.',
    ],
    'gte'                    => [
        'array'   => 'Ang :attribute ay dapat na mayroong :value (na) item o higit pa.',
        'file'    => 'Ang :attribute ay dapat na mas malaki sa o katumbas ng :value (na) kilobyte.',
        'numeric' => 'Ang :attribute ay dapat na mas malaki sa o katumbas ng :value.',
        'string'  => 'Ang :attribute ay dapat na mas marami sa o katumbas ng :value (na) character.',
    ],
    'hex_color'              => 'Ang :attribute field ay dapat na isang wastong hexadecimal na kulay.',
    'image'                  => 'Dapat na isang larawan ang :attribute.',
    'in'                     => 'Hindi valid ang piniling :attribute.',
    'in_array'               => 'Hindi umiiral ang field na :attribute sa :other.',
    'integer'                => 'Dapat na isang integer ang :attribute.',
    'ip'                     => 'Dapat na valid na IP address ang :attribute.',
    'ipv4'                   => 'Dapat na valid na IPv4 address ang :attribute.',
    'ipv6'                   => 'Dapat na IPv6 address ang :attribute.',
    'json'                   => 'Dapat na valid na JSON string ang :attribute.',
    'list'                   => 'Ang :attribute field ay dapat na isang listahan.',
    'lowercase'              => 'Dapat lowercase ang :attribute.',
    'lt'                     => [
        'array'   => 'Ang :attribute ay dapat na may mas bababa sa :value (na) item.',
        'file'    => 'Ang :attribute ay dapat na mas mababa sa :value (na) kilobyte.',
        'numeric' => 'Ang :attribute ay dapat na mas mababa sa :value.',
        'string'  => 'Ang :attribute ay dapat na mas mababa sa :value (na) character.',
    ],
    'lte'                    => [
        'array'   => 'Hindi dapat magkaroon ang :attribute ng higit sa :value (na) item.',
        'file'    => 'Ang :attribute ay dapat na mas mababa sa o katumbas ng :value (na) kilobyte.',
        'numeric' => 'Ang :attribute ay dapat na mas mababa sa o katumbas ng :value.',
        'string'  => 'Ang :attribute ay dapat na mas mababa sa o katumbas ng :value (na) character.',
    ],
    'mac_address'            => 'Ang :attribute ay dapat na isang wastong MAC address.',
    'max'                    => [
        'array'   => 'Hindi dapat magkaroon ang :attribute ng mahigit sa :max (na) item.',
        'file'    => 'Ang :attribute ay hindi dapat mas malaki sa :max (na) kilobyte.',
        'numeric' => 'Ang :attribute ay hindi dapat mas malaki sa :max.',
        'string'  => 'Ang :attribute ay hindi dapat mas malaki sa :max (na) character.',
    ],
    'max_digits'             => 'Ang :attribute ay hindi dapat magkaroon ng higit sa :max na mga numero.',
    'mimes'                  => 'Ang :attribute ay dapat na isang file na may uri na: :values.',
    'mimetypes'              => 'Ang :attribute ay dapat na file na may uri na: :values.',
    'min'                    => [
        'array'   => 'Ang :attribute ay dapat na may hindi bababa sa :min (na) item.',
        'file'    => 'Ang :attribute ay dapat na hindi bababa sa :min (na) kilobyte.',
        'numeric' => 'Ang :attribute ay dapat na hindi bababa sa :min.',
        'string'  => 'Ang :attribute ay dapat na hindi bababa sa :min (na) character.',
    ],
    'min_digits'             => 'Ang :attribute ay dapat magkaroon ng hindi bababa sa :min digit.',
    'missing'                => 'Dapat nawawala ang :attribute field.',
    'missing_if'             => 'Dapat na nawawala ang :attribute field kapag ang :other ay :value.',
    'missing_unless'         => 'Dapat na nawawala ang :attribute field maliban kung ang :other ay :value.',
    'missing_with'           => 'Dapat nawawala ang :attribute field kapag :values ang naroroon.',
    'missing_with_all'       => 'Dapat na nawawala ang :attribute field kapag :values ang naroroon.',
    'multiple_of'            => 'Ang :attribute ay dapat na isang multiple ng :value.',
    'not_in'                 => 'Hindi valid ang piniling :attribute.',
    'not_regex'              => 'Hindi valid ang format na :attribute.',
    'numeric'                => 'Dapat na numero ang :attribute.',
    'password'               => [
        'letters'       => 'Ang :attribute ay dapat maglaman ng hindi bababa sa isang titik.',
        'mixed'         => 'Ang :attribute ay dapat maglaman ng hindi bababa sa isang malaking titik at isang maliit na titik.',
        'numbers'       => 'Ang :attribute ay dapat maglaman ng hindi bababa sa isang numero.',
        'symbols'       => 'Ang :attribute ay dapat maglaman ng hindi bababa sa isang simbolo.',
        'uncompromised' => 'Ang ibinigay na :attribute ay lumabas sa isang data leak. Mangyaring pumili ng ibang :attribute.',
    ],
    'present'                => 'Dapat na mayroon ng field na :attribute.',
    'present_if'             => 'Ang :attribute field ay dapat naroroon kapag ang :other ay :value.',
    'present_unless'         => 'Ang :attribute field ay dapat naroroon maliban kung ang :other ay :value.',
    'present_with'           => 'Ang :attribute field ay dapat naroroon kapag :values ang naroroon.',
    'present_with_all'       => 'Ang :attribute field ay dapat naroroon kapag :values ang naroroon.',
    'prohibited'             => 'Ang :attribute field ay ipinagbabawal.',
    'prohibited_if'          => 'Ang :attribute field ay ipinagbabawal kapag ang :other ay :value.',
    'prohibited_if_accepted' => 'Ipinagbabawal ang :attribute patlang kapag tinanggap ang :other.',
    'prohibited_if_declined' => 'Ang :attribute patlang ay ipinagbabawal kapag ang :other ay tinanggihan.',
    'prohibited_unless'      => 'Ang :attribute field ay ipinagbabawal maliban kung ang :other ay nasa :values.',
    'prohibits'              => 'Ang :attribute field ay nagbabawal sa :other na makasama.',
    'regex'                  => 'Hindi valid ang format na :attribute.',
    'required'               => 'Kinakailangan ang field na :attribute.',
    'required_array_keys'    => 'Ang :attribute field ay dapat maglaman ng mga entry para sa: :values.',
    'required_if'            => 'Kinakailangan ang field na :attribute kapag ang :other ay :value.',
    'required_if_accepted'   => 'Ang :attribute field ay kinakailangan kapag :other ay tinanggap.',
    'required_if_declined'   => 'Kinakailangan ang :attribute field kapag tinanggihan ang :other.',
    'required_unless'        => 'Kinakailangan ang field na :attribute maliban kung ang :other ay nasa :values.',
    'required_with'          => 'Kinakailangan ang field na :attribute kapag mayroong :values.',
    'required_with_all'      => 'Kinakailangan ang field na :attribute kapag mayroong :values.',
    'required_without'       => 'Kinakailangan ang field na :attribute kapag wala ang anuman sa :values.',
    'required_without_all'   => 'Kinakailangan ang field na :attribute kapag wala ang anuman sa :values.',
    'same'                   => 'Dapat na magtugma ang :attribute at :other.',
    'size'                   => [
        'array'   => 'Dapat na maglaman ang :attribute ng :size (na) item.',
        'file'    => 'Ang :attribute ay dapat na :size (na) kilobyte.',
        'numeric' => 'Ang :attribute ay dapat na :size.',
        'string'  => 'Ang :attribute ay dapat na :size (na) character.',
    ],
    'starts_with'            => 'Dapat na magsimula ang :attribute sa isa sa sumusunod: :values',
    'string'                 => 'Dapat na isang string ang :attribute.',
    'timezone'               => 'Dapat na valid na timezone ang :attribute.',
    'ulid'                   => 'Ang :attribute ay dapat na isang wastong ULID.',
    'unique'                 => 'Ginagamit na ang :attribute.',
    'uploaded'               => 'Hindi na-upload ang :attribute.',
    'uppercase'              => 'Ang :attribute ay dapat na uppercase.',
    'url'                    => 'Hindi valid ang format na :attribute.',
    'uuid'                   => 'Dapat na valid na UUID ang :attribute.',
    'attributes'             => [
        'address'                  => 'address',
        'affiliate_url'            => 'kaakibat na URL',
        'age'                      => 'edad',
        'amount'                   => 'halaga',
        'announcement'             => 'anunsyo',
        'area'                     => 'lugar',
        'audience_prize'           => 'premyo ng madla',
        'audience_winner'          => 'audience winner',
        'available'                => 'magagamit',
        'birthday'                 => 'kaarawan',
        'body'                     => 'katawan',
        'city'                     => 'lungsod',
        'company'                  => 'company',
        'compilation'              => 'compilation',
        'concept'                  => 'konsepto',
        'conditions'               => 'kundisyon',
        'content'                  => 'nilalaman',
        'contest'                  => 'contest',
        'country'                  => 'bansa',
        'cover'                    => 'takip',
        'created_at'               => 'nilikha sa',
        'creator'                  => 'manlilikha',
        'currency'                 => 'pera',
        'current_password'         => 'kasalukuyang password',
        'customer'                 => 'customer',
        'date'                     => 'petsa',
        'date_of_birth'            => 'araw ng kapanganakan',
        'dates'                    => 'petsa',
        'day'                      => 'araw',
        'deleted_at'               => 'tinanggal sa',
        'description'              => 'paglalarawan',
        'display_type'             => 'uri ng display',
        'district'                 => 'distrito',
        'duration'                 => 'tagal',
        'email'                    => 'email',
        'excerpt'                  => 'sipi',
        'filter'                   => 'salain',
        'finished_at'              => 'natapos sa',
        'first_name'               => 'pangalan',
        'gender'                   => 'kasarian',
        'grand_prize'              => 'malaking premyo',
        'group'                    => 'pangkat',
        'hour'                     => 'oras',
        'image'                    => 'larawan',
        'image_desktop'            => 'larawan sa desktop',
        'image_main'               => 'pangunahing larawan',
        'image_mobile'             => 'mobile na imahe',
        'images'                   => 'mga larawan',
        'is_audience_winner'       => 'ay nagwagi sa madla',
        'is_hidden'                => 'ay nakatago',
        'is_subscribed'            => 'ay naka-subscribe',
        'is_visible'               => 'ay nakikita',
        'is_winner'                => 'ay nagwagi',
        'items'                    => 'mga bagay',
        'key'                      => 'susi',
        'last_name'                => 'huling pangalan',
        'lesson'                   => 'aralin',
        'line_address_1'           => 'address ng linya 1',
        'line_address_2'           => 'address ng linya 2',
        'login'                    => 'mag log in',
        'message'                  => 'mensahe',
        'middle_name'              => 'Gitnang pangalan',
        'minute'                   => 'minuto',
        'mobile'                   => 'mobile',
        'month'                    => 'buwan',
        'name'                     => 'pangalan',
        'national_code'            => 'pambansang kodigo',
        'number'                   => 'numero',
        'password'                 => 'password',
        'password_confirmation'    => 'pagkumpirma ng password',
        'phone'                    => 'telepono',
        'photo'                    => 'larawan',
        'portfolio'                => 'portfolio',
        'postal_code'              => 'postal code',
        'preview'                  => 'silipin',
        'price'                    => 'presyo',
        'product_id'               => 'ID ng produkto',
        'product_uid'              => 'UID ng produkto',
        'product_uuid'             => 'produkto UUID',
        'promo_code'               => 'promo code',
        'province'                 => 'lalawigan',
        'quantity'                 => 'dami',
        'reason'                   => 'dahilan',
        'recaptcha_response_field' => 'recaptcha na field ng tugon',
        'referee'                  => 'referee',
        'referees'                 => 'mga referee',
        'reject_reason'            => 'tanggihan ang dahilan',
        'remember'                 => 'Tandaan',
        'restored_at'              => 'naibalik sa',
        'result_text_under_image'  => 'text ng resulta sa ilalim ng larawan',
        'role'                     => 'papel',
        'rule'                     => 'tuntunin',
        'rules'                    => 'mga tuntunin',
        'second'                   => 'pangalawa',
        'sex'                      => 'kasarian',
        'shipment'                 => 'pagpapadala',
        'short_text'               => 'maikling teksto',
        'size'                     => 'laki',
        'skills'                   => 'kasanayan',
        'slug'                     => 'banatan',
        'specialization'           => 'espesyalisasyon',
        'started_at'               => 'nagsimula sa',
        'state'                    => 'estado',
        'status'                   => 'katayuan',
        'street'                   => 'kalye',
        'student'                  => 'mag-aaral',
        'subject'                  => 'paksa',
        'tag'                      => 'tag',
        'tags'                     => 'mga tag',
        'teacher'                  => 'guro',
        'terms'                    => 'mga tuntunin',
        'test_description'         => 'paglalarawan ng pagsubok',
        'test_locale'              => 'lokal na pagsubok',
        'test_name'                => 'pangalan ng pagsubok',
        'text'                     => 'text',
        'time'                     => 'oras',
        'title'                    => 'pamagat',
        'type'                     => 'uri',
        'updated_at'               => 'na-update sa',
        'user'                     => 'gumagamit',
        'username'                 => 'username',
        'value'                    => 'halaga',
        'winner'                   => 'winner',
        'work'                     => 'work',
        'year'                     => 'taon',
    ],
];
