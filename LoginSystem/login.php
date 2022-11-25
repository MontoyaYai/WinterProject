<?php
 include_once '../header.php';
?>
    <!-- login form -->
    <div class = "login-box">
        <img class ="avatar" src="../img/Logo.png" alt = "logo">
        <h1> Login here </h1>

        <form action ="../includes/login.inc.php" method ="post">
            <!--username-->
            <label for = "name">UserID</label>
            <input type = "text" name = "name" placeholder ="Enter User or E-mail" required>

            <!--password-->
            <label for = "Password">Password</label>
            <input type ="password" placeholder = "Enter Password" name = "password" required value>

            <!--Boton-->
            <button type="submit" value ="Login">　　Log in　　</button><br><br>
            <a href="#">Lost Password</a><br>
            <a href="#">Don't have account</a>
        </form>
<?php
 include_once '../footer.php';
?>