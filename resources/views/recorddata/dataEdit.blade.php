<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div id="barner">
    <h1 id="heading">LANGHALI MAGAR SAMAJ</h1>
    <h4 id="smallheading">Pokhara-14,Chauthe</h4>
    </div> 
      <p id="smallheading">Join Form</p>
     
      <hr>
     
      <div id="formborder">
      <form action="{{route('formRegister', $record->id)}}" method="post">@csrf
      
      <h2 id="fheading">First Details</h2>
       
        <div id="firstDetail">
    <label id="namelabel">FirstName:</label>
    <input id="inputbox" type="text" placeholder="enter your first name" name="firstName" value="{{ $record->Firstname }}">
        
    @error('firstName')
    <div class="error">{{ $message }}</div>
@enderror

    <label id="namelabel">MiddleName:</label>
    <input id="inputbox" type="text" placeholder="enter your middle name" name="middleName" value="{{ $record->Middlename }}">
        
    @error('middleName')
    <div class="error">{{ $message }}</div>
@enderror

    <label id="namelabel">LastName:</label>
    <input id="inputbox" type="text" placeholder="enter your last name" name="lastName" value="{{ $record->Lastname }}">
        
    @error('lastName')
    <div class="error">{{ $message }}</div>
@enderror

    </div>
    <br>
    
    <h2 id="fheading">Permanent Address</h2>
    
     <div id="firstDetails">
<label id ="selectlabel">Select District:</label>
<select id="district" name="perDistrict" value="{{ $record->PerDistrict }}">
      
    @error('perDistrict')
    <div class="error">{{ $message }}</div>
@enderror

  <option value="">-- Choose District --</option>

 
  <option>Bhojpur</option>
  <option>Dhankuta</option>
  <option>Ilam</option>
  <option>Jhapa</option>
  <option>Kaski</option>
  <option>Khotang</option>
  <option>Morang</option>
  <option>Okhaldhunga</option>
  <option>Panchthar</option>
  <option>Sankhuwasabha</option>
  <option>Solukhumbu</option>
  <option>Sunsari</option>
  <option>Taplejung</option>
  <option>Terhathum</option>
  <option>Udayapur</option>

  <option>Bara</option>
  <option>Dhanusha</option>
  <option>Mahottari</option>
  <option>Parsa</option>
  <option>Rautahat</option>
  <option>Saptari</option>
  <option>Sarlahi</option>
  <option>Siraha</option>


  <option>Bhaktapur</option>
  <option>Chitwan</option>
  <option>Dhading</option>
  <option>Dolakha</option>
  <option>Kathmandu</option>
  <option>Kavrepalanchok</option>
  <option>Lalitpur</option>
  <option>Makwanpur</option>
  <option>Nuwakot</option>
  <option>Ramechhap</option>
  <option>Rasuwa</option>
  <option>Sindhuli</option>
  <option>Sindhupalchok</option>

  <option>Baglung</option>
  <option>Gorkha</option>
  <option>Kaski</option>
  <option>Lamjung</option>
  <option>Manang</option>
  <option>Mustang</option>
  <option>Myagdi</option>
  <option>Nawalpur</option>
  <option>Parbat</option>
  <option>Syangja</option>
  <option>Tanahun</option>


  <option>Arghakhanchi</option>
  <option>Banke</option>
  <option>Bardiya</option>
  <option>Dang</option>
  <option>Gulmi</option>
  <option>Kapilvastu</option>
  <option>Palpa</option>
  <option>Pyuthan</option>
  <option>Rolpa</option>
  <option>Rukum East</option>
  <option>Rupandehi</option>


  <option>Dailekh</option>
  <option>Dolpa</option>
  <option>Humla</option>
  <option>Jajarkot</option>
  <option>Jumla</option>
  <option>Kalikot</option>
  <option>Mugu</option>
  <option>Rukum West</option>
  <option>Salyan</option>
  <option>Surkhet</option>

 
  <option>Achham</option>
  <option>Baitadi</option>
  <option>Bajhang</option>
  <option>Bajura</option>
  <option>Dadeldhura</option>
  <option>Darchula</option>
  <option>Doti</option>
  <option>Kailali</option>
  <option>Kanchanpur</option>
