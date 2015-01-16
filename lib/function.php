<?php
/**
 * @Author: sebb
 * @Date:   2015-01-14 01:29:20
 * @Last Modified by:   sebb
 * @Last Modified time: 2015-01-16 14:06:25
 */

function baseUrl() {
	$baseUrl = dirname($_SERVER['PHP_SELF']);
	return $baseUrl === "/" ? "":$baseUrl;
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
		$allLines = explode("\n", $content);

		$meta = [];
		$text = "";
		foreach ($allLines as $line) {
		    if (strpos($line, 'meta') !== FALSE) {
		    	$p = explode(':', $line);
		    	$meta[$p[1]] = $p[2];
		         continue;
		    }

		    $text .= $line . "\n";
		};

		return ['text' => $text, 'meta' => $meta];
	} else {
		return false;
	}
}

function getName() {
	$name = str_replace(baseUrl(), '', $_SERVER['REQUEST_URI']);
	$name = str_replace('/', '', $name);
	return str_replace('_', ' ', $name);
}