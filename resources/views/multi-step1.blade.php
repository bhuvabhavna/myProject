<?php
/*echo '<pre>';
print_r($users); exit;*/ ?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        {{-- dari https://cdnjs.com/libraries/parsley.js --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous"></script>
        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
             section{
              padding-top: 100px;
            }
            .form-section{
              /* padding-left:15px; */
              display: none;
            }
            .form-section.current{
              display: inherit;
            }
            .btn-info, .btn-success{
              margin-top: 10px;
            }
            .parsley-errors-list{
              margin: 2px 0 3px;
              padding: 0;
              list-style-type: none;
              color: red;
            }
        </style>
    </head>
    <body>
        <div class="container pt-5">
          <div class="col-md-6 col-md-offset-3 pt-5">
            <form class="contact-form" method="post">
              @csrf
              <div class="form-section">
                <div class="form-group">
                  <label for="exampleInputEmail1">First Name</label>
                  <input type="text" class="form-control" name="fname" required>             
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">Middle Name</label>
                  <input type="text" class="form-control" name="mname" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Last Name</label>
                  <input type="text" class="form-control" name="lname" required>
                </div> 
              </div> 
              <div class="form-section">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control" name="email" required>             
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">Phone</label>
                  <input type="text" class="form-control" name="phone" required>
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
              $('.form-navigation .previous').toggle(index>0);
              var atTheEnd = index >= $sections.length - 1;
              $('.form-navigation .next').toggle(!atTheEnd);
              $('.form-navigation [type=submit]').toggle(atTheEnd);
            }
            function curIndex(){
              return $sections.index($sections.filter('.current'));
            }
            $('.form-navigation .previous ').click(function(){
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
              $(section).find(':input').attr('data-parsley-group','block-'+index);
            });
            navigateTo(0);
        });

    </script> 

    <?php /* <script>
    $(function(){
      var $sections = $('.form-section');
      function navigateTo(index){
        $sections.removeClass('current').eq(index).addClass('current');
        $('.form-navigation .previous').toggle(index>0);
        var atTheEnd = index >= $sections.length - 1 ;
        $('.form-navigation .next').toggle(!atTheEnd);
        $('.form-navigation [type=submit]').toggle(atTheEnd);        
      }
      function curIndex()
      {
        return $sections.index($sections.filter('.current'));
      }
      $('.form-navigation .previous').click(function(){
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
        $(section).find(':input').attr('data-parsley-group','block-'+index);
      });

      navigateTo(0);
    });
  </script> */ ?>
</html>
