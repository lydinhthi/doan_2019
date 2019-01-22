@extends('master')
@section('content')

<div class="inner-header">
	<div class="container">
		<div class="pull-left">
			<h6 class="inner-title">Sản phẩm {{$sanpham->name}}</h6>
		</div>
		<div class="pull-right">
			<div class="beta-breadcrumb font-large">
				<a href="{{route('trang-chu')}}">Trang chủ</a> / <span>Chi tiết món ăn</span>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<div class="container">
	<div id="content">
		<div class="row">
			<div class="col-sm-9">

				<div class="row">
					<div class="col-sm-4">
						<img src="source/image/product/{{$sanpham->image}}" alt="">
					</div>
					<div class="col-sm-8">
						<div class="single-item-body">
							<p class="single-item-title"><h2>{{$sanpham->name}}</h2></p>
							<p class="single-item-price">
								@if($sanpham->promotion_price==0)
								<span class="flash-sale">{{number_format($sanpham->unit_price)}} đồng</span>
								@else
								<span class="flash-del">{{number_format($sanpham->unit_price)}} đồng</span>
								<span class="flash-sale">{{number_format($sanpham->promotion_price)}} đồng</span>
								@endif
							</p>
						</div>

						<div class="clearfix"></div>
						<div class="space20">&nbsp;</div>

						<div class="single-item-desc">
							<p style="font-family: arial">{{$sanpham->description}}</p>
						</div>
						<div class="space20">&nbsp;</div>
						<div class="space20">&nbsp;</div>

						<!-- <p>Số lượng:</p> -->
						<div class="single-item-options">
							<form method="GET" id="form-add-cart" action="{{route('themgiohang',$sanpham->id)}}">
								<select class="wc-select" name="color">
									<option>Số lượng</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
								<button type="submit"><i class="fa fa-shopping-cart"></i></button> 
							</form>
							{{-- <a class="add-to-cart" href="{{route('themgiohang',$sanpham->id)}}"><i class="fa fa-shopping-cart"></i></a> --}}
							<div class="clearfix"></div>
						</div>
					</div>
				</div>

				<div class="space40">&nbsp;</div>
				<div class="woocommerce-tabs">
					<ul class="tabs">
						<li><a href="#tab-description">Mô tả</a></li>
					</ul>

					<div class="panel" id="tab-description">
						<p style="font-family : arial">{{$sanpham->description}}</p>
					</div>
				</div>


				<!-- mô tả -->
				<div id="fb-root"></div>
				<script>(function(d, s, id) {
					var js, fjs = d.getElementsByTagName(s)[0];
					if (d.getElementById(id)) return;
					js = d.createElement(s); js.id = id;
					js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2&appId=2268613316739640&autoLogAppEvents=1';
					fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>
				<div class="fb-comments" data-href="http://localhost:8080/shop/public/chi-tiet-san-pham/{{$sanpham->id}}" 
				data-width="100%" data-numposts="5"></div>
				<!-- end môta -->


				<div class="space50">&nbsp;</div>
				<div class="beta-products-list">
					<h4 class="text-center">Có thể bạn quan tâm</h4>

					<div class="row">
						@foreach($sp_tuongtu as $sptt)
						<div class="col-sm-4">
							<div class="single-item">
								@if($sptt->promotion_price!=0)
								<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
								@endif
								<div class="single-item-header">
									<a href="{{route('chitietsanpham',$sptt->id)}}"><img src="source/image/product/{{$sptt->image}}" alt="" height="250px"></a>
								</div>
								<div class="single-item-body">
									<p class="single-item-title">{{$sptt->name}}</p>
									<p class="single-item-price" style="font-size: 18px">
										@if($sptt->promotion_price==0)
										<span class="flash-sale">{{number_format($sptt->unit_price)}} đồng</span>
										@else
										<span class="flash-del">{{number_format($sptt->unit_price)}} đồng</span>
										<span class="flash-sale">{{number_format($sptt->promotion_price)}} đồng</span>
										@endif
									</p>
								</div>
								<div class="single-item-caption">
									<a class="add-to-cart pull-left" href="{{route('themgiohang',$sptt->id)}}"><i class="fa fa-shopping-cart"></i></a>
									<a class="beta-btn primary" href="{{route('chitietsanpham',$sptt->id)}}">Details <i class="fa fa-chevron-right"></i></a>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
						@endforeach
					</div>
					<div class="row">{{$sp_tuongtu->links()}}</div>
				</div> <!-- .beta-products-list -->
			</div>
			<div class="col-sm-3 aside">
				<div class="widget">
					<h3 class="widget-title">Best Sellers</h3>
					<div class="widget-body">
						<div class="beta-sales beta-lists">
							@foreach($sp_banchay as $spbc)
							<div class="media beta-sales-item">
								<a class="pull-left" href="{{route('chitietsanpham',$spbc->id)}}"><img src="source/image/product/{{$spbc->image}}" alt=""></a>
								<div class="media-body">
									<p class="single-item-title">{{$spbc->name}}</p>
									<p class="single-item-price" style="font-size: 18px">
										@if($spbc->promotion_price==0)
										<span class="flash-sale">{{number_format($spbc->unit_price)}} đồng</span>
										@else
										<span class="flash-del">{{number_format($spbc->unit_price)}} đồng</span>
										<span class="flash-sale">{{number_format($spbc->promotion_price)}} đồng</span>
										@endif
									</div>
								</div>
								@endforeach
							</div>
						</div>
					</div> <!-- best sellers widget -->
					<div class="widget">
						<h3 class="widget-title">Món mới</h3>
						<div class="widget-body">
							<div class="beta-sales beta-lists">
								@foreach($sp_moi as $spm)
								<div class="media beta-sales-item">
									<a class="pull-left" href="{{route('chitietsanpham',$spm->id)}}"><img src="source/image/product/{{$spm->image}}" alt=""></a>
									<div class="media-body">
										<p class="single-item-title">{{$spm->name}}</p>
										<p class="single-item-price" style="font-size: 18px">
											@if($spm->promotion_price==0)
											<span class="flash-sale">{{number_format($spm->unit_price)}} đồng</span>
											@else
											<span class="flash-del">{{number_format($spm->unit_price)}} đồng</span>
											<span class="flash-sale">{{number_format($spm->promotion_price)}} đồng</span>
											@endif
										</div>
									</div>
									@endforeach
								</div>
							</div>
						</div> <!-- best sellers widget -->
					</div>
				</div>
			</div> <!-- #content -->
		</div> <!-- .container -->
		@endsection