<?php
session_start();
if(!isset($_SESSION['joueur'])){
        $_SESSION['joueur']=true;
}
if(!isset($_SESSION['hd'])){
    $_SESSION['hd']="";
}
if(!isset($_SESSION['cg'])){
    $_SESSION['cg']="";
}
if(!isset($_SESSION['cc'])){
    $_SESSION['cc']="";
}
if(!isset($_SESSION['cd'])){
    $_SESSION['cd']="";
}
if(!isset($_SESSION['bg'])){
    $_SESSION['bg']="";
}
if(!isset($_SESSION['bc'])){
    $_SESSION['bc']="";
}
if(!isset($_SESSION['bd'])){
    $_SESSION['bd']="";
}
function clique($case){
    $affiche="";
    
    if (isset($case) && $_SESSION['joueur']==true){
        $affiche='X';
        $_SESSION['joueur']=false;
    
    }
    elseif(isset($case)&& $_SESSION['joueur']==false){
        $affiche='O';
        $_SESSION['joueur']=true;
    }
    return $affiche;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2px" >
        <tr>
            <td><?php
            
            if(!isset($_SESSION['hg'])){
                $_SESSION['hg']="";
                             echo' <form action="#" method="get">
                            <input type="submit" value="-" name="hg">
                        </form>';
                       
            }
            if(isset($_GET['hg'])&& $_SESSION['hg']!= "X" && $_SESSION['hg']!= "O"){
  
               $_SESSION['hg']= clique($_GET['hg']);
               echo $_SESSION['hg'];

               }

                ?>
            </td>
            <td>
            <?php
            if(!isset($_SESSION['hc'])){
                $_SESSION['hc']="";
                echo' <form action="#" method="get">
                <input type="submit" value="-" name="hc">
            </form>';
            }
               if(isset($_GET['hc'])&& $_SESSION['hc']!= "X" && $_SESSION['hc']!= "O"){
  
               $_SESSION['hc']= clique($_GET['hc']);
               echo $_SESSION['hc'];

               }

                ?>
            </td>
            <td>
                <form action="#" method="get">
                    <input type="submit" value="-" name="hd">
                </form>
            </td>
        </tr>
        <tr>
        <td>
                <form action="#" method="get">
                    <input type="submit" value="-" name="cg">
                </form>
            </td>
            <td>
                <form action="#" method="get">
                    <input type="submit" value="-" name="cc">
                </form>
            </td>
            <td>
                <form action="#" method="get">
                    <input type="submit" value="-" name="cd">
                </form>
            </td>
        </tr>
        <tr>
        <td>
                <form action="#" method="get">
                    <input type="submit" value="-" name="bg">
                </form>
            </td>
            <td>
                <form action="#" method="get">
                    <input type="submit" value="-" name="bc">
                </form>
            </td>
            <td>
                <form action="#" method="get">
                    <input type="submit" value="-" name="bd">
                </form>
            </td>
        </tr>
    </table>
</body>
</html>