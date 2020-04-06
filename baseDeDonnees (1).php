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
            <section id="tableau">
                <ul id="entrées">
                    <h3> Entrées</h3>
                    <li><form action="AjouterMenu/ajouterEntree.php" method="post">
                             <input type="text" name="entree" value="Entrée?"onFocus="javascript:this.value=''" onBlur="javascript:if (this.value==''){this.value='Entrée?'}"/>
                             <input type="text" name="stock_entree" value="0"  style="width:30px"/>
                             <input class="bouton" type="submit" value="Ajouter entrée"/>
                        </form>
                    </li>
                    <li> test 1 entrée</li>
                    <li> test 1 entrée</li>
                    <li> test 1 entrée</li>
                </ul>
                
                <ul id="plats">
                    <h3> Plats </h3>
                    <li> <form action="AjouterMenu/ajouterPlat.php" method="post">
                             <input type="text" name="plat" value="Plat?" onFocus="javascript:this.value=''" onBlur="javascript:if (this.value==''){this.value='Plat?'}"/>
                             <input type="text" name="stock_plat" value="0"  style="width:30px"/>
                             <input class="bouton" type="submit" value="Ajouter plat"/>
                        </form>
                    </li>
                    <li> test 1 entrée</li>
                    <li> test 1 entrée</li>
                    <li> test 1 entrée</li>
                </ul>
                
                <ul id="fromages">
                    <h3> Fromages</h3>
                    <li> <form action="AjouterMenu/ajouterFromage.php" method="post">
                             <input type="text" name="fromage" value="Fromage?" onFocus="javascript:this.value=''" onBlur="javascript:if (this.value==''){this.value='Fromage?'}"/>
                             <input type="text" name="stock_fromage" value="0" style="width:30px"/>
                             <input class="bouton" type="submit" value="Ajouter fromage"/>
                        </form>
                    </li>
                    <li> test 1 entrée</li>
                    <li> test 1 entrée</li><li> test 1 entrée</li>
                    <li> test 1 entrée</li>
                </ul>
                
                <ul id="desserts">
                    <h3> Desserts</h3>
                    <li>
                        <form action="AjouterMenu/ajouterDessert.php" method="post">
                             <input type="text" name="dessert" value="Dessert?" onFocus="javascript:this.value=''" onBlur="javascript:if (this.value==''){this.value='Dessert?'}"/>
                             <input type="text" name="stock_dessert" value="0"  style="width:30px"/>
                             <input class="bouton" type="submit" value="Ajouter dessert"/>
                        </form>
                    </li>
                    <li> test 1 entrée</li>
                    <li> test 1 entrée</li>
                    <li> test 1 entrée</li>
                    
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
    border:3px black solid;
    width:100vw;
    height:inherit;
}
#tableau ul
{
    margin:0 auto;
    border-left:2px black solid;
    border-right:2px black solid;
    border-bottom:2px black solid;
    width:100%;
    text-align:center;
    padding-left:0;
    list-style-type:none;
}
#tableau h3
{
    font-weight:400;
    border-bottom:2px black solid;
    margin:2% auto;
}
#tableau li
{
    margin:2% auto;
    border-bottom:1px black solid;
}
</style>