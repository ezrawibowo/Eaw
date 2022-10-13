<?php
include('includes/header.php');
?>
        <div id="scroll-container" data-bs-spy="scroll" data-bs-target="#scrollspy" data-bs-smooth-scroll="true">
        <section class="container pb-5 py-md-5 mt-md-5" id="home">
            <div class="row">
                <div class=" hero-text col-10 col-md-9 d-md-flex justify-content-md-end">
                    <div class=" ms-4 me-md-3 ">
                       <h1 class="display-2 fw-bolder mt-4">Hi! I'm Ezra.</h1>
                        <h2 class="mt-3 mb-0">Ezra Ariella Wibowo.</h2>
                        <h2 class="mb-5">Web designer with "No-Bullshit" policy.</h2>
                        <a type="button" class="btn mb-4 my-md-5 p-0 rounded-0" href="#contact"><h3 class=" fw-bold mb-0">What's on your mind?</h3></a>
                    </div>
                </div>
                
                <!--<div class="col-5 col-md-4 offset-md-1 mt-4 mt-md-0">
                    <img src="img/20220808_112810.jpg" alt="ezra's face" class="img-fluid">
                </div>-->
            </div> 
        </section> <!-- end #home -->
        
        <section class="container pb-5 py-md-5" id="why-me">
            <div class="row">
                <div class="col-8 offset-2">
                   <h1 class=" display-4 text-center text-uppercase fw-bolder border-top py-1 mb-4">why me?</h1> 
                </div>
            </div> <!-- end section title -->
            <div class="row mb-3">
                <div class="col-6 offset-3 col-md-4 offset-md-0">
                    <img src="img/web%20icon.png" alt="web icon" class="img-fluid">
                </div>
                
                <div class="col-10 offset-1 col-md-6 offset-md-0 my-3 my-md-auto">
                    <h2 class="text-capitalize text-center text-md-start fs-1 mb-3">simply charming design</h2>
                    <p class="fs-4">My design has that simple, yet charming vibes that captivates your visitors.</p>
                </div>
            </div> <!-- end reason 1 -->
            
            <div class="row mb-3 d-flex">
                <div class="col-10 offset-1 col-md-6 offset-md-2 my-3 my-md-auto order-1 order-md-0">
                   <h2 class="text-capitalize text-center text-md-start fs-1 mb-3">comfortingly easy to use</h2>
                    <p class="fs-4">I create an easy-to-use UI that gives your users comfort.</p>
                </div>
                
                <div class="col-6 offset-3 col-md-4 offset-md-0">
                   <img src="img/ux%20icon.png" alt="UI/UX icon" class="img-fluid"> 
                </div>
            </div> <!-- end reason 2 -->
            
            <div class="row mb-3"> 
                <div class="col-6 offset-3 col-md-4 offset-md-0">
                    <img src="img/custom%20icon.png" alt="custom icon" class="img-fluid">
                </div>
                
                <div class="col-10 offset-1 col-md-6 offset-md-0 my-3 my-md-auto">
                    <h2 class="text-capitalize text-center text-md-start fs-1 mb-3">custom made</h2>
                    <p class="fs-4">I build my websites, tailored to your specific preferences.</p>
                </div>
            </div> <!-- end reason 3 -->
        </section> <!-- end #why-me -->
        
        <section class="container pb-5 py-md-5" id="portfolio">
            <div class="row">
                <div class="col-8 offset-2">
                   <h1 class=" display-4 text-center text-uppercase fw-bolder border-top py-1 mb-4">portfolio</h1> 
                </div>
            </div> <!-- end section title -->
                   <div class="row justify-content-md-evenly text-center fs-2 text-capitalize fw-bold lh-1">
                       <div class="col-6 col-md-3 position-relative mb-5 mb-md-0">
                           <div class="icon-container d-flex align-items-center p-2 rounded-4 mb-2">
                               <img class="img-fluid" src="img/icon%20sandar%20no%20background%201.png">
                           </div>
                           <a class="stretched-link" href="//www.sandar-international.com/" target="_blank">sandar international</a>
                       </div> <!-- end portfolio 1 -->
                       <div class="col-6 col-md-3 position-relative mb-5 mb-md-0">
                           <div class="icon-container d-flex align-items-center p-2 rounded-4 mb-2">
                               <img class="img-fluid" src="img/noun-checkmark-1807801%201.png">
                           </div>
                           <a class="stretched-link" href="no-page.php" target="_blank">website x</a>
                       </div> <!-- end portfolio 2 -->
                       <div class="col-6 col-md-3 position-relative mb-5 mb-md-0">
                           <div class="icon-container d-flex align-items-center p-2 rounded-4 mb-2">
                               <img class="img-fluid" src="img/noun-checkmark-1807801%201.png">
                           </div>
                           <a class="stretched-link" href="no-page.php" target="_blank">website y</a>
                       </div> <!-- end portfolio 3 -->
                    </div> 
        </section> <!-- end #portfolio -->
        
        <section class="container pb-5 py-md-5" id="contact">
            <div class="row">
                <div class="col-8 offset-2">
                   <h1 class=" display-4 text-center text-uppercase fw-bolder border-top py-1 mb-4">contact me</h1> 
                </div>
            </div> <!-- end section title -->
            <div class="row">
                <div class="contact-form col-10 offset-1 col-md-6 offset-md-0 mb-5 mb-md-0 d-flex flex-column">
                    <h2 class="fs-1">what do you have in mind?</h2>
                    
                    <?php
                    if($_GET['mailAlert'] == 'sent'){
                    ?>
                     <div class='position-fixed top-50 start-50 translate-middle w-75 alert fade show'>
                        <button type="button" class="btn position-absolute end-0 top-50 translate-middle-y border-0" data-bs-dismiss="alert"><span class="bi bi-x-circle h1"></span></button>
                        <h2 class="fw-bold">Message sent successfully. 
                        <br> 
                        We'll get back to you soon!</h2>
                    </div>   
                    <?php 
                        }
                    ?>
                    
                    <form action="email.php" method="post">
                        <input type="text" class="form-control form-control-lg border-0 rounded-0 mb-2" placeholder="Your name" name="name" required oninvalid="this.setCustomValidity('Please enter your Name.')" oninput="this.setCustomValidity('')">
                        <input type="email" class="form-control form-control-lg border-0 rounded-0 mb-2" placeholder="Your email" name="email" required oninvalid="this.setCustomValidity('Please enter your Email.')" oninput="this.setCustomValidity('')">   
                        <textarea class="form-control form-control-lg h-100 border-0 rounded-0 mb-2 flex-fill" placeholder="Your thoughts" name="message" required oninvalid="this.setCustomValidity('Please write your thoughts.')" oninput="this.setCustomValidity('')"></textarea>
                        <button type="submit" class="btn border-0 rounded-0 align-self-start fs-4 fw-bold" name="submit">Send my thoughts</button>
                    </form>
                </div> <!-- end message form -->
                
                <div class="col-8 offset-2 col-md-4 offset-md-1">
                    <h2 class="fs-1">chat with me directly:</h2>
                    <div class="row">
                       <div class="col-6">
                           <a href="//www.facebook.com/ezra.a.wibowo" target="_blank">
                                <img src="img/facebook%20icon.png" class="img-fluid">
                            </a>
                        </div>
                        
                        <div class="col-6">
                            <a href="//www.linkedin.com/in/ezra-wibowo-247b4923a/" target="_blank">
                                <img src="img/linkedin%20icon.png" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-6">
                            <a href="//wa.me/6289655076545?text= I would like to make an inquiry." target="_blank">
                                <img src="img/whatsapp%20icon.png" class="img-fluid">
                            </a>
                        </div>
                        
                        <div class="col-6">
                            <a href="//github.com/ezrawibowo" target="_blank">
                                <img src="img/github%20icon.png" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!-- end #contact -->
        
<?php
 include ('includes/footer.php');           
?>