<?php
function verificar_email($email)
{ 
   $mail_correcto = 0; 
   //verifico umas coisas 
   if ((strlen($email) >= 6) && (substr_count($email,"@") == 1) && (substr($email,0,1) != "@") && (substr($email,strlen($email)-1,1) != "@"))
   { 
      if ((!strstr($email,"'")) && (!strstr($email,"\"")) && (!strstr($email,"\\")) && (!strstr($email,"\$")) && (!strstr($email," "))) 
	  { 
         //vejo se tem caracter . 
         if (substr_count($email,".")>= 1)
		 { 
            //obtenho a terminação do dominio 
            $term_dom = substr(strrchr ($email, '.'),1); 
            //verifico que a terminação do dominio seja correcta 
         if (strlen($term_dom)>1 && strlen($term_dom)<5 && (!strstr($term_dom,"@")))
		 { 
            //verifico que o de antes do dominio seja correcto 
            $antes_dom = substr($email,0,strlen($email) - strlen($term_dom) - 1); 
            $caracter_ult = substr($antes_dom,strlen($antes_dom)-1,1); 
            if ($caracter_ult != "@" && $caracter_ult != ".")
			{ 
               $mail_correcto = 1; 
            };
         };
      };
   };
};

if ($mail_correcto) 
   return 1; 
else 
   return 0; 
};
?>
