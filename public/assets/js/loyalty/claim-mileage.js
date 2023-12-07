$(function () {
    $("#claim_mileage").on('submit',function (e) {
        e.preventDefault();

        $.ajax({
            url:$(this).attr('action'),
            method:$(this).attr('method'),
            data: new FormData(this),
            processData:false,
            dataType:'json',
            contentType:false,
            beforeSend:function () {
                $(document).find('span.error-text').text('');
                Swal.fire({
                    text: 'Processing...',
                    allowOutsideClick:false,
                    didOpen: ()=>{
                        Swal.showLoading()
                    }

                })

            },
            complete: function(){
              //  $('#loader').addClass('hidden')
            },
            success:function (data) {
               
                Swal.close();
                $("#claim_mileage")[0].reset();
                $('#departure1').val(null).trigger('change');
                $('#arrival1').val(null).trigger('change');

                if(data.status == 0){
                    $.each(data.error,function (prefix,val){
                       $('span.'+prefix+'_error').text(val[0]);
                    });
                }else if(data.status == 1){
                    Swal.fire({
                        confirmButtonColor:"#2AAA6A",
                        text: data.message,
                        footer: '<p style="white-space: nowrap">For any queries, please contact <a href="mailto: bimanloyaltyclub@bdbiman.com">bimanloyaltyclub@bdbiman.com</a></p>'
                    });
                }else if(data.status == 2){

                    Swal.fire({
                        title: 'Congratulation!',
                        text: "Your mileage claim is successful. Missing miles will be added automatically to your account.",
                        icon: 'success',
                        confirmButtonColor: '#2AAA6A',
                    });
                }

            }
        });
    });

});
