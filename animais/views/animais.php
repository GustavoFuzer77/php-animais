<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animais</title>
</head>

<body>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }

        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>
    <?php

    var_dump($data)

        ?>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Raça</th>
                <th>Idade</th>
                <th>Proprietário</th>
                <th>Vacinas</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Buddy</td>
                <td>Golden Retriever</td>
                <td>3 anos</td>
                <td>João Silva</td>
                <td>V8, Antirrábica</td>
            </tr>
            <tr>
                <td>Luna</td>
                <td>Shih Tzu</td>
                <td>4 anos</td>
                <td>Maria Santos</td>
                <td>V8, Giardia</td>
            </tr>
            <tr>
                <td>Toto</td>
                <td>Poodle</td>
                <td>2 anos</td>
                <td>Paulo Souza</td>
                <td>V10, Antirrábica</td>
            </tr>
            <tr>
                <td>Maggie</td>
                <td>Border Collie</td>
                <td>1 ano</td>
                <td>Luana Oliveira</td>
                <td>V10, Giardia, Tosse dos Canis</td>
            </tr>
        </tbody>
    </table>
</body>

</html>