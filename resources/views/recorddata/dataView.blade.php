<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

          <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}



tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

</head>
<body>
  <h1>Langhali Members Data</h1>
    <table>
        <tr>
          <th>Id</th>
        <th>First Name</th>
        <th>Middle Name</th>
        <th>Last Name</th>
        <th>Per District</th>
        <th>Per Street</th>
        <th>Per City</th>
        <th>Tamp District</th>
        <th>Tamp Street</th>
        <th>Tamp City</th>
        <th>Join Date</th>
        <th>Email</th>
        <th>Contact</th>
        <th>Message</th>
        <th>Edition</th>
        <th>Delete</th>
        </tr>
        
@foreach($allrecords as $record)
        <tr>
            <td>{{ $record->id}}</td>
            <td>{{ $record->Firstname }}</td>
            <td>{{ $record->Middlename }}</td>
            <td>{{ $record->Lastname }}</td>
            <td>{{ $record->PerDistrict }}</td>
            <td>{{ $record->PerStreet }}</td>
            <td>{{ $record->PerCity }}</td>
            <td>{{ $record->TampDistrict }}</td>
            <td>{{ $record->TampStreet }}</td>
            <td>{{ $record->TampCity }}</td>
            <td>{{ $record->Joindate }}</td>
            <td>{{ $record->Email }}</td>
            <td>{{ $record->Contact }}</td>
            <td>{{ $record->Message }}</td>
            <td><a href="{{route('dataEdit',$record->id)}}"><button>Edit</button></a></td>
            <td><button>Delete</button></td>
        </tr>
        @endforeach
    </table>
</body>
</html>