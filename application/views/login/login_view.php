<!DOCTYPE HTML>
<html>
    <head>
    <title>UET</title>
        <meta charset="utf-8">
        <link href="<?= base_url('templates/css/style_menu.css');?>" rel="stylesheet" type="text/css">
        <link href="<?= base_url('templates/css/style_cuerpo.css');?>" rel="stylesheet" type="text/css">
        <link href="<?= base_url('templates/css/galeria/styles.css');?>" rel="stylesheet" type="text/css">
        <link href="<?= base_url('templates/css/cssbotones.css');?>" rel="stylesheet" type="text/css" />

        <script type="text/javascript" src="<?= base_url();?>/templates/js/mensaje.js"></script>
        <?php
          if(validation_errors())
          {
        ?>    
            <script type="text/javascript">
              $(document).ready(function() { setTimeout(function(){ $(".mensajelogin").fadeIn(1500); },0000); });
              $(document).ready(function() { setTimeout(function(){ $(".mensajelogin").fadeOut(1500); },5000); });
            </script>
        <?php
          }
        ?>
    </head>
<body>

<table cellspadding="0" cellspacing="0" border="0" class="mitable">
    <tr> 
      <td align="center"></br>
        <label class="aviso">Solamente los usuarios registrados en el sistema tienen el acceso, ...</label>
      </td>
    </tr>
    <tr>
        <td width="1000px" height="470px" valign="top"></br>
            <!--begin body login -->
            <center>
              <div class="frm_login">
                <form name="form" action="<?= base_url();?>verificarlogin" method="post">
                  <table cellspacing="3">          
                    <tr>
                      <td rowspan="9"><img src="<?= base_url('templates/img/login.png');?>" title="Login"></td>
                    </tr>
                    <tr><td colspan="2"align="center"><h3><b>A U T E N T I C A C I O N</b></h3></td></tr>
                    <tr>
                      <td><label><b>Usuario </b></label></td>
                      <td><input type="text" class="campos" size="30" id="username" name="username"  placeholder="Usuario"/> <span class="glyphicon glyphicon-user"></span></td>
                    </tr>
                    <tr>
                      <td><label><b>Password </b></label></td>
                      <td><input type="password" class="campos" size="30" id="password" name="password"  placeholder="Password"/> <span class="glyphicon glyphicon-lock"></span></td>
                    </tr>
                    <tr><td>&nbsp</td><td>&nbsp</td></tr>
                    <tr>
                      <td colspan="2" align="center">
                        <input type="submit" class="btn btn-default" value="Ingresar al Sistema"/>
                        <input type="reset" class="btn btn-default" value="Limpiar Campos"/>
                      </td>
                    </tr>
                    <tr><td>&nbsp</td><td>&nbsp</td></tr>
                    <tr><td>&nbsp</td><td>&nbsp</td></tr>
                    <tr><td>&nbsp</td><td>&nbsp</td></tr>
                    <tr><td>&nbsp</td><td>&nbsp</td></tr>
                  </table>
                </form> 
              </div> 
            </center> </br>    
            <center>
              <div class="mensajelogin" style="display:none;"><label><?php echo validation_errors();?></label></div>
            </center>
            <!-- end body login -->           
        </td>
    </tr>
</table>
</body>
</html>