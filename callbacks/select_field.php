<?

$options = superform_create_options($obj, $data, 'item_array');
if($data['disable_when_empty'] && count($options)==0) $data['enabled'] = false;

$choices = array( 
  (object)array($data['value_field']=>'',$data['display_field']=>"-- Choose --" )
);
if(isset($data['add_url']))
{
  $choices[] = (object)array($data['value_field']=>'__superform_new_item__',$data['display_field']=>"[ new item... ]" );
}
$options = array_merge($choices , $options);
