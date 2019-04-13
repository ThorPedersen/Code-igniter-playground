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

          <!-- TABLE: LATEST ORDERS -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Latest News</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin" id="news_table">
                  <thead>
                  <tr>
                    <th>News ID</th>
                    <th>Title</th>
					<th>Author</th>
                    <th>Slug</th>
                    <th>Popularity</th>
                  </tr>
                  </thead>
                  <tbody>
				  
				  <?php foreach ($news as $news_item): ?>							
				  <tr>
					<td><?php echo $news_item['news_id']; ?></td>
                    <td><a href="<?php echo site_url('news/'.$news_item['slug']); ?>"><?php echo $news_item['title']; ?></a></td>
					 <td><?php echo $news_item['username']; ?></td>
                    <td><?php echo $news_item['slug']; ?></td>
                    <td>
                      <?php echo $news_item['hits']; ?>
                    </td>
                  </tr>																		

				  <?php endforeach; ?>

                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a href="news/create" class="btn btn-sm btn-info btn-flat pull-left">Create Newsstory</a>
              <!--<a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>-->
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        
      </div>
      <!-- /.row -->
	</section>
    <!-- /.content -->
</div>