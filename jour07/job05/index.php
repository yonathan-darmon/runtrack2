<?php
session_start();
if(isset($_GET['reset'])){
    unset($_SESSION['plateau']);
}
if (!isset($_SESSION['plateau'])) {
    $_SESSION ['plateau'] = [
        [0, 0, 0],
        [0, 0, 0],
        [0, 0, 0]
    ];
}
if (!isset($_SESSION['tour'])){
    $_SESSION['tour'] = true;
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
<table border="8px">
    <form action="#" method="get">
        <tr>
            <td><?php
                if ($_SESSION['plateau'][0][0] === 1) {
                    echo 'X';
                } elseif ($_SESSION['plateau'][0][0] === 2) {
                    echo 'O';
                }

                if (isset($_GET['hg']) && $_SESSION['tour']===true && $_SESSION['plateau'][0][0]==0) {
                    $_SESSION['plateau'][0][0] = 1;
                    echo 'X';
                    $_SESSION['tour'] = false;
                    var_dump($_SESSION['tour']);
                }

                elseif (isset($_GET['hg'])&& $_SESSION['tour']===false && $_SESSION['plateau'][0][0]==0) {
                    $_SESSION['plateau'][0][0] = 2;
                    echo 'X';
                    $_SESSION['tour'] = true;

                } elseif (!isset($_GET['hg']) && $_SESSION['plateau'][0][0] === 0) {
                    echo '<input type="submit" value="-" name="hg">';
                }


                ?></td>
            <td><?php
                
                if ($_SESSION['plateau'][0][1] === 1) {
                    echo 'X';
                } elseif ($_SESSION['plateau'][0][1] === 2) {
                    echo 'O';
                }

                if (isset($_GET['hc'])&& $_SESSION['tour']===true && $_SESSION['plateau'][0][1]==0) {
                    $_SESSION['plateau'][0][1] = 1;
                    echo 'X';
                    $_SESSION['tour'] = false;

                } 
                elseif (isset($_GET['hc'])&& $_SESSION['tour']===false && $_SESSION['plateau'][0][1]==0) {
                    $_SESSION['plateau'][0][1] = 2;
                    echo 'X';
                    $_SESSION['tour'] = true;
                }
                elseif (!isset($_GET['hc']) && $_SESSION['plateau'][0][1] === 0) {
                    echo '<input type="submit" value="-" name="hc">';
                }


                ?></td>
            <td><?php
                if ($_SESSION['plateau'][0][2] === 1) {
                    echo 'X';
                } elseif ($_SESSION['plateau'][0][2] === 2) {
                    echo 'O';
                }

                if (isset($_GET['hd'])&& $_SESSION['tour']===true && $_SESSION['plateau'][0][2]==0) {
                    $_SESSION['plateau'][0][2] = 1;
                    echo 'X';
                    $_SESSION['tour'] = false;

                } 
                elseif (isset($_GET['hd'])&& $_SESSION['tour']===false && $_SESSION['plateau'][0][2]==0) {
                    $_SESSION['plateau'][0][2] = 2;
                    echo 'X';
                    $_SESSION['tour'] = true;
                }
                elseif (!isset($_GET['hd']) && $_SESSION['plateau'][0][2] === 0) {
                    echo '<input type="submit" value="-" name="hd">';
                }


                ?></td>
        </tr>
        <tr>
            <td><?php
                if ($_SESSION['plateau'][1][0] === 1) {
                    echo 'X';
                } elseif ($_SESSION['plateau'][1][0] === 2) {
                    echo 'O';
                }

                if (isset($_GET['cg'])&& $_SESSION['tour']===true && $_SESSION['plateau'][1][0]==0) {
                    $_SESSION['plateau'][1][0] = 1;
                    echo 'X';
                    $_SESSION['tour'] = false;

                }
                elseif (isset($_GET['cg'])&& $_SESSION['tour']===false && $_SESSION['plateau'][1][0]==0) {
                    $_SESSION['plateau'][1][0] = 2;
                    echo 'X';
                    $_SESSION['tour'] = true;
                }
                elseif (!isset($_GET['cg']) && $_SESSION['plateau'][1][0] === 0) {
                    echo '<input type="submit" value="-" name="cg">';
                }


                ?></td>
            <td><?php
                if ($_SESSION['plateau'][1][1] === 1) {
                    echo 'X';
                } elseif ($_SESSION['plateau'][1][1] === 2) {
                    echo 'O';
                }

                if (isset($_GET['cc'])&& $_SESSION['tour']===true && $_SESSION['plateau'][1][1]==0) {
                    $_SESSION['plateau'][1][1] = 1;
                    echo 'X';
                    $_SESSION['tour'] = false;

                } 
                elseif (isset($_GET['cc'])&& $_SESSION['tour']===false && $_SESSION['plateau'][1][1]==0) {
                    $_SESSION['plateau'][1][1] = 2;
                    echo 'X';
                    $_SESSION['tour'] = true;
                }
                elseif (!isset($_GET['cc']) && $_SESSION['plateau'][1][1] === 0) {
                    echo '<input type="submit" value="-" name="cc">';
                }


                ?></td>
            <td><?php
                if ($_SESSION['plateau'][1][2] === 1) {
                    echo 'X';
                } elseif ($_SESSION['plateau'][1][2] === 2) {
                    echo 'O';
                }

                if (isset($_GET['cd'])&& $_SESSION['tour']===true && $_SESSION['plateau'][1][2]==0) {
                    $_SESSION['plateau'][1][2] = 1;
                    echo 'X';
                    $_SESSION['tour'] = false;

                } 
                elseif (isset($_GET['cd'])&& $_SESSION['tour']===false && $_SESSION['plateau'][1][2]==0) {
                    $_SESSION['plateau'][1][2] = 2;
                    echo 'X';
                    $_SESSION['tour'] = true;
                }
                elseif (!isset($_GET['cd']) && $_SESSION['plateau'][1][2] === 0) {
                    echo '<input type="submit" value="-" name="cd">';
                }


                ?></td>
        </tr>
        <tr>
            <td><?php
                if ($_SESSION['plateau'][2][0] === 1) {
                    echo 'X';
                } elseif ($_SESSION['plateau'][2][0] === 2) {
                    echo 'O';
                }

                if (isset($_GET['bg'])&& $_SESSION['tour']===true && $_SESSION['plateau'][2][0]==0) {
                    $_SESSION['plateau'][2][0] = 1;
                    echo 'X';
                    $_SESSION['tour'] = false;

                } 
                elseif (isset($_GET['bg'])&& $_SESSION['tour']===false && $_SESSION['plateau'][2][0]==0) {
                    $_SESSION['plateau'][2][0] = 2;
                    echo 'X';
                    $_SESSION['tour'] = true;
                }
                elseif (!isset($_GET['bg']) && $_SESSION['plateau'][2][0] === 0) {
                    echo '<input type="submit" value="-" name="bg">';
                }


                ?></td>
            <td><?php
                if ($_SESSION['plateau'][2][1] === 1) {
                    echo 'X';
                } elseif ($_SESSION['plateau'][2][1] === 2) {
                    echo 'O';
                }

                if (isset($_GET['bc'])&& $_SESSION['tour']===true && $_SESSION['plateau'][2][1]==0) {
                    $_SESSION['plateau'][2][1] = 1;
                    echo 'X';
                    $_SESSION['tour'] = false;

                } 
                elseif (isset($_GET['bc'])&& $_SESSION['tour']===false && $_SESSION['plateau'][2][1]==0) {
                    $_SESSION['plateau'][2][1] = 2;
                    echo 'X';
                    $_SESSION['tour'] = true;
                }
                elseif (!isset($_GET['bc']) && $_SESSION['plateau'][2][1] === 0) {
                    echo '<input type="submit" value="-" name="bc">';
                }


                ?></td>
            <td><?php
                if ($_SESSION['plateau'][2][2] === 1) {
                    echo 'X';
                } elseif ($_SESSION['plateau'][2][2] === 2) {
                    echo 'O';
                }

                if (isset($_GET['bd'])&& $_SESSION['tour']===true && $_SESSION['plateau'][2][2]==0) {
                    $_SESSION['plateau'][2][2] = 1;
                    echo 'X';
                    $_SESSION['tour'] = false;

                } 
                elseif (isset($_GET['bd'])&& $_SESSION['tour']===false && $_SESSION['plateau'][2][2]==0) {
                    $_SESSION['plateau'][2][2] = 2;
                    echo 'X';
                    $_SESSION['tour'] = true;
                }
                elseif (!isset($_GET['bd']) && $_SESSION['plateau'][2][2] === 0) {
                    echo '<input type="submit" value="-" name="bd">';
                }


                ?></td>
        </tr>
        <input type="submit" value="reset" name="reset">
    </form>
</table>
</body>
</html>