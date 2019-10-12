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

    'accepted' => ':attribute は「許可」でなくてはなりません',
    'active_url' => ':attribute は有効なURLではありません',
    'after' => ':attribute は :date より後の日付にしてください',
    'after_or_equal' => ':attribute は :date 以降の日付にしてください',
    'alpha' => ':attribute にはアルファベットしか入力できません',
    'alpha_dash' => ':attribute には英数字、ハイフン、アンダースコアしか入力できません',
    'alpha_num' => ':attribute には英数字しか入力できません',
    'array' => ':attribute は配列で入力してください',
    'before' => ':attribute は :date より前の日付にしてください',
    'before_or_equal' => ':attribute は :date 以前の日付にしてください',
    'between' => [
        'numeric' => ':attribute は :min から :max の間の値にしてください',
        'file' => ':attribute は :min から :max kbの間のサイズにしてください',
        'string' => ':attribute は :min から :max の間の文字にしてください',
        'array' => ':attribute は :min から :max の間の項目にしてください',
    ],
    'boolean' => ':attribute は true か false を入力してください',
    'confirmed' => ':attribute が一致していません',
    'date' => ':attribute は日付ではありません',
    'date_equals' => ':attribute は :date と等しくありません',
    'date_format' => ':attribute の形式が :format と異なります',
    'different' => ':attribute は :other と異なります',
    'digits' => ':attribute は :digits 桁の数字ではありません',
    'digits_between' => ':attribute は :min から :max までの数字ではありません',
    'dimensions' => ':attribute のファイルサイズが正しくありません',
    'distinct' => ' :attribute の値が重複しています',
    'email' => ':attribute は不正なメールアドレスです',
    'ends_with' => ':attribute は :values で終わっていません',
    'exists' => ':attribute は存在しません',
    'file' => ':attribute はファイルでありません',
    'filled' => ':attribute は入力必須です',
    'gt' => [
        'numeric' => ':attribute は :value より大きくなくてはなりません',
        'file' => ' :attribute は :value KBより大きくなくてはなりません',
        'string' => ':attribute は :value より大きくなくてはなりません',
        'array' => ':attribute は :value より大きくなくてはなりません',
    ],
    'gte' => [
        'numeric' => ':attribute は :value 以上でなくてはなりません',
        'file' => ':attribute は :value KB以上でなくてはなりません',
        'string' => ':attribute は :value 以上でなくてはなりません',
        'array' => ':attribute は :value 以上でなくてはなりません',
    ],
    'image' => ':attribute は画像ファイルではありません',
    'in' => ':attribute は含まれていません',
    'in_array' => ':attribute は :other に含まれていません',
    'integer' => ':attribute は整数でなくてはなりません',
    'ip' => ':attribute はIPアドレスの形式ではありません',
    'ipv4' => ':attribute は IPv4のアドレス形式ではありません',
    'ipv6' => ':attribute は IPv6のアドレス形式ではありません',
    'json' => ':attribute はJSON形式ではありません',
    'lt' => [
        'numeric' => ':attribute は :value より小さくなくてはなりません',
        'file' => ':attribute は :value KBより小さくなくてはなりません',
        'string' => ':attribute は :value より小さくなくてはなりません',
        'array' => ':attribute は :value より小さくなくてはなりません',
    ],
    'lte' => [
        'numeric' => ':attribute は :value 以下でなくてはなりません',
        'file' => ':attribute は :value KB以下でなくてはなりません',
        'string' => ':attribute は :value 以下でなくてはなりません',
        'array' => ':attribute は :value 以下でなくてはなりません',
    ],
    'max' => [
        'numeric' => ':attribute は :max 以下でなくてはなりません',
        'file' => ':attribute は :max KB以下でなくてはなりません',
        'string' => ':attribute は :max 以下でなくてはなりません',
        'array' => ':attribute は :max 以下でなくてはなりません',
    ],
    'mimes' => ':attribute の拡張子が :values ではありません',
    'mimetypes' => ':attribute のファイルタイプが :values ではありません',
    'min' => [
        'numeric' => ':attribute は :min 以上でなくてはなりません',
        'file' => ':attribute は :min KB以上でなくてはなりません',
        'string' => ':attribute は :min 以上でなくてはなりません',
        'array' => ':attribute は :min 以上でなくてはなりません',
    ],
    'not_in' => ':attribute は含まれています',
    'not_regex' => ':attribute のフォーマットが異なっています',
    'numeric' => ':attribute は数値でありません',
    'present' => ':attribute フィールドが存在しません',
    'regex' => ':attribute のフォーマットが異なっています',
    'required' => ':attribute が空です',
    'required_if' => ':other が :value と等しいのに :attribute が空です',
    'required_unless' => ':other が :values に含まれないのに :attribute が空です',
    'required_with' => ':values が存在しているのに :attribute が空です',
    'required_with_all' => ':values がすべて存在しているのに :attribute が空です',
    'required_without' => ':values が存在していないのに :attribute が空です',
    'required_without_all' => ':values がすべて存在していないのに :attribute が空です',
    'same' => ':attribute が :other と等しくありません',
    'size' => [
        'numeric' => ':attribute が :size ではありません',
        'file' => ':attribute が :size KB ではありません',
        'string' => ':attribute が :size  文字ではありません',
        'array' => ':attribute が :size ではありません',
    ],
    'starts_with' => ':attribute が :values で始まっていません',
    'string' => ':attribute が文字ではありません',
    'timezone' => ':attribute がタイムゾーンではありません',
    'unique' => ':attribute は既に存在しています',
    'uploaded' => ':attribute はアップロードされていません',
    'url' => ':attribute はurlではありません',
    'uuid' => ':attribute はUUIDではありません',

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
        'admin_code' => '管理者コード',
        'name' => '氏名',
        'role' => '権限',
        'password' => 'パスワード',
    ],

];