</select>

<label id="namelabel">Street:</label>
<input id="inputbox" type="text" placeholder="enter your street number" name="perStreet" value="{{ $record->PerStreet }}">
    
    @error('perStreet')
    <div class="error">{{ $message }}</div>
@enderror

<label id="namelabel">Select City:</label>
<select id="district" name="perCity" value="{{ $record->PerCity }}">
      
    @error('perCity')
    <div class="error">{{ $message }}</div>
@enderror

  <option value="">-- Choose City --</option>

  <option>Kathmandu</option>
  <option>Lalitpur</option>
  <option>Bhaktapur</option>
  <option>Pokhara</option>
  <option>Bharatpur</option>
  <option>Biratnagar</option>
  <option>Birgunj</option>
  <option>Janakpur</option>
  <option>Dharan</option>
  <option>Itahari</option>
  <option>Hetauda</option>
  <option>Butwal</option>
  <option>Bhairahawa</option>
  <option>Nepalgunj</option>
  <option>Dhangadhi</option>
  <option>Mahendranagar</option>
  <option>Surkhet</option>
  <option>Ghorahi</option>
  <option>Tulsipur</option>
  <option>Kalaiya</option>
  <option>Rajbiraj</option>
  <option>Siraha</option>
  <option>Lahan</option>
  <option>Inaruwa</option>
  <option>Banepa</option>
  <option>Dhulikhel</option>
  <option>Panauti</option>
  <option>Putalibazar</option>
  <option>Bidur</option>
  <option>Baglung</option>
  <option>Putalibazar</option>
  <option>Pokhara</option>
  <option>Besisahar</option>
  <option>Tansen</option>
  <option>Gorkha</option>
  <option>Jaleshwar</option>
  <option>Malangwa</option>
</select>

<h2 id="fheading">Temporary Address</h2>
<label id ="selectlabel">Select District:</label>
<select id="district" name="tampDistrict" value="{{ $record->TampDistrict }}">
      
    @error('tampDistrict')
    <div class="error">{{ $message }}</div>
@enderror
  <option value="">-- Choose District --</option>

 
  <option>Bhojpur</option>
  <option>Dhankuta</option>
  <option>Ilam</option>
  <option>Jhapa</option>
  <option>Khotang</option>
  <option>Morang</option>
  <option>Okhaldhunga</option>
  <option>Panchthar</option>
  <option>Sankhuwasabha</option>
  <option>Syangja</option>
  <option>Kaski</option>
  <option>Solukhumbu</option>
  <option>Sunsari</option>
  <option>Taplejung</option>
  <option>Terhathum</option>
  <option>Udayapur</option>

  <option>Bara</option>
  <option>Dhanusha</option>
  <option>Mahottari</option>
  <option>Parsa</option>
  <option>Rautahat</option>
  <option>Saptari</option>
  <option>Sarlahi</option>
  <option>Siraha</option>


  <option>Bhaktapur</option>
  <option>Chitwan</option>
  <option>Dhading</option>
  <option>Dolakha</option>
  <option>Kathmandu</option>
  <option>Kavrepalanchok</option>
  <option>Lalitpur</option>
  <option>Makwanpur</option>
  <option>Nuwakot</option>
  <option>Ramechhap</option>
  <option>Rasuwa</option>
  <option>Sindhuli</option>
  <option>Sindhupalchok</option>

  <option>Baglung</option>
  <option>Gorkha</option>
  <option>Kaski</option>
  <option>Lamjung</option>
  <option>Manang</option>
  <option>Mustang</option>
  <option>Myagdi</option>
  <option>Nawalpur</option>
  <option>Parbat</option>
  <option>Syangja</option>
  <option>Tanahun</option>


  <option>Arghakhanchi</option>
  <option>Banke</option>
  <option>Bardiya</option>
  <option>Dang</option>
  <option>Gulmi</option>
  <option>Kapilvastu</option>
  <option>Palpa</option>
  <option>Pyuthan</option>
  <option>Rolpa</option>
  <option>Rukum East</option>
  <option>Rupandehi</option>


  <option>Dailekh</option>
  <option>Dolpa</option>
  <option>Humla</option>
  <option>Jajarkot</option>
  <option>Jumla</option>
  <option>Kalikot</option>
  <option>Mugu</option>
  <option>Rukum West</option>
  <option>Salyan</option>
  <option>Surkhet</option>

 
  <option>Achham</option>
  <option>Baitadi</option>
  <option>Bajhang</option>
  <option>Bajura</option>
  <option>Dadeldhura</option>
  <option>Darchula</option>
  <option>Doti</option>
  <option>Kailali</option>
  <option>Kanchanpur</option>
