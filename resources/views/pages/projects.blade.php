@extends('layouts.master')

@section('title', 'Projects')

@section('content')

<section id="contact" class="contact">
    <div class="container">

        <div class="section-title">
            <h2>My Projects</h2>
            <p>Some of the key projects I have done recently are mentioned below.</p>
          </div>

 
   <div class="table-responsive">
    <table class="table table-primary table-bordered table-responsive">
        <thead>
            <tr class="text-center">
                <th>SL</th>
                <th>Project Title</th>
                <th>Description</th>
                <th>Link</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($allProjects as $key=>$project)

            <tr>
                <td class="text-center">{{ ++$key }}</td>
                <td class="text-center">{{ $project['title'] }}</td>
                <td>{{ $project['description'] }}</td>
                <td>{{ $project['link'] }}</td>
                
            </tr>
                
            @endforeach
            
            
        </tbody>
    </table>
   </div>
</section>
   
@endsection
