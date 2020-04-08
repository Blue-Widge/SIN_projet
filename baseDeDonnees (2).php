<?php
    session_start();
    if (!isset($_SESSION['id']))
    {
        header('Location: Accueil.php');
    }
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=id12795532_projet;charset=utf8', 'id12795532_root','PROJET');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Base de donnéees</title>
        <meta charset="utf8"/>
        <link rel="stylesheet" href="styleBDD.css"/>
    </head>
    <body >
        <header> 
		<div style="margin-top:1%; margin-bottom:1%;">
			<img src="assets/haut.PNG" 	   alt="header"    width="30%">
			<img src="assets/logoPdlL.png" alt="logo PdlL" width="15%" style="float:right">
		</div>

		<nav>
			<ul>
				<li>RESTAURANT SCOLAIRE</li>
				
				<li> 					
					Accueil
				</li>		
						<a href="baseDeDonnees.php"><li>Base de données</li> </a>			
						<p style="font-size:1.5vw; margin:auto"> Bien le bonjour, <strong style="color:red;"> intendant(e) </strong> ! <a style="font-size:1vw; color:white; text-decoration: underline;" href="deconnexion.php">Se deconnecter</a></p> 
			</ul>
		</nav>	
	</header>	
        <main style="height:100%">
            <section id="tableau">
                <ul id="entrées">
                    <h3> Entrées</h3>
                    <li><form action="AjouterMenu/ajouterEntree.php" method="post">
                             <input type="text" name="entree" value="Entrée?"onFocus="javascript:this.value=''" onBlur="javascript:if (this.value==''){this.value='Entrée?'}"/>
                             <input type="text" name="stock_entree" value="0"  style="width:30px"/>
                             <input class="bouton" type="submit" value="Ajouter entrée"/>
                        </form>
                    </li>
                     <?php
                            $req=$bdd->query('SELECT * FROM entrées');
                            while($donnees=$req->fetch())
                            {
                                if ($donnees['stock']<0)
                                {
                                    $del=$bdd->prepare('DELETE FROM entrées WHERE id=?');
                                    $del->execute(array($donnees['id']));
                                }
                                else
                                {?>
                                <li id="entrée<?php echo $donnees['id']?>"style="font-size:12px;"><div style="overflow:auto; max-width:24vw; margin-top:0"> <?php echo $donnees['entrée'].' x'.$donnees['stock']; ?> </div>
                                        <div style="display:flex;"><form method="post" action="ModifStock/less.php">
                                             <input style="visibility: hidden; width:0"type="text" name="Quoi" value="entree<?php echo $donnees['id']?>"/>
                                            <input type="submit" value="-1" style=" width:2vw;"/>
                                        </form>
                                         
                                        <form method="post" action="ModifStock/more.php" style="margin-bottom:0">
                                             <input style="visibility: hidden; width:0"type="text" name="Quoi" value="entree<?php echo $donnees['id']?>"/>
                                            <input type="submit" value="+1" style="text-align:left; width:2vw;"/>
                                        </form>
                                        
                                        <form method="post" action="ModifStock/delete.php" style="margin-bottom:0">
                                             <input style="visibility: hidden; width:0"type="text" name="Quoi" value="entree<?php echo $donnees['id']?>"/>
                                            <input type="submit" value="retirer" style="width:10vw;"/>
                                        </form>
                                        </div>
                                </li>
                                
                            <?php }}
                            $req->closeCursor();
                        ?>
                </ul>
                
                <ul id="plats">
                    <h3> Plats </h3>
                    <li> <form action="AjouterMenu/ajouterPlat.php" method="post">
                             <input type="text" name="plat" value="Plat?" onFocus="javascript:this.value=''" onBlur="javascript:if (this.value==''){this.value='Plat?'}"/>
                             <input type="text" name="stock_plat" value="0"  style="width:30px"/>
                             <input class="bouton" type="submit" value="Ajouter plat"/>
                        </form>
                    </li>
                    <?php
                            $req=$bdd->query('SELECT * FROM plats');
                            while($donnees=$req->fetch())
                            {
                                if ($donnees['stock']<0)
                                {
                                    $del=$bdd->prepare('DELETE FROM plats WHERE id=?');
                                    $del->execute(array($donnees['id']));
                                }
                                else
                                {?>
                                <li id="plat<?php echo $donnees['id']?>"style="font-size:12px;"><div style="overflow:auto; max-width:24vw; margin-top:0"> <?php echo $donnees['plat'].' x'.$donnees['stock']; ?> </div>
                                        <div style="display:flex;"><form method="post" action="ModifStock/less.php" style="">
                                             <input style="visibility: hidden; width:0"type="text" name="Quoi" value="plat<?php echo $donnees['id']?>"/>
                                            <input type="submit" value="-1" style=" width:2vw;"/>
                                        </form>
                                         
                                        <form method="post" action="ModifStock/more.php" style="margin-bottom:0">
                                             <input style="visibility: hidden; width:0"type="text" name="Quoi" value="plat<?php echo $donnees['id']?>"/>
                                            <input type="submit" value="+1" style="text-align:left; width:2vw;"/>
                                        </form>
                                        
                                        <form method="post" action="ModifStock/delete.php" style="margin-bottom:0">
                                             <input style="visibility: hidden; width:0"type="text" name="Quoi" value="plat<?php echo $donnees['id']?>"/>
                                            <input type="submit" value="retirer" style="width:10vw;"/>
                                        </form>
                                        </div>
                                </li>
                                
                            <?php }}
                            $req->closeCursor();
                        ?>
                </ul>
                
                <ul id="fromages">
                    <h3> Fromages</h3>
                    <li> <form action="AjouterMenu/ajouterFromage.php" method="post">
                             <input type="text" name="fromage" value="Fromage?" onFocus="javascript:this.value=''" onBlur="javascript:if (this.value==''){this.value='Fromage?'}"/>
                             <input type="text" name="stock_fromage" value="0" style="width:30px"/>
                             <input class="bouton" type="submit" value="Ajouter fromage"/>
                        </form>
                    </li>
                     <?php
                            $req=$bdd->query('SELECT * FROM fromages');
                            while($donnees=$req->fetch())
                            {
                                if ($donnees['stock']<0)
                                {
                                    $del=$bdd->prepare('DELETE FROM fromages WHERE id=?');
                                    $del->execute(array($donnees['id']));
                                }
                                else
                                {?>
                                <li id="fromage<?php echo $donnees['id']?>"style="font-size:12px;"><div style="overflow:auto; max-width:24vw; margin-top:0"> <?php echo $donnees['fromage'].' x'.$donnees['stock']; ?> </div>
                                        <div style="display:flex;"><form method="post" action="ModifStock/less.php">
                                             <input style="visibility: hidden; width:0"type="text" name="Quoi" value="fromage<?php echo $donnees['id']?>"/>
                                            <input type="submit" value="-1" style=" width:2vw;"/>
                                        </form>
                                         
                                        <form method="post" action="ModifStock/more.php" style="margin-bottom:0">
                                             <input style="visibility: hidden; width:0"type="text" name="Quoi" value="fromage<?php echo $donnees['id']?>"/>
                                            <input type="submit" value="+1" style="text-align:left; width:2vw;"/>
                                        </form>
                                        
                                        <form method="post" action="ModifStock/delete.php" style="margin-bottom:0">
                                             <input style="visibility: hidden; width:0"type="text" name="Quoi" value="fromage<?php echo $donnees['id']?>"/>
                                            <input type="submit" value="retirer" style="width:10vw;"/>
                                        </form>
                                        </div>
                                </li>
                                
                            <?php }}
                            $req->closeCursor();
                        ?>
                </ul>
                
                <ul id="desserts" style="border-right:3px black solid;">
                    <h3> Desserts</h3>
                    <li>
                        <form action="AjouterMenu/ajouterDessert.php" method="post">
                             <input type="text" name="dessert" value="Dessert?" onFocus="javascript:this.value=''" onBlur="javascript:if (this.value==''){this.value='Dessert?'}"/>
                             <input type="text" name="stock_dessert" value="0"  style="width:30px"/>
                             <input class="bouton" type="submit" value="Ajouter dessert"/>
                        </form>
                    </li>
                     <?php
                            $req=$bdd->query('SELECT * FROM desserts');
                            while($donnees=$req->fetch())
                            {
                                if ($donnees['stock']<0)
                                {
                                    $del=$bdd->prepare('DELETE FROM desserts WHERE id=?');
                                    $del->execute(array($donnees['id']));
                                }
                                else
                                {?>
                                <li id="dessert<?php echo $donnees['id']?>"style="font-size:12px;"><div style="overflow:auto; max-width:24vw; margin-top:0"> <?php echo $donnees['dessert'].' x'.$donnees['stock']; ?> </div>
                                        <div style="display:flex;"><form method="post" action="ModifStock/less.php">
                                             <input style="visibility: hidden; width:0"type="text" name="Quoi" value="dessert<?php echo $donnees['id']?>"/>
                                            <input type="submit" value="-1" style=" width:2vw;"/>
                                        </form>
                                         
                                        <form method="post" action="ModifStock/more.php" style="margin-bottom:0">
                                             <input style="visibility: hidden; width:0"type="text" name="Quoi" value="dessert<?php echo $donnees['id']?>"/>
                                            <input type="submit" value="+1" style="text-align:left; width:2vw;"/>
                                        </form>
                                        
                                        <form method="post" action="ModifStock/delete.php" style="margin-bottom:0">
                                             <input style="visibility: hidden; width:0"type="text" name="Quoi" value="dessert<?php echo $donnees['id']?>"/>
                                            <input type="submit" value="retirer" style="width:10vw;"/>
                                        </form>
                                        </div>
                                </li>
                                
                            <?php }}
                            $req->closeCursor();
                        ?>
                </ul>
            </section>
        </main>
    </body>
</html>
<style>
body
{
    font-family:"Segoe UI"
}
nav
{
    background-color:#662f90;
    margin:2% auto 0 auto;
    width:90%;
    color:white;
}
nav ul
{
	display:flex;
	justify-content:space-around;
	list-style-type:none;
	font-weight:bold;
	font-size:1.8vw;
}

nav ul li
{
	margin:auto;
	text-align:center;
}
a
{
    text-decoration:none;
    color:white;
}

#tableau
{
    display : flex;
    width:100%;
}
#tableau ul
{
    margin:0 auto;
    border-top:3px black solid;
    border-left:3px black solid;
    width:100%;
    text-align:center;
    padding-left:0;
    list-style-type:none;
}
#tableau h3
{
    font-weight:600;
    border-bottom:2px black solid;
    margin:2% auto;
    font-size:18px;
}
#tableau li
{
    font-size:14px;
    margin:2% auto;
}
#tableau li:nth-child(2n+1)
{
    background-color:rgb(200,200,200);
}
#tableau input
{
    max-width:20vw;   
}
</style>