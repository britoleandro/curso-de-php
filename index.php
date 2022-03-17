<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>
<body>
    
<section>
            <div>
                <a href="../../index.php">
                    <button>3 formas</button>
                </a> 

                <button onclick="window.location.href='../../index.php'">de fazer</button>

                <a href="../../index.php">
                    <input type="button" value="o mesmo">
                </a>

                <form method="post" action="../../index.php">
                    <button type="submit">botão</button>
                </form>
                
            </div>
            <hr>
            <div>
                <h2>Primeira aula PHP</h2>
                <?php 
                    echo "<h3> Olá, <br/> Mundo </h3>";
                ?>
                <p>HTML para conteudo, CSS para estilo, JS para interatividade e PHP para funcionalidades adcionais </p>
            </div>
            <hr>
            <div>
                <h2>Variáveis em PHP - Curso PHP Iniciante #04</h2>
                <?php
                    $idade = (int)30;
                    $sal = 5000.54;
                    $nome = "Leonardo";
                    $casado = false;

                    echo $idade ." T". $sal ." T". $nome ." T". $casado . "</br>";
                    echo "$idade T $sal T $nome T $casado </br>";
                    echo '$idade T $sal T $nome T $casado';
                ?>
            </div>
            <hr>
            <div>
                <h2>Operadores Aritméticos - Curso PHP Iniciante #05</h2>
                <?php
                    $n1 = 3;
                    $n2 = 2;
                    // $adicao = $n1 + $n2;
                    // $subtracao = $n1 - $n2;
                    // $multiplicacao = $n1 * $n2;
                    // $divisao = $n1 / $n2;
                    // $modulo = $n1 % $n2;
                    echo "A soma entre $n1 + $n2 = ".($n1+$n2);
                    echo "</br>A subtração entre $n1 - $n2 = ".($n1-$n2) ;
                    echo "</br>A multiplicação entre $n1 * $n2 = ".($n1*$n2);
                    echo "</br>A divisão entre $n1 / $n2 = ".($n1/$n2);
                    echo "</br>O resto da divisão entre $n1 % $n2 = ".($n1%$n2);
                ?>
                <h4>Ordem de precedência</h4>
                <p>
                    Parênteses ( )
                    </br>Multiplicação *
                    </br>Divisão /
                    </br>Módulo %
                    </br>Adição +
                    </br>Subtração -
                </p>
                <?php
                    echo "A media entre $n1 e $n2 = ".($n1+$n2)/2;
                ?>
                <?php
                // pegar parametros na URL, colocando ?parametros (interrogação e logo em seguida dos parametros) por exemplo: http://localhost/php-yt-cv/aula-1.php?a=5&b=2
                    
                    // $n3 = $_GET["a"];
                    // $n4 = $_GET["b"];
                    $n3 = 5;
                    $n4 = 2;
                    echo "<h3>Valores recebidos da URL?parametros: $n3 e $n4</h3>";
                    echo "A soma entre $n3 + $n4 = ".($n3+$n4);
                    echo "</br>A subtração entre $n3 - $n4 = ".($n3-$n4) ;
                    echo "</br>A multiplicação entre $n3 * $n4 = ".($n3*$n4);
                    echo "</br>A divisão entre $n3 / $n4 = ".($n3/$n4);
                    echo "</br>O resto da divisão entre $n3 % $n4 = ".($n3%$n4);
                    echo "</br>A media entre $n3 e $n4 = ".($n3+$n4)/2;
                ?>
                <h3>Funções matemáticas</h3>z
                <p>
                    abs( ) = Pegar o valor absoluto;
                    valor absoluto é basicamente eliminar o sinal negativo
                </p>
                <p>
                    pow( ) = Potenciação;
                </p>
                <p>
                    sqrt( ) = Raiz Quadrada;
                </p>
                <p>
                    round( ) = Arredondamento;
                </p>
                <p>
                    intval( ) Valor inteiro da variável
                </p>
                <p>
                    number_format( ) = Formatação
                </p>
                <?php
                // se tiver mais de um $_GET["x"], todos tem que ser preencido na url, caso contrario vai da erro, URL do final da aula http://localhost/php-yt-cv/aula-1.php?a=4&b=3&x=80000&y=3.4
                // A tag <sup></sup> é para exibir o numero elevado
                    // $v1 = $_GET["x"];
                    // $v2 = $_GET["y"];
                    $v1 = 8000;
                    $v2 = 3.4;
                    echo "<h4>Valores recebidos(url): $v1 e $v2</h4>";
                    echo "O valor absoluto de $v2 é ".abs($v2);
                    echo "</br>O valor de $v1<sup>$v2</sup> é ".pow($v1,$v2);
                    echo "</br>A raiz de $v1 é ".sqrt($v1);
                    echo "</br>O valor de $v2 arredondado é ".round($v2); //round ou cell(arredonda pra cima) ou floor(arredonda pra baixo)
                    echo "</br>A parte inteira de $v2 é ".intval($v2);
                    echo "</br>O valor de $v1 em moeda é R$".number_format($v1,2,",",".");
                ?>
            

            </div>
            <hr>
            <div>
                <h2>Operadores de Atribuição - Curso PHP Iniciante #06</h2>
                <?php
                // http://localhost/php-yt-cv/aula-1.php?a=4&b=3&x=80000&y=3.4&p=30
                // $a = 1;
                // $b = 3;
                // $c = $a + $b;
                // $c = $c + 5; // $c += 5;
                // $b = $b + $a;// $b += $a;
                // $a = $a + 1; // $a += 1; $a++;
                // $preco = $_GET["p"];
                $preco = 30;
                echo "Opreço do produto é R$ " . number_format($preco, 2);
                // $preco = $preco + ($preco*10/100);
                $preco += $preco*10/100;
                // $preco -= $preco*10/100; desconto
                echo "</br>E o preço do produto com 10% de aumento será R$ " . number_format($preco, 2); 
                ?>
                <table border="1">
                    <tr>
                        <th>Operadores de incremento</th>
                    </tr>
                    <tr>
                        <td>Pré-incremento</td>
                        <td>$a = $a + 1</td>
                        <td>++$a</td>
                    </tr>
                    <tr>
                        <td>Pós-incremento</td>
                        <td>$a = $a + 1</td>
                        <td>$a++</td>
                    </tr>
                    <tr>
                        <td>Pré-decremento</td>
                        <td>$a = $a - 1</td>
                        <td>--$a</td>
                    </tr>
                    <tr>
                        <td>Pós-decremento</td>
                        <td>$a = $a - 1</td>
                        <td>$a--</td>
                    </tr>
                </table>
                </br>
                <?php
                // http://localhost/php-yt-cv/aula-1.php?a=4&b=3&x=80000&y=3.4&p=950&aa=2022
                    // $atual = $_GET["aa"];
                    $atual = 2022;
                    echo "O ano atual é $atual e o ano anterior é ". --$atual;

                    // TIPO 1 COMENTARIO
                    # TIPO 2 COMENTARIO
                    /* TIPO 3 COMENTARIO */
                    echo "<h5>Variáveis referenciadas</h5>";
                    $a = 3;
                    $b = $a;
                    $b += 5;
                    echo "</br>".$a;
                    echo "</br>".$b;

                    $c = 3;
                    $d = &$c;
                    $d += 5;
                    echo "</br>".$c;
                    echo "</br>".$d;

                    echo "<h5>Variáveis de Variáveis</h5>";

                    $variavelX = "abc";
                    $$variavelX = "def";
                    echo "O conteudo da variavel variavelX é $variavelX";
                    echo "</br> A variavel ABC criada recebeu o valor $abc";
                ?>
                







            </div>
            <hr>
            <div>
                <h2>Operadores Relacionais - Curso PHP Iniciante #07</h2>
                <table border="1">
                    <tr>
                        <th>Operadores Relacionais</th>
                    </tr>
                    <tr>
                        <td>Maior</td>
                        <td>$a > $b</td>
                    </tr>
                    <tr>
                        <td>Menor</td>
                        <td>$a < $b</td>
                    </tr>
                    <tr>
                        <td>Maior ou igual</td>
                        <td>$a >= $b</td>
                    </tr>
                    <tr>
                        <td>Menor ou igual</td>
                        <td>$a <= $b</td>
                    </tr>
                    <tr>
                        <td>Diferente</td>
                        <td>$a <> $b</td>
                        <td>$a != $b</td>
                    </tr>
                    <tr>
                        <td>Igual</td>
                        <td>$a == $b</td>
                    </tr>
                    <tr>
                        <td>Idêntico</td>
                        <td>$a === $b</td>
                    </tr>
                </table>
                <table border="3">
                    <tr>
                        <th>Operadores Ternário</th>
                    </tr>
                    <tr>
                        <td>expressão ? verdadeiro : falso</td>
                    </tr>
                    <tr>
                        <td>$maior = $a > $b ? $a : $b</td>
                    </tr>
                    <tr>
                        <td>$r = $a > $b ? $a+$b : $a-$b</td>
                    </tr>
                    <tr>
                        <td>$sit = $m < 7 ? "recuperação" : "aprovado"</td>
                    </tr>
                </table>
                <h3>Operadores Lógicos</h3>
                <h4>and && </h4>
                <table border="3">
                    <tr>
                        <td>p</td>
                        <td>q</td>
                        <td>p E q</td>
                    </tr>
                    <tr>
                        <td>V</td>
                        <td>V</td>
                        <td>V</td>
                    </tr>
                    <tr>
                        <td>V</td>
                        <td>F</td>
                        <td>F</td>
                    </tr>
                    <tr>
                        <td>F</td>
                        <td>V</td>
                        <td>F</td>
                    </tr>
                    <tr>
                        <td>F</td>
                        <td>F</td>
                        <td>F</td>
                    </tr>
                </table>

                <h4>or || </h4>
                <table border="3">
                    <tr>
                        <td>p</td>
                        <td>q</td>
                        <td>p OU q</td>
                    </tr>
                    <tr>
                        <td>V</td>
                        <td>V</td>
                        <td>V</td>
                    </tr>
                    <tr>
                        <td>V</td>
                        <td>F</td>
                        <td>V</td>
                    </tr>
                    <tr>
                        <td>F</td>
                        <td>V</td>
                        <td>V</td>
                    </tr>
                    <tr>
                        <td>F</td>
                        <td>F</td>
                        <td>F</td>
                    </tr>
                </table>

                <h4>xor </h4>
                <table border="3">
                    <tr>
                        <td>p</td>
                        <td>q</td>
                        <td>p XOU q</td>
                    </tr>
                    <tr>
                        <td>V</td>
                        <td>V</td>
                        <td>F</td>
                    </tr>
                    <tr>
                        <td>V</td>
                        <td>F</td>
                        <td>V</td>
                    </tr>
                    <tr>
                        <td>F</td>
                        <td>V</td>
                        <td>V</td>
                    </tr>
                    <tr>
                        <td>F</td>
                        <td>F</td>
                        <td>F</td>
                    </tr>
                </table>

                <h4>no ! </h4>
                <table border="3">
                    <tr>
                        <td>p</td>
                        <td>NÃO p</td>
                    </tr>
                    <tr>
                        <td>V</td>
                        <td>F</td>
                    </tr>
                    <tr>
                        <td>F</td>
                        <td>V</td>
                    </tr>
                </table>
                <p> echo "Quem nasceu em $ano tem idade de $idade anos."; </br> $tipo = ($idade >= 18 && $idade < 65) ? "OBRIGATORIO" : "NÃO OBRIGATORIO"; </br> echo "seu voto é $tipo";</p>
            </div>
            <hr>
            <div>
                <h2>Integração HTML5 + PHP - Curso PHP Iniciante #08</h2>

                <h3>Formulários em HTML5</h3>
                <!-- method="get" envia os dados pela url e o method="post" envia os dados por pacotes -->
                <form action="" method="get"></form>
            </div>
            <hr>
        </section>


</body>
</html>