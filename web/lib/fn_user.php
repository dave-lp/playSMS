<?php
if(!(defined('_SECURE_'))){die('Intruder alert');};

function uid2username($uid) {
    if ($uid) {
	$db_query = "SELECT username FROM "._DB_PREF_."_tblUser WHERE uid='$uid'";
	$db_result = dba_query($db_query);
	$db_row = dba_fetch_array($db_result);
	$username = $db_row['username'];
    }
    return $username;
}

function username2uid($username) {
    if ($username) {
	$db_query = "SELECT uid FROM "._DB_PREF_."_tblUser WHERE username='$username'";
	$db_result = dba_query($db_query);
	$db_row = dba_fetch_array($db_result);
	$uid = $db_row['uid'];
    }
    return $uid;
}

function username2mobile($username) {
    if ($username) {
	$db_query = "SELECT mobile FROM "._DB_PREF_."_tblUser WHERE username='$username'";
	$db_result = dba_query($db_query);
	$db_row = dba_fetch_array($db_result);
	$mobile = $db_row['mobile'];
    }
    return $mobile;
}

function username2sender($username) {
    if ($username) {
	$db_query = "SELECT sender FROM "._DB_PREF_."_tblUser WHERE username='$username'";
	$db_result = dba_query($db_query);
	$db_row = dba_fetch_array($db_result);
	$sender = $db_row['sender'];
    }
    return $sender;
}

function username2timezone($username) {
    if ($username) {
	$db_query = "SELECT datetime_timezone FROM "._DB_PREF_."_tblUser WHERE username='$username'";
	$db_result = dba_query($db_query);
	$db_row = dba_fetch_array($db_result);
	$tz = $db_row['datetime_timezone'];
    }
    return $tz;
}

function username2email($username) {
    if ($username) {
	$db_query = "SELECT email FROM "._DB_PREF_."_tblUser WHERE username='$username'";
	$db_result = dba_query($db_query);
	$db_row = dba_fetch_array($db_result);
	$email = $db_row['email'];
    }
    return $email;
}

function username2name($username) {
    if ($username) {
	$db_query = "SELECT name FROM "._DB_PREF_."_tblUser WHERE username='$username'";
	$db_result = dba_query($db_query);
	$db_row = dba_fetch_array($db_result);
	$name = $db_row['name'];
    }
    return $name;
}

function username2status($username) {
    if ($username) {
	$db_query = "SELECT status FROM "._DB_PREF_."_tblUser WHERE username='$username'";
	$db_result = dba_query($db_query);
	$db_row = dba_fetch_array($db_result);
	$status = $db_row['status'];
    }
    return $status;
}

function mobile2uid($mobile) {
    if ($mobile) {
	// remove +
	$mobile = str_replace('+','',$mobile);
	// remove first 3 digits if phone number length more than 7
	if (strlen($mobile) > 7) { $mobile = substr($mobile,3); }
	$db_query = "SELECT uid FROM "._DB_PREF_."_tblUser WHERE mobile LIKE '%$mobile'";
	$db_result = dba_query($db_query);
	$db_row = dba_fetch_array($db_result);
	$uid = $db_row['uid'];
    }
    return $uid;
}

?>