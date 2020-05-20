<?php
// Cookies
// Cookie para armazenar o nome Leonardo Zanotti por 1 hora
setcookie('nome', 'Leonardo Zanotti', time()+3600);

// Cookie para armazenar o email leonardojosezanotti@gmail.com por 1 hora
setcookie('email', 'leonardojosezanotti@gmail.com', time()+3600);

// Cookie para armazenar o nome Leonardo Zanotti por 1 hora
setcookie('ultima_pesquisa', 'como ficar invisível', time()+3600);

// Cookie de teste que vai ser apagado
setcookie('teste', 'teste', time()+3600);

// Apaga o cookie de teste, pois seta a duração do cookie como tempo negativo, que se sobrepõe ao
// tempo setado
setcookie('teste', 'teste', time()-3600);

var_dump($_COOKIE);
// Se você for ver os cookies do seu navegador, na url desse curso vai mostrar esses ai de cima
// Depois que você setou eles, vc pode reiniciar o servidor, comentar os setcookies que eles vão
// continuar existindo, pois eles são armazenados no seu pc (nesse caso, por 1h)

// se quiser acessar os dados dos cookies
echo $_COOKIE['nome'];

// Não use cookies para armazenar login e senha visto que estes ficaram armazenados no
// computador do usuário e qualquer um com acesso ao computador poderá ter acesso a esses dados