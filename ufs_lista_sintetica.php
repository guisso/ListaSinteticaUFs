<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UFs: Lista Sintética</title>
</head>

<body>
    <header>
        <h2>Desenvolvimento <i>Web</i></h2>
    </header>

    <main>
        <h1>Lista Sintética de Unidades da Federação do Brasil</h1>
        <?php
        $chaves = [
            'bandeira',
            'uf',
            'sigla',
            'sedeadministrativa',
            'area',
            'populacao2014',
            'densidade2005',
            'pib2015',
            'pibpercentual',
            'pibpercapta2015',
            'idh2010',
            'alfabetizacao2016',
            'mortalidadeinfantil2016',
            'expectativavida2016'
        ];

        #region Dados sintéticos
        $dados = array(
            array(
                'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/4/4c/Bandeira_do_Acre.svg',
                'uf' => 'Acre',
                'sigla' => 'AC',
                'sedeadministrativa' => 'Rio Branco',
                'area' => '164.122,2',
                'populacao2014' => '795.145',
                'densidade2005' => '4,3',
                'pib2015' => '13.622.000',
                'pibpercentual' => '0,2',
                'pibpercapta2015' => '16.953,46',
                'idh2010' => '0,663',
                'alfabetizacao2016' => '0,869',
                'mortalidadeinfantil2016' => '17,0',
                'expectativavida2016' => '73,9'
            ),
            array(
                'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/8/88/Bandeira_de_Alagoas.svg',
                'uf' => 'Alagoas',
                'sigla' => 'AL',
                'sedeadministrativa' => 'Maceió',
                'area' => '27.767,7',
                'populacao2014' => '3.327.551',
                'densidade2005' => '108,61',
                'pib2015' => '46.364.000',
                'pibpercentual' => '0,8',
                'pibpercapta2015' => '13.877,53',
                'idh2010' => '0,631',
                'alfabetizacao2016' => '0,806',
                'mortalidadeinfantil2016' => '19,5',
                'expectativavida2016' => '71,6'
            ),
            array(
                'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/0/0c/Bandeira_do_Amap%C3%A1.svg',
                'uf' => 'Amapá',
                'sigla' => 'AP',
                'sedeadministrativa' => 'Macapá',
                'area' => '142.814,6',
                'populacao2014' => '756.500',
                'densidade2005' => '4,16',
                'pib2015' => '13.861.000',
                'pibpercentual' => '0,2',
                'pibpercapta2015' => '18.079,54',
                'idh2010' => '0,708',
                'alfabetizacao2016' => '0,95',
                'mortalidadeinfantil2016' => '23,2',
                'expectativavida2016' => '73,9'
            ),
            array(
                'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/6/6b/Bandeira_do_Amazonas.svg',
                'uf' => 'Amazonas',
                'sigla' => 'AM',
                'sedeadministrativa' => 'Manaus',
                'area' => '1.570.745,7',
                'populacao2014' => '3.893.763',
                'densidade2005' => '2,05',
                'pib2015' => '86.560.000',
                'pibpercentual' => '1,4',
                'pibpercapta2015' => '21.978,95',
                'idh2010' => '0,674',
                'alfabetizacao2016' => '0,931',
                'mortalidadeinfantil2016' => '18,2',
                'expectativavida2016' => '71,9'
            ),
            array(
                'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/2/28/Bandeira_da_Bahia.svg',
                'uf' => 'Bahia',
                'sigla' => 'BA',
                'sedeadministrativa' => 'Salvador',
                'area' => '564.692,7',
                'populacao2014' => '15.150.143',
                'densidade2005' => '24,46',
                'pib2015' => '245.025.000',
                'pibpercentual' => '4,1',
                'pibpercapta2015' => '16.115,89',
                'idh2010' => '0,66',
                'alfabetizacao2016' => '0,87',
                'mortalidadeinfantil2016' => '17,3',
                'expectativavida2016' => '73,5'
            ),
            array(
                'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/2/2e/Bandeira_do_Cear%C3%A1.svg',
                'uf' => 'Ceará',
                'sigla' => 'CE',
                'sedeadministrativa' => 'Fortaleza',
                'area' => '148.825,6',
                'populacao2014' => '8.867.448',
                'densidade2005' => '54,4',
                'pib2015' => '130.621.000',
                'pibpercentual' => '2,2',
                'pibpercapta2015' => '14.669,14',
                'idh2010' => '0,682',
                'alfabetizacao2016' => '0,848',
                'mortalidadeinfantil2016' => '14,4',
                'expectativavida2016' => '73,8'
            ),
            array(
                'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/3/3c/Bandeira_do_Distrito_Federal_%28Brasil%29.svg',
                'uf' => 'Distrito Federal',
                'sigla' => 'DF',
                'sedeadministrativa' => 'Brasília',
                'area' => '5.822,1',
                'populacao2014' => '2.867.869',
                'densidade2005' => '400,73',
                'pib2015' => '215.613.000',
                'pibpercentual' => '3,6',
                'pibpercapta2015' => '73.971,05',
                'idh2010' => '0,824',
                'alfabetizacao2016' => '0,974',
                'mortalidadeinfantil2016' => '10,5',
                'expectativavida2016' => '78,1'
            ),
            array(
                'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/4/43/Bandeira_do_Esp%C3%ADrito_Santo.svg',
                'uf' => 'Espírito Santo',
                'sigla' => 'ES',
                'sedeadministrativa' => 'Vitória',
                'area' => '46.077,5',
                'populacao2014' => '3.894.899',
                'densidade2005' => '73,97',
                'pib2015' => '120.363.000',
                'pibpercentual' => '2',
                'pibpercapta2015' => '30.627,45',
                'idh2010' => '0,74',
                'alfabetizacao2016' => '0,938',
                'mortalidadeinfantil2016' => '8,8',
                'expectativavida2016' => '78,2'
            ),
            array(
                'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/b/be/Flag_of_Goi%C3%A1s.svg',
                'uf' => 'Goiás',
                'sigla' => 'GO',
                'sedeadministrativa' => 'Goiânia',
                'area' => '340.086,7',
                'populacao2014' => '6.551.322',
                'densidade2005' => '16,52',
                'pib2015' => '173.632.000',
                'pibpercentual' => '2,9',
                'pibpercapta2015' => '26.265,32',
                'idh2010' => '0,735',
                'alfabetizacao2016' => '0,935',
                'mortalidadeinfantil2016' => '14,9',
                'expectativavida2016' => '74,2'
            ),
            array(
                'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/4/45/Bandeira_do_Maranh%C3%A3o.svg',
                'uf' => 'Maranhão',
                'sigla' => 'MA',
                'sedeadministrativa' => 'São Luís',
                'area' => '331.983,3',
                'populacao2014' => '6.861.924',
                'densidade2005' => '18,38',
                'pib2015' => '78.475.000',
                'pibpercentual' => '1,3',
                'pibpercapta2015' => '11.366,23',
                'idh2010' => '0,639',
                'alfabetizacao2016' => '0,833',
                'mortalidadeinfantil2016' => '21,3',
                'expectativavida2016' => '70,6'
            ),
            array(
                'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/0/0b/Bandeira_de_Mato_Grosso.svg',
                'uf' => 'Mato Grosso',
                'sigla' => 'MT',
                'sedeadministrativa' => 'Cuiabá',
                'area' => '903.357,9',
                'populacao2014' => '3.236.578',
                'densidade2005' => '3,1',
                'pib2015' => '107.418.000',
                'pibpercentual' => '1,8',
                'pibpercapta2015' => '32.894,96',
                'idh2010' => '0,725',
                'alfabetizacao2016' => '0,935',
                'mortalidadeinfantil2016' => '16,9',
                'expectativavida2016' => '74,2'
            ),
            array(
                'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/6/64/Bandeira_de_Mato_Grosso_do_Sul.svg',
                'uf' => 'Mato Grosso do Sul',
                'sigla' => 'MS',
                'sedeadministrativa' => 'Campo Grande',
                'area' => '357.125,0',
                'populacao2014' => '2.630.098',
                'densidade2005' => '6,34',
                'pib2015' => '83.082.000',
                'pibpercentual' => '1,4',
                'pibpercapta2015' => '31.337,22',
                'idh2010' => '0,729',
                'alfabetizacao2016' => '0,937',
                'mortalidadeinfantil2016' => '14,0',
                'expectativavida2016' => '75,5'
            ),
            array(
                'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/f/f4/Bandeira_de_Minas_Gerais.svg',
                'uf' => 'Minas Gerais',
                'sigla' => 'MG',
                'sedeadministrativa' => 'Belo Horizonte',
                'area' => '586.528,3',
                'populacao2014' => '20.777.672',
                'densidade2005' => '32,79',
                'pib2015' => '519.326.000',
                'pibpercentual' => '8,7',
                'pibpercapta2015' => '24.884,94',
                'idh2010' => '0,731',
                'alfabetizacao2016' => '0,938',
                'mortalidadeinfantil2016' => '10,9',
                'expectativavida2016' => '77,2'
            ),
            array(
                'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/0/02/Bandeira_do_Par%C3%A1.svg',
                'uf' => 'Pará',
                'sigla' => 'PA',
                'sedeadministrativa' => 'Belém',
                'area' => '1.247.689,5',
                'populacao2014' => '8.101.180',
                'densidade2005' => '5,58',
                'pib2015' => '130.883.000',
                'pibpercentual' => '2,2',
                'pibpercapta2015' => '16.009,98',
                'idh2010' => '0,646',
                'alfabetizacao2016' => '0,907',
                'mortalidadeinfantil2016' => '16,6',
                'expectativavida2016' => '72,1'
            ),
            array(
                'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/b/bb/Bandeira_da_Para%C3%ADba.svg',
                'uf' => 'Paraíba',
                'sigla' => 'PB',
                'sedeadministrativa' => 'João Pessoa',
                'area' => '56.439,8',
                'populacao2014' => '3.950.359',
                'densidade2005' => '63,71',
                'pib2015' => '56.140.000',
                'pibpercentual' => '0,9',
                'pibpercapta2015' => '14.133,32',
                'idh2010' => '0,658',
                'alfabetizacao2016' => '0,837',
                'mortalidadeinfantil2016' => '16,1',
                'expectativavida2016' => '73,2'
            ),
            array(
                'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/9/93/Bandeira_do_Paran%C3%A1.svg',
                'uf' => 'Paraná',
                'sigla' => 'PR',
                'sedeadministrativa' => 'Curitiba',
                'area' => '199.314,9',
                'populacao2014' => '11.112.062',
                'densidade2005' => '51,48',
                'pib2015' => '376.960.000',
                'pibpercentual' => '6,3',
                'pibpercapta2015' => '33.768,62',
                'idh2010' => '0,749',
                'alfabetizacao2016' => '0,955',
                'mortalidadeinfantil2016' => '9,3',
                'expectativavida2016' => '77,1'
            ),
            array(
                'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/5/59/Bandeira_de_Pernambuco.svg',
                'uf' => 'Pernambuco',
                'sigla' => 'PE',
                'sedeadministrativa' => 'Recife',
                'area' => '98.311,6',
                'populacao2014' => '9.297.861',
                'densidade2005' => '85,58',
                'pib2015' => '156.955.000',
                'pibpercentual' => '2,6',
                'pibpercapta2015' => '16.795,34',
                'idh2010' => '0,673',
                'alfabetizacao2016' => '0,872',
                'mortalidadeinfantil2016' => '12,7',
                'expectativavida2016' => '73,9'
            ),
            array(
                'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/3/33/Bandeira_do_Piau%C3%AD.svg',
                'uf' => 'Piauí',
                'sigla' => 'PI',
                'sedeadministrativa' => 'Teresina',
                'area' => '251.529,2',
                'populacao2014' => '3.198.185',
                'densidade2005' => '11,95',
                'pib2015' => '39.148.000',
                'pibpercentual' => '0,7',
                'pibpercapta2015' => '12.218,51',
                'idh2010' => '0,646',
                'alfabetizacao2016' => '0,828',
                'mortalidadeinfantil2016' => '19,1',
                'expectativavida2016' => '71,1'
            ),
            array(
                'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/7/73/Bandeira_do_estado_do_Rio_de_Janeiro.svg',
                'uf' => 'Rio de Janeiro',
                'sigla' => 'RJ',
                'sedeadministrativa' => 'Rio de Janeiro',
                'area' => '43.696,1',
                'populacao2014' => '16.497.395',
                'densidade2005' => '352,05',
                'pib2015' => '659.137.000',
                'pibpercentual' => '11',
                'pibpercapta2015' => '39.826,95',
                'idh2010' => '0,761',
                'alfabetizacao2016' => '0,973',
                'mortalidadeinfantil2016' => '11,5',
                'expectativavida2016' => '76,2'
            ),
            array(
                'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/3/30/Bandeira_do_Rio_Grande_do_Norte.svg',
                'uf' => 'Rio Grande do Norte',
                'sigla' => 'RN',
                'sedeadministrativa' => 'Natal',
                'area' => '52.796,8',
                'populacao2014' => '3.419.550',
                'densidade2005' => '56,88',
                'pib2015' => '57.250.000',
                'pibpercentual' => '1',
                'pibpercapta2015' => '16.631,86',
                'idh2010' => '0,684',
                'alfabetizacao2016' => '0,853',
                'mortalidadeinfantil2016' => '14,7',
                'expectativavida2016' => '75,7'
            ),
            array(
                'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/6/63/Bandeira_do_Rio_Grande_do_Sul.svg',
                'uf' => 'Rio Grande do Sul',
                'sigla' => 'RS',
                'sedeadministrativa' => 'Porto Alegre',
                'area' => '281.748,5',
                'populacao2014' => '11.228.091',
                'densidade2005' => '38,49',
                'pib2015' => '381.985.000',
                'pibpercentual' => '6,4',
                'pibpercapta2015' => '33.960,36',
                'idh2010' => '0,746',
                'alfabetizacao2016' => '0,968',
                'mortalidadeinfantil2016' => '9,6',
                'expectativavida2016' => '77,8'
            ),
            array(
                'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/f/fa/Bandeira_de_Rond%C3%B4nia.svg',
                'uf' => 'Rondônia',
                'sigla' => 'RO',
                'sedeadministrativa' => 'Porto Velho',
                'area' => '237.576,2',
                'populacao2014' => '1.755.015',
                'densidade2005' => '6,46',
                'pib2015' => '36.563.000',
                'pibpercentual' => '0,6',
                'pibpercapta2015' => '20.677,95',
                'idh2010' => '0,69',
                'alfabetizacao2016' => '0,933',
                'mortalidadeinfantil2016' => '20,0',
                'expectativavida2016' => '71,3'
            ),
            array(
                'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/9/98/Bandeira_de_Roraima.svg',
                'uf' => 'Roraima',
                'sigla' => 'RR',
                'sedeadministrativa' => 'Boa Vista',
                'area' => '224.299,0',
                'populacao2014' => '500.826',
                'densidade2005' => '1,74',
                'pib2015' => '10.354.000',
                'pibpercentual' => '0,2',
                'pibpercapta2015' => '20.476,71',
                'idh2010' => '0,707',
                'alfabetizacao2016' => '0,934',
                'mortalidadeinfantil2016' => '17,2',
                'expectativavida2016' => '71,5'
            ),
            array(
                'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/1/1a/Bandeira_de_Santa_Catarina.svg',
                'uf' => 'Santa Catarina',
                'sigla' => 'SC',
                'sedeadministrativa' => 'Florianópolis',
                'area' => '95.346,2',
                'populacao2014' => '6.734.568',
                'densidade2005' => '61,53',
                'pib2015' => '249.073.000',
                'pibpercentual' => '4,2',
                'pibpercapta2015' => '36.525,28',
                'idh2010' => '0,774',
                'alfabetizacao2016' => '0,972',
                'mortalidadeinfantil2016' => '9,2',
                'expectativavida2016' => '79,1'
            ),
            array(
                'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/2/2b/Bandeira_do_estado_de_S%C3%A3o_Paulo.svg',
                'uf' => 'São Paulo',
                'sigla' => 'SP',
                'sedeadministrativa' => 'São Paulo',
                'area' => '248.209,4',
                'populacao2014' => '44.169.350',
                'densidade2005' => '162,93',
                'pib2015' => '1.939.890.000',
                'pibpercentual' => '32,4',
                'pibpercapta2015' => '43.694,68',
                'idh2010' => '0,783',
                'alfabetizacao2016' => '0,972',
                'mortalidadeinfantil2016' => '9,9',
                'expectativavida2016' => '78,1'
            ),
            array(
                'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/b/be/Bandeira_de_Sergipe.svg',
                'uf' => 'Sergipe',
                'sigla' => 'SE',
                'sedeadministrativa' => 'Aracaju',
                'area' => '21.910,3',
                'populacao2014' => '2.227.294',
                'densidade2005' => '89,81',
                'pib2015' => '38.554.000',
                'pibpercentual' => '0,6',
                'pibpercapta2015' => '17.189,28',
                'idh2010' => '0,665',
                'alfabetizacao2016' => '0,853',
                'mortalidadeinfantil2016' => '16,2',
                'expectativavida2016' => '72,7'
            ),
            array(
                'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/f/ff/Bandeira_do_Tocantins.svg',
                'uf' => 'Tocantins',
                'sigla' => 'TO',
                'sedeadministrativa' => 'Palmas',
                'area' => '277.620,9',
                'populacao2014' => '1.502.759',
                'densidade2005' => '4,7',
                'pib2015' => '28.930.000',
                'pibpercentual' => '0,5',
                'pibpercapta2015' => '19.094,16',
                'idh2010' => '0,699',
                'alfabetizacao2016' => '0,896',
                'mortalidadeinfantil2016' => '15,8',
                'expectativavida2016' => '73,4'
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
                    <th>Alfabetização (2016)</th>
                    <th>Mortalidade Infantil (&permil;) (2016)</th>
                    <th>Expextativa de Vida (anos) (2016)</th>
                </tr>
            </thead>

            <tbody>
                <?php
                foreach ($dados as $estado) {
                    $linha = '<tr>';

                    // Bandeira
                    $linha .= "<td><img src=\"{$estado['bandeira']}\""
                        . " alt=\"Bandeira do {$estado['uf']}\""
                        . " width=\"50\"></td>";

                    // Demais dados
                    

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