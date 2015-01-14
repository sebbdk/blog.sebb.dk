<?php
/**
 * @Author: sebb
 * @Date:   2015-01-14 01:29:20
 * @Last Modified by:   sebb
 * @Last Modified time: 2015-01-14 18:07:27
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
			$slug = str_replace('.md', '', $file);
			$name = str_replace('_', ' ', $slug);
			$names[] = [
				'file' => $file,
				'name' => $name,
				'slug' => $slug
			];
		}
	}

	return $names;
}

function getDocument() {
	$name = str_replace(baseUrl(), '', $_SERVER['REQUEST_URI']);

	if(!empty($name)) {
		$content = file_get_contents('documents/' . $name . '.md');
		return $content;
	} else {
		return "";
	}
}

function getName() {
	$name = str_replace(baseUrl(), '', $_SERVER['REQUEST_URI']);
	return str_replace('_', ' ', $name);
}