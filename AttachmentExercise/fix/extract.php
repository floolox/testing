

<?php

	$archive = RarArchive::open('files/cobaPHP.rar');
	$entries = $archive->getEntries();
	foreach ($entries as $entry) {
    	$entry->extract('files/');
	}
	$archive->close();



?>
