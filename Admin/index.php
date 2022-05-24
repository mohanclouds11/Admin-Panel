<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Dashboard</title>
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <style>
    .todo-list>li{
      margin-bottom:25px !important;
    background-color: #fff;
    border-left: 2px solid green;
    }
    
    .card-danger:not(.card-outline)>.card-header{
      background:#fff;
      color:blue; 
     border:0px !important;
    }
    .card-title{
      font-weight:600 !important;
    }
    .card-header{
      border:0px !important;
    }
    .card{
      background-color:transparent !important;
      box-shadow:none !important;
    }
  .column {
	cursor: move;
	float: left;
	height: auto;
	margin-bottom: 30px;
	margin-right: 10px;
	text-align: center;
	width:24%;
}

.column header {
	background: linear-gradient(to right, rgb(0,0,0), rgb(79,79,79), rgb(21,21,21));
	border-bottom: 1px solid #ddd;
	border-top-left-radius: 10px;
	border-top-right-radius: 10px;
	box-shadow: 5px;
	color: #fff;
	padding: 5px;
	text-shadow: #000 0 1px;
}

.column {
	transition: transform 0.2s ease-out;
}

.column.over {
	border: 2px dashed #000;
}

.column.moving {
	opacity: 0.25;
	transform: scale(0.8);
}

.column .count {
	font-weight: bold;
	padding-top: 15px;
	text-shadow: #fff 0 1px;
}
.card-body{
  padding:0.25rem !important;
  text-align:left !important;
}
/*media-query*/
@media(min-width:200px) and (max-width:767px) {
  .column{
    width:100%;
  }
}

@media(min-width:768px) and (max-width:1199px) {
  .column{
    width:46%;
  }
}

  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <!-- <input class="form-control form-control-navbar filter" placeholder="Search" aria-label="Search"> -->
              <input class="form-control form-control-navbar filter" id="searchbar" onkeyup="search_animal()" type="text" name="search" placeholder="Employer  search..">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
        </a>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>  
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>  
    </ul>
  </nav>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Candidate
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                user
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>  
        </ul>
      </nav>
    </div>
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="container-fluid">
<div id="columns-full" class="columns clearfix">
    <div class="column" draggable="true"><div class="count" data-col-moves="0"></div>
 <!-- third col (We are only adding the ID to make the widgets sortable)-->
 <section>
              <!-- TO DO List -->
        <div class="card connectedSortable">
          <div class="card-header">
            <h3 class="card-title">Open-5</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <ul class="todo-list" data-widget="todo-list">
              <li>
                <div class="row">
                  <div class="col-md-2"><span class="handle">
                    <i class="fas fa-ellipsis-v"></i>
                    <i class="fas fa-ellipsis-v"></i>
                  </span></div>
                  <div class="col-md-10">
                    <div class="card card-danger">
                      <div class="card-header">
                        <h3 class="card-title">Adam</h3>
                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                          </button>
                        </div>
                        <!-- /.card-tools -->
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                      Contrary to popular belief, Lorem Ipsum is not simply random text.
                      </div>
                      <div class="card-footer text-muted">
                        <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i>
                       </div>
                      <!-- /.card-body -->
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="row">
                  <div class="col-md-2"><span class="handle">
                    <i class="fas fa-ellipsis-v"></i>
                    <i class="fas fa-ellipsis-v"></i>
                  </span></div>
                  <div class="col-md-10">
                    <div class="card card-danger">
                      <div class="card-header">
                        <h3 class="card-title">Abdrea</h3>
                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                          </button>
                        </div>
                        <!-- /.card-tools -->
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                      Contrary to popular belief, Lorem Ipsum is not simply random text.
                      </div>
                      <div class="card-footer text-muted">
                        <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i>
                       </div>
                      <!-- /.card-body -->
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="row">
                  <div class="col-md-2"><span class="handle">
                    <i class="fas fa-ellipsis-v"></i>
                    <i class="fas fa-ellipsis-v"></i>
                  </span></div>
                  <div class="col-md-10">
                    <div class="card card-danger">
                      <div class="card-header">
                        <h3 class="card-title">Kumar</h3>
                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                          </button>
                        </div>
                        <!-- /.card-tools -->
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                      Contrary to popular belief, Lorem Ipsum is not simply random text.
                      </div>
                      <div class="card-footer text-muted">
                       <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i>
                      </div>
                      <!-- /.card-body -->
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="row">
                  <div class="col-md-2"><span class="handle">
                    <i class="fas fa-ellipsis-v"></i>
                    <i class="fas fa-ellipsis-v"></i>
                  </span></div>
                  <div class="col-md-10">
                    <div class="card card-danger">
                      <div class="card-header">
                        <h3 class="card-title">David</h3>
                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                          </button>
                        </div>
                        <!-- /.card-tools -->
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                      Contrary to popular belief, Lorem Ipsum is not simply random text.
                      </div>
                      <div class="card-footer text-muted">
                       <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i>
                      </div>
                      <!-- /.card-body -->
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
        </section>
