 <header class="short-stor">
    <div class="container-fluid">
        <div class="row">
            <!-- logo start -->
            <div class="col-md-3 col-sm-12 text-center nopadding-right">
                <div class="top-logo">
                    <a href="/"><img src="{{asset('img/logo.gif')}}" alt="" /></a{{asset('img/logo.gif')}}>
                </div>
            </div>
            <!-- logo end -->
            <!-- mainmenu area start -->
            <div class="col-md-6 text-center">
                <div class="mainmenu">
                    <nav>
                        <ul>
                            <li class="expand"><a href="/" title="Trang chủ">Trang chủ</a></li>
                            <li class="expand">
                                <a href="#">Sản phẩm</a>
                                <ul class="restrain sub-menu ">
                                    @if(isset($categories))
                                        @foreach($categories as $cate)
                                            <li><a href="{{route('get.list.product',[$cate->c_slug,$cate->id])}}">{{$cate->c_name}}</a></li>
                                        @endforeach
                                    @endif
                                </ul>
                            </li>
                            <li class="expand"><a href="{{route('get.list.article')}}" title="Tin tức">Tin tức</a></li>
                            <li class="expand"><a href="{{route('get.about_us')}}">Giới thiệu</a></li>
                            <li class="expand"><a href="{{route('get.contact')}}">Liên hệ</a></li>
                          {{--  <li class="expand"><a href="#">Pages</a>

                            </li> --}}
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- mainmenu area end -->
            <!-- top details area start -->
            <div class="col-md-3 col-sm-12 nopadding-left">
                <div class="top-detail">
                    <div class="disflow">
                        <div class="circle-shopping expand">
                            <div class="shopping-carts text-right">
                                <div class="cart-toggler">
                                     <ul class="nav navbar-nav navbar-right">
                                        <li class="dropdown">
                                                <a style="margin-top: 22px" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="icon-bag"></i></a>

                                                   <a href=""><span class="cart-quantity" style="margin-top: -69px;margin-left: 18px;">{{Cart::count()}}</span></a>
                                                    <?php $orders = Cart::content()?>
                                           @if($orders)
                                          <ul class="dropdown-menu dropdown-cart" role="menu" style="margin-top: -71px;">
                                                @foreach($orders as $order)
                                                  <li>
                                                      <span class="item">
                                                        <span class="item-left">
                                                            <img src="{{pare_url_file($order->options->avatar)}}" alt="" width="50px" height="50px" />
                                                            <span class="item-info">
                                                                <span style="width: 165px">{{$order->name}} x{{$order->qty}}</span>
                                                                <span>{{number_format($order->options->price_old,0,'','.')}} VNĐ</span>
                                                            </span>
                                                        </span>
                                                        <span class="item-right" style="margin-left: 77px; position: relative;top: -62px;">
                                                            <button class="btn btn-xs btn-danger pull-right"><a href="{{route('delete.shopping.cart',$order->rowId)}}" style="background: none">x</a></button>
                                                        </span>
                                                    </span>
                                                  </li>
                                                @endforeach
                                              <li class="pull-right" style="margin-right: 20px;font-weight: 500;margin-bottom: 10px;}"><a class="text-center" href="{{route('get.list.shopping.cart')}}">View Cart</a></li>
                                          </ul>
                                          @endif
                                        </li>
                                    </ul></span></a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- addcart top start -->
                    <!-- search divition start -->
                    <div style="display: inline;position: relative;top: -83px;">
                        <div class="disflow">
                        <div class="header-search expand">
                            <div class="search-icon fa fa-search"></div>
                            <div class="product-search restrain">
                                <div class="container nopadding-right">
                                    <form action="{{route('get.product.list')}}" id="searchform" method="get">
                                        <div class="input-group">
                                            <input type="text" name="k" class="form-control" maxlength="128" placeholder="Search product...">
                                            <span class="input-group-btn">
                                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- search divition end -->
                    <div class="disflow">
                        <div class="expand dropps-menu">
                            <a href="#"><i class="fa fa-align-right"></i></a>
                            <ul class="restrain language" style="width: 200px;">
                                @if(Auth::check())
                                    <li><a href="{{route('user.dashboard')}}" title="Quản lý tổng quan">Quản lý</a></li>
                                    <li><a href="">Sản phẩm yêu thích</a></li>
                                    <li><a href="">Giỏ hàng</a></li>
                                    <li><a href="{{route('get.logout.user')}}">Thoát</a></li>
                                @else
                                    <li><a href="{{route('get.register')}}">Đăng ký</a></li>
                                    <li><a href="{{route('get.login')}}">Đăng nhập</a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <!-- top details area end -->
        </div>
    </div>
 </header>
