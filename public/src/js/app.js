var postId=0;
var postBodyElement=null;

$('.post').find('.interaction').find('.edit').on('click',function (event) {
    event.preventDefault();

    var postBodyElement=event.target.parentNode.parentNode.childNodes[1];
    var postBody=postBodyElement.textContent;
    postId=event.target.parentNode.parentNode.dataset['postid'];
    $('#post-body').val(postBody);
    // console.log(postBody);
    $('#edit-modal').modal();

    $('#modal-save').on('click',function(){
        $.ajax({
            method:'POST',
            url:urlEdit,
            data:{body:$('#post-body').val(),postId:postId,_token:token}
        })
        .done(function (msg) {
            //console.log(msg['new_body']);
            $(postBodyElement).text(msg['new_body']);
            $('#edit-modal').modal('hide');
        })
    });
});

$('.like').on('click',function (event) {
    var isLike=event.target.previousElementSibling==null?true:false;
    postId=event.target.parentNode.parentNode.dataset['postid'];
    $.ajax({
        method:'POST',
        url:urlLike,
        data:{isLike:isLike,postId:postId,_token:token}
    })
        .done(function (msg) {

        })
});