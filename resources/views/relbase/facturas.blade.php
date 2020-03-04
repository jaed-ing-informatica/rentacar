
<!DOCTYPE html>
<html>
  <head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <title>Rentacar | facturación electrónica</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="//html5shiv.googlecode.com/svn/trunk/html5.js">
      <script src="/assets/respond.min.js"></script>
    <![endif]-->

    <!-- CSS -->
    <link rel="stylesheet" media="all" href="/css/relbase.css" data-turbolinks-track="true" />
    

    

    <!-- Javascript -->
    <script src="/js/relbase.js" data-turbolinks-track="true"></script>
    <script>
//<![CDATA[

      NProgressSetup.init();

//]]>
</script>
    <!--     <link rel="shortcut icon" href="/favicon.ico"> -->
<!--     <link rel="icon" sizes="16x16 32x32 64x64" href="/favicon.ico"> -->
<!--     <link rel="icon" type="image/png" sizes="192x192" href="/favicon-192.png">
    <link rel="icon" type="image/png" sizes="160x160" href="/favicon-160.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96.png">
    <link rel="icon" type="image/png" sizes="64x64" href="/favicon-64.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favicon-152.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicon-144.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicon-120.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicon-114.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicon-76.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicon-72.png">
    <link rel="apple-touch-icon" href="/favicon-57.png"> -->
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="/favicon-144.png">
    <meta name="msapplication-config" content="/browserconfig.xml">
    
  </head>
  <body class="bg-default">
  <!--
    <div class="bg-parallax bg-connections"></div> -->

    <div class="bg-parallax bg-back"></div>
    <div class="bg-parallax bg-front"></div>
    <div class="bg-parallax bg-middle"></div>

      <div class="navbar-trial navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="text-center color-black">
      <p>
        ¡Bienvenido al ambiente de demostración de relBase! Podrá visualizar y explorar todas las funcionalidades de relBase.
      </p>
    </div>
  </div>
</div>

<nav class="navbar navbar-default second-navbar">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="https://demo.relbase.cl/">
        <img class="image-logo-front" data-retina="/assets/front/logos/relbase-blanco@2x-c50041a087dc3147d2453bfa500dbd4d5b2796cba34043fcd06400cfceb2ec45.png" src="/assets/front/logos/relbase-blanco-c50041a087dc3147d2453bfa500dbd4d5b2796cba34043fcd06400cfceb2ec45.png" alt="Relbase blanco" />
</a>    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="">
  <a href="https://demo.relbase.cl/clientes">
    <i class="fa fa-id-card-o fa-2x"></i>
    <p>Clientes</p>
</a></li>
<li class="active">
  <a href="https://demo.relbase.cl/dtes/facturas">
    <i class="fa fa-paper-plane-o fa-2x"></i>
    <p>Ventas</p>
</a></li>
  <li class="">
    <a href="https://demo.relbase.cl/punto-de-venta">
      <i class="fa fa-calculator fa-2x"></i>
      <p>Punto de venta</p>
</a>  </li>
  <li class="">
    <a href="https://demo.relbase.cl/dtes/facturas-exportacion">
      <i class="fa fa-ship fa-2x"></i>
      <p>Exportación</p>
</a>  </li>

<li class="">
  <a href="https://demo.relbase.cl/dtes/recibidos">
    <i class="fa fa-file-text-o fa-2x"></i>
    <p>Compras</p>
</a></li>
<li class="">
  <a href="https://demo.relbase.cl/recaudacion">
    <i class="fa fa-thumb-tack fa-2x"></i>
    <p>Recaudación</p>
</a></li>
<li class="">
  <a href="https://demo.relbase.cl/calendario">
    <i class="fa fa-calendar fa-2x"></i>
    <p>Eventos</p>
</a></li>
  <li class="">
    <a href="https://demo.relbase.cl/ajustes-inventario">
      <i class="fa fa-cubes fa-2x"></i>
      <p>Inventario</p>
</a>  </li>

<li class="">
  <a href="https://demo.relbase.cl/reportes/total-ventas">
    <i class="fa fa-bar-chart fa-2x"></i>
    <p>Reportes</p>
</a></li>


<li class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
    <i class="fa fa-cogs fa-2x"></i>
    <p>Configuración <strong class="caret"></strong></p>
  </a>
  <ul class="dropdown-menu">
    <li>
      <a href="https://demo.relbase.cl/proveedores">
        <i class="fa fa-building"></i> Proveedores
</a>    </li>
    <li>
      <a href="https://demo.relbase.cl/cesionarios">
        <i class="fa fa-building-o"></i> Cesionarios (Factoring)
</a>    </li>
    <li>
      <a href="/configuracion/categorias">
        <i class="fa fa-tags"></i> Categorías
</a>    </li>
    <li>
      <a href="/productos">
        <i class="fa fa-tasks"></i> Productos
</a>    </li>
    <li>
      <a href="https://demo.relbase.cl/libros/ventas">
        <i class="fa fa-book"></i> Libros</p>
</a>    </li>
    <li>
      <a href="https://demo.relbase.cl/usuarios">
        <i class="fa fa-users"></i> Usuarios
</a>    </li>
    <li role="separator" class="divider"></li>
    <li>
      <a href="/canal">
        <i class="fa fa-angle-double-right"></i> Más opciones ...
</a>    </li>

  </ul>
</li>

                </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle dropdown-toggle-profile" data-toggle="dropdown" role="button" aria-expanded="false">
            <i class="fa fa-user-circle fa-2x"></i>
            <p>Javier <span class="caret"></span></p>
          </a>
          <ul class="dropdown-menu" role="menu">
            <li class="">
              <a href="https://demo.relbase.cl/perfil/3992/edit">
                <i class="fa fa-user-circle"></i> Perfil
</a>            </li>
            <li>
              <a rel="nofollow" data-method="delete" href="/salir">
                <i class="fa fa-sign-out"></i> Salir
</a>            </li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

      <div id="wrapper" class="toggled">
          <div id="sidebar-wrapper">
  <ul class="sidebar-nav" id="sidebar">
    <li class="sidebar-brand text-center">
      <a data-remote="true" href="https://demo.relbase.cl/usuarios/3992/change_sidebar_toggled">
        <i id="main_icon" class="fa fa-angle-double-left fa-2x"></i>
</a>    </li>


      <li class="">
        <a data-toggle="tooltip" data-placement="right" data-title="Cotizaciones" href="https://demo.relbase.cl/cotizaciones">
          <i class="fa fa-folder fa-2x fa-vertical-align"></i> <label>Cotizaciones</label>
</a>      </li>

        <li class="">
          <a data-toggle="tooltip" data-placement="right" data-title="Órdenes de trabajo" href="https://demo.relbase.cl/orden-trabajo">
            <i class="fa fa-folder-open fa-2x fa-vertical-align"></i> <label>Órdenes de trabajo</label>
</a>        </li>

        <li class="">
          <a data-toggle="tooltip" data-placement="right" data-title="Notas de venta" href="https://demo.relbase.cl/dtes/notas-venta">
            <i class="fa fa-cart-plus fa-2x fa-vertical-align"></i> <label>Notas de venta</label>
</a>        </li>


      <li class="">
        <a data-toggle="tooltip" data-placement="right" data-title="Guías de despacho" href="https://demo.relbase.cl/dtes/guias">
          <i class="fa fa-truck fa-2x fa-vertical-align"></i> <label>Guías de despacho</label>
</a>      </li>

      <li class="active">
        <a data-toggle="tooltip" data-placement="right" data-title="Facturas" href="https://demo.relbase.cl/dtes/facturas">
          <i class="fa fa-paper-plane fa-2x fa-vertical-align"></i> <label>Facturas</label>
</a>      </li>

        <li class="">
          <a data-toggle="tooltip" data-placement="right" data-title="Boletas" href="https://demo.relbase.cl/dtes/boletas">
            <i class="fa fa-file-text fa-2x fa-vertical-align"></i> <label>Boletas</label>
</a>        </li>

      <li class="">
        <a data-toggle="tooltip" data-placement="right" data-title="Notas de crédito" href="https://demo.relbase.cl/dtes/nota-credito">
          <i class="fa fa-sticky-note fa-2x fa-vertical-align"></i> <label>Notas de crédito</label>
