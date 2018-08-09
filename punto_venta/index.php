<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Punto de venta</title>
	<link rel="shortcut icon" href="resources/Images/sales_bag_shopping_bargain_retail_icon-icons.com_55340.png">
	<!--recursos de bootstrap-->

	<!--recursos de material kit-->
	<link rel="stylesheet" type="text/css" href="resources/kit/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="resources/kit/material-kit.css">
	<link rel="stylesheet" type="text/css" href="resources/chaps/css/mine-styles.css">
	<link rel="stylesheet" type="text/css" href="resources/font-awesome-4.7.0/css/font-awesome.min.css"/>
	<script type="text/javascript" src="resources/kit/jquery.min.js"></script>
	<script type="text/javascript" src="resources/kit/nouislider.min.js"></script>
	<script type="text/javascript" src="resources/kit/bootstrap-datepicker-es.js"></script>
	<script type="text/javascript" src="resources/kit/jquery.validate.min.js"></script>
	<script type="text/javascript" src="resources/kit/material-kit.js"></script>
	<script type="text/javascript" src="resources/kit/material.min.js"></script>
	<script type="text/javascript" src="resources/kit/bootstrap.min.js"></script>
	<style type="text/css">
		html,body
		{
			height: 100%;

		}
		.fondo
		{
			background: url("resources/Images/graphics.jpg");
			background-size: cover;
			height: 100%;
			display: flex;
		}
		.logo_casa_acatitlan
		{
			border-style: solid;
			border-width: .3rem;
			border-color: white;
			border-radius: .5rem;
		}
        .opt-nav:hover
{
    background-color: rgba(0,0,0,.2);
}

/*backgrounds --------------------------------------------------------------------*/
.bg-grey
{
    background-color: grey;
}
.bg-border-purple
{
    background-color: #9C27B0;
}
.bg-purple
{
    background-color: #9C27B0;
}
.bg-pink
{
    background-color: #E91E63  ;

}

/*colors -------------------------------------------------------------------------*/

/*text colors*/
.txt-white
{
    color: #FFFFFF;
}
.txt-pink
{
    color: #E91E63;
}
.txt-red
{
    color: red;

}
.txt-blue
{
    color: #03A9F4;
}
/*padings ------------------------------------------------------------------*/
.pt2
{
    padding-top: 2rem;
}
.pt1
{
    padding-top: 1rem;
}
.pg-1
{
    padding: 1rem;
}
.pt0
{
    padding-top: 0;
}

.pt4
{
    padding-top: 4rem;
}
.pb2
{
    padding-bottom: 2rem;
}
.pb0
{
    padding-bottom: 0;
}
.pb4
{
    padding-bottom: 4rem;
}

.pd-0
{
    margin: 0;
    padding: 0;
}
.pl3
{
    margin-left: 3rem;
}
.pl0
{
    padding-left: 0;
}
.pr0
{
    padding-right: 0;
}
.pr1
{
    padding-right: 1rem;
}
.pr2
{
    padding-right: 2rem;
}
.pr3
{
    padding-right: 3rem;
}
.pr4
{
    padding-right: 4rem;
}
/*margings ----------------------------------------------------------------------------*/
.mt0
{
    margin-top: 0;
}
.mb0
{
    margin-bottom: 0;
}
.ml0
{
    margin-left: 0;
}
.mr0
{
    margin-right: 0;
}
.ml2
{
    margin-left: 2rem;
}

/*inputs -----------------------------------------------------------------------*/
.input_search
{
    border-style: solid;
    border-width: .1rem;
    border-radius: .3rem;
    border-color: #03A9F4;
}
/*div error*/
.div_error
{
    display: inline-block;
    vertical-align: top;
}
</style>

</head>

<body>
<div id="content_request"></div>
	<div class="fondo container-fluid col-sm-12 col-md-12 col-lg-12">
		<div class="row pt4">
			<div class="col-lg-4" id="notificaciones_loggin"></div>
			<div class="panel panel-default container col-sm-12 col-lg-3 pl0 pr0 pt0">
				<img src="resources/Images/avatar_chaps.jpg" style="width: 100%; height: 20rem;">
				<form class="form container-fluid" id="form_login" name="form_login">
					<div class="row">
						<div class="container-fluid">
							<div class="input-group ">
								<span class="input-group-addon">
									<i class="fa fa-user fa‐4x" data-toggle="tooltip" data-placement="top" title="Ingresa el email con el que te registraste"></i>
								</span>
								<div class="form-group">
									<label class="control-label">Usuario</label>
									<input type="text" class="login_usuario form-control validate" id="login_usuario" name="login_usuario" data-error=".errorlogin_usuario" placeholder="clic para escribir">
									<div class="text text-left txt-red errorlogin_usuario"></div>
								</div>
							</div>
						</div>
						<div class="container-fluid">
							<div class="input-group ">
								<span class="input-group-addon">
									<i class="fa fa-key fa‐4x" data-toggle="tooltip" data-placement="top" title="Ingresa tu contraseña"></i>
								</span>
								<div class="form-group">
									<label class="control-label">Contraseña</label>
									<input type="password" class="login_pass form-control validate" id="login_pass" name="login_pass" data-error=".errorlogin_pass" placeholder="clic para escribir">
									<div class="text text-left txt-red errorlogin_pass"></div>
								</div>
							</div>
						</div>
						<div class="boones_login container-fluid">
							<div class="row">
								<div class="col-lg-3"></div>
								<div class="col-lg-4">
									<a  class="btn btn-primary btn-lg" data-toggle="tooltip" data-placement="top" title="Continuar para iniciar sesion" id="btn_entrar_loggin">Continuar</a>
									<br>
								</div>

							</div>
						</div>
					</div>
				</form>

			</div>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function(doc)
		{
			$(document).keypress(function(evt)
			{
				if(evt.which==13)
				{
					//console.log("enter presionado");
					$("#form_login").submit();
				}
			});
			$("#btn_entrar_loggin").click(function(event)
			{

				$("#form_login").submit();

			})
			$("#form_login").validate({
            ignore:[],
            rules:{
              login_usuario:"required",
              login_pass: "required"
            },
            messages:{
              login_usuario:"Ingresa un nombre de usuario",
              login_pass:"Ingresa una contraseña"
            },
            errorElement:"div",
            errorPlacement:function(error,element){
              var placement=$(element).data("error");
              if(placement)
                $(placement).append(error);
              else
                error.insertAfter(error);
            },
            submitHandler:function(form)
            {
              		//console.log("entrando");
					var usuario=$("#login_usuario").val();
					var pass=$("#login_pass").val();
					$.post("core/controllers/controller_admon.php",{usuario:usuario,pass:pass,action:"entrar"},function(request)
						{
							$("#content_request").html(request);
						});
            }
          });
		});


    </script>
</body>
</html>
