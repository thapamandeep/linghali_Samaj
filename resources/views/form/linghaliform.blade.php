<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        #home{
            position:relative;
            left:90%;
            bottom:10px;
        }
    </style>
</head>
<body>
    <div id="barner">
    <h1 id="heading">LANGHALI MAGAR SAMAJ</h1>
    <h4 id="smallheading">Pokhara-14,Chauthe</h4>
    </div> 
      <p id="smallheading">Join Form</p>

     <a href="{{route('openpage')}}"> <button id="home">Back to home page</button></a>
     
      <hr>
     
      <div id="formborder">
      <form action="{{route('formRegister')}}" method="post">@csrf
      
      <h2 id="fheading">First Details</h2>
       
        <div id="firstDetail">
    <label id="namelabel">FirstName:</label>
    <input id="inputbox" type="text" placeholder="enter your first name" name="firstName">
        
    @error('firstName')
    <div class="error">{{ $message }}</div>
@enderror

    <label id="namelabel">MiddleName:</label>
    <input id="inputbox" type="text" placeholder="enter your middle name" name="middleName">
        
    @error('middleName')
    <div class="error">{{ $message }}</div>
@enderror

    <label id="namelabel">LastName:</label>
    <input id="inputbox" type="text" placeholder="enter your last name" name="lastName">
        
    @error('lastName')
    <div class="error">{{ $message }}</div>
@enderror

    </div>
    <br>
    
    <h2 id="fheading">Permanent Address</h2>
    
     <div id="firstDetails">
<label id ="selectlabel">Select District:</label>
<select id="district" name="perDistrict">
      
    @error('perDistrict')
    <div class="error">{{ $message }}</div>
@enderror

  <option value="">-- Choose District --</option>
 <option value="bhojpur">Bhojpur</option>
<option value="dhankuta">Dhankuta</option>
<option value="ilam">Ilam</option>
<option value="jhapa">Jhapa</option>
<option value="kaski">Kaski</option>
<option value="khotang">Khotang</option>
<option value="morang">Morang</option>
<option value="okhaldhunga">Okhaldhunga</option>
<option value="panchthar">Panchthar</option>
<option value="sankhuwasabha">Sankhuwasabha</option>
<option value="solukhumbu">Solukhumbu</option>
<option value="sunsari">Sunsari</option>
<option value="taplejung">Taplejung</option>
<option value="terhathum">Terhathum</option>
<option value="udayapur">Udayapur</option>

<option value="bara">Bara</option>
<option value="dhanusha">Dhanusha</option>
<option value="mahottari">Mahottari</option>
<option value="parsa">Parsa</option>
<option value="rautahat">Rautahat</option>
<option value="saptari">Saptari</option>
<option value="sarlahi">Sarlahi</option>
<option value="siraha">Siraha</option>

<option value="bhaktapur">Bhaktapur</option>
<option value="chitwan">Chitwan</option>
<option value="dhading">Dhading</option>
<option value="dolakha">Dolakha</option>
<option value="kathmandu">Kathmandu</option>
<option value="kavrepalanchok">Kavrepalanchok</option>
<option value="lalitpur">Lalitpur</option>
<option value="makwanpur">Makwanpur</option>
<option value="nuwakot">Nuwakot</option>
<option value="ramechhap">Ramechhap</option>
<option value="rasuwa">Rasuwa</option>
<option value="sindhuli">Sindhuli</option>
<option value="sindhupalchok">Sindhupalchok</option>

<option value="baglung">Baglung</option>
<option value="gorkha">Gorkha</option>
<option value="lamjung">Lamjung</option>
<option value="manang">Manang</option>
<option value="mustang">Mustang</option>
<option value="myagdi">Myagdi</option>
<option value="nawalpur">Nawalpur</option>
<option value="parbat">Parbat</option>
<option value="syangja">Syangja</option>
<option value="tanahun">Tanahun</option>

<option value="arghakhanchi">Arghakhanchi</option>
<option value="banke">Banke</option>
<option value="bardiya">Bardiya</option>
<option value="dang">Dang</option>
<option value="gulmi">Gulmi</option>
<option value="kapilvastu">Kapilvastu</option>
<option value="palpa">Palpa</option>
<option value="pyuthan">Pyuthan</option>
<option value="rolpa">Rolpa</option>
<option value="rukum_east">Rukum East</option>
<option value="rupandehi">Rupandehi</option>

<option value="dailekh">Dailekh</option>
<option value="dolpa">Dolpa</option>
<option value="humla">Humla</option>
<option value="jajarkot">Jajarkot</option>
<option value="jumla">Jumla</option>
<option value="kalikot">Kalikot</option>
<option value="mugu">Mugu</option>
<option value="rukum_west">Rukum West</option>
<option value="salyan">Salyan</option>
<option value="surkhet">Surkhet</option>

