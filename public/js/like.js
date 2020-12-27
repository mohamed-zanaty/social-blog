$('.like').on('click', function () {
        var like_s = $(this).attr('data-like');
        var post_id = $(this).attr('data-postid');
         post_id = post_id.slice(0,-2);
        $.ajax({
          type : 'POST',
          url  : url,
          data : {like_s: like_s, post_id: post_id, _token: token},

          success: function (data) {
            if (data.is_like == 1){
                //color
              $('*[data-postid="'+ post_id+'_l"]').removeClass('btn btn-outline-secondary').addClass('btn btn-primary');
                $('*[data-postid="'+ post_id +'_d"]').removeClass('btn btn-danger').addClass('btn btn-outline-secondary');


                // count like
                var like_c = $('*[data-postid="'+ post_id+'_l"]').find('.like_count').text();

                var number_like =  parseInt(like_c) + 1;
                $('*[data-postid="'+ post_id+'_l"]').find('.like_count').text(number_like);

                //delete dislike
                if (data.change_like == 1){

                    var like_c = $('*[data-postid="'+ post_id+'_d"]').find('.dislike_count').text();

                    var number_like =  parseInt(like_c) - 1;
                    $('*[data-postid="'+ post_id+'_d"]').find('.dislike_count').text(number_like);
                }
            }
            else {
                $('*[data-postid="'+ post_id +'_l"]').removeClass('btn btn-primary').addClass('btn btn-outline-secondary');

                // count like
                var like_c = $('*[data-postid="'+ post_id+'_l"]').find('.like_count').text();

                var number_like =  parseInt(like_c) - 1;
                $('*[data-postid="'+ post_id+'_l"]').find('.like_count').text(number_like);
            }
          }
        })

});
$('.dislike').on('click', function () {
        var like_s = $(this).attr('data-like');
        var post_id = $(this).attr('data-postid');
         post_id = post_id.slice(0,-2);

        $.ajax({
          type : 'POST',
          url  : url_dis,
          data : {like_s: like_s, post_id: post_id, _token: token},

          success: function (data) {
            if (data.is_dislike == 1){

              $('*[data-postid="'+ post_id+'_d"]').removeClass('btn btn-outline-secondary').addClass('btn btn-danger');
                $('*[data-postid="'+ post_id +'_l"]').removeClass('btn btn-primary').addClass('btn btn-outline-secondary');

                // count like
                var like_c = $('*[data-postid="'+ post_id+'_d"]').find('.dislike_count').text();

                var number_like =  parseInt(like_c) + 1;
                $('*[data-postid="'+ post_id+'_d"]').find('.dislike_count').text(number_like);


                //delete like
                if (data.change_dislike == 1){

                    var like_c = $('*[data-postid="'+ post_id+'_l"]').find('.like_count').text();

                    var number_like =  parseInt(like_c) - 1;
                    $('*[data-postid="'+ post_id+'_l"]').find('.like_count').text(number_like);
                }


            }
            else {
                $('*[data-postid="'+ post_id +'_d"]').removeClass('btn btn-danger').addClass('btn btn-outline-secondary');
                $('*[data-postid="'+ post_id +'_l"]').removeClass('btn btn-primary').addClass('btn btn-outline-secondary');

                // count like
                var like_c = $('*[data-postid="'+ post_id+'_d"]').find('.dislike_count').text();

                var number_like =  parseInt(like_c) - 1;

                $('*[data-postid="'+ post_id+'_d"]').find('.dislike_count').text(number_like);

            }
          }
        })

});
