<?php
require_once("../library/db.php");
?>
<table width="80%" id="tbl1" style="border:1; align:right">
				<tr style="background:grey; height:25px" >
				<th>شماره</th>
				<th>موتور</th>
				<th>نمبر انجین</th>
				<th>نمبر شاسی</th>
				<th>توضیح</th>
				</tr>
				<tr>
				<td align="center">1</td>
				
				<td align="center" id="producttype1p">
				<select name="productname1[]" id="productname1" style=" width:220px" class="validate[required]">
				<option value="" >انتخاب نام جنس</option>
				<?php
					$type="";
					$condition="";
					if($_GET['billtype']=="cyclet"){
						$type=1;
						$condition="and id in (Select buy_main_id  from product_dependants where buy_main_id=products.id)";
					}else if($_GET['billtype']=="cycletmontazh"){
						$type=2;
						$condition="and id in (Select buy_main_id  from product_dependants where buy_main_id=products.id)";

					}else if($_GET['billtype']=="cycletback"){
						$type=3;
					}
					$sql="select * from products where category_id='1' and type='$type' $condition ";
					$res=mysql_query($sql) or die (mysql_error());
					$p=0;
					$amounts=array();
					$products=array();
					while($rowproducts=mysql_fetch_array($res)){
					$typename="";
						if($rowproducts['type']==1){
							$typename="مونتاژ";
						}else if($rowproducts['type']==2){
							$typename="نیمه مونتاژ";
						}else if($rowproducts['type']==3){
							$typename="تکمیل";
						}
						echo "<option value='$rowproducts[id]'>$rowproducts[code] $rowproducts[code_cu] - $rowproducts[name] ($typename)</option>";
				
					
					}
				?>
				</select>
				
				</td>
				<td align="center">
				<input type="text" id="engine1" name="engine[]" size="30"  onkeyup="checkengieshasy(this.value, this.id)"  class="validate[checkDuplicate[engine1db],required,custom[integer]]"/>
				<span id="engine1check"></span>
				</td>
				<td align="center">
				<input type="text" id="shasy1" name="shasy[]" size="30"   class="validate[required,custom[integer]]"/>
				</td>
				<td>
				<input type="text" id="description1" name="description1[]" size="40" />
				</td>
				</tr>
		
				</table>
				</br>
				<span align="right" style=" margin-right:380px">
				
				<input type="button" id="button3" style="background-color:white; border:0; background-image:url(img/add.gif); width:21px;height:21px " onclick="AddNew2('<?php echo $type;?>'),jQuery('#myform').validationEngine('hide')" class="add-row"/>
				
				<input type="button" id="button4" style="background-color:white; border:0; background-image:url(img/remove.gif); width:21px;height:21px  " onclick="removeRow2(),jQuery('#myform').validationEngine('hide')" class="remove-row"/></br>
				</span>
				
				</br>
				<input type="submit" name="insertcyclets" id="insertcyclets" style="border-top-left-radius: 10px ;border-top-right-radius: 10px ; border-bottom-left-radius: 10px ;border-bottom-right-radius: 10px ; cursor:pointer;color:white;   background-color:#5e6062; border:0;height:30px; width:130px;margin-right:350px"  onmouseover="this.style.background='#252527'" onmouseout="this.style.background='#5e6062'" value="تایید" class="submit"/>