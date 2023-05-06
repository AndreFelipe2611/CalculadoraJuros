<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="text">
            <h1>Calculos de juros simples e compostos</h1>
        </div>
    </header>

    <main>
        
            <form method="post" action="">
                <label for="fname">digite o capital</label>
                <div class="input">
                    <input type="text" name="capital">
                </div>
                <label for="lname">digite a taxa</label>
                <div class="input">
                    <input type="text" name="taxa">
                </div>
                <label for="lname">digite o tempo</label>
                <div class="input">
                    <input type="text" name="time">
                </div>
                <div class="select">
                    <select name="juros">
                        <option>juros simples</option>
                        <option>juros compostos</option>
                    </select><br>
                </div>
                <div class="container">
                    <input value="Calcular" type="submit">
                </div>

                <div class="php">
                    <?php

                    if (empty($_POST['capital']) or empty($_POST['taxa']) or empty($_POST['time'])) {
                        echo "preencha todos os campos";
                    } else {


                        $capital = $_POST['capital'];
                        $taxa = $_POST['taxa'];
                        $time = $_POST['time'] / 100;

                        if ($_POST['juros'] == "juros simples") {
                            $jurosSimples = $capital * $taxa * $time;
                            echo "O resultado dos juros simples é: " . $jurosSimples;
                        } elseif ($_POST['juros'] == "juros compostos") {
                            $montante = $capital * (1 + $taxa) ** $time;
                            echo "O resultado dos juros composto é: " . $montante;
                        } else {
                            echo "preencha todos os campos";
                        }
                    }

                    ?>

                </div>


            </form>
        


    </main>


</body>

</html>