<?php
    $valor1 = $_POST['txtval1'];
    $valor2 = $_POST['txtval2'];

    $res = $valor1 + $valor2;
    echo "<style>
            h1{
                color: #ff006a;
                size:20%; }
            a{
                width:100px;
                background-color:#127fd6;
                color:#fff;
            }
            
            </style>";
    echo "<center>";
    echo "<h1>A soma dos números é $res</h1>";
    echo "<br/>";
    echo "<a href='calculadoraS.html'>Voltar</a>";
    echo "</center>";
?>