<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        include "Alunno.php";

        // Creazione di un array di oggetti Alunno
        $alunni = [
            new Alunno("Mario", "Rossi", 16),
            new Alunno("Luca", "Bianchi", 17),
            new Alunno("Anna", "Verdi", 15),
            new Alunno("Giulia", "Neri", 18)
        ];

        // Stampa di ogni alunno
        foreach ($alunni as $alunno) {
            $alunno->stampaAlunno();
        }

    ?>

</body>
</html>