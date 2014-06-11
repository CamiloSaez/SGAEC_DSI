<?php

class PerfilController extends Controller
{
	public function actionIndex(){
		
    $titulo="Su cuenta no a sido asignada correctamente. <br> Favor contactarse con administracion.";    
    $menuLateral='';
    $cuerpo='';
    $fail=true;
    

		//El titulo, cuerpo y menú lateral deben variar según el  usuario.
              if( yii::app()->user->checkAccess("admin") )// && Yii::app()->user->getState('comunidad')!=NULL )
              {                
    $cuerpo = '<p> Bienvenido señor/a '.Yii::app()->user->getState('nombre').' </p>';                
		$titulo="CUENTA ADMINISTRADOR ";

    if(Yii::app()->user->getState("comunidad")!=null){
		$menuLateral='
		<li class="nav-header">Opciones</li>                
              <li><a href="index.php?r=hogar" title="Administrar hogares">Hogares</a></li>
              <li><a href="index.php?r=conserje" title="Administrar conserjes">Conserje</a></li>
              <li><a href="index.php?r=trabajador">Trabajadores</a></li>
              <li><a href="#">Turnos</a></li>
              <li><a href="index.php?r=archivo">Archivos</a></li>
              <li><a href="index.php?r=espacioComun">Crear espacio común</a></li>
              <li><a href="index.php?r=falta">Revisar Faltas</a></li>
              <li><a href="index.php?r=tipoFalta">Crear tipo de falta</a></li>   
              <li><a href="#">Gastos comunes</a></li>
              <li><a href="#">Boleta remuneraciones</a></li>
              <li><a href="#">Encuesta satisfacción</a></li>
              <li><a href="#">Reclamos y sugerencias</a></li>		
			  ';		
            $fail=false;      
            $this->render('index',array(
            
          'cuerpo'=>$cuerpo,
          'titulo'=>$titulo,
          'menuLateral'=>$menuLateral
          ));
          }
    else {

         $com=Comunidad::model()->findall("ADM_RUT=?", array(yii::app()->user->id));

            $this->render('idCom',array(
           'com'=>$com,   
          'cuerpo'=>$cuerpo,
          'titulo'=>$titulo,
          'menuLateral'=>$menuLateral
          ));

        }      
              
              } 


             if( yii::app()->user->checkAccess("hogar")){
              $titulo="CUENTA PROPIETARIO ";
             $cuerpo = '<p> Bienvenido señor/a '.Yii::app()->user->getState('nombre').' </p>';

              $menuLateral='
              <li class="nav-header">Opciones</li>              
              <li><a href="#">Gastos comunes</a></li>
              <li><a href="index.php?r=falta">Consultar faltas</a></li>
              <li><a href="#">Consultar visitas</a></li>
              <li><a href="#">Reclamos y sugerencias</a></li>
			  <li><a href="index.php?r=archivo">Archivos</a></li>
			  <li><a href="#">Turnos</a></li>
              <li><a href="#">Responder encuestas</a></li>
              <li><a href="index.php?r=arrienda">Arrendar espacio común</a></li>
              <li><a href="#">Avisos clasificados</a></li>                      
                       ';   
               $fail=false;        
               $this->render('index',array(
              'cuerpo'=>$cuerpo,
              'titulo'=>$titulo,
              'menuLateral'=>$menuLateral
              ));               
              }
              

             if( yii::app()->user->checkAccess("conserje")){
              $titulo="CUENTA CONSERJE ";
              $cuerpo = '<p> Bienvenido señor/a '.Yii::app()->user->getState('nombre').' </p>';
           
              $menuLateral='
              <li class="nav-header">Opciones</li>                                     
              <li><a href="index.php?r=falta">Faltas</a></li>
              <li><a href="index.php?r=visitas">Visitas</a></li>
              <li><a href="index.php?r=vehiculos">Vehículo</a></li>
			  <li><a href="index.php?r=archivo">Archivos</a></li>
			  <li><a href="#">Turnos</a></li>
              <li><a href="#">Correspondencia</a></li>
                       ';
               $fail=false;        
               $this->render('index',array(
              'cuerpo'=>$cuerpo,
              'titulo'=>$titulo,
              'menuLateral'=>$menuLateral
              ));                  
              }              
     if($fail==true)   $this->render('index',array(
              'cuerpo'=>$cuerpo,
              'titulo'=>$titulo,
              'menuLateral'=>$menuLateral
              ));                  
	}

	public function actionCapture(){

   Yii::app()->user->setState('comunidad',$_GET["id"]);
   //echo Yii::app()->user->comunidad;
   $this->redirect(array("index"));
  }	
  
}