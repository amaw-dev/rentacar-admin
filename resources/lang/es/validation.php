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

    'accepted' => ':attribute debe ser aceptado.',
    'active_url' => ':attribute no es una URL válida.',
    'after' => ':attribute debe ser una fecha después de :date.',
    'after_or_equal' => ':attribute debe ser una fecha igual o después de :date.',
    'alpha' => ':attribute solo debe contener letras.',
    'alpha_dash' => ':attribute solo debe contener letras, números, guiones y guiones bajo.',
    'alpha_num' => ':attribute solo debe contener letras y números.',
    'array' => ':attribute debe ser un arreglo.',
    'before' => ':attribute debe ser una fecha antes de :date.',
    'before_or_equal' => ':attribute debe ser una fecha antes o igual que :date.',
    'between' => [
        'numeric' => ':attribute debe ser entre :min y :max.',
        'file' => ':attribute debe ser entre :min y :max kilobytes.',
        'string' => ':attribute debe ser entre :min y :max caracteres.',
        'array' => ':attribute debe tener entre :min y :max elementos.',
    ],
    'boolean' => ':attribute debe ser falso o verdadero.',
    'confirmed' => ':attribute confirmación no coincide.',
    'current_password' => 'La contraseña es incorrecta.',
    'date' => ':attribute no es una fecha válida.',
    'date_equals' => ':attribute debe ser una fecha igual a :date.',
    'date_format' => ':attribute no coincide con el formato :format.',
    'different' => ':attribute y :other debe ser diferentes.',
    'digits' => ':attribute debe ser :digits digitos.',
    'digits_between' => ':attribute debe ser entre :min y :max digitos.',
    'dimensions' => ':attribute tiene dimensiones de imagen inválidas.',
    'distinct' => ':attribute tiene un valor duplicado.',
    'email' => ':attribute debe tener una dirección de correo válido.',
    'ends_with' => ':attribute debe terminar con uno de los siguientes: :values.',
    'exists' => 'El :attribute seleccionado es inválido.',
    'file' => ':attribute debe ser un archivo.',
    'filled' => ':attribute debe tener un valor.',
    'gt' => [
        'numeric' => ':attribute debe ser mayor que :value.',
        'file' => ':attribute debe ser mayor que :value kilobytes.',
        'string' => ':attribute debe ser mayor que :value caracteres.',
        'array' => ':attribute debe tener más de :value elementos.',
    ],
    'gte' => [
        'numeric' => ':attribute debe ser mayor o igual que :value.',
        'file' => ':attribute debe ser mayor o igual que :value kilobytes.',
        'string' => ':attribute debe ser mayor o igual que :value caracteres.',
        'array' => ':attribute debe tener :value elementos o más.',
    ],
    'image' => ':attribute debe ser una imagen.',
    'in' => 'El :attribute seleccionado es inválido.',
    'in_array' => 'El campo :attribute no existe en :other.',
    'integer' => ':attribute debe ser un número entero.',
    'ip' => ':attribute debe ser una dirección IP válida.',
    'ipv4' => ':attribute debe ser una dirección IPv4 válida.',
    'ipv6' => ':attribute debe ser una dirección IPv6 válida.',
    'json' => ':attribute debe ser una cadena JSON válida.',
    'lt' => [
        'numeric' => ':attribute debe tener menos de :value.',
        'file' => ':attribute debe tener menos de :value kilobytes.',
        'string' => ':attribute debe tener menos de :value caracteres.',
        'array' => ':attribute debe tener menos de :value elementos.',
    ],
    'lte' => [
        'numeric' => ':attribute debe tener menos o igual que :value.',
        'file' => ':attribute debe tener menos o igual que :value kilobytes.',
        'string' => ':attribute debe tener menos o igual que :value caracteres.',
        'array' => ':attribute no debe tener más de :value elementos.',
    ],
    'max' => [
        'numeric' => ':attribute no debe ser más que :max.',
        'file' => ':attribute no debe ser mayor que :max kilobytes.',
        'string' => ':attribute no debe ser mayor que :max caracteres.',
        'array' => ':attribute no debe tener más de :max elementos.',
    ],
    'mimes' => ':attribute debe ser un archivo de tipo: :values.',
    'mimetypes' => ':attribute debe ser un archivo de tipo: :values.',
    'min' => [
        'numeric' => ':attribute debe ser al menos :min.',
        'file' => ':attribute debe ser al menos :min kilobytes.',
        'string' => ':attribute debe ser al menos :min caracteres.',
        'array' => ':attribute debe tener al menos :min elementos.',
    ],
    'multiple_of' => ':attribute debe ser múltiplo de :value.',
    'not_in' => 'El :attribute seleccionado es inválido.',
    'not_regex' => 'El :attribute formato es inválido.',
    'numeric' => ':attribute debe ser un número.',
    'password' => 'La contraseña es incorrecta.',
    'present' => 'El campo :attribute debe estar presente.',
    'regex' => 'El formato :attribute es inválido.',
    'required' => 'El campo :attribute es requerido.',
    'required_if' => 'El campo :attribute es requerido cuando :other es :value.',
    'required_unless' => 'El campo :attribute es requerido a menos que :other está en :values.',
    'required_with' => 'El campo :attribute es requerido cuando :values está presente.',
    'required_with_all' => 'El campo :attribute es requerido cuando :values están presentes.',
    'required_without' => 'El campo :attribute es requerido cuando :values no está presente.',
    'required_without_all' => 'El campo :attribute es requerido cuando ninguno de :values están presentes.',
    'prohibited' => 'El campo :attribute está prohibido.',
    'prohibited_if' => 'El campo :attribute está prohibido cuando :other es :value.',
    'prohibited_unless' => 'El campo :attribute está prohibido a menos que :other es en :values.',
    'same' => ':attribute y :other debe coincidir.',
    'size' => [
        'numeric' => ':attribute debe ser :size.',
        'file' => ':attribute debe ser :size kilobytes.',
        'string' => ':attribute debe ser :size caracteres.',
        'array' => ':attribute debe contener :size elementos.',
    ],
    'starts_with' => ':attribute debe empezar con uno de los siguientes: :values.',
    'string' => ':attribute debe ser una cadena.',
    'timezone' => ':attribute debe tener una zona de tiempo válida.',
    'unique' => ':attribute ha sido tomado.',
    'uploaded' => ':attribute falló al subir.',
    'url' => ':attribute debe tener una URL válida.',
    'uuid' => ':attribute debe tener un UUID válida.',

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

    'attributes' => [
        'identification'    =>  'identificación',
        'name'    =>  'nombre',
        'category'    =>  'categoría',
        'description'    =>  'descripción',
        'image'    =>  'imagen',
        'extra_hours.1'    =>  'precio 1 hora extra',
        'extra_hours.2'    =>  'precio 2 horas extra',
        'extra_hours.3'    =>  'precio 3 horas extra',
        'extra_hours.4'    =>  'precio 4 horas extra',
        'unavailable'    =>  'agotado',
        'ad'    =>  'anuncio',
    ],

];
