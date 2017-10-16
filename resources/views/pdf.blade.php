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
        @media print {
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
   
          }

      </style>
    
   </head>
   <body>

    <div  id="content" class="col-md-12 text-center"   onClick="printContent();">
          <br/>
              <i class="fa fa-print" aria-hidden="true" style="font-size:20px;"></i>
              <br/>
               print
            <br/>
    </div>
           <span style="font-family:lato;font-size:35px;" class="col-md-6 text-left"> Project List </span>
           <br/><br/>
           <span style="font-family:lato;font-size:18px;" class="col-md-6 text-right" id="date"></span>
           <span style="font-family:lato;font-size:25px;" class="col-md-12 text-center">Project Tasks list</span>
        
        
        
        
        
        
        <div>
        
             
            <table class="table">
               <tr>
                    <th>Project Name</th>
                    <th>Project State</th>
                    <th>Project Creation</th>
                    <th>Project Description</th>
               </tr>
                
                 @foreach( $projects as $p )
                <tr>
                     <td>{{ $p->name  }}</td>
                    <td>{{ $p->state  }}</td>
                    <td>{{ $p->created_at  }}</td>
                    <td>{{ $p->description  }}</td>
                </tr>
             @endforeach
           
            </table>
</div>


    <script>    


               
                   
                    document.getElementById("date").innerHTML = Date();

                function printContent(){
                               document.getElementById("content").style.visibility = 'hidden';
                               var scale = 'scale(0.95)';
                               document.body.style.webkitTransform =  scale;
                               window.print();
                               /*
                               element.style.visibility = 'hidden';      // Hide
                                element.style.visibility = 'visible';
                               */
                }
    </script>


   </body>
</html>