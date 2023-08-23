
function deleteVeiculo(id) {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    const val = {
        id
    }
    $.ajax({
        type: "DELETE",
        url: `/delete/${id}`,
        data: {val:val},
        success: function (data) {

        $(`#tr-${id}`).remove();  
            iziToast.success({
                title: 'OK',
                message: 'Veiculo deletado com sucesso!',
            });
        }, 
        error: function(data){
            iziToast.error({
                title: 'Error',
                message: 'Não foi possivel deletar o veiculo!',
            });
        }
    });
}