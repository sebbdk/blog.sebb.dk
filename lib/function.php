<?php
/**
 * @Author: sebb
 * @Date:   2015-01-14 01:29:20
 * @Last Modified by:   sebb
 * @Last Modified time: 2015-01-14 02:59:55
 */

function baseUrl() {
	$protocol  = isset($_SERVER['HTTPS']) ? 'https://' : 'http://';
	return '/' . basename(getcwd()) . '/';
}

function getDocuments() {
	$files = scandir('documents/');
	$names = [];
	foreach($files as $file) {
		if(!in_array($file, ['..', '.'])) {
			$names[] = [
				'name' => '',
				'content' => str_replace('.md', '', $file)
			];
		}
	}
	return $names;
}

function getDocument() {
	$name = str_replace(baseUrl(), '', $_SERVER['REQUEST_URI']);
	$content = file_get_contents('documents/' . $name . '.md');
	return $content;
}

function getName() {
	$name = str_replace(baseUrl(), '', $_SERVER['REQUEST_URI']);
	return str_replace('_', ' ', $name);
}