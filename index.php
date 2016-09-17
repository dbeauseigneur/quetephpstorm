<!DOCUMENT html>
<html>

<head>
    <meta charset="utf-8" name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Quete PHP Storm</title>
</head>

<body>

<table>
    <tr>
        <th>Etudiant</th>
        <th>Age</th>
    </tr>
    <?php
    $students = [
        "Emmanuel"  => 42,
        "Thierry"   => 51,
        "Pascal"    => 45,
        "Eric"      => 48,
        "Nicolas"   => 19
    ];
    $nbstudents =0;
    $agetot = 0;
    foreach ($students as $cle => $value) {
        echo "<tr> \n";
        echo "<td>" . $cle . "</td>" . "<td>" . $value . "</td>";
        $agetot += $value;
        $nbstudents += 1;
        echo "</tr> \n";
    }
    echo "<tr> \n";
    echo "<td>" . "moyenne" . "</td>" . "<td>" . ($agetot/$nbstudents) . "</td>";
    echo "</tr> \n";
    ?>

</table>

</body>