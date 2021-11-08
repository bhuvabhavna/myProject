<?php
/*echo '<pre>';
print_r($users); exit;*/ ?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <!-- Styles -->
        

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <div class="container">
                 <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
      <th scope="col">Country</th>
    </tr>
  </thead>
  <tbody>
  @php $i=1 @endphp
    @foreach ($users as $user)   
      <tr>
        <th scope="row">{{ $i }}</th>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>       
        <td>{{ $user->place->country }} </td>
     </tr>
      @php $i= $i+1 @endphp 
   <?php /* @empty
       <tr>
        <th colspan="3">No USer</th>             
      </tr> */ ?>   
    @endforeach 
    
  </tbody>
</table> 
  <?php /*<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>      
      <th scope="col">Country</th>
    </tr>
  </thead>
  <tbody>   
     @php $i=1 @endphp
    @foreach ($users as $user)
      <tr>
        <th scope="row">{{ $i }}</th>
        <td>{{ $user->user->name }}</td>
        <td>{{ $user->country }}</td>              
      </tr>
      @php $i= $i+1 @endphp 
    @endforeach
  </tbody>
</table> <?php */ ?>

        <?php /* @foreach($addresses as $company)
          <h3>{{ $company->country }}</h3>                        
             <ul>
                 @foreach($company->users as $customer)
                    <li> {{ $customer->name }}</li>
                  @endforeach
             </ul> 
          @endforeach */ ?>

           @foreach($users as $user)
          <h3>{{ $user->name }}</h3>                        
             <ul>
                 @foreach($user->addresses as $address)
                    <li> {{ $address->country }}</li>
                  @endforeach
             </ul> 
          @endforeach

        </div>
    </body>
</html>
