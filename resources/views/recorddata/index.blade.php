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
    <table>
        <tr>
        <th>First Name</th>
        <th>Middle Name</th>
        <th>Last Name</th>
        <th>Per District</th>
        <th>Per Street</th>
        <th>Per City</th>
        <th>Tamp District</th>
        <th>Tamp Street</th>
        <th>Tamp Street</th>
        <th>Tamp City</th>
        <th>Join Date</th>
        <th>Email</th>
        <th>Message</th>
        </tr>
        
@foreach($allrecords as $record)
        <tr>
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
        </tr>
        @endforeach
    </table>
</body>
</html>