<?php 
if(isset($_SESSION['loginStatus']) && $_SESSION['loginStatus'] != '')
{
    ?>
        <script>
            Swal.fire({
               title: 'Watch Out!',
               text: '<?php echo $_SESSION['loginStatus']; ?>',
               icon: '<?php echo $_SESSION['loginStatusCode']; ?>', 
               confirmButtonText: 'Try again',
               confirmButtonColor: '#6495ED',
               position: 'center',
             });
    </script>
    <?php
unset($_SESSION['loginStatus']);
unset($_SESSION['loginStatusCode']);
}
?>
<?php 
if(isset($_SESSION['passwordStatus']) && $_SESSION['passwordStatus'] != '')
{
    ?>
       <script>
            Swal.fire({
               title: 'Watch Out!',
               text: '<?php echo $_SESSION['passwordStatus']; ?>',
               icon: '<?php echo $_SESSION['passwordStatusCode']; ?>', 
               confirmButtonText: 'Try again',
               confirmButtonColor: '#6495ED',
               position: 'center',
             });   
    </script>
<?php
unset($_SESSION['passwordStatus']);
unset($_SESSION['passwordStatusCode']);
}
?>
<?php 
if(isset($_SESSION['serwerStatus']) && $_SESSION['serwerStatus'] != '')
{
    ?>
    <script>
            Swal.fire({
               title: 'Internal serwer error!',
               text: '<?php echo $_SESSION['serwerStatus']; ?>',
               icon: '<?php echo $_SESSION['serwerStatusCode']; ?>', 
               confirmButtonText: 'OK',
               confirmButtonColor: '#6495ED',
			   position: 'center',
             });  
    </script>
<?php
unset($_SESSION['serwerStatus']);
unset($_SESSION['serwerStatusCode']);
}
?>