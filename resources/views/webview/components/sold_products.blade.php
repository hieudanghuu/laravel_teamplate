<section class="related-product-area section_gap_bottom mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h1>Products Sold The Most</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    @foreach ($sold as $key => $item)
                    <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                        <div class="single-related-product d-flex">
                            <a href="#" class="image-sold-sale">
                                @if ($item['sale'] > 0)
                                    <div  class="image_sale">
                                        <img src="{{asset('karma/img/sale1.png')}}" alt="">
                                        <p>- {{$item['sale']}}%</p>
                                    </div>
                                 @endif
                                <img src="{{asset('/storage/'.$item['image'])}}" width="100px" alt="error image"></a>
                            <div class="desc">
                                <a href="#" class="title">{{$item['name']}}</a>
                                <div class="price">
                                    <h6>${{$item['price'] * ( 100 - $item['sale'])/100}}</h6>
                                    <h6 class="l-through">${{$item['price']}}</h6>
                                </div>
                                <a href="{{route('web.view',$item['id'])}}" class="btn btn-sm btn-warning">
                                    <p class="hover-text" style="margin: 0">view more</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>