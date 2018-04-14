<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Negila Yogi</title>
    <link rel="stylesheet" type="text/css" href="css/E_form_css.css" media="screen" />

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<style type="text/css">
div.ex3 {

    width: 1200px;
    height: 750px;
    overflow: auto;
    overflow-x: hidden;
}


::-webkit-scrollbar {
    width: 0px;  /* remove scrollbar space */
    background: transparent;  /* optional: just make scrollbar invisible */
}
/* optional: show position indicator in red */
::-webkit-scrollbar-thumb {
    background: #FF0000;
}

    .container-login100 {
    width: 100%;
    min-height: 100vh;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    padding: 15px;

    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    position: relative;
    z-index: 1;
}

#contact_form{


    background: inherit;

    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    box-shadow: inset 0 0 0 3000px rgba(255,255,255,0.3);
    filter: blur(0.1px);

    color: white;

    margin-bottom: 20px;

}

.scroll-area{
  width:100%;
  height:calc(100% - 200px);
  margin-top:100px;

  float:left;
  overflow-y:scroll;
}

.the-click-button{

width: 120px;
height: 20px;
background-color: transparent;


}
.margin{

    margin-left: 800px;

}
</style>
    <script type="text/javascript" src="js/E_form_js.js">



    </script>

    <script type="text/javascript">
    function dynInput(cbox) {
      if (cbox.checked) {
        var input = document.createElement("input");
        input.setAttribute("id", "datepicker");
         input.type = "text";
        var div = document.createElement("div");
        div.id = cbox.name;
        div.innerHTML = "Text to display for " + cbox.name;
        div.appendChild(input);
        document.getElementById("insertinputs").appendChild(div);
      } else {
        document.getElementById(cbox.name).remove();
      }
    }
</script>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
      $( function() {
        $( "#datepicker" ).datepicker();
      } );
  </script>

</head>
<body >
<div class="limiter">
    <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
<div class="ex3">

<div class="container">

    <form class="well form-horizontal" action="register.php" method="post"  id="contact_form">
        <fieldset>

            <!-- Form Name -->
            <br />
            <legend class="legnd">N e g i l a &nbsp;&nbsp;&nbsp;Y o g i &nbsp;&nbsp;&nbsp; T r u s t

            <div class="margin">
            <a href="Home.php" class="the-click-button" placeholder="tejas">Home</a>

            <a href="report.php" class="the-click-button">Report</a>
</div>
            </legend>

            <!-- Text input-->


            <!-- The button HTML code -->



            <div class="form-group">
                <label class="col-md-4 control-label">First Name</label>

                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input required name="first_name" placeholder="First Name" class="form-control"  type="text">
                    </div>
                </div>
            </div>

            <!-- Text input-->

            <div class="form-group">
                <label class="col-md-4 control-label" >Last Name</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input required name="last_name" placeholder="Last Name" class="form-control"  type="text">
                    </div>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label">E-Mail</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input  name="email" placeholder="E-Mail Address" class="form-control"  type="text" >
                    </div>
                </div>
            </div>


            <!-- Text input-->

            <div class="form-group">
                <label class="col-md-4 control-label">Phone #</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                        <input required name="phone" placeholder="phone no" class="form-control" type="text">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" >Occupation</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
                        <input required name="occupation" placeholder="Occupation" class="form-control"  type="text">
                    </div>
                </div>
            </div>

            <!-- Text input-->

            <div class="form-group">
                <label class="col-md-4 control-label">Address</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input required name="address" placeholder="Address" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <!-- Text input-->

            <div class="form-group">
                <label class="col-md-4 control-label">City</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input required name="city" placeholder="city" class="form-control"  type="text">
                    </div>
                </div>
            </div>

            <!-- Select Basic -->

            <div class="form-group">
                <label class="col-md-4 control-label">State</label>
                <div class="col-md-4 selectContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                        <label>
                            <select name="state" class="form-control selectpicker">
                                <option value=" ">Please select your state</option>
                                <option>Andhra Pradesh</option>
                                <option>Arunachal Pradesh</option>
                                <option>Assam</option>
                                <option>Bihar</option>
                                <option>Chhattisgarh</option>
                                <option>Goa</option>
                                <option>Gujarat</option>
                                <option>Haryana</option>
                                <option>Himachal Pradesh</option>
                                <option>Jammu and Kashmir</option>
                                <option>Jharkhand</option>
                                <option>Karnataka</option>
                                <option>Kerala</option>
                                <option>Madhya Pradesh</option>
                                <option>Maharashtra</option>
                                <option>Manipur</option>
                                <option>Meghalaya</option>
                                <option>Mizoram</option>
                                <option>Nagaland</option>
                                <option>Odisha</option>
                                <option>Punjab</option>
                                <option> Rajasthan</option>
                                <option>Sikkim</option>
                                <option>Tamil Nadu</option>
                                <option>Telangana</option>
                                <option> Tripura</option>
                                <option>Uttar Pradesh</option>
                                <option>Uttarakhand</option>
                                <option>West Bengal</option>

                            </select>
                        </label>
                    </div>
                </div>
            </div>

            <!-- Text input-->

            <div class="form-group">
                <label class="col-md-4 control-label">Zip Code</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input required name="zip" placeholder="Zip Code" class="form-control"  type="text">
                    </div>
                </div>
            </div>

            <!-- Text input-->


            <!-- radio checks -->
            <div class="form-group">
                <label class="col-md-4 control-label">Subscription</label>
                <div class="col-md-4">
                    <div class="radio">
                        <label>
                            <input type="checkbox" name="hosting" onclick="dynInput(this)" /> Yes
                        </label>
                        <p id="insertinputs"></p>
                    </div>

                </div>
            </div>

            <!-- Text area -->

            <div class="form-group">
                <label class="col-md-4 control-label">Description</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                        <textarea class="form-control" name="comment" placeholder="Description"></textarea>


                    </div>
                </div>
            </div>

            <input type='file' onchange="readURL(this);" />

            <!-- Success message -->


            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-warning" name="upload">Upload <span class="glyphicon glyphicon-send"></span></button>
                </div>
            </div>

        </fieldset>

    </form>


