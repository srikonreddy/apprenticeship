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
      $name = 'All Modules for '.Model::pathway ($pathway);
  }
  else if ($pathway)
  {
      $name = 'All modules for pathway'.Model::pathway ($pathway);
  }
  else if ($level)
  {
      $name = 'All modules for level';
  }

  return $name;
}

};













 ?>
