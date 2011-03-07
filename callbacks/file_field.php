<?

$bt = eval("return {$obj->klass}::\$belongs_to;");
if($bt[$field][0]!='attachments') click_error("{$obj->klass}->$field must be an 'attachments' association. Check your mysql comment or field name.");
