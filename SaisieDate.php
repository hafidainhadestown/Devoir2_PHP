<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Index</title>
</head>
<style>
    form
    {
        text-align:center;
    }
    h2{
        text-align: center;
    }
</style>

<body>
<h2>
    Choisir une date
</h2>
<form action="ValideDate.php" method="post">
    <p>
        <label for="date">Date </label> :   <input type="date"  name="date" id="date"/><br />
        <input type="submit" value="Envoyer" />
    </p>
</form>




</body>
</html>