<?php

require('../app/functions.php');

include('../app/_parts/_header.php');

?>

<form action="result.php" method="get">
  <textarea name="message" id="" cols="30" rows="10"></textarea>
  <button>Send</button>
</form>

<?php

include('../app/_parts/_footer.php');