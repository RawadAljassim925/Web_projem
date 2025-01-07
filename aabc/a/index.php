
<!DOCTYPE html>
<html>
    <head>
        <title>
         Login
        </title>
        <link rel="stylesheet" type="text/css" href="a.css">
    <body> 
        <div id="singup">
            <form action="gir.php" method="post">
             <h1 id="h1"> giriş yapmak </h1>

             <?php if (isset($_GET['error'])) { ?>
                <p id="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>

             <input id="input" type="text" name="uname" placeholder="Kullanıcı adı">
             <br>
             <br>
             <input  id="input" type="password" name="password" placeholder="şifre">
             <br>
             <br>
             <button id="b" type="submit" >giriş</button>
             <br>
             <br>
             <p id="p">
                Hesabınız yok mu?
                <a href="#a">üye Ol
             </p>
            </form>
        </div>

    </body>
</html>
