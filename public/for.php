<?php   
        require 'inicio.php';
        $idade = 20;
        $ano_atual = 2024;
        $idade_daqui_cinco_anos = $idade + 5;
        $ano_nascimento = $ano_atual - $idade;
?>

<?php   echo $idade_daqui_cinco_anos;
        echo '<br>';
        echo $ano_nascimento;

        $nome = " Jose Weslley ";
        $mensagem = 'Seja bem-vindo ';
        $mensagem_final = "$mensagem, $nome";
        echo '<br>';
        echo $mensagem_final;
        echo '<br>';

        if ($idade >= 18) {
            echo 'Você e maior de idade';
        } else if ($idade >= 16) {
            echo 'Você é Menor de idade, mais pode votar';
        } else {
            echo 'Você é menor de idade e não pode votar';
        }

        $status = 0;

        if($status ==0){
            echo ' Aguardando Confirmação';
        }elseif($status == 1){
            echo 'Sendo preparado';
        }elseif($status == 2){
            echo 'A caminho';
        }elseif($status == 3){
            echo 'Entregue';
        }else{
            echo 'Desconhecido';
        }

        switch($status){
            case 0:
                echo ' Aguardando Confirmação';
                break;
                case 1:
                    echo 'Sendo preparado';
                    break;
                    case 2:
                        echo 'a caminho';
                        break;
                        case 3:
                            echo 'Entregue';
                            break;
                            default:
                            echo 'Desconhecido';
                            break;
        }

        $ano = 1989;
        while ($ano <= 2024) {
            $idade = $ano - 1989;
            echo "Sua idade era $idade em $ano <br>";
            $ano++;
        }

        for ($ano = 1989; $ano <= 2024; $ano++) {
            $idade = $ano - 1898;
            echo "Sua idade era $idade em $ano <br>";
        }

        require 'fim.php';
?>