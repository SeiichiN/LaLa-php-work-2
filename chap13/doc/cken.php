// p310
function cken(array $data): bool {
  $result = true;
  foreach ($data as $key => $value) {
  	if (is_array($value)) {
  	  $value = implode("", $value);
  	}
  	if (!mb_check_encoding($value)) {
  	  $result = false;
  	  break;
  	}
 	}
 	return $result;
}
