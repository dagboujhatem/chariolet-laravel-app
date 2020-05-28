function delete_confirmation() {
    $("body").on("click",".remove-user",function(){
    var current_object = $(this);
         Swal.fire({
                    title: "Êtes-vous sûr?",
                    text: "Voulez-vous vraiment supprimer cette enregistrement?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: '#4dbd74',
                    cancelButtonColor: '#f86c6b',
                    confirmButtonText: '<i class="fa fa-check" aria-hidden="true"></i> Oui, supprimez-le',
                    cancelButtonText: '<i class="fa fa-times" aria-hidden="true"></i> Non, annuler'
                }).then((result) => {
                    if (result.value) {
                        var action = current_object.attr('data-action');
                        var token = jQuery('meta[name="csrf-token"]').attr('content');
                        var id = current_object.attr('data-id');

                        $('body').html("<form class='form-inline remove-form' method='post' action='"+action+"'></form>");
                        $('body').find('.remove-form').append('<input name="_method" type="hidden" value="delete">');
                        $('body').find('.remove-form').append('<input name="_token" type="hidden" value="'+token+'">');
                        $('body').find('.remove-form').append('<input name="id" type="hidden" value="'+id+'">');
                        $('body').find('.remove-form').submit();

                    } else {

                    }

                });
    });
 return false;
}
