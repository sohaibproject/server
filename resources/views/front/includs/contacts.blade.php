<div class="contact">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="contact-info">
                    <h2>Our Office</h2>
                    <h3><i class="fa fa-map-marker"></i>YASSNA devlopment enterprice</h3>
                    <h3><i class="fa fa-envelope"></i>Yasserboudiafsoftware@gmail.com</h3>
                    <h3><i class="fa fa-phone"></i>+213-776950050</h3>
                    <div class="social">
                        
                        <a href="https://web.facebook.com/yasserBoudiaf1998"><i class="fab fa-facebook-f"></i></a>
                       
                        <a href=""><i class="fab fa-instagram"></i></a>
                        <a href="https://www.youtube.com/channel/UC6VHeOP6FkudLYUQJ56FLxQ"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-info">
                    <h2>Our Store</h2>
                    <h3><i class="fa fa-map-marker"></i>ALGER - ALGER</h3>
                    <h3><i class="fa fa-envelope"></i>Yasserboudiafsoftware@gmail.com</h3>
                    <h3><i class="fa fa-phone"></i>+213-776950050</h3>
                    <div class="social">
                       
                        <a href="https://web.facebook.com/yasserBoudiaf1998"><i class="fab fa-facebook-f"></i></a>
                        
                        <a href=""><i class="fab fa-instagram"></i></a>
                        <a href="https://www.youtube.com/channel/UC6VHeOP6FkudLYUQJ56FLxQ"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-form">
                <form action="{{route('storclient')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name" />
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" class="form-control" placeholder="Your Email" />
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <textarea class="form-control" name="discription" rows="5" placeholder="Message"></textarea>
                        </div>
                        <div><button class="btn" type="submit">Send Message</button></div>
                    </form>
                </div>
            </div>
           
        </div>
    </div>
</div>