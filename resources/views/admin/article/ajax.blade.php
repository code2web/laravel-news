<script src="{{asset('admin/plugins/jquery/jquery/jquery.min.js')}}"></script>
{{-- <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script> --}}

<script>
$(document).ready(function(){
  // $('#category').change(function() {
  //     console.log('hhhj');
  //     let cid = $(this).val;
  //     alert(cid);

  //   });
  $(document).on('click', '.create_article', function(e){
    e.preventDefault();
    var title = $('#title').val();
    // console.log(title);
    var content = $('#content').val();
    var thumbnail = $('#thumbnail')[0].files[0];
    var category_id = $('#category_id').val();
    var district_id = $('#district_id').val();
    // let cid = $('#category').find(':selected').val();
    // console.log(cid);

    var form = new FormData();

    form.append('title', title);
    form.append('content', content);
    form.append('thumbnail', thumbnail);
    form.append('category_id', category_id);
    form.append('district_id', district_id);

    $.ajax({
      url: "{{route('article.store')}}",
      method: "post",      

      cache: false,
      contentType: false,
      processData: false,

      data : form,
      success: function(res){
        if (res.status == 'success') {
          $('#createModal').modal('hide');
          $('#createarticleForm')[0].reset();

          $('.table').load(location.href+' .table');

          Command: toastr["success"]("Created Done!", "success")
          toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
          }
        }
      },error: function(err){
        $('.errMsgContainer').html('');
        let error = err.responseJSON;
        $.each(error.errors, function(index, value){
          $('.errMsgContainer').append('<span class="text-danger">'+value+'</span>'+'<br>')
        })
      }
    })
  })

  // show value in update form
  $(document).on('click', '.update_article_form', function(){
    // let id = $(this).data('id');
    // let title = $(this).data('title');
    // let content = $(this).data('content');
    // let thumbnail = $(this).data('thumbnail')[0].files[0];
    // let category_id = $(this).data('category_id');
    // let district_id = $(this).data('district_id');
    // // console.log(id+title);
    // var form = new FormData();

    // form.append('id', $('#up_id').val(id));
    // form.append('title', $('#up_title').val(title));
    // form.append('content', $('#up_content').val(content));
    // form.append('thumbnail', $('#up_thumbnail').val(thumbnail));
    // form.append('category_id', $('#up_category_id').val(category_id));
    // form.append('district_id', $('#up_district_id').val(district_id));


    let id = $(this).data('id');
    let title = $(this).data('title');
    let content = $(this).data('content');
    // let thumbnail = $(this).data('thumbnail');
    let category_id = $(this).data('category_id');
    let district_id = $(this).data('district_id');
    // console.log(id+title);

    $('#up_id').val(id);
    $('#up_title').val(title);
    $('#up_content').val(content);
    // $('#up_thumbnail').val(thumbnail);
    $('#up_category_id').val(category_id);
    $('#up_district_id').val(district_id);



    // var id = $('#title').val();
    // var title = $('#title').val();
    // // console.log(title);
    // var content = $('#content').val();
    // var thumbnail = $('#thumbnail')[0].files[0];
    // var category_id = $('#category_id').val();
    // var district_id = $('#district_id').val();
    // // let cid = $('#category').find(':selected').val();
    // // console.log(cid);

    // var form = new FormData();

    // form.append('title', title);
    // form.append('content', content);
    // form.append('thumbnail', thumbnail);
    // form.append('category_id', category_id);
    // form.append('district_id', district_id);

    // var id = $(this).data('id');
    // var title = $(this).data('title');
    // var content = $(this).data('content');
    // var thumbnail = $(this).data('thumbnail')[0].files[0];
    // var category_id = $(this).data('category_id');
    // var district_id = $(this).data('district_id');

    // var form = new FormData();

    // form.append('id', id);
    // form.append('title', title);
    // form.append('content', content);
    // form.append('thumbnail', thumbnail);
    // form.append('category_id', category_id);
    // form.append('district_id', district_id);

    // $('#id').val(id);
    // $('#title').val(title);
    // $('#content').val(content);
    // $('#thumbnail').val(thumbnail);
    // $('#category_id').val(category_id);
    // $('#district_id').val(district_id);
  })

  // update value data
  $(document).on('submit', '#updatearticleForm', function(e){
    e.preventDefault();
    // let id = $('#up_id').val();
    // let article_id = $(this).data('id');
    var updateForm = new FormData($('#updatearticleForm')[0]);
    $.ajax({
      // url: "/admin/update/"+id,
      url: "{{route('article.update',$article->id)}}",
      method: "put",
      data: updateForm,
      // data: {up_id:up_id,up_title:up_title},

      // cache: false,
      contentType: false,
      processData: false,

      success: function(res){
        if (res.status == 'success') {
          $('#updateModal').modal('hide');
          $('#updatearticleForm')[0].reset();

          $('.table').load(location.href+' .table');

          Command: toastr["success"]("Updated Done!", "success")
          toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
          }
        }
      },error: function(err){
        $('.errMsgContainer').html('');
        let error = err.responseJSON;
        $.each(error.errors, function(index, value){
          $('.errMsgContainer').append('<span class="text-danger">'+value+'</span>'+'<br>')
        })
      }
    })
  })





  // // update value data
  // $(document).on('click', '.update_article', function(e){
  //   e.preventDefault();
  //   let up_id = $('#up_id').val();
  //   let up_title = $('#up_title').val();
  //   $.ajax({
  //     url: "{{route('article.update',$article->id)}}",
  //     method: "put",
  //     data: {up_id:up_id,up_title:up_title},
  //     success: function(res){
  //       if (res.status == 'success') {
  //         $('#updateModal').modal('hide');
  //         $('#updatearticleForm')[0].reset();

  //         $('.table').load(location.href+' .table');

  //         Command: toastr["success"]("Updated Done!", "success")
  //         toastr.options = {
  //           "closeButton": true,
  //           "debug": false,
  //           "newestOnTop": false,
  //           "progressBar": true,
  //           "positionClass": "toast-top-right",
  //           "preventDuplicates": false,
  //           "onclick": null,
  //           "showDuration": "300",
  //           "hideDuration": "1000",
  //           "timeOut": "5000",
  //           "extendedTimeOut": "1000",
  //           "showEasing": "swing",
  //           "hideEasing": "linear",
  //           "showMethod": "fadeIn",
  //           "hideMethod": "fadeOut"
  //         }
  //       }
  //     },error: function(err){
  //       $('.errMsgContainer').html('');
  //       let error = err.responseJSON;
  //       $.each(error.errors, function(index, value){
  //         $('.errMsgContainer').append('<span class="text-danger">'+value+'</span>'+'<br>')
  //       })
  //     }
  //   })
  // })





  // delet value data
  $(document).on('click', '.delete_article', function(e){
    e.preventDefault();
    let article_id = $(this).data('id');
    // console.log(article_id);
    if (confirm('Are you sure to Delete')) {
      $.ajax({
        url: "{{route('article.destroy',$article->id)}}",
        method: "delete",
        data: {article_id:article_id},
        success: function(res){
          if (res.status == 'success') {            
            $('.table').load(location.href+' .table');

            Command: toastr["success"]("Deleted Done!", "success")
            toastr.options = {
              "closeButton": true,
              "debug": false,
              "newestOnTop": false,
              "progressBar": true,
              "positionClass": "toast-top-right",
              "preventDuplicates": false,
              "onclick": null,
              "showDuration": "300",
              "hideDuration": "1000",
              "timeOut": "5000",
              "extendedTimeOut": "1000",
              "showEasing": "swing",
              "hideEasing": "linear",
              "showMethod": "fadeIn",
              "hideMethod": "fadeOut"
            }
          }
        }
      })
    }    
  })

  // Pagination
  $('.pagination').addClass('justify-content-center')
  $(document).on('click', '.pagination a', function(e){
    e.preventDefault();
    let page = $(this).attr('href').split('page=')[1]

    pagination(page);
  })

  function pagination(page){
    $.ajax({
      // url:"/admin/pagination/article?page="+page,
      url:"{{route('pagination_article')}}?page="+page,      
      success:function(res){
        $('.card-body').html(res);
      }
    })
  }

  // Search

  $(document).on('keyup',function(e){
    e.preventDefault();
    let search_string = $('#search').val();
    // console.log(search_string);
    $.ajax({
      url:"{{route('search_article')}}",
      data: {search_string:search_string},   
      success:function(res){
        $('.card-body').html(res);
        if (res.status=='nothing_found') {
          $('.card-body').html('<h6 class="text-danger text-center">'+'Nothing Found'+'</h6>');
        }
      }
    })
  })
});
</script>