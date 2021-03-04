<?php session_start();
session_destroy();
?>
<script type="text/javascript">
	alert("logout successfully");
	window.location.href='index.php';
</script>