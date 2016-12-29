<?php

if ( ! defined( 'ABSPATH' ) ) {
	header( 'Location: /' );
	die();
}

//
//	Conditionals
//

function memb_getLoggedIn() {
	global $membershipsystem;
	return $membershipsystem->getLoggedIn();
}

function memb_hasAllTags( $tags, $contact_id = false ) {
	global $membershipcore;
	return $membershipcore->hasAllTags( $tags, $contact_id );
}

function memb_hasAnyTags( $tags, $contact_id = false ){
	global $membershipcore;
	return $membershipcore->hasAnyTags( $tags, $contact_id );
}

function memb_hasAnyMembership() {
	global $membershipsystem;
	return $membershipsystem->hasAnyMembership();
}

function memb_hasMembership( $level ) {
	global $membershipsystem;
	return $membershipsystem->hasMembership( $level );
}

function memb_hasMembershipLevel( $level ) {
	global $membershipsystem;
	return $membershipsystem->hasMembershipLevel( $level );
}

function memb_hasPostAccess( $post_id ) {
	global $membershipsystem;
	return $membershipsystem->hasPostAccess( $post_id );
}

function memb_is_loggedin() {
	global $membershipsystem;
	return $membershipsystem->getLoggedIn();
}

//
//	Custom Field Functions
//

function memb_getUserField( $field_name, $user_id = FALSE ) {
	global $membershipsystem;
	return $membershipsystem->getUserField( $field_name, $user_id = FALSE );
}

function memb_setUserField( $field_name, $value, $user_id = FALSE ) {
	global $membershipsystem;
	return $membershipsystem->setUserField( $field_name, $value, $user_id = FALSE );
}

//
//	Controls
//

function memb_overrideProhibitedAction( $action ) {
	global $membershipsystem;
	return $membershipsystem->setProhibitedAction( $action );
}

//
//	Contact Functions
//

function memb_getAffiliateField( $fieldname = '', $sanitize = FALSE ) {
	global $membershipsystem;
	return $membershipsystem->getAffiliateField( $fieldname, $sanitize );
}

function memb_getContactField( $fieldname = '', $sanitize = FALSE ) {
	global $membershipsystem;
	return $membershipsystem->getContactField( $fieldname, $sanitize );
}

function memb_getContactId() {
	global $membershipsystem;
	return $membershipsystem->getContactId();
}

function memb_syncContact( $contact_id = 0, $cascade = FALSE ) {
	global $membershipcore;
	return $membershipcore->syncContact( $contact_id, $cascade );
}


/**
 * [memb_setTags description]
 * @param  mixed $tags Takes an array, or a CSV string.
 * @return none
 *
 * Pass in a positve number to add the tag, pass in a
 */
function memb_setTags( $tags = '', $force = FALSE ) {
	global $membershipcore;
	return $membershipcore->setTags( $tags, $force );
}

//
// 3rd Party Plugin Integration
//

function memb_setSSOMode( $mode = TRUE ) {
	global $membershipcore;
	return $membershipcore->setSSOMode( (boolean) $mode );
}

function memb_getAppName() {
	global $i2sdk;
	return $i2sdk->isdk->getAppName();
}
