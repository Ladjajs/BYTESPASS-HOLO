<?php
// BYTESPASS SS HOLO - Versão PHP para Proteção de Source

$base = "/storage/emulated/0/Android/data/com.dts.freefiremax/";

function titulo() {
    system("clear");
    echo "╔══════════════════════════════════════╗\n";
    echo "║          BYTESPASS SS HOLO           ║\n";
    echo "╚══════════════════════════════════════╝\n\n";
}

// 1. Verificação de Dependências (Silenciosa)
if (shell_exec("command -v adb") == "") {
    titulo();
    echo "Instalando dependências...\n";
    system("pkg update -y && pkg install android-tools -y");
}

// 2. Armazenamento
if (!is_dir(getenv("HOME") . "/storage")) {
    system("termux-setup-storage");
}

// 3. Conexão ADB
if (trim(shell_exec("adb get-state 2>&1")) != "device") {
    titulo();
    echo "Aguardando Conexão ADB...\n";
    echo "Conecte o Wireless Debugging para continuar.\n";
    while (trim(shell_exec("adb get-state 2>&1")) != "device") {
        echo ".";
        sleep(2);
    }
}

// 4. Menu Principal
while (true) {
    titulo();
    echo "1) Bypass SS\n";
    echo "2) Sair\n\n";
    echo "Escolha uma opção: ";
    $op = trim(fgets(STDIN));

    if ($op == "1") {
        titulo();
        echo "Executando Bypass SS...\n";
        
        // Verifica pastas via ADB
        $check = shell_exec("adb shell \"test -d $base/files && test -d $base/fileslimpa && echo 'OK'\"");
        
        if (trim($check) == "OK") {
            system("adb shell \"mv $base/files $base/temp\"");
            system("adb shell \"mv $base/fileslimpa $base/files\"");
            system("adb shell \"mv $base/temp $base/fileslimpa\"");
            echo "\n✓ Concluído com sucesso!\n";
        } else {
            echo "\n✗ Erro: Pastas não encontradas.\n";
        }
        echo "\nAperte ENTER para voltar";
        fgets(STDIN);
    } 
    elseif ($op == "2") {
        system("clear");
        echo "Script encerrado.\n";
        exit;
    }
}
?>
