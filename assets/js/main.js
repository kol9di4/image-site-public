$(function(){
  //добавление нового комментария
  $('main').on('click','#new-comment-form button',function(e){
        e.preventDefault();
        var id_image=$(this).data('id');
        var text = $("textarea[name='text-comment'][data-id="+id_image+"]").val();
        const data = {
            text: text,
            id: id_image
          };
        if (text!=''){
          $.ajax({
            url: "core/ajax-helper/comment_add.php", 
            type: "post",
            data: data,
            success: function (response) {
              $.post('core/ajax-helper/modal_image.php', {id_image:id_image}, function(response) {
                $(".comment-count[data-id-image="+id_image+"]").children('span').html(response['commentsCount']);
                $(".comments-vew[data-id-image="+id_image+"]").html(response['comments']);
                $("form[data-id="+id_image+"]").css('display','none');
                $("form[data-id="+id_image+"] ~ .comment-again").css('display','block');
                $("textarea[name='text-comment'][data-id="+id_image+"]").val('');
                $('.modal').scrollTop($(".modal").scrollHeight);
              }, 'json');
            },
            error: function (error) {},
          });
        }
        $('.comment-again button').on('click',function(){
          $(this).parent().siblings("form").css('display','block');
          $(this).parent().css('display','none');
          $('.modal').scrollTop($(".modal").scrollHeight);
        })
  });
  //добавление лайка
  $('button.like').on('click',function(){
      var idImage = $(this).data('id-image');
      var likeType = $(this).data('type-like');
      const data = {
        idImage: idImage,
        likeType: likeType
      };
    //добавление лайка и обновление данных на странице
    $.post('core/ajax-helper/like_add.php', data, function(response) {
      $("button.like[data-id-image="+idImage+"]").removeClass('btn-success');
      $("button.like[data-id-image="+idImage+"]").removeClass('btn-danger');
      $("button.like[data-id-image="+idImage+"]").removeClass('btn-outline-success');
      $("button.like[data-id-image="+idImage+"]").removeClass('btn-outline-danger');
      if(response['likeType']==-1){
        $("button.like[data-id-image="+idImage+"][data-type-like=-1]").addClass('btn-danger');
        $("button.like[data-id-image="+idImage+"][data-type-like=1]").addClass('btn-outline-success');
      }
      else if (response['likeType']==1)
      {
        $("button.like[data-id-image="+idImage+"][data-type-like=-1]").addClass('btn-outline-danger');
        $("button.like[data-id-image="+idImage+"][data-type-like=1]").addClass('btn-success');
      }
      else
      {
        $("button.like[data-id-image="+idImage+"][data-type-like=1]").addClass('btn-outline-success');
        $("button.like[data-id-image="+idImage+"][data-type-like=-1]").addClass('btn-outline-danger');
      }
      $("button.like[data-id-image="+idImage+"][data-type-like=-1]").children('span').html(response['disLike']);
      $("button.like[data-id-image="+idImage+"][data-type-like=1]").children('span').html(response['like']);
    }, 'json');
  });
})