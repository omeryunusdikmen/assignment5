<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

.team-header-section{
  padding: 30px;
  text-align: center;
}
.team-section {
  display: flex; 
  flex-direction: row
}

.omer-section {
  padding: 20px;
  text-align: center;
  background-color: #FFFFFF;
  color: black;
}

.ozan-section {
  padding: 20px;
  text-align: center;
  background-color: #FFFFFF;
  color: black;
}

.baha-section {
  padding: 20px;
  text-align: center;
  background-color: #FFFFFF;
  color: black;
}

.team-section{
  justify-content: space-evenly;
  padding: 20px;
  text-align: center;
  background-color: #FFFFFF;
  color: black;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="team-header-section">
  <h1>OUR TEAM</h1>
</div>

<div class="team-section">
<div class="omer-section">
  <h1>Ömer Yunus Dikmen</h1>
  <p>116207081</p>
</div>

<div class="ozan-section">
  <h1>Muhammet Ozan Kılınçer</h1>
  <p>116207047</p>
</div>

<div class="baha-section">
  <h1>Baha Burak Çevik</h1>
  <p>116207052</p>
</div>

</div>

<label for="cars">Select top 100 restaurant from customer</label>
<select name="cars" id="cars">
  <optgroup label="Turkish Cookery ">
    <option value="Paşa Döner">Paşa Döner</option>
    <option value="Nusret">Nusret</option>
  </optgroup>
  <optgroup label="English Cookery">
    <option value="Celtic Irish Pub">Celtic Irish Pub</option>
    <option value="All Good Cihangir">All Good Cihangir</option>
  </optgroup>
</select>

</body>
</html>
