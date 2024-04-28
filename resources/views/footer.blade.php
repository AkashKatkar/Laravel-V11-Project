<style>
    #footer-mail-button{
        background-color: #333333;
        outline: #333333;
        border-color: #333333;
        color: #FFFFFF;
        font-family: 'Open Sans', sans-serif;
        border-radius: 0;
    }

    #footer-mail-form{
        font-family: 'Open Sans', sans-serif;
        outline: #333333;
        border-color: #333333;
        border-radius: 0;
        padding: .5rem;
        padding-left: 1rem;
        padding-right: 1rem;
        box-shadow: none;
        color: #333333;
        font-size: .9rem;
        font-weight: 600;
    }

    .footer-facebook, .footer-instagram, .footer-twitter, .footer-linkedin{
        font-size: 1.7rem;
    }

    .footer-facebook{
        color: #316FF6;
    }

    .footer-instagram{
        color: #4c68d7;
    }

    .footer-twitter{
        color: #1DA1F2;
    }

    .footer-linkedin{
        color: #0077b5;
    }
</style>
<footer class="mt-auto">
    <div style="background-color: #FFFFFF;width: 100%;padding: 2rem;">
        @section("footer")
            <div class="row justify-content-center">
                <div class="col-lg-5 d-flex justify-content-center justify-content-lg-end align-items-center">
                    <div class="row row-cols-auto g-4 justify-content-center">
                        <div class="col p-0">
                            <div class="card h-100" style="border: none;">
                                <div class="card-body text-center" style="text-transform: uppercase;font-family: 'Open Sans', sans-serif;">
                                    <h5 class="card-title">About</h5>
                                    <div class="my-3" style="width: 10rem;height: .1rem;background-color: #333333;"></div>
                                    <div>
                                        <div class="my-2"><a href="#" target="_blank" style="text-decoration: none;color: #000;">My Story</a></div>
                                        <div class="my-2"><a href="#" target="_blank" style="text-decoration: none;color: #000;">Blog</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col p-0">
                            <div class="card h-100" style="border: none;">
                                <div class="card-body text-center" style="text-transform: uppercase;font-family: 'Open Sans', sans-serif;">
                                    <h5 class="card-title">Follow Us</h5>
                                    <div class="my-3" style="width: 10rem;height: .1rem;background-color: #333333;"></div>
                                    <div>
                                        <div class="my-2">
                                            <li class="me-2" style="display:inline;list-style-type:none;font-size: 1.3rem;">
                                                <a href="#" target="_blank" class="footer-facebook"><i class="bi bi-facebook"></i></a>
                                            </li>
                                            <li class="ms-2" style="display:inline;list-style-type:none;font-size: 1.3rem;">
                                                <a href="#" target="_blank" class="footer-instagram"><i class="bi bi-instagram"></i></a>
                                            </li>
                                        </div>
                                        <div class="my-2">
                                            <li class="me-2" style="display:inline;list-style-type:none;font-size: 1.3rem;">
                                                <a href="#" target="_blank" class="footer-twitter"><i class="bi bi-twitter"></i></a>
                                            </li>
                                            <li class="ms-2" style="display:inline;list-style-type:none;font-size: 1.3rem;">
                                                <a href="#" target="_blank" class="footer-linkedin"><i class="bi bi-linkedin"></i></a>
                                            </li>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1 d-none d-lg-flex justify-content-center align-items-center">
                    <div style="height: 20rem;width: .1rem;background-color: #333333;"></div>
                </div>
                <div class="col-lg-1 d-flex d-lg-none justify-content-center align-items-center mt-4 mb-5">
                    <div style="height: .1rem;width: 90%;background-color: #333333;"></div>
                </div>
                <div class="col-lg-5 d-flex justify-content-center justify-content-lg-start align-items-center">
                    <div style="color: #333333;width: 28rem;">
                        Welcome to Finovestindia, a dynamic educational venture committed to providing high-quality training and academic services. Our company is dedicated to fostering a learning environment that empowers individuals to reach their full potential. With a focus on innovation, expertise, and personalized guidance, we aim to make a positive impact on education and skill development. Join us on the journey of knowledge and growth as we strive to shape a brighter future for our clients.
                    </div>
                </div>
            </div>
        @show
    </div>
</footer>
