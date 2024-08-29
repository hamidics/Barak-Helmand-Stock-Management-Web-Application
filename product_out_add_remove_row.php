<?php
		/*
		
		This is for adding table rows for adding more  than one products in First Tab (New Factor)
		*/
		//--------------------------
		
		$query="Select * from products where category_id='2' || category_id='3'";
		$result=mysql_query($query);
		$v="";		
		$q="<select id='";
		$v="' style='width:220px;'  name='productname[]'   class='validate[required]' ><option value='' selected >انتخاب نوع جنس</option>";
		
		while ($row=mysql_fetch_array($result)){
		$w.= "<option value=".$row['id'].">".$row['name']."($row[unit])</option>";
		
		}
		
		$v=$v.$w;
		//--------------------------
		
		echo "<script language=\"javascript\">
		<!--
		var a=2;
		
    	function AddNew() {
	
		 producttypeid='productname'+a;
		amountid=producttypeid+'a';
		divid=producttypeid+'f';
		totalid='total'+a;
        var appendTxt = \"<tr><td align='center'>\"+a+\"</td><td    align='center'>\"+\"$q\"+producttypeid+\"$v\"+\"</select></td><td id=\"+divid+\" align='center'><input type=text  size=13 id=\"+amountid+\" name='amount[]'  class='validate[required,custom[integer]],amount' /><input type='hidden' id='numoffields' value=\"+a+\" /></td><td><input type='text' name='details[]'/></td></tr>\";
        $(\"#tbl tr:last\").after(appendTxt);
        $(\"#tbl tr:last\").hide().fadeIn('slow');
	
      a+=1;  
	
    }

	
	// -->
	</script>";
	
	
	//Adding rows for production of cyclets
			/*
		
		This is for adding table rows for adding more  than one products in First Tab (New Factor)
		*/
		//--------------------------
		/*
		
		This is for adding table rows for adding more  than one products in First Tab (New Factor)
		*/
		//--------------------------
		
		
		
		echo "<script language=\"javascript\">
		<!--
		var b=2;
		
    	function AddNew2() {
	
		engineid='enginenum'+b;
		enginecheckid=engineid+'e';
		divid=engineid+'d';
        var appendTxt = \"<tr><td align='center'>\"+b+\"</td><td    align='center'><input type=text  size=25 id=\"+engineid+\" name='engine[]' onkeyup='checkengine(this.value, this.id);' class='validate[required,custom[integer],equals[\"+enginecheckid+\"]]' /></td><td  id=\"+divid+\" style='color:blue;' align='center' colspan='2'>  موجود نیست!</td><td><input type='text' name='mdetails[]'/></td></tr>\";
        $(\"#tbl1 tr:last\").after(appendTxt);
        $(\"#tbl1 tr:last\").hide().fadeIn('slow');
	
      b+=1;  
	
    }

	
	// -->
	</script>";

		
	/*
		
		This is for adding table rows for adding more  than one products in third Tab (New Factor)
		*/
		//--------------------------
		
		$query="Select * from products where category_id='4'";
		$result=mysql_query($query);
		$v="";
		$w="";		
		$q="<select id='";
		$v="' style='width:220px;'  name='productnamec[]'  onchange='getProductNames(this.value,this.id)' class='validate[required]' ><option value='' selected >انتخاب نوع جنس</option>";
		
		while ($row=mysql_fetch_array($result)){
		$w.= "<option value=".$row['id'].">".$row['name']."($row[unit])</option>";
		
		}
		
		$v=$v.$w;
		//--------------------------
		
		echo "<script language=\"javascript\">
		<!--
		var d=2;
		
    	function AddNew3() {
	
		 producttypeid='productnamec'+d;
		amountid='amountc'+d;
		priceid='pricec'+d;
		totalid='total'+d;
        var appendTxt = \"<tr><td align='center'>\"+d+\"</td><td align='center'>\"+\"$q\"+producttypeid+\"$v\"+\"</select></td><td align='center'><input type=text  size=13 id=\"+amountid+\" name='amountc[]' onkeyup='calctotal();' class='validate[required,custom[integer]],amount' /></td><td><input type='text' name='mcdetails[]'/></td></tr>\";
        $(\"#tblcc tr:last\").after(appendTxt);
        $(\"#tblcc tr:last\").hide().fadeIn('slow');
	
      d+=1;  
	
    }

	
	// -->
	</script>";
	
		?>
		<script language="javascript">
				function removeRow()
     		{
     	     // grab the element again!
     	     var tbl = document.getElementById('tbl');
     	     // grab the length!
     	     var lastRow = tbl.rows.length;
      	    // delete the last row if there is more than one row!
      	    if (lastRow > 2){ tbl.deleteRow(lastRow - 1);
				a--;	}		

    	 }
		function removeRow2()
     		{
     	     // grab the element again!
     	     var tbl = document.getElementById('tbl1');
     	     // grab the length!
     	     var lastRow = tbl.rows.length;
      	    // delete the last row if there is more than one row!
      	    if (lastRow > 2){ tbl.deleteRow(lastRow - 1);
				b--;	}		

    	 }
		 function removeRow3()
     		{
     	     // grab the element again!
     	     var tbl = document.getElementById('tblcc');
     	     // grab the length!
     	     var lastRow = tbl.rows.length;
      	    // delete the last row if there is more than one row!
      	    if (lastRow > 2){ tbl.deleteRow(lastRow - 1);
				d--;	}		

    	 }
		 </script>