






<!-- HEADER PEGADIZO -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        var showHeaderAt = 80;
        var win = $(window),
                body = $('body');

        // Show the fixed header only on larger screen devices
        if(win.width() > 600){

            // When we scroll more than 150px down, we set the
            // "fixed" class on the body element.
            win.on('scroll', function(e){
                if(win.scrollTop() > showHeaderAt) {
                    body.addClass('fixed');
                }
                else {
                    body.removeClass('fixed');
                }
            });
        }
    });
</script>




<!-- NAVEGADOR -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.smartmenus/1.0.1/jquery.smartmenus.js'></script>