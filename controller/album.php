<?php

require_once '../view/viewHeader.php';
require_once '../view/viewAlbum.php';

function renderAlbumPage()
{
    $header = renderHeader();
    $content = renderAlbum();

    echo $header . $content;
}

renderAlbumPage();
?>