<?php
// LINK DA SUA KEY ONLINE
$url_key = "https://raw.githubusercontent.com/Ladjajs/KEY/refs/heads/main/key.txt";

function titulo() {
    system("clear");
    echo "\e[1;36m╔══════════════════════════════════════╗\e[0m\n";
    echo "\e[1;36m║\e[1;37m          BYTESPASS SS HOLO           \e[1;36m║\e[0m\n";
    echo "\e[1;36m╚══════════════════════════════════════╝\e[0m\n\n";
}

// 1. Verificação de Key Online com Loop
while (true) {
    titulo();
    echo "\e[1;34m[*]\e[1;37m Verificando sistema de chaves...\e[0m\n";

    $key_servidor = @file_get_contents($url_key);
    $key_servidor = trim($key_servidor);

    if (empty($key_servidor)) {
        echo "\e[1;31m[!] Erro de conexão. Tentando novamente...\e[0m\n";
        sleep(3);
        continue;
    }

    echo "\e[1;37mDigite sua KEY: \e[0m";
    $key_usuario = trim(fgets(STDIN));

    if ($key_usuario === $key_servidor) {
        echo "\n\e[1;32m[+] Acesso Autorizado!\e[0m\n";
        sleep(1);
        break;
    } else {
        echo "\n\e[1;31m[!] KEY INCORRETA!\e[0m\n";
        sleep(2);
    }
}

// 2. Lógica do Menu
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
        titulo();
        echo "\e[1;36mEncerrando BYTESPASS SS HOLO...\e[0m\n";
        sleep(1);
        
        // Altera o diretório para a pasta Download antes de fechar
        // Nota: No Termux/Android, o caminho padrão geralmente é /storage/emulated/0/Download
        passthru("cd /storage/emulated/0/Download && clear");
        
        exit(0);
    }
}
?>
