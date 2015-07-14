@extends('app')

@section('content')

<table cellpadding="5px" cellspacing="5px" border="1" style="margin: auto;">
  <thead>
    <th>Key</th>
    <th>Value</th>
  </thead>
  
  <tbody>
    @foreach ($data as $row) 
      <tr>
        <td>{{$row->info_key}}</td>
        <td>{{$row->info_value}}</td>
      </tr>    
    @endforeach
  </tbody>
</table>

@endsection
