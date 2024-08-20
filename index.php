<?php
function gerarSenha($tamanho = 12) {
    
    $caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+[]{}|;:,.<>?';
    
   
    $senha = '';
    $caracteresLength = strlen($caracteres);

  
    for ($i = 0; $i < $tamanho; $i++) {
        $senha .= $caracteres[rand(0, $caracteresLength - 1)];
    }

    return $senha;
}

echo gerarSenha(); 
echo gerarSenha(16); 
?>
