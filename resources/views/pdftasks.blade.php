<html>
   <head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <style>
         body{
             background :  rgba(192, 199, 211,0.3);
         }
        table{
            
            width:100%;
            //border: 1px solid rgba(000,000,000,0.3);
        }
        th{
            background:#cbcbcb;
            border-color:#cbcbcb;
        }
        td{
            color : rgba(000,000,000,0.9);
            border-bottom: 1px solid rgba(000,000,000,0.4);
        }
      </style>

   </head>
   <body>

    <div  id="content" class="col-md-12 text-center"   onClick="printContent();">
          <br/>
              <i class="fa fa-print" aria-hidden="true" style="font-size:50px;"></i>
              <br/>
               print
            <br/>
    </div>
           <span style="font-family:lato;font-size:35px;" class="col-md-6 text-left"> {{ $tasks['project']->name }} </span>
           <span style="font-family:lato;font-size:18px;" class="col-md-6 text-right" id="date"></span>
           <span style="font-family:lato;font-size:25px;" class="col-md-12 text-center">Project Tasks list</span>
           <br><br><br>
            <table class="table">
               <tr> 
                    <th>#</th>
                    <th>Task Name</th>
                    <th>Task State</th>
                    <th>Task Description</th>
                    <th>Task Creation</th>
               </tr>
                
                
            @foreach( $tasks['tasks'] as $t )
                <tr>
                   
                    <td>{{ $t->id  }}</td>
                    <td>{{ $t->name  }}</td>
                    <td>{{ $t->state  }}</td>
                    <td>{{ $t->desciption  }}</td>
                    <td>{{ $t->created_at  }}</td>
                </tr>
             @endforeach
            </table>

  <script>     


                    var d = new Date();
                    document.getElementById("date").innerHTML = Date();

                function printContent(){
                               document.getElementById("content").style.visibility = 'hidden';
                               var scale = 'scale(0.95)';
                               window.print();
                               /*
                               element.style.visibility = 'hidden';      // Hide
                                element.style.visibility = 'visible';
                               */
                }
    </script>

   </body>
</html>