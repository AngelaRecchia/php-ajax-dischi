<?php
include_once __DIR__ . '/../db/albums.php';

header('Content-Type: application/json');
echo json_encode($albums);
?>