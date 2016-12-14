<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>test Database</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.11/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.1.2/css/buttons.bootstrap.min.css">  
  <!-- Code Mirror -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.13.2/codemirror.min.css">
  <!-- Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
  
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- Salvattore -->
  <link rel="stylesheet" href="plugins/salvattore/salvattore.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/all-skins.min.css">
  <!-- SchemaSpy -->
  <link rel="stylesheet" href="schemaSpy.css">
  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="index.html" class="navbar-brand"><b>test</b> Database</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.html">Tables <span class="sr-only">(current)</span></a></li>            
			<!--<li><a href="components.html" title="List of system components">Components</a></li>-->
			<li><a href="columns.html" title="All of the columns in the schema">Columns</a></li>
			<li><a href="constraints.html" title="Useful for diagnosing error messages that just give constraint name or number">Constraints</a></li>
			<li><a href="relationships.html" title="Diagram of table relationships">Relationships</a></li>
			<li><a href="orphans.html" title="View of tables with neither parents nor children">Orphan&nbsp;Tables</a></li>				
			<li><a href="anomalies.html" title="Things that might not be quite right">Anomalies</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->

      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Main content -->
  <!-- Full Width Column -->
  <div class="content-wrapper">
          <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>Tables</h1></br>
		<div class="callout callout-info"> 		
			<h4>SchemaSpy Analysis of test.public</h4>
			<p>Generated on Wed Dec 07 16:11 PST 2016</p>
		</div>
        <a href="test.public.xml" title="XML Representation">XML Representation</a></br>
		<a href="insertionOrder.txt" title="Useful for loading data into a database">Insertion Order</a>
        <a href="deletionOrder.txt" title="Useful for purging data from a database">Deletion Order</a>	
      </section>
      <!-- Main content -->
      <section class="content">
		<div class="box box-primary">		
			<div class="box-header with-border">
			  <h3 class="box-title">Database Properties</h3>
			  <span class="label label-primary pull-right"><i class="fa fa-cog fa-2x"></i></span>			  
			</div><!-- /.box-header -->
			<div class="box-body">
			  <p>Database Type: PostgreSQL - 9.4.10</p>			  
			</div><!-- /.box-body -->
		</div>
		<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tables</h3>			  
			  <span class="label label-primary pull-right"><i class="fa fa-database fa-2x"></i></span>
            </div><!-- /.box-header -->
            <div class="box-body">
            <table id="database_objects" class="table table-bordered table-striped dataTable" role="grid">
				<thead>
					<tr>
					  <th valign="bottom">Table / View</th>
					  <th align="right" valign="bottom">Children</th>
					  <th align="right" valign="bottom">Parents</th>
					  <th align="right" valign="bottom">Columns</th>
					  <th align="right" valign="bottom">Rows</th>
					  <th align="right" valign="bottom">Type</th>
					  <th class="toggle">Comments</th>
					</tr>
				</thead>
				<tbody>
				 <tr class="tbl even" valign="top">  <td class="detail"><a href="tables/__EFMigrationsHistory.html">__EFMigrationsHistory</a></td>
				  <td class="detail" align="right">0</td>
				  <td class="detail" align="right">0</td>
				  <td class="detail" align="right">2</td>
				  <td class="detail" align="right">1</td>
				  <td class="detail" align="right">Table</td>
				  <td class="comment detail" style="display: table-cell;"></td>
				  </tr>
				 <tr class="tbl even" valign="top">  <td class="detail"><a href="tables/BUS_NOTIFICATION.html">BUS_NOTIFICATION</a></td>
				  <td class="detail" align="right">1</td>
				  <td class="detail" align="right">1</td>
				  <td class="detail" align="right">2</td>
				  <td class="detail" align="right">0</td>
				  <td class="detail" align="right">Table</td>
				  <td class="comment detail" style="display: table-cell;"></td>
				  </tr>
				 <tr class="tbl even" valign="top">  <td class="detail"><a href="tables/CCWDATA.html">CCWDATA</a></td>
				  <td class="detail" align="right">1</td>
				  <td class="detail" align="right">0</td>
				  <td class="detail" align="right">1</td>
				  <td class="detail" align="right">0</td>
				  <td class="detail" align="right">Table</td>
				  <td class="comment detail" style="display: table-cell;"></td>
				  </tr>
				 <tr class="tbl even" valign="top">  <td class="detail"><a href="tables/CHANGE_HISTORY.html">CHANGE_HISTORY</a></td>
				  <td class="detail" align="right">0</td>
				  <td class="detail" align="right">1</td>
				  <td class="detail" align="right">2</td>
				  <td class="detail" align="right">0</td>
				  <td class="detail" align="right">Table</td>
				  <td class="comment detail" style="display: table-cell;"></td>
				  </tr>
				 <tr class="tbl even" valign="top">  <td class="detail"><a href="tables/CITY.html">CITY</a></td>
				  <td class="detail" align="right">1</td>
				  <td class="detail" align="right">1</td>
				  <td class="detail" align="right">2</td>
				  <td class="detail" align="right">0</td>
				  <td class="detail" align="right">Table</td>
				  <td class="comment detail" style="display: table-cell;"></td>
				  </tr>
				 <tr class="tbl even" valign="top">  <td class="detail"><a href="tables/FAVORITE_CONTEXT_TYPE.html">FAVORITE_CONTEXT_TYPE</a></td>
				  <td class="detail" align="right">0</td>
				  <td class="detail" align="right">0</td>
				  <td class="detail" align="right">2</td>
				  <td class="detail" align="right">0</td>
				  <td class="detail" align="right">Table</td>
				  <td class="comment detail" style="display: table-cell;"></td>
				  </tr>
				 <tr class="tbl even" valign="top">  <td class="detail"><a href="tables/INSPECTION.html">INSPECTION</a></td>
				  <td class="detail" align="right">0</td>
				  <td class="detail" align="right">2</td>
				  <td class="detail" align="right">3</td>
				  <td class="detail" align="right">0</td>
				  <td class="detail" align="right">Table</td>
				  <td class="comment detail" style="display: table-cell;"></td>
				  </tr>
				 <tr class="tbl even" valign="top">  <td class="detail"><a href="tables/LOCAL_AREA.html">LOCAL_AREA</a></td>
				  <td class="detail" align="right">1</td>
				  <td class="detail" align="right">1</td>
				  <td class="detail" align="right">2</td>
				  <td class="detail" align="right">0</td>
				  <td class="detail" align="right">Table</td>
				  <td class="comment detail" style="display: table-cell;"></td>
				  </tr>
				 <tr class="tbl even" valign="top">  <td class="detail"><a href="tables/OWNER.html">OWNER</a></td>
				  <td class="detail" align="right">4</td>
				  <td class="detail" align="right">2</td>
				  <td class="detail" align="right">10</td>
				  <td class="detail" align="right">0</td>
				  <td class="detail" align="right">Table</td>
				  <td class="comment detail" style="display: table-cell;"></td>
				  </tr>
				 <tr class="tbl even" valign="top">  <td class="detail"><a href="tables/OWNER_ATTACHMENTS.html">OWNER_ATTACHMENTS</a></td>
				  <td class="detail" align="right">0</td>
				  <td class="detail" align="right">1</td>
				  <td class="detail" align="right">2</td>
				  <td class="detail" align="right">0</td>
				  <td class="detail" align="right">Table</td>
				  <td class="comment detail" style="display: table-cell;"></td>
				  </tr>
				 <tr class="tbl even" valign="top">  <td class="detail"><a href="tables/OWNER_CONTACT.html">OWNER_CONTACT</a></td>
				  <td class="detail" align="right">2</td>
				  <td class="detail" align="right">1</td>
				  <td class="detail" align="right">2</td>
				  <td class="detail" align="right">0</td>
				  <td class="detail" align="right">Table</td>
				  <td class="comment detail" style="display: table-cell;"></td>
				  </tr>
				 <tr class="tbl even" valign="top">  <td class="detail"><a href="tables/OWNER_CONTACT_ADDRESS.html">OWNER_CONTACT_ADDRESS</a></td>
				  <td class="detail" align="right">0</td>
				  <td class="detail" align="right">1</td>
				  <td class="detail" align="right">2</td>
				  <td class="detail" align="right">0</td>
				  <td class="detail" align="right">Table</td>
				  <td class="comment detail" style="display: table-cell;"></td>
				  </tr>
				 <tr class="tbl even" valign="top">  <td class="detail"><a href="tables/OWNER_CONTACT_PHONE.html">OWNER_CONTACT_PHONE</a></td>
				  <td class="detail" align="right">0</td>
				  <td class="detail" align="right">1</td>
				  <td class="detail" align="right">2</td>
				  <td class="detail" align="right">0</td>
				  <td class="detail" align="right">Table</td>
				  <td class="comment detail" style="display: table-cell;"></td>
				  </tr>
				 <tr class="tbl even" valign="top">  <td class="detail"><a href="tables/OWNER_NOTES.html">OWNER_NOTES</a></td>
				  <td class="detail" align="right">0</td>
				  <td class="detail" align="right">1</td>
				  <td class="detail" align="right">2</td>
				  <td class="detail" align="right">0</td>
				  <td class="detail" align="right">Table</td>
				  <td class="comment detail" style="display: table-cell;"></td>
				  </tr>
				 <tr class="tbl even" valign="top">  <td class="detail"><a href="tables/PROVINCE.html">PROVINCE</a></td>
				  <td class="detail" align="right">1</td>
				  <td class="detail" align="right">0</td>
				  <td class="detail" align="right">1</td>
				  <td class="detail" align="right">0</td>
				  <td class="detail" align="right">Table</td>
				  <td class="comment detail" style="display: table-cell;"></td>
				  </tr>
				 <tr class="tbl even" valign="top">  <td class="detail"><a href="tables/REGION.html">REGION</a></td>
				  <td class="detail" align="right">2</td>
				  <td class="detail" align="right">1</td>
				  <td class="detail" align="right">2</td>
				  <td class="detail" align="right">0</td>
				  <td class="detail" align="right">Table</td>
				  <td class="comment detail" style="display: table-cell;"></td>
				  </tr>
				 <tr class="tbl even" valign="top">  <td class="detail"><a href="tables/SCHOOL_BUS.html">SCHOOL_BUS</a></td>
				  <td class="detail" align="right">5</td>
				  <td class="detail" align="right">2</td>
				  <td class="detail" align="right">14</td>
				  <td class="detail" align="right">0</td>
				  <td class="detail" align="right">Table</td>
				  <td class="comment detail" style="display: table-cell;"></td>
				  </tr>
				 <tr class="tbl even" valign="top">  <td class="detail"><a href="tables/SCHOOL_BUS_ATTACHMENT.html">SCHOOL_BUS_ATTACHMENT</a></td>
				  <td class="detail" align="right">0</td>
				  <td class="detail" align="right">1</td>
				  <td class="detail" align="right">2</td>
				  <td class="detail" align="right">0</td>
				  <td class="detail" align="right">Table</td>
				  <td class="comment detail" style="display: table-cell;"></td>
				  </tr>
				 <tr class="tbl even" valign="top">  <td class="detail"><a href="tables/SCHOOL_BUS_NOTE.html">SCHOOL_BUS_NOTE</a></td>
				  <td class="detail" align="right">0</td>
				  <td class="detail" align="right">1</td>
				  <td class="detail" align="right">2</td>
				  <td class="detail" align="right">0</td>
				  <td class="detail" align="right">Table</td>
				  <td class="comment detail" style="display: table-cell;"></td>
				  </tr>
				 <tr class="tbl even" valign="top">  <td class="detail"><a href="tables/SCHOOL_DISTRICT.html">SCHOOL_DISTRICT</a></td>
				  <td class="detail" align="right">1</td>
				  <td class="detail" align="right">1</td>
				  <td class="detail" align="right">2</td>
				  <td class="detail" align="right">0</td>
				  <td class="detail" align="right">Table</td>
				  <td class="comment detail" style="display: table-cell;"></td>
				  </tr>
				 <tr class="tbl even" valign="top">  <td class="detail"><a href="tables/USER.html">USER</a></td>
				  <td class="detail" align="right">2</td>
				  <td class="detail" align="right">0</td>
				  <td class="detail" align="right">4</td>
				  <td class="detail" align="right">0</td>
				  <td class="detail" align="right">Table</td>
				  <td class="comment detail" style="display: table-cell;"></td>
				  </tr>
				 <tr class="tbl even" valign="top">  <td class="detail"><a href="tables/USER_FAVORITE.html">USER_FAVORITE</a></td>
				  <td class="detail" align="right">0</td>
				  <td class="detail" align="right">0</td>
				  <td class="detail" align="right">3</td>
				  <td class="detail" align="right">0</td>
				  <td class="detail" align="right">Table</td>
				  <td class="comment detail" style="display: table-cell;"></td>
				  </tr>
				 <tr class="tbl even" valign="top">  <td class="detail"><a href="tables/USER_NOTIFICATIONS.html">USER_NOTIFICATIONS</a></td>
				  <td class="detail" align="right">0</td>
				  <td class="detail" align="right">2</td>
				  <td class="detail" align="right">3</td>
				  <td class="detail" align="right">0</td>
				  <td class="detail" align="right">Table</td>
				  <td class="comment detail" style="display: table-cell;"></td>
				  </tr>
				  			</table>
            </div>
            <!-- /.box-body -->
          </div>			
      </section>
      <!-- /.content -->
    
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div>
      <div class="pull-right hidden-xs">
        <a href="https://github.com/schemaspy/schemaspy" title="GitHub for SchemaSpy"><i class="fa fa-github-square fa-2x"></i></a>
        <a href="http://stackoverflow.com/questions/tagged/schemaspy" title="StackOverflow for SchemaSpy"><i class="fa fa-stack-overflow fa-2x"></i></a>
      </div>
      <strong>Generate by <a href="http://schemaspy.org/" class="logo-text"><i class="fa fa-database"></i> SchemeSpy 6.0</a></strong>
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.1.4 -->
<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
<script src="plugins/jQueryUI/jquery-ui.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.1.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.1.2/js/buttons.bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.1.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.1.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.1.2/js/buttons.colVis.min.js"></script>

<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- Salvattore -->
<script src="plugins/salvattore/salvattore.min.js"></script>
<!-- CodeMirror -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.13.2/codemirror.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.13.2/mode/sql/sql.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script src="main.js"></script>
<script src="schemaSpy.js"></script>
</body>
</html>
