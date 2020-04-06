<php
    include('indentification.php');
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Base de donnéees</title>
        <meta charset="utf8"/>
        <link rel="stylesheet" href="styleBDD.css"/>
    </head>
    <body>
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
        <main>
            <table width="400">
                <thead>
                    <tr>
                        <td>Entrées</td>
                        <td>Plats</td>
                        <td>Fromages</td>
                        <td>Desserts</td>
                    </tr>
                </thead>
                <tbody>
                    <tr style="border-bottom:3px black solid"><th>
                        <form action="AjouterMenu/ajouterEntree.php" method="post">
                             <input type="text" name="entree" value="Entrée?"onFocus="javascript:this.value=''" onBlur="javascript:if (this.value==''){this.value='Entrée?'}"/>
                             <input type="text" name="stock_entree" value="0"  style="width:30px"/>
                             <input class="bouton" type="submit" value="Ajouter entrée"/>
                        </form>
                        </th>
                        <th>
                        <form action="AjouterMenu/ajouterPlat.php" method="post">
                             <input type="text" name="plat" value="Plat?" onFocus="javascript:this.value=''" onBlur="javascript:if (this.value==''){this.value='Plat?'}"/>
                             <input type="text" name="stock_plat" value="0"  style="width:30px"/>
                             <input class="bouton" type="submit" value="Ajouter plat"/>
                        </form>
                        </th>
                        <th>
                        <form action="AjouterMenu/ajouterFromage.php" method="post">
                             <input type="text" name="fromage" value="Fromage?" onFocus="javascript:this.value=''" onBlur="javascript:if (this.value==''){this.value='Fromage?'}"/>
                             <input type="text" name="stock_fromage" value="0" style="width:30px"/>
                             <input class="bouton" type="submit" value="Ajouter fromage"/>
                        </form>
                        </th>
                        <th>
                        <form action="AjouterMenu/ajouterDessert.php" method="post">
                             <input type="text" name="dessert" value="Dessert?" onFocus="javascript:this.value=''" onBlur="javascript:if (this.value==''){this.value='Dessert?'}"/>
                             <input type="text" name="stock_dessert" value="0"  style="width:30px"/>
                             <input class="bouton" type="submit" value="Ajouter dessert"/>
                        </form>
                        </th>
                    </tr>
                    <tr><th>entrée 1 </th><th></th><th></th><th></th></tr>
                    <tr><th></th><th>plats2</th><th></th><th></th></tr>
                    <tr><th></th><th></th><th>fromages3</th><th></th></tr>
                    <tr><th></th><th></th><th></th><th>desserts4</th></tr>
                </tbody>
            </table>
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
</style>