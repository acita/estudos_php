<?php

session_start();

$session = session_id();


echo session_save_path();

echo "<br>";

echo $session;

echo "<br>";

switch(session_status())
{
    case PHP_SESSION_DISABLED:
        echo "as sessões estão desabilitadas";
        break;
    case PHP_SESSION_ACTIVE:
        echo "as sessões estão ativas";
        break;
    case PHP_SESSION_NONE:
        echo "sessão habilitada, mas não iniciada";
        break;
}

session_destroy();