<?php





class View
{

static function module_name($module)
{
  return $module ? 'Module Code'.$module ['id'] :  'Unknown module';

}

static function module_list_name($pathway,$name)
{

  $name = 'All modules';

  if ($pathway && $level)
  {
      $name = 'Open modules for '.Model::pathway ($pathway);
  }
  else if ($pathway)
  {
      $name = 'All modules for '.Model::pathway ($pathway);
  }
  else if ($level)
  {
      $name = 'All modules';
  }

  return $name;
}







}









}









 ?>
