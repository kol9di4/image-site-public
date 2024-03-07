<!-- Modal -->
<?$like_type = likeCompare($image['id_image'],$_SESSION['user_id']??0);?>
<div class="modal fade" id="modal<?=$image['id_image']?>" data-id="<?=$image['id_image']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="--bs-modal-width: 900px;">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><?=$image['image_name_text']?></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="image" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <img src="assets/img/<?=$image['image_name']?>" alt="Photo by Luca Bravo" class="img-fluid card-img-top" sizes="(max-width: 1080px) 100vw, 1080px" width="1080" height="768" loading="lazy">
            </div>
            <div class="lc-block py-4 px-2">
                <div editable="rich">
                    <p><?=$image['image_description']?></p>
                </div>
                <div class="soc-buttons container-fluid">
                    <div class="lc-block mb-1 row">
                        <button type="button" class="like btn <?= $like_type===-1?'btn-danger':'btn-outline-danger'?> col-5" data-id-image="<?=$image['id_image']?>" data-type-like="-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heartbreak" viewBox="0 0 16 16">
                                <path d="M8.867 14.41c13.308-9.322 4.79-16.563.064-13.824L7 3l1.5 4-2 3L8 15a38.094 38.094 0 0 0 .867-.59m-.303-1.01-.971-3.237 1.74-2.608a1 1 0 0 0 .103-.906l-1.3-3.468 1.45-1.813c1.861-.948 4.446.002 5.197 2.11.691 1.94-.055 5.521-6.219 9.922Zm-1.25 1.137a36.027 36.027 0 0 1-1.522-1.116C-5.077 4.97 1.842-1.472 6.454.293c.314.12.618.279.904.477L5.5 3 7 7l-1.5 3 1.815 4.537Zm-2.3-3.06-.442-1.106a1 1 0 0 1 .034-.818l1.305-2.61L4.564 3.35a1 1 0 0 1 .168-.991l1.032-1.24c-1.688-.449-3.7.398-4.456 2.128-.711 1.627-.413 4.55 3.706 8.229Z"></path>
                            </svg>
                            <span><?=disLikesCount($image['id_image'])?></span>
                        </button>
                        <button type="button" class="like btn <?= $like_type===1?'btn-success':'btn-outline-success'?> col-5 ms-auto" data-id-image="<?=$image['id_image']?>" data-type-like="1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"></path>
                            </svg>
                            <span><?=likesCount($image['id_image'])?></span>
                        </button>
                        <h5 class="mt-4 text-primary comment-count" data-id-image="<?=$image['id_image']?>"><span><?=comentCount($image['id_image'])?></span> комментариев</h5>
                        <div class="py-2">
                            <div class="my-0" style="background-color:#0d6efd;height: 2px;"></div>
                        </div>
                        <!-- comment -->
                        <div class="comments-vew" data-id-image="<?=$image['id_image']?>">
                            <?foreach($comments as $comment):?>
                                <div class="comment my-2 p-2" style="background-color:#f7f7f7;">
                                    <div class="container-fluid px-0">
                                        <div class="col-12 d-flex justify-content-between">
                                            <div class="h5"><?=userName($comment['id_user'])?></div>
                                            <div class="h6 text-muted"><?=correctDate($comment['comment_dt_add'])?></div>
                                        </div>
                                    </div>
                                    <p class="ps-4"><?=$comment['comment_text']?></p>
                                </div>
                            <?endforeach;?>
                        </div>
                        <!-- end comment -->
                        <div class="comment-new">
                        <?if($idUser!==0):?>
                            <form id="new-comment-form" data-id="<?=$image['id_image']?>">
                                <h5>Добавить новый комментарий:</h5>
                                <textarea class="container-fluid" data-id="<?=$image['id_image']?>" name="text-comment" id="comment-text" rows="5"></textarea>
                                <div>
                                    <button type="button" data-id="<?=$image['id_image']?>" class="btn btn-primary">Отправить</button>
                                </div>
                            </form>
                            <div class="m-5 row justify-content-center comment-again" style="display: none;">
                                <button type="button" class="btn btn-primary">Отправить еще один комментарий</button>
                            </div>
                        <?else:?>
                                <span>Зарегистрируйтесь или войдите, чтобы оставить комментарий</span>
                        <?endif;?>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
<!-- END MODAL -->