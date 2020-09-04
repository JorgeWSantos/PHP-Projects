<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <main>
        <div class="painel">
            <h2>instruções</h2>
            <div class="conteudo-painel">
                <p>
                    Esta aplicação tem como finalidade demonstrar os valores que
                    serão gastos com combustível durante uma viagem, com base no
                    consumo do seu veículo, e com a distância determinada por você!
                </p>
                <p>
                    Os combustíveis disponíveis para este cálculo são:
                </p>
                <ul>
                    <li><b>Álcool</b></li>
                    <li><b>Díesel</b></li>
                    <li><b>Gasolina</b></li>
                </ul>
            </div>
        </div>

        <div class="painel">
            <h2>Cálculo do valor (R$) do consumo</h2>
            <form action="calculo.php" method="post">
                <label for="distancia">Distância em Quilômetros a ser percorrida</label>
                <input type="number" class="campoTexto"  name="distancia" required/>

                <label for="autonomia">Consumo de combustível do veículo (Km/l)</label>
                <input type="number" class="campoTexto" name="autonomia" required/>

                <button class="botao" type="submit">Calcular</button>
            </form>
        </div>
    </main>
</body>
</html>