</div>
<div class="column" draggable="true"><div class="count" data-col-moves="0"></div>
 <!-- third col (We are only adding the ID to make the widgets sortable)-->
 <section>
              <!-- TO DO List -->
        <div class="card connectedSortable">
          <div class="card-header">
            <h3 class="card-title">Technical Round-5</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <ul class="todo-list" data-widget="todo-list">
              <li>
                <div class="row">
                  <div class="col-md-2"><span class="handle">
                    <i class="fas fa-ellipsis-v"></i>
                    <i class="fas fa-ellipsis-v"></i>
                  </span></div>
                  <div class="col-md-10">
                    <div class="card card-danger">
                      <div class="card-header">
                        <h3 class="card-title">Tim</h3>
                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                          </button>
                        </div>
                        <!-- /.card-tools -->
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                      Contrary to popular belief, Lorem Ipsum is not simply random text.
                      </div>
                      <div class="card-footer text-muted">
                        <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i>
                       </div>
                      <!-- /.card-body -->
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="row">
                  <div class="col-md-2"><span class="handle">
                    <i class="fas fa-ellipsis-v"></i>
                    <i class="fas fa-ellipsis-v"></i>
                  </span></div>
                  <div class="col-md-10">
                    <div class="card card-danger">
                      <div class="card-header">
                        <h3 class="card-title">carlson</h3>
                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                          </button>
                        </div>
                        <!-- /.card-tools -->
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                      Contrary to popular belief, Lorem Ipsum is not simply random text.
                      </div>
                      <div class="card-footer text-muted">
                        <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i>
                       </div>
                      <!-- /.card-body -->
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="row">
                  <div class="col-md-2"><span class="handle">
                    <i class="fas fa-ellipsis-v"></i>
                    <i class="fas fa-ellipsis-v"></i>
                  </span></div>
                  <div class="col-md-10">
                    <div class="card card-danger">
                      <div class="card-header">
                        <h3 class="card-title">Sindhu</h3>
                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                          </button>
                        </div>
                        <!-- /.card-tools -->
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                      Contrary to popular belief, Lorem Ipsum is not simply random text.
                      </div>
                      <div class="card-footer text-muted">
                       <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i>
                      </div>
                      <!-- /.card-body -->
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="row">
                  <div class="col-md-2"><span class="handle">
                    <i class="fas fa-ellipsis-v"></i>
                    <i class="fas fa-ellipsis-v"></i>
                  </span></div>
                  <div class="col-md-10">
                    <div class="card card-danger">
                      <div class="card-header">
                        <h3 class="card-title">Abi</h3>
                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                          </button>
                        </div>
                        <!-- /.card-tools -->
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                      Contrary to popular belief, Lorem Ipsum is not simply random text.
                      </div>
                      <div class="card-footer text-muted">
                       <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i>
                      </div>
                      <!-- /.card-body -->
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
        </section>
