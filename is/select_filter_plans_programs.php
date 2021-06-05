<?php require_once('../Connections/connection.php'); ?>
<?php require_once('config.php'); ?>
<?php require_once('head.php'); ?>
<?php require_once('menu.php'); ?>

<!-- Right side column. Contains the navbar and content of the page -->
            <div>

<div class="navbar-fixed-top body-title">    
	<h3 class="col-lg-10">
                        Filter Data
                        <small><?php echo $clientalias ;?></small>
                    </h3>
</div>Plans and Programs<a href="#" rel="facebox">Select Filter</a></li>
      </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                      <div class="col-md-6">
                            <!-- general form elements -->
                        <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Select Filter</h3>
                                </div><!-- /.box-header -->

<p><form action="print_pap_year_province_district.php" method="get" target="_blank">
                                
                                <div class="form-group">
                                
<label>Year:</label>
<select name="tb1_colunm3" >
<option value="2011">2011</option>
<option value="2012">2012</option>
<option value="2013">2013</option>
<option value="2014">2014</option>
<option value="2015">2015</option>
<option value="2016">2016</option>
<option value="2017">2017</option>
<option value="2018">2018</option>
<option value="2019">2019</option>
<option value="2020">2020</option>
</select>

<label>Province:</label>
<select name="tb1_colunm11">
      	<option value="Cavite">Cavite</option>
        <option value="Laguna">Laguna</option>
        <option value="Batangas">Batangas</option>
        <option value="Rizal">Rizal</option>
        <option value="Quezon">Quezon</option>
</select>

<label>Remarks/District:</label>
<input type="text" name="tb1_colunm17" value="" size="10" />
<br />

<label>Municipality:</label>
<input type="text" name="tb1_colunm23" value="" size="10" />

<label>Indicator:</label>
<input type="text" name="tb1_colunm12" value="" size="10" />

<label>Budget:</label>
<input type="text" name="tb1_colunm10" value="0" size="15" />

<input type="submit" value="Submit" />

</div>
                                <div class="form-group">
                                            <label>&nbsp;</label>
                                            </div>
                            </form>
 </div><!-- /.box -->

                          <!-- Form Element sizes --><!-- /.box --><!-- /.box -->

                          <!-- Input addon --><!-- /.box -->

                        </div><!--/.col (left) -->
                        <!-- right column -->
                        <div class="col-md-6">
                            <!-- general form elements disabled --><!-- /.box -->
                        </div><!--/.col (right) -->
                    </div>   <!-- /.row -->

<script type="text/javascript">
    function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }
</script>                             
<?php require_once('footer.php'); ?>
<?php
mysql_free_result($rsuser);
?>
