<?php

declare(strict_types=1);

return [
    'accepted'             => 'Polje :attribute mora biti prihvaćeno.',
    'accepted_if'          => 'The :attribute must be accepted when :other is :value.',
    'active_url'           => 'Polje :attribute nije validan URL.',
    'after'                => 'Polje :attribute mora biti datum nakon :date.',
    'after_or_equal'       => 'Polje :attribute mora biti datum nakon ili jednak :date.',
    'alpha'                => 'Polje :attribute može sadržati samo slova.',
    'alpha_dash'           => 'Polje :attribute može sadržati samo slova, brojeve i povlake.',
    'alpha_num'            => 'Polje :attribute može sadržati samo slova i brojeve.',
    'array'                => 'Polje :attribute mora biti niz.',
    'before'               => 'Polje :attribute mora biti datum prije :date.',
    'before_or_equal'      => 'Polje :attribute mora biti datum prije ili jednak :date.',
    'between'              => [
        'array'   => 'Polje :attribute mora sadržati između :min i :max stavki.',
        'file'    => 'Polje :attribute mora imati veličinu između :min i :max kilobajta.',
        'numeric' => 'Polje :attribute mora imati vrijednost između :min i :max.',
        'string'  => 'Polje :attribute mora sadržati između :min i :max znakova.',
    ],
    'boolean'              => 'Polje :attribute mora biti tačno ili netačno.',
    'confirmed'            => 'Potvrda polja :attribute se ne poklapa.',
    'current_password'     => 'The password is incorrect.',
    'date'                 => 'Polje :attribute nema ispravan datum.',
    'date_equals'          => 'Polje :attribute mora biti datum jednak :date.',
    'date_format'          => 'Polje :attribute se ne poklapa s formatom :format.',
    'declined'             => 'The :attribute must be declined.',
    'declined_if'          => 'The :attribute must be declined when :other is :value.',
    'different'            => 'Polja :attribute i :other moraju biti različita.',
    'digits'               => 'Polje :attribute mora sardžati :digits broja.',
    'digits_between'       => 'Polje :attribute mora sardžati između :min i :max broja.',
    'dimensions'           => 'Dimenzije slike polja :attribute nisu validne.',
    'distinct'             => 'Polje :attribute ima dvostruku vrijednost.',
    'email'                => 'Format polja :attribute mora biti validan e-mail.',
    'ends_with'            => 'Polje :attribute se mora završiti s jednom od sljedećih vrijednosti: :values.',
    'enum'                 => 'The selected :attribute is invalid.',
    'exists'               => 'Odabrano polje :attribute nije validno.',
    'file'                 => 'Polje :attribute mora biti fajl.',
    'filled'               => 'Polje :attribute je mora sadržati vrijednost.',
    'gt'                   => [
        'array'   => 'Polje :attribute mora sadržati više od :value stavki.',
        'file'    => 'Polje :attribute mora imati veličinu veću od :value kilobajta.',
        'numeric' => 'Polje :attribute mora imati vrijednost veću od :value.',
        'string'  => 'Polje :attribute mora sadržati više od :value znakova.',
    ],
    'gte'                  => [
        'array'   => 'Polje :attribute mora sadržati :value stavki ili više.',
        'file'    => 'Polje :attribute mora imati veličinu veću ili jednaku :value kilobajta.',
        'numeric' => 'Polje :attribute mora imati vrijednost veću ili jednaku :value.',
        'string'  => 'Polje :attribute mora sadržati :value znakova ili više.',
    ],
    'image'                => 'Polje :attribute mora biti slika.',
    'in'                   => 'Odabrano polje :attribute nije validno.',
    'in_array'             => 'Polje :attribute ne postoji u :other.',
    'integer'              => 'Polje :attribute mora biti broj.',
    'ip'                   => 'Polje :attribute mora biti validna IP adresa.',
    'ipv4'                 => 'Polje :attribute mora biti validna IPv4 adresa.',
    'ipv6'                 => 'Polje :attribute mora biti validna IPv6 adresa.',
    'json'                 => 'Polje :attribute mora biti validan JSON string.',
    'lt'                   => [
        'array'   => 'Polje :attribute mora sadržati manje od :value stavki.',
        'file'    => 'Polje :attribute mora imati veličinu manju od :value kilobajta.',
        'numeric' => 'Polje :attribute imati vrijednost manju od :value.',
        'string'  => 'Polje :attribute mora sadržati manje od :value znakova.',
    ],
    'lte'                  => [
        'array'   => 'Polje :attribute ne može sadržati više od :value stavki.',
        'file'    => 'Polje :attribute mora imati veličinu manju ili jednaku :value kilobajta.',
        'numeric' => 'Polje :attribute mora imati vrijednost manju ili jednaku :value.',
        'string'  => 'Polje :attribute ne može sadržati više od :value znakova.',
    ],
    'mac_address'          => 'The :attribute must be a valid MAC address.',
    'max'                  => [
        'array'   => 'Polje :attribute mora sadržati manje od :max stavki.',
        'file'    => 'Polje :attribute mora imati veličinu manju od :max kilobajta.',
        'numeric' => 'Polje :attribute mora imati vrijednost manju od :max.',
        'string'  => 'Polje :attribute mora sadržati manje od :max znakova.',
    ],
    'mimes'                => 'Polje :attribute mora biti fajl tipa: :values.',
    'mimetypes'            => 'Polje :attribute mora biti fajl tipa: :values.',
    'min'                  => [
        'array'   => 'Polje :attribute mora sadržati najmanje :min stavki.',
        'file'    => 'Fajl :attribute mora biti najmanje :min kilobajta.',
        'numeric' => 'Polje :attribute mora biti najmanje :min.',
        'string'  => 'Polje :attribute mora sadržati najmanje :min znakova.',
    ],
    'multiple_of'          => 'Vrijednost polja :attribute mora biti djeljiva sa :value',
    'not_in'               => 'Odabrani element polja :attribute nije validan.',
    'not_regex'            => 'Format polja :attribute nije ispravan.',
    'numeric'              => 'Polje :attribute mora biti broj.',
    'password'             => 'Lozinka nije tačna.',
    'present'              => 'Polje :attribute mora biti prisutno.',
    'prohibited'           => ':attribute polje je zabranjeno.',
    'prohibited_if'        => ':attribute polje je zabranjeno kada :other ima :value.',
    'prohibited_unless'    => 'Polje :attribute je zabranjeno osim ako :other nije :values.',
    'prohibits'            => 'The :attribute field prohibits :other from being present.',
    'regex'                => 'Format polja :attribute nije ispravan.',
    'required'             => 'Polje :attribute je obavezno.',
    'required_array_keys'  => 'The :attribute field must contain entries for: :values.',
    'required_if'          => 'Polje :attribute je obavezno kada :other ima vrijednost :value.',
    'required_unless'      => 'Polje :attribute je obavezno osim ako vrijednost polja :other postoji u sljedećem nizu: :values.',
    'required_with'        => 'Polje :attribute je obavezno kada je bar jedno od polja :values prisutno.',
    'required_with_all'    => 'Polje :attribute je obavezno kada su polja :values prisutna.',
    'required_without'     => 'Polje :attribute je obavezno kada je bar jedno od polja :values nije prisutno.',
    'required_without_all' => 'Polje :attribute je obavezno kada polja :values nisu prisutna.',
    'same'                 => 'Polja :attribute i :other se moraju poklapati.',
    'size'                 => [
        'array'   => 'Polje :attribute mora biti :size znakova.',
        'file'    => 'Fajl :attribute mora biti :size kilobajta.',
        'numeric' => 'Polje :attribute mora biti :size.',
        'string'  => 'Polje :attribute mora biti :size znakova.',
    ],
    'starts_with'          => 'Polje :attribute mora početi s jednom od sljedećih vrijednosti: :values.',
    'string'               => 'Polje :attribute mora sadrzavati slova.',
    'timezone'             => 'Polje :attribute mora biti ispravna vremenska zona.',
    'unique'               => 'Polje :attribute već postoji.',
    'uploaded'             => 'Učitavanje polja :attribute nije uspjelo.',
    'url'                  => 'Format polja :attribute nije validan.',
    'uuid'                 => 'Polje :attribute mora biti validan UUID.',
    'attributes'           => [
        'address'                  => 'Address',
        'age'                      => 'Age',
        'amount'                   => 'Amount',
        'area'                     => 'Area',
        'available'                => 'Available',
        'birthday'                 => 'Birthday',
        'body'                     => 'Body',
        'city'                     => 'City',
        'content'                  => 'Content',
        'country'                  => 'Country',
        'created_at'               => 'Created At',
        'creator'                  => 'Creator',
        'current_password'         => 'Current Password',
        'date'                     => 'Date',
        'date_of_birth'            => 'Date Of Birth',
        'day'                      => 'Day',
        'deleted_at'               => 'Deleted At',
        'description'              => 'Description',
        'district'                 => 'District',
        'duration'                 => 'Duration',
        'email'                    => 'Email',
        'excerpt'                  => 'Excerpt',
        'filter'                   => 'Filter',
        'first_name'               => 'First Name',
        'gender'                   => 'Gender',
        'group'                    => 'Group',
        'hour'                     => 'Hour',
        'image'                    => 'Image',
        'last_name'                => 'Last Name',
        'lesson'                   => 'Lesson',
        'line_address_1'           => 'Line Address 1',
        'line_address_2'           => 'Line Address 2',
        'message'                  => 'Message',
        'middle_name'              => 'Middle Name',
        'minute'                   => 'Minute',
        'mobile'                   => 'Mobile',
        'month'                    => 'Month',
        'name'                     => 'Name',
        'national_code'            => 'National Code',
        'number'                   => 'Number',
        'password'                 => 'Password',
        'password_confirmation'    => 'Password Confirmation',
        'phone'                    => 'Phone',
        'photo'                    => 'Photo',
        'postal_code'              => 'Postal Code',
        'price'                    => 'Price',
        'province'                 => 'Province',
        'recaptcha_response_field' => 'Recaptcha Response Field',
        'remember'                 => 'Remember',
        'restored_at'              => 'Restored At',
        'result_text_under_image'  => 'Result Text Under Image',
        'role'                     => 'Role',
        'second'                   => 'Second',
        'sex'                      => 'Sex',
        'short_text'               => 'Short Text',
        'size'                     => 'Size',
        'state'                    => 'State',
        'street'                   => 'Street',
        'student'                  => 'Student',
        'subject'                  => 'Subject',
        'teacher'                  => 'Teacher',
        'terms'                    => 'Terms',
        'test_description'         => 'Test Description',
        'test_locale'              => 'Test Locale',
        'test_name'                => 'Test Name',
        'text'                     => 'Text',
        'time'                     => 'Time',
        'title'                    => 'Title',
        'updated_at'               => 'Updated At',
        'username'                 => 'Username',
        'year'                     => 'Year',
    ],
    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
];