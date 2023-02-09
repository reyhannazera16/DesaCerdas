<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Bryan McBride">
    <title class="title">GeoJSON Dashboard</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/leaflet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.1/bootstrap-table.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/c3/0.4.11/c3.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/leaflet.esri.geocoder/1.0.2/esri-leaflet-geocoder.css">
    <link rel = "stylesheet" href = "{{ asset('app-assets/css/app.css') }}"/>
    <link rel="stylesheet" href="{{ asset('app-assets/vendors/jQuery-QueryBuilder/query-builder.default.min.css') }}">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div id="loading-mask" class="modal-backdrop">
      <div class="loading-indicator">
        <div class="progress progress-striped active">
          <div class="progress-bar progress-bar-info loading-bar"></div>
        </div>
      </div>
    </div>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <span class="navbar-brand title">GeoJSON Dashboard</span>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a id="about-btn" href="#" data-toggle="collapse" data-target=".navbar-collapse.in"><i class="fa fa-question-circle fa-white"></i> About</a></li>
            <li><a id="chart-btn" href="#" data-toggle="collapse" data-target=".navbar-collapse.in"><i class="fa fa-bar-chart fa-white"></i> Charts</a></li>
            <li><a id="extent-btn" href="#" data-toggle="collapse" data-target=".navbar-collapse.in"><i class="fa fa-arrows-alt fa-white"></i> Feature Extent</a></li>
            <li class="hidden-md hidden-lg"><a id="filter-btn" href="#" data-toggle="collapse" data-target=".navbar-collapse.in"><i class="fa fa-filter fa-white"></i> Filter Data</a></li>
            <li class="dropdown">
              <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-laptop fa-white"></i> <span id="view">Split View </span><b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#" data-toggle="collapse" data-target=".navbar-collapse.in" name="view" id="map-graph"><i class="fa fa-th-large"></i> Split View</a></li>
                <li><a href="#" data-toggle="collapse" data-target=".navbar-collapse.in" name="view" id="map-only"><i class="fa fa-globe"></i> Map View</a></li>
                <li><a href="#" data-toggle="collapse" data-target=".navbar-collapse.in" name="view" id="graph-only"><i class="fa fa-table"></i> Table View</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div id="map-container">
      <div id="map"></div>
    </div>

    <div id="table-container">
      <div id="toolbar" style="width: 400px;">
        <div class="btn-group" role="group">
          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#filterModal">
            <i class="fa fa-filter"></i> Filter Data
          </button>
          <div class="btn-group">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-cloud-download"></i> Export Data <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
              <li><a href="#" id="download-csv-btn"><i class="fa fa-file-text-o"></i> CSV</a></li>
              <li><a href="#" id="download-excel-btn"><i class="fa fa-file-excel-o"></i> Excel</a></li>
              <li><a href="#" id="download-pdf-btn"><i class="fa fa-file-pdf-o"></i> PDF</a></li>
            </ul>
          </div>
        </div>
        <span id="feature-count" class="text-muted" style="padding-left: 15px;"></span>
      </div>
      <table id="table"></table>
    </div>

    <div class="modal fade" id="aboutModal" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Welcome to the GeoJSON Data Dashboard!</h4>
          </div>
          <div class="modal-body">
            <ul class="nav nav-tabs" id="aboutTabs">
              <li class="active"><a href="#about-tab" data-toggle="tab"><i class="fa fa-question-circle"></i> About the project</a></li>
              <li><a href="#configuration-tab" data-toggle="tab"><i class="fa fa-gear"></i> Configuration</a></li>
            </ul>
            <div class="tab-content" id="aboutTabsContent">
              <div class="tab-pane fade active in" id="about-tab">
                <p>A configurable framework for building a geographic "data dashboard" from a GeoJSON file. Open source, MIT licensed, and available on <a href="https://github.com/fulcrumapp/geojson-dashboard" target="_blank">GitHub</a>.</p>
                <div class="panel panel-primary">
                  <div class="panel-heading">Features</div>
                  <ul class="list-group">
                    <li class="list-group-item">Flexible template built on active open source components</li>
                    <li class="list-group-item">Entirely client-side, can be hosted for free on <a href="https://pages.github.com/" target="_blank">GitHub Pages</a></li>
                    <li class="list-group-item">Built on the incredibly popular <a href="http://getbootstrap.com/" target="_blank">Bootstrap</a> UI framework</li>
                    <li class="list-group-item">Maps via <a href="http://leafletjs.com/" target="_blank">Leaflet</a>, the leading open source JavaScript mapping library</li>
                    <li class="list-group-item">Interactive data table with sorting, searching, column toggling, and data export via the <a href="http://bootstrap-table.wenzhixin.net.cn/" target="_blank">Bootstrap Table</a> plugin</li>
                    <li class="list-group-item">Advanced, interactive GeoJSON data querying that integrates <a href="http://mistic100.github.io/jQuery-QueryBuilder/index.html" target="_blank">jQuery QueryBuilder</a> with <a href="http://alasql.org/" target="_blank">AlaSQL</a></li>
                    <li class="list-group-item">Advanced charting via <a href="http://c3js.org/" target="_blank">C3.js</a>, the D3-based reusable chart library</li>
                  </ul>
                </div>
              </div>
              <div class="tab-pane fade" id="configuration-tab" >
                <p>This dashboard is designed to fetch a GeoJSON file and present the data in an interactive environment for exploration and analysis.</p>
                <ol>
                  <li>Fork or download the GitHub repo.</li>
                  <li>Open the <em>assets/js/app.js</em> file and edit the <em>config</em> and <em>properties</em> variables.</li>
                  <li>The <em>drawCharts()</em> function demonstrates how charts can be configured.</li>
                  <li>Additional map layers can be added to the global <em>map</em> variable.</li>
                </ol>
                <p><strong>Notes</strong></p>
                  <ul>
                    <li>Attempting to load huge GeoJSON files will likely cause browser issues.</li>
                    <li>The <em>properties.table</em> object accepts <a href="http://bootstrap-table.wenzhixin.net.cn/documentation/#column-options" target="_blank">Bootstrap Table column options</a>.</li>
                    <li>The <em>properties.filter</em> object accepts <a href="http://mistic100.github.io/jQuery-QueryBuilder/index.html#filters" target="_blank">jQuery QueryBuilder filter options</a>.</li>
                    <li>Setting the <em>filter.values</em> property to an empty array ([]) will fetch all the distinct values for that property.</li>
                    <li>Setting the <em>table</em>, <em>filter</em>, or <em>info</em> objects to <em>false</em> will hide them from that component.</li>
                  </ul>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="chartModal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Charts</h4>
          </div>
          <div class="modal-body" style="overflow: auto;">
            <div role="tabpanel">
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#status-chart" aria-controls="reports" role="tab" data-toggle="tab">Rata - Rata UMKM</a></li>
                <li role="presentation"><a href="#zone-chart" aria-controls="charts" role="tab" data-toggle="tab">Inventory Zone</a></li>
                <li role="presentation"><a href="#size-chart" aria-controls="charts" role="tab" data-toggle="tab">Size</a></li>
                <li role="presentation"><a href="#species-chart" aria-controls="charts" role="tab" data-toggle="tab">Species</a></li>
              </ul>
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="status-chart"></div>
                <div role="tabpanel" class="tab-pane" id="zone-chart"></div>
                <div role="tabpanel" class="tab-pane" id="size-chart"></div>
                <div role="tabpanel" class="tab-pane" id="species-chart"></div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="filterModal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Filter Data<span id="record-count" class="badge pull-right" style="margin-right: 15px; margin-top: 2px;"></span></h4>
          </div>
          <div class="modal-body">
            <div id="query-builder"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" id="view-sql-btn"><i class="fa fa-database"></i> SQL</button>
            <button type="button" class="btn btn-info" id="reset-filter-btn"><i class="fa fa-undo"></i> Reset Filter</button>
            <button type="button" class="btn btn-primary" id="apply-filter-btn"><i class="fa fa-filter"></i> Apply Filter</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="featureModal" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Feature Info</h4>
          </div>
          <div class="modal-body" id="feature-info"></div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <script language="javascript" type="text/javascript" src="{{ asset('app-assets/app.js') }}"></script>

    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/leaflet.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.1/bootstrap-table.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.17/d3.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/c3/0.4.11/c3.min.js"></script>
      <script src="https://cdn.jsdelivr.net/leaflet.esri/1.0.0/esri-leaflet.js"></script>
      <script src="https://cdn.jsdelivr.net/leaflet.esri.geocoder/1.0.2/esri-leaflet-geocoder.js"></script>
      <script src="https://cdn.jsdelivr.net/alasql/0.1/alasql.min.js"></script>
      <script src="{{ asset('app-assets/vendors/jQuery-QueryBuilder/query-builder.standalone.min.js') }}"></script>
      <script src="{{ asset('app-assets/vendors/tableExport/tableExport.min.js') }}"></script>
      <script src="{{ asset('app-assets/vendors/tableExport/libs/FileSaver/FileSaver.min.js') }}"></script>
      <script src="{{ asset('app-assets/vendors/tableExport/libs/html2canvas/html2canvas.min.js') }}"></script>
      <script src="{{ asset('app-assets/vendors/tableExport/libs/jsPDF/jspdf.min.js') }}"></script>
      <script src="{{ asset('app-assets/vendors/js/vendors.min.js') }}"></script>
      <script src="{{ asset('app-assets/vendors/tableExport/libs/jsPDF-AutoTable/jspdf.plugin.autotable.js') }}"></script>


  </body>
</html>
