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
              <h3 class="box-title">Create news</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="container-fluid">
				<?php echo validation_errors(); ?>

				<?php echo form_open('news/create'); ?>
				
				<form>

				<div class="form-group col-md-12">
					<label for="news_title">Title</label>
					<input type="text" class="form-control" name="news_title" id="news_title" placeholder="Title" value="<?php echo (!empty($posts['title']) ? $posts['title'] : '') ?>">
				</div>
				<div class="form-group col-md-12">
					<label for="news_slug">slug</label>
					<input type="text" class="form-control"  name="news_slug" id="news_slug" placeholder="Slug" value="<?php echo (!empty($posts['slug']) ? $posts['slug'] : '') ?>">
				</div>
				<div class="form-group col-md-12">
					<div class="row">
						<div class="form-group col-md-4">
							<label for="news_author">User</label>
							<select class="form-control" name="news_author" id="news_author">					
								<?php foreach ($news_users as $user): ?>							
								  <option value="<?php echo $user['id']; ?>" <?php echo (!empty($posts['author']) && $user['id'] == $posts['author'] ? 'selected' : '') ?>><?php echo $user['username']; ?></option>																
								<?php endforeach; ?>
								
							</select>						
						</div>
					</div>
				</div>
				<div class="form-group col-md-12">
					<label for="news_short_description">Short description</label>
					<textarea class="form-control" name="news_short_description" id="news_short_description" rows="3"><?php echo (!empty($posts['short']) ? $posts['short'] : '') ?></textarea>
				</div>
				<div class="form-group col-md-12">
					<label for="news_text">Description</label>
					<textarea class="form-control" name="news_text" id="news_text" rows="3"><?php echo (!empty($posts['text']) ? $posts['text'] : '') ?></textarea>
				</div>
				<div class="form-group col-md-12">
					<button type="submit"  name="submit" class="btn btn-primary mb-2">Create news item</button>
				</div>
				</form>

              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <!--<a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Create Newsstory</a>-->
              <!--<a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>-->
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
		
      </div>
      <!-- /.row -->
	</section>
    <!-- /.content -->
</div>