
<head>
   <link rel="stylesheet" type="text/css" href="css/stylesheet.css"> 
</head>

<script type="text/javascript">

     function goBack(){
        setInterval(
            function wait(){
             window.location = "index.html"; 
         },500);
       
    };

   
    var clicks = 0;
    function printPass() {

        clicks += 1;
        if(clicks <= 1){
           // window.print();
            printPass();
            goBack();   
        }

    };  
   
</script>

<?php
	session_start();
	error_reporting(0);
	
	include 'abreConexao.php';
	
	if($_GET['valor'] == "prioritaria"){
		//$result = mysql_query("SELECT COUNT(*) as total FROM gerarsenha WHERE tipo_senha='P'");
		//$data = mysql_fetch_assoc($result);
		//$aux = $data['total']+1;
		
		//$sql = "INSERT INTO gerarsenha (tipo_senha, numero_senha)";
		//$sql .= " VALUES('P', '$aux')";
		//mysql_query($sql) or die(mysql_error());
		

		//$texto = $aux;
		echo "<div  style='margin-left:20%' class='print'><img src onerror='printPass();'>";
		echo "<p style='font-size:22px; font-family:Arial;'>S&atilde;o Miguel Sa&uacute;de</p><br>";
		echo "<p style='font-size:50px; font-family:Arial; margin-top:-25px;'><span style='font-size:50px;'>Senha</span> <br />P</p>";
		echo "<p style='font-size:15px; font-family:Arial; margin-top:-25px;'>Para segunda via de boletos acesse nosso site:</p>";
        echo "<p style='font-size:15px; font-family:Arial; margin-top:-19px;'>www.saomiguelsaude.com.br</p>";
		echo "</div>";
	}
	 
	else if($_GET['valor'] == "comum"){
		//$result = mysql_query("SELECT COUNT(*) as total FROM gerarsenha WHERE tipo_senha='C'");
		//$data = mysql_fetch_assoc($result);
		//$aux = $data['total']+1;
		
		//$sql = "INSERT INTO gerarsenha (tipo_senha, numero_senha)";
		//$sql .= " VALUES('C', '$aux')";
		//mysql_query($sql) or die(mysql_error());
	
		//$texto = $aux;
		echo "<div style='margin-left:20%' class='print'><img src onerror='printPass();'>";
		echo "<p style='font-size:22px; font-family:Arial;'>S&atilde;o Miguel Sa&uacute;de</p><br>";
		echo "<p style='font-size:50px; font-family:Arial; margin-top:-25px;'><span style='font-size:50px;'>Senha</span> <br />C</p>";
		echo "<p style='font-size:15px; font-family:Arial; margin-top:-25px;'>Para segunda via de boletos acesse nosso site:</p>";
        echo "<p style='font-size:15px; font-family:Arial; margin-top:-19px;'>www.saomiguelsaude.com.br</p>";
		echo "</div>";
	}
	//Incrementa preferenciais.
										
			//if($_GET['valor']== "prioritaria"){
			//	$update= "UPDATE npreferencial SET preferencia = preferencia + 1 WHERE id = 1";
			//	mysql_query($update) or die(mysql_error());
			
			//}

	?>
	
<html>
<head>
    <meta charset="utf-8">
 

</head>
<body style="margin-top: 0;margin-bottom: 0;margin-left: 0;margin-right: 0;padding-top: 0;padding-bottom: 0;padding-left: 0;padding-right: 0;min-width: 100%;background-color: #f5f5f5">
<table class="main-wrapper" style="border-collapse: collapse;border-spacing: 0;display: table;table-layout: fixed; margin: 0 auto; -webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;text-rendering: optimizeLegibility;background-color: #f5f5f5; width: 100%;">
        <tbody>
            <tr>
                <td style="padding: 0;vertical-align: top" class="">
                    <div class="bottom-padding" style="margin-bottom: 0px; line-height: 30px; font-size: 30px;">&nbsp;</div>
                </td>
            </tr>
            <tr>
                <td style="padding: 0;vertical-align: top; width: 100%;padding-top: 3%;" class="">
                    <center>
                      
                        <table class="main-content" style="width: 100%; max-width: 600px; border-collapse: separate;border-spacing: 0;margin-left: auto;margin-right: auto; border: 1px solid #EAEAEA; border-radius: 4px; -webkit-border-radius: 4px; -moz-border-radius: 4px; background-color: #fbfbfb; overflow: hidden;" width="600">
                            <tbody>
                                <tr>
                                    <td style="padding: 0;vertical-align: top;">
                                        <table class="main-content" style="border-collapse: collapse;border-spacing: 0;margin-left: auto;margin-right: auto;width: 100%; max-width: 1000px;">
                                            <tbody>
                                                <tr>
                                                    <td style="padding: 0;vertical-align: top;text-align: left">
                                                        <table class="contents" style="border-collapse: collapse;border-spacing: 0;width: 100%;">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="content-padding" style="padding: 0;vertical-align: top">
                                                                        <div style="margin-bottom: 0px; line-height: 30px; font-size: 30px;">&nbsp;</div>
                                                                        <div class="body-copy" style="margin: 0;">

                                                                            <div style="margin: 0;color: #60666d;font-size: 50px;font-family: sans-serif;line-height: 20px; text-align: left;">
                                                                                
                                                                                <div class="bottom-padding" style="margin-bottom: 0px; line-height: 15px; font-size: 15px;">&nbsp;</div>

                                                                               <a href='tipoSenhaTest.php?valor=comum' >
                                                                                <button class='button button2 hover' id='senha-comum' style='margin-left: 18%;margin-top: -5%; font-family:sans-serif; font-size:27px; letter-spacing: .7px;'>Senha Comum</button>
                                                                               </a>

																				<a href='tipoSenhaTest.php?valor=prioritaria' >
                                                                                  <button class='button button3 hover' id='senha-prioritaria' style='padding: 50px 120px;margin-left: 18%;margin-top: 10%; font-family:sans-serif; font-size:31px; letter-spacing: .7px;'>Senha Preferencial</button>
                                                                                </a>
																					
																					
                                                                                    <br>
                                                                                    <br>
                                                                                    
                                                                                <div class="bottom-padding" style="margin-bottom: 0px;margin-left: 41%; line-height: 0; font-size: 7px; padding-top: 4%;">&nbsp;<br>
                                                                                		<img src="logo2SM.png" width="35%">
                                                                                         <img src="logoCS.png" width="20%" style="padding-left: 40%">
                                                                                </div>
                                                                                <div style="width: 100%; text-align: center; float: left;">
                                                                                    
                                                                                </div>
                                                                                <div style="margin-bottom: 0px; line-height: 30px; font-size: 30px;">&nbsp;</div>
                                                                            </div>
                                                                             
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                       
                    </center>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>		
	
	

