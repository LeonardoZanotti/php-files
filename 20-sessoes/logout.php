<?php
session_start();
session_unset();    // limpa todas as sessões salvas
session_destroy();  // destrói a sessão
?>