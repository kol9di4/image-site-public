$(function(){
    function cardNumeration(){
        $('.card-image.new, .card-image.old').each(function(i,elem) {
            $(elem).find('div.h5 span').html(i+1);
        });
    }
    $('#add-image-edit').on('click',function(){
        var newBlock = $('.card-image#hide-card-image').first().clone();
        newBlock.appendTo('#images-block');
        newBlock.find('input[type=text], input[type=file], textarea').val('');
        newBlock.css('display','block');
        newBlock.addClass('new');
        cardNumeration();
        $("html, body").scrollTop($(document).height());
    })
    $('#form-edit-album').on('submit',function(e){
        e.preventDefault();
        var valid = true;
        $('#form-edit-album').find('.card-image.new input, .card-image.old input,.card-image.new textarea, .card-image.old textarea').each(function(){
            if($(this).val().length==0){
                $(this).addClass('is-invalid');
                valid = false;
            }
            else
                $(this).removeClass('is-invalid');
        });
        if(valid){
            var album_name = $('#form-edit-album #album-name').val();
            var album_description = $('#form-edit-album #album-description').val();
            var album_id = $('#form-edit-album').data('album-id');
            const data_album={
                album_name: album_name,
                album_description: album_description,
                id_album: album_id
            }
            $.post('core/ajax-helper/edit_album.php', data_album, function (data){});
            $('.card-image.old').each(function(){
                var image_name = $(this).find('input[name=image-name]').val();
                var image_description = $(this).find('textarea[name=image-description]').val();
                var image_id = $(this).data('image-id');
                const data_image={
                    image_name_text: image_name,
                    image_description: image_description,
                    id_image: image_id
                }
                $.ajax({
                    url: 'core/ajax-helper/edit_image.php',
                    data: data_image,
                    type: 'POST',
                    success: function (data) {
                    }
                });
                
            })
            $('.card-image.new').each(function(){
                var image_name = $(this).find('input[name=image-name]').val();
                var image_description = $(this).find('textarea[name=image-description]').val();
                var image_file = $(this).find('input[name=image-file]').prop('files')[0];
                var formData = new FormData;
                formData.append('image_file',image_file);
                formData.append('image_name_text',image_name);
                formData.append('image_description',image_description);
                formData.append('id_album',album_id);
                $.ajax({
                    url: 'core/ajax-helper/upload_image.php',
                    data: formData,
                    processData: false,
                    contentType: false,
                    type: 'POST',
                    success: function (data) {}
                });  
            })
            $(document).ajaxStop(function() {
                window.location.replace("index.php?c=album&id_album="+album_id);
            });
        }
    })
    $('body').on('click','#form-edit-album .card-image.old .btn-close',function(){
        if($('.card-image.old').length>1){
            data_delete_image = {
                id_image: $(this).parents('.card-image.old').data('image-id')
            }
            $.post('core/ajax-helper/delete_image.php', data_delete_image, function (data){});
            $(this).parents('.card-image.old').hide('slow', function(){
                $(this).remove();
                cardNumeration();
            });
        }
    })
    $('body').on('click','#delete-album',function(){
        data_delete_album = {
            id_album: $(document).find('#form-edit-album').data('album-id')
        }
        $.post('core/ajax-helper/delete_album.php', data_delete_album, function (data){
            console.log(data);
        });
        window.location.replace("index.php");
    })
})