</a>      </li>

      <li class="">
        <a data-toggle="tooltip" data-placement="right" data-title="Notas de débito" href="https://demo.relbase.cl/dtes/nota-debito">
          <i class="fa fa-sticky-note-o fa-2x fa-vertical-align"></i> <label>Notas de débito</label>
</a>      </li>

      <li class="">
        <a data-toggle="tooltip" data-placement="right" data-title="Facturación recurrente" href="https://demo.relbase.cl/facturacion-recurrente">
          <i class="fa fa-bars fa-2x fa-vertical-align"></i> <label>Facturación recurrente</label>
</a>      </li>

      <li class="">
        <a data-toggle="tooltip" data-placement="right" data-title="Cesiones (factoring)" href="https://demo.relbase.cl/dtes/cesion">
          <i class="fa fa-external-link fa-2x fa-vertical-align"></i> <label>Cesiones (factoring)</label>
</a>      </li>


      <li class="">
        <a data-toggle="tooltip" data-placement="right" data-title="Impresión masiva" href="https://demo.relbase.cl/dtes/imprimir?from=sales">
          <i class="fa fa-print fa-2x fa-vertical-align"></i> <label>Impresión masiva</label>
</a>      </li>
  </ul>
</div>
<script>
  $(window).bind('scroll', function () {
      if ($(window).scrollTop() > 71) {
        $('#sidebar-wrapper').addClass('top-0');
      } else {
        $('#sidebar-wrapper').removeClass('top-0');
      }
  });
</script>

        <div id="page-content-wrapper">
          <div id="msg-div" class="mb-10">
            <div id="above-msg" style="width:100%">
</div>
<script type="text/javascript"> setTimeout(function(){ $("#above-msg").hide(1000); }, 10000); </script>

          </div>
          <ol class="bg-white shadow-box breadcrumb">
  <li><a href="https://demo.relbase.cl/">Inicio</a></li>
  <li class="active">Ventas</li>
    <li class="active">Facturas</li>
</ol>

<div class="container-fluid bg-white shadow-box pt-10">
  <div id="filter_div">
      <form id="form-filter" action="https://demo.relbase.cl/dtes/facturas" accept-charset="UTF-8" data-remote="true" method="get"><input name="utf8" type="hidden" value="&#x2713;" />
	<div class="row mt-10">
		<div class="col-md-2 col-xs-12 text-left">
				<div class="btn-group">
					<a class="btn btn-success btn-sm dropdown-toggle" id="btn-new-invoice" data-toggle="dropdown" data-submenu="" href="#"><i class="fa fa-plus"></i> Nuevo</a>				  	<ul class="dropdown-menu pull-left">
				    	    <li>
								<a href="/dtes/facturas/new">Factura electrónica</a>
							</li>
							<li>
								<a href="/dtes/exenta/new">Factura electrónica exenta</a>
							</li>
							<li>
								<a href="/dtes/facturas/customer_guides">Factura electrónica asociada a guía(s) de despacho</a>
							</li>
            <li class="dropdown-submenu btn-success">
					      	<a tabindex="0">Factura asociada a cotización</a>
						    <ul class="dropdown-menu">
							        <li>
						              <a href="/dtes/facturas/customer_estimates">Factura electrónica</a>
						            </li>
									<li>
						              <a href="/dtes/exenta/customer_estimates">Factura electrónica exenta</a>
						            </li>
						    </ul>
						</li>
						<li class="dropdown-submenu btn-success">
					      	<a tabindex="0">Factura asociada a nota de venta</a>
						    <ul class="dropdown-menu">
							    	<li>
						              <a href="/dtes/facturas/customer_sales_notes">Factura electrónica</a>
						            </li>
									<li>
						              <a href="/dtes/exenta/customer_sales_notes">Factura electrónica exenta</a>
						            </li>
						    </ul>
						</li>
							<li class="dropdown-submenu btn-success">
						      	<a tabindex="0">Factura asociada a órden de trabajo</a>
							    <ul class="dropdown-menu">
								    	<li>
					              <a href="/dtes/facturas/customer_service_orders">Factura electrónica</a>
					            </li>
										<li>
				              <a href="/dtes/exenta/customer_service_orders">Factura electrónica exenta</a>
				            </li>
							    </ul>
							</li>
						<li class="dropdown-submenu btn-success">
					      	<a tabindex="0">Históricas</a>
						    <ul class="dropdown-menu">
								<li class="dropdown-submenu btn-success">
								    <a tabindex="0">XML</a>
									<ul class="dropdown-menu">
									        <li>
												<a tabindex="0" href="/dtes/facturas/new_load_xml">Factura electrónica cargando XML</a>
											</li>
											<li>
												<a tabindex="0" href="/dtes/exenta/new_load_xml">Factura electrónica exenta cargando XML</a>
											</li>
									</ul>
								</li>
								<li class="dropdown-submenu btn-success">
						      		<a tabindex="0">Manuales</a>
									<ul class="dropdown-menu">
							        		<li>
												<a tabindex="0" href="/dtes/facturas/ingreso_manual">Factura electrónica</a>
											</li>
											<li>
												<a tabindex="0" href="/dtes/exenta/ingreso_manual">Factura electrónica exenta</a>
											</li>
									</ul>
								</li>
						    </ul>
				    	</li>
					</ul>
				</div>
		</div>
		<div class="col-md-6 col-xs-12 text-center">
	    	<label>Mostrar:</label>
	    	<div class="btn-group" data-toggle="buttons">
					<label class="btn btn-default btn-xs">
						<input type="radio" name="status_query" id="status_query_0" value="0" /> Enviado
					</label>
					<label class="btn btn-default btn-xs">
						<input type="radio" name="status_query" id="status_query_1" value="1" /> Aceptado
					</label>
					<label class="btn btn-default btn-xs">
						<input type="radio" name="status_query" id="status_query_2" value="2" /> Con reparo
					</label>
					<label class="btn btn-default btn-xs">
						<input type="radio" name="status_query" id="status_query_3" value="3" /> Rechazado
					</label>
					<label class="btn btn-default btn-xs">
						<input type="radio" name="status_query" id="status_query_9" value="9" /> Anulado
					</label>
					<label class="btn btn-default btn-xs active">
						<input type="radio" name="status_query" id="status_query_all" value="all" checked="checked" />
						Todo
					</label>
			</div>
	  	</div>
	  	<div class="col-md-1 col-xs-12 text-right">
	  		<span class="filter-spinner"></span> <!-- Spinner de espera! -->
	  	</div>
		<div class="col-md-3 col-xs-12 text-right">
			<div class="input-group">
                <div class="input-group-btn search-panel">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    	<span id="search_concept">Filtrar por</span> <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#folio">Nº folio</a></li>
                      <li><a href="#rut">RUT cliente</a></li>
                      <li><a href="#name">Nombre/razón social</a></li>
                      <li><a href="#code">Código cliente</a></li>
                      <li><a href="#amount">Monto total</a></li>
                      	<li><a href="#label">Nº pedido</a></li>
                      <li class="divider"></li>
                      <li><a href="#all">Todo</a></li>
                    </ul>
                </div>
                <input type="hidden" name="search_param" value="all" id="search_param">
                <input type="text" name="query" id="navbar-search" placeholder="Buscar" class="form-control filter-by" data-toggle="tooltip" data-placement="bottom" />
            </div>
	  	</div>
	</div>
</form>
  </div>
  <div class="row mt-10">
    <div class="col-md-12" id="invoices_list">
        <div class="col-md-12 col-xs-12 text-right">

      <label>Descargar: </label>
      <label>
        <a data-toggle="tooltip" data-placement="bottom" data-html="true" data-title="Descargar consulta &lt;br&gt;en formato &lt;br&gt;Excel." href="https://demo.relbase.cl/dtes/facturas.xls?status_query=all">
          Excel
