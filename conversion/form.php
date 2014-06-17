<?php

$conexion = mysql_connect("localhost","root","galileo2012");
$db = mysql_select_db("diselectros",$conexion);

$first_name = $_POST['nombre'];
$last_name = mysql_real_escape_string($_POST['apellidos']);
$mobile = mysql_real_escape_string($_POST['celular']);
$phone = mysql_real_escape_string($_POST['telefono']);
$country = mysql_real_escape_string($_POST['pais']);
$city = mysql_real_escape_string($_POST['ciudad']);
$email = $_POST['mail'];
$description = mysql_real_escape_string($_POST['Description']);
$origen = mysql_real_escape_string($_POST['Origen']);

$correo = $_POST["Email"];
$mails = "<amurillo@velaio.com>";
if (isset($first_name) && !empty($first_name)&& isset($last_name) && !empty($last_name)&& isset($mobile) && !empty($mobile)&& isset($phone) && !empty($phone)&& isset($country) && !empty($country)&& isset($city) && !empty($city)&& isset($email) && !empty($email)&& isset($description) && !empty($description)){

	if(eregi("^([_a-z0-9-]+)(\.[_a-z0-9-]+)*@([a-z0-9-]+)(\.[a-z0-9-]+)*(\.[a-z]{2,4})$",$email)){
		
 $mensaje = '<table width="421" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
			  <tr>
				<th width="109" bgcolor="#999999"  align="center" colspan="2"><font color="#FFFFFF">Candidatos</font></th>
			  </tr>
			  <tr>
				<th align="left">Nombres:</th>
				<td>'.$first_name.'</td>
			  </tr>
			  <tr>
				<th align="left">Apellidos:</th>
				<td>'.$last_name.'</td>
			  </tr>
			  <tr>
				<th align="left">Telefono fijo:</th>
				<td>'.$phone.'</td>
			  </tr>
			  <tr>
				<th align="left">Telefono movil: </th>
				<td>'.$mobile.'</td>
			  </tr>
			  <tr>
				<th align="left">E-mail:</th>
				<td>'.$email.'</td>
			  </tr>
			  <tr>
				<th align="left">Pais:</th>
				<td>'.$country.'</td>
			  </tr>
			  <tr>
				<th align="left">Ciudad:</th>
				<td>'.$city.'</td>
			  </tr>
			  <tr>
				<th height="43" align="left">Pregunta:</th>
				<td>'.$description.'</td>
			  </tr>
			</table>';

//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-Type: text/html; charset=iso-8859-1\r\n"; 
		$titulo = 'Candidato'; 
		$url= "/diselectros.com/gracias-contacto.html";
		
		mail($mails, $titulo, $mensaje, $headers);
		
		$auto = mysql_query("SELECT * FROM prospectos");
		$num = mysql_num_rows($auto);
		$id = $num + 1;
				
		mysql_query("INSERT INTO prospectos (idprospectos, nombre, apellidos, mobil, telefono, pais, ciudad, mail, pregunta) VALUES ('".$id ."','".$first_name."','".$last_name."','".$mobile."','".$phone."','".$country."','".$city."','".$email."','".$description."')");
		 
		echo "<script>location.href=('$url');</script>";
		
	}else {
		echo "El correo No es valido verifique que no ayan espacios";
	}
} else {
		echo "hay campos vacios verifique";
}
?>