<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>

<script type="text/javascript">

   $(document).ready(function() {
    $('#reg_form').bootstrapValidator({

        fields: {
            first_name: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Please supply your first name'
                    }
                }
            },
             last_name: {
                validators: {
                     stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Please supply your last name'
                    }
                }
            },

            phone: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your phone number'
                    },
                    phone: {
                        country: 'US',
                        message: 'Please supply a vaild phone number with area code'
                    }
                }
            },
            address: {
                validators: {
                     stringLength: {
                        min: 8,
                    },
                    notEmpty: {
                        message: 'Please supply your street address'
                    }
                }
            },
            city: {
                validators: {
                     stringLength: {
                        min: 4,
                    },
                    notEmpty: {
                        message: 'Please supply your city'
                    }
                }
            },
            state: {
                validators: {
                    notEmpty: {
                        message: 'Please select your state'
                    }
                }
            },
            zip: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your zip code'
                    },
                    zipCode: {
                        country: 'IN',
                        message: 'Please supply a vaild zip code'
                    }
                }
            },
		comment: {
                validators: {
                      stringLength: {
                        min: 10,
                        max: 200,
                        message:'Please enter at least 10 characters and no more than 200'
                    },
                    notEmpty: {
                        message: 'Please supply a description about yourself'
                    }
                    }
                 },
	 email: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your email address'
                    },
                    emailAddress: {
                        message: 'Please supply a valid email address'
                    }
                }
            },



            }
        })


        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#reg_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});



 </script>

</div>
</div>
</div>
</div>

</div><!-- /.container -->


</body>
</html>


<?php
    if (isset($_REQUEST['upload']) ){

        $first = $_REQUEST['first_name'];
        $second = $_REQUEST['last_name'];
        $email = $_REQUEST['email'];
        $phone = $_REQUEST['phone'];
        $occupation = $_REQUEST['occupation'];
        $address = $_REQUEST['address'];
        $city = $_REQUEST['city'];
        $zip_code = $_REQUEST['zip'];
        $description = $_REQUEST['comment'];



        $connect=  mysqli_connect("localhost","root" , "","negila_yogi" );
        if(mysqli_connect_errno())
        { die("cannot connect to database field:". mysqli_connect_error());   }

        $query="INSERT INTO `register` set id= '',
                                            first_name='$first',
                                            last_name='$second',
                                            email='$email',
                                            phone = '$phone',
                                            occupation='$occupation',
                                            address='$address',
                                            city = '$city',
                                            zip_code = '$zip_code',
                                            description = '$description'";
        $result=  mysqli_query($connect, $query);

        mysqli_close($connect);

    }

?>
