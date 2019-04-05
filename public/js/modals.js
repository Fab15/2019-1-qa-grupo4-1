function mostrarModalComentario(){
        
        // Get the modal
        var modal = document.getElementById('modalComentario');
        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("closeModalComentario")[0];
        modal.style.display = "block";

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }


        return false;
};

function mostrarModalLikes(){
        
        var modal = document.getElementById('modalLikes');
        var span = document.getElementsByClassName("closeModalLikes")[0];
        modal.style.display = "block";

        span.onclick = function() {
            modal.style.display = "none";
        }
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }


        return false;
};

function darLike(){
    var btn = document.getElementById("iconoLike");
    if ( btn.style.color == 'rgb(255, 0, 0)') {
      btn.style.color = 'rgb(166, 166, 166)';
    } else {
      btn.style.color = 'rgb(255, 0, 0)';        
    }
}

function postPrivado(){
    var btnPriv = document.getElementById("iconoPrivado");
    var btnPub = document.getElementById("iconoPublico");
    if ( btnPriv.style.color == 'rgb(238, 111, 87)') {
      btnPriv.style.color = 'rgb(166, 166, 166)';
    } else {
      btnPriv.style.color = 'rgb(238, 111, 87)';
      btnPub.style.color  = 'rgb(166, 166, 166)';           
    }
}

function postPublico(){
    var btnPriv = document.getElementById("iconoPrivado");
    var btnPub = document.getElementById("iconoPublico");
    if ( btnPub.style.color == 'rgb(238, 111, 87)') {
      btnPub.style.color = 'rgb(166, 166, 166)';
    } else {
      btnPub.style.color = 'rgb(238, 111, 87)';  
      btnPriv.style.color  = 'rgb(166, 166, 166)';       
    }
}