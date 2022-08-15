<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => ':attribute dient te worden geaccepteerd.',
    'active_url'           => ':attribute is geen geldige URL.',
    'after'                => ':attribute moet een datum zijn na :date.',
    'after_or_equal'       => ':attribute moet een datum zijn na of gelijk aan :date.',
    'alpha'                => ':attribute mag alleen letters bevatten.',
    'alpha_dash'           => ':attribute mag alleen letters, nummers, and strepen bevatten.',
    'alpha_num'            => ':attribute mag alleen letters en nummers bevatten.',
    'array'                => ':attribute moet een array zijn.',
    'before'               => ':attribute moet een datum zijn eerder dan :date.',
    'before_or_equal'      => ':attribute moet een datum zijn voor of gelijk aan :date.',
    'between'              => [
        'numeric' => ':attribute moet tussen :min en :max liggen.',
        'file'    => ':attribute moet tussen :min en :max kilobytes zijn.',
        'string'  => ':attribute moet tussen :min en :max karakters lang zijn.',
        'array'   => ':attribute moet tussen :min en :max items bevatten.',
    ],
    'boolean'              => ':attribute kan enkel true of false zijn.',
    'confirmed'            => ':attribute bevestiging komt niet overeen.',
    'date'                 => ':attribute is geen geldige datum.',
    'date_format'          => ':attribute komt niet overeen met het formaat :format.',
    'different'            => ':attribute en :other dienen verschillend te zijn.',
    'digits'               => ':attribute moet :digits cijfers zijn.',
    'digits_between'       => ':attribute moet tussen :min en :max cijfers zijn.',
    'dimensions'           => ':attribute heeft een ongeldige grootte.',
    'distinct'             => ':attribute heeft een dubbele waarde.',
    'email'                => ':attribute dient een geldig emailadres te zijn.',
    'exists'               => 'Het geselecteerde :attribute is ongeldig.',
    'file'                 => ':attribute moet een bestand zijn.',
    'filled'               => ':attribute veld is verplicht.',
    'gt'                   => [
        'numeric' => 'Het :attribute veld moet groter zijn dan :value.',
        'file'    => 'Het :attribute veld moet groter zijn dan :value kilobytes.',
        'string'  => 'Het :attribute veld moet groter zijn dan :value tekens.',
        'array'   => 'Het :attribute veld moet meer dan :value items bevatten.',
    ],
    'gte'                  => [
        'numeric' => 'Het :attribute veld moet groter of gelijk zijn aan :value.',
        'file'    => 'Het :attribute veld moet groter of gelijk zijn aan :value kilobytes.',
        'string'  => 'Het :attribute veld moet groter of gelijk zijn aan :value tekens.',
        'array'   => 'Het :attribute veld moet :value of meer items bevatten.',
    ],
    'image'                => ':attribute dient een afbeelding te zijn.',
    'in'                   => 'Het geselecteerde :attribute is ongeldig.',
    'in_array'             => ':attribute komt niet voor in :other.',
    'integer'              => ':attribute dient een geheel getal te zijn.',
    'ip'                   => ':attribute dient een geldig IP adres te zijn.',
    'ipv4'                 => ':attribute dient een geldig IPv4 adres te zijn.',
    'ipv6'                 => ':attribute dient een geldig IPv6 adres te zijn..',
    'json'                 => ':attribute moet een geldige JSON string zijn.',
    'lt'                   => [
        'numeric' => 'Het :attribute veld moet kleiner zijn dan :value.',
        'file'    => 'Het :attribute veld moet kleiner zijn dann :value kilobytes.',
        'string'  => 'Het :attribute veld moet kleiner zijn dan :value tekens.',
        'array'   => 'Het :attribute veld moet minder dan :value items bevatten.',
    ],
    'lte'                  => [
        'numeric' => 'Het :attribute veld moet kleiner of gelijk zijn aan :value.',
        'file'    => 'Het :attribute veld moet kleiner of gelijk zijn aan :value kilobytes.',
        'string'  => 'Het :attribute veld moet kleiner of gelijk zijn aan :value tekens.',
        'array'   => 'Het :attribute veld mag maximaal :value items bevatten.',
    ],
    'max'                  => [
        'numeric' => ':attribute mag niet groter zijn dan :max.',
        'file'    => ':attribute mag niet groter zijn dan :max kilobytes.',
        'string'  => ':attribute mag niet groter zijn dan :max karakters.',
        'array'   => ':attribute mag niet meer dan :max items bevatten.',
    ],
    'mimes'                => ':attribute dient een bestand te zijn van het type: :values.',
    'mimetypes'            => ':attribute dient een bestand te zijn van het type: :values.',
    'min'                  => [
        'numeric' => ':attribute dient minimaal :min te zijn.',
        'file'    => ':attribute dient minimaal :min kilobytes te zijn.',
        'string'  => ':attribute dient minimaal :min karakters te bevatten.',
        'array'   => ':attribute dient minimaal :min items te bevatten.',
    ],
    'not_in'               => 'Het geselecteerde :attribute is ongeldig.',
    'not_regex'            => 'Het :attribute format is ongeldig.',
    'numeric'              => 'Het :attribute dient een nummer te zijn.',
    'present'              => 'Het :attribute dient aanwezig te zijn.',
    'regex'                => 'Het :attribute formaat is ongeldig.',
    'required'             => 'Het :attribute veld is verplicht.',
    'required_if'          => 'Het :attribute veld is verplicht wanneer :other is :value.',
    'required_unless'      => 'Het :attribute veld is verplicht, tenzij :other is in :values.',
    'required_with'        => 'Het :attribute veld is verplicht wanneer :values aanwezig is.',
    'required_with_all'    => 'Het :attribute veld is verplicht wanneer :values aanwezig is.',
    'required_without'     => 'Het :attribute veld is verplicht wanneer :values niet aanwezig is.',
    'required_without_all' => 'Het :attribute veld is verplicht wanneer geen van :values aanwezig is.',
    'same'                 => 'Het :attribute en :other moeten hetzelfde zijn.',
    'size'                 => [
        'numeric' => ':attribute moet :size zijn.',
        'file'    => ':attribute moet :size kilobytes groot zijn.',
        'string'  => ':attribute moet :size karakters lang zijn.',
        'array'   => ':attribute moet :size items bevatten.',
    ],
    'string'               => ':attribute moet een string zijn.',
    'timezone'             => ':attribute moet een geldige tijdszone zijn.',
    'unique'               => ':attribute is al bezet.',
    'uploaded'             => 'Het uploaden van :attribute is mislukt.',
    'url'                  => ':attribute formaat is ongeldig.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];