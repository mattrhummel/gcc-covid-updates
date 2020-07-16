<h2>Search and Filter Programs</h2>

<form action="" method="GET" id="pathways_search">

    <?php /* You can also leave 'action' blank: action="" */ ?>
    <div class="input-group">
  
      <label for="post_type" style="display:none;">Search</label> 
      <input type="text" name="post_type" id="post_type" class="input-group-field" placeholder="<?php echo esc_attr_x( 'Search programs', 'placeholder' ) ?>">
      
      <div class="input-group-button">
        <button id="searchsubmit-desktop" type="submit" class="button" value="" aria-label="<?php _e('fa fa-eyeglass', 'gcc-wp-2018')?>"><span class="fa fa-search"></span></button>
      </div>
    </div>
</div>
</div>

<div class="row expanded">

<div class="columns medium-6">

<label for="programpathway">Find programs by pathway</label>
<select name="programpathway" id="programpathway" onchange="submit();">
<option value="" <?php echo ($_GET['programpathway'] == '') ? ' selected="selected"' : ''; ?>>Show all</option>
<?php 
    $categories = get_categories('taxonomy=pathway_names&post_type=gcc_programs'); 
    foreach ($categories as $category) : 
    echo '<option value="'.$category->name.'"';
    echo ($_GET['programpathway'] == ''.$category->name.'') ? ' selected="selected"' : '';
    echo '>'.$category->name.'</option>';
    endforeach; 
?>
</select>

</div>

<div class="columns medium-6">

<label for="programdegree">Find programs by degree</label>
<select name="programdegree" id="programdegree" onchange="submit();">
<option value="" <?php echo ($_GET['programdegree'] == '') ? ' selected="selected"' : ''; ?>>Show all</option>
<?php 
    $categories = get_categories('taxonomy=program_degree&post_type=gcc_programs'); 
    foreach ($categories as $category) : 
    echo '<option value="'.$category->name.'"';
    echo ($_GET['programdegree'] == ''.$category->name.'') ? ' selected="selected"' : '';
    echo '>'.$category->name.'</option>';
    endforeach; 
?>
</select>

</div>
</div>

</form>