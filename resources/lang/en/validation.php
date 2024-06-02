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

    'accepted'             => ' You should accept:attribute.',
    'active_url'           => 'Field :attribute contains an invalid URL.',
    'after'                => ' In the field:attribute should be the date after:date.',
    'after_or_equal'       => ' In the field :attribute must be a date after or equal to :date.',
    'alpha'                => ' Field :attribute can only contain letters.',
    'alpha_dash'           => ' Field :attribute may only contain letters, numbers, a hyphen and an underscore.',
    'alpha_num'            => ' Field :attribute can only contain letters and numbers.',
    'array'                => ' Field :attribute must be an array.',
    'before'               => ' In the field :attribute must be the date before :date.',
    'before_or_equal'      => ' In the field :attribute must be the date before or equal to :date.',
    'between'              => [
        'numeric' => ' Field :attribute must be between :min и :max.',
        'file'    => 'File size in field :attribute must be between :min и :max Килобайт(а).',
        'string'  => 'Number of characters in the field :attribute must be between: min и :max.',
        'array'   => ' Number of elements in the field :attribute must be between :min и :max.',
    ],
    'boolean'              => ' Field :attribute must be of the logical type.',
    'confirmed'            => ' Field :attribute does not match the confirmation.',
    'date'                 => ' Field :attribute is not a date.',
    'date_equals'          => ' Field :attribute must be a date equal to:date.',
    'date_format'          => ' Field :attribute does not fit the format :format.',
    'different'            => ' Field :attribute и :other must differ.',
    'digits'               => ' Length of number field :attribute must be :digits.',
    'digits_between'       => ' Length of number field :attribute must be between :min и :max.',
    'dimensions'           => ' Field :attribute is of unacceptable size image.',
    'distinct'             => ' Field :attribute contains a repeating value .',
    'email'                => ' Field :attribute must be a valid e-mail address.',
    'ends_with'            => ' Field :attribute must end with one of the following values : :values',
    'exists'               => 'Selected value for :attribute incorrect.',
    'file'                 => 'Field :attribute should be a file.',
    'filled'               => 'Field :attribute mandatory for filling in.',
    'gt'                   => [
        'numeric' => 'Field :attribute there should be more :value.',
        'file'    => ' File size in field :attribute must be bigger :value Kilobyte (s).',
        'string'  => 'Number of characters in the field :attribute should be more :value.',
        'array'   => 'Number of items in the field :attribute should be more :value.',
    ],
    'gte'                  => [
        'numeric' => 'Field :attribute must be greater than or equal to :value.',
        'file'    => ' File size in field :attribute must be greater than or equal to :value Kilobyte(s).',
        'string'  => 'Number of characters in the field :attribute must be greater than or equal to :value.',
        'array'   => 'Number of items in the field :attribute must be greater than or equal to :value.',
    ],
    'image'                => 'Field :attribute must be an image .',
    'in'                   => 'Selected value for :attribute wrongly.',
    'in_array'             => 'Field :attribute does not exist in :other.',
    'integer'              => 'Field :attribute must be an integer.',
    'ip'                   => ' Field :attribute must be valid IP-.',
    'ipv4'                 => ' Field  :attribute must be valid IPv4-adress.',
    'ipv6'                 => ' Field :attribute must be valid IPv6-adress.',
    'json'                 => ' Field :attribute Must be JSON line.',
    'lt'                   => [
        'numeric' => ' Field :attribute should be less:value.',
        'file'    => ' File size in field :attribute should be less than :value Kilobyte(s).',
        'string'  => ' Number of characters in the field :attribute should be less:value.',
        'array'   => ' Number of elements in the field :attribute should be less:value.',
    ],
    'lte'                  => [
        'numeric' => 'Field :attribute must be less than or equal to :value.',
        'file'    => ' File size in field :attribute must be less than or equal to :value Kilobyte(s).',
        'string'  => 'Number of characters in the field :attribute must be less than or equal to:value.',
        'array'   => 'Number of elements in the field :attribute must be less than or equal to :value.',
    ],
    'max'                  => [
        'numeric' => ' Field :attribute cannot be more than :max.',
        'file'    => ' File size in field :attribute cannot be more than :max Килобайт(а).',
        'string'  => ' Number of characters in the field:attribute may not exceed:max.',
        'array'   => 'Number of items in the field:attribute may not exceed :max.',
    ],
    'mimes'                => 'Field :attribute must be a file of one of the following types: :values.',
    'mimetypes'            => 'Field :attribute must be a file of one of the following types: :values.',
    'min'                  => [
        'numeric' => ' Field :attribute must be at least :min.',
        'file'    => ' File size in field:attribute must be at least :min Kilobyte(s).',
        'string'  => ' Number of characters in the field:attribute must be at least :min.',
        'array'   => ' Number of elements in the field:attribute must be at least :min.',
    ],
    'not_in'               => ' The selected value for:attribute wrongly.',
    'not_regex'            => ' Selected format for :attribute wrongly.',
    'numeric'              => 'Field :attribute must be a number.',
    'present'              => ' Field :attribute must be present.',
    'regex'                => ' Field :attribute has an incorrect format.',
    'required'             => ' Field :attribute mandatory for filling in.',
    'required_if'          => ' Field :attribute mandatory for filling in, when :other is equal to :value.',
    'required_unless'      => ' Field :attribute mandatory for filling in, when :other does not equal :values.',
    'required_with'        => ' Field :attribute mandatory for filling in, when :values indicated.',
    'required_with_all'    => ' Field :attribute mandatory for filling in, when :values indicated.',
    'required_without'     => ' Field :attribute mandatory for filling in, when :values not specified.',
    'required_without_all' => ' Field :attribute mandatory for filling in, when neither of :values not specified.',
    'same'                 => ' Field values :attribute and :other must coincide.',
    'size'                 => [
        'numeric' => 'Field :attribute must be equal to :size.',
        'file'    => ' File size in field :attribute must be equal to :size Kilobyte(s).',
        'string'  => ' Number of characters in the field :attribute must be equal to :size.',
        'array'   => ' Number of elements in the field :attribute must be equal to :size.',
    ],
    'starts_with'          => 'Field :attribute должно начинаться из одного из следующих значений: :values',
    'string'               => ' Field :attribute должно быть строкой.',
    'timezone'             => ' Field :attribute must be a valid time zone.',
    'unique'               => 'Your Email already signed up for the newsletter',
    'uploaded'             => ' Loading the field:attribute failed.',
    'url'                  => ' Field :attribute has an incorrect format.',
    'uuid'                 => ' Field :attribute must be correct UUID.',

    /*
    |--------------------------------------------------------------------------
    | Proprietary language resources for checking values
    |--------------------------------------------------------------------------
    |
    | Here you can specify your own messages for the attributes.
    | This makes it easy to specify your message for a given attribute rule.
    |
    | http://laravel.com/docs/validation#custom-error-messages
    | Example of use
    |
    |   'custom' => [
    |       'email' => [
    |           'required' => 'We need to know your email address!',
    |       ],
    |   ],
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Own attribute names
    |--------------------------------------------------------------------------
    |
    | Subsequent lines are used to substitute programme element names
    | the user interface to one that is legible. For example, instead of the name
    | The "email" field in the messages will display "email address".
    |
    | Example of use
    |
    |   'attributes' => [
    |       'email' => 'email address',
    |   ],
    |
    */

    'attributes' => [
        'name'                  => 'Name',
        'username'              => 'Username',
        'email'                 => 'E-Mail adress',
        'first_name'            => 'Name',
        'last_name'             => 'Surname',
        'password'              => 'Password',
        'password_confirmation' => 'Password comfirmation',
        'city'                  => 'City',
        'country'               => 'Country',
        'address'               => 'Adress',
        'phone'                 => 'Phone number',
        'mobile'                => 'Mobile number',
        'age'                   => 'Age',
        'sex'                   => 'Sex',
        'gender'                => 'Gender',
        'day'                   => 'Day',
        'month'                 => 'Month',
        'year'                  => 'Year',
        'hour'                  => 'Hour',
        'minute'                => 'Minute',
        'second'                => 'Second',
        'title'                 => ' Title ',
        'content'               => 'Content',
        'description'           => 'Description',
        'excerpt'               => 'Excerpt',
        'date'                  => 'Date',
        'time'                  => 'Time',
        'available'             => 'Available',
        'size'                  => 'Size',
    ],

