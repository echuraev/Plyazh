<link href="../styles/styles.css" rel="stylesheet" type="text/css">
<link href="styles/admin_styles.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="./styles/redactor.css" />		
<script type="text/javascript" src="./js/jquery-1.8.2.min.js"></script>	
<script src="./js/redactor.js"></script>
<script type="text/javascript">
	$(document).ready(
		function()
		{
			$('#content').redactor({
				imageUpload: './include/image_upload.php',
				fileUpload: './include/file_upload.php'
				//imageGetJson: './include/data.json'
			});
		}
	);
</script>
<? 
include_once 'include/common_func.php'; 
include_once '../include/db.php';
?>