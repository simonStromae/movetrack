<!-- Modal -->
<div class="modal fade" id="detailTrack-{{ $track->id }}" tabindex="-1" role="dialog" aria-labelledby="detailTrackLabel-{{ $track->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-5 col-sm-12">
                            @if(count($track->images) === 0)
                                <img src="/front-office/brand/pic04.jpg" alt="">
                            @else
                                <div class="mb-4">
                                    <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            @for($i = 0; $i < count($track->images); $i++)
                                                <li data-target="#carouselExampleIndicators" data-slide-to="{{ $i }}" class="{{ $i === 0 ? 'active' : '' }}"></li>
                                            @endfor
                                        </ol>
                                        <div class="carousel-inner">
                                            @foreach($track->images as $image)
                                                <div class="carousel-item @if($loop->first) active @endif">
                                                    <img class="d-block w-100" src="{{ show_trackImage($image->name) }}" alt="{{ $loop->iteration }}-slide">
                                                </div>
                                            @endforeach
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="col-md-5 col-sm-12">
                            <div class="mt-4">
                                <h3 class="h3 text-black">{{ $track->designation }}</h3>
                                <p class="mb-3">
                                    <span class="badge badge-light">{{ $track->brand }}</span>
                                    <span class="badge badge-light">{{ $track->category->name }}</span>
                                </p>
                                <h6 class="mb-3 text-black">{{ $track->budget }}</h6>
                                <p>{{ $track->description }}</p>
                                @if($track->status === "success")
                                    <p>Date livraison : {{ $track->date_delivery }}</p>
                                    <p>Frais livraison : {{ $track->delivery_price }}</p>
                                @endif
                                <span class="badge badge-warning">{{ get_status($track->status) }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
