<div class="container album py-5" data-id-album="<?=$id?>">
    <div class="p-2 px-3 rounded-top mb-3" style="background-color: rgb(251, 250, 255);">
        <div class="col-12 d-flex justify-content-between align-items-center">
            <h1 class="mb-3 text-primary"><?=$album['album_name']?></h1>
            <?if($album['id_user']===$id_user):?>
                <a href="index.php?c=edit&id_album='<?=$album['id_album']?>'" class="btn btn-sm btn-outline-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"></path>
                    </svg>
                </a>
            <?endif;?>
        </div>
        <p class="h3 fs-5 mb-3"><?=$album['album_description']?></p>
    </div>
    
            
    <div class="row" data-masonry='{ "percentPosition": true }'>
    <?foreach($imagesInAlbum as $image):$like_type = likeCompare($image['id_image'],$_SESSION['user_id']??0);?>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="lc-block bg-white rounded shadow">
                <div class="image">
                    <a href="" data-bs-toggle="modal" data-bs-target="#modal<?=$image['id_image']?>">
                        <img src="assets/img/<?=$image['image_name']?>" alt="Photo by Luca Bravo" class="img-fluid card-img-top" sizes="(max-width: 1080px) 100vw, 1080px" width="1080" height="768" loading="lazy">
                    </a>
                </div>
                <div class="lc-block p-4">
                    <div editable="rich">
                        <h4 class="text-break"><?=$image['image_name_text']?></h4>
                        <p><?=$image['image_description']?></p>
                    </div>
                    <div class="soc-buttons container-fluid">
                        <div class="lc-block mb-1 row">
                            <button type="button" class="like btn-sm btn <?= $like_type===-1?'btn-danger':'btn-outline-danger'?> col-5" data-id-image="<?=$image['id_image']?>" data-type-like="-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heartbreak" viewBox="0 0 16 16">
                                    <path d="M8.867 14.41c13.308-9.322 4.79-16.563.064-13.824L7 3l1.5 4-2 3L8 15a38.094 38.094 0 0 0 .867-.59m-.303-1.01-.971-3.237 1.74-2.608a1 1 0 0 0 .103-.906l-1.3-3.468 1.45-1.813c1.861-.948 4.446.002 5.197 2.11.691 1.94-.055 5.521-6.219 9.922Zm-1.25 1.137a36.027 36.027 0 0 1-1.522-1.116C-5.077 4.97 1.842-1.472 6.454.293c.314.12.618.279.904.477L5.5 3 7 7l-1.5 3 1.815 4.537Zm-2.3-3.06-.442-1.106a1 1 0 0 1 .034-.818l1.305-2.61L4.564 3.35a1 1 0 0 1 .168-.991l1.032-1.24c-1.688-.449-3.7.398-4.456 2.128-.711 1.627-.413 4.55 3.706 8.229Z"></path>
                                </svg>
                                <span ><?=disLikesCount($image['id_image'])?></span>
                            </button>
                            <button type="button" class="like btn-sm btn <?= $like_type===1?'btn-success':'btn-outline-success'?>  col-5 ms-auto" data-id-image="<?=$image['id_image']?>" data-type-like="1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"></path>
                                </svg>
                                <span><?=likesCount($image['id_image'])?></span>
                            </button>
                            <button type="button" class="btn-sm btn btn-outline-primary col-12 mt-2 comment-count" data-id-image="<?=$image['id_image']?>" data-bs-toggle="modal" data-bs-target="#modal<?=$image['id_image']?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-square-text" viewBox="0 0 16 16">
                                    <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"></path>
                                    <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6m0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"></path>
                                </svg>
                                <span><?=comentCount($image['id_image'])?></span>
                            </button>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    <?endforeach;?>
    </div>