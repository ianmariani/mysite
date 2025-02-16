<!doctype html>
<html lang="en">
<head>
    <?php include("pack/header.php"); ?>

    <title>Equalgate</title>
    
    <style>
    
    .header2{
        background:linear-gradient(90deg, rgba(34,47,62,1) 0%, rgba(255,255,255,0) 100%), url("img/what_we_do.jpg") 50% 50% no-repeat;
        background-size:cover;
        position:relative;
        top:0;
        left:0;
        width:100%;
        height:50%;
        padding:10%;
    } 
    .banner-text-2{ 
        transform:translate(0%,50%);
        color:white;
        font-size:40px;
        font-weight:900;
        text-align:center;
    } 
    .icons-box:hover{
        transition:0.2s all;
        cursor:pointer;
        transform: scale(1.1);
    }
    .hr{
        background: linear-gradient(90deg, orange, red);
        height: 2px;
        width:10%;
        border:none;
    }
    </style>
    
</head>
  
  
  
<body> 

    <?php include("pack/navbar.php"); ?>

    
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-0 my-auto">
                <header class="header2">
                   
                        <h1 class="banner-text-2" data-aos="fade-up" data-aos-offset="400" data-aos-easing="ease-in-sine">What we do</h1>
                     
                </header> 
            </div>
        </div>
    </div>
    
    
    
    <div class="container p-1 p-md-5">
        <div class="row">
            <div class="col-12 text-center pt-md-5 pt-md-2 ">
                 <font class="heading" style="font-size:30px" data-aos="fade-up" >
                     What can Equalgate help you with?
                 </font>
                 <hr class="hr" data-aos="zoom-in" >
                 <p class="paragraph" data-aos="fade-up" >
                    Our Virtual Assistants stand prepared to aid you with business, executive, and personal assignments.
                 </p>
            </div>
        </div>
    </div>
    
    <!--card section start-->
    <div class="container-fluid">
        
        <div class="row justify-content-around p-5 text-center"> 

            <div class="col-md-3 p-3 icons-box shadow-sm rounded mb-3" data-aos="flip-left"  onclick="window.location.href='work.php?type=personal'" >
                <div class="row">
                    <div class="col-12">
                        <i class="fas fa-chalkboard-teacher p-3 icons"></i> 
                    </div>
                    <div class="col-12">
                        <br>
                        <font class="p-2 heading" style="font-size:17px">Personal Admin</font>
                    </div>
                </div>    
            </div>
            
            <div class="col-md-3 p-3 icons-box shadow-sm rounded mb-3" data-aos="flip-up" onclick="window.location.href='work.php?type=social-media'" >
                <div class="row">
                    <div class="col-12">
                        <i class="fas fa-icons p-3 icons"></i> 
                    </div>
                    <div class="col-12">
                        <br>
                        <font class="p-2 heading" style="font-size:17px">Social Media Management</font>
                    </div>
                </div>    
            </div>
            
            <div class="col-md-3 p-3 icons-box shadow-sm rounded mb-3" data-aos="flip-right" onclick="window.location.href='work.php?type=research'" >
                <div class="row">
                    <div class="col-12">
                        <i class="fab fa-searchengin p-3 icons"></i> 
                    </div>
                    <div class="col-12">
                        <br>
                        <font class="p-2 heading" style="font-size:17px">Research Assistant</font>
                    </div>
                </div>    
            </div>
            
            <div class="col-12">
                <!--<br> -->
            </div>
            
            
            <!--second row-->
            
            <div class="col-md-3 p-3 icons-box shadow-sm rounded mb-3" data-aos="flip-left" onclick="window.location.href='work.php?type=ecommerce'" >
                <div class="row">
                    <div class="col-12">
                        <i class="fas fa-cart-plus p-3 icons"></i> 
                    </div>
                    <div class="col-12">
                        <br>
                        <font class="p-2 heading" style="font-size:17px">Ecommerce Assistant</font>
                    </div>
                </div>    
            </div>
             
            <div class="col-md-3 p-3 icons-box shadow-sm rounded mb-3" data-aos="flip-up"  onclick="window.location.href='work.php?type=project-manager'">
                <div class="row">
                    <div class="col-12">
                        <i class="fas fa-industry p-3 icons"></i> 
                    </div>
                    <div class="col-12">
                        <br>
                        <font class="p-2 heading" style="font-size:17px">Project Management</font>
                    </div>
                </div>    
            </div>
            
            <div class="col-md-3 p-3 icons-box shadow-sm rounded mb-3" data-aos="flip-right" onclick="window.location.href='work.php?type=managing-finance'" >
                <div class="row">
                    <div class="col-12">
                        <i class="fas fa-user-tie p-3 icons"></i> 
                    </div>
                    <div class="col-12">
                        <br>
                        <font class="p-2 heading" style="font-size:17px">Managing Finance</font>
                    </div>
                </div>    
            </div>
            
            <div class="col-12">
                <!--<br> -->
            </div>
            
            
            <!--third row-->
            
            <div class="col-md-3 p-3 icons-box shadow-sm rounded mb-3" data-aos="flip-left" onclick="window.location.href='work.php?type=event'">
                <div class="row">
                    <div class="col-12">
                        <i class="far fa-calendar-alt p-3 icons"></i> 
                    </div>
                    <div class="col-12">
                        <br>
                        <font class="p-2 heading" style="font-size:17px">Event planning</font>
                    </div>
                </div>    
            </div>
            
            <div class="col-md-3 p-3 icons-box shadow-sm rounded mb-3" data-aos="flip-up" onclick="window.location.href='work.php?type=email'">
                <div class="row">
                    <div class="col-12">
                        <i class="far fa-envelope p-3 icons"></i> 
                    </div>
                    <div class="col-12">
                        <br>
                        <font class="p-2 heading" style="font-size:17px">Email Management</font>
                    </div>
                </div>    
            </div>
             
            <div class="col-md-3 p-3 icons-box shadow-sm rounded mb-3" data-aos="flip-right" onclick="window.location.href='work.php?type=travel'" >
                <div class="row">
                    <div class="col-12">
                        <i class="fas fa-route p-3 icons"></i> 
                    </div>
                    <div class="col-12">
                        <br>
                        <font class="p-2 heading" style="font-size:17px">Data Entry Services</font>
                    </div>
                </div>    
            </div>
            <div class="col-12">
                <!--<br>-->
            </div>
            
            
            <!--fourth row-->
            
            <!--<div class="col-md-3 p-3 icons-box shadow-sm rounded mb-3" data-aos="flip-left" onclick="window.location.href='work.php?type=event'">-->
            <!--    <div class="row">-->
            <!--        <div class="col-12">-->
            <!--            <i class="far fa-calendar-alt p-3 icons"></i> -->
            <!--        </div>-->
            <!--        <div class="col-12">-->
            <!--            <br>-->
            <!--            <font class="p-2 heading" style="font-size:17px">Event planning</font>-->
            <!--        </div>-->
            <!--    </div>    -->
            <!--</div>-->
            
            <div class="col-md-3 p-3 icons-box shadow-sm rounded mb-3" data-aos="flip-up" onclick="window.location.href='work.php?type=website'">
                <div class="row">
                    <div class="col-12">
                        <i class="fa fa-bug p-3 icons"></i> 
                    </div>
                    <div class="col-12">
                        <br>
                        <font class="p-2 heading" style="font-size:17px">Website Maintenance</font>
                    </div>
                </div>    
            </div>
             
            <!--<div class="col-md-3 p-3 icons-box shadow-sm rounded mb-3" data-aos="flip-right" onclick="window.location.href='work.php?type=travel'" >-->
            <!--    <div class="row">-->
            <!--        <div class="col-12">-->
            <!--            <i class="fas fa-route p-3 icons"></i> -->
            <!--        </div>-->
            <!--        <div class="col-12">-->
            <!--            <br>-->
            <!--            <font class="p-2 heading" style="font-size:17px">Travel Assistant</font>-->
            <!--        </div>-->
            <!--    </div>    -->
            <!--</div>-->
            <div class="col-12">
                <br><hr>
            </div>
            
            
            
        </div>
        
    </div>
    
    <!--card section end-->
   
   
    <div class="container p-1 p-md-5">
        <div class="row">
            <div class="col-12 text-center pt-md-5 pt-md-2 ">
                 <font class="heading" style="font-size:30px" data-aos="fade-up" >
                     What doesn't Equalgate do ? 
                 </font>
                 <hr class="hr" data-aos="zoom-in"   >
                 <p class="paragraph" data-aos="fade-up" >
                     We, at Equalgate are ready to assist with your tasks across the board, but
                     there is something that we don’t do.
                 </p>
            </div>
            
            <div class="col-12 mt-5 mt-sm-1">
                <br>
                <ul type="square" class="font-weight-bold" data-aos="fade-up" >
                    <li>
                         Payment on behalf of clients<br>
                         <span class="text-secondary font-weight-normal">
                             We can help you find options, reserve places, and paperwork, create legal drafts, manage
                             expense sheets, sourcing candidates, and much more but the payment
                             link is shared with you. We don't make payments on behalf of any of our clients.
                         </span>
                    </li>
                    <br>
                    <li>
                        Devise strategy or set the direction for your business<br>
                        <span class="text-secondary font-weight-normal">
                                 If you’re overworked, virtual assistants are great at taking the grunt work out of your
                                business. When it comes to the parts of your business that are more strategic 
                                however, that’s on you. As a business owner, your direction and strategy are the parts of
                                your business that you know best. You are the person who best knows your market and
                                how to steer your business through it. Nobody can take your place! Our virtual assistants
                                can help by providing the input. But the final call is on your shoulders, and no one else’s.
                         </span>
                    </li>
                    <br>
                    <li>
                        In-person tasks<br>
                        <span class="text-secondary font-weight-normal">
                             We only work virtually. Our virtual assistants can help you out in so many ways
                             whenever you need, but we don’t provide in-person services. Maybe we can plan
                             in-person service in some instances
                         </span>
                    </li>
                </ul>    
            </div>
            
        </div>
    </div>
   
   
   
   
   
   
    
    <?php include("pack/footer.php"); ?>
    
     
</body>
</html> 
<script>
    AOS.init();
</script>
