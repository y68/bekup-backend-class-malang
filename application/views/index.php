<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>BEKUP Backend Class Malang - Profile Page</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="intro parallax">
        <div class="container">
            <div class="col-md-12 text-center quote">
                <span class="mutiara"></span>
            </div>
        </div>
    </div>
    <div class="couch">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="col-lg-12">
              <h6 class="description">BACKEND COUCH</h6>
              <div class="row pt-md-couch">
                  <div class="col-md-3 col-md-offset-3 col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                    <div class="img-box">
                      <img src="http://bekup-portal.com/images/2016/10/07/edi-santoso.png" class="img img-responsive">
                      <ul class="text-center">
                        <a href="#"><li><i class="fa fa-envelope-o"></i></li></a>
                      </ul>
                    </div>
                    <div class="text-center">
                    <h1>Edi Santoso</h1>
                    <h2>Back End Coach</h2>
                    <p>Kodesoft</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                    <div class="img-box">
                      <img src="http://bekup-portal.com/images/2016/10/09/yuripratama.png" class="img img-responsive">
                      <ul class="text-center">
                        <a href="#"><li><i class="fa fa-envelope-o"></i></li></a>
                      </ul>
                    </div>
                    <div class="text-center">
                    <h1>Yuri Pratama</h1>
                    <h2>Back End Coach</h2>
                    <p>PIS, lead engineer</p>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
        <div class="team">
          <div class="container">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <div class="col-lg-12">
                  <h6 class="description">PESERTA BACKEND MALANG</h6>
                  <div class="row pt-md">

                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/1.1.4/typed.min.js"></script>
    <script>
        $(function(){
            $(".mutiara").typed({
                strings: ["A creative idea plus a fresh network is the best way to go from zero to millions.^2000","Hello, ^1000 We are from backend track BEKRAF 2.0 regional Malang^2000"],
                contentType: 'html',
                typeSpeed: 30,
                showCursor: true,
                loop:true,
            });
        });
    </script>
    <script type="text/javascript">
		    $.ajax({url: "api/show", success: function(result){
		        result = $.parseJSON(result);
		        console.log(result);
		        $.each(result, function(i,l){
		        	card =
		    `<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
              <div class="img-box">
                <img src="`+l['photoProfile']+`" alt="`+l['nama']+`" class="img img-responsive">
                <ul class="text-center">
                  <a href="mailto:`+l['email']+`"><li><i class="fa fa-envelope-o"></i></li></a>
                </ul>
              </div>
              <div class="text-center">
              <h1>`+l['nama']+`</h1>
              <h2>`+l['pekerjaan']+`</h2>
              <p>`+l['instansi']+`</p>
              </div>
            </div>`;
		        	$(".pt-md").append(card);
		        });
		    }});
		</script>
  </body>
</html>
