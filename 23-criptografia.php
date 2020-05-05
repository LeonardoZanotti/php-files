<?php
$senha = "123456";
$senha_db = '$2y$10$uKRBiK2viUPbrGXw8VaWz.Nfx29GbmMrwXd8MNXfa2mzjYed26DhO'; // um dos hashs gerados

if(password_verify($senha, $senha_db)) {    // verificando as senhas
    echo "Senha válida <br>";
}
else {
    echo "Senha inválida <br>";
}

$options = [
    'cost' => 10,    // 10 é o padrão; quanto maior o cost mais seguro o hash mas mais hardware é usado
];

$senhaSegura = password_hash($senha, PASSWORD_DEFAULT, $options);

echo $senhaSegura;

// os caracteres da criptografia variam a cada vez que se atualiza a página
// criptografia do próprio php
// na documentação diz que o algoritmo que o php usa é o bcrypt
// esse algoritmo usa 60 caracteres que variam
?>