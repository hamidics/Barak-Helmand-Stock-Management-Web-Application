<?php
		/*
		
		This is for adding table rows for adding more  than one products in First Tab (New Factor)
		*/
		//--------------------------
		
		$query="Select * from products where category_id='2' || category_id='3'";
		$result=mysql_query($query);
		$v="";		
		$q="<select id='";
		$v="' style='width:220px;'  name='productname[]'  onchange='getProductNames(this.value,this.id)' class='validate[required]' ><option value='' selected >انتخاب نوع جنس</option>";
		
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
		productcolid=producttypeid+'p';
		productid=productcolid+'t';
		amountid='amount'+a;
		priceid='price'+a;
		totalid='total'+a;
        var appendTxt = \"<tr><td align='center'>\"+a+\"</td><td align='center'>\"+\"$q\"+producttypeid+\"$v\"+\"</select></td><td align='center'><input type=text  size=13 id=\"+amountid+\" name='amount[]' onkeyup='calctotal();' class='validate[required,custom[integer]],amount' /></td><td><input type='text' name='description[]' size='60'/></td></tr>\";
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
		$w="";
		
		$v="";		
		$q="<select id='";
		$v="' style='width:220px;'  name='productname1[]'  onchange='getProductNames(this.value,this.id)' class='validate[required]' ><option value='' selected >انتخاب نوع جنس</option>";
		//Bill Type 1
					$sql="select * from products where category_id='1' and type='1'";
					$res=mysql_query($sql) or die (mysql_error());
					$p=0;
					while($rowproducts=mysql_fetch_array($res)){
					$typename="";
						if($rowproducts['type']==1){
							$typename="مونتاژ";
						}else if($rowproducts['type']==2){
							$typename="نیمه مونتاژ";
						}else if($rowproducts['type']==3){
							$typename="تکمیل";
						}
					$w.="<option value='$rowproducts[id]' >$rowproducts[code] $rowproducts[code_cu] - $rowproducts[name] ($typename) </option>";
					}
		$v=$v.$w;
		//--------------------------	
		
		//Bill Type 2
		$w="";
		$h="";
		$h="' style='width:220px;'  name='productname1[]'  onchange='getProductNames(this.value,this.id)' class='validate[required]' ><option value='' selected >انتخاب نوع جنس</option>";
					$sql="select * from products where category_id='1' and type='2'";
					$res=mysql_query($sql) or die (mysql_error());
					$p=0;
					while($rowproducts=mysql_fetch_array($res)){
					$typename="";
						if($rowproducts['type']==1){
							$typename="مونتاژ";
						}else if($rowproducts['type']==2){
							$typename="نیمه مونتاژ";
						}else if($rowproducts['type']==3){
							$typename="تکمیل";
						}
					$w.="<option value='$rowproducts[id]' >$rowproducts[code] $rowproducts[code_cu] - $rowproducts[name] ($typename) </option>";
					}
				
			
		
		$h=$h.$w;
		//--------------------------
		
		//Bill Type 3
		$w="";
		
		$t="' style='width:220px;'  name='productname1[]'  onchange='getProductNames(this.value,this.id)' class='validate[required]' ><option value='' selected >انتخاب نوع جنس</option>";

					$sql="select * from products where category_id='1' and type='3'";
					$res=mysql_query($sql) or die (mysql_error());
					$p=0;
					while($rowproducts=mysql_fetch_array($res)){
					$typename="";
						if($rowproducts['type']==1){
							$typename="مونتاژ";
						}else if($rowproducts['type']==2){
							$typename="نیمه مونتاژ";
						}else if($rowproducts['type']==3){
							$typename="تکمیل";
						}
					$w.="<option value='$rowproducts[id]' >$rowproducts[code] $rowproducts[code_cu] - $rowproducts[name] ($typename) </option>";
					}
				
			
		
		$t=$t.$w;
		//--------------------------
		
		
		echo "<script language=\"javascript\">
		<!--
		var b=2;
		
    	function AddNew2(myvar) {
		
		
		 producttypeid='productname'+b;
		productcolid=producttypeid+'p';
		productid=productcolid+'t';
		shasyid='shasy'+b;
		engineid='engine'+b;
		checkenginediv=engineid+'check';
		engineindb=engineid+'db';
		if(myvar=='1'){
        var appendTxt = \"<tr><td align='center'>\"+b+\"</td><td align='center'>\"+\"$q\"+producttypeid+\"$v\"+\"</select></td><td align='center'><input type=text  size=30 id=\"+engineid+\" name='engine[]'  class='validate[checkDuplicate[\"+engineindb+\"],required,custom[integer]],amount' onkeyup='checkengieshasy(this.value, this.id)' /><span id=\"+checkenginediv+\"></span></td><td align='center'><input type=text  size=30 id=\"+shasyid+\" name='shasy[]'  class='validate[required,custom[integer]],amount' /></td><td><input type='text' name='description1[]' size='40'/></td></tr>\";
        }else if(myvar=='2'){
        var appendTxt = \"<tr><td align='center'>\"+b+\"</td><td align='center'>\"+\"$q\"+producttypeid+\"$h\"+\"</select></td><td align='center'><input type=text  size=30 id=\"+engineid+\" name='engine[]'  class='validate[checkDuplicate[\"+engineindb+\"],required,custom[integer]],amount' onkeyup='checkengieshasy(this.value, this.id)' /><span id=\"+checkenginediv+\"></span></td><td align='center'><input type=text  size=30 id=\"+shasyid+\" name='shasy[]'  class='validate[required,custom[integer]],amount' /></td><td><input type='text' name='description1[]' size='40'/></td></tr>\";
		}else if(myvar=='3'){
        var appendTxt = \"<tr><td align='center'>\"+b+\"</td><td align='center'>\"+\"$q\"+producttypeid+\"$t\"+\"</select></td><td align='center'><input type=text  size=30 id=\"+engineid+\" name='engine[]'  class='validate[checkDuplicate[\"+engineindb+\"],required,custom[integer]],amount' onkeyup='checkengieshasy(this.value, this.id)' /><span id=\"+checkenginediv+\"></span></td><td align='center'><input type=text  size=30 id=\"+shasyid+\" name='shasy[]'  class='validate[required,custom[integer]],amount' /></td><td><input type='text' name='description1[]' size='40'/></td></tr>\";
		}
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
        var appendTxt = \"<tr><td align='center'>\"+d+\"</td><td align='center'>\"+\"$q\"+producttypeid+\"$v\"+\"</select></td><td align='center'><input type=text  size=13 id=\"+amountid+\" name='amountc[]' onkeyup='calctotal();' class='validate[required,custom[integer]],amount' /></td><td><input type='text' name='descriptionc[]' size='60'/></td></tr>\";
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