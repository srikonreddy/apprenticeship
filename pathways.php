<!DOCTYPE html>
<?php
include 'lib/model.php';
include 'lib/view.php';

// ---- this is a constant

define ('PAGE_SIZE',10);

// --- this is to get the URL parameters

$pathway = $_GET['pathway']  ?? '';
$level   = $_GET['level']    ?? '';
$page    = $_GET['page']     ??  1;

// --- this is to load the data from the models

$modules = Model::modules($pathway,$level);
$title = ucwords(View::module_list_name($pathway,$level));

// ---- this is for paging parameters

$total = count($modules);
$pages = ceil ($total / PAGE_SIZE);
$first  = max (0, min ($total, ($page - 1) * PAGE_SIZE));
$last = min ($first + PAGE_SIZE, $total);
$prev = max (1, $page - 1);
$next = min ($pages, $page + 1);

// --- preparing outbound links

$params = [];

if ($pathway) $params [] = 'pathway='.$pathway;
if ($level) $params [] = 'level='.$level;

  $base = '?'.implode('&',$params).($params ? '&' : '');

?>
<html lang="en">
<head>
<?php $title = 'Pathways'?>
  <?php include 'layout/head.php' ?>
  <style>
  <?php include 'assets/css/website.css' ?>
  </style>
</head>
<body>
  <?php include 'layout/menu.php' ?>
  <main role="main" class="container">
    <nav>
      <div class="float-right">
        <label for "pathway"><span class="d-done d-md-inline">Pathway:</span></label>
        <select id="pathway">
          <option value=""<?= $pathway == '' ? 'selected' : '' ?> >All Pathways</option>
          <?php foreach (Model::pathways() as $id => $name) {?>
          <option value="<?= $id ?>" <?= $pathway == $id ? 'selected' : '' ?> ><?= $name ?></option>
          <?php  } ?>
        </select>
        <label for="year"><span class="d-done d-md-inline">Level:</span></label>
        <select class="mr-0" id="levels">
          <option value ="" <?= $level == '' ? 'selected' : '' ?> >All Years</option>
          <option value="1" <?= $level == '' ? 'selected' : '' ?> >1st Year</option>
          <option value="2" <?= $level == '' ? 'selected' : '' ?> >2nd Year</option>
          <option value="3" <?= $level == '' ? 'selected' : '' ?> >3rd Year</option>
        </select>
      </div>
    </nav>
    <table class="table table-bordered table-hover table-condensed">
      <thead>
        <tr>
          <th class="text-center">ID&nbsp;No.</th>
          <th class="">Name</th>
          <th class="text-center">Pathway</th>
          <th>Level</th>
        </tr>
      </thead>
      <tbody>
        <?php for ($i = $first ; $i < $last ; $i++) {$module = $modules[$i]; ?>
        <tr class="<?= $module['level'] == 'open' ? '' : 'text-muted' ?>">
          <td class="text-center"><a href="pathways.php?id=<?= $module['id'] ?>"><?= $module['id'] ?></a></td>
          <td class=""><?= $module['name']?></td>
          <td class="d-none d-md-table-cell text-center"><?= View::module_name ($module['name']) ?></td>
          <td><?= Model::pathways ($module['pathway']) ?></td>
          <td class="d-none d-lg-table-cell text-center"><div class="text-muted"><?= $module['pathway'] ?></div></td>
         <td class="<?= $module['level'] == 'open' ? 'text-danger' : '' ?>"><?= ucfirst ($module['level']) ?></td>
        </tr>
        <?php } ?>
       <?php if ($last - $first == 0) { ?>
        <td class="text-center" colspan="6">No matching modules found</td>
      <?php } ?>
     </tbody>
  </table>
  <?php if ($pages > 1) { ?>
  <nav>
  <ul class="pagination">
    <li class="page-item <?= $page > 1 ? '' : 'disabled' ?>">
      <a class="page-link" href="<?= $base.'page='.$prev ?>">
        <span>&laquo;</span>
      </a>
    </li>
    <?php for ($i = 1 ; $i <= $pages ; $i++) { ?>
    <li class="page-item <?= $i == $page ? 'active': '' ?>"><a class="page-link" href="<?= $base.'page='.$i ?>"><?= $i ?></a></li>
    <?php } ?>
   <li class="page-item <?= $page < $pages ? '' : 'disabled' ?>">
      <a class="page-link" href="<?= $base.'page='.$next ?>">
          <span>&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
<?php } ?>
</main>
<?php include 'layout/footer.php' ?>
<?php include 'layout/scripts.php'?>

<script>

    function reload ()
    {
      let params = {};
      let pathway = $('#pathway').val();
      let level = $('#level').val();

     if (pathway) params.pathway = pathway;
     if (level) params.level = level;

     window.location.replace(jQuery.isEmptyObject(params) ? '?' : '?' + $.param(params));
    }

    $('#pathway').change(reload);
    $('#level').change(reload);

</script>
</body>
</html>





















</main>
</body>
</html>
