<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2013 XXXXX
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('NL NL', 'Dutch', 'Dutch', array(

	// Dictionary entries go here
	
	
	
	'Errors/LeisurePass/ValueOfChecksTooHigh' => 'Fout: de totale waarde van de cheques zou hoger liggen dan de waarde van de pas.',
	 
	
	// Actual Leisure Pass
	'LeisurePass:info' => 'Algemene info', 
	
			
	'Class:LeisurePass' => 'Vrijetijdspas',
	'Class:LeisurePass+' => 'Pas die bepaalt hoeveel cheques er uitgeschreven kunnen worden.',
	
	'Class:LeisurePass/Name' => '%1$s - %2$s (%3$s)',
	
	'Class:LeisurePass/Attribute:org_id' => 'Organisatie',
	'Class:LeisurePass/Attribute:org_id+' => 'Organisatie waartoe de klant behoort',
	
	'Class:LeisurePass/Attribute:person_id' => 'Persoon',
	'Class:LeisurePass/Attribute:person_id+' => 'Eigenaar van de pas',
	

	'Class:LeisurePass/Attribute:category' => 'Categorie',
	'Class:LeisurePass/Attribute:category+' => 'Categorie (waarde)',
	'Class:LeisurePass/Attribute:category/Value:2018_000' => 'Categorie A ( EUR 0 )',
	'Class:LeisurePass/Attribute:category/Value:2018_150' => 'Categorie B ( EUR 150 )',
	'Class:LeisurePass/Attribute:category/Value:2018_080' => 'Categorie C ( EUR 80 )',
	
	// Plan for legacy categories: from_year_value
		 
	'Class:LeisurePass/Attribute:LeisureCheck_list' => 'Overzicht cheques',
	'Class:LeisurePass/Attribute:LeisureCheck_list+' => 'Overzicht van de gekoppelde vrijetijdscheques',

	'Class:LeisurePass/Attribute:created' => 'Uitgegeven op',
	'Class:LeisurePass/Attribute:created+' => 'Uitgegeven op',
	
	'Menu:SearchLeisurePass' => 'Zoek vrijetijdspassen',
	'Menu:SearchLeisurePass+' => 'Zoek vrijetijdspassen',
	'Menu:NewLeisurePass' => 'Nieuwe vrijetijdspas',
	'Menu:NewLeisurePass+' => 'Nieuwe vrijetijdspas',
	
	
	
	// Actual Leisure Check
	'LeisureCheck:info' => 'Algemene info', 
	
			
	'Class:LeisureCheck' => 'Vrijetijdscheque',
	'Class:LeisureCheck+' => 'Een vrijetijdscheque bevat info over een gebruikt bedrag van een Vrijetijdspas.',
	
	
	'Class:LeisureCheck/Attribute:pass_id' => 'Vrijetijdspas',
	'Class:LeisureCheck/Attribute:pass_id+' => 'Boeken op deze vrijetijdspas',
	
	'Class:LeisureCheck/Attribute:value' => 'Waarde',
	'Class:LeisureCheck/Attribute:value+' => 'Waarde van deze cheque',
	

	'Class:LeisureCheck/Attribute:objective' => 'Doel',
	'Class:LeisureCheck/Attribute:objective+' => 'Doel van deze check',
	'Class:LeisurePass/Attribute:category/Value:art' => 'Kunst',
	'Class:LeisurePass/Attribute:category/Value:culture' => 'Cultuur',
	'Class:LeisurePass/Attribute:category/Value:sports' => 'Sport',
	'Class:LeisurePass/Attribute:category/Value:youth' => 'Jeugd',
	
	
	'Class:LeisureCheck/Attribute:reason' => 'Reden',
	'Class:LeisureCheck/Attribute:reason+' => 'Reden voor deze cheque',
	
	'Class:LeisureCheck/Attribute:created' => 'Uitgegeven op',
	'Class:LeisureCheck/Attribute:created+' => 'Uitgegeven op',
	
	'Menu:SearchLeisureCheck' => 'Zoek vrijetijdscheques',
	'Menu:SearchLeisureCheck+' => 'Zoek vrijetijdscheques',
	'Menu:NewLeisureCheck' => 'Nieuwe vrijetijdscheque',
	'Menu:NewLeisureCheck+' => 'Nieuwe vrijetijdscheque',
	
));

 



?>