</a>      </label>
</div>

  <div id="invoices-list">
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Cliente</th>
              <th>Nº Folio</th>
              <th>Total</th>
              <th>Nº Guía(s)</th>
              <th>Estado</th>
              <th class="align-right">Acciones</th>
            </tr>
          </thead>
          <tbody>
                  <tr id="e_document_17625">
                    <td>
                      <span data-toggle="tooltip" data-placement="bottom" title="Empresa de ejemplo 1">
                        Empresa de ejemplo 1
                      </span>
                      <p class="bottom">
                        55555555-5
                      </p>
                    </td>
                    <td>
                      1585
                      <p class="bottom">
                        FACTURA ELECTRÓNICA
                      </p>
                    </td>
                    <td>
                      $1.190
                      <p class="bottom">
                        11-02-2020
                      </p>
                    </td>
                    <td>
                        --
                    </td>
                    <td>
                      <span class="label edocument-status-sent_sii" data-toggle="tooltip" data-placement="bottom" title="Documento enviado al SII y a la espera de aprobación o rechazo, presione el botón Actualizar estado">Enviado</span>
                          <div class="bottom content_dte_status_not_modal mt-5">
                            <div class="table-actions-toolbar">
                              <div class="btn-group">
                                <a class="btn btn-primary btn-xs change_dte_status_not_modal" data-url="https://demo.relbase.cl/dtes/facturas/17625/get_dte_status" data-toggle="tooltip" data-placement="top" data-title="Ver estado del documento (SII)" data-container="body" href="#">
                                  <i class="fa fa-fw fa-refresh"></i> Actualizar estado
</a>                              </div>
                            </div>
                          </div>
                    </td>
                    <td class="align-right width-160" id="tr-table-actions-toolbar">
                          <div class="table-actions-toolbar width-160">
  <div class="btn-group">
      <a class="btn btn-default btn-xs" data-modal="dte-status" data-url="https://demo.relbase.cl/dtes/facturas/17625/dte_status" data-toggle="tooltip" data-placement="top" data-title="Ver estado del documento (SII)" data-container="body" href="#">
        <i class="fa fa-fw fa-list"></i>
</a>          <a target="_blank" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-title="Imprimir con cedible" data-container="body" href="https://relke-erp-test.s3-us-west-2.amazonaws.com/uploads/6/6/invoice/17625/envio_17625_245389.pdf?X-Amz-Expires=1800&amp;X-Amz-Date=20200303T184757Z&amp;X-Amz-Algorithm=AWS4-HMAC-SHA256&amp;X-Amz-Credential=AKIAJDGF5OAMF5ED5Z5A/20200303/us-west-2/s3/aws4_request&amp;X-Amz-SignedHeaders=host&amp;X-Amz-Signature=b555637f6d822e0d6e022a460208500ed017fa6929ae2192e3889096ccd8540a">
            <i class="fa fa-files-o"></i>
</a>          <a target="_blank" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-title="Imprimir" data-container="body" href="https://demo.relbase.cl/dtes/facturas/17625/print_simple.pdf">
            <i class="fa fa-file-text-o"></i>
</a>        <a class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-title="Ver o Enviar por correo electrónico" data-container="body" href="/dtes/facturas/17625">
          <i class="fa fa-eye"></i>
</a>        <div class="btn-group btn-group-xs">
          <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-ellipsis-v"></i>
          </button>
          <ul class="dropdown-menu pull-right">
              <li>
                <a data-modal="dte-emails" data-url="https://demo.relbase.cl/dtes/facturas/17625/dte_emails_history" data-toggle="tooltip" data-placement="top" data-title="Historial de envíos" data-container="body" href="#">
                  <i class="fa fa-fw fa-history"></i> Historial de envíos
</a>              </li>
              <li>
                <a data-toggle="tooltip" data-placement="top" data-title="Duplicar" data-container="body" href="https://demo.relbase.cl/dtes/facturas/new?id_copy=17625">
                  <i class="fa fa-fw fa-clipboard"></i> Duplicar
</a>              </li>
          </ul>
        </div>

  </div>
</div>

                      </div>
                  	</td>
                  </tr>
                  <tr id="e_document_17623">
                    <td>
                      <span data-toggle="tooltip" data-placement="bottom" title="Empresa de ejemplo 1">
                        Empresa de ejemplo 1
                      </span>
                      <p class="bottom">
                        55555555-5
                      </p>
                    </td>
                    <td>
                      1584
                      <p class="bottom">
                        FACTURA ELECTRÓNICA
                      </p>
                    </td>
                    <td>
                      $1.190
                      <p class="bottom">
                        11-02-2020
                      </p>
                    </td>
                    <td>
                        --
                    </td>
                    <td>
                      <span class="label edocument-status-sent_sii" data-toggle="tooltip" data-placement="bottom" title="Documento enviado al SII y a la espera de aprobación o rechazo, presione el botón Actualizar estado">Enviado</span>
                          <div class="bottom content_dte_status_not_modal mt-5">
                            <div class="table-actions-toolbar">
                              <div class="btn-group">
                                <a class="btn btn-primary btn-xs change_dte_status_not_modal" data-url="https://demo.relbase.cl/dtes/facturas/17623/get_dte_status" data-toggle="tooltip" data-placement="top" data-title="Ver estado del documento (SII)" data-container="body" href="#">
                                  <i class="fa fa-fw fa-refresh"></i> Actualizar estado
</a>                              </div>
                            </div>
                          </div>
                    </td>
                    <td class="align-right width-160" id="tr-table-actions-toolbar">
                          <div class="table-actions-toolbar width-160">
  <div class="btn-group">
      <a class="btn btn-default btn-xs" data-modal="dte-status" data-url="https://demo.relbase.cl/dtes/facturas/17623/dte_status" data-toggle="tooltip" data-placement="top" data-title="Ver estado del documento (SII)" data-container="body" href="#">
        <i class="fa fa-fw fa-list"></i>
</a>          <a target="_blank" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-title="Imprimir con cedible" data-container="body" href="https://relke-erp-test.s3-us-west-2.amazonaws.com/uploads/6/6/invoice/17623/envio_17623_158788.pdf?X-Amz-Expires=1800&amp;X-Amz-Date=20200303T184758Z&amp;X-Amz-Algorithm=AWS4-HMAC-SHA256&amp;X-Amz-Credential=AKIAJDGF5OAMF5ED5Z5A/20200303/us-west-2/s3/aws4_request&amp;X-Amz-SignedHeaders=host&amp;X-Amz-Signature=98422a1b6273ba87836d58cfd502e8a15011087af1af1dea554807671cc9a017">
            <i class="fa fa-files-o"></i>
</a>          <a target="_blank" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-title="Imprimir" data-container="body" href="https://demo.relbase.cl/dtes/facturas/17623/print_simple.pdf">
            <i class="fa fa-file-text-o"></i>
</a>        <a class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-title="Ver o Enviar por correo electrónico" data-container="body" href="/dtes/facturas/17623">
          <i class="fa fa-eye"></i>
</a>        <div class="btn-group btn-group-xs">
          <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-ellipsis-v"></i>
          </button>
          <ul class="dropdown-menu pull-right">
              <li>
                <a data-modal="dte-emails" data-url="https://demo.relbase.cl/dtes/facturas/17623/dte_emails_history" data-toggle="tooltip" data-placement="top" data-title="Historial de envíos" data-container="body" href="#">
                  <i class="fa fa-fw fa-history"></i> Historial de envíos
</a>              </li>
              <li>
                <a data-toggle="tooltip" data-placement="top" data-title="Duplicar" data-container="body" href="https://demo.relbase.cl/dtes/facturas/new?id_copy=17623">
                  <i class="fa fa-fw fa-clipboard"></i> Duplicar
</a>              </li>
          </ul>
        </div>

  </div>
</div>

                      </div>
                  	</td>
                  </tr>
                  <tr id="e_document_17621">
                    <td>
                      <span data-toggle="tooltip" data-placement="bottom" title="Empresa de ejemplo 1">
                        Empresa de ejemplo 1
                      </span>
                      <p class="bottom">
                        55555555-5
                      </p>
                    </td>
                    <td>
                      1583
                      <p class="bottom">
                        FACTURA ELECTRÓNICA
                      </p>
                    </td>
                    <td>
                      $1.190
                      <p class="bottom">
                        11-02-2020
                      </p>
                    </td>
                    <td>
                        --
                    </td>
                    <td>
                      <span class="label edocument-status-sent_sii" data-toggle="tooltip" data-placement="bottom" title="Documento enviado al SII y a la espera de aprobación o rechazo, presione el botón Actualizar estado">Enviado</span>
                          <div class="bottom content_dte_status_not_modal mt-5">
                            <div class="table-actions-toolbar">
                              <div class="btn-group">
                                <a class="btn btn-primary btn-xs change_dte_status_not_modal" data-url="https://demo.relbase.cl/dtes/facturas/17621/get_dte_status" data-toggle="tooltip" data-placement="top" data-title="Ver estado del documento (SII)" data-container="body" href="#">
                                  <i class="fa fa-fw fa-refresh"></i> Actualizar estado
