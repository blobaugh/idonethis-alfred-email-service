<?php

$secret = 'SERVER SECRET KEY';

if( $_POST['secret'] != $secret )
	die( 'No cheating' );


// Whis done list?
$to = $_POST['to_addr'];

$from_name = $_POST['from_name'];

$from_addr = $_POST['from_addr'];

$headers = "From: $from_name <$from_addr>";


if( !empty( $_POST['done'] ) )
	mail( $to, 'New Done', $_POST['done'], $headers );