</select>

<label id="namelabel">Street:</label>
<input id="inputbox" type="text" placeholder="enter your street number" name="tampStreet" value="{{ $record->TampStreet }}">
    
    @error('tampStreet')
    <div class="error">{{ $message }}</div>
@enderror

<label id="namelabel">Select City:</label>
<select id="district" name="tampCity">
      
    @error('tampCity')
    <div class="error">{{ $message }}</div>
@enderror
  <option value="">-- Choose City --</option>

  <option>Kathmandu</option>
  <option>Lalitpur</option>
  <option>Bhaktapur</option>
  <option>Pokhara</option>
  <option>Bharatpur</option>
  <option>Biratnagar</option>
  <option>Birgunj</option>
  <option>Janakpur</option>
  <option>Dharan</option>
  <option>Itahari</option>
  <option>Hetauda</option>
  <option>Butwal</option>
  <option>Bhairahawa</option>
  <option>Nepalgunj</option>
  <option>Dhangadhi</option>
  <option>Mahendranagar</option>
  <option>Surkhet</option>
  <option>Ghorahi</option>
  <option>Tulsipur</option>
  <option>Putalibazar</option>
  <option>Kalaiya</option>
  <option>Rajbiraj</option>
  <option>Siraha</option>
  <option>Lahan</option>
  <option>Inaruwa</option>
  <option>Banepa</option>
  <option>Dhulikhel</option>
  <option>Panauti</option>
  <option>Bidur</option>
  <option>Baglung</option>
  <option>Putalibazar</option>
  <option>Besisahar</option>
  <option>Tansen</option>
  <option>Gorkha</option>
  <option>Jaleshwar</option>
  <option>Malangwa</option>
</select>

<br>
<br>
<hr><hr>
<label id="namelabel">Join Date of Langhali Samaj:</label>
<input id="inputbox" type="date" placeholder="choose your date" name="date" value="{{ $record->Joindate }}">
    
    @error('date')
    <div class="error">{{ $message }}</div>
@enderror

<br>
<br>

<div id="lastpart">
<label id="namelabel">Email:</label>
<input id="inputbox" type="email" placeholder="enter your email" name="email" value="{{ $record->Email }}">
    
    @error('email')
    <div class="error">{{ $message }}</div>
@enderror

<label id="namelabel">Contact:</label>
<input id="inputbox" type="number" placeholder="enter your contact number" name="contactNumber" value="{{ $record->Contact }}">
    
    @error('contactNumber')
    <div class="error">{{ $message }}</div>
@enderror


</div>

<div id="lastpart">
<input id="messagebox" type="text" name="message" value="{{ $record->Message }}">
    
    @error('message')
    <div class="error">{{ $message }}</div>
@enderror
<button id="buton">Register Form</button>
</div>
      </form>
      </div>
  
</body>
</html>