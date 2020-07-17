<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

   
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--AJOUT Par Moi-->  
    <link rel="stylesheet" href="assets/css/dialog.css">

    <title>Hello, world!</title>
    <style>
        .card-horizontal {
            display: flex;
            flex: 1 1 auto;
        }
        .img1{
            width: 210px;
            height: 200px;
        }
        .img2{
            width: 450px;
            height: 300px;
           
        }
        strike{
	    opacity: 0.7;
	    color: #4e555b;
        margin-left:220px;
    
        }

        .checked {
            color: orange;
        }
        .btn {
            color: #7ac400;
            font-size: 11px;
            text-transform: uppercase;
            font-weight: bold;
            background: none;
            border: 1px solid #7ac400;
            padding: 6px 14px;
            margin-top: 5px;
            margin-left:220px;
            border-radius: 20px;
        }

        .card-columns {
            -webkit-column-count: 3;
            -moz-column-count: 3;
                    column-count: 3;
            -webkit-column-gap: 1.25rem;
            -moz-column-gap: 1.25rem;
                    column-gap: 1.25rem;
        }
        .card-columns .card {
            display: inline-block;
            width: 100%;
        }

        .details{
            margin-left: 10px;
        }
    </style>

  </head>
  <body>
  @foreach($contacts as $offre)
  
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mt-3">
                    <div class="card">
                        <div class="card-horizontal">
                            <div class="img-square-wrapper">
                                <div id="{{ $offre -> prix}}" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                      <li data-target="#{{ $offre -> prix}}" data-slide-to="0" class="active"></li>
                                      <li data-target="#{{ $offre -> prix}}" data-slide-to="1"></li>
                                      <li data-target="#{{ $offre -> prix}}" data-slide-to="2"></li>
                                    </ol>
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                      <img  class="img1" src="storage/{{ $offre -> imgPath1}}" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                      <img class="img1" src="storage/{{ $offre -> imgPath2}}" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                      <img  class="img1" src="storage/{{ $offre -> imgPath3}}" alt="Third slide">
                                    </div>
                                  </div>
                              </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">{{ $offre -> titre}}</h4>
                                <p class="card-text">{{ $offre -> description}}</p>
                                <div class="star">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <p class="card-text"><strike>$3000</strike><b>{{ ' '.$offre -> prix}} Dh</b></p>
                                <a href="#" class="btn btn-primary"  onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Consulter</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach 

@foreach($contacts as $offre)  
    <div id="id01" class="modal">
        <div class="modal-content animate">
                <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                </div>          
                <div class="container">
                <div class="row">
                        <div class="img-square-wrapper">
                            <div id="mycarousel1" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#mycarousel1" data-slide-to="0" class="active"></li>
                                    <li data-target="#mycarousel1" data-slide-to="1"></li>
                                    <li data-target="#mycarousel1" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <img  class="img2" src="storage/{{ $offre -> imgPath1}}" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="img2" src="storage/{{ $offre -> imgPath2}}" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img  class="img2" src="storage/{{ $offre -> imgPath3}}" alt="Third slide">
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>  
                <div class="details">
                    <div class="row">
                        <h2>{{ $offre -> titre}}</h2>
                    </div>  
                    <div class="row">
                        <p>{{ $offre -> description}}</p>
                    </div> 
                    <div class="row">
                        <h4>{{ $offre -> prix}} Dh</h4>
                    </div>
                    <div class="row">
                        <div class="col-4">{{ $offre -> capacite}} etudient</div>
                    </div>  
                    <div class="row">
                        <h3><b>Future</b></h3>
                    </div> 
                    <div class="row">
                        <div class="col-4">WIFI</div>
                        <div class="col-4">...</div>
                        <div class="col-4">...</div>
                    </div> 
                </div> 
                       
            </div>
        </div>
    <div>
 @endforeach
          


    
          
    <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!--AJOUT Par Moi-->
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

</body>
</html>