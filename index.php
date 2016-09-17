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
    $students[0]["nom"] = "Emmanuel";
    $students[0]["age"] = 42;
    $students[1]["nom"] = "Thierry";
    $students[1]["age"] = 51;
    $students[2]["nom"] = "Pascal";
    $students[2]["age"] = 45;
    $students[3]["nom"] = "Eric";
    $students[3]["age"] = 48;
    $students[4]["nom"] = "Nicolas";
    $students[4]["age"] = 19;
    $nbstudents = count($students);
    $agetot = 0;
    for ($i = 0; $i < $nbstudents; $i++) {
        echo "<tr> \n";
        echo "<td>" . $students[$i]["nom"] . "</td>" . "<td>" . $students[$i]["age"] . "</td>";
        $agetot += $students[$i]["age"];
        echo "</tr> \n";
    }
    echo "<tr> \n";
    echo "<td>" . "moyenne" . "</td>" . "<td>" . ($agetot/$nbstudents) . "</td>";
    echo "</tr> \n";
    ?>

</table>

</body>