</a>                              </div>
                            </div>
                          </div>
                    </td>
                    <td class="align-right width-160" id="tr-table-actions-toolbar">
                          <div class="table-actions-toolbar width-160">
  <div class="btn-group">
      <a class="btn btn-default btn-xs" data-modal="dte-status" data-url="https://demo.relbase.cl/dtes/facturas/17621/dte_status" data-toggle="tooltip" data-placement="top" data-title="Ver estado del documento (SII)" data-container="body" href="#">
        <i class="fa fa-fw fa-list"></i>
</a>          <a target="_blank" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-title="Imprimir con cedible" data-container="body" href="https://relke-erp-test.s3-us-west-2.amazonaws.com/uploads/6/6/invoice/17621/envio_17621_510371.pdf?X-Amz-Expires=1800&amp;X-Amz-Date=20200303T184758Z&amp;X-Amz-Algorithm=AWS4-HMAC-SHA256&amp;X-Amz-Credential=AKIAJDGF5OAMF5ED5Z5A/20200303/us-west-2/s3/aws4_request&amp;X-Amz-SignedHeaders=host&amp;X-Amz-Signature=0495ed108e94d65e28f13690e0c73a01429a61a737a744ac30fe71e3d1a816d5">
            <i class="fa fa-files-o"></i>
</a>          <a target="_blank" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-title="Imprimir" data-container="body" href="https://demo.relbase.cl/dtes/facturas/17621/print_simple.pdf">
            <i class="fa fa-file-text-o"></i>
</a>        <a class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-title="Ver o Enviar por correo electrónico" data-container="body" href="/dtes/facturas/17621">
          <i class="fa fa-eye"></i>
</a>        <div class="btn-group btn-group-xs">
          <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-ellipsis-v"></i>
          </button>
          <ul class="dropdown-menu pull-right">
              <li>
                <a data-modal="dte-emails" data-url="https://demo.relbase.cl/dtes/facturas/17621/dte_emails_history" data-toggle="tooltip" data-placement="top" data-title="Historial de envíos" data-container="body" href="#">
                  <i class="fa fa-fw fa-history"></i> Historial de envíos
</a>              </li>
              <li>
                <a data-toggle="tooltip" data-placement="top" data-title="Duplicar" data-container="body" href="https://demo.relbase.cl/dtes/facturas/new?id_copy=17621">
                  <i class="fa fa-fw fa-clipboard"></i> Duplicar
</a>              </li>
          </ul>
        </div>

  </div>
</div>

                      </div>
                  	</td>
                  </tr>
                  <tr id="e_document_17619">
                    <td>
                      <span data-toggle="tooltip" data-placement="bottom" title="Empresa de ejemplo 1">
                        Empresa de ejemplo 1
                      </span>
                      <p class="bottom">
                        55555555-5
                      </p>
                    </td>
                    <td>
                      1582
                      <p class="bottom">
                        FACTURA ELECTRÓNICA
                      </p>
                    </td>
                    <td>
                      $2.380
                      <p class="bottom">
                        11-02-2020
                      </p>
                    </td>
                    <td>
                        --
                    </td>
                    <td>
                      <span class="label edocument-status-sent_sii" data-toggle="tooltip" data-placement="bottom" title="Documento enviado al SII y a la espera de aprobación o rechazo, presione el botón Actualizar estado">Enviado</span>
                          <div class="bottom content_dte_status_not_modal mt-5">
                            <div class="table-actions-toolbar">
                              <div class="btn-group">
                                <a class="btn btn-primary btn-xs change_dte_status_not_modal" data-url="https://demo.relbase.cl/dtes/facturas/17619/get_dte_status" data-toggle="tooltip" data-placement="top" data-title="Ver estado del documento (SII)" data-container="body" href="#">
                                  <i class="fa fa-fw fa-refresh"></i> Actualizar estado
</a>                              </div>
                            </div>
                          </div>
                    </td>
                    <td class="align-right width-160" id="tr-table-actions-toolbar">
                          <div class="table-actions-toolbar width-160">
  <div class="btn-group">
      <a class="btn btn-default btn-xs" data-modal="dte-status" data-url="https://demo.relbase.cl/dtes/facturas/17619/dte_status" data-toggle="tooltip" data-placement="top" data-title="Ver estado del documento (SII)" data-container="body" href="#">
        <i class="fa fa-fw fa-list"></i>
</a>          <a target="_blank" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-title="Imprimir con cedible" data-container="body" href="https://relke-erp-test.s3-us-west-2.amazonaws.com/uploads/6/6/invoice/17619/envio_17619_699206.pdf?X-Amz-Expires=1800&amp;X-Amz-Date=20200303T184758Z&amp;X-Amz-Algorithm=AWS4-HMAC-SHA256&amp;X-Amz-Credential=AKIAJDGF5OAMF5ED5Z5A/20200303/us-west-2/s3/aws4_request&amp;X-Amz-SignedHeaders=host&amp;X-Amz-Signature=5ea154746883cd98aaf55970a81808f8c222216783d55ee9d57929b257f206d4">
            <i class="fa fa-files-o"></i>
</a>          <a target="_blank" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-title="Imprimir" data-container="body" href="https://demo.relbase.cl/dtes/facturas/17619/print_simple.pdf">
            <i class="fa fa-file-text-o"></i>
</a>        <a class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-title="Ver o Enviar por correo electrónico" data-container="body" href="/dtes/facturas/17619">
          <i class="fa fa-eye"></i>
</a>        <div class="btn-group btn-group-xs">
          <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-ellipsis-v"></i>
          </button>
          <ul class="dropdown-menu pull-right">
              <li>
                <a data-modal="dte-emails" data-url="https://demo.relbase.cl/dtes/facturas/17619/dte_emails_history" data-toggle="tooltip" data-placement="top" data-title="Historial de envíos" data-container="body" href="#">
                  <i class="fa fa-fw fa-history"></i> Historial de envíos
</a>              </li>
              <li>
                <a data-toggle="tooltip" data-placement="top" data-title="Duplicar" data-container="body" href="https://demo.relbase.cl/dtes/facturas/new?id_copy=17619">
                  <i class="fa fa-fw fa-clipboard"></i> Duplicar
</a>              </li>
          </ul>
        </div>

  </div>
</div>

                      </div>
                  	</td>
                  </tr>
                  <tr id="e_document_17614">
                    <td>
                      <span data-toggle="tooltip" data-placement="bottom" title="Empresa de ejemplo 1">
                        Empresa de ejemplo 1
                      </span>
                      <p class="bottom">
                        55555555-5
                      </p>
                    </td>
                    <td>
                      1581
                      <p class="bottom">
                        FACTURA ELECTRÓNICA
                      </p>
                    </td>
                    <td>
                      $13.090
                      <p class="bottom">
                        07-02-2020
                      </p>
                    </td>
                    <td>
                        --
                    </td>
                    <td>
                      <span class="label edocument-status-accepted" data-toggle="tooltip" data-placement="bottom" title="Documento fue aprobado por el SII">Aceptado</span>
                    </td>
                    <td class="align-right width-160" id="tr-table-actions-toolbar">
                          <div class="table-actions-toolbar width-160">
  <div class="btn-group">
      <a class="btn btn-default btn-xs" data-modal="dte-status" data-url="https://demo.relbase.cl/dtes/facturas/17614/dte_status" data-toggle="tooltip" data-placement="top" data-title="Ver estado del documento (SII)" data-container="body" href="#">
        <i class="fa fa-fw fa-list"></i>
</a>          <a target="_blank" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-title="Imprimir con cedible" data-container="body" href="https://relke-erp-test.s3-us-west-2.amazonaws.com/uploads/6/6/invoice/17614/envio_17614_168416.pdf?X-Amz-Expires=1800&amp;X-Amz-Date=20200303T184758Z&amp;X-Amz-Algorithm=AWS4-HMAC-SHA256&amp;X-Amz-Credential=AKIAJDGF5OAMF5ED5Z5A/20200303/us-west-2/s3/aws4_request&amp;X-Amz-SignedHeaders=host&amp;X-Amz-Signature=078fc44698962717c9987c30ae86875f1ecb06780cfc2d55d7415c1a4169635a">
            <i class="fa fa-files-o"></i>
