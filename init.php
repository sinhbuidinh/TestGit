<?php

const FIRST_STEP  = 'create_develop_from_master';
const SECOND_STEP = 'create_feature/BR-001_from_develop';
const THIRD_STEP  = 'create_init_php';

$tutorial = [
    FIRST_STEP,
    SECOND_STEP,
    THIRD_STEP,
];

if ($tutorial[$_REQUEST['view']] === FIRST_STEP) {
    echo "First step";
    exit;
} else {
    var_dump($tutorial);
    exit;
}
