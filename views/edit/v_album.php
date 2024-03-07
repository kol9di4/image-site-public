<div class="d-flex align-items-center" style="min-height: calc(100vh - 86px);">
    <div class="container-xl align-middle" >
        <div class="col-12 d-flex justify-content-between align-items-center">
            <h1 class="my-5 text-primary">Редактирование альбома</h1>
            <button type="button" class="btn btn-danger" id="delete-album">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"></path>
                </svg>
                <span class="h6">Удалить альбом</span>
            </button>
        </div>
        <form action="" method="post" id="form-edit-album" data-album-id="<?=$album['id_album']?>" enctype="multipart/form-data">
            <div class="album-main">
                <div class="mb-3">
                    <label for="" class="form-label">Название альбома:</label>
                    <input type="text" class="form-control" name="" id="album-name" aria-describedby="helpId" value="<?=$album['album_name']?>" />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Описание альбома:</label>
                    <textarea class="form-control" name="" id="album-description" rows="5"><?=$album['album_description']?></textarea>
                </div>
            </div>
            <div class="row" id="images-block">
                <h4>Добавление изображений:</h4>
                <?=$imagesCard?>
                <div class="card-image p-2 col-xl-4 col-md-6 mb-3" id="hide-card-image" style="display: none;">
                    <div class="bg-light ">
                        <div class="p-3">
                            <div class="d-flex justify-content-between mb-3">
                                <div class="h5 text-primary">Добавьте изображение <span>1</span></div>
                                <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="mx-2">
                                <div class="mb-3">
                                    <label for="" class="form-label">Название изображения:</label>
                                    <input type="text" name="image-name" class="form-control" name="" id="" aria-describedby="helpId" />
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Описание изображения:</label>
                                    <textarea class="form-control" name="image-description" id="" rows="3"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Загрузите файл изображения (не более 2mb):</label> 
                                    <input type="file" name="image-file" class="form-control" name="" id="" placeholder="обложка альбома" aria-describedby="fileHelpId" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="buttons mb-8">
                <button type="button" id="add-image-edit" class="btn btn-secondary mb-2" >
                    Добавить изображение
                </button>
                <button type="submit" class="btn btn-primary mb-2" >
                    Обновить альбом
                </button>
            </div>
        </form>
    </div>
</div>