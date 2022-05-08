<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="download.png" >
        <title>Saisir Absence</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <div class="container">
    <img src="download.png" >
    <section>
    <div class="container">
    <form>
      <table class=>
        <tr><td>Date de début (j/m/a) : </td> <td>
        <input type="date" name="debut"  size="10" value="01/09/2021" class="datepicker"/>
        </td></tr><tr><td>Date de fin : </td><td>
        <input type="date" name="fin" size="10" value="12/03/2022" class="datepicker"/><br>
          </td></tr></table>  <br>
    <div class="table-responsive"> 
      <td>choisir une classe : </td>
        <div class="form-group">
         <select id="classe" name="classe"  class="custom-select custom-select-sm custom-select-lg">
              <option value="1-INFOA">1-Inormatique A</option>
              <option value="1-INFOB">1-Inormatique B</option>
              <option value="1-INFOC">1-Inormatique C</option>
              <option value="1-INFOD">1-Inormatique D</option>
              <option value="1-INFOE">1-Inormatique E</option>
          </select>
          </div>
    <div style="overflow-x: auto;">
      <table class="table">
        <tr>
          <th>Nom </th>
          <th>Prénom</th>
          <th>Justifiées</th>
          <th> Non Justifiées</th>
          <th>Total</th>
         
        </tr>
        <tr>
          <td>Jill</td>
          <td>Smith</td>
          <td>50</td>
          <td>50</td>
          <td> 12</td>
             </tr>
             <tr>
              <td>Jill</td>
              <td>Smith</td>
              <td>50</td>
              <td>50</td>
              <td> 12</td>
                 </tr>
                 <tr>
                  <td>Jill</td>
                  <td>Smith</td>
                  <td>50</td>
                  <td>50</td>
                  <td> 12</td>
                     </tr>
                     <tr>
                      <td>Jill</td>
                      <td>Smith</td>
                      <td>50</td>
                      <td>50</td>
                      <td> 12</td>
                         </tr>
                         <tr>
                          <td>Jill</td>
                          <td>Smith</td>
                          <td>50</td>
                          <td>50</td>
                          <td> 12</td>
                             </tr>
        <tr>
          <td>Eve</td>
          <td>Jackson</td>
          <td>94</td>
          <td>94</td>
          <td>14</td>
          </tr>
        <tr>
          <td>Adam</td>
          <td>Johnson</td>
          <td>67</td>
          <td>67</td>
          <td>14</td>
          </tr>
          <tr>
            <td>oumayma</td>
            <td>limeme</td>
            <td>50</td>
            <td>50</td>
            <td>45</td>
           
            
          </tr>
      </table>
    </div>
    </div>
    </form>
    </div>
    </section>
    <!-- Filter: https://css-tricks.com/gooey-effect/ -->
            <svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
                <defs>
                    <filter id="goo"><feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />    
                        <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                        <feComposite in="SourceGraphic" in2="goo" operator="atop"/>
                    </filter>
                </defs>
            </svg>
            
            
        </div>
        </form>
        </form>
            </div>
            <ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>  
            </div>      
</body>
</html>