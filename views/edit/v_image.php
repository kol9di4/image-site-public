<div class="card-image old p-2 col-xl-4 col-md-6 mb-3" data-image-id="<?=$image['id_image']?>">
    <div class="bg-light ">
        <div class="p-3">
            <div class="d-flex justify-content-between mb-3">
                <div class="h5 text-primary">Изменение изображения <span>1</span></div>
                <button type="button" class="btn-close ms-auto" aria-label="Close"></button>
            </div>
            <div class="mx-2">
                <div style="max-height: 200px;overflow:hidden;">
                    <img src="assets/img/<?=$image['image_name']?>" alt="">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Название изображения:</label>
                    <input type="text" name="image-name" class="form-control" name="" id="" aria-describedby="helpId" value="<?=$image['image_name_text']?>" />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Описание изображения:</label>
                    <textarea class="form-control" name="image-description" id="" rows="3"><?=$image['image_description']?></textarea>
                </div>
            </div>
        </div>
    </div>
</div>