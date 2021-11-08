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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous"></script>
        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <div class="container pt-5">
          <div class="col-md-6 col-md-offset-3 pt-5">
            <form class="contact-form">
              <div class="form-section">
                <div class="form-group">
                  <label for="exampleInputEmail1">First Name</label>
                  <input type="text" class="form-control" name="fname" placeholder="First Name">             
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">Middle Name</label>
                  <input type="text" class="form-control" name="mname" placeholder="Middle Name">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Last Name</label>
                  <input type="text" class="form-control" name="lname" placeholder="Last Name">
                </div> 
              </div> 
              <div class="form-section">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control" name="fname" placeholder="First Name">             
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">Phone</label>
                  <input type="text" class="form-control" name="mname" placeholder="Middle Name">
                </div>               
              </div>   
              <div class="form-section">
                <div class="form-group">
                  <label for="exampleInputEmail1">Message</label>
                 <textarea name="message" class="form-control"></textarea>
                </div>                             
              </div>           
              <div class="form-navigation">
                <button type="button" class="btn btn-info previous pull-left">Previous</button>
                <button type="button" class="btn btn-info next pull-right">Next</button>
                <button type="Submit" class="btn btn-primary pull-right">Submit</button>
              </div>              
            </form>
          </div>
        </div>
    </body>
    <script type="text/javascript">
        $(function(){
            var $sections = $('.form-section');

            function navigateTo(index){
              $sections.removeClass('current').eq(index).addClass('current');
              $('form-navigation .previous').toggle(index>0);
              var atTheEnd = index >= $sections.length - 1;
              $('.form-navigation .next').toggle(!atTheEnd);
              $('.form-navigation [type=submit]').toggle(atTheEnd);
            }

            function curIndex(){
              return $sectinos.index($sections.filter('.current'));
            }

            $('.form-navigation .prevoius').click(function(){
                navigateTo(curIndex()-1);
            });

            $('.form-navigation .next').click(function(){
                $('.contact-form').parsley().whenValidate({
                    group: 'block-'+ curIndex()
                }).done(function(){
                    navigateTo(curIndex()+1);
                });
            });

            $sections.each(function(index,section){
              $(section).find(':input').attr('data-parsley-group','block'+index);
            });
            navigateTo(0);
        });

    </script>
</html>
