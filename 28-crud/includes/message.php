<?php
session_start();
if (isset($_SESSION['mensagem'])):?>
  <script>
    window.onload = () => {
      M.toast({html: '<?php echo $_SESSION['mensagem']?>', displayLength: 4000})
    }
  </script>
<?php
endif;
session_unset();
?>