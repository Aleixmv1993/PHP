<!DOCTYPE>
<head>
<title>Exercici9</title>
</head>

<body>

<table>

<?php
    $directory="fotos";
    $dirint = dir($directory);
    while (($archivo = $dirint->read()) !== false)
    {
        if (eregi("gif", $archivo) || eregi("jpg", $archivo) || eregi("png", $archivo)){
            echo '<td><tr><img src="'.$directory."/".$archivo.'">'."\n"."</tr><td>";
        }
    }
    $dirint->close();
?>
</table>
</body>
</html>