<?php
 include_once '../header.php';
?>
    
    <!-- Sign form -->
    <section class = "signup-form">
    <div class  = "signup">
        <!-- <img class ="avatar" src="../img/Logo.png" alt = "logo"> -->
       
        <h1> Create a Account </h1>

        <form action ="../includes/signup.inc.php" method ="post">
            <!--name -->
            <label for = "name">Name</label>
            <input type = "text" name = "name" placeholder ="Enter your name"  required>
            
            <!--email -->
            <label for = "email">E-mail</label>
            <input type = "text" name = "email" placeholder ="Enter your Email"  required>
            
            <!--username-->
            <label for = "userID">UserID</label>
            <input type ="text" name = "ID" placeholder = "Enter User ID"  required>

            <!--password-->
            <label for = "password">Password</label>
            <input type="password" name = "password" placeholder = "Enter Password" required value>

            <!-- repeat password-->
            <label for = "password">Confirm Password</label>
            <input type ="password" name = "passwordconfirm" placeholder = "Confirm Password" required value>
            
            <!--Boton-->
            <button type="submit" name="submit">　Sign Up　</button>
        </form>
        </div>
    </section>


<?php
 include_once '../footer.php';
?>