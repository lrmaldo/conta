<!-- Portfolio Modal 1-->
<div class="portfolio-modal modal fade" id="portfolioModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class="fas fa-times"></i></span>
            </button>
            <div class="modal-body text-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title-->
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label">{{$item->titulo}}</h2>
                            <!-- Icon Divider-->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Portfolio Modal - Image-->
                            <img class="img-fluid rounded mb-3" style="height: 350px" src="{{$item->url_imagen}}" alt="" />
                            <!-- Portfolio Modal - Text-->
                            <p class="mb-5">{{$item->descripcion}}</p> <br>
                            <h4 class="mb-4">${{number_format($item->precio,2)}} MXN</h4>
                            <button class="btn btn-primary" data-dismiss="modal">
                                <i class="fas fa-times fa-fw"></i>
                                Cerrar ventana
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>