</a>          <a target="_blank" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-title="Imprimir" data-container="body" href="https://demo.relbase.cl/dtes/facturas/17614/print_simple.pdf">
            <i class="fa fa-file-text-o"></i>
</a>        <a class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-title="Ver o Enviar por correo electrónico" data-container="body" href="/dtes/facturas/17614">
          <i class="fa fa-eye"></i>
</a>        <div class="btn-group btn-group-xs">
          <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-ellipsis-v"></i>
          </button>
          <ul class="dropdown-menu pull-right">
                  <li>
                    <a data-toggle="tooltip" data-placement="top" data-title="Generar órden de trabajo" data-container="body" href="https://demo.relbase.cl/orden-trabajo/new?e_document_id%5B%5D=17614">
                      <i class="fa fa-fw fa-folder-open"></i> Generar órden de trabajo
</a>                  </li>
                  <li>
                    <a data-modal="credit-note" data-url="/dtes/facturas/17614/new_credit_note" href="#">
                      <i class="fa fa-fw fa-ban"></i> Nota de crédito
</a>                  </li>
              <li>
                <a data-modal="dte-emails" data-url="https://demo.relbase.cl/dtes/facturas/17614/dte_emails_history" data-toggle="tooltip" data-placement="top" data-title="Historial de envíos" data-container="body" href="#">
                  <i class="fa fa-fw fa-history"></i> Historial de envíos
</a>              </li>
              <li>
                <a data-toggle="tooltip" data-placement="top" data-title="Duplicar" data-container="body" href="https://demo.relbase.cl/dtes/facturas/new?id_copy=17614">
                  <i class="fa fa-fw fa-clipboard"></i> Duplicar
</a>              </li>
          </ul>
        </div>

  </div>
</div>

                      </div>
                  	</td>
                  </tr>
                  <tr id="e_document_17613">
                    <td>
                      <span data-toggle="tooltip" data-placement="bottom" title="Empresa de ejemplo 1">
                        Empresa de ejemplo 1
                      </span>
                      <p class="bottom">
                        55555555-5
                      </p>
                    </td>
                    <td>
                      1580
                      <p class="bottom">
                        FACTURA ELECTRÓNICA
                      </p>
                    </td>
                    <td>
                      $1.190
                      <p class="bottom">
                        07-02-2020
                      </p>
                    </td>
                    <td>
                        --
                    </td>
                    <td>
                      <span class="label edocument-status-accepted" data-toggle="tooltip" data-placement="bottom" title="Documento fue aprobado por el SII">Aceptado</span>
                        <p class="bottom mt-5">
                          Fecha pago: 07-02-2020
                        </p>
                    </td>
                    <td class="align-right width-160" id="tr-table-actions-toolbar">
                          <div class="table-actions-toolbar width-160">
  <div class="btn-group">
      <a class="btn btn-default btn-xs" data-modal="dte-status" data-url="https://demo.relbase.cl/dtes/facturas/17613/dte_status" data-toggle="tooltip" data-placement="top" data-title="Ver estado del documento (SII)" data-container="body" href="#">
        <i class="fa fa-fw fa-list"></i>
</a>          <a target="_blank" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-title="Imprimir con cedible" data-container="body" href="https://relke-erp-test.s3-us-west-2.amazonaws.com/uploads/6/6/invoice/17613/envio_17613_828479.pdf?X-Amz-Expires=1800&amp;X-Amz-Date=20200303T184758Z&amp;X-Amz-Algorithm=AWS4-HMAC-SHA256&amp;X-Amz-Credential=AKIAJDGF5OAMF5ED5Z5A/20200303/us-west-2/s3/aws4_request&amp;X-Amz-SignedHeaders=host&amp;X-Amz-Signature=ee59428e7c96339f799397651e4532cd79d7206ebd68b204d361028bacb3bb4b">
            <i class="fa fa-files-o"></i>
</a>          <a target="_blank" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-title="Imprimir" data-container="body" href="https://demo.relbase.cl/dtes/facturas/17613/print_simple.pdf">
            <i class="fa fa-file-text-o"></i>
</a>        <a class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-title="Ver o Enviar por correo electrónico" data-container="body" href="/dtes/facturas/17613">
          <i class="fa fa-eye"></i>
</a>        <div class="btn-group btn-group-xs">
          <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-ellipsis-v"></i>
          </button>
          <ul class="dropdown-menu pull-right">
                  <li>
                    <a data-toggle="tooltip" data-placement="top" data-title="Generar órden de trabajo" data-container="body" href="https://demo.relbase.cl/orden-trabajo/new?e_document_id%5B%5D=17613">
                      <i class="fa fa-fw fa-folder-open"></i> Generar órden de trabajo
</a>                  </li>
                  <li>
                    <a data-modal="credit-note" data-url="/dtes/facturas/17613/new_credit_note" href="#">
                      <i class="fa fa-fw fa-ban"></i> Nota de crédito
</a>                  </li>
              <li>
                <a data-modal="dte-emails" data-url="https://demo.relbase.cl/dtes/facturas/17613/dte_emails_history" data-toggle="tooltip" data-placement="top" data-title="Historial de envíos" data-container="body" href="#">
                  <i class="fa fa-fw fa-history"></i> Historial de envíos
</a>              </li>
              <li>
                <a data-toggle="tooltip" data-placement="top" data-title="Duplicar" data-container="body" href="https://demo.relbase.cl/dtes/facturas/new?id_copy=17613">
                  <i class="fa fa-fw fa-clipboard"></i> Duplicar
</a>              </li>
          </ul>
        </div>

  </div>
</div>

                      </div>
                  	</td>
                  </tr>
                  <tr id="e_document_17588">
                    <td>
                      <span data-toggle="tooltip" data-placement="bottom" title="Asesorias Integrales En Tecnologia E Informatica Gitz Spa">
                        Gitz SpA
                      </span>
                      <p class="bottom">
                        76212828-4
                      </p>
                    </td>
                    <td>
                      1579
                      <p class="bottom">
                        FACTURA ELECTRÓNICA
                      </p>
                    </td>
                    <td>
                      $55.268
                      <p class="bottom">
                        03-02-2020
                      </p>
                    </td>
                    <td>
                          <span data-toggle="tooltip" data-placement="bottom" data-title="Nº 663" class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-truck fa-inverse fa-stack-1x"></i></span>
                    </td>
                    <td>
                      <span class="label edocument-status-accepted" data-toggle="tooltip" data-placement="bottom" title="Documento fue aprobado por el SII">Aceptado</span>
                        <p class="bottom mt-5">
                          Fecha pago: 03-02-2020
                        </p>
                    </td>
                    <td class="align-right width-160" id="tr-table-actions-toolbar">
                          <div class="table-actions-toolbar width-160">
  <div class="btn-group">
      <a class="btn btn-default btn-xs" data-modal="dte-status" data-url="https://demo.relbase.cl/dtes/facturas/17588/dte_status" data-toggle="tooltip" data-placement="top" data-title="Ver estado del documento (SII)" data-container="body" href="#">
        <i class="fa fa-fw fa-list"></i>
</a>          <a target="_blank" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-title="Imprimir con cedible" data-container="body" href="https://relke-erp-test.s3-us-west-2.amazonaws.com/uploads/6/6/invoice/17588/envio_17588_948472.pdf?X-Amz-Expires=1800&amp;X-Amz-Date=20200303T184758Z&amp;X-Amz-Algorithm=AWS4-HMAC-SHA256&amp;X-Amz-Credential=AKIAJDGF5OAMF5ED5Z5A/20200303/us-west-2/s3/aws4_request&amp;X-Amz-SignedHeaders=host&amp;X-Amz-Signature=41d77dadcca1b91407f653c29ab9bb6f20bf5151bea3eeaf36f70d23478b29a6">
            <i class="fa fa-files-o"></i>
</a>          <a target="_blank" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-title="Imprimir" data-container="body" href="https://demo.relbase.cl/dtes/facturas/17588/print_simple.pdf">
            <i class="fa fa-file-text-o"></i>
</a>        <a class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-title="Ver o Enviar por correo electrónico" data-container="body" href="/dtes/facturas/17588">
          <i class="fa fa-eye"></i>
