<h2>Exercício 1: calculadora Simples</h2>
<?php
$numero1 = 10;
$numero2 = 5;
$operacao ="/";


if ($operacao == "+") {
    $resultado = $numero1 + $numero2;
    echo "A soma de $numero1 e $numero2 é: $resultado";
} else if ($operacao == "-") {
    $resultado = $numero1 - $numero2;
    echo "A subtração de $numero1 e $numero2 é: $resultado";
} else if ($operacao == "x") {
    $resultado = $numero1 * $numero2;
    echo "A multiplicação de $numero1 e $numero2 é: $resultado";
} else if ($operacao == "/") {
    if ($numero2 != 0) { 
        $resultado = $numero1 / $numero2;
        echo "A divisão de $numero1 por $numero2 é: $resultado";
    } else {
        echo "Erro: Divisão por zero não é permitida.";
    }
} else {
    echo "Operação inválida. Use soma, subtração, multiplicação ou divisão.";
}
?>


<h2>Atividade 2: calculadora de idade</h2>
<?php
$anoNascimento = 2006;
$anoAtual = 2024;
$idade;
$idade = $anoAtual - $anoNascimento;
 echo "A idade atual é $idade";
?>


<h2>Exercício 3: Conversor de Temperatura</h2>
<?php 
$temperaturaCelsius = 24;
$fahrenheit;
$fahrenheit=($temperaturaCelsius * 9/5) + 32;
 echo "$temperaturaCelsius Celsius convertido em Fahrenheit $fahrenheit";
?>

<h2>Exercício 4: Verificação de Paridade</h2>
<?php 
$numero = 17;
if($numero % 2 == 0){
    echo "O número $numero é par.";
}
else{
    echo "O número $numero é impar.";
}
?>

<h2>Exercício 5: Verificação de Faixa Etária</h2>
<?php 
$idade = 17;
if($idade <= 12){
    echo "É uma criança.";
}else if($idade >= 13 && $idade <= 17){
    echo "É um adolescente.";
}else if($idade >= 18 && $idade <= 64){
    echo "É adulto.";
}else{
    echo "É idoso.";
}
?>

<h2>Exercício 6: Verificação de Número positivo, Negativo ou Zero</h2>
<?php
$numero = -12;
if($numero > 0){
    echo "O número $numero é positivo.";
}else if($numero == 0){
    echo "É Zero.";
}else{
    echo "O número $numero é negativo.";
}
?>

<h2>Exercício 7: Classificação de Nota Escolar</h2>
<?php 
    echo "<h4>Para nota A tirar entre 90-100; <br>Para nota B tirar entre 80-89;<br>Para nota C tirar entre 70-79;<br>
Para nota D tirar entre 60-69;<br>Para nota F tirar abaixo de 60.</h4>";
$nota = 75;
if($nota >= 90 && $nota <= 100){
    echo "Tirou Nota A!";
}else if($nota >=80 && $nota<= 89){
    echo "Tirou Nota B!";
}else if($nota >= 70 && $nota<= 79){
    echo "Tirou Nota C :|";
}else if($nota >= 60 && $nota<= 69){
    echo "Tirou Nota D :(";
}else if($nota < 60){
    echo "Tirou Nota F ;(";
}else{
    echo "Essa Nota não existe.";
}
?>

<h2>Exercício 8: Verificação de Ano Bissexto</h2>
<?php
$ano = 1600;
if(($ano % 4 == 0 && $ano % 100 != 0) || $ano % 400 == 0){
    echo " $ano é ano bissexto.";
}else{
    echo "$ano Não é ano bissexto.";
}
?>

<h2>Exercício 9: Verificação de Tamanho de Senha</h2>
<?php
 echo "<h3> A senha precisa ter 10 caracteres.</h3><br>";
 $senha = "senha12345";
 if(strlen($senha) == 10){
    echo "Sua senha foi aceita com sucesso!";
 }else{
    echo " Sua senha não atingiu o minimo esperado pelo site.";
 }
?>

<h2>Exercício 10: Contagem com While</h2>
<?php
$contador = 1;
while ($contador <= 10) {
    echo $contador . "\n"; 
    $contador++;  
}
?>

<h2>Exercício 11: Soma de Números com while</h2>
<?php
$soma = 0;
$numero = 1;
while($numero <= 100){
    $soma += $numero;
    $numero++;
}
    echo "A soma dos números de 1 a 100 é: $soma ";
?>

<h2>Exercício 12: Tabuada com For</h2>
<?php
$tabuada = 5;
$resultado;
for($i = 0 ; $i <= 10 ; $i++){
    $resultado = $tabuada * $i;
    echo "$tabuada X $i = $resultado<br>";
}
?>

<h2>Exercício 13: Fatorial com For</h2>
<?php
$numero = 5;
$fatorial = 1;
 for ($i = 1; $i <= $numero; $i++) {
     $fatorial *= $i; 
}
    echo "O fatorial de $numero é: $fatorial";
?>

<h2>Exercício 14: Números Pares com For</h2>
<?php
 for ($i = 2; $i <= 50; $i += 2) {
    if($i % 2 == 0){
        echo $i . "\n";
    }   
}
?>