</div>
    <div class="column" draggable="true"><div class="count" data-col-moves="0"></div>
 <!-- third col (We are only adding the ID to make the widgets sortable)-->
 <section>
              <!-- TO DO List -->
        <div class="card connectedSortable">
          <div class="card-header">
            <h3 class="card-title">Contacted-6</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <ul class="todo-list" data-widget="todo-list">
              <li>
                <div class="row">
                  <div class="col-md-2"><span class="handle">
                    <i class="fas fa-ellipsis-v"></i>
                    <i class="fas fa-ellipsis-v"></i>
                  </span></div>
                  <div class="col-md-10">
                    <div class="card card-danger">
                      <div class="card-header">
                        <h3 class="card-title">Gowtham</h3>
                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                          </button>
                        </div>
                        <!-- /.card-tools -->
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                      Contrary to popular belief, Lorem Ipsum is not simply random text.
                      </div>
                      <div class="card-footer text-muted">
                        <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i>
                       </div>
                      <!-- /.card-body -->
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="row">
                  <div class="col-md-2"><span class="handle">
                    <i class="fas fa-ellipsis-v"></i>
                    <i class="fas fa-ellipsis-v"></i>
                  </span></div>
                  <div class="col-md-10">
                    <div class="card card-danger">
                      <div class="card-header">
                        <h3 class="card-title">Angelin</h3>
                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                          </button>
                        </div>
                        <!-- /.card-tools -->
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                      Contrary to popular belief, Lorem Ipsum is not simply random text.
                      </div>
                      <div class="card-footer text-muted">
                        <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i>
                       </div>
                      <!-- /.card-body -->
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="row">
                  <div class="col-md-2"><span class="handle">
                    <i class="fas fa-ellipsis-v"></i>
                    <i class="fas fa-ellipsis-v"></i>
                  </span></div>
                  <div class="col-md-10">
                    <div class="card card-danger">
                      <div class="card-header">
                        <h3 class="card-title">Sanket</h3>
                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                          </button>
                        </div>
                        <!-- /.card-tools -->
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                      Contrary to popular belief, Lorem Ipsum is not simply random text.
                      </div>
                      <div class="card-footer text-muted">
                       <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i>
                      </div>
                      <!-- /.card-body -->
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="row">
                  <div class="col-md-2"><span class="handle">
                    <i class="fas fa-ellipsis-v"></i>
                    <i class="fas fa-ellipsis-v"></i>
                  </span></div>
                  <div class="col-md-10">
                    <div class="card card-danger">
                      <div class="card-header">
                        <h3 class="card-title">Hari</h3>
                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                          </button>
                        </div>
                        <!-- /.card-tools -->
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                      Contrary to popular belief, Lorem Ipsum is not simply random text.
                      </div>
                      <div class="card-footer text-muted">
                       <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i>
                      </div>
                      <!-- /.card-body -->
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
        </section>
</div>
<div class="column" draggable="true"><div class="count" data-col-moves="0"></div>
 <!-- third col (We are only adding the ID to make the widgets sortable)-->
 <section>
              <!-- TO DO List -->
        <div class="card connectedSortable">
          <div class="card-header">
            <h3 class="card-title">Writtern Test-6</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <ul class="todo-list" data-widget="todo-list">
              <li>
                <div class="row">
                  <div class="col-md-2"><span class="handle">
                    <i class="fas fa-ellipsis-v"></i>
                    <i class="fas fa-ellipsis-v"></i>
                  </span></div>
                  <div class="col-md-10">
                    <div class="card card-danger">
                      <div class="card-header">
                        <h3 class="card-title">Leo</h3>
                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                          </button>
                        </div>
                        <!-- /.card-tools -->
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                      Contrary to popular belief, Lorem Ipsum is not simply random text.
                      </div>
                      <div class="card-footer text-muted">
                        <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i>
                       </div>
                      <!-- /.card-body -->
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="row">
                  <div class="col-md-2"><span class="handle">
                    <i class="fas fa-ellipsis-v"></i>
                    <i class="fas fa-ellipsis-v"></i>
                  </span></div>
                  <div class="col-md-10">
                    <div class="card card-danger">
                      <div class="card-header">
                        <h3 class="card-title">Jabir</h3>
                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                          </button>
                        </div>
                        <!-- /.card-tools -->
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                      Contrary to popular belief, Lorem Ipsum is not simply random text.
                      </div>
                      <div class="card-footer text-muted">
                        <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i>
                       </div>
                      <!-- /.card-body -->
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="row">
                  <div class="col-md-2"><span class="handle">
                    <i class="fas fa-ellipsis-v"></i>
                    <i class="fas fa-ellipsis-v"></i>
                  </span></div>
                  <div class="col-md-10">
                    <div class="card card-danger">
                      <div class="card-header">
                        <h3 class="card-title">Sujo</h3>
                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                          </button>
                        </div>
                        <!-- /.card-tools -->
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                      Contrary to popular belief, Lorem Ipsum is not simply random text.
                      </div>
                      <div class="card-footer text-muted">
                       <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i>
                      </div>
                      <!-- /.card-body -->
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="row">
                  <div class="col-md-2"><span class="handle">
                    <i class="fas fa-ellipsis-v"></i>
                    <i class="fas fa-ellipsis-v"></i>
                  </span></div>
                  <div class="col-md-10">
                    <div class="card card-danger">
                      <div class="card-header">
                        <h3 class="card-title">Mark</h3>
                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                          </button>
                        </div>
                        <!-- /.card-tools -->
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                      Contrary to popular belief, Lorem Ipsum is not simply random text.
                      </div>
                      <div class="card-footer text-muted">
                       <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i>
                      </div>
                      <!-- /.card-body -->
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
        </section>
