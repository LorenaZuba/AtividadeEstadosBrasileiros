<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unidades Federativas brasileiras</title>
</head>
<body>
    <header>
        <h2>Estados do Brasil</h2>
    </header>

    <main>
        <?php
            $Acre = array(
                'bandeira' => '<img width=50 src="https://upload.wikimedia.org/wikipedia/commons/4/4c/Bandeira_do_Acre.svg" alt="bandeira do Acre">',
                'unidfed' => 'Acre',
                'abrev' => 'AC',
                'sedgov' => 'Rio Branco',
                'area' => '164 122,2',
                'pop' => '795 145',
                'dens' => 4.30,
                'pib' => '13 622 000',
                'porcentagem' => 0.2,
                'pibcap' => '16 953,46',
                'idh' => 0.663,
                'alfab' => '86,9%',
                'mortinf' => '17,0‰',
                'expvida' => '73,9 anos',
            );
            echo var_dump($Acre);
        ?>

        <table>
            <thead>
                <tr>
                    <th>Bandeira</th>
                    <th>Unidade federativa</th>
                    <th>Abreviação</th>
                    <th>Sede de governo</th>
                    <th>Área (km)<sup>2</sup></th>
                    <th>População (2014)</th>
                    <th>Densidade (2005)</th>
                    <th>PIB (2015)</th>
                    <th>(% total) (2015)</th>
                    <th>PIB per capita (R$) (2015)</th>
                    <th>IDH (2010)</th>
                    <th>Alfabetização (2016)</th>
                    <th>Mortalidade infantil (2016)</th>
                    <th>Expectativa de vida (2016)</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </main>
    <footer>
        <p>Lorena Zuba - &copy 2023 </p>
    </footer>
    
</body>
</html>