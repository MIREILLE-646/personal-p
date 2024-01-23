 <link rel="stylesheet" href="../css/bootstrap.css" />
 
    
 </body>
<?php
function secure()
{
    if (!isset($_SESSION['uid'])) {
        echo '<h1 style="text-align:center; padding-top:20px; text-style:capitalized; overflow:hidden;" >Please login first to view this page</h1>';
       echo '<main>
       <div class="container text-center">
   
         <section class="section error-404 min-vh-100 d-flex flex-column align-items-center justify-content-center">
           <a class="btn btn-secondary" href="../login.php">Back to home</a>
           <img src="assets/img/not-found.svg" class="img-fluid py-5 mx-auto" width="50%" alt="Login First">
                   </section>
   
       </div>
     </main>';
       
       
        die();
    }
}


?>