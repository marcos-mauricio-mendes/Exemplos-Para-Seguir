﻿<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Jornada</title>

<link href="estilo/estilo.css" rel="stylesheet" type="text/css">

<style type="text/css">
<!--
.style2 {
	font-weight: normal
}
.style3 {color: #009933}
.style4 {
	color: #003399
}
.style5 {color: #FF0000}
.style6 {color: #0099CC}
.style7 {
	color: #000033;
	font-weight: bold;
}
-->
</style>
</head>
<div>


<body>
<p align="center"><img src="estilo/trem.gif" width="100%" height="371"></p>
<p align="center" class="style7">JORNADA DE  MINNHA VIDA</p>
<p align="center"><span style="text-align: left">DE MINHA CASA ATE O PONTO DE ONIBUS</span></p>
<form action="resultado.php" method="post" name="deslocamento" class="style2" id="form1" title="Deslocando para a terra prometida" autocomplete="off">
  <p> <span style="text-align: center">
    <input name="APE_CASA" type="number" id="APE_CASA" placeholder="tempo em min" title="tempo em min" autocomplete="off"   >
    <label for="ONIBUS"><br>
      DO ONIBUS <span class="style3">102</span> PARA ESTACAO <span class="style6">ELDORADO <br>
      </span></label>
    <span class="style6">
    <input name="ONIBUS" type="number" id="ONIBUS" placeholder="tempo em min" title="tempo em min">
    </span></span></p>
  <p>DO METRO <span class="style5">LAGOINHA</span> ATE O BAIRRO BOMFIM </p>
  <p> <span style="text-align: center">
    <input name="METRO" type="number" id="METRO" placeholder="tempo em min" title="tempo em min">
  </span></p>
  <p>DO METRO ATE  ORION </p>
  <p>
    <input name="APE_ORION" type="number" id="APE_ORION" placeholder="tempo em min" title="tempo em min">
  </p>
  <p class="style4">
  <tr class="botao"> <input name="VAI" type="submit" id="VAI" value="...VAI... ">
   </tr>
  <tr class="botao">   </tr>
  </p>
</form>

</div>
</body>
</html>
