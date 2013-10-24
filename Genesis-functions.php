
     // Remove Custom Menu support
		remove_theme_support ( 'genesis-menus' );

     // Default Menus: registers menus
		add_theme_support ( 'genesis-menus' , array ( 
		'primary' => 'Primary Navigation Menu' , 
		'secondary' => 'Secondary Navigation Menu' ,
		'subnavone' => 'Sub Menu A' ,
		'subnavtwo' => 'Sub Menu B' ,
		'subnavthree' => 'Sub Menu C' ,
		'subnavfour' => 'Sub Menu D' 
		) );
