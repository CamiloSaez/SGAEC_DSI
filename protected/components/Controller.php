<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();


	

		public function accessRules()
	{
		return array(
		
			/********Accesos Sprint Camilo***************/
			
				/******** Espacios comunes ********/
					array('allow',  			 
						'controllers'=>array("espacioComun"),
						'actions'=>array('view','create','update','delete','index','admin'),	
						"roles"=>array('admin'),				
					),	
					//Conserje no puede:
					array('deny',  			 
						'controllers'=>array("espacioComun"),
						'actions'=>array('view','create','update','delete','index','admin'),	
						"roles"=>array('conserje'),				
					),	
					//hogar no puede:
					array('deny',  			 
						'controllers'=>array("espacioComun"),
						'actions'=>array('view','create','update','delete','index','admin'),	
						"roles"=>array('hogar'),				
					),
				/******** Tipos de espacios comunes ********/
					//Administrador puede:
					array('allow',  			 
						'controllers'=>array("tipoEspComun"),
						'actions'=>array('view','create','update','delete','index','admin'),	
						"roles"=>array('admin'),				
					),	
					//Conserje no puede:
					array('deny',  			 
						'controllers'=>array("tipoEspComun"),
						'actions'=>array('view','create','update','delete','index','admin'),	
						"roles"=>array('conserje'),				
					),	
					//hogar no puede:
					array('deny',  			 
						'controllers'=>array("tipoEspComun"),
						'actions'=>array('view','create','update','delete','index','admin'),	
						"roles"=>array('hogar'),				
					),	
					
				
				/******** Arriendos ********/
					//Conserje puede:
					array('allow',  			 
						'controllers'=>array("arrienda"),
						'actions'=>array('view','index'),	
						"roles"=>array('conserje'),				
					),	
					//Conserje no puede:
					array('allow',  			 
						'controllers'=>array("arrienda"),
						'actions'=>array('create','update','delete', 'admin'),	
						"roles"=>array('conserje'),				
					),	
					//Administrador puede:
					array('allow',  			 
						'controllers'=>array("arrienda"),
						'actions'=>array('view','index','admin'),	
						"roles"=>array('admin'),				
					),	
					//Administrador no puede:
					array('deny',  			 
						'controllers'=>array("arrienda"),
						'actions'=>array('create','update','delete'),	
						"roles"=>array('admin'),				
					),	
					//Hogar puede:
					array('allow',  			 
						'controllers'=>array("arrienda"),
						'actions'=>array('view','create','update','delete','index'),	
						"roles"=>array('hogar'),				
					),	
					
				/******** Visitas ********/
					//Conserje puede:
					array('allow',  			 
						'controllers'=>array("visitas"),
						'actions'=>array('view','create','update','delete', 'admin'),	
						"roles"=>array('conserje'),				
					),	
					//Administrador no puede:
					array('deny',  			 
						'controllers'=>array("visitas"),
						'actions'=>array('view','create','update','delete', 'admin'),	
						"roles"=>array('admin'),				
					),	
					//Hogar puede:
					array('allow',  			 
						'controllers'=>array("visitas"),
						'actions'=>array('view'),	
						"roles"=>array('hogar'),				
					),	
					//Hogar no puede:
					array('deny',  			 
						'controllers'=>array("visitas"),
						'actions'=>array('create','update','delete', 'admin'),	
						"roles"=>array('hogar'),				
					),	

			/*******************************************/
			array('allow',  // allow all users to perform 'index' and 'view' actions				 
				 'controllers'=>array("falta"),
				//'users'=>array('@'),
				"roles"=>array('conserje'),				
			),			

			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index'),				
				"roles"=>array('hogar'),
			),	

			array('deny',  // allow all users to perform 'index' and 'view' actions				 
				 'controllers'=>array("falta"),
				 'actions'=>array('view','create','update','Assign','delete', 'admin'),				
				"roles"=>array('admin'),			
			),	

			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','create','update','Assign','delete', 'admin'),				
				"roles"=>array('admin'),
			),

			array('deny',  // deny all users
				'users'=>array('*'),
			),
		/*
			public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				//'actions'=>array('index','view','create','update','Assign','delete'),
				 'controllers'=>array("conserje"),
				//'users'=>array('@'),
				"roles"=>array('conserje'),
			),
		
			array('deny',  // deny all users
				'users'=>array('*'),
		*/
		);
	}

}