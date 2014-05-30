
<?php 
class Metodos extends CApplicationComponent{
   
   public $idioma; // configurable en config/main.php 
   
   public function init(){
    // init es llamado por Yii, debido a que es un componente.
   }
   
   public function aOracion($cadena){
			$retorno=strtolower($cadena) ;
			$retorno=ucfirst($retorno);
            return $retorno;
    }
	
	 private static $Key = "lean-2,jacob,juan,camilo,johann";
 
    public static function encrypt ($input) {
        $output = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5(Encrypter::$Key), $input, MCRYPT_MODE_CBC, md5(md5(Encrypter::$Key))));
		return $output;
    }
 
    public static function decrypt ($input) {
        $output = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5(Encrypter::$Key), base64_decode($input), MCRYPT_MODE_CBC, md5(md5(Encrypter::$Key))), "\0");
		return $output;
    }
	
} 
?>