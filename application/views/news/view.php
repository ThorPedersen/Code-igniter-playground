<div class="content-wrapper" style="min-height: 1196px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        News
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-8">

          <!-- TABLE: LATEST NEWS -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Category</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="container-fluid">
				<div class="row">
					<div class="blog-header col-sm-10 ">
						<h1 class="blog-title"><?php echo $news_item['title']; ?></h1>
						<p class="lead blog-description"><?php echo $news_item['short_description']; ?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-10 blog-main">

					  <div class="blog-post">
						<p class="blog-post-meta"><?php echo date("Y-m-d H:i:s", $news_item['published_on']); ?> by <a href="#"><?php echo $news_item['username']; ?></a></p>

						<?php echo nl2br($news_item['text']); ?>

					  <!--<nav>
						<ul class="pager">
						  <li><a href="#">Previous</a></li>
						  <li><a href="#">Next</a></li>
						</ul>
					  </nav>-->

					</div>
				</div>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a href="javascript:window.history.back()" class="btn btn-sm btn-info btn-flat pull-left">Back</a>
              <!--<a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>-->
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        
      </div>
      <!-- /.row -->
	  
	  </div>
	  
	</section>
    <!-- /.content -->
</div>