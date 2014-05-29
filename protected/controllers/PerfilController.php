<?php

class PerfilController extends Controller
{
	public function actionIndex(){
		
    $titulo="SOLICITE ASIGNACION DE ROL PARA EL SISTEMA ";    
    $menuLateral='';
    $imp=0;

		//El titulo, cuerpo y menú lateral deben variar según el  usuario.
              if( yii::app()->user->checkAccess("admin") )// && Yii::app()->user->getState('comunidad')!=NULL )
              {
    $cuerpo = '<p> Bienvenido señor/a '.Yii::app()->user->getState('nombre').' </p>';                
		$titulo="CUENTA ADMINISTRADOR ";

		$menuLateral='
		<li class="nav-header">Opciones</li>                
              <li><a href="index.php?r=hogar">Hogares</a></li>
              <li><a href="index.php?r=conserje">Conserje</a></li>
              <li><a href="index.php?r=trabajador">Trabajadores</a></li>
              <li><a href="#">Turnos</a></li>
              <li><a href="#">Archivos</a></li>
              <li><a href="index.php?r=falta">Faltas</a></li>
              <li><a href="#">Gastos comunes</a></li>
              <li><a href="#">Boleta remuneraciones</a></li>
              <li><a href="#">Encuesta satisfacción</a></li>
              <li><a href="#">Reclamos y sugerencias</a></li>		
			  ';		
              }
              else { 
                  $imp=1;
                  $model=new Falta;
                    // Uncomment the following line if AJAX validation is needed
                    // $this->performAjaxValidation($model);

                    if(isset($_POST['Falta']))
                    { 
                      $model->attributes=$_POST['Falta'];                                               
                      if($model->save())
                        $this->redirect(array('view','id'=>$model->FAL_CORREL));      
                    }

                    $this->render('identificarCom',array(
                      'model'=>$model,
                    ));                    
            }


             if( yii::app()->user->checkAccess("hogar")){
              $titulo="CUENTA PROPIETARIO ";
             $cuerpo = '<p> Bienvenido señor/a '.Yii::app()->user->getState('nombre').' </p>';

              $menuLateral='
              <li class="nav-header">Opciones</li>              
              <li><a href="#">Gastos comunes</a></li>
              <li><a href="#">Consultar faltas</a></li>
              <li><a href="#">Consultar visitas</a></li>
              <li><a href="#">Reclamos y sugerencias</a></li>
              <li><a href="#">Responder encuestas</a></li>
              <li><a href="index.php?r=espacioComun">Espacios comunes</a></li>
              <li><a href="#">Avisos clasificados</a></li>                      
                       ';          
              }

             if( yii::app()->user->checkAccess("conserje")){
              $titulo="CUENTA CONSERJE ";
              $cuerpo = '<p> Bienvenido señor/a '.Yii::app()->user->getState('nombre').' </p>';
           
              $menuLateral='
              <li class="nav-header">Opciones</li>                                     
              <li><a href="#">Faltas</a></li>
              <li><a href="#">Visitas</a></li>
              <li><a href="#">Vehículo</a></li>
              <li><a href="#">Correspondencia</a></li>
                       ';          
              }              
     if($imp==0) $this->render('index',array(
			'cuerpo'=>$cuerpo,
			'titulo'=>$titulo,
			'menuLateral'=>$menuLateral
			));//Nombre y valor que recibira la vista mediante el array
	}

	
	
}