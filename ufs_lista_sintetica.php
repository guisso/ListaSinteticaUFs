<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UFs: Lista Sintética</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Pathway+Gothic+One&display=swap');


        body {
            font-family: 'Pathway Gothic One', sans-serif;
        }

        table {
            border: solid medium black;
            border-collapse: collapse;
        }

        tr {
            border-bottom: solid thin black;
        }

        tbody tr:nth-child(odd) {
            background-color: #eee;
        }

        th {
            width: calc(100% / 14);
        }

        th,
        td {
            text-align: center;
            padding: .25em .5em;
            text-shadow: 1px 1px 2px gray;
        }

        td:hover {
            background-color: #ddd;
        }

        img {
            border: solid thin black;
            box-shadow: 1px 1px 2px gray;
        }
    </style>
</head>

<body>
    <header>
        <h2>Desenvolvimento <i>Web</i></h2>
    </header>

    <main>
        <h1>Lista Sintética de Unidades da Federação do Brasil</h1>
        <?php
        $chaves = [
            'Bandeira',
            'UF',
            'Sigla',
            'Sede Administrativa',
            'Área',
            'População',
            'Densidade',
            'PIB',
            'PIB &percnt;',
            'PIB per capta',
            'IDH',
            'Alfabetização',
            'Mortalidade Infantil &permil;',
            'Expectativa de Vida'
        ];

        #region Dados sintéticos
        $dados = array(
            array(
                $chaves[0] => 'https://upload.wikimedia.org/wikipedia/commons/4/4c/Bandeira_do_Acre.svg',
                $chaves[1] => 'Acre',
                $chaves[2] => 'AC',
                $chaves[3] => 'Rio Branco',
                $chaves[4] => '164.122,2',
                $chaves[5] => '795.145',
                $chaves[6] => '4,3',
                $chaves[7] => '13.622.000',
                $chaves[8] => '0,2',
                $chaves[9] => '16.953,46',
                $chaves[10] => '0,663',
                $chaves[11] => '0,869',
                $chaves[12] => '17,0',
                $chaves[13] => '73,9'
            ),
            array(
                $chaves[0] => 'https://upload.wikimedia.org/wikipedia/commons/8/88/Bandeira_de_Alagoas.svg',
                $chaves[1] => 'Alagoas',
                $chaves[2] => 'AL',
                $chaves[3] => 'Maceió',
                $chaves[4] => '27.767,7',
                $chaves[5] => '3.327.551',
                $chaves[6] => '108,61',
                $chaves[7] => '46.364.000',
                $chaves[8] => '0,8',
                $chaves[9] => '13.877,53',
                $chaves[10] => '0,631',
                $chaves[11] => '0,806',
                $chaves[12] => '19,5',
                $chaves[13] => '71,6'
            ),
            array(
                $chaves[0] => 'https://upload.wikimedia.org/wikipedia/commons/0/0c/Bandeira_do_Amap%C3%A1.svg',
                $chaves[1] => 'Amapá',
                $chaves[2] => 'AP',
                $chaves[3] => 'Macapá',
                $chaves[4] => '142.814,6',
                $chaves[5] => '756.500',
                $chaves[6] => '4,16',
                $chaves[7] => '13.861.000',
                $chaves[8] => '0,2',
                $chaves[9] => '18.079,54',
                $chaves[10] => '0,708',
                $chaves[11] => '0,95',
                $chaves[12] => '23,2',
                $chaves[13] => '73,9'
            ),
            array(
                $chaves[0] => 'https://upload.wikimedia.org/wikipedia/commons/6/6b/Bandeira_do_Amazonas.svg',
                $chaves[1] => 'Amazonas',
                $chaves[2] => 'AM',
                $chaves[3] => 'Manaus',
                $chaves[4] => '1.570.745,7',
                $chaves[5] => '3.893.763',
                $chaves[6] => '2,05',
                $chaves[7] => '86.560.000',
                $chaves[8] => '1,4',
                $chaves[9] => '21.978,95',
                $chaves[10] => '0,674',
                $chaves[11] => '0,931',
                $chaves[12] => '18,2',
                $chaves[13] => '71,9'
            ),
            array(
                $chaves[0] => 'https://upload.wikimedia.org/wikipedia/commons/2/28/Bandeira_da_Bahia.svg',
                $chaves[1] => 'Bahia',
                $chaves[2] => 'BA',
                $chaves[3] => 'Salvador',
                $chaves[4] => '564.692,7',
                $chaves[5] => '15.150.143',
                $chaves[6] => '24,46',
                $chaves[7] => '245.025.000',
                $chaves[8] => '4,1',
                $chaves[9] => '16.115,89',
                $chaves[10] => '0,66',
                $chaves[11] => '0,87',
                $chaves[12] => '17,3',
                $chaves[13] => '73,5'
            ),
            array(
                $chaves[0] => 'https://upload.wikimedia.org/wikipedia/commons/2/2e/Bandeira_do_Cear%C3%A1.svg',
                $chaves[1] => 'Ceará',
                $chaves[2] => 'CE',
                $chaves[3] => 'Fortaleza',
                $chaves[4] => '148.825,6',
                $chaves[5] => '8.867.448',
                $chaves[6] => '54,4',
                $chaves[7] => '130.621.000',
                $chaves[8] => '2,2',
                $chaves[9] => '14.669,14',
                $chaves[10] => '0,682',
                $chaves[11] => '0,848',
                $chaves[12] => '14,4',
                $chaves[13] => '73,8'
            ),
            array(
                $chaves[0] => 'https://upload.wikimedia.org/wikipedia/commons/3/3c/Bandeira_do_Distrito_Federal_%28Brasil%29.svg',
                $chaves[1] => 'Distrito Federal',
                $chaves[2] => 'DF',
                $chaves[3] => 'Brasília',
                $chaves[4] => '5.822,1',
                $chaves[5] => '2.867.869',
                $chaves[6] => '400,73',
                $chaves[7] => '215.613.000',
                $chaves[8] => '3,6',
                $chaves[9] => '73.971,05',
                $chaves[10] => '0,824',
                $chaves[11] => '0,974',
                $chaves[12] => '10,5',
                $chaves[13] => '78,1'
            ),
            array(
                $chaves[0] => 'https://upload.wikimedia.org/wikipedia/commons/4/43/Bandeira_do_Esp%C3%ADrito_Santo.svg',
                $chaves[1] => 'Espírito Santo',
                $chaves[2] => 'ES',
                $chaves[3] => 'Vitória',
                $chaves[4] => '46.077,5',
                $chaves[5] => '3.894.899',
                $chaves[6] => '73,97',
                $chaves[7] => '120.363.000',
                $chaves[8] => '2',
                $chaves[9] => '30.627,45',
                $chaves[10] => '0,74',
                $chaves[11] => '0,938',
                $chaves[12] => '8,8',
                $chaves[13] => '78,2'
            ),
            array(
                $chaves[0] => 'https://upload.wikimedia.org/wikipedia/commons/b/be/Flag_of_Goi%C3%A1s.svg',
                $chaves[1] => 'Goiás',
                $chaves[2] => 'GO',
                $chaves[3] => 'Goiânia',
                $chaves[4] => '340.086,7',
                $chaves[5] => '6.551.322',
                $chaves[6] => '16,52',
                $chaves[7] => '173.632.000',
                $chaves[8] => '2,9',
                $chaves[9] => '26.265,32',
                $chaves[10] => '0,735',
                $chaves[11] => '0,935',
                $chaves[12] => '14,9',
                $chaves[13] => '74,2'
            ),
            array(
                $chaves[0] => 'https://upload.wikimedia.org/wikipedia/commons/4/45/Bandeira_do_Maranh%C3%A3o.svg',
                $chaves[1] => 'Maranhão',
                $chaves[2] => 'MA',
                $chaves[3] => 'São Luís',
                $chaves[4] => '331.983,3',
                $chaves[5] => '6.861.924',
                $chaves[6] => '18,38',
                $chaves[7] => '78.475.000',
                $chaves[8] => '1,3',
                $chaves[9] => '11.366,23',
                $chaves[10] => '0,639',
                $chaves[11] => '0,833',
                $chaves[12] => '21,3',
                $chaves[13] => '70,6'
            ),
            array(
                $chaves[0] => 'https://upload.wikimedia.org/wikipedia/commons/0/0b/Bandeira_de_Mato_Grosso.svg',
                $chaves[1] => 'Mato Grosso',
                $chaves[2] => 'MT',
                $chaves[3] => 'Cuiabá',
                $chaves[4] => '903.357,9',
                $chaves[5] => '3.236.578',
                $chaves[6] => '3,1',
                $chaves[7] => '107.418.000',
                $chaves[8] => '1,8',
                $chaves[9] => '32.894,96',
                $chaves[10] => '0,725',
                $chaves[11] => '0,935',
                $chaves[12] => '16,9',
                $chaves[13] => '74,2'
            ),
            array(
                $chaves[0] => 'https://upload.wikimedia.org/wikipedia/commons/6/64/Bandeira_de_Mato_Grosso_do_Sul.svg',
                $chaves[1] => 'Mato Grosso do Sul',
                $chaves[2] => 'MS',
                $chaves[3] => 'Campo Grande',
                $chaves[4] => '357.125,0',
                $chaves[5] => '2.630.098',
                $chaves[6] => '6,34',
                $chaves[7] => '83.082.000',
                $chaves[8] => '1,4',
                $chaves[9] => '31.337,22',
                $chaves[10] => '0,729',
                $chaves[11] => '0,937',
                $chaves[12] => '14,0',
                $chaves[13] => '75,5'
            ),
            array(
                $chaves[0] => 'https://upload.wikimedia.org/wikipedia/commons/f/f4/Bandeira_de_Minas_Gerais.svg',
                $chaves[1] => 'Minas Gerais',
                $chaves[2] => 'MG',
                $chaves[3] => 'Belo Horizonte',
                $chaves[4] => '586.528,3',
                $chaves[5] => '20.777.672',
                $chaves[6] => '32,79',
                $chaves[7] => '519.326.000',
                $chaves[8] => '8,7',
                $chaves[9] => '24.884,94',
                $chaves[10] => '0,731',
                $chaves[11] => '0,938',
                $chaves[12] => '10,9',
                $chaves[13] => '77,2'
            ),
            array(
                $chaves[0] => 'https://upload.wikimedia.org/wikipedia/commons/0/02/Bandeira_do_Par%C3%A1.svg',
                $chaves[1] => 'Pará',
                $chaves[2] => 'PA',
                $chaves[3] => 'Belém',
                $chaves[4] => '1.247.689,5',
                $chaves[5] => '8.101.180',
                $chaves[6] => '5,58',
                $chaves[7] => '130.883.000',
                $chaves[8] => '2,2',
                $chaves[9] => '16.009,98',
                $chaves[10] => '0,646',
                $chaves[11] => '0,907',
                $chaves[12] => '16,6',
                $chaves[13] => '72,1'
            ),
            array(
                $chaves[0] => 'https://upload.wikimedia.org/wikipedia/commons/b/bb/Bandeira_da_Para%C3%ADba.svg',
                $chaves[1] => 'Paraíba',
                $chaves[2] => 'PB',
                $chaves[3] => 'João Pessoa',
                $chaves[4] => '56.439,8',
                $chaves[5] => '3.950.359',
                $chaves[6] => '63,71',
                $chaves[7] => '56.140.000',
                $chaves[8] => '0,9',
                $chaves[9] => '14.133,32',
                $chaves[10] => '0,658',
                $chaves[11] => '0,837',
                $chaves[12] => '16,1',
                $chaves[13] => '73,2'
            ),
            array(
                $chaves[0] => 'https://upload.wikimedia.org/wikipedia/commons/9/93/Bandeira_do_Paran%C3%A1.svg',
                $chaves[1] => 'Paraná',
                $chaves[2] => 'PR',
                $chaves[3] => 'Curitiba',
                $chaves[4] => '199.314,9',
                $chaves[5] => '11.112.062',
                $chaves[6] => '51,48',
                $chaves[7] => '376.960.000',
                $chaves[8] => '6,3',
                $chaves[9] => '33.768,62',
                $chaves[10] => '0,749',
                $chaves[11] => '0,955',
                $chaves[12] => '9,3',
                $chaves[13] => '77,1'
            ),
            array(
                $chaves[0] => 'https://upload.wikimedia.org/wikipedia/commons/5/59/Bandeira_de_Pernambuco.svg',
                $chaves[1] => 'Pernambuco',
                $chaves[2] => 'PE',
                $chaves[3] => 'Recife',
                $chaves[4] => '98.311,6',
                $chaves[5] => '9.297.861',
                $chaves[6] => '85,58',
                $chaves[7] => '156.955.000',
                $chaves[8] => '2,6',
                $chaves[9] => '16.795,34',
                $chaves[10] => '0,673',
                $chaves[11] => '0,872',
                $chaves[12] => '12,7',
                $chaves[13] => '73,9'
            ),
            array(
                $chaves[0] => 'https://upload.wikimedia.org/wikipedia/commons/3/33/Bandeira_do_Piau%C3%AD.svg',
                $chaves[1] => 'Piauí',
                $chaves[2] => 'PI',
                $chaves[3] => 'Teresina',
                $chaves[4] => '251.529,2',
                $chaves[5] => '3.198.185',
                $chaves[6] => '11,95',
                $chaves[7] => '39.148.000',
                $chaves[8] => '0,7',
                $chaves[9] => '12.218,51',
                $chaves[10] => '0,646',
                $chaves[11] => '0,828',
                $chaves[12] => '19,1',
                $chaves[13] => '71,1'
            ),
            array(
                $chaves[0] => 'https://upload.wikimedia.org/wikipedia/commons/7/73/Bandeira_do_estado_do_Rio_de_Janeiro.svg',
                $chaves[1] => 'Rio de Janeiro',
                $chaves[2] => 'RJ',
                $chaves[3] => 'Rio de Janeiro',
                $chaves[4] => '43.696,1',
                $chaves[5] => '16.497.395',
                $chaves[6] => '352,05',
                $chaves[7] => '659.137.000',
                $chaves[8] => '11',
                $chaves[9] => '39.826,95',
                $chaves[10] => '0,761',
                $chaves[11] => '0,973',
                $chaves[12] => '11,5',
                $chaves[13] => '76,2'
            ),
            array(
                $chaves[0] => 'https://upload.wikimedia.org/wikipedia/commons/3/30/Bandeira_do_Rio_Grande_do_Norte.svg',
                $chaves[1] => 'Rio Grande do Norte',
                $chaves[2] => 'RN',
                $chaves[3] => 'Natal',
                $chaves[4] => '52.796,8',
                $chaves[5] => '3.419.550',
                $chaves[6] => '56,88',
                $chaves[7] => '57.250.000',
                $chaves[8] => '1',
                $chaves[9] => '16.631,86',
                $chaves[10] => '0,684',
                $chaves[11] => '0,853',
                $chaves[12] => '14,7',
                $chaves[13] => '75,7'
            ),
            array(
                $chaves[0] => 'https://upload.wikimedia.org/wikipedia/commons/6/63/Bandeira_do_Rio_Grande_do_Sul.svg',
                $chaves[1] => 'Rio Grande do Sul',
                $chaves[2] => 'RS',
                $chaves[3] => 'Porto Alegre',
                $chaves[4] => '281.748,5',
                $chaves[5] => '11.228.091',
                $chaves[6] => '38,49',
                $chaves[7] => '381.985.000',
                $chaves[8] => '6,4',
                $chaves[9] => '33.960,36',
                $chaves[10] => '0,746',
                $chaves[11] => '0,968',
                $chaves[12] => '9,6',
                $chaves[13] => '77,8'
            ),
            array(
                $chaves[0] => 'https://upload.wikimedia.org/wikipedia/commons/f/fa/Bandeira_de_Rond%C3%B4nia.svg',
                $chaves[1] => 'Rondônia',
                $chaves[2] => 'RO',
                $chaves[3] => 'Porto Velho',
                $chaves[4] => '237.576,2',
                $chaves[5] => '1.755.015',
                $chaves[6] => '6,46',
                $chaves[7] => '36.563.000',
                $chaves[8] => '0,6',
                $chaves[9] => '20.677,95',
                $chaves[10] => '0,69',
                $chaves[11] => '0,933',
                $chaves[12] => '20,0',
                $chaves[13] => '71,3'
            ),
            array(
                $chaves[0] => 'https://upload.wikimedia.org/wikipedia/commons/9/98/Bandeira_de_Roraima.svg',
                $chaves[1] => 'Roraima',
                $chaves[2] => 'RR',
                $chaves[3] => 'Boa Vista',
                $chaves[4] => '224.299,0',
                $chaves[5] => '500.826',
                $chaves[6] => '1,74',
                $chaves[7] => '10.354.000',
                $chaves[8] => '0,2',
                $chaves[9] => '20.476,71',
                $chaves[10] => '0,707',
                $chaves[11] => '0,934',
                $chaves[12] => '17,2',
                $chaves[13] => '71,5'
            ),
            array(
                $chaves[0] => 'https://upload.wikimedia.org/wikipedia/commons/1/1a/Bandeira_de_Santa_Catarina.svg',
                $chaves[1] => 'Santa Catarina',
                $chaves[2] => 'SC',
                $chaves[3] => 'Florianópolis',
                $chaves[4] => '95.346,2',
                $chaves[5] => '6.734.568',
                $chaves[6] => '61,53',
                $chaves[7] => '249.073.000',
                $chaves[8] => '4,2',
                $chaves[9] => '36.525,28',
                $chaves[10] => '0,774',
                $chaves[11] => '0,972',
                $chaves[12] => '9,2',
                $chaves[13] => '79,1'
            ),
            array(
                $chaves[0] => 'https://upload.wikimedia.org/wikipedia/commons/2/2b/Bandeira_do_estado_de_S%C3%A3o_Paulo.svg',
                $chaves[1] => 'São Paulo',
                $chaves[2] => 'SP',
                $chaves[3] => 'São Paulo',
                $chaves[4] => '248.209,4',
                $chaves[5] => '44.169.350',
                $chaves[6] => '162,93',
                $chaves[7] => '1.939.890.000',
                $chaves[8] => '32,4',
                $chaves[9] => '43.694,68',
                $chaves[10] => '0,783',
                $chaves[11] => '0,972',
                $chaves[12] => '9,9',
                $chaves[13] => '78,1'
            ),
            array(
                $chaves[0] => 'https://upload.wikimedia.org/wikipedia/commons/b/be/Bandeira_de_Sergipe.svg',
                $chaves[1] => 'Sergipe',
                $chaves[2] => 'SE',
                $chaves[3] => 'Aracaju',
                $chaves[4] => '21.910,3',
                $chaves[5] => '2.227.294',
                $chaves[6] => '89,81',
                $chaves[7] => '38.554.000',
                $chaves[8] => '0,6',
                $chaves[9] => '17.189,28',
                $chaves[10] => '0,665',
                $chaves[11] => '0,853',
                $chaves[12] => '16,2',
                $chaves[13] => '72,7'
            ),
            array(
                $chaves[0] => 'https://upload.wikimedia.org/wikipedia/commons/f/ff/Bandeira_do_Tocantins.svg',
                $chaves[1] => 'Tocantins',
                $chaves[2] => 'TO',
                $chaves[3] => 'Palmas',
                $chaves[4] => '277.620,9',
                $chaves[5] => '1.502.759',
                $chaves[6] => '4,7',
                $chaves[7] => '28.930.000',
                $chaves[8] => '0,5',
                $chaves[9] => '19.094,16',
                $chaves[10] => '0,699',
                $chaves[11] => '0,896',
                $chaves[12] => '15,8',
                $chaves[13] => '73,4'
            )
        );
        #endregion

        ?>

        <table>
            <thead>
                <tr>
                    <th>Bandeira</th>
                    <th>UF</th>
                    <th>Sigla</th>
                    <th>Sede Administrativa</th>
                    <th>Área (km<sup>2</sup>)</th>
                    <th>População (2014)</th>
                    <th>Densidade (2005)</th>
                    <th>PIB (R$) (2015)</th>
                    <th>PIB (&percnt;) (2015)</th>
                    <th>PIB (R$ <i>per capta</i>) (2015)</th>
                    <th>IDH (2010)</th>
                    <th>Alfabetização (&percnt;) (2016)</th>
                    <th>Mortalidade Infantil (&permil;) (2016)</th>
                    <th>Expextativa de Vida (anos) (2016)</th>
                </tr>
            </thead>

            <tbody>
                <?php
                foreach ($dados as $estado) {
                    $linha = '<tr>';

                    // Bandeira
                    $linha .= "<td><img src=\"{$estado[$chaves[0]]}\""
                        . " alt=\"Bandeira do {$estado[$chaves[1]]}\""
                        . ' width="50"></td>';

                    // Demais dados
                    for ($i = 1; $i < sizeof($estado); $i++) {
                        $linha .= "<td title=\"{$chaves[$i]}\">" 
                            . $estado[$chaves[$i]] 
                            . '</td>';
                    }

                    $linha .= '</tr>';

                    echo $linha . "\n";
                }
                ?>
            </tbody>
        </table>
    </main>

    <footer>
        <p>&copy; 2023 - Luis Guisso</p>
    </footer>
</body>

</html>