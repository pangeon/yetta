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

    'accepted' => ':attribute musi zostać zaakceptowany.',
    'accepted_if' => ':attribute musi być zaakceptowany, gdy :other ma wartość :value.',
    'active_url' => ':attribute nie jest prawidłowym adresem URL.',
    'after' => ':attribute musi być datą po :date.',
    'after_or_equal' => ':attribute musi być datą po lub równą :date.',
    'alpha' => ':attribute może zawierać tylko litery.',
    'alpha_dash' => ':attribute może zawierać tylko litery, cyfry, myślniki i podkreślenia.',
    'alpha_num' => ':attribute może zawierać tylko litery i cyfry.',
    'array' => ':attribute musi być tablicą.',
    'before' => ':attribute musi być datą przed :date.',
    'before_or_equal' => ':attribute musi być datą przed lub równą :date.',
    'pomiędzy' => [
        'numeric' => ':attribute musi być pomiędzy :min i :max.',
        'file' => ':attribute musi być pomiędzy :min i :max kilobajtów.',
        'string' => ':attribute musi zawierać się pomiędzy :min i :max znaków.',
        'array' => ':attribute musi zawierać elementy od :min do :max.',
    ],
    'boolean' => 'Pole :attribute musi być prawdą lub fałszem.',
    'confirmed' => 'Potwierdzenie :attribute nie pasuje.',
    'current_password' => 'Hasło jest nieprawidłowe.',
    'date' => ':attribute nie jest prawidłową datą.',
    'date_equals' => ':attribute musi być datą równą :date.',
    'date_format' => ':attribute nie pasuje do formatu :format.',
    'declined' => ':attribute musi zostać odrzucony.',
    'declined_if' => 'Pole :attribute musi zostać odrzucone, gdy :other ma wartość :value.',
    'different' => ':attribute i :other muszą być różne.',
    'digits' => ':attribute musi składać się z :digits cyfr.',
    'digits_between' => ':attribute musi zawierać się pomiędzy :min i :max cyframi.',
    'dimensions' => ':attribute ma nieprawidłowe wymiary obrazu.',
    'distinct' => 'Pole :attribute ma zduplikowaną wartość.',
    'email' => ':attribute musi być poprawnym adresem e-mail.',
    'ends_with' => ':attribute musi kończyć się jednym z następujących: :values.',
    'enum' => 'Wybrany :attribute jest nieprawidłowy.',
    'exists' => 'Wybrany :attribute jest nieprawidłowy.',
    'file' => ':attribute musi być plikiem.',
    'filled' => 'Pole :attribute musi mieć wartość.',
    'gt' => [
        'numeric' => ':attribute musi być większe niż :value.',
        'file' => ':attribute musi być większe niż :value kilobajtów.',
        'string' => ':attribute musi być większe niż :value znaków.',
        'array' => ':attribute musi mieć więcej niż :value elementów.',
    ],
    'gte' => [
        'numeric' => ':attribute musi być większe lub równe :value.',
        'file' => ':attribute musi być większy lub równy :value kilobajtów.',
        'string' => ':attribute musi być większe lub równe :value znaków.',
        'array' => ':attribute musi mieć elementy :value lub więcej.',
    ],
    'image' => ':attribute musi być obrazem.',
    'in' => 'Wybrany :attribute jest nieprawidłowy.',
    'in_array' => 'Pole :attribute nie istnieje w :other.',
    'integer' => ':attribute musi być liczbą całkowitą.',
    'ip' => ':attribute musi być prawidłowym adresem IP.',
    'ipv4' => ':attribute musi być prawidłowym adresem IPv4.',
    'ipv6' => ':attribute musi być prawidłowym adresem IPv6.',
    'json' => ':attribute musi być prawidłowym ciągiem JSON.',
    'to' => [
        'numeric' => ':attribute musi być mniejsze niż :value.',
        'file' => ':attribute musi być mniejszy niż :value kilobajtów.',
        'string' => ':attribute musi mieć mniej niż :value znaków.',
        'array' => ':attribute musi mieć mniej niż :value elementów.',
    ],
    'lte' => [
        'numeric' => ':attribute musi być mniejsze lub równe :value.',
        'file' => ':attribute musi być mniejszy lub równy :value kilobajtów.',
        'string' => ':attribute musi być mniejszy lub równy :value znaków.',
        'array' => ':attribute nie może mieć więcej niż :value elementów.',
    ],
    'mac_address' => ':attribute musi być poprawnym adresem MAC.',
    'maks' => [
        'numeric' => ':attribute nie może być większe niż :max.',
        'file' => ':attribute nie może być większe niż :max kilobajtów.',
        'string' => ':attribute nie może być większe niż :max znaków.',
        'array' => ':attribute nie może zawierać więcej niż :max elementów.',
    ],
    'mimes' => ':attribute musi być plikiem typu: :values.',
    'mimetypes' => ':attribute musi być plikiem typu: :values.',
    'min' => [
        'numeric' => ':attribute musi mieć co najmniej :min.',
        'file' => ':attribute musi mieć co najmniej :min kilobajtów.',
        'string' => ':attribute musi mieć co najmniej :min znaków.',
        'array' => ':attribute musi zawierać co najmniej :min elementów.',
    ],
    'multiple_of' => ':attribute musi być wielokrotnością :value.',
    'not_in' => 'Wybrany :attribute jest nieprawidłowy.',
    'not_regex' => 'Format :attribute jest nieprawidłowy.',
    'numeric' => ':attribute musi być liczbą.',
    'password' => 'Hasło jest nieprawidłowe.',
    'present' => 'Pole :attribute musi być obecne.',
    'prohibited' => 'Pole :attribute jest zabronione.',
    'prohibited_if' => 'Pole :attribute jest zabronione, gdy :other ma wartość :value.',
    'prohibited_unless' => 'Pole :attribute jest zabronione, chyba że :other jest w :values.',
    'prohibits' => 'Pole :attribute zabrania obecności :other.',
    'regex' => 'Format :attribute jest nieprawidłowy.',
    'required' => 'Pole :attribute jest wymagane.',
    'required_array_keys' => 'Pole :attribute musi zawierać wpisy dla: :values.',
    'required_if' => 'Pole :attribute jest wymagane, gdy :other ma wartość :value.',
    'required_unless' => 'Pole :attribute jest wymagane, chyba że :other jest w :values.',
    'required_with' => 'Pole :attribute jest wymagane, gdy :values ​​jest obecne.',
    'required_with_all' => 'Pole :attribute jest wymagane, gdy :values ​​są obecne.',
    'required_without' => 'Pole :attribute jest wymagane, gdy nie ma :values.',
    'required_without_all' => 'Pole :attribute jest wymagane, gdy nie ma żadnej z :values.',
    'same' => ':attribute i :other muszą się zgadzać.',
    'rozmiar' => [
        'numeric' => ':attribute musi mieć :size.',
        'file' => ':attribute musi mieć :size kilobajtów.',
        'string' => ':attribute musi mieć :size znaków.',
        'array' => ':attribute musi zawierać elementy :size.',
    ],
    'starts_with' => ':attribute musi zaczynać się jednym z następujących: :values.',
    'string' => ':attribute musi być ciągiem.',
    'timezone' => ':attribute musi być prawidłową strefą czasową.',
    'unique' => ':attribute został już zajęty.',
    'uploaded' => ':attribute nie został przesłany.',
    'url' => ':attribute musi być poprawnym adresem URL.',
    'uuid' => ':attribute musi być prawidłowym UUID.',

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
