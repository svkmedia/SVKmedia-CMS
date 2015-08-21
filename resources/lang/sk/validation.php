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

	"accepted"             => "Pole :attribute musí byť akceptované.",
	"active_url"           => "Pole :attribute nie je korektná URL adresa",
	"after"                => "Pole :attribute musí byť dátum väčší ako :date.",
	"alpha"                => "Pole :attribute môže obsahovať iba písmená.",
	"alpha_dash"           => "Pole :attribute môže obsahovať iba písmená, čísla a bodky.",
	"alpha_num"            => "Pole :attribute môže obsahovať iba písmená a čísla.",
	"array"                => "Pole :attribute musí byť Array",
	"before"               => "Pole :attribute musí byť dátum menší ako :date.",
	"between"              => [
		"numeric" => "Hodnota pola :attribute musí byť medzi :min - :max.",
		"file"    => "Hodnota pola :attribute musí byť medzi :min - :max kilobajtami.",
		"string"  => "Dĺžka pola :attribute musí byť medzi :min - :max znakmi.",
		"array"   => "Pole :attribute musí mať :min - :max položiek.",
	],
	"boolean"              => "Pole :attribute musí byť True alebo False.",
	"confirmed"            => "Pole :attribute sa nezhoduje.",
	"date"                 => "Pole :attribute nie je korektný dátum.",
	"date_format"          => "Pole :attribute nie je v požadovanom formáte :format.",
	"different"            => "Polia :attribute a :other musia byť odlišné.",
	"digits"               => "Pole :attribute musí mať :digits čísiel.",
	"digits_between"       => "Pole :attribute musí mať :min - :max čísiel.",
	"email"                => "Pole :attribute musí byť korektná emailová adresa.",
	"filled"               => "Pole :attribute je požadované.",
	"exists"               => "Vybraná možnosť :attribute je chybná.",
	"image"                => ":attribute musí byť obrázok.",
	"in"                   => ":attribute je chybný.",
	"integer"              => ":attribute musí byť číslo.",
	"ip"                   => ":attribute musí byť korektná IP adresa.",
	"max"                  => [
		"numeric" => ":attribute nemôže byť väčšie ako :max.",
		"file"    => ":attribute nemôže byť väčší ako :max kilobajtov.",
		"string"  => ":attribute nemôže mať viac ako :max znakov.",
		"array"   => ":attribute nemôže mať viac ako :max položiek.",
	],
	"mimes"                => ":attribute musí byť vo formáte: :values.",
	"min"                  => [
		"numeric" => ":attribute musí mať minimálne :min.",
		"file"    => ":attribute musí mať minimálne :min kilobajtov.",
		"string"  => ":attribute musí mať minimálne :min znakov.",
		"array"   => ":attribute musí mať minimálne :min položiek.",
	],
	"not_in"               => "Vybraná možnosť :attribute je chybná.",
	"numeric"              => ":attribute musí byť číslo.",
	"regex"                => ":attribute má nesprávny formát.",
	"required"             => "Musíte zadať :attribute.",
	"required_if"          => "Musíte zadať :attribute ak :other je :value.",
	"required_with"        => "Musíte zadať :attribute ak :values existuje.",
	"required_with_all"    => "Musíte zadať :attribute ak :values existujú",
	"required_without"     => "Musíte zadať :attribute ak :values neexistujú",
	"required_without_all" => "Musíte zadať :attribute ak neexistuje žiadna hodnota :values.",
	"same"                 => ":attribute a :other sa musia zhodovať.",
	"size"                 => [
		"numeric" => ":attribute musí mať :size.",
		"file"    => ":attribute musí mať :size kilobajtov.",
		"string"  => ":attribute musí mať :size znakov.",
		"array"   => ":attribute musí obsahovať :size položiek.",
	],
	"unique"               => "Tento :attribute sa už používa.",
	"url"                  => ":attribute má chybný formát.",
	"timezone"             => ":attribute musí byť korektná časová zóna.",

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
