@extends('Admin.Layout.app', ['activePage' => 'categories', 'title' => 'category'])
@section('content')

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home">
							<use xlink:href="#stroked-home"></use>
						</svg></a></li>
				<li class="active">Danh mục</li>
			</ol>
		</div>
		<!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Quản lý danh mục</h1>
			</div>
		</div>
		<!--/.row-->
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="row">
							
							<div class="col-md-7">
								<div class="alert bg-success" role="alert">
									<svg class="glyph stroked checkmark">
										<use xlink:href="#stroked-checkmark"></use>
									</svg> Đã thêm danh mục thành công! <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
								</div>
								<h3 style="margin: 0;"><strong>Phân cấp Menu</strong></h3>
								<div class="vertical-menu">
									<div class="item-menu active">Danh mục </div>
									<div class="item-menu"><span>Nam</span>
										<div class="category-fix">
											<a class="btn-category btn-primary" href="editcategory.html"><i class="fa fa-edit"></i></a>
											<a class="btn-category btn-danger" href="#"><i class="fas fa-times"></i></i></a>

										</div>
									</div>
									<div class="item-menu"><span>---|Áo khoác Nam</span>
										<div class="category-fix">
											<a class="btn-category btn-primary" href="editcategory.html"><i class="fa fa-edit"></i></a>
											<a class="btn-category btn-danger" href="#"><i class="fas fa-times"></i></i></a>

										</div>
									</div>
									<div class="item-menu"><span>---|---|Áo khoác Nam (Dành cho việc mở rộng)</span>
										<div class="category-fix">
											<a class="btn-category btn-primary" href="editcategory.html"><i class="fa fa-edit"></i></a>
											<a class="btn-category btn-danger" href="#"><i class="fas fa-times"></i></i></a>

										</div>
									</div>
									<div class="item-menu"><span>Nữ</span>
										<div class="category-fix">
											<a class="btn-category btn-primary" href="editcategory.html"><i class="fa fa-edit"></i></a>
											<a class="btn-category btn-danger" href="#"><i class="fas fa-times"></i></i></a>

										</div>
									</div>
									<div class="item-menu"><span>---|Áo khoác Nữ</span>
										<div class="category-fix">
											<a class="btn-category btn-primary" href="editcategory.html"><i class="fa fa-edit"></i></a>
											<a class="btn-category btn-danger" href="#"><i class="fas fa-times"></i></i></a>

										</div>
									</div>
</br>
									<a href="/admin/category/create" class="btn btn-primary">Thêm danh mục</a>

								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
			<!--/.col-->


		</div>
		<!--/.row-->
	</div>
	<!--/.main-->
@endsection