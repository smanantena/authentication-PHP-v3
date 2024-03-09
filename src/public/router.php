<?php
if (preg_match('/.*\.(?:gif|png|jpeg|jpg|tiff|mp3|mp4|webm|webp|svg|ico|js|css)/', $_SERVER['REQUEST_URI'])) {
    return false; // only for php dev server
} else {
    require_once 'index.php';
}