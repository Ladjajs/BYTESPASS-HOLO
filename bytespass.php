<?php
// LINK DA SUA KEY ONLINE
$url_key = "https://raw.githubusercontent.com/Ladjajs/KEY/refs/heads/main/key.txt";

function titulo() {
    system("clear");
    echo "\e[1;36m╔══════════════════════════════════════╗\e[0m\n";
    echo "\e[1;36m║\e[1;37m          BYTESPASS SS HOLO           \e[1;36m║\e[0m\n";
    echo "\e[1;36m╚══════════════════════════════════════╝\e[0m\n\n";
}

// 1. Verificação de Key Online com Loop de Tentativas
while (true) {
    titulo();
    echo "\e[1;34m[*]\e[1;37m Verificando sistema de chaves...\e[0m\n";

    // Busca a key e remove qualquer espaço ou quebra de linha invisível
    $key_servidor = @file_get_contents($url_key);
    $key_servidor = trim($key_servidor);

    if (empty($key_servidor)) {
        echo "\e[1;31m[!] Erro ao conectar ao servidor de chaves.\e[0m\n";
        echo "Verifique sua internet e tente novamente em 5 segundos...\n";
        sleep(5);
        continue;
    }

    echo "\e[1;37mDigite sua KEY: \e[0m";
    $key_usuario = trim(fgets(STDIN));

    if ($key_usuario === $key_servidor) {
        echo "\n\e[1;32m[+] Acesso Autorizado! Iniciando...\e[0m\n";
        sleep(1);
        break; // Sai do loop da key e vai para o menu
    } else {
        echo "\n\e[1;31m[!] KEY INCORRETA! Tente novamente.\e[0m\n";
        sleep(2);
        // O loop continua e pede a key de novo
    }
}

// 2. Lógica do Bypass
$base = "/storage/emulated/0/Android/data/com.dts.freefiremax/";

while (true) {
    titulo();
    echo " \e[1;36m[1]\e[1;37m Bypass SS\e[0m\n";
    echo " \e[1;36m[2]\e[1;37m Sair\e[0m\n\n";
    echo "\e[1;37mEscolha: \e[0m";
    $op = trim(fgets(STDIN));

    if ($op == "1") {
        titulo();
        echo "\e[1;34m[*]\e[1;37m Executando Bypass...\e[0m\n";
        system("adb shell \"mv $base/files $base/temp && mv $base/fileslimpa $base/files && mv $base/temp $base/fileslimpa\"");
        echo "\n\e[1;32m✓ Concluido!\e[0m\n";
        echo "\nPressione ENTER para voltar";
        fgets(STDIN);
    } elseif ($op == "2") {
        exit(0);
    }
}
?>
