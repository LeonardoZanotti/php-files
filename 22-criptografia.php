<?php
// base64   -> dá pra criptografar e descriptografar
echo "<hr>";

$senha = "123456";

$novaSenha = base64_encode($senha);
echo "base 64: " .$novaSenha. "<br>";
echo "senha: " .base64_decode($novaSenha). "<br>";

echo "<hr>";

// MD5 -> apenas criptografa
echo "MD5: " .MD5($senha). "<br>";

// Sha1 -> apenas criptografa
echo "Sha1: " .sha1($senha). "<br>"; 

// criptografias que apenas criptografam são chamadas criptografias de mão única
// criptografias de mão única funcionam por exemplo pra criptografar senha de banco:
// uma senha de banco registrada no banco de dados é criptografada, daí quando alguem for tentar acessar
// a conta ele criptografa a senha que o usuário digitou na hora e compara com a que tá registrada
// na aula 21 de sistema de login a gente usou md5 e esse método ae de senha de banco
// ainda sim essas criptografias são fáceis de quebrar, o site crackstation por exemplo quebra isso
// eles tem um banco de dados gigante com várias possibilidades de senha em várias criptografias
?>