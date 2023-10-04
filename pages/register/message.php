<?php
    if(isset($_SESSION['message'])) :
?>

<div id="myAlert" class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Hey!</strong> <?= $_SESSION['message']; ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<script>
// Get a reference to the alert element
var alertElement = document.getElementById('myAlert');

// Function to close the alert
function closeAlert() {
    alertElement.style.display = 'none'; // or alertElement.remove() to remove it
}

// Wait for 3 seconds and then close the alert
setTimeout(closeAlert, 3000);
</script>

<?php 
    unset($_SESSION['message']);
    endif;
?>