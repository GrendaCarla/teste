$('#delete-modal').on('show.bs.modal', function (event) {
    
    var button = $(event.relatedTarget);
    var id = button.data('customer');
    
    var modal = $(this);
    modal.find('.modal-title').text('Deletar Usuário ' + id);
    modal.find('#confirm').attr('href', 'delete.php?id=' + id);
})