</a>        <div class="btn-group btn-group-xs">
          <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-ellipsis-v"></i>
          </button>
          <ul class="dropdown-menu pull-right">
                  <li>
                    <a data-toggle="tooltip" data-placement="top" data-title="Generar órden de trabajo" data-container="body" href="https://demo.relbase.cl/orden-trabajo/new?e_document_id%5B%5D=17588">
                      <i class="fa fa-fw fa-folder-open"></i> Generar órden de trabajo
</a>                  </li>
                  <li>
                    <a data-modal="credit-note" data-url="/dtes/facturas/17588/new_credit_note" href="#">
                      <i class="fa fa-fw fa-ban"></i> Nota de crédito
</a>                  </li>
              <li>
                <a data-modal="dte-emails" data-url="https://demo.relbase.cl/dtes/facturas/17588/dte_emails_history" data-toggle="tooltip" data-placement="top" data-title="Historial de envíos" data-container="body" href="#">
                  <i class="fa fa-fw fa-history"></i> Historial de envíos
</a>              </li>
              <li>
                <a data-toggle="tooltip" data-placement="top" data-title="Duplicar" data-container="body" href="https://demo.relbase.cl/dtes/facturas/new?id_copy=17588">
                  <i class="fa fa-fw fa-clipboard"></i> Duplicar
</a>              </li>
          </ul>
        </div>

  </div>
</div>

                      </div>
                  	</td>
                  </tr>
                  <tr id="e_document_17583">
                    <td>
                      <span data-toggle="tooltip" data-placement="bottom" title="Banco de Chile">
                        Banco de Chile
                      </span>
                      <p class="bottom">
                        97004000-5
                      </p>
                    </td>
                    <td>
                      1578
                      <p class="bottom">
                        FACTURA ELECTRÓNICA
                      </p>
                    </td>
                    <td>
                      $516.428
                      <p class="bottom">
                        03-02-2020
                      </p>
                    </td>
                    <td>
                        --
                    </td>
                    <td>
                      <span class="label edocument-status-accepted" data-toggle="tooltip" data-placement="bottom" title="Documento fue aprobado por el SII">Aceptado</span>
                    </td>
                    <td class="align-right width-160" id="tr-table-actions-toolbar">
                          <div class="table-actions-toolbar width-160">
  <div class="btn-group">
      <a class="btn btn-default btn-xs" data-modal="dte-status" data-url="https://demo.relbase.cl/dtes/facturas/17583/dte_status" data-toggle="tooltip" data-placement="top" data-title="Ver estado del documento (SII)" data-container="body" href="#">
        <i class="fa fa-fw fa-list"></i>
</a>          <a target="_blank" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-title="Imprimir con cedible" data-container="body" href="https://relke-erp-test.s3-us-west-2.amazonaws.com/uploads/6/6/invoice/17583/envio_17583_515903.pdf?X-Amz-Expires=1800&amp;X-Amz-Date=20200303T184758Z&amp;X-Amz-Algorithm=AWS4-HMAC-SHA256&amp;X-Amz-Credential=AKIAJDGF5OAMF5ED5Z5A/20200303/us-west-2/s3/aws4_request&amp;X-Amz-SignedHeaders=host&amp;X-Amz-Signature=11f84a0c95b6eed2a3bc39e7be51bdfc647bf8897f3a93d3ed30cf2b7146622c">
            <i class="fa fa-files-o"></i>
</a>          <a target="_blank" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-title="Imprimir" data-container="body" href="https://demo.relbase.cl/dtes/facturas/17583/print_simple.pdf">
            <i class="fa fa-file-text-o"></i>
</a>        <a class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-title="Ver o Enviar por correo electrónico" data-container="body" href="/dtes/facturas/17583">
          <i class="fa fa-eye"></i>
</a>        <div class="btn-group btn-group-xs">
          <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-ellipsis-v"></i>
          </button>
          <ul class="dropdown-menu pull-right">
                  <li>
                    <a data-toggle="tooltip" data-placement="top" data-title="Generar órden de trabajo" data-container="body" href="https://demo.relbase.cl/orden-trabajo/new?e_document_id%5B%5D=17583">
                      <i class="fa fa-fw fa-folder-open"></i> Generar órden de trabajo
</a>                  </li>
                  <li>
                    <a data-modal="credit-note" data-url="/dtes/facturas/17583/new_credit_note" href="#">
                      <i class="fa fa-fw fa-ban"></i> Nota de crédito
</a>                  </li>
              <li>
                <a data-modal="dte-emails" data-url="https://demo.relbase.cl/dtes/facturas/17583/dte_emails_history" data-toggle="tooltip" data-placement="top" data-title="Historial de envíos" data-container="body" href="#">
                  <i class="fa fa-fw fa-history"></i> Historial de envíos
</a>              </li>
              <li>
                <a data-toggle="tooltip" data-placement="top" data-title="Duplicar" data-container="body" href="https://demo.relbase.cl/dtes/facturas/new?id_copy=17583">
                  <i class="fa fa-fw fa-clipboard"></i> Duplicar
</a>              </li>
          </ul>
        </div>

  </div>
</div>

                      </div>
                  	</td>
                  </tr>
                  <tr id="e_document_17578">
                    <td>
                      <span data-toggle="tooltip" data-placement="bottom" title="FALABELLA RETAIL S.A.">
                        FALABELLA
                      </span>
                      <p class="bottom">
                        77261280-K
                      </p>
                    </td>
                    <td>
                      1577
                      <p class="bottom">
                        FACTURA ELECTRÓNICA
                      </p>
                    </td>
                    <td>
                      $1.979.060
                      <p class="bottom">
                        03-02-2020
                      </p>
                    </td>
                    <td>
                        --
                    </td>
                    <td>
                      <span class="label edocument-status-accepted" data-toggle="tooltip" data-placement="bottom" title="Documento fue aprobado por el SII">Aceptado</span>
                        <p class="bottom mt-5">
                          Fecha pago: 03-05-2020
                        </p>
                    </td>
                    <td class="align-right width-160" id="tr-table-actions-toolbar">
                          <div class="table-actions-toolbar width-160">
  <div class="btn-group">
      <a class="btn btn-default btn-xs" data-modal="dte-status" data-url="https://demo.relbase.cl/dtes/facturas/17578/dte_status" data-toggle="tooltip" data-placement="top" data-title="Ver estado del documento (SII)" data-container="body" href="#">
        <i class="fa fa-fw fa-list"></i>
</a>          <a target="_blank" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-title="Imprimir con cedible" data-container="body" href="https://relke-erp-test.s3-us-west-2.amazonaws.com/uploads/6/6/invoice/17578/envio_17578_38370.pdf?X-Amz-Expires=1800&amp;X-Amz-Date=20200303T184758Z&amp;X-Amz-Algorithm=AWS4-HMAC-SHA256&amp;X-Amz-Credential=AKIAJDGF5OAMF5ED5Z5A/20200303/us-west-2/s3/aws4_request&amp;X-Amz-SignedHeaders=host&amp;X-Amz-Signature=dabcf8f9dd26e6bbc416994e1bf292882845ffea9ba6ef92adf0c1ed8d77c679">
            <i class="fa fa-files-o"></i>
</a>          <a target="_blank" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-title="Imprimir" data-container="body" href="https://demo.relbase.cl/dtes/facturas/17578/print_simple.pdf">
            <i class="fa fa-file-text-o"></i>
</a>        <a class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-title="Ver o Enviar por correo electrónico" data-container="body" href="/dtes/facturas/17578">
          <i class="fa fa-eye"></i>
</a>        <div class="btn-group btn-group-xs">
          <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-ellipsis-v"></i>
          </button>
          <ul class="dropdown-menu pull-right">
                  <li>
                    <a data-toggle="tooltip" data-placement="top" data-title="Generar órden de trabajo" data-container="body" href="https://demo.relbase.cl/orden-trabajo/new?e_document_id%5B%5D=17578">
                      <i class="fa fa-fw fa-folder-open"></i> Generar órden de trabajo
</a>                  </li>
                  <li>
                    <a data-modal="credit-note" data-url="/dtes/facturas/17578/new_credit_note" href="#">
                      <i class="fa fa-fw fa-ban"></i> Nota de crédito
</a>                  </li>
              <li>
                <a data-modal="dte-emails" data-url="https://demo.relbase.cl/dtes/facturas/17578/dte_emails_history" data-toggle="tooltip" data-placement="top" data-title="Historial de envíos" data-container="body" href="#">
                  <i class="fa fa-fw fa-history"></i> Historial de envíos
