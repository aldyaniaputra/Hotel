@extends('layouts.master')
@section('judul', 'hotel hebat!!!')
@section('main_content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">no</th>
        <th scope="col">user</th>
        <th scope="col">action</th>
      </tr>
    </thead>
    <tbody>
    </tbody>
</table>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">user</th>
        <th scope="col">action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td scope="row"><a type="button" href="" class="btn btn-info">edit</a><a type="button" href="" class="btn btn-primary">delete</a></td>
      </tr>
    </tbody>
  </table>
<div class="col-lg-12 col-xl-11">
    <div class="card text-black" style="border-radius: 40px;">
        
    </div>
  </div>
@endsection