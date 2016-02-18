<?php
    // empty JSON
    $method = $_SERVER['REQUEST_METHOD'];
	$food = $_GET['food'];
	$price = $_GET['price'];
    
	if ($method === 'GET') {
		if ($food == 'l' && $price == "10"){
        // answer GET call
        // has to be a PHP array, not a string!
		
        $data = array("Appearence" => '<img src="l10.png" width="30%" height="30%" />', "Match" => "Chianti Classico", "Winery"=>"Borgo Scopeto", "Region" => "Tuscany, Italy", "Price" => "$15", "Year" => "2005", "Description" => "The Chianti Classico is one of the best “bangs for the buck” when it comes to wine. Its $15 price tag makes them one of the most affordable, yet it is fine, and rich in flavour. It is known for its taste of dark cherries and spices. Excellent along side a rack of tender lamb.");
		}
		
		
		else if ($food == 'l' && $price == "40"){
		
		$data = array("Appearence" => '<img src="l40.png" width="30%" height="30%" />', "Match" => "Tinto Pesquera", "Winery"=>"Bodegas A. Fernández", "Region" => "Ribera del Duero, Spain", "Price" => "$50", "Year" => "2009", "Description" => "The Tinto Pesquera wine is known to be an incredibly dark and inky red wine. This is due to the combination of rich blackberry and plum aromas. The Spanish wine is round, and exquisitely rich in flavour. It perfectly compliments a dish of savoury lamb.");
		}
		
		
		else if ($food == 'l' && $price == "80"){
		
		$data = array("Appearence" => '<img src="l80.png" width="30%" height="30%" />', "Match" => "Te Wahi Pinot Noir", "Winery"=>"Cloudy Bay", "Region" => "New Zealand", "Price" => "$85", "Year" => "2011", "Description" => "The Te Wahi Pinot Noir wine is a cherry-based wine that has a subtle sour taste. It has a soft, sweet smell much like that of a rose. It is goes excellently along side a dish of roasted lamb, and compliments the vegetables served on the side.");
		}
		
		
		else if ($food == 'b' && $price == "10"){
		
		$data = array("Appearence" => '<img src="b10.png" width="30%" height="30%" />', "Match" => "Pinotage", "Winery"=>"Villiera", "Region" => "Stellenbosch, South Africa", "Price" => "$20", "Year" => "2007", "Description" => "Known to be South Africa’s signature red wine, Villiera Pinotage is distinct with its dry style, and natural mineral tastes. The wine is rich in flavour and features subtle plum, raspberry and vanilla notes. It goes best along with any kind of delicate steak.");
		}
		
		else if ($food == 'b' && $price == "40"){
		
		$data = array("Appearence" => '<img src="b40.png" width="30%" height="30%" />', "Match" => "St Henri Shiraz", "Winery"=>"Penfolds",  "Region" => "Australia", "Price" => "$70", "Year" => "2008", "Description" => "The St Henri Shiraz wine is a red wine composed of 91% Shiraz and 9% Cabernet Sauvignon. It is known to hold a particularly spicy dark fruit flavour, with a drying edge. This wine is fine and elegant, and goes perfect with any beef steaks.");
		}
		
		else if ($food == 'b' && $price == "80"){
		
		$data = array("Appearence" => '<img src="b80.png" width="30%" height="30%" />', "Match" => "Cathedral", "Winery"=>"Jana Winery", "Region" => "Napa Valley, California", "Price" => "$90", "Year" => "2005", "Description" => "The Cathedral wine is a Californian red wine that has a build of 92% Cabernet Sauvignon, 4% Petit Verdot and 4% Cabernet Franc. The wine is known for its intense, and concentrated fruit flavours. It is deep, and complex. It maintains a good balance between acidity and overall roundness. It’s best served with dryer steaks.");
		}
		
		else if ($food == 's' && $price == "10"){
		
		$data = array("Appearence" => '<img src="s10.png" width="30%" height="30%" />', "Match" => "Monterey Pinot Gris", "Winery"=>"La Crema", "Region" => "Monterey, California", "Price" => "$25", "Year" => "2013", "Description" => "The Monterey Pinot Gris wine is known to be a mature, naturally acidic white wine. Its distinct flavour includes hints of lemon aromas, blended with subtle sweet honey. It is well balanced, with a crisp finish. This Pinot Gris goes beautifully compliments any cold seafood dish that are topped with lemon juice.");
		}
		
		else if ($food == 's' && $price == "40"){
		
		$data = array("Appearence" => '<img src="s40.png" width="30%" height="30%" />', "Match" => "Botrytised Sémillon", "Winery"=>"Chalk Hill", "Region" => "Chalk Hill, Sonoma, California", "Price" => "$50", "Year" => "2008", "Description" => "The Chalk Hill Botrytised Semillon is known to be an extremely sweet white wine, oozing all kinds of rich spicy fruity flavours including apricot, orange and roasted almond. Almost comparable to drinking liquid honey. It is a perfect addition to a flavorful sweet salmon dish.");
		}
		
		else if ($food == 's' && $price == "80"){
		
		$data = array("Appearence" => '<img src="s80.png" width="30%" height="30%" />', "Match" => "Les Clos Grand Chardonnay", "Winery"=>"William Fèvre", "Region" => "Burgundy, France", "Price" => "$95", "Year" => "2005", "Description" => "The Les Clos Grand Chardonnay Wine is one of most well-rounded and balanced white wines out there. It is overwhelmed with its distinct fruity taste and rather thick density. This rich French wine is best served after being aged for 10 years. It goes perfect along side any crab or lobster meals.");
		}
		
		else if ($food == "v" && $price == "10"){
			$data = array("Appearence" => '<img src="v10.png" width="30%" height="30%" />', "Match" => "Shiraz Mourvèdre", "Winery"=>"Penfolds", "Region" => "Australia", "Price" => "$25", "Year" => "2012", "Description" => "The Shiraz Mourvèdre wine is one of the most affordable and popular dry red wines out there. It is known for its fantastic ability to blend all of its flavours together as one. It is slightly spicy, and compliments roasted vegetable dishes, mushrooms, and general earthy flavours.");
		}
		
		else if ($food == "v" && $price == "40"){
			$data = array("Appearence" => '<img src="v40.png" width="30%" height="30%" />', "Match" => "Frog’s Leap Merlot", "Winery"=>"John Williams", "Region" => "Napa Valley, California", "Price" => "$40", "Year" => "2012", "Description" => "The Frog’s Leap Merlot has all the features that you would expect from a classic Merlot wine. It’s damp, and rich with red-fruited aroma flavours. The wine has a deep, balanced and rounded feeling. It would greatly compliment anything from sweet potatoes, grilled vegetables to curry.");
		}
		
		else if ($food == "v" && $price == "80"){
			$data = array("Appearence" => '<img src="v80.png" width="30%" height="30%" />', "Match" => "Bolgheri Montepergoli", "Winery"=>"Enrico Santini", "Region" => "Tuscany, Italy", "Price" => "$90", "Year" => "2004", "Description" => "The Bolgheri Montepergoli wine blends some of the world’s most popular red wine grape varieties to create a dark, deep rounded taste. It is dominated by red fruit such as cherries and red grapes. Its crisp acidity is a great compliment to Mediterranean foods such as pasta with tomato sauce, and roasted vegetables.");
		}
		
		else if ($food == "c" && $price == "10"){
			$data = array("Appearence" => '<img src="c10.png" width="30%" height="30%" />', "Match" => "Los Vascos Sauvignon Blanc", "Winery"=>"Los Vascos", "Region" => "Chile", "Price" => "$15", "Year" => "2014", "Description" => "The Los Vascos Sauvignon Blanc wine is not only affordable, but extremely rich in flavour. It is known for its acidic taste, coming from white peaches, pineapples, lychees, pears, green apples and lime. This white wine is perfect served alongside slightly dryer cheeses like Gruyere.");
		}
		
		else if ($food == "c" && $price == "40"){
			$data = array("Appearence" => '<img src="c40.png" width="30%" height="30%" />', "Match" => "Clos du Bourg Moelleux Chenin Blanc", "Winery"=>"Domaine Huët", "Region" => "Loire Valley, France", "Price" => "$50", "Year" => "2009", "Description" => "The Clos du Bourg Moelleux Chenin Blanc is a dessert wine that is known for its smooth rounded taste. It is sweet, and slightly spicy. The flavours are layered on top of each other in perfect balance and the honey and apricot are easily distinguishable. This wine goes best accompanied with goat cheese.");
		}
		
		else if ($food == "c" && $price == "80"){
			$data = array("Appearence" => '<img src="c80.png" width="30%" height="30%" />', "Match" => "Grand Cru Clos Saint Urbain Rangen de Thann Pinot Gris", "Winery"=>"Domaine Zind-Humbrecht", "Region" => "Alsace, France", "Price" => "$100", "Year" => "100", "Description" => "The Grand Cru Clos Saint Urbain de Thann Pinot Gris wine is known to be a fine elegant wine, that is flavourful and freshly acid. Its flavours include orange zest and other spices. This fruity French wine is to be served with fresh Ricotta cheese, and makes for an exquisitely gourmet appetizer.");
		}



	

    } else {
        // simple error message, only taking GET requests
        $data = array("msg" => "Error: only GET allowed");
    }

    echo json_encode($data, JSON_FORCE_OBJECT);

?>
