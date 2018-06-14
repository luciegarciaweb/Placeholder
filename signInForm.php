<p>Add a new user</p>

<form action="?controller=user&action=signInForm" method="POST">
    <label>Login:   <input type="text" name="login" > </input></label><br><br>
    <label>Email:   <input type="email" name="email" > </input></label><br><br>
    <label>Password:<input type="password" name="password" > </input></label><br><br>
    <!--comparer les mots de pass-->
    <label>Confirm password:<input type="password" name="confpassword" > </input></label><br>
   <input type="submit" id="submit">
    <!--boîte d'alerte pour dire qu'il est bien enregistrer: "merci, veuillez vous connecter"-->
</form>

