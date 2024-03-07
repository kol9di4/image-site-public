$(function(){
    //нумерация карточек картинок
    function cardNumeration(){
        $('.card-image').each(function(i,elem) {
            $(elem).find('div.h5 span').html(i+1);
        });
    }
    cardNumeration();
    //добавление новой карточки картинки
    $('#add-image').on('click',function(){
        var newBlock = $('.card-image').first().clone();
        newBlock.appendTo('#images-block');
        newBlock.find('input[type=text], input[type=file], textarea').val('');
        cardNumeration();
        $("html, body").scrollTop($(document).height());
    })
    //удаление карточки картинки
    $('body').on('click','#form-add-album .btn-close',function(){
        if($('.card-image').length>1){
            $(this).parents('.card-image').hide('slow', function(){
                $(this).remove();
                cardNumeration();
            });
        }
    })
    //валидация файлов в форме
    $('body').on('click','input[type=file]',function(){
        $(this).fileValidator({
            onValidation: function(files){
                $(this).removeClass('is-invalid');
            },
            onInvalid:    function(validationType, file){
                $(this).addClass('is-invalid');
            },
            maxSize:      '2m',
            type:         'image' 
        });
    })
    //валидация и отправление формы
    $('#form-add-album').on('submit',function(e){
        e.preventDefault();
        var valid = true;
        $('#form-add-album').find('input, textarea').each(function(){
            if($(this).val().length==0){
                $(this).addClass('is-invalid');
                valid = false;
            }
            else
                $(this).removeClass('is-invalid');
        });

        if(valid){
            var album_name = $('#form-add-album #album-name').val();
            var album_description = $('#form-add-album #album-description').val();
            const data_album={
                album_name: album_name,
                album_description: album_description
            }
            $.post('core/ajax-helper/upload_album.php', data_album);
            var new_location = '';
            $('.card-image').each(function(){
                var image_name = $(this).find('input[name=image-name]').val();
                var image_description = $(this).find('textarea[name=image-description]').val();
                var image_file = $(this).find('input[name=image-file]').prop('files')[0];
                var formData = new FormData;
                formData.append('image_file',image_file);
                formData.append('image_name_text',image_name);
                formData.append('image_description',image_description);
                $.ajax({
                    url: 'core/ajax-helper/upload_image.php',
                    data: formData,
                    processData: false,
                    contentType: false,
                    type: 'POST',
                    success: function (data) {
                        new_location=data;
                    }
                }).done(function(){
                    window.location.replace("index.php?c=album&id_album="+new_location);
                });
            })
        }
    })
})