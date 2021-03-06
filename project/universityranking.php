<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>
</head>

<div style="width: 100%; ">
<span style="font-size:30px;float: right;cursor:pointer" onclick="openNav()">&#9776; open</span>

<img src="StudyPortals-Logo.png" alt="Mountain View" style="width:300px;height:70px;">



<body>

<h1><center>UNIVERSITY RANKING</center></h1>



<style>
body {
    margin: 0;
    font-family: 'Lato', sans-serif;
}

.overlay {
    height: 0%;
    width: 100%;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0, 0.9);
    overflow-y: hidden;
    transition: 0.5s;
}

.overlay-content {
    position: relative;
    top: 25%;
    width: 100%;
    text-align: center;
    margin-top: 30px;
}

.overlay a {
    padding: 8px;
    text-decoration: none;
    font-size: 36px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
    color: #f1f1f1;
}

.overlay .closebtn {
    position: absolute;
    top: 20px;
    right: 45px;
    font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay {overflow-y: auto;}
  .overlay a {font-size: 20px}
  .overlay .closebtn {
    font-size: 40px;
    top: 15px;
    right: 35px;
  }
}
</style>
</head>
<body>

<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="http://localhost/project/homepage.php">HOME</a>
    <a href="http://localhost/project/offices.php">OFFICES</a> 
    <a href="http://localhost/project/coarseinfoxx.php">COARSE INFO</a>
    <a href="http://localhost/project/COARSEPROVSION.php">COARSE PROVISION</a>
    
  </div>
</div>




<script>
function openNav() {
    document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.height = "0%";
}
</script>














<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

