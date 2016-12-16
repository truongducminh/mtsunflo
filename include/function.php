<?php

function getValue($k, $default="")
{
	if (isset($_GET[$k])) return $_GET[$k];
	return $default;
}

function postValue($k, $default="")
{
	if (isset($_POST[$k])) return $_POST[$k];
	return $default;
}
