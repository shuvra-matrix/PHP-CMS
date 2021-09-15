$(document).ready(function(){


    ClassicEditor
    .create( document.querySelector( '#editor_post' ) )
    .catch( error => {
        console.error( error );
    } );

});

