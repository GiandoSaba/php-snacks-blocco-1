<!-- Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

<?php

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .green-rectangle {
            border: 2px solid lightgreen;
        }

        .grey-rectangle {
            border: 2px solid grey;
        }
    </style>
</head>

<body>
    <ul class="grey-rectangle">
        <?php
        foreach ($db as $teachers => $value) {
            foreach ($value as $teacher) {
                echo '<li>' . $teacher['name'] . ' ' . $teacher['lastname'] . '</li>';
            }
        }
        ?>
    </ul>
    <ul class="green-rectangle">
        <?php
        foreach ($db as $pm => $value) {
            foreach ($value as $pm) {
                echo '<li>' . $pm['name'] . ' ' . $pm['lastname'] . '</li>';
            }
        }
        ?>
    </ul>
</body>

</html>