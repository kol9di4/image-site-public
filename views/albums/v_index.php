<div class="album py-5 bg-body-tertiary">
  <div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" data-masonry='{ "percentPosition": true }'>
    <?foreach($albums as $album):?>
      <div class="col">
                <div class="card shadow-sm">
                  <div class="bd-placeholder-img card-img-top">
                    <img  class="img-fluid" width="100%" height="225" src="assets/img/<?=imagesFisrtInAlbum($album['id_album'])?>" alt="">
                  </div>
                    <div class="card-body">
                        <div class="col-12 d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-primary my-0"><?=$album['album_name']?></h4>
                            <div class="h6 my-0 fw-light">Автор: <?=userName($album['id_user'])?></div>
                        </div>
                        <p class="card-text"><?=$album['album_description']?></p>
                        <div class="d-flex justify-content-between">
                            <div class="btn-group">
                              <a class="btn btn-sm btn-outline-primary" href="index.php?c=album&id_album='<?=$album['id_album']?>'" role="button">Посмотреть</a>
                              <?if($album['id_user']===$idUser):?>
                              <a href="index.php?c=edit&id_album='<?=$album['id_album']?>'" class="btn btn-sm btn-outline-secondary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"></path>
                                </svg>
                              </a>
                              <?endif;?>
                            </div>
                            <small class="text-body-secondary"><?=correctDate($album['album_dt_add'])?></small>
                        </div>
                    </div>
                </div>
            </div>
      <?endforeach;?>
    </div>
  </div>
</div>