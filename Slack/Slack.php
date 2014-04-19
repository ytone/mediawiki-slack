<?php
/**
 * Mediawiki Slack integration extension.
 * @version 0.1.0
 *
 * Copyright (C) 2014 George Goldberg <george@grundleborg.com>
 * @author George Goldberg <george@grundleborg.com>
 *
 * @license MIT
 *
 * @file The main file of the Mediawiki Slack integration extension.
 *       For more information on Slack, see http://www.slack.com.
 * @ingroup Extensions
 */

// Credits
$wgExtensionCredits['other'][] = array(
	'path' => __FILE__,
	'name' => 'Slack',
	'author' => array(
		'George Goldberg'
	),
	'version'  => '0.1.0',
	'url' => 'https://github.com/grundleborg/mediawiki-slack',
  'descriptionmsg' => 'Slack Integration for Media Wiki.',
);

// Init base-directories.
$dir = dirname( __FILE__ );
$dirbasename = basename( $dir );

// Register files
$wgAutoloadClasses['SlackHooks'] = $dir . '/Slack.hooks.php';

// Register hooks
$wgHooks['PageContentSaveComplete'][] = 'SlackHooks::onPageContentSaveComplete';

// Configuration Defaults
// These should be overridden in LocalSettings.php
// See README.md for an example.
/*
 * The full Web Hook URL given when you add your wiki as a slack integration,
 * including the token.
 */
$wgSlackWebhookUrl = "http://www.example.com";

/*
 * The channel in which the integration should report all changes.
 */
$wgSlackChannel = "#random";

/*
 * The username of the integration bot that will appear in Slack.
 */
$wgSlackUserName = "wikibot";