<table id="myTable">
  <tr class="header">
    <th style="width:60%;">UNIVERSITY</th>
    <th style="width:40%;">RANKING</th>
    <th style="width:40%;">WORLD RANKING</th>
  </tr>
  <tr>
    <td><a href="http://www.uonbi.ac.ke/">University of Nairobi</a></td>
    <td>1</td>
    <td>775</td>
  </tr>
  <tr>
    <td><a href="http://www.egerton.ac.ke/">Egerton University</a></td>
    <td>2</td>
    <td>1727</td>
  </tr>
  
  <tr>
    <td><a href="http://www.ku.ac.ke/">Kenyatta University</a></td>
    <td>3</td>
    <td>2020</td>
  </tr>
  
  
  <tr>
    <td><a href="http://www.jkuat.ac.ke/">Jomo Kenyatta University of Agriculture and Technology</a></td>
    <td>4</td>
    <td>2851</td>
  </tr>
  
  
  <tr>
    <td><a href="http://maseno.ac.ke/index/">Maseno University</a></td>
    <td>5</td>
    <td>3544</td>
  </tr>
  
  <tr>
    <td><a href="https://www.strathmore.edu/">Strathmore University Nairobi</a></td>
    <td>6</td>
    <td>4718</td>
  </tr>
  
  <tr>
    <td><a href="http://www.cuea.edu/">Catholic University of Eastern Africa</a></td>
    <td>7</td>
    <td>5822</td>
  </tr>
  
  <tr>
    <td><a href="http://www.mmust.ac.ke/">Masinde Muliro University of Science & Technology</a></td>
    <td>8</td>
    <td>6021</td>
  </tr>
  
  <tr>
    <td><a href="http://www.kmtc.ac.ke/">Kenya Medical Training College</a></td>
    <td>9</td>
    <td>6096</td>
  </tr>
  
  <tr>
    <td><a href="http://www.seku.ac.ke/">South Eastern Kenya University</a></td>
    <td>10</td>
    <td>6561</td>
  </tr>
  
  
  <tr>
    <td><a href="http://www.kemu.ac.ke/">Kenya Methodist University</a></td>
    <td>11</td>
    <td>6561</td>
  </tr>
  
   
  <tr>
    <td><a href="http://www.usiu.ac.ke/">United States International University</a></td>
    <td>12</td>
    <td>7031</td>
  </tr>
  
   
  <tr>
    <td><a href="http://www.mku.ac.ke/">Mount Kenya University</a></td>
    <td>13</td>
    <td>7324</td>
  </tr>
  
   
  <tr>
    <td><a href="https://www.pu.ac.ke/">Pwani University</a></td>
    <td>14</td>
    <td>8170</td>
  </tr>
  
   
  <tr>
    <td><a href="http://tukenya.ac.ke/">Technical University of Kenya</a></td>
    <td>15</td>
    <td>8196</td>
  </tr>
  
   
  <tr>
    <td><a href="http://michukitech.ac.ke/">Michuki Technical Institute Muranga</a></td>
    <td>16</td>
    <td>8492</td>
  </tr>
  
   
  <tr>
    <td><a href="http://www.avu.org/avuweb/en/">African Virtual University</a></td>
    <td>17</td>
    <td>8605</td>
  </tr>
  
   
  <tr>
    <td><a href="http://zetech.ac.ke/">Zetech University</a></td>
    <td>18</td>
    <td>9329</td>
  </tr>
  
   
  <tr>
    <td><a href="http://tum.ac.ke/">Technical University of Mombasa (Mombasa Polytechnic University College)</a></td>
    <td>19</td>
    <td>9783</td>
  </tr>
  
   
  <tr>
    <td><a href="http://www.mmarau.ac.ke/">Masai Mara University</a></td>
    <td>20</td>
    <td>9928</td>
  </tr>
  
   
  <tr>
    <td><a href="http://www.daystar.ac.ke/">Daystar University</a></td>
    <td>21</td>
    <td>10156</td>
  </tr>
  
   
  <tr>
    <td><a href="http://ueab.ac.ke/index/">University of Eastern Africa Baraton</a></td>
    <td>22</td>
    <td>10157</td>
  </tr>
  
   
  <tr>
    <td><a href="http://www.spu.ac.ke/">Saint Paul’s University Limuru</a></td>
    <td>23</td>
    <td>10488</td>
  </tr>
  
   
  <tr>
    <td><a href="https://www.karu.ac.ke/">Karatina University</a></td>
    <td>24</td>
    <td>10776</td>
  </tr>
  
  <tr>
    <td><a href="http://www.kabarak.ac.ke/">Kabarak University</a></td>
    <td>25</td>
    <td>10827</td>
  </tr>
  
  <tr>
    <td><a href="http://www.uoeld.ac.ke/">Eldoret University</a></td>
    <td>26</td>
    <td>11436</td>
  </tr>
  
  <tr>
    <td><a href="http://www.kisiiuniversity.ac.ke/">Kisii University</a></td>
    <td>27</td>
    <td>11995</td>
  </tr>
  
  <tr>
    <td><a href="http://dkut.ac.ke/">Dedan Kimathi University of Technology (Kimathi University College of Technology)</a></td>
    <td>28</td>
    <td>12246</td>
  </tr>
  
  <tr>
    <td><a href="http://www.kca.ac.ke/">KCA University</a></td>
    <td>29</td>
    <td>12564</td>
  </tr>
  
  <tr>
    <td><a href="http://www.pacuniversity.ac.ke/">Pan Africa Christian University</a></td>
    <td>30</td>
    <td>12644</td>
  </tr>
  
  <tr>
    <td><a href="http://nibs.ac.ke/">Nairobi Institute of Business Studies</a></td>
    <td>31</td>
    <td>12657</td>
  </tr>
  
  <tr>
    <td><a href="http://www.ksg.ac.ke/">Kenya School of Government</a></td>
    <td>32</td>
    <td>12923</td>
  </tr>
  
  
  <tr>
    <td><a href="https://www.must.ac.ke/">Meru University of Science & Technology</a></td>
    <td>33</td>
    <td>13283</td>
  </tr>
  <tr>
    <td><a href="http://www.kefri.org/">Kenya Forestry Research Institute</a></td>
    <td>34</td>
    <td>13303</td>
  </tr>
  <tr>
    <td><a href="http://www.rti.ac.ke/">Railway Training Institute Nairobi</a></td>
    <td>35</td>
    <td>13484</td>
  </tr>
  <tr>
    <td><a href="http://www.embuni.ac.ke/">Embu University College</a></td>
    <td>36</td>
    <td>13561</td>
  </tr>
  <tr>
    <td><a href="http://www.anu.ac.ke/">Africa Nazarene University</a></td>
    <td>37</td>
    <td>13770</td>
  </tr>
  <tr>
    <td><a href="http://www.isk.ac.ke/">International School of Kenya</a></td>
    <td>38</td>
    <td>13851</td>
  </tr>
  <tr>
    <td><a href="http://amaniinstitute.org/">Amani College</a></td>
    <td>39</td>
    <td>14132</td>
  </tr>
  <tr>
    <td><a href="http://tangaza.org/">Tangaza University College</a></td>
    <td>40</td>
    <td>14433</td>
  </tr>
  <tr>
    <td><a href="http://ruc.ac.ke/">Rongo University College</a></td>
    <td>41</td>
    <td>14988</td>
  </tr>
  <tr>
    <td><a href="http://kabianga.ac.ke/main/">University of Kabianga</a></td>
    <td>42</td>
    <td>15109</td>
  </tr>
  <tr>
    <td><a href="https://www.mmu.ac.ke/">Multimedia University of Kenya</a></td>
    <td>43</td>
    <td>15123</td>
  </tr>
  <tr>
    <td><a href="http://www.kim.ac.ke/">Kenia Institute of Management</a></td>
    <td>44</td>
    <td>15255</td>
  </tr>
  <tr>
    <td><a href="https://www.aua.ac.ke/">Adventist University of Africa</a></td>
    <td>45</td>
    <td>15276</td>
  </tr>
  <tr>
    <td><a href="http://www.easa.ac.ke/">East African School of Aviation Embakasi Nairobi</a></td>
    <td>46</td>
    <td>15388</td>
  </tr>
  <tr>
    <td><a href="http://chuka.ac.ke/">Chuka University</a></td>
    <td>47</td>
    <td>15735</td>
  </tr>
  <tr>
    <td><a href="http://jooust.ac.ke/">Jaramogi Oginga Odinga University of Science & Technology (Bondo University College)</a></td>
    <td>48</td>
    <td>15904</td>
  </tr>
  <tr>
    <td><a href="http://www.laikipia.ac.ke/">Laikipia University</a></td>
    <td>49</td>
    <td>16412</td>
  </tr>
  <tr>
    <td><a href="http://www.riarauniversity.ac.ke/">Riara University</a></td>
    <td>50</td>
    <td>16469</td>
  </tr>
  <tr>
    <td><a href="http://nit.ac.ke/coming_soon/">Nairobi Institute of Technology</a></td>
    <td>51</td>
    <td>16551</td>
  </tr>
  <tr>
    <td><a href="http://www.ttu.ac.ke/">Taita Taveta University College</a></td>
    <td>52</td>
    <td>16896</td>
  </tr>
  <tr>
    <td><a href="http://www.gluk.ac.ke/">Great Lakes University of Kisumu</a></td>
    <td>53</td>
    <td>17061</td>
  </tr>
  <tr>
    <td><a href="http://www.scott.ac.ke/">Scott Christian University</a></td>
    <td>54</td>
    <td>17159</td>
  </tr>
  <tr>
    <td><a href="http://www.iu.ac.ke/">noorero University (Kenya School of Professional Studies)</a></td>
    <td>55</td>
    <td>17439</td>
  </tr>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
</table>

<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

</body>
</html>
