
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
 /* box-sizing: border-box;*/
}

body {
  background-color: #f1f1f1;
  padding:0 px;
  font-family: Arial;
}

/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}



.lens {
  
  width: 40%;
}



.row {
  margin: 20px;
}

/* Add padding BETWEEN each column */


/* Create four equal columns that floats next to each other */
.column {
  width: 70px;
}

img
{
  width: 40px;
}

td{
  margin: 20px;
  padding: 20px;
  width:128px;
  height: 128px;
}

/* Content */
.content {
  background-color: white;
  width: 100%;
  height: 300px;
  margin: 40px;
  padding: 30px;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900px) {
  .column {
    width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}
</style>
</head>
<body>

<!-- MAIN (Center website) -->
<div class="main">

<h1>photogear</h1>
<hr>

<h2>welcome</h2>


<!-- Portfolio Gallery Grid -->
<table>
  <!--<tr>
    <td>-->
      
        <div class="row">
          <div class="column">
            <div class="content">
              <img src="canon_18_135mm.jpg" alt="135" style="width:100%">

              <h3>My Work</h3>
              <p>enter text</p>
            </div>
          </div>
        </div>
      
 <!-- </td>
  <td>-->
      <div class="column">
    <div class="content">
    <img src="canon-24-105-ii.jpg" alt="canon" style="width:100%">
      <h3>My Work</h3>
      <p>enter text</p>
    </div>
  </div>
<!--</td>
  <td>-->
  
  <div class="column">
    <div class="content">
    <img src="canon_1500d_18-55mm.jpg" alt="canon_1500d_18-55mm" style="width:100%">
      <h3>My Work</h3>
      <p>enter text</p>
    </div>
  
  </div>
<!--</td>
<td>-->
  
  <div class="column">
    <div class="content">
    <img src="canon_eos_6d_mark_ii_24_105lens.jpg" alt="canon_eos_6d_mark_ii_24_105lens" style="width:100%">
      <h3>My Work</h3>
      <p>enter text</p>
    </div>
  </div>
<!--</td>
</tr>-->
</table>


 
 
  



  

  <div class="row">
  <div class="column">
    <div class="content">
    <img src="EF-600mm-F4L-IS-II-USM.jpeg" alt="canon" style="width:100%">
      <h3>My Work</h3>
      <p>enter text</p>
    </div>
  </div>


<!-- END GRID -->
</div>



<!-- END MAIN -->
</div>

</body>
</html>
