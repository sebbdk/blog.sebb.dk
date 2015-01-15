<?php
/**
 * @Author: sebb
 * @Date:   2015-01-14 01:29:20
 * @Last Modified by:   sebb
 * @Last Modified time: 2015-01-15 11:11:03
 */

function baseUrl() {
	$protocol  = isset($_SERVER['HTTPS']) ? 'https://' : 'http://';
	//return $protocol . $_SERVER['HTTP_HOST'] . '/' . basename(getcwd()) . '/';
	return dirname($_SERVER['PHP_SELF']) . '/';
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
	$name = str_replace(basename(getcwd()), '', $_SERVER['REQUEST_URI']);
	$name = str_replace('/', '', $name);

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