</a>              </li>
              <li>
                <a data-toggle="tooltip" data-placement="top" data-title="Duplicar" data-container="body" href="https://demo.relbase.cl/dtes/facturas/new?id_copy=17578">
                  <i class="fa fa-fw fa-clipboard"></i> Duplicar
</a>              </li>
          </ul>
        </div>

  </div>
</div>

                      </div>
                  	</td>
                  </tr>
                  <tr id="e_document_17113">
                    <td>
                      <span data-toggle="tooltip" data-placement="bottom" title="Asesorias Integrales En Tecnologia E Informatica Gitz Spa">
                        Gitz SpA
                      </span>
                      <p class="bottom">
                        76212828-4
                      </p>
                    </td>
                    <td>
                      1576
                      <p class="bottom">
                        FACTURA ELECTRÓNICA
                      </p>
                    </td>
                    <td>
                      $93.998
                      <p class="bottom">
                        03-01-2020
                      </p>
                    </td>
                    <td>
                        --
                    </td>
                    <td>
                      <span class="label edocument-status-accepted" data-toggle="tooltip" data-placement="bottom" title="Documento fue aprobado por el SII">Aceptado</span>
                    </td>
                    <td class="align-right width-160" id="tr-table-actions-toolbar">
                          <div class="table-actions-toolbar width-160">
  <div class="btn-group">
      <a class="btn btn-default btn-xs" data-modal="dte-status" data-url="https://demo.relbase.cl/dtes/facturas/17113/dte_status" data-toggle="tooltip" data-placement="top" data-title="Ver estado del documento (SII)" data-container="body" href="#">
        <i class="fa fa-fw fa-list"></i>
</a>          <a target="_blank" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-title="Imprimir con cedible" data-container="body" href="https://relke-erp-test.s3-us-west-2.amazonaws.com/uploads/6/6/invoice/17113/envio_17113_92435.pdf?X-Amz-Expires=1800&amp;X-Amz-Date=20200303T184758Z&amp;X-Amz-Algorithm=AWS4-HMAC-SHA256&amp;X-Amz-Credential=AKIAJDGF5OAMF5ED5Z5A/20200303/us-west-2/s3/aws4_request&amp;X-Amz-SignedHeaders=host&amp;X-Amz-Signature=eb4c186bc58bd4001b4b36c73b7a7d251e4d9b65db43c10dc9decbd7def1a365">
            <i class="fa fa-files-o"></i>
</a>          <a target="_blank" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-title="Imprimir" data-container="body" href="https://demo.relbase.cl/dtes/facturas/17113/print_simple.pdf">
            <i class="fa fa-file-text-o"></i>
</a>        <a class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-title="Ver o Enviar por correo electrónico" data-container="body" href="/dtes/facturas/17113">
          <i class="fa fa-eye"></i>
</a>        <div class="btn-group btn-group-xs">
          <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-ellipsis-v"></i>
          </button>
          <ul class="dropdown-menu pull-right">
                  <li>
                    <a data-toggle="tooltip" data-placement="top" data-title="Generar órden de trabajo" data-container="body" href="https://demo.relbase.cl/orden-trabajo/new?e_document_id%5B%5D=17113">
                      <i class="fa fa-fw fa-folder-open"></i> Generar órden de trabajo
</a>                  </li>
                  <li>
                    <a data-modal="credit-note" data-url="/dtes/facturas/17113/new_credit_note" href="#">
                      <i class="fa fa-fw fa-ban"></i> Nota de crédito
</a>                  </li>
              <li>
                <a data-modal="dte-emails" data-url="https://demo.relbase.cl/dtes/facturas/17113/dte_emails_history" data-toggle="tooltip" data-placement="top" data-title="Historial de envíos" data-container="body" href="#">
                  <i class="fa fa-fw fa-history"></i> Historial de envíos
</a>              </li>
              <li>
                <a data-toggle="tooltip" data-placement="top" data-title="Duplicar" data-container="body" href="https://demo.relbase.cl/dtes/facturas/new?id_copy=17113">
                  <i class="fa fa-fw fa-clipboard"></i> Duplicar
</a>              </li>
          </ul>
        </div>

  </div>
</div>

                      </div>
                  	</td>
                  </tr>
                  <tr id="e_document_17088">
                    <td>
                      <span data-toggle="tooltip" data-placement="bottom" title="Minera Escondida Limitada">
                        Escondida
                      </span>
                      <p class="bottom">
                        79587210-8
                      </p>
                    </td>
                    <td>
                      1575
                      <p class="bottom">
                        FACTURA ELECTRÓNICA
                      </p>
                    </td>
                    <td>
                      $2.782.458
                      <p class="bottom">
                        02-01-2020
                      </p>
                    </td>
                    <td>
                          <span data-toggle="tooltip" data-placement="bottom" data-title="Nº 662" class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-truck fa-inverse fa-stack-1x"></i></span>
                    </td>
                    <td>
                      <span class="label edocument-status-accepted" data-toggle="tooltip" data-placement="bottom" title="Documento fue aprobado por el SII">Aceptado</span>
                        <p class="bottom mt-5">
                          Fecha pago: 02-01-2020
                        </p>
                    </td>
                    <td class="align-right width-160" id="tr-table-actions-toolbar">
                          <div class="table-actions-toolbar width-160">
  <div class="btn-group">
      <a class="btn btn-default btn-xs" data-modal="dte-status" data-url="https://demo.relbase.cl/dtes/facturas/17088/dte_status" data-toggle="tooltip" data-placement="top" data-title="Ver estado del documento (SII)" data-container="body" href="#">
        <i class="fa fa-fw fa-list"></i>
</a>          <a target="_blank" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-title="Imprimir con cedible" data-container="body" href="https://relke-erp-test.s3-us-west-2.amazonaws.com/uploads/6/6/invoice/17088/envio_17088_735665.pdf?X-Amz-Expires=1800&amp;X-Amz-Date=20200303T184758Z&amp;X-Amz-Algorithm=AWS4-HMAC-SHA256&amp;X-Amz-Credential=AKIAJDGF5OAMF5ED5Z5A/20200303/us-west-2/s3/aws4_request&amp;X-Amz-SignedHeaders=host&amp;X-Amz-Signature=bc4f716fd2f90bdefab0b3d4444e053161961f2c5925fab5cc6e8a9c57346cff">
            <i class="fa fa-files-o"></i>
</a>          <a target="_blank" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-title="Imprimir" data-container="body" href="https://demo.relbase.cl/dtes/facturas/17088/print_simple.pdf">
            <i class="fa fa-file-text-o"></i>
</a>        <a class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-title="Ver o Enviar por correo electrónico" data-container="body" href="/dtes/facturas/17088">
          <i class="fa fa-eye"></i>
</a>        <div class="btn-group btn-group-xs">
          <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-ellipsis-v"></i>
          </button>
          <ul class="dropdown-menu pull-right">
                  <li>
                    <a data-toggle="tooltip" data-placement="top" data-title="Generar órden de trabajo" data-container="body" href="https://demo.relbase.cl/orden-trabajo/new?e_document_id%5B%5D=17088">
                      <i class="fa fa-fw fa-folder-open"></i> Generar órden de trabajo
</a>                  </li>
                  <li>
                    <a data-modal="credit-note" data-url="/dtes/facturas/17088/new_credit_note" href="#">
                      <i class="fa fa-fw fa-ban"></i> Nota de crédito
</a>                  </li>
              <li>
                <a data-modal="dte-emails" data-url="https://demo.relbase.cl/dtes/facturas/17088/dte_emails_history" data-toggle="tooltip" data-placement="top" data-title="Historial de envíos" data-container="body" href="#">
                  <i class="fa fa-fw fa-history"></i> Historial de envíos
</a>              </li>
              <li>
                <a data-toggle="tooltip" data-placement="top" data-title="Duplicar" data-container="body" href="https://demo.relbase.cl/dtes/facturas/new?id_copy=17088">
                  <i class="fa fa-fw fa-clipboard"></i> Duplicar
</a>              </li>
          </ul>
        </div>

  </div>
</div>

                      </div>
                  	</td>
                  </tr>
                  <tr id="e_document_17079">
                    <td>
                      <span data-toggle="tooltip" data-placement="bottom" title="SODIMAC S.A.">
                        SODIMAC
                      </span>
                      <p class="bottom">
                        96792430-K
                      </p>
                    </td>
                    <td>
                      1574
                      <p class="bottom">
                        FACTURA ELECTRÓNICA
                      </p>
                    </td>
                    <td>
                      $117.685
                      <p class="bottom">
                        02-01-2020
                      </p>
                    </td>
                    <td>
                        --
                    </td>
                    <td>
                      <span class="label edocument-status-accepted" data-toggle="tooltip" data-placement="bottom" title="Documento fue aprobado por el SII">Aceptado</span>
                        <p class="bottom mt-5">
                          Fecha pago: 02-01-2020
                        </p>
                    </td>
                    <td class="align-right width-160" id="tr-table-actions-toolbar">
                          <div class="table-actions-toolbar width-160">
  <div class="btn-group">
      <a class="btn btn-default btn-xs" data-modal="dte-status" data-url="https://demo.relbase.cl/dtes/facturas/17079/dte_status" data-toggle="tooltip" data-placement="top" data-title="Ver estado del documento (SII)" data-container="body" href="#">
        <i class="fa fa-fw fa-list"></i>
</a>          <a target="_blank" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-title="Imprimir con cedible" data-container="body" href="https://relke-erp-test.s3-us-west-2.amazonaws.com/uploads/6/6/invoice/17079/envio_17079_409012.pdf?X-Amz-Expires=1800&amp;X-Amz-Date=20200303T184758Z&amp;X-Amz-Algorithm=AWS4-HMAC-SHA256&amp;X-Amz-Credential=AKIAJDGF5OAMF5ED5Z5A/20200303/us-west-2/s3/aws4_request&amp;X-Amz-SignedHeaders=host&amp;X-Amz-Signature=a95940ce922001391794f51cecb8772f7b27732afddeab68f1cfa35cc3cc1feb">
            <i class="fa fa-files-o"></i>
</a>          <a target="_blank" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-title="Imprimir" data-container="body" href="https://demo.relbase.cl/dtes/facturas/17079/print_simple.pdf">
            <i class="fa fa-file-text-o"></i>
</a>        <a class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-title="Ver o Enviar por correo electrónico" data-container="body" href="/dtes/facturas/17079">
          <i class="fa fa-eye"></i>
</a>        <div class="btn-group btn-group-xs">
          <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-ellipsis-v"></i>
          </button>
          <ul class="dropdown-menu pull-right">
                  <li>
                    <a data-toggle="tooltip" data-placement="top" data-title="Generar órden de trabajo" data-container="body" href="https://demo.relbase.cl/orden-trabajo/new?e_document_id%5B%5D=17079">
                      <i class="fa fa-fw fa-folder-open"></i> Generar órden de trabajo
</a>                  </li>
                  <li>
                    <a data-modal="credit-note" data-url="/dtes/facturas/17079/new_credit_note" href="#">
                      <i class="fa fa-fw fa-ban"></i> Nota de crédito
</a>                  </li>
              <li>
                <a data-modal="dte-emails" data-url="https://demo.relbase.cl/dtes/facturas/17079/dte_emails_history" data-toggle="tooltip" data-placement="top" data-title="Historial de envíos" data-container="body" href="#">
                  <i class="fa fa-fw fa-history"></i> Historial de envíos
</a>              </li>
              <li>
                <a data-toggle="tooltip" data-placement="top" data-title="Duplicar" data-container="body" href="https://demo.relbase.cl/dtes/facturas/new?id_copy=17079">
                  <i class="fa fa-fw fa-clipboard"></i> Duplicar
</a>              </li>
          </ul>
        </div>

  </div>
</div>

                      </div>
                  	</td>
                  </tr>
          </tbody>
        </table>
      </div>
      <div id="invoice-paginate" class="text-center">
         <nav class="pagination">
    
    
        <span class="page current">
  1
</span>

        <span class="page">
  <a rel="next" href="/dtes/facturas?branch_ids=4&amp;page=2&amp;status_query=all">2</a>
</span>

        <span class="page">
  <a href="/dtes/facturas?branch_ids=4&amp;page=3&amp;status_query=all">3</a>
</span>

        <span class="page">
  <a href="/dtes/facturas?branch_ids=4&amp;page=4&amp;status_query=all">4</a>
</span>

        <span class="page">
  <a href="/dtes/facturas?branch_ids=4&amp;page=5&amp;status_query=all">5</a>
</span>

        <span class="page gap">&hellip;</span>

      <span class="next">
  <a rel="next" href="/dtes/facturas?branch_ids=4&amp;page=2&amp;status_query=all">Siguiente &rsaquo;</a>
</span>

      <span class="last">
  <a href="/dtes/facturas?branch_ids=4&amp;page=9&amp;status_query=all">Última &raquo;</a>
</span>

  </nav>

      </div>
  </div>

    </div>
  </div>
</div>

          <!-- Footer -->
<div class="row mt-20">
  <div class="col-xs-12 col-sm-12 col-md-12">
	<span>
		<i class="fa fa-copyright"></i>
		<small> 2020 <a target="_blank" href="http://www.relke.cl">Relke</a></small>
    | <small class="text-right"><a target="_blank" href="https://www.relbase.cl/inicio/terminos">Términos y Condiciones de Uso</a></small>
    | <small class="text-right"><a target="_blank" href="https://www.relbase.cl/inicio/politica">Política de Privacidad</a></small>
    | <small class="text-right"><a target="_blank" href="http://relbase.zendesk.com/hc">Centro de Ayuda</a></small>
	</span>
  </div>
</div>

        </div>
      </div>
    
  <div class="modal fade" id="modal-credit-note" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><i class="fa fa-fw fa-ban"></i> Nota de crédito </h4>
      </div>
      <div class="modal-body">
        <div id="credit-note-details">
        </div>
      </div><!-- modal-body -->
      <div class="modal-footer">
        <button type="button" class="btn btn-link" data-dismiss="modal">Cancelar</button>
      </div>
    </div><!-- modal-content -->
  </div><!-- modal-dialog -->
</div><!-- modal -->

  <div class="modal fade" id="modal-dte-status" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><i class="fa fa-fw fa-refresh"></i> Historial DTE
        </h4>
      </div>
      <div class="modal-body">
        <div id="dte-status-details">
          <div class="row">
  <div class="col-md-12">
  </div>
</div>
  <div class="text-center mt-40 mb-80">
    <h4>No existen resultados para su búsqueda.</h4>
  </div>
<script>
//<![CDATA[

  $("[data-toggle='tooltip']").tooltip()

//]]>
</script>
        </div>
      </div><!-- modal-body -->
      <div class="modal-footer">
        <button type="button" class="btn btn-link" data-dismiss="modal">Cancelar</button>
      </div>
    </div><!-- modal-content -->
  </div><!-- modal-dialog -->
</div><!-- modal -->

  <div class="modal fade" id="modal-dte-emails" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><i class="fa fa-fw fa-history"></i> Historial envío por correo electrónico al cliente
        </h4>
      </div>
      <div class="modal-body">
        <div id="dte-emails-details">
          <div class="row">
  <div class="col-md-12">
  </div>
</div>
  <div class="text-center mt-40 mb-80">
    <h4>Aún no existen envíos por correo electrónico al cliente</h4>
  </div>
<script>
//<![CDATA[

  $("[data-toggle='tooltip']").tooltip()

//]]>
</script>
        </div>
      </div><!-- modal-body -->
      <div class="modal-footer">
        <button type="button" class="btn btn-link" data-dismiss="modal">Cancelar</button>
      </div>
    </div><!-- modal-content -->
  </div><!-- modal-dialog -->
</div><!-- modal -->

  <div class="modal fade" id="modal-view-mail" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div id="view-mail-details">
            
      </div>
    </div><!-- modal-content -->
  </div><!-- modal-dialog -->
</div><!-- modal -->


    <script>
//<![CDATA[
window.gon={};
//]]>
</script>
    <script>
//<![CDATA[

      BootstrapSetup.init();
      RetinaSetup.init();
      Select2Setup.init();

      DeleterApp.init();
      InputMask.init();

      BootstrapSubmenu.init();
      BootstrapDatePickerSetup.init();

      ZendeskSetup.init('Javier Elgueta','jelgueta@grupofirma.cl');

//]]>
</script>    
  <script>
//<![CDATA[

    DteEmailsModal.init()
    CreditNoteModal.init()
    DteStatusModal.init()
    SearchApp.init()

//]]>
</script>
  </body>
</html>
