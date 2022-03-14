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

<script src="script.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
$(document).ready(function() {
    let wasShown = '<?php echo $_SESSION['logged_in'];?>';
    if (!wasShown) {
        var toastMixin = Swal.mixin({
            toast: true,
            icon: 'success',
            title: 'General Title',
            animation: false,
            position: 'bottom-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });
        toastMixin.fire({
            title: 'Signed in Successfully'
        });
        <?php $_SESSION['logged_in'] = true;?>
        wasShown = '<?php echo $_SESSION['logged_in'];?>';
    }
});
</script>

<?php 
if(isset($_SESSION['expenseStatus']) && $_SESSION['expenseStatus'] != '')
{
?>
<script>
    Swal.fire({
       title: 'Well done!',
       text: '<?php echo $_SESSION['expenseStatus']; ?>',
       icon: '<?php echo $_SESSION['expenseStatusCode']; ?>', 
     });
</script>
<?php
unset($_SESSION['expenseStatus']);
unset($_SESSION['expenseStatusCode']);
}
?>
<?php 
if(isset($_SESSION['incomeStatus']) && $_SESSION['incomeStatus'] != '')
{
?>
<script>
    Swal.fire({
       title: 'Well done!',
       text: '<?php echo $_SESSION['incomeStatus']; ?>',
       icon: '<?php echo $_SESSION['incomeStatusCode']; ?>', 
     });
</script>
<?php
unset($_SESSION['incomeStatus']);
unset($_SESSION['incomeStatusCode']);
}
?>