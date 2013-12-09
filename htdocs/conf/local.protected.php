<?php

# $conf['title']       = 'DokuWiki';
$conf['savedir']     = './content';

$conf['updatecheck'] = 0;

$conf['useacl']      = 1;
$conf['autopasswd']  = 0;

$conf['superuser']   = 'user';

$conf['userewrite']  = 1;
$conf['useslash']    = 1;
$conf['gzip_output'] = 1;

session_start();
if ((isset($_SESSION['run'])) && ($_SESSION['run'] == 'backend')) {
	// we run the backend
	$conf['disableactions'] = 'register,resendpwd';
} else {
	// $conf['useacl']      = 0;
	$conf['disableactions'] = 'recent,login,register,resendpwd,recent,media,edit,revisions,backlink,profile,admin,index,search';
}
