<?php

/*
    ============Etape 1 : 
    $pdo=new PDO("mysql:host=xxx;dbname=xxx","","");
    //chaine 1 : 
    mysql:host=localhost;dbname=nomBase
    //chaine 2 :
    nomuser
    //chaine 3 :
    pass
    ============Etape2 :
    $stm=$pdo->prepare("req");
    ============Etape 3:

    $stm->execute();
    ===================Vérification 
    $stm->rowCount();
    ===================Selection des données
    $res=$stm->fetchALL(PDO::FETCH_ASSOC);
    
    ===============spplimentaire : redirection 
    header("location:page.html");
*/



?>
