<?php

var_dump(is_int(3030)); // true
var_dump(is_int('3030')); // false

var_dump(is_float(3.14)); // true
var_dump(is_float('3.14')); // false

var_dump(is_numeric(1)); // true
var_dump(is_numeric('1.2e3')); // true
var_dump(is_numeric('80')); // true
var_dump(is_numeric(1.2e3)); // true

var_dump(is_string('php')); // true
var_dump(is_bool(true)); // true

var_dump(is_scalar('treinaweb')); // true
var_dump(is_scalar(['php', 'java', 'scala'])); // false

var_dump(gettype('python'));