<option value="achham">Achham</option>
<option value="baitadi">Baitadi</option>
<option value="bajhang">Bajhang</option>
<option value="bajura">Bajura</option>
<option value="dadeldhura">Dadeldhura</option>
<option value="darchula">Darchula</option>
<option value="doti">Doti</option>
<option value="kailali">Kailali</option>
<option value="kanchanpur">Kanchanpur</option>

</select>

<label id="namelabel">Street:</label>
<input id="inputbox" type="text" placeholder="enter your street number" name="perStreet">
    
    @error('perStreet')
    <div class="error">{{ $message }}</div>
@enderror

<label id="namelabel">Select City:</label>
<select id="district" name="perCity">
      
    @error('perCity')
    <div class="error">{{ $message }}</div>
@enderror

  <option value="">-- Choose City --</option>

  <option value="kathmandu">Kathmandu</option>
<option value="lalitpur">Lalitpur</option>
<option value="bhaktapur">Bhaktapur</option>
<option value="pokhara">Pokhara</option>
<option value="bharatpur">Bharatpur</option>
<option value="biratnagar">Biratnagar</option>
<option value="birgunj">Birgunj</option>
<option value="janakpur">Janakpur</option>
<option value="dharan">Dharan</option>
<option value="itahari">Itahari</option>
<option value="hetauda">Hetauda</option>
<option value="butwal">Butwal</option>
<option value="bhairahawa">Bhairahawa</option>
<option value="nepalgunj">Nepalgunj</option>
<option value="dhangadhi">Dhangadhi</option>
<option value="mahendranagar">Mahendranagar</option>
<option value="surkhet">Surkhet</option>
<option value="ghorahi">Ghorahi</option>
<option value="tulsipur">Tulsipur</option>
<option value="kalaiya">Kalaiya</option>
<option value="rajbiraj">Rajbiraj</option>
<option value="siraha">Siraha</option>
<option value="lahan">Lahan</option>
<option value="inaruwa">Inaruwa</option>
<option value="banepa">Banepa</option>
<option value="dhulikhel">Dhulikhel</option>
<option value="panauti">Panauti</option>
<option value="putalibazar">Putalibazar</option>
<option value="bidur">Bidur</option>
<option value="baglung">Baglung</option>
<option value="besisahar">Besisahar</option>
<option value="tansen">Tansen</option>
<option value="gorkha">Gorkha</option>
<option value="jaleshwar">Jaleshwar</option>
<option value="malangwa">Malangwa</option>

</select>

<h2 id="fheading">Temporary Address</h2>
<label id ="selectlabel">Select District:</label>
<select id="district" name="tampDistrict">
      
    @error('tampDistrict')
    <div class="error">{{ $message }}</div>
@enderror
  <option value="">-- Choose District --</option>

 
 <option value="">-- Choose District --</option>

<option value="bhojpur">Bhojpur</option>
<option value="dhankuta">Dhankuta</option>
<option value="ilam">Ilam</option>
<option value="jhapa">Jhapa</option>
<option value="khotang">Khotang</option>
<option value="morang">Morang</option>
<option value="okhaldhunga">Okhaldhunga</option>
<option value="panchthar">Panchthar</option>
<option value="sankhuwasabha">Sankhuwasabha</option>
<option value="syangja">Syngja</option>
<option value="kaski">Kaski</option>
<option value="solukhumbu">Solukhumbu</option>
<option value="sunsari">Sunsari</option>
<option value="taplejung">Taplejung</option>
<option value="terhathum">Terhathum</option>
<option value="udayapur">Udayapur</option>

<option value="bara">Bara</option>
<option value="dhanusha">Dhanusha</option>
<option value="mahottari">Mahottari</option>
<option value="parsa">Parsa</option>
<option value="rautahat">Rautahat</option>
<option value="saptari">Saptari</option>
<option value="sarlahi">Sarlahi</option>
<option value="siraha">Siraha</option>

<option value="bhaktapur">Bhaktapur</option>
<option value="chitwan">Chitwan</option>
<option value="dhading">Dhading</option>
<option value="dolakha">Dolakha</option>
<option value="kathmandu">Kathmandu</option>
<option value="kavrepalanchok">Kavrepalanchok</option>
<option value="lalitpur">Lalitpur</option>
<option value="makwanpur">Makwanpur</option>
<option value="nuwakot">Nuwakot</option>
<option value="ramechhap">Ramechhap</option>
<option value="rasuwa">Rasuwa</option>
<option value="sindhuli">Sindhuli</option>
<option value="sindhupalchok">Sindhupalchok</option>

<option value="baglung">Baglung</option>
<option value="gorkha">Gorkha</option>
<option value="lamjung">Lamjung</option>
<option value="manang">Manang</option>
<option value="mustang">Mustang</option>
<option value="myagdi">Myagdi</option>
<option value="nawalpur">Nawalpur</option>
<option value="parbat">Parbat</option>
<option value="syangja">Syangja</option>
<option value="tanahun">Tanahun</option>

<option value="arghakhanchi">Arghakhanchi</option>
<option value="banke">Banke</option>
<option value="bardiya">Bardiya</option>
<option value="dang">Dang</option>
<option value="gulmi">Gulmi</option>
<option value="kapilvastu">Kapilvastu</option>
<option value="palpa">Palpa</option>
<option value="pyuthan">Pyuthan</option>
<option value="rolpa">Rolpa</option>
<option value="rukum_east">Rukum East</option>
<option value="rupandehi">Rupandehi</option>

<option value="dailekh">Dailekh</option>
<option value="dolpa">Dolpa</option>
<option value="humla">Humla</option>
<option value="jajarkot">Jajarkot</option>
<option value="jumla">Jumla</option>
<option value="kalikot">Kalikot</option>
<option value="mugu">Mugu</option>
<option value="rukum_west">Rukum West</option>
<option value="salyan">Salyan</option>
<option value="surkhet">Surkhet</option>

<option value="achham">Achham</option>
<option value="baitadi">Baitadi</option>
<option value="bajhang">Bajhang</option>
<option value="bajura">Bajura</option>
<option value="dadeldhura">Dadeldhura</option>
<option value="darchula">Darchula</option>
<option value="doti">Doti</option>
<option value="kailali">Kailali</option>
<option value="kanchanpur">Kanchanpur</option>

</select>

<label id="namelabel">Street:</label>
<input id="inputbox" type="text" placeholder="enter your street number" name="tampStreet">
    
    @error('tampStreet')
    <div class="error">{{ $message }}</div>
@enderror

<label id="namelabel">Select City:</label>
<select id="district" name="tampCity">
      
    @error('tampCity')
    <div class="error">{{ $message }}</div>
@enderror
  <option value="">-- Choose City --</option>

  <option value="kathmandu">Kathmandu</option>
<option value="lalitpur">Lalitpur</option>
<option value="bhaktapur">Bhaktapur</option>
<option value="pokhara">Pokhara</option>
<option value="bharatpur">Bharatpur</option>
<option value="biratnagar">Biratnagar</option>
<option value="birgunj">Birgunj</option>
<option value="janakpur">Janakpur</option>
<option value="dharan">Dharan</option>
<option value="itahari">Itahari</option>
<option value="hetauda">Hetauda</option>
<option value="butwal">Butwal</option>
<option value="bhairahawa">Bhairahawa</option>
<option value="nepalgunj">Nepalgunj</option>
<option value="dhangadhi">Dhangadhi</option>
<option value="mahendranagar">Mahendranagar</option>
<option value="surkhet">Surkhet</option>
<option value="ghorahi">Ghorahi</option>
<option value="tulsipur">Tulsipur</option>
<option value="kalaiya">Kalaiya</option>
<option value="rajbiraj">Rajbiraj</option>
<option value="siraha">Siraha</option>
<option value="lahan">Lahan</option>
<option value="inaruwa">Inaruwa</option>
<option value="banepa">Banepa</option>
<option value="dhulikhel">Dhulikhel</option>
<option value="panauti">Panauti</option>
<option value="putalibazar">Putalibazar</option>
<option value="bidur">Bidur</option>
<option value="baglung">Baglung</option>
<option value="besisahar">Besisahar</option>
<option value="tansen">Tansen</option>
<option value="gorkha">Gorkha</option>
<option value="jaleshwar">Jaleshwar</option>
<option value="malangwa">Malangwa</option>

</select>

<br>
<br>
<hr><hr>
<label id="namelabel">Join Date of Langhali Samaj:</label>
<input id="inputbox" type="date" placeholder="choose your date" name="date">
    
    @error('date')
    <div class="error">{{ $message }}</div>
@enderror

<br>
<br>

<div id="lastpart">
<label id="namelabel">Email:</label>
<input id="inputbox" type="email" placeholder="enter your email" name="email">
    
    @error('email')
    <div class="error">{{ $message }}</div>
@enderror

<label id="namelabel">Contact:</label>
<input id="inputbox" type="number" placeholder="enter your contact number" name="contactNumber">
    
    @error('contactNumber')
    <div class="error">{{ $message }}</div>
@enderror


</div>

<div id="lastpart">
<input id="messagebox" type="text" name="message" >
    
    @error('message')
    <div class="error">{{ $message }}</div>
@enderror
<button id="buton">Register Form</button>
</div>
      </form>
      </div>
  
</body>
</html>