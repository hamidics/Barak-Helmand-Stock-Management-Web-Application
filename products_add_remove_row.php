<?php
//for porze
	$selectporze1="<select name='punit[]' id='";
	//For motors
	$selectmotor1="<select name='munit[]' id='";
	$selectporze2="' class='validate[required]'> <option value=''>انتخاب واحد</option>";

					
						$sql="select * from units ";
						$rsunit=mysql_query($sql) or die (mysql_error());
						while($rwunit=mysql_fetch_array($rsunit)){
							$selectporze2.="<option value='$rwunit[name]'>$rwunit[name]</option>";
						}
					
					$selectporze2.="</select>";
					//echo $selectporze1.$selectporze2;
					
		echo "<script language=\"javascript\">
		<!--
		var b=2;
		var a=1;
		//Adding Cyclet Rows
    	function AddNew1(codenum) {
		
		pname='pname'+b;
		cmethod='punit'+b;
		ctype='cyclettype'+b;
        var appendTxt = \"<tr ><td align='center'>\"+b+\"</td><td align='center' ><input type='checkbox' checked value='1' name='acodec[]'/></td><td><input type='text' name='codec[]' size='10'/></td><td align='center'><input type=text size='30'  id=\"+pname+\" name='pname[]' onkeyup='calctotal();' class='validate[required]' /></td><td align='center'><select name='cyclettype[]' id=\"+ctype+\" class='validate[required]'><option value=''>انتخاب نوع موتور</option><option value='1' >مونتاژ</option><option value='2' >نیمه مونتاژ</option>	<option value='3' >تکمیل</option></select></td><td align='center'><select name='countmethod[]' id=\"+cmethod+\" class='validate[required]'><option value=''>انتخاب واحد شمارش</option><option value='عراده' selected>عراده</option></select></td></tr>\";
        $(\"#ctable tr:last\").after(appendTxt);
        $(\"#ctable tr:last\").hide().fadeIn('slow');
	
      a+=1;  
	  b+=1;
	
    }
	var d=2;
	var c=1;
	//Adding porze rows
	function AddNew2(codenum) {
		
		cmethod='cmethod'+d;
		pname='pzname'+d;
		ptype='porzetype'+d;
        var appendTxt = \"<tr><td align='center'>\"+d+\"</td><td align='center' ><input type='checkbox' checked value='1' name='acodep[]'/></td><td><input type='text' name='codep[]' size='10'/></td><td align='center'><input type=text size='30'  id=\"+pname+\" name='pzname[]'  class='validate[required]' /></td><td align='center'><select name='porzetype[]' id=\"+ptype+\" class='validate[required]'><option value=''>انتخاب نوع پرزه</option><option value='2' >پرزه اصلی</option><option value='3' >پرزه فرعی</option></select></td><td align='center'>\"+\"$selectporze1\"+cmethod+\"$selectporze2\"+\"</td></tr>\";
        $(\"#ptable tr:last\").after(appendTxt);
        $(\"#ptable tr:last\").hide().fadeIn('slow');
	
      c+=1;  
	  d+=1;
	
    }
	
	var e=2;
	var f=1;
	//Adding porze rows
	function AddNew3(codenum) {
		
		cmethod='cmethod'+e;
		pname='motorname'+e;
		ptype='porzetype'+e;
        var appendTxt = \"<tr><td align='center'>\"+e+\"</td><td align='center' ><input type='checkbox' value='1' checked name='acodem[]'/></td><td><input type='text' name='codem[]' size='10'/></td><td align='center'><input type=text size='30'  id=\"+pname+\" name='motorname[]'  class='validate[required]' /></td><td align='center'>\"+\"$selectmotor1\"+cmethod+\"$selectporze2\"+\"</td></tr>\";
        $(\"#cmtable tr:last\").after(appendTxt);
        $(\"#cmtable tr:last\").hide().fadeIn('slow');
	
      f+=1;  
	  e+=1;
	
    }
	
	// -->
	</script>";
	
	?>
		<script language="javascript">
				function removeRow1()
     		{
     	     // grab the element again!
     	     var tbl = document.getElementById('ctable');
     	     // grab the length!
     	     var lastRow = tbl.rows.length;
      	    // delete the last row if there is more than one row!
      	    if (lastRow > 2){ tbl.deleteRow(lastRow - 1);
				b--;	}		

    	 }
		function removeRow2()
     		{
     	     // grab the element again!
     	     var tbl = document.getElementById('ptable');
     	     // grab the length!
     	     var lastRow = tbl.rows.length;
      	    // delete the last row if there is more than one row!
      	    if (lastRow > 2){ tbl.deleteRow(lastRow - 1);
				d--;	}		

    	 }
		 
		 function removeRow3()
     		{
     	     // grab the element again!
     	     var tbl = document.getElementById('cmtable');
     	     // grab the length!
     	     var lastRow = tbl.rows.length;
      	    // delete the last row if there is more than one row!
      	    if (lastRow > 2){ tbl.deleteRow(lastRow - 1);
				e--;	}		

    	 }
		 </script>