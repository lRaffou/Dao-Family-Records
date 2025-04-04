<?php
// Suppression de session_start() car nous n'avons plus besoin de gérer les sessions

include './view/viewHeader.php';
include './view/viewAcceuil.php';
include './view/viewFooter.php';

echo renderHeader();
echo renderAcceuil();
echo renderFooter();
