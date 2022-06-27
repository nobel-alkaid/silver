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

    
    'accepted' => 'Le/La :attribute doit être accepté.',
    'active_url' => 'Le/La :attribute n\'est pas une URL valide.',
    'after' => 'Le/La :attribute doit être une date après :date.',
    'after_or_equal' => 'Le/La :attribute doit être une date postérieure ou égale à :date.',
    'alpha' => 'Le/La :attribute ne doit contenir que des lettres.',
    'alpha_dash' => 'Le/La :attribute ne doit contenir que des lettres, des chiffres, des tirets et des traits de soulignement.',
    'alpha_num' => 'Le/La :attribute ne doit contenir que des lettres et des chiffres.',
    'array' => 'Le/La :attribute doit être un tableau.',
    'before' => 'Le/La :attribute doit être une date avant :date.',
    'before_or_equal' => 'Le/La :attribute doit être une date antérieure ou égale à :date.',
    'between' => [
        'numeric' => 'Le/La :attribute doit être entre :min et :max.',
        'file' => 'Le/La :attribute doit être entre :min et :max kilo-octets.',
        'string' => 'Le/La :attributedoit être entre :min et :max caractères.',
        'array' => 'Le/La :attribute doit avoir entre :min et :max éléments.',
    ],
    'boolean' => 'Le/La :attribute le champ doit être vrai ou faux.',
    'confirmed' => 'Le/La :attribute la confirmation ne correspond pas.',
    'current_password' => 'Le/La Le mot de passe est incorrect.',
    'date' => 'Le/La :attribute n\'est pas une date valide.',
    'date_equals' => 'Le/La :attribute doit être une date égale à :date.',
    'date_format' => 'Le/La :attribute ne correspond pas au format :format.',
    'different' => 'Les :attribute et :other doivent être différents.',
    'digits' => 'Le/La :attribute doit être :digits chiffres.',
    'digits_between' => 'Le/La :attribute doit être entre :min et :max chiffres.',
    'dimensions' => 'Le/La :attribute a des dimensions d\'image non valides.',
    'distinct' => 'Le/La :attribute le champ a une valeur en double.',
    'email' => 'Le/La :attribute doit être une adresse e-mail valide.',
    'ends_with' => 'Le/La :attribute doit se terminer par l\'un des éléments suivants : :values.',
    'exists' => 'Le/La :attribute sélectionné(e) est invalide.',
    'file' => 'Le/La :attribute doit être un fichier.',
    'filled' => 'Le champs :attribute doit avoir une valeur.',
    'gt' => [
        'numeric' => 'Le/La :attribute doit être plus grand que :value.',
        'file' => 'Le/La :attribute doit être plus grand que :value kilo-octets.',
        'string' => 'Le/La :attribute doit être plus grand que :value caractères.',
        'array' => 'Le/La :attribute doit être plus grand que :value éléments.',
    ],
    'gte' => [
        'numeric' => 'Le/La :attribute doit être plus grand ou égal(e) à :value.',
        'file' => 'Le/La :attribute doit être plus grand ou égal(e) à :value kilo-octets.',
        'string' => 'Le/La :attribute doit être plus grand ou égal(e) à :value caractères.',
        'array' => 'Le/La :attribute doit avoir :value éléments ou plus.',
    ],
    'image' => 'Le/La :attribute doit être une image.',
    'in' => 'Le/La :attribute sélectionné est invalide.',
    'in_array' => 'Le champs :attribute doit pas exister dans :other.',
    'integer' => 'Le/La :attribute doit être un nombre.',
    'ip' => 'Le/La :attribute doit être un adresse IP valide.',
    'ipv4' => 'Le/La :attribute doit être un adresse IPv4 valide.',
    'ipv6' => 'Le/La :attribute must doit être un adresse IPv6 valide.',
    'json' => 'Le/La :attribute doit être un adresse JSON valide.',
    'lt' => [
        'numeric' => 'Le/La :attribute doit être inférieur à :value.',
        'file' => 'Le/La :attribute doit être inférieur à :value kilo-octets.',
        'string' => 'Le/La :attribute doit être inférieur à :value caractères.',
        'array' => 'Le/La :attribute doit avoir moins d\'éléments que :value .',
    ],
    'lte' => [
        'numeric' => 'Le/La :attribute doit être inférieur ou égal à :value.',
        'file' => 'Le/La :attribute doit être inférieur ou égal à :value kilo-octets.',
        'string' => 'Le/La :attribute doit être inférieur ou égal à :value caractères.',
        'array' => 'Le/La :attribute doit pas avoir plus d\'éléments que:value.',
    ],
    'max' => [
        'numeric' => 'Le/La :attribute doit pas être plus grand que :max.',
        'file' => 'Le/La :attribute doit pas être plus grand que :max kilo-octets.',
        'string' => 'Le/La :attribute doit pas être plus grand que :max caractères.',
        'array' => 'Le/La :attribute doit pas avoir plus d\'éléments que :max.',
    ],
    'mimes' => 'Le/La :attribute doit être un fichier de type: :values.',
    'mimetypes' => 'Le/La :attribute doit être un fichier de type: :values.',
    'min' => [
        'numeric' => 'Le/La :attribute doit être au moins :min.',
        'file' => 'Le/La :attribute doit être au moins :min kilo-octets.',
        'string' => 'Le/La :attribute doit être au moins :min caractères.',
        'array' => 'Le/La :attribute doit avoir au moins :min éléments.',
    ],
    'multiple_of' => 'Le/La :attribute doit être un multiple de :value.',
    'not_in' => 'Le/La :attribute sélectionné(e) est invalide.',
    'not_regex' => 'Le formatn de :attribute est invalide.',
    'numeric' => 'La valeur de :attribute doit être un nombre.',
    'password' => 'Le mot de passe est incorrect.',
    'present' => 'Le champs :attribute doit être présent.',
    'regex' => 'Le format de :attribute est invalide.',
    'required' => 'Le champs :attribute est requis.',
    'required_if' => 'Le champs :attribute est requis quand :other est :value.',
    'required_unless' => 'Le champs :attribute est requis sauf si :other est dans :values.',
    'required_with' => 'Le champs :attribute est requis quand :values est présent.',
    'required_with_all' => 'Le champs :attribute est requis quand :values sont présent.',
    'required_without' => 'Le champs :attribute est requis quand :values sont pas présents.',
    'required_without_all' => 'Le champs :attribute est requis quand aucun :values n\'est présent.',
    'prohibited' => 'Le champs :attribute est interdit.',
    'prohibited_if' => 'Le champs :attribute est interdit quand :other est :value.',
    'prohibited_unless' => 'Le champs :attribute est interdit sauf si :other est dans :values.',
    'same' => 'Le/La :attribute et :other doivent correspondre.',
    'size' => [
        'numeric' => 'Le/La :attribute doit être  :size.',
        'file' => 'Le/La :attribute doit être  :size kilo-octets.',
        'string' => 'Le/La :attribute doit être  :size caractères.',
        'array' => 'Le/La :attribute doit contenir :size éléments.',
    ],
    'starts_with' => 'Le/La :attribute doit commencer par l\'un des éléments suivants: :values.',
    'string' => 'Le/La :attribute doit être une chaîne de caractères.',
    'timezone' => 'Le/La :attribute doit être un fuseau horaire valide.',
    'unique' => 'Le/La :attribute a déjà été pris.',
    'uploaded' => 'Le/La :attribute échec du téléchargement.',
    'url' => 'Le/La :attribute doit être une URL valide.',
    'uuid' => 'Le/La :attribute doit être un UUID valide.',

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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