</div>


</div>

</div>

  </div>


  <!-- /.content-wrapper -->
  <footer class="main-footer"> <strong>Copyright &copy; 2022-Admin.</strong>All rights reserved.</footer>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<script src="dist/js/pages/dashboard.js"></script>
<script>
    function search_animal() {
    let input = document.getElementById('searchbar').value
    input=input.toLowerCase();
    let x = document.getElementsByClassName('card');
      
    for (i = 0; i < x.length; i++) { 
        if (!x[i].innerHTML.toLowerCase().includes(input)) {
            x[i].style.display="none";
        }
        else {
            x[i].style.display="block";                 
        }
    }
}
</script>


<script>
  // Full example
(function() {
	var id_ = 'columns-full';
	var cols_ = document.querySelectorAll('#' + id_ + ' .column');
	var dragSrcEl_ = null;

	this.handleDragStart = function(e) {
		e.dataTransfer.effectAllowed = 'move';
		e.dataTransfer.setData('text/html', this.innerHTML);

		dragSrcEl_ = this;

		// this/e.target is the source node.
		this.classList.add('moving');
	};

	this.handleDragOver = function(e) {
		if (e.preventDefault) {
			e.preventDefault(); // Allows us to drop.
		}

		e.dataTransfer.dropEffect = 'move';

		return false;
	};

	this.handleDragEnter = function(e) {
		this.classList.add('over');
	};

	this.handleDragLeave = function(e) {
		// this/e.target is previous target element.
		this.classList.remove('over');
	};

	this.handleDrop = function(e) {
		// this/e.target is current target element.

		if (e.stopPropagation) {
			e.stopPropagation(); // stops the browser from redirecting.
		}

		// Don't do anything if we're dropping on the same column we're dragging.
		if (dragSrcEl_ != this) {
			dragSrcEl_.innerHTML = this.innerHTML;
			this.innerHTML = e.dataTransfer.getData('text/html');

			// Set number of times the column has been moved.
			var count = this.querySelector('.count');
			var newCount = parseInt(count.getAttribute('data-col-moves')) + 1;
			count.setAttribute('data-col-moves', newCount);
			// count.textContent = 'moves: ' + newCount;
		}

		return false;
	};

	this.handleDragEnd = function(e) {
		// this/e.target is the source node.
		[].forEach.call(cols_, function(col) {
			col.classList.remove('over');
			col.classList.remove('moving');
		});
	};

	[].forEach.call(cols_, function(col) {
		col.setAttribute('draggable', 'true'); // Enable columns to be draggable.
		col.addEventListener('dragstart', this.handleDragStart, false);
		col.addEventListener('dragenter', this.handleDragEnter, false);
		col.addEventListener('dragover', this.handleDragOver, false);
		col.addEventListener('dragleave', this.handleDragLeave, false);
		col.addEventListener('drop', this.handleDrop, false);
		col.addEventListener('dragend', this.handleDragEnd, false);
	});
})();
</script>
</body>
</html>