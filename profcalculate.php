<!DOCTYPE html>
<html>
<style type="text/css">
.a {
	color: #FFF;
}
.b {
	color: #FFF;
}
.b {
	color: #FFF;
}
.b {
	color: #FFF;
}
.c {
	color: #FFF;
}

.e {
	color: #D6D6D6;
}

}
.e {
	color: #FFF;
}
</style>


<center><body>
<body bgcolor="#222">
  <table width="100%" border="0">
    <tr>
    <td width="50%"><p align="center" class="a"><img src="https://cdn.dribbble.com/users/470545/screenshots/3471475/calculater.gif" width="137" height="117" /></p>
      <p align="center" class="a">Prof .Calculate</p>
   <p align="center" class="e"> OUTPUT            :
          <?php
if(isset($_GET['result']))
    echo $_GET['result'];
?></p>
</td>



    <td width="50%" align="left" >
    
    <form method="post" action="pros_insert.php">
      
	  <style>
	    
	  .a {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 36px;
}
	  input[type=number], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

	  input[type=text]{
    width: 100%;
    padding: 50px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
	  
input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: black;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	align:right;
}

input[type=submit]:hover {
    background-color: lightblue;
}
    </style>
	
	
	  <table>
	  <tr></tr>
      <tr></tr>
      <tr></tr>
      <tr>
        <td align="left" nowrap="nowrap"  class="b"> Nombor 1        :</td>
        <td width="100%"><input type="number" name="nom1" size="20" /></td>
      </tr>
      <tr>
        <td align="left" nowrap="nowrap" class="b"> Nombor 2		:</td>
        <td width="100%"><input type="number" name="nom2" size="20" /></td>
      </tr>
      <tr>
        <td align="left" nowrap="nowrap" class="b"> Pilih operasi   :</td>
        <td width="100%"><select name="operation">
          <option value="">Sila Pilih</option>
          <option value="+">+</option>
          <option value="-">-</option>
          <option value="*">x</option>
          <option value="/">/</option>
          <option value="%">%</option>
        </select></td>
      </tr>
      <tr>
        <td align="left" nowrap="nowrap" class="c"> Catatan          :</td>
        <td width="100%"><input type="text" name="catatan" /></td>
      </tr>
   
      </table>
	  <table width="100%" border="0">
        <tr>
          <td><center><input type="submit" name="submit"></center></td>
        </tr>
      </table>
     

    </form>

</body>
</center>
</html>