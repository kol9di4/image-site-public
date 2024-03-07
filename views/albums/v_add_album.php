<div class="d-flex align-items-center" style="min-height: calc(100vh - 86px);">
    <div class="container-xl align-middle" >
        <h1 class="my-5 text-primary">Добавление нового альбома</h1>
        <form action="" method="post" id="form-add-album" enctype="multipart/form-data">
            <div class="album-main">
                <div class="mb-3">
                    <label for="" class="form-label">Название альбома:</label>
                    <input type="text" class="form-control" name="" id="album-name" aria-describedby="helpId" />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Описание альбома:</label>
                    <textarea class="form-control" name="" id="album-description" rows="5"></textarea>
                </div>
            </div>
            <div class="row" id="images-block">
                <h4>Добавление изображений:</h4>
                <div class="card-image p-2 col-xl-4 col-md-6 mb-3">
                    <div class="bg-light ">
                        <div class="p-3">
                            <div class="d-flex justify-content-between mb-3">
                                <div class="h5 text-primary">Добавьте изображение <span>1</span></div>
                                <button type="button" class="btn-close ms-auto" aria-label="Close"></button>
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
                <button type="button" id="add-image" class="btn btn-secondary mb-2" >
                    Добавить изображение
                </button>
                <button type="submit" class="btn btn-primary mb-2" >
                    Загрузить альбом
                </button>
            </div>
        </form>
    </div>
</div>