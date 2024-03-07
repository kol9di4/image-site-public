<?foreach($comments as $comment):?>
    <div class="comment my-2 p-2" style="background-color:#f7f7f7;">
        <div class="container-fluid px-0">
            <div class="col-12 d-flex justify-content-between">
                <div class="h5"><?=userName($comment['id_user'])?></div>
                <div class="h6 text-muted"><?=$comment['comment_dt_add']?></div>
            </div>
        </div>
        <p class="ps-4"><?=$comment['comment_text']?></p>
    </div>
<?endforeach;?>