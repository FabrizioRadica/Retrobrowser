<?php
// ******************** Query al Database

//Query render homepage: Thumbnails, titolo, descrizione.
//Step2
$query = "SELECT p1.*, wm2.meta_value FROM kefni_posts p1 LEFT JOIN kefni_postmeta wm1 ON (wm1.post_id = p1.id AND wm1.meta_value IS NOT NULL AND wm1.meta_key = '_thumbnail_id' ) LEFT JOIN kefni_postmeta wm2 ON (wm1.meta_value = wm2.post_id AND wm2.meta_key = '_wp_attached_file' AND wm2.meta_value IS NOT NULL) WHERE p1.post_status='publish' AND p1.post_type='post' ORDER BY p1.post_date DESC